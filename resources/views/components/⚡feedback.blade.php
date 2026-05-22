<?php

use Livewire\Component;
use Livewire\Attributes\Lazy;
use Illuminate\Support\Facades\Notification;
use App\Notifications\FeedbackSubmitted;
use App\Livewire\Forms\FeedbackForm;
use Livewire\WithFileUploads;

new #[Lazy] class extends Component {
    use WithFileUploads;

    public FeedbackForm $feedback;

    public $images = [];

    public function updatedImages()
    {
        $this->validate([
            'images.*' => 'image|max:5120', // 5MB max
        ]);
    }

    public function removeImage($index)
    {
        array_splice($this->images, $index, 1);
    }

    public function save($recaptchaToken = null)
    {
        $feedback = $this->feedback->store($this->images, $recaptchaToken);

        Notification::routes([
            'mail' => config('services.mail.admin.email'),
            'telegram' => config('services.telegram-bot-api.chat_id'),
        ])->notify(new FeedbackSubmitted($feedback));

        $this->images = [];

        $this->feedback->reset();

        session()->flash('success');
    }
};
?>

@session('success')
    <div class="text-center animate-in fade-in zoom-in duration-500">
        <div class="size-24 bg-green-50 text-green-500 rounded-full flex items-center justify-center mx-auto mb-5">
            <x-lucide-circle-check class="size-12" />
        </div>
        <h3 class="text-2xl font-display font-bold text-tryit-dark mb-2">Надіслано!</h3>
        <p class="text-sm text-gray-500">
            Дякуємо за ваше повідомлення.<br>Ми зв'яжемося з вами найближчим часом.
        </p>
        <button wire:click="$refresh()"
            class="mt-5 text-tryit-orange hover:text-amber-600 transition-all duration-300 text-sm font-semibold hover:underline cursor-pointer">
            Надіслати ще раз
        </button>
    </div>
