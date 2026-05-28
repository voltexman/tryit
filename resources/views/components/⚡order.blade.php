<?php

use App\Rules\Recaptcha;
use App\Notifications\OrderSubmitted;
use Illuminate\Support\Facades\Notification;
use App\Livewire\Forms\OrderForm;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithFileUploads;

new class extends Component {
    use WithFileUploads;

    public OrderForm $order;

    public $images = [];

    #[On('setService')]
    public function setService(string $service): void
    {
        $this->order->service = $service;
    }

    public function updatedImages()
    {
        $this->validate(['images.*' => 'image|max:5120']);
    }

    public function removeImage($index)
    {
        array_splice($this->images, $index, 1);
    }

    public function updated(string $property): void
    {
        if ($property === 'order.is_urgent' && $this->order->is_urgent) {
            $this->order->options['preferred_date'] = null;
        }
    }

    protected function resetForm(): void
    {
        $this->images = [];

        $this->order->reset();
    }

    public function save($recaptchaToken = null)
    {
        validator(['recaptcha' => $recaptchaToken], ['recaptcha' => [new Recaptcha()]])->validate();

        $order = $this->order->store($this->images);

        Notification::routes([
            'mail' => config('services.mail.admin.email'),
            'telegram' => config('services.telegram-bot-api.chat_id'),
        ])->notify(new OrderSubmitted($order));

        $this->resetForm();

        session()->flash('success', 'Ваше замовлення успішно відправлено!');
    }
};
?>

