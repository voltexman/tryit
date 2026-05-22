<?php

use App\Enums\ServiceEnum;
use App\Models\Order;
use App\Notifications\OrderSubmitted;
use NotificationChannels\Telegram\TelegramChannel;
use NotificationChannels\Telegram\TelegramFile;
use NotificationChannels\Telegram\TelegramMediaGroup;
use NotificationChannels\Telegram\TelegramMessage;

test('імейл-нотифікація містить рівень забруднення та умови на об\'єкті, якщо вони вказані', function () {
    $order = Order::factory()->create([
        'name' => 'Олексій',
        'contact' => '+380991234567',
        'address' => 'вул. Хрещатик, 1',
        'service' => ServiceEnum::DRY_CLEANING,
        'square_area' => 150.5,
        'room_count' => 3,
        'floor_count' => 2,
        'contamination_level' => '3', // 🧼 Середнє (Звичайне)
        'has_elevator' => true,
        'has_water' => true,
        'has_parking' => false,
        'text' => 'Потрібно прибрати якнайшвидше',
    ]);

    $notification = new OrderSubmitted($order);
    $mailMessage = $notification->toMail(new stdClass);

    $rendered = implode("\n", $mailMessage->introLines);

    expect($rendered)->toContain('**Рівень забруднення:** 🧼 Середнє (Звичайне)');
    expect($rendered)->toContain('**Умови на об\'єкті:** 🛗 ліфт, 🚰 вода');
    expect($rendered)->not->toContain('паркування');
});

test('імейл-нотифікація працює коректно, якщо рівень забруднення та умови не вказані', function () {
    $order = Order::factory()->create([
        'name' => 'Ірина',
        'contact' => 'test@example.com',
        'service' => ServiceEnum::DRY_CLEANING,
        'contamination_level' => null,
        'has_elevator' => false,
        'has_water' => false,
        'has_parking' => false,
    ]);

    $notification = new OrderSubmitted($order);
    $mailMessage = $notification->toMail(new stdClass);

    $rendered = implode("\n", $mailMessage->introLines);

    expect($rendered)->not->toContain('Рівень забруднення:');
    expect($rendered)->not->toContain('Умови на об\'єкті:');
});

test('телеграм-нотифікація містить рівень забруднення та умови на об\'єкті, якщо вони вказані', function () {
    config()->set('services.telegram-bot-api.token', 'test-token');
    config()->set('services.telegram-bot-api.chat_id', 'test-chat-id');

    $order = Order::factory()->create([
        'name' => 'Олексій',
        'contact' => '+380991234567',
        'address' => 'вул. Хрещатик, 1',
        'service' => ServiceEnum::DRY_CLEANING,
        'square_area' => 150.5,
        'room_count' => 3,
        'floor_count' => 2,
        'contamination_level' => '3', // 🧼 Середнє (Звичайне)
        'has_elevator' => true,
        'has_water' => true,
        'has_parking' => false,
        'text' => 'Потрібно прибрати якнайшвидше',
    ]);

    $notification = new OrderSubmitted($order);

    // Verify channel routing works
    $channels = $notification->via(new stdClass);
    expect($channels)->toContain(TelegramChannel::class);

    $telegramMessage = $notification->toTelegram(new stdClass);
    expect($telegramMessage)->toBeInstanceOf(TelegramMessage::class);

    $payload = $telegramMessage->toArray();
    $text = $payload['text'] ?? $payload['caption'] ?? '';

    expect($text)->toContain('*Рівень забруднення:* 🧼 Середнє (Звичайне)');
    expect($text)->toContain('*Умови на об\'єкті:* 🛗 ліфт, 🚰 вода');
    expect($text)->not->toContain('паркування');
});

test('телеграм-нотифікація використовує TelegramFile, якщо до замовлення додано зображення', function () {
    config()->set('services.telegram-bot-api.token', 'test-token');
    config()->set('services.telegram-bot-api.chat_id', 'test-chat-id');

    $order = Order::factory()->create([
        'name' => 'Олексій',
        'contact' => '+380991234567',
        'service' => ServiceEnum::DRY_CLEANING,
    ]);

    // Create a dummy file in storage to test
    $tempFile = tempnam(sys_get_temp_dir(), 'test_img');
    file_put_contents($tempFile, 'fake image data');

    $order->addMedia($tempFile)
        ->toMediaCollection('orders');

    $notification = new OrderSubmitted($order);
    $telegramMessage = $notification->toTelegram(new stdClass);

    expect($telegramMessage)->toBeInstanceOf(TelegramFile::class);

    $payload = getPayloadData($telegramMessage->toArray());
    expect($payload['photo'])->not->toBeEmpty();
    expect($payload['caption'] ?? '')->toContain('*Нове замовлення!*');

    @unlink($tempFile);
});

test('телеграм-нотифікація використовує TelegramMediaGroup, якщо до замовлення додано кілька зображень', function () {
    config()->set('services.telegram-bot-api.token', 'test-token');
    config()->set('services.telegram-bot-api.chat_id', 'test-chat-id');

    $order = Order::factory()->create([
        'name' => 'Олексій',
        'contact' => '+380991234567',
        'service' => ServiceEnum::DRY_CLEANING,
    ]);

    // Create 2 dummy files in storage to test
    $tempFile1 = tempnam(sys_get_temp_dir(), 'test_img1');
    $tempFile2 = tempnam(sys_get_temp_dir(), 'test_img2');
    file_put_contents($tempFile1, 'fake image data 1');
    file_put_contents($tempFile2, 'fake image data 2');

    $order->addMedia($tempFile1)->toMediaCollection('orders');
    $order->addMedia($tempFile2)->toMediaCollection('orders');

    $notification = new OrderSubmitted($order);
    $telegramMessage = $notification->toTelegram(new stdClass);

    expect($telegramMessage)->toBeInstanceOf(TelegramMediaGroup::class);

    $payload = getPayloadData($telegramMessage->toArray());

    // Check that 'media' field is present and contains both photos
    expect($payload['media'])->toBeString();

    $mediaArray = json_decode($payload['media'], true);
    expect($mediaArray)->toHaveCount(2);
    expect($mediaArray[0]['type'])->toBe('photo');
    expect($mediaArray[0]['caption'] ?? '')->toContain('*Нове замовлення!*');
    expect($mediaArray[0]['caption'] ?? '')->toContain('[🔗 Переглянути замовлення]');
    expect($mediaArray[1]['type'])->toBe('photo');
    expect($mediaArray[1]['caption'] ?? null)->toBeNull();

    @unlink($tempFile1);
    @unlink($tempFile2);
});

function getPayloadData(array $payload): array
{
    $data = [];
    foreach ($payload as $item) {
        if (is_array($item) && isset($item['name'], $item['contents'])) {
            $data[$item['name']] = $item['contents'];
        } else {
            return $payload;
        }
    }

    return $data;
}