@else
    <form class="relative space-y-5">
        <div>
            <label class="text-xs font-bold uppercase tracking-wider text-gray-400 ml-1">Ваше ім'я</label>
            <x-forms.input size="lg" wire:model="feedback.name" placeholder="Як до вас звертатися?" />
        </div>

        <div>
            <label class="text-xs font-bold uppercase tracking-wider text-gray-400 ml-1">Ваші контакти</label>
            <x-forms.input size="lg" wire:model="feedback.contact" placeholder="Email або телефон" />
        </div>

        <div>
            <label class="text-xs font-bold uppercase tracking-wider text-gray-400 ml-1">Тема звернення</label>
            <select wire:model.live="feedback.topic"
                class="w-full h-14 px-6 text-base font-semibold text-slate-600 rounded-full bg-slate-100 border border-slate-200 focus:border-tryit-orange focus:ring-1 focus:ring-tryit-orange transition-colors">
                <option value="" disabled selected>Оберіть тему</option>
                @foreach (\App\Enums\FeedbackTopicEnum::cases() as $topic)
                    <option value="{{ $topic->value }}">{{ $topic->getLabel() }}</option>
                @endforeach
            </select>
            @error('feedback.topic')
                <x-forms.error class="ml-1" :message="$message" />
            @enderror
        </div>

        @if ($feedback->topic === \App\Enums\FeedbackTopicEnum::GRATITUDE->value)
            <div class="animate-in fade-in slide-in-from-top-2 duration-300">
                <label class="text-xs font-bold uppercase tracking-wider text-gray-400 ml-1">Оцінка</label>
                <div class="flex items-center gap-2 mt-2">
                    @for ($i = 1; $i <= 5; $i++)
                        <button type="button" wire:click="$set('feedback.rating', {{ $i }})"
                            class="focus:outline-none transition-transform hover:scale-110 active:scale-95 cursor-pointer">
                            <x-lucide-star
                                class="size-8 transition-colors {{ $feedback->rating >= $i ? 'fill-tryit-orange text-tryit-orange' : 'text-gray-300' }}" />
                        </button>
                    @endfor
                </div>
                @error('feedback.rating')
                    <x-forms.error class="ml-1 mt-1" :message="$message" />
                @enderror
            </div>
        @endif

        <div>
            <label class="text-xs font-bold uppercase tracking-wider text-gray-400 ml-1">Послуга (опціонально)</label>
            <select wire:model="feedback.service"
                class="w-full h-14 px-6 text-base font-semibold text-slate-600 rounded-full bg-slate-100 border border-slate-200 focus:border-tryit-orange focus:ring-1 focus:ring-tryit-orange transition-colors">
                <option value="">Не стосується конкретної послуги</option>
                @foreach (\App\Enums\ServiceEnum::cases() as $service)
                    <option value="{{ $service->value }}">{{ $service->getTitle() }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label class="text-xs font-bold uppercase tracking-wider text-gray-400 ml-1">Повідомлення</label>
            <x-forms.textarea required size="lg" wire:model="feedback.text" placeholder="Опишіть ваше питання..."
                rows="5" />
            @error('feedback.text')
                <x-forms.error class="ml-1" :message="$message" />
            @enderror
        </div>

        <!-- Завантаження зображень -->
        <div class="space-y-5">
            <div class="flex flex-col md:flex-row md:items-center gap-2.5 md:gap-5">
                <label
                    class="w-fit flex items-center gap-2.5 px-5 py-2.5 bg-slate-100 hover:bg-slate-200 text-slate-600 rounded-full cursor-pointer transition-colors border border-slate-200">
                    <x-lucide-image class="size-5" />
                    <span class="text-sm font-semibold">Додати фото</span>
                    <input type="file" wire:model="images" multiple class="hidden" accept="image/*">
                </label>
                <span class="text-xs text-gray-400 uppercase font-medium">До 5 зображень (макс. 5MB
                    кожне)</span>
            </div>

            @error('images.*')
                <x-forms.error :message="$message" />
            @enderror

            <!-- Прев'ю зображень -->
            @if ($images)
                <div
                    class="flex flex-wrap gap-2.5 md:gap-5 p-2.5 md:p-5 bg-slate-50 rounded-2xl border border-dashed border-slate-200">
                    @foreach ($images as $index => $image)
                        <div class="relative group size-20 rounded-xl overflow-hidden shadow-sm">
                            <img src="{{ $image->temporaryUrl() }}" class="size-full object-cover">
                            <button type="button" wire:click="removeImage({{ $index }})"
                                class="absolute top-1 right-1 size-6 bg-red-500 text-white rounded-full flex items-center justify-center md:opacity-0 md:group-hover:opacity-100 transition-opacity shadow-lg cursor-pointer">
                                <x-lucide-x class="size-4" />
                            </button>
                        </div>
                    @endforeach

                    @if (count($images) < 5)
                        <label
                            class="size-20 rounded-xl border-2 border-dashed border-slate-200 flex flex-col items-center justify-center text-slate-400 hover:border-tryit-orange hover:text-tryit-orange cursor-pointer transition-all">
                            <x-lucide-plus class="size-6" />
                            <input type="file" wire:model="images" multiple class="hidden" accept="image/*">
                        </label>
                    @endif
                </div>
            @endif
        </div>

        <x-button type="button" color="slate" size="lg" wire:target="save, images" wire:loading.attr="disabled"
            x-data
            x-on:click="
                grecaptcha.ready(() => {
                    grecaptcha.execute('{{ env('RECAPTCHA_SITE_KEY') }}', {
                        action: 'submit'
                    }).then(token => {
                        $wire.save(token)
                    })
                })
    ">
            <span wire:target="save" wire:loading.remove class="flex items-center gap-2">
                <span>Надіслати повідомлення</span>
                <x-lucide-send class="size-4" />
            </span>

            <span wire:target="save" wire:loading class="flex items-center gap-2">
                <span>Відправка...</span>
                <x-lucide-loader-2 class="size-4 shrink-0 inline-flex animate-spin" />
            </span>
        </x-button>
    </form>
@endsession

@assets
    <script src="https://www.google.com/recaptcha/api.js?render={{ env('RECAPTCHA_SITE_KEY') }}"></script>
@endassets
