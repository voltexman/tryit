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
                    <x-forms.input 
                        wire:model="order.name" 
                        maxLength="40" 
                        placeholder="Ваше ім'я" 
                        wire:target="save"
                        size="lg"
                        wire:loading.attr="disabled" />
                    @error('order.name')
                        <x-forms.error class="mt-2" :message="$message" />
                    @enderror
                </div>

                <div>
                    <x-forms.input 
                        wire:model="order.contact" 
                        maxLength="40" 
                        placeholder="Пошта або телефон" 
                        wire:target="save"
                        size="lg"
                        wire:loading.attr="disabled" />
                    @error('order.contact')
                        <x-forms.error class="mt-2" :message="$message" />
                    @enderror
                </div>

                <div>
                    <x-forms.input 
                        wire:model="order.address" 
                        placeholder="Адреса об'єкта" 
                        wire:target="save"
                        size="lg"
                        wire:loading.attr="disabled" />
                    @error('order.address')
                        <x-forms.error class="mt-2" :message="$message" />
                    @enderror
                </div>
            </div>

            <!-- ПОСЛУГА -->
            <div class="space-y-3">
                <h3 class="font-display text-lg font-semibold text-slate-900">Послуга</h3>
                <div class="space-y-2">
                    @foreach (\App\Enums\ServiceEnum::cases() as $serviceCase)
                        <label class="flex items-center p-3 rounded-lg border border-slate-200 cursor-pointer hover:bg-slate-50 transition-colors"
                            :class="$wire.order.service === '{{ $serviceCase->value }}' ? 'border-emerald-500 bg-emerald-50' : ''">
                            <input 
                                type="radio" 
                                wire:model="order.service" 
                                value="{{ $serviceCase->value }}"
                                class="w-4 h-4 accent-emerald-500" />
                            <span class="ml-3 text-sm font-medium text-slate-700">{{ $serviceCase->value }}</span>
                        </label>
                    @endforeach
                </div>
                @error('order.service')
                    <x-forms.error :message="$message" />
                @enderror
            </div>

            <!-- ХАРАКТЕРИСТИКИ ОБ'ЄКТУ -->
            <div class="space-y-4">
                <h3 class="font-display text-lg font-semibold text-slate-900">Характеристики об'єкту</h3>
                
                <!-- Площа та Кількість кімнат в одному рядку -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <!-- Площа -->
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-2">Площа приміщення (м²)</label>
                        <x-forms.input 
                            wire:model="order.square_area" 
                            type="number"
                            step="0.1"
                            placeholder="Наприклад: 50" 
                            wire:target="save"
                            wire:loading.attr="disabled" />
                        @error('order.square_area')
                            <x-forms.error class="mt-2" :message="$message" />
                        @enderror
                    </div>

                    <!-- Кількість кімнат - Select -->
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-2">Кількість кімнат/рівнів</label>
                        <select 
                            wire:model="order.room_count"
                            wire:target="save"
                            wire:loading.attr="disabled"
                            class="w-full px-4 py-3 text-base rounded-xl border border-slate-200 bg-slate-100 text-slate-900 font-medium placeholder:text-slate-400 focus:outline-none focus:ring-2 focus:ring-emerald-500/40 focus:bg-white focus:border-emerald-500 transition-all duration-300 disabled:opacity-50">
                            <option value="">Оберіть кількість</option>
                            @foreach(['1' => '1 кімната', '2' => '2 кімнати', '3' => '3 кімнати', '4' => '4 кімнати', '5+' => '5+ кімнат'] as $value => $label)
                                <option value="{{ $value }}">{{ $label }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <!-- Чекбокси: ліфт, вода, паркування - як квадратні кнопки в ряд -->
                <div class="space-y-3">
                    <label class="block text-sm font-medium text-slate-700 mb-3">Умови на об'єкті</label>
                    <div class="grid grid-cols-3 gap-3">
                        <label class="flex items-center justify-center cursor-pointer group">
                            <input 
                                type="checkbox" 
                                wire:model="order.has_elevator"
                                class="hidden" />
                            <div class="w-full p-4 rounded-lg border-2 border-slate-200 text-center transition-all group-hover:border-emerald-400"
                                :class="$wire.order.has_elevator ? 'border-emerald-500 bg-emerald-50' : 'bg-slate-50'">
                                <x-lucide-arrow-up-down class="w-6 h-6 text-slate-500 mx-auto mb-2 transition-colors"
                                    x-bind:class="$wire.order.has_elevator ? 'text-emerald-600' : ''" />
                                <span class="text-xs font-semibold text-slate-700">Ліфт</span>
                            </div>
                        </label>

                        <label class="flex items-center justify-center cursor-pointer group">
                            <input 
                                type="checkbox" 
                                wire:model="order.has_water"
                                class="hidden" />
                            <div class="w-full p-4 rounded-lg border-2 border-slate-200 text-center transition-all group-hover:border-emerald-400"
                                :class="$wire.order.has_water ? 'border-emerald-500 bg-emerald-50' : 'bg-slate-50'">
                                <x-lucide-droplets class="w-6 h-6 text-slate-500 mx-auto mb-2 transition-colors"
                                   x-bind:class="$wire.order.has_water ? 'text-emerald-600' : ''" />
                                <span class="text-xs font-semibold text-slate-700">Вода</span>
                            </div>
                        </label>

                        <label class="flex items-center justify-center cursor-pointer group">
                            <input 
                                type="checkbox" 
                                wire:model="order.has_parking"
                                class="hidden" />
                            <div class="w-full p-4 rounded-lg border-2 border-slate-200 text-center transition-all group-hover:border-emerald-400"
                                x-bind:class="$wire.order.has_parking ? 'border-emerald-500 bg-emerald-50' : 'bg-slate-50'">
                                <x-lucide-car class="w-6 h-6 text-slate-500 mx-auto mb-2 transition-colors"
                                    x-bind:class="$wire.order.has_parking ? 'text-emerald-600' : ''" />
                                <span class="text-xs font-semibold text-slate-700">Паркування</span>
                            </div>
                        </label>
                    </div>
                </div>
            </div>

            <!-- РІВЕНЬ ЗАБРУДНЕННЯ - Range Slider -->
            <div class="space-y-4">
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
                        <input 
                            type="range"
                            wire:model="order.contamination_level"
                            @change="$dispatch('contamination-level-updated', parseInt($el.value))"
                            min="1"
                            max="5"
                            step="1"
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
                <label class="flex items-center p-3 rounded-lg border border-slate-200 cursor-pointer hover:bg-slate-50 transition-colors"
                    :class="$wire.order.is_urgent ? 'border-orange-500 bg-orange-50' : ''">
                    <input 
                        type="checkbox" 
                        wire:model="order.is_urgent"
                        class="w-4 h-4 accent-orange-500" />
                    <div class="ml-3 flex items-center gap-2">
                        <x-lucide-zap class="w-5 h-5 text-orange-500" />
                        <span class="text-sm font-medium text-slate-700">Терміне прибирання</span>
                    </div>
                </label>
            </div>

            <!-- ДОДАТКОВІ ПРИМІТКИ -->
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-2">Додаткові примітки</label>
                <x-forms.textarea 
                    wire:model="order.text" 
                    placeholder="Розкажіть про особливості об'єкту" 
                    wire:target="save"
                    wire:loading.attr="disabled"
                    rows="4" />
            </div>

            <!-- КНОПКА ВІДПРАВКИ -->
            <div class="sticky bottom-0 bg-white border-t border-slate-200 -mx-6 px-6 py-4 flex gap-3">
                <button 
                    type="button"
                    @click="open = false"
                    class="flex-1 px-4 py-3 border border-slate-300 text-slate-700 font-semibold rounded-lg hover:bg-slate-50 transition-colors">
                    Скасувати
                </button>
                <button 
                    type="submit"
                    wire:target="save"
                    wire:loading.attr="disabled"
                    class="flex-1 px-4 py-3 bg-emerald-500 hover:bg-emerald-600 text-white font-semibold rounded-lg transition-colors disabled:opacity-50 flex items-center justify-center gap-2">
                    <span wire:target="save" wire:loading.remove>Замовити</span>
                    <span wire:target="save" wire:loading>Відправка...</span>
                    <x-lucide-loader-2 wire:target="save" wire:loading class="w-4 h-4 animate-spin" />
                </button>
            </div>
        </form>
    </x-offcanvas>
@endsession
