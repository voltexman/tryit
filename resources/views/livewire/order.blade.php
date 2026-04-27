@session('success')
    <div class="h-96 flex items-center justify-center">
        <div class="flex flex-col items-center">
            <x-lucide-circle-check class="size-24 stroke-1 text-tryit-orange mb-5" />
            <span class="font-semibold">Дякуємо, заявка відправлена</span>
            <span class="text-sm font-medium">Ми зв'яжемось з Вами найближчим часом</span>
        </div>
    </div>
@else
    <x-offcanvas id="orderOffcanvas" title="Замовити послугу">
        <form wire:submit.prevent="save" class="space-y-6">

            <!-- ОСНОВНІ ПОЛЯ -->
            <div class="space-y-4">
                <h3 class="font-display text-lg font-semibold text-slate-900">Ваші дані</h3>

                <div>
                    <x-forms.input wire:model="order.name" maxLength="40" placeholder="Ваше ім'я" wire:target="save"
                        size="lg" wire:loading.attr="disabled" />
                    @error('order.name')
                        <x-forms.error class="mt-2" :message="$message" />
                    @enderror
                </div>

                <div>
                    <x-forms.input wire:model="order.contact" maxLength="40" placeholder="Пошта або телефон"
                        wire:target="save" size="lg" wire:loading.attr="disabled" />
                    @error('order.contact')
                        <x-forms.error class="mt-2" :message="$message" />
                    @enderror
                </div>

                <div>
                    <x-forms.input wire:model="order.address" placeholder="Адреса об'єкта" wire:target="save" size="lg"
                        wire:loading.attr="disabled" />
                    @error('order.address')
                        <x-forms.error class="mt-2" :message="$message" />
                    @enderror
                </div>
            </div>

            <!-- ПОСЛУГА -->
            @if (!$order->service)
                <div class="space-y-3">
                    <h3 class="font-display text-lg font-semibold text-slate-900">Послуга</h3>
                    <div class="space-y-2">
                        @foreach (\App\Enums\ServiceEnum::cases() as $serviceCase)
                            <label
                                class="flex items-center p-3 rounded-lg border border-slate-200 cursor-pointer hover:bg-slate-50 transition-colors"
                                :class="$wire.order.service === '{{ $serviceCase->value }}' ?
                                    'border-emerald-500 bg-emerald-50' : ''">
                                <input type="radio" wire:model="order.service" value="{{ $serviceCase->value }}"
                                    class="w-4 h-4 accent-emerald-500" />
                                <span class="ml-3 text-sm font-medium text-slate-700">{{ $serviceCase->value }}</span>
                            </label>
                        @endforeach
                    </div>
                    @error('order.service')
                        <x-forms.error :message="$message" />
                    @enderror
                </div>
            @endif

            <!-- ХАРАКТЕРИСТИКИ ОБ'ЄКТУ -->
            <div class="space-y-4">
                <div class="space-y-1">
                    <h3 class="font-display text-lg font-semibold text-slate-900">Характеристики об'єкту</h3>
                    <p class="text-xs leading-relaxed text-slate-500 font-medium italic">
                        Ці дані не є обов'язковими, проте вони допоможуть нам точніше оцінити обсяг робіт та підготувати
                        найкращу пропозицію саме для вас.
                    </p>
                </div>

                <!-- Площа, Кімнати та Поверхи в одному рядку -->
                <div class="grid grid-cols-3 gap-2.5 lg:gap-5">
                    <!-- Площа -->
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-2">Площа (м²)</label>
                        <x-forms.input size="lg" wire:model="order.square_area" type="number" step="0.1"
                            placeholder="250" wire:target="save" wire:loading.attr="disabled" />
                        @error('order.square_area')
                            <x-forms.error class="mt-2" :message="$message" />
                        @enderror
                    </div>

                    <!-- Кількість кімнат -->
                    <div>
                        <label class="flex items-center text-sm font-medium text-slate-700 mb-2">
                            <span>Кімнат</span>
                            <x-tooltip content="Вкажіть кількість кімнат, офісних приміщень, цехів або окремих кабінетів" />
                        </label>
                        <x-forms.input size="lg" wire:model="order.room_count" type="number" wire:target="save"
                            placeholder="3" wire:loading.attr="disabled" />
                        @error('order.room_count')
                            <x-forms.error class="mt-2" :message="$message" />
                        @enderror
                    </div>

                    <!-- Кількість поверхів -->
                    <div>
                        <label class="flex items-center text-sm font-medium text-slate-700 mb-2">
                            <span>Поверхів</span>
                            <x-tooltip
                                content="Загальна кількість поверхів у приміщенні або номер поверху, на якому потрібно прибрати" />
                        </label>
                        <x-forms.input size="lg" wire:model="order.floor_count" type="number" placeholder="5"
                            wire:target="save" wire:loading.attr="disabled" />
                        @error('order.floor_count')
                            <x-forms.error class="mt-2" :message="$message" />
                        @enderror
                    </div>
                </div>

                <!-- Чекбокси: ліфт, вода, паркування - як квадратні кнопки в ряд -->
                <div class="space-y-2.5">
                    <label class="block text-sm font-medium text-slate-700 mb-2.5">Умови на об'єкті</label>
                    <div class="flex gap-2.5 lg:gap-5">
                        <label class="flex items-center justify-center cursor-pointer group">
                            <input type="checkbox" wire:model="order.has_elevator" class="hidden" />
                            <div class="size-25 lg:size-30 flex flex-col justify-center items-center rounded-xl border-2 text-center transition-all duration-300 group-hover:border-emerald-400 group-hover:bg-emerald-100/60"
                                :class="$wire.order.has_elevator ? 'border-emerald-500 bg-emerald-50 text-emerald-600' :
                                    'border-slate-200 bg-slate-50 text-slate-700'">
                                <x-lucide-arrow-up-down class="size-6 mx-auto mb-2 transition-colors" />
                                <span class="text-xs font-semibold">Ліфт</span>
                            </div>
                        </label>

                        <label class="size-30 flex items-center justify-center cursor-pointer group">
                            <input type="checkbox" wire:model="order.has_water" class="hidden" />
                            <div class="size-25 lg:size-30 flex flex-col justify-center items-center rounded-xl border-2 text-center transition-all duration-300 group-hover:border-emerald-400 group-hover:bg-emerald-100/60"
                                :class="$wire.order.has_water ? 'border-emerald-500 bg-emerald-50 text-emerald-600' :
                                    'border-slate-200 bg-slate-50 text-slate-700'">
                                <x-lucide-droplets class="size-6 mx-auto mb-2 transition-colors" />
                                <span class="text-xs font-semibold">Вода</span>
                            </div>
                        </label>

                        <label class="size-30 flex items-center justify-center cursor-pointer group">
                            <input type="checkbox" wire:model="order.has_parking" class="hidden" />
                            <div class="size-25 lg:size-30 flex flex-col justify-center items-center rounded-xl border-2 text-center transition-all duration-300 group-hover:border-emerald-400 group-hover:bg-emerald-100/60"
                                x-bind:class="$wire.order.has_parking ? 'border-emerald-400 bg-emerald-50 text-emerald-600' :
                                    'border-slate-200 bg-slate-50 text-slate-700'">
                                <x-lucide-car class="size-6 mx-auto mb-2 transition-colors" />
                                <span class="text-xs font-semibold">Паркування</span>
                            </div>
                        </label>
                    </div>
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
                                :class="$wire.order.contamination_level == '1' ? 'opacity-100' : 'opacity-40'">
                                ✨
                            </div>
                            <span class="text-xs font-medium text-slate-600">Мінімальне</span>
                            <span class="text-[10px] text-slate-500">Пилок</span>
                        </div>
                        <div class="flex flex-col items-center flex-1">
                            <div class="text-2xl mb-2"
                                :class="$wire.order.contamination_level == '2' ? 'opacity-100' : 'opacity-40'">
                                🧹
                            </div>
                            <span class="text-xs font-medium text-slate-600">Легке</span>
                            <span class="text-[10px] text-slate-500">Дрібне</span>
                        </div>
                        <div class="flex flex-col items-center flex-1">
                            <div class="text-2xl mb-2"
                                :class="$wire.order.contamination_level == '3' ? 'opacity-100' : 'opacity-40'">
                                🧼
                            </div>
                            <span class="text-xs font-medium text-slate-600">Середнє</span>
                            <span class="text-[10px] text-slate-500">Звичайне</span>
                        </div>
                        <div class="flex flex-col items-center flex-1">
                            <div class="text-2xl mb-2"
                                :class="$wire.order.contamination_level == '4' ? 'opacity-100' : 'opacity-40'">
                                💪
                            </div>
                            <span class="text-xs font-medium text-slate-600">Важке</span>
                            <span class="text-[10px] text-slate-500">Забруднено</span>
                        </div>
                        <div class="flex flex-col items-center flex-1">
                            <div class="text-2xl mb-2"
                                :class="$wire.order.contamination_level == '5' ? 'opacity-100' : 'opacity-40'">
                                🔥
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

            <!-- ТЕРМІНОВІСТЬ -->
            <div>
                <label
                    class="flex items-center p-3 rounded-lg border border-slate-200 cursor-pointer hover:bg-slate-50 transition-colors"
                    :class="$wire.order.is_urgent ? 'border-orange-500 bg-orange-50' : ''">
                    <input type="checkbox" wire:model="order.is_urgent" class="w-4 h-4 accent-orange-500" />
                    <div class="ml-3 flex items-center gap-2">
                        <x-lucide-zap class="w-5 h-5 text-orange-500" />
                        <span class="text-sm font-medium text-slate-700">Терміне прибирання</span>
                    </div>
                </label>
            </div>

            <!-- ЗАВАНТАЖЕННЯ ЗОБРАЖЕНЬ -->
            <div class="space-y-4">
                <h3 class="font-display text-lg font-semibold text-slate-900">Фото об'єкту</h3>

                <div class="flex flex-col gap-3">
                    <label
                        class="w-fit flex items-center gap-2.5 px-5 py-2.5 bg-slate-100 hover:bg-slate-200 text-slate-600 rounded-full cursor-pointer transition-colors border border-slate-200">
                        <x-lucide-image class="size-5" />
                        <span class="text-sm font-semibold">Додати фото</span>
                        <input type="file" wire:model="images" multiple class="hidden" accept="image/*">
                    </label>
                    <span class="text-[10px] text-gray-400 uppercase font-bold tracking-tight">До 4 зображень (макс. 5MB
                        кожне)</span>
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

            <!-- КНОПКА ВІДПРАВКИ -->
            <div class="sticky bottom-0 bg-white border-t border-slate-200 -mx-6 px-6 py-4 flex gap-3">
                <button type="button" @click="open = false"
                    class="flex-1 px-4 py-3 border border-slate-300 text-slate-700 font-semibold rounded-lg hover:bg-slate-50 transition-colors">
                    Скасувати
                </button>
                <button type="submit" wire:target="save" wire:loading.attr="disabled"
                    class="flex-1 px-4 py-3 bg-emerald-500 hover:bg-emerald-600 text-white font-semibold rounded-lg transition-colors disabled:opacity-50 flex items-center justify-center gap-2">
                    <span wire:target="save" wire:loading.remove>Замовити</span>
                    <span wire:target="save" wire:loading>Відправка...</span>
                    <x-lucide-loader-2 wire:target="save" wire:loading class="w-4 h-4 animate-spin" />
                </button>
            </div>
        </form>
    </x-offcanvas>
@endsession
