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
    <form wire:submit="save" class="relative">
        <div class="mb-5 text-center sm:text-left">
            <h3 class="text-2xl font-display font-bold text-tryit-dark mb-2 uppercase tracking-wide">
                Зворотний зв'язок
            </h3>
            <p class="text-sm text-gray-500">Заповніть форму, і ми відповімо вам якнайшвидше.</p>
        </div>

        <div class="space-y-5">
            <div>
                <label class="text-xs font-bold uppercase tracking-wider text-gray-400 ml-1">Ваше ім'я</label>
                <x-forms.input size="lg" wire:model="feedback.name" placeholder="Як до вас звертатися?" />
            </div>

            <div>
                <label class="text-xs font-bold uppercase tracking-wider text-gray-400 ml-1">Ваші контакти</label>
                <x-forms.input size="lg" wire:model="feedback.contact" placeholder="Email або телефон" />
            </div>

            <div>
                <label class="text-xs font-bold uppercase tracking-wider text-gray-400 ml-1">Повідомлення</label>
                <x-forms.textarea size="lg" wire:model="feedback.text" placeholder="Опишіть ваше питання..."
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

            <x-button type="submit" color="orange" size="lg" wire:target="save, images" wire:loading.attr="disabled">
                <span wire:target="save" wire:loading.remove class="flex items-center gap-2">
                    <span>Надіслати повідомлення</span>
                    <x-lucide-send class="size-4" />
                </span>
                <span wire:target="save" wire:loading class="flex items-center gap-2">
                    <span>Відправка...</span>
                    <x-lucide-loader-2 class="size-4 shrink-0 inline-flex animate-spin" />
                </span>
            </x-button>
        </div>

        <p class="text-[10px] text-gray-400 text-center mt-6 uppercase tracking-widest leading-tight">
            Натискаючи кнопку, ви погоджуєтесь з політикою конфіденційності
        </p>
    </form>
@endsession