<x-offcanvas size="lg" x-on:open-order-offcanvas.window="open = true">
    <x-slot:trigger wire:ignore>
        {{ $slots['trigger'] }}
    </x-slot>

    @session('success')
        <div class="h-full flex items-center justify-center">
            <div class="flex flex-col items-center">
                <x-lucide-circle-check class="size-24 stroke-1 text-tryit-orange mb-5" />
                <span class="font-semibold">Дякуємо, заявка відправлена</span>
                <span class="text-sm font-medium">Ми зв'яжемось з Вами найближчим часом</span>
            </div>
        </div>
    @else
        <x-slot:header>
            <div class="flex flex-col gap-0.5">
                <div class="flex items-center gap-1.5">
                    <x-lucide-sparkles class="size-5 shrink-0" />
                    <span>Замовлення послуги</span>
                </div>
                @if ($order->service)
                    <span class="text-xs font-normal tracking-normal font-sans text-slate-500 pl-0.5">
                        {{ $order->service }}
                    </span>
                @endif
            </div>
        </x-slot>

        <form x-data="{
            submit() {
                window.executeRecaptcha('order_submit')
                    .then(token => $wire.save(token))
                    .catch(err => {
                        console.error('reCAPTCHA error:', err);
                        alert('Помилка reCAPTCHA. Спробуйте ще раз.');
                    });
            }
        }" @submit.prevent="submit()" x-on:submit-form.window="open && submit()"
            class="space-y-5 pb-5">

            <!-- ПОМИЛКА КАПЧІ (Якщо робот або збій верифікації) -->
            @error('recaptcha')
                <div class="p-3 text-sm text-red-600 bg-red-50 rounded-lg border border-red-200">
                    {{ $message }}
                </div>
            @enderror

            <!-- ОСНОВНІ ПОЛЯ -->
            <div class="space-y-5">
                <h3 class="font-display text-lg font-semibold text-slate-900">Ваші дані</h3>

                <div>
                    <x-forms.input required wire:model.trim="order.name" icon="user" maxLength="40"
                        placeholder="Ваше ім'я" wire:target="save" size="lg" wire:loading.attr="disabled" />
                    @error('order.name')
                        <x-forms.error class="mt-2" :message="$message" />
                    @enderror
                </div>

                <div>
                    <x-forms.input required wire:model.trim="order.contact" icon="mail" maxLength="40"
                        placeholder="Пошта або телефон" wire:target="save" size="lg" wire:loading.attr="disabled" />
                    @error('order.contact')
                        <x-forms.error class="mt-2" :message="$message" />
                    @enderror
                </div>

                <div>
                    <x-forms.input required wire:model.trim="order.address" icon="map-pin" placeholder="Адреса об'єкта"
                        wire:target="save" size="lg" wire:loading.attr="disabled" />
                    @error('order.address')
                        <x-forms.error class="mt-2" :message="$message" />
                    @enderror
                </div>
            </div>

            <!-- ПОСЛУГА -->
            @if (!$order->service)
                <div>
                    <x-forms.select required wire:model.live="order.service" icon="sparkles" placeholder="Оберіть послугу"
                        size="lg">
                        <option value="" disabled selected></option>
                        @foreach (\App\Enums\ServiceEnum::cases() as $serviceCase)
                            <option value="{{ $serviceCase->value }}">{{ $serviceCase->value }}</option>
                        @endforeach
                    </x-forms.select>
                    @error('order.service')
                        <x-forms.error class="mt-2" :message="$message" />
                    @enderror
                </div>
            @endif

            @if ($order->service === \App\Enums\ServiceEnum::CUSTOM->value)
                <div>
                    <x-forms.input required wire:model.trim="order.options.custom_service" icon="sparkles"
                        placeholder="Вкажіть назву власної послуги" wire:target="save" size="lg"
                        wire:loading.attr="disabled" />
                    @error('order.options.custom_service')
                        <x-forms.error class="mt-2" :message="$message" />
                    @enderror
                </div>
            @endif

            <!-- ХАРАКТЕРИСТИКИ ОБ'ЄКТУ -->
            <div x-data="{ expanded: false }" class="p-5 bg-slate-50 rounded-xl border border-slate-200">
                <button type="button" @click="expanded = !expanded"
                    class="w-full flex items-center justify-between group transition-all duration-300 cursor-pointer"
                    :class="expanded ? '' : ''">
                    <div class="space-y-1 text-left">
                        <h3
                            class="font-display text-lg font-semibold text-slate-900 group-hover:text-emerald-600 transition-colors">
                            Характеристики об'єкту</h3>
                        <p class="text-xs text-slate-500/60 font-medium italic">
                            Ці дані не є обов'язковими, проте вони допоможуть нам точніше оцінити обсяг робіт
                        </p>
                    </div>
                    <div class="size-8 rounded-full bg-white border border-slate-200 flex items-center justify-center transition-transform duration-300 shrink-0 ml-4"
                        :class="expanded ? 'rotate-180 border-emerald-500 text-emerald-600' : 'text-slate-400'">
                        <x-lucide-chevron-down class="size-5" />
                    </div>
                </button>

                <div x-show="expanded" x-collapse x-cloak class="space-y-5 pt-5">
                    <!-- Площа -->
                    <div class="w-38">
                        <x-forms.input size="lg" wire:model.trim="order.square_area" label="Площа (м²)" type="number"
                            step="0.1" placeholder="250" wire:target="save" wire:loading.attr="disabled" />
                        @error('order.square_area')
                            <x-forms.error class="mt-2" :message="$message" />
                        @enderror
                    </div>

                    <!-- Чекбокси: ліфт, вода, паркування - як квадратні кнопки в ряд -->
                    <div class="space-y-2.5">
                        <label class="block text-sm font-medium text-slate-700 mb-2.5">Умови на об'єкті</label>
                        <div class="flex gap-2.5">
                            <label class="size-25 flex items-center justify-center cursor-pointer group">
                                <input type="checkbox" wire:model="order.has_elevator" class="hidden" />
                                <div class="size-25 flex flex-col justify-center items-center rounded-xl border-2 text-center transition-all duration-300 group-hover:border-emerald-400 group-hover:bg-emerald-100/60"
                                    :class="$wire.order.has_elevator ? 'border-emerald-500 bg-emerald-50 text-emerald-600' :
                                        'border-slate-200 bg-slate-100 text-slate-700'">
                                    <x-lucide-arrow-up-down class="size-6 mx-auto mb-2 transition-colors" />
                                    <span class="text-xs font-semibold">Ліфт</span>
                                </div>
                            </label>

                            <label class="size-25 flex items-center justify-center cursor-pointer group">
                                <input type="checkbox" wire:model="order.has_water" class="hidden" />
                                <div class="size-25 flex flex-col justify-center items-center rounded-xl border-2 text-center transition-all duration-300 group-hover:border-emerald-400 group-hover:bg-emerald-100/60"
                                    :class="$wire.order.has_water ? 'border-emerald-500 bg-emerald-50 text-emerald-600' :
                                        'border-slate-200 bg-slate-100 text-slate-700'">
                                    <x-lucide-droplets class="size-6 mx-auto mb-2 transition-colors" />
                                    <span class="text-xs font-semibold">Вода</span>
                                </div>
                            </label>

                            <label class="size-25 flex items-center justify-center cursor-pointer group">
                                <input type="checkbox" wire:model="order.has_parking" class="hidden" />
                                <div class="size-25 flex flex-col justify-center items-center rounded-xl border-2 text-center transition-all duration-300 group-hover:border-emerald-400 group-hover:bg-emerald-100/60"
                                    x-bind:class="$wire.order.has_parking ? 'border-emerald-400 bg-emerald-50 text-emerald-600' :
                                        'border-slate-200 bg-slate-100 text-slate-700'">
                                    <x-lucide-car class="size-6 mx-auto mb-2 transition-colors" />
                                    <span class="text-xs font-semibold">Паркування</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <!-- РІВЕНЬ ЗАБРУДНЕННЯ - Range Slider -->
                    <div>
                        <div class="flex items-baseline justify-between">
                            <h3 class="font-display text-lg font-semibold text-slate-900">Рівень забруднення</h3>
                            <span class="text-sm font-medium text-emerald-600 bg-emerald-50 px-3 py-1 rounded-full">
                                <span x-text="$wire.order.contamination_level ?? '3'"></span>/5
                            </span>
                        </div>

                        <div class="space-y-4">
                            <!-- Range Slider -->
                            <div class="relative pt-2 pb-1" x-data="{ level: $wire.order.contamination_level ?? '3' }"
                                @contamination-level-updated.window="level = $event.detail">
                                <input type="range" wire:model="order.contamination_level"
                                    @change="$dispatch('contamination-level-updated', parseInt($el.value))" min="1"
                                    max="5" step="1"
                                    class="w-full h-2 rounded-lg appearance-none cursor-pointer accent-emerald-500 range-slider"
                                    :style="`background: linear-gradient(to right, #10b981 0%, #10b981 calc((${level} - 1) * 25%), #e2e8f0 calc((${level} - 1) * 25%), #e2e8f0 100%);`" />
                            </div>

                            <!-- Labels для кожної позиції -->
                            <div class="flex justify-between text-center">
                                <div class="flex flex-col items-center flex-1">
                                    <div class="text-2xl mb-2"
                                        :class="$wire.order.contamination_level == '1' ? 'text-emerald-500 opacity-100' :
                                            'text-slate-500 opacity-40'">
                                        <x-lucide-leaf class="size-8 shrink-0" stroke-width="1.5" />
                                    </div>
                                    <span class="text-xs font-medium text-slate-600">Мінімальне</span>
                                    <span class="text-[10px] text-slate-500">Пилок</span>
                                </div>
                                <div class="flex flex-col items-center flex-1">
                                    <div class="text-2xl mb-2"
                                        :class="$wire.order.contamination_level == '2' ? 'text-emerald-500 opacity-100' :
                                            'text-slate-500 opacity-40'">
                                        <x-lucide-brush-cleaning class="size-8 shrink-0" stroke-width="1.5" />
                                    </div>
                                    <span class="text-xs font-medium text-slate-600">Легке</span>
                                    <span class="text-[10px] text-slate-500">Дрібне</span>
                                </div>
                                <div class="flex flex-col items-center flex-1">
                                    <div class="text-2xl mb-2"
                                        :class="$wire.order.contamination_level == '3' ? 'text-emerald-500 opacity-100' :
                                            'text-slate-500 opacity-40'">
                                        <x-lucide-soap-dispenser-droplet class="size-8 shrink-0" stroke-width="1.5" />
                                    </div>
                                    <span class="text-xs font-medium text-slate-600">Середнє</span>
                                    <span class="text-[10px] text-slate-500">Звичайне</span>
                                </div>
                                <div class="flex flex-col items-center flex-1">
                                    <div class="text-2xl mb-2"
                                        :class="$wire.order.contamination_level == '4' ? 'text-emerald-500 opacity-100' :
                                            'text-slate-500 opacity-40'">
                                        <x-lucide-shield-alert class="size-8 shrink-0" stroke-width="1.5" />
                                    </div>
                                    <span class="text-xs font-medium text-slate-600">Важке</span>
                                    <span class="text-[10px] text-slate-500">Забруднено</span>
                                </div>
                                <div class="flex flex-col items-center flex-1">
                                    <div class="text-2xl mb-2"
                                        :class="$wire.order.contamination_level == '5' ? 'text-emerald-500 opacity-100' :
                                            'text-slate-500 opacity-40'">
                                        <x-lucide-flame class="size-8 shrink-0" stroke-width="1.5" />
                                    </div>
                                    <span class="text-xs font-medium text-slate-600">Критичне</span>
                                    <span class="text-[10px] text-slate-500">Ремонт</span>
                                </div>
                            </div>
                        </div>
                        @error('order.contamination_level')
                            <x-forms.error :message="$message" />
                        @enderror
                    </div>
                </div>
            </div>

            <!-- ЗАВАНТАЖЕННЯ ЗОБРАЖЕНЬ -->
            <div class="space-y-5">
                <h3 class="font-display text-lg font-semibold text-slate-900">Фото об'єкту</h3>

                <div class="flex flex-col gap-2.5">
                    <label
                        class="w-fit flex items-center gap-2.5 px-5 py-2.5 bg-slate-100 hover:bg-slate-200 text-slate-600 rounded-full cursor-pointer transition-colors border border-slate-200">
                        <x-lucide-image class="size-5" />
                        <span class="text-sm font-semibold">Додати фото</span>
                        <input type="file" wire:model="images" multiple class="hidden" accept="image/*">
                    </label>
                    <span class="text-[10px] text-gray-400 uppercase font-bold tracking-tight">
                        До 4 зображень (макс. 5MB кожне)
                    </span>
                </div>

                @error('images.*')
                    <x-forms.error :message="$message" />
                @enderror

                @if ($images)
                    <div class="flex flex-wrap gap-3 p-4 bg-slate-50 rounded-2xl border border-dashed border-slate-200">
                        @foreach ($images as $index => $image)
                            <div wire:key="order-image-{{ $index }}"
                                class="relative group size-20 rounded-xl overflow-hidden shadow-sm border border-slate-200">
                                <img src="{{ $image->temporaryUrl() }}" class="size-full object-cover">
                                <button type="button" wire:click="removeImage({{ $index }})"
                                    class="absolute top-1 right-1 size-6 bg-red-500 text-white rounded-full flex items-center justify-center md:opacity-0 md:group-hover:opacity-100 transition-opacity shadow-lg cursor-pointer">
                                    <x-lucide-x class="size-4" />
                                </button>
                            </div>
                        @endforeach

                        @if (count($images) < 4)
                            <label
                                class="size-20 rounded-xl border-2 border-dashed border-slate-200 flex flex-col items-center justify-center text-slate-400 hover:border-emerald-500 hover:text-emerald-500 cursor-pointer transition-all">
                                <x-lucide-plus class="size-6" />
                                <input type="file" wire:model="images" multiple class="hidden" accept="image/*">
                            </label>
                        @endif
                    </div>
                @endif
            </div>

            <!-- ДОДАТКОВІ ПРИМІТКИ -->
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-2">Додаткові примітки</label>
                <x-forms.textarea wire:model="order.text" placeholder="Розкажіть про особливості об'єкту"
                    wire:target="save" wire:loading.attr="disabled" rows="4" />
            </div>

            <!-- ТЕРМІНОВІСТЬ -->
            <div>
                <label
                    class="flex items-center justify-between p-4 rounded-xl border cursor-pointer transition-all duration-200"
                    x-bind:class="$wire.order.is_urgent ?
                        'border-orange-300 bg-orange-50 hover:bg-orange-100/70 ring-1 ring-orange-300' :
                        'border-slate-200 bg-slate-100 hover:bg-slate-200 hover:border-slate-300'">
                    <div class="flex items-center gap-3">
                        <x-lucide-zap class="size-6 shrink-0 transition-colors"
                            x-bind:class="$wire.order.is_urgent ? 'text-orange-500' : 'text-slate-400'" />
                        <div class="flex flex-col">
                            <span class="text-sm font-semibold text-slate-600 transition-colors"
                                x-bind:class="$wire.order.is_urgent ? 'text-orange-900' : 'text-slate-600'">
                                Термінове прибирання
                            </span>
                            <span class="text-xs text-slate-400">
                                Приїдемо до вас якнайшвидше!
                            </span>
                        </div>
                    </div>
                    <input type="checkbox" wire:model.live="order.is_urgent"
                        class="size-5 accent-orange-500 rounded-md cursor-pointer shrink-0" />
                </label>
            </div>

            <!-- ДАТА ПРИБИРАННЯ -->
            <div x-show="!$wire.order.is_urgent" x-collapse x-cloak>
                <div x-data="{
                    init() {
                        let picker = window.flatpickr(this.$refs.datePicker, {
                            dateFormat: 'Y-m-d',
                            minDate: 'today',
                            defaultDate: $wire.order.options?.preferred_date || null,
                            onChange: (selectedDates, dateStr, instance) => {
                                $wire.set('order.options.preferred_date', dateStr);
                            }
                        });
                
                        $wire.watch('order.options.preferred_date', value => {
                            if (!value) {
                                picker.clear();
                            } else {
                                picker.setDate(value);
                            }
                        });
                    }
                }" class="space-y-2">
                    <label class="block text-sm font-medium text-slate-700">Бажана дата прибирання</label>
                    <div class="relative">
                        <x-forms.input x-ref="datePicker" placeholder="Оберіть бажану дату" icon="calendar" readonly
                            size="lg" />
                    </div>
                </div>
            </div>

            <!-- КНОПКИ ДІЇ -->
            <x-slot:footer>
                <button type="button" @click="open = false"
                    class="size-10 flex shrink-0 justify-center items-center bg-slate-200 border border-slate-300 rounded-full cursor-pointer hover:bg-slate-50 transition-colors">
                    <x-lucide-x class="size-5 stroke-slate-600" />
                </button>
                <!-- КНОПКА ВІДПРАВКИ -->
                <button type="button" @click="$dispatch('submit-form')" wire:target="save" wire:loading.attr="disabled"
                    class="flex-1 w-full px-6 py-2.5 text-base bg-emerald-500 hover:bg-emerald-600 text-white font-semibold rounded-full cursor-pointer transition-colors disabled:opacity-50 flex items-center justify-center gap-2">
                    <span wire:target="save" wire:loading.remove>Замовити</span>
                    <span wire:target="save" wire:loading>Відправка...</span>
                    <x-lucide-loader-2 wire:target="save" wire:loading class="w-4 h-4 animate-spin" />
                </button>
            </x-slot>
        </form>
    @endsession
</x-offcanvas>
