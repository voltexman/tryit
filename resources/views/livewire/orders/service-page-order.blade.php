@session('order-success')
    <div class="h-96 flex items-center justify-center">
        <div class="flex flex-col items-center">
            <x-lucide-circle-check class="size-24 stroke-1 text-tryit-orange mb-5" />
            <span class="font-semibold">Дякуємо, заявка відправлена</span>
            <span class="text-sm font-medium">Ми зв'яжемось з Вами найближчим часом</span>
        </div>
    </div>
@else
    <x-offcanvas size="xl">
        <x-slot:trigger class="mt-5">
            <x-button variant="orange" size="sm" type="button" class="order">
                Замовити послугу
            </x-button>
        </x-slot>

        <x-slot:header>
            <h3 class="py-5 font-semibold font-[Oswald]">Замовлення</h3>
        </x-slot>

        <form wire:submit.prevent="save" class="h-full py-2.5">
            <x-scrollbar class="h-full flex flex-col gap-y-5 -me-2.5 lg:-me-7.5 lg:-ms-2.5 ps-2.5 pe-5 py-5">
                <div>
                    <x-forms.input variant="soft" size="lg" wire:model.trim.blur="form.name" icon="user"
                        maxLength="40" placeholder="Ваше ім'я" wire:target="save" wire:loading.attr="disabled" />
                    @error('form.name')
                        <x-forms.error :message="$message" />
                    @enderror
                </div>

                <div>
                    <x-forms.input variant="soft" size="lg" wire:model.trim.blur="form.contact" icon="notebook"
                        maxLength="40" placeholder="Пошта або телефон" wire:target="save" wire:loading.attr="disabled"
                        required />
                    @error('form.contact')
                        <x-forms.error :message="$message" />
                    @enderror
                </div>

                <div>
                    <x-forms.input variant="soft" size="lg" wire:model.trim.blur="form.address" icon="map-pin"
                        maxLength="40" placeholder="Адреса об’єкту" wire:target="save" wire:loading.attr="disabled" />
                    <x-forms.hint text="Важливо для логістики та розрахунку виїзду" />
                    @error('form.address')
                        <x-forms.error :message="$message" />
                    @enderror
                </div>

                <x-accordion class="p-0!" default-selected="1">
                    <x-accordion.item index="1">
                        <x-accordion.trigger index="1" class="py-2.5 px-0!">
                            <div class="font-[Inter] flex flex-col">
                                <span class="text-base">Додаткові параметри</span>
                                <span class="text-sm text-gray-500 font-normal -mt-0.5">Не обов'язково</span>
                            </div>
                        </x-accordion.trigger>
                        <x-accordion.content index="1" class="p-0!">
                            <x-alert class="mt-2.5">
                                Додаткова інформація <b>необов'язкова</b> для заповнення, але може значно допомогти нам
                                краще оцінити роботу та розрахувати вартість. Всі необхідні деталі уточнюватимуться також
                                <b>по телефону</b>.
                            </x-alert>
                            @include('partials.' . $page)
                            <div class="mt-5 space-y-2.5">
                                <div class="text-black text-sm font-medium">Умови на місці</div>
                                <div class="grid grid-cols-2 lg:grid-cols-4 gap-5">
                                    <x-checkbox variant="large" label="Вода" icon="droplet" />
                                    <x-checkbox variant="large" label="Електрика" icon="zap" />
                                    <x-checkbox variant="large" label="Ліфт" icon="zap" />
                                    <x-checkbox variant="large" label="Парковка" icon="truck" />
                                </div>
                            </div>
                        </x-accordion.content>
                    </x-accordion.item>
                </x-accordion>

                <div>
                    <x-forms.textarea variant="soft" wire:model="form.text" placeholder="Вкажіть додатково опис"
                        wire:target="save" wire:loading.attr="disabled" rows="6" />
                    <x-forms.hint
                        text="Можете вказати будь які додаткові відомості які на ваш рахунок можуть бути корисними" />
                    @error('form.text')
                        <x-forms.error maxLength="1200" :message="$message" />
                    @enderror
                </div>

                @if ($this->isMaxPhotos())
                    <x-alert>
                        Ви досягли максимальної кількості зображень <b>(8)</b>. Якщо необхідно обрати інші зображення, будь
                        ласка, видаліть одне з існуючих, щоб додати нове.
                    </x-alert>
                @else
                    <x-dropzone />
                @endif

                <!-- Прев’ю -->
                @if ($form->photos)
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-5">
                        @foreach ($form->photos as $index => $photo)
                            <div class="relative group h-25">
                                <img src="{{ $photo->temporaryUrl() }}"
                                    class="size-full rounded-xl object-cover border border-zinc-100" />

                                <!-- Кнопка видалення -->
                                <button type="button" wire:click="removePhoto({{ $index }})"
                                    class="absolute top-1.5 right-1.5 flex justify-center items-center size-5 bg-red-500 hover:bg-red-600 rounded-full md:opacity-0 group-hover:opacity-100 transition cursor-pointer">
                                    <x-lucide-x class="size-3.5 stroke-white" />
                                </button>
                            </div>
                        @endforeach
                    </div>
                @endif
            </x-scrollbar>
        </form>

        <x-slot:footer>
            <x-checkbox>
                Погоджуюсь з <span class="text-tryit-orange font-semibold cursor-pointer">правилами</span>
            </x-checkbox>

            <x-button size="sm" type="button" wire:target="save, order.service" wire:click="save" icon
                wire:loading.attr="disabled" class="ms-auto flex items-center gap-x-1.5">
                <span wire:target="save" wire:loading.remove>Замовити</span>
                <span wire:target="save" wire:loading>Відправка</span>
            </x-button>
        </x-slot>
    </x-offcanvas>
@endsession
