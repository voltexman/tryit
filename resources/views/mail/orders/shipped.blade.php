<x-mail::message>
    # Замовлення

    - **Замовник:** {{ $order->name }}
    - **Контакт:** {{ $order->contact }}
    - **Послуга:** {{ $order->service }}

    **Текст повідомлення:**
    {{ nl2br(e($order->text)) }}
</x-mail::message>
