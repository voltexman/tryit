<div {{ $attributes->class('cursor-pointer flex justify-center px-10 py-5 lg:p-10 block cursor-pointer bg-zinc-50 border-2 border-dashed border-zinc-200 rounded-xl relative') }}
    x-data="dropzoneComponent()" @dragover.prevent="hover = true" @dragleave.prevent="hover = false"
    @drop.prevent="handleDrop($event)" x-on:livewire-upload-start="uploading = true"
    x-on:livewire-upload-finish="uploading = false" x-on:livewire-upload-cancel="uploading = false"
    x-on:livewire-upload-error="uploading = false" x-on:livewire-upload-progress="progress = $event.detail.progress"
    @click="$refs.photosInput.click()">
    <div class="text-center select-none">
        <span class="inline-flex justify-center items-center size-16">
            <!-- SVG ICON -->
            <svg class="shrink-0 w-16 h-auto" width="71" height="51" viewBox="0 0 71 51" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M6.55172 8.74547L17.7131 6.88524V40.7377L12.8018 41.7717C9.51306 42.464 6.29705 40.3203 5.67081 37.0184L1.64319 15.7818C1.01599 12.4748 3.23148 9.29884 6.55172 8.74547Z"
                    stroke="currentColor" stroke-width="2" class="stroke-tryit-green"></path>
                <path
                    d="M64.4483 8.74547L53.2869 6.88524V40.7377L58.1982 41.7717C61.4869 42.464 64.703 40.3203 65.3292 37.0184L69.3568 15.7818C69.984 12.4748 67.7685 9.29884 64.4483 8.74547Z"
                    stroke="currentColor" stroke-width="2" class="stroke-tryit-green"></path>
                <g filter="url(#filter4)">
                    <rect x="17.5656" y="1" width="35.8689" height="42.7541" rx="5" stroke="currentColor"
                        stroke-width="2" class="stroke-tryit-green" shape-rendering="crispEdges"></rect>
                </g>
                <path
                    d="M39.4826 33.0893C40.2331 33.9529 41.5385 34.0028 42.3537 33.2426L42.5099 33.0796L47.7453 26.976L53.4347 33.0981V38.7544C53.4346 41.5156 51.1959 43.7542 48.4347 43.7544H22.5656C19.8043 43.7544 17.5657 41.5157 17.5656 38.7544V35.2934L29.9728 22.145L39.4826 33.0893Z"
                    class="fill-tryit-green/10 stroke-tryit-green" fill="currentColor" stroke="currentColor"
                    stroke-width="2"></path>
                <circle cx="40.0902" cy="14.3443" r="4.16393" class="fill-tryit-green/10 stroke-tryit-green"
                    fill="currentColor" stroke="currentColor" stroke-width="2"></circle>
                <defs>
                    <filter id="filter4" x="13.5656" y="0" width="43.8689" height="50.7541"
                        filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                        <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                        <feColorMatrix in="SourceAlpha" type="matrix"
                            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                        <feOffset dy="3"></feOffset>
                        <feGaussianBlur stdDeviation="1.5"></feGaussianBlur>
                        <feComposite in2="hardAlpha" operator="out"></feComposite>
                        <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.12 0">
                        </feColorMatrix>
                        <feBlend mode="normal" in2="BackgroundImageFix" result="effect4"></feBlend>
                        <feBlend mode="normal" in="SourceGraphic" in2="effect4" result="shape"></feBlend>
                    </filter>
                </defs>
            </svg>
        </span>

        <!-- Hidden input -->
        <input type="file" multiple wire:model="form.photos" class="hidden" x-ref="photosInput"
            x-on:change="handleInputChange($event)">

        <div class="mt-5 flex flex-wrap justify-center text-sm text-gray-600">
            <span x-show="!hover" class="font-medium text-gray-800 leading-4">
                Перетягти зображення <br class="lg:hidden">або
                <span class="font-semibold text-tryit-orange">відкрити</span>
            </span>
            <span x-show="hover">Відпустіть файли тут</span>
        </div>
        <div class="mt-1 text-xs text-gray-400">
            Pick a file up to 2MB.
        </div>
    </div>

    <!-- Progress bar -->
    <div x-show="uploading" class="absolute bottom-4 left-1/2 -translate-x-1/2 rounded-full overflow-hidden">
        <progress max="100" x-bind:value="progress" class="h-1.5 block"></progress>
    </div>
</div>
<script>
    function dropzoneComponent() {
        return {
            hover: false,
            uploading: false,
            progress: 0,

            handleDrop(event) {
                this.hover = false;
                const files = Array.from(event.dataTransfer.files);
                this.uploadFiles(files);
            },

            handleInputChange(event) {
                const files = Array.from(event.target.files);
                this.uploadFiles(files);
                event.target.value = '';
            },

            uploadFiles(files) {
                if (!files.length) return;

                const validFiles = files.filter(file => file instanceof File);

                if (validFiles.length > 0) {
                    this.uploading = true;
                    this.progress = 0;

                    this.$wire.uploadMultiple(
                        'form.photos',
                        validFiles,
                        () => {
                            this.uploading = false;
                            this.progress = 0;
                        },
                        () => {
                            this.uploading = false;
                            this.progress = 0;
                        },
                        progress => {
                            // Переконаємось, що progress завжди число від 0 до 100
                            this.progress = Number(progress) || 0;
                        }
                    );
                }
            }
        }
    }
</script>
