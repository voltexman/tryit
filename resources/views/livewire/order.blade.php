@session('success')
    <div class="h-96 flex items-center justify-center">
        <div class="flex flex-col items-center">
            <x-lucide-circle-check class="size-24 stroke-1 text-tryit-orange mb-5" />
            <span class="font-semibold">Дякуємо, заявка відправлена</span>
            <span class="text-sm font-medium">Ми зв'яжемось з Вами найближчим часом</span>
        </div>
    </div>
@else
    <form wire:submit.prevent="save">
        <div class="flex flex-col gap-y-5">
            <div class="text-xl text-center text-tryit-dark font-black uppercase">Замовити послугу</div>

            <x-forms.input wire:model="order.name" maxLength="40" placeholder="Ваше ім'я" wire:target="save"
                wire:loading.attr="disabled" />
            @error('order.name')
                <x-forms.error class="-mt-4" :message="$message" />
            @enderror

            <x-forms.input wire:model="order.contact" maxLength="40" placeholder="Пошта або телефон" wire:target="save"
                wire:loading.attr="disabled" />
            @error('order.contact')
                <x-forms.error class="-mt-4" :message="$message" />
            @enderror

            <x-dropdown :label="$order->service ?: 'Оберіть послугу'" wire:target="save" wire:loading.attr="disabled">
                @foreach (\App\Enums\ServiceEnum::all() as $service)
                    <x-dropdown.item wire:click="$set('order.service', '{{ $service }}')">
                        {{ $service }}
                    </x-dropdown.item>
                @endforeach
            </x-dropdown>
            @error('order.service')
                <x-forms.error class="-mt-4" maxLength="1200" :message="$message" />
            @enderror

            <x-forms.textarea wire:model="order.text" placeholder="Вкажіть додатково опис" wire:target="save"
                wire:loading.attr="disabled" />

            {{-- <input type="file" multiple accept="image/*" x-ref="fileInput" class="hidden" @change="handleFiles"> --}}

            <div class="flex justify-between">
                {{-- <div class="flex gap-2.5 flex-wrap me-auto">
                    <template x-for="(image, index) in images" :key="index">
                        <div class="relative size-14">
                            <img :src="image" class="size-full object-cover rounded-lg shadow-md">
                            <button type="button" @click="removeImage(index)"
                                class="absolute top-1 right-1 bg-red-500 p-0.5 rounded-full flex flex-none size-5 cursor-pointer">
                                <x-lucide-x class="size-3.5 text-white self-center mx-auto" />
                            </button>
                        </div>
                    </template>

                    <button x-show="images.length < 4" type="button" @click="$refs.fileInput.click()"
                        :disabled="images.length >= 4"
                        class="px-3.5 py-2 myauto bg-stone-300 flex gap-2.5 items-center text-stone-700 rounded-md cursor-pointer hover:bg-stone-400/60 transition duration-300 disabled:opacity-50">
                        <x-lucide-image class="size-7" stroke-width="1.5" />
                        <span x-show="images.length < 1" class="flex flex-col items-start">
                            <span class="text-xs font-bold">Додати фото</span>
                            <span class="text-xs text-gray-600">За необхідністю</span>
                        </span>
                    </button>
                </div> --}}

                <x-button type="submit" wire:target="save, order.service" wire:loading.attr="disabled"
                    class="ms-auto mb-auto flex items-center gap-x-1.5">
                    <span wire:target="save" wire:loading.remove>Замовити</span>
                    <span wire:target="save" wire:loading>Відправка</span>
                    <x-lucide-loader-2 wire:target="save" wire:loading class="size-4 animate-spin" />
                </x-button>
            </div>
        </div>
    </form>

    {{-- <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('orderForm', () => ({
                images: @entangle('order.images'), // зв'язуємо з Livewire

                handleFiles(event) {
                    let files = event.target.files;
                    if (!files.length) return;

                    Array.from(files).forEach(file => {
                        if (this.images.length < 4) {
                            let reader = new FileReader();
                            reader.onload = (event) => this.images.push(event.target.result);
                            reader.readAsDataURL(file);
                        }
                    });
                },

                removeImage(index) {
                    this.images.splice(index, 1);
                }
            }));
        });
    </script> --}}
@endsession
