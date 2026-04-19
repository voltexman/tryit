<?php
use function Laravel\Folio\name;
name('main');
?>

@extends('layouts.base')

@section('header')
    <div class="bg-cover bg-center h-dvh" style="background-image: url('{{ Vite::asset('resources/images/header.webp') }}');">
        <div class="flex items-center justify-center size-full bg-black/65">
            <div class="max-w-4xl mx-auto flex flex-col items-center gap-y-8 px-5 text-center">
                <h1
                    class="font-display text-3xl md:text-6xl xl:text-7xl text-nowrap uppercase text-white font-black tracking-wide leading-tight drop-shadow-lg animate-in duration-700">
                    <span class="text-tryit-orange">Чистота</span>, яку варто<br>
                    спробувати <span class="text-tryit-orange">сьогодні</span>
                </h1>

                <div class="w-16 h-0.5 bg-tryit-orange/80 rounded-full"></div>

                <p class="text-white/80 text-lg md:text-xl xl:text-2xl font-light max-w-xl text-balance">
                    Шукаєте надійну клінінгову компанію?<br class="hidden md:block">
                    Ми подбаємо про чистоту вашого офісу, виробництва чи будинку на найвищому рівні
                </p>

                <a href="#services" class="relative inline-block group mt-4">
                    <button
                        class="bg-tryit-orange font-display relative py-4 px-10 uppercase text-white text-base tracking-widest rounded-full border border-white/20 hover:border-tryit-orange/50 hover:bg-tryit-orange/50 backdrop-blur-sm transition-all duration-300 cursor-pointer"
                        aria-label="Перейти до розділу з нашими послугами">
                        Наші послуги
                    </button>
                </a>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <section class="relative py-20 lg:py-32 bg-slate-50 overflow-hidden font-sans">
        <div class="max-w-5xl mx-auto px-5 relative">

            <div class="relative z-20 text-center max-w-2xl mx-auto pt-10 pb-10">
                <x-section.badge class="mb-5">Ваш дім у надійних руках</x-section.badge>
                <h2 class="font-display text-4xl/10 md:text-6xl/12 font-black tracking-tight text-slate-900 text-balance">
                    Бо ми знаємо, як важливо
                    <span class="text-emerald-600 inline-block mt-2">бути в гармонії</span>
                    з вашим домом
                </h2>
                <p class="mt-8 text-lg md:text-xl text-slate-600 font-light leading-relaxed">
                    Ми об'єднуємо професіоналів та власників осель, щоб кожен момент вашого відпочинку проходив у
                    бездоганній чистоті.
                </p>

                <div class="mt-10 flex flex-col sm:flex-row items-center justify-center gap-5">
                    <x-button size="lg">Замовити прибирання</x-button>
                    <x-button size="lg" color="orange">Наші послуги</x-button>
                </div>
            </div>

            <div class="absolute inset-0 z-10 pointer-events-none select-none">

                <div
                    class="absolute top-[5%] left-[2%] lg:left-[5%] animate-float transition-all duration-1000 hidden sm:block">
                    <div
                        class="flex items-center gap-3 bg-white/80 backdrop-blur-md p-2 rounded-full shadow-xl border border-white">
                        <img src="https://i.pravatar.cc/150?u=1"
                            class="w-12 h-12 lg:w-16 lg:h-16 rounded-full object-cover border-2 border-emerald-500">
                        <span class="pr-4 text-xs lg:text-sm font-medium text-slate-700">"Все блищить!"</span>
                    </div>
                </div>

                <div class="absolute top-[45%] -left-[2%] lg:left-[2%] animate-float [animation-delay:1s] hidden md:block">
                    <div class="flex flex-col items-end">
                        <div class="bg-slate-900 text-white text-[10px] px-2 py-1 rounded-md mb-2">PRO Клінер</div>
                        <img src="https://i.pravatar.cc/150?u=2"
                            class="w-16 h-16 lg:w-20 lg:h-20 rounded-2xl rotate-6 object-cover shadow-2xl border-4 border-white">
                    </div>
                </div>

                <div class="absolute bottom-[10%] left-[8%] animate-float [animation-delay:2s] hidden lg:block">
                    <div class="relative">
                        <img src="https://i.pravatar.cc/150?u=3"
                            class="w-14 h-14 rounded-full border-4 border-white shadow-lg grayscale hover:grayscale-0 transition-all duration-500">
                        <div
                            class="absolute -bottom-2 -right-10 bg-white px-3 py-1 rounded-full shadow-sm border border-slate-100 text-[11px] font-semibold text-emerald-600 italic">
                            #ЧистоШвидко
                        </div>
                    </div>
                </div>

                <div
                    class="absolute top-[10%] right-[2%] lg:right-[8%] animate-float [animation-delay:1.5s] hidden sm:block">
                    <div class="flex items-center flex-row-reverse gap-3">
                        <div class="relative">
                            <img src="https://i.pravatar.cc/150?u=4"
                                class="w-12 h-12 lg:w-16 lg:h-16 rounded-full border-4 border-white shadow-xl">
                            <span
                                class="absolute top-0 right-0 w-4 h-4 bg-green-500 border-2 border-white rounded-full"></span>
                        </div>
                        <div
                            class="bg-white/90 backdrop-blur-sm px-4 py-2 rounded-2xl shadow-lg border border-white text-xs font-medium text-slate-600">
                            Вже їду до вас! 🚗
                        </div>
                    </div>
                </div>

                <div
                    class="absolute top-[50%] right-[0%] lg:right-[4%] animate-float [animation-delay:0.5s] hidden md:block">
                    <div class="group relative">
                        <img src="https://i.pravatar.cc/150?u=5"
                            class="w-16 h-16 lg:w-24 lg:h-24 rounded-full border-4 border-white shadow-2xl transition-transform group-hover:scale-110">
                        <div
                            class="absolute -top-4 -left-6 bg-emerald-600 text-white text-[10px] px-3 py-1 rounded-full shadow-lg font-bold">
                            10/10 рейтинг
                        </div>
                    </div>
                </div>

                <div class="absolute bottom-[15%] right-[10%] animate-float [animation-delay:2.5s] hidden lg:block">
                    <div
                        class="flex items-center gap-2 bg-white/40 backdrop-blur-[2px] p-2 rounded-full border border-white/50">
                        <img src="https://i.pravatar.cc/150?u=6"
                            class="w-12 h-12 rounded-full border-2 border-white shadow-md">
                        <span class="text-[11px] text-slate-500 font-medium italic pr-2">"Нарешті вихідні!"</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-full h-full z-0">
            <div
                class="absolute top-[10%] left-[15%] size-64 bg-emerald-50 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-pulse">
            </div>
            <div
                class="absolute bottom-[10%] right-[15%] size-80 bg-blue-50 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-pulse [animation-delay:2s]">
            </div>
        </div>
    </section>

    <section class="py-24 relative">
        <div class="blob -top-20 -left-20"></div>
        <div class="max-w-6xl mx-auto px-5">
            <div class="mb-16">
                <x-section.badge class="mb-2.5">Спектр можливостей</x-section.badge>

                <x-section.title tag="h2">Ми чистимо все, <br>що
                    <span class="text-emerald-500">піддається</span> логіці
                </x-section.title>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 grid-rows-2 gap-4 h-full md:h-130">
                <div class="md:col-span-2 md:row-span-2 group relative rounded-4xl overflow-hidden bg-slate-900 shadow-2xl">
                    <img src="https://images.unsplash.com/photo-1603614486387-276f74fcbe2a?q=80&w=800"
                        class="absolute inset-0 w-full h-full object-cover opacity-50 group-hover:scale-110 transition-transform duration-700">
                    <div class="relative z-10 p-10 h-full flex flex-col justify-end">
                        <div class="bg-emerald-500 w-fit p-3 rounded-2xl mb-4 shadow-lg shadow-emerald-500/50">
                            <i class="fas fa-building text-white text-2xl"></i>
                        </div>
                        <h3 class="text-3xl font-bold text-white mb-2">Гарантія якості</h3>
                        <p class="text-slate-300">Відповідальний підхід до кожного замовлення.</p>
                        <button
                            class="mt-6 w-fit px-6 py-3 bg-white text-slate-900 rounded-full font-bold hover:bg-emerald-500 hover:text-white transition-all">Дізнатись
                            більше</button>
                    </div>
                </div>

                <div
                    class="md:col-span-2 group relative rounded-4xl overflow-hidden bg-[#2D6A4F] p-8 flex items-center justify-between">
                    <div class="max-w-[60%]">
                        <h3 class="text-2xl font-bold text-slate-900 mb-2">Еко засоби</h3>
                        <p class="text-slate-600 text-sm">Безпечні для людей, тварин та довкілля.</p>
                    </div>
                    <div
                        class="w-24 h-24 bg-white rounded-full flex items-center justify-center shadow-inner group-hover:rotate-12 transition-transform">
                        <i class="fas fa-couch text-3xl text-emerald-500"></i>
                    </div>
                </div>

                <div class="group rounded-4xl overflow-hidden bg-tryit-orange/10 p-8">
                    <i class="fas fa-wind text-3xl text-blue-500 mb-6"></i>
                    <h3 class="text-xl font-bold text-slate-900 mb-2">Точно в срок</h3>
                    <p class="text-slate-500 text-xs">Завжди вчасно та без затримок.</p>
                </div>

                <div class="group rounded-4xl overflow-hidden bg-slate-900 p-8">
                    <i class="fas fa-bolt text-3xl text-yellow-400 mb-6"></i>
                    <h3 class="text-xl font-bold text-white mb-2">Сучасні методи</h3>
                    <p class="text-slate-400 text-xs">Професійне обладнання та технології.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- === SERVICES GRID === --}}
    <section class="py-20 bg-gray-50" id="services">
        <div class="max-w-6xl mx-auto px-5">
            <div class="text-center mb-16">
                <span class="font-display text-sm font-medium text-gray-500">Що ми пропонуємо</span>
                <h2 class="font-display text-3xl md:text-4xl font-bold text-gray-900 mt-1.5"><span
                        class="text-tryit-orange">Наші</span> послуги</h2>
                <div class="w-12 h-0.5 bg-tryit-green mx-auto mt-4 rounded-full"></div>
            </div>

            {{-- Service 1 — FEATURED --}}
            <a href="{{ route('services.myttia-fasadu-ta-vikon-na-vysoti') }}"
                class="group relative block rounded-2xl overflow-hidden mb-6 shadow-sm hover:shadow-2xl transition-all duration-500 animate-in duration-700">
                <div class="relative aspect-21/9 md:aspect-9/4 overflow-hidden">
                    <img src="{{ Vite::asset('resources/images/service-1.jpg') }}" alt="Миття фасадів та вікон на висоті"
                        class="size-full object-cover group-hover:scale-105 transition-transform duration-1000"
                        loading="lazy" />
                    <div class="absolute inset-0 bg-linear-to-t from-black/80 via-black/30 to-transparent"></div>
                    <div class="absolute inset-0 flex flex-col justify-end p-6 md:p-10 lg:p-14">
                        <div class="max-w-2xl">
                            <span
                                class="inline-flex items-center gap-2 bg-tryit-orange/90 text-white text-xs font-bold uppercase tracking-widest px-3.5 py-1.5 rounded-full mb-4">
                                <x-lucide-star class="size-3.5" stroke-width="2.5" />
                                Основна послуга
                            </span>
                            <h3
                                class="font-display text-2xl md:text-3xl lg:text-4xl font-bold text-white leading-tight mb-3 group-hover:translate-x-2 transition-transform duration-500">
                                Миття фасадів та вікон на висоті
                            </h3>
                            <p class="text-white/75 text-sm md:text-base leading-relaxed mb-4 max-w-xl">
                                Забезпечимо ідеальну чистоту вікон та фасадів за допомогою сучасної WFP-системи.
                                Професійні промислові альпіністи — безпечно, без розводів і слідів.
                            </p>
                            <div
                                class="inline-flex items-center gap-2 text-white font-semibold text-sm border border-white/25 rounded-full px-5 py-2.5 group-hover:bg-white/15 group-hover:border-white/40 transition-all duration-300">
                                <span>Дізнатись більше</span>
                                <x-lucide-arrow-right
                                    class="size-4 group-hover:translate-x-1 transition-transform duration-300"
                                    stroke-width="2" />
                            </div>
                        </div>
                    </div>
                </div>
            </a>

            {{-- ===== MOBILE: Horizontal scroll carousel ===== --}}
            <div class="md:hidden" x-data="{
                current: 0,
                total: 6,
                scroll(el) {
                    const card = el.querySelector('.snap-center');
                    if (!card) return;
                    const cardWidth = card.offsetWidth + 12;
                    this.current = Math.round(el.scrollLeft / cardWidth);
                }
            }">
                <div class="flex gap-3 overflow-x-auto snap-x snap-mandatory scroll-smooth pb-4 -mx-5 px-5" x-ref="track"
                    @scroll.throttle.100ms="scroll($el)"
                    style="scrollbar-width: none; -ms-overflow-style: none; -webkit-overflow-scrolling: touch;">

                    {{-- Card 1 --}}
                    <a href="{{ route('services.myika-ta-ochyshchennia-soniachnykh-panelei') }}"
                        class="snap-center shrink-0 w-[80vw] rounded-2xl overflow-hidden relative shadow-md">
                        <div class="relative aspect-3/4">
                            <img src="{{ Vite::asset('resources/images/service-2.jpg') }}" alt="Мийка сонячних панелей"
                                class="size-full object-cover" loading="lazy" />
                            <div class="absolute inset-0 bg-linear-to-t from-black/80 via-black/20 to-transparent"></div>
                            <div class="absolute inset-x-0 bottom-0 p-5">
                                <div
                                    class="size-10 rounded-xl bg-tryit-green/25 backdrop-blur-sm flex items-center justify-center mb-3">
                                    <x-lucide-sun class="size-5 text-white" stroke-width="1.5" />
                                </div>
                                <h3 class="font-display text-lg font-bold text-white leading-snug mb-1.5">Мийка сонячних
                                    панелей</h3>
                                <p class="text-white/65 text-sm leading-relaxed line-clamp-2">Видаляємо пил, бруд і наліт,
                                    щоб ваші батареї працювали на повну потужність.</p>
                                <div class="mt-3 inline-flex items-center gap-1.5 text-xs font-semibold text-tryit-orange">
                                    Детальніше <x-lucide-arrow-right class="size-3" stroke-width="2.5" />
                                </div>
                            </div>
                        </div>
                    </a>

                    {{-- Card 2 --}}
                    <a href="{{ route('services.pisliabudivelne-prybyrannia') }}"
                        class="snap-center shrink-0 w-[80vw] rounded-2xl overflow-hidden relative shadow-md">
                        <div class="relative aspect-3/4">
                            <img src="{{ Vite::asset('resources/images/service-3.jpg') }}"
                                alt="Післябудівельне прибирання" class="size-full object-cover" loading="lazy" />
                            <div class="absolute inset-0 bg-linear-to-t from-black/80 via-black/20 to-transparent"></div>
                            <div class="absolute inset-x-0 bottom-0 p-5">
                                <div
                                    class="size-10 rounded-xl bg-tryit-orange/25 backdrop-blur-sm flex items-center justify-center mb-3">
                                    <x-lucide-hard-hat class="size-5 text-white" stroke-width="1.5" />
                                </div>
                                <h3 class="font-display text-lg font-bold text-white leading-snug mb-1.5">
                                    Післябудівельне прибирання
                                </h3>
                                <p class="text-white/65 text-sm leading-relaxed line-clamp-2">
                                    Швидко та якісно приберемо будівельне сміття, пил та бруд після ремонту.
                                </p>
                                <div class="mt-3 inline-flex items-center gap-1.5 text-xs font-semibold text-tryit-orange">
                                    Детальніше <x-lucide-arrow-right class="size-3" stroke-width="2.5" />
                                </div>
                            </div>
                        </div>
                    </a>

                    {{-- Card 3 --}}
                    <a href="{{ route('services.heneralne-prybyrannia-tsekhiv-ta-vyrobnytstva') }}"
                        class="snap-center shrink-0 w-[80vw] rounded-2xl overflow-hidden relative shadow-md">
                        <div class="relative aspect-3/4">
                            <img src="{{ Vite::asset('resources/images/service-4.jpg') }}"
                                alt="Генеральне прибирання цехів" class="size-full object-cover" loading="lazy" />
                            <div class="absolute inset-0 bg-linear-to-t from-black/80 via-black/20 to-transparent"></div>
                            <div class="absolute inset-x-0 bottom-0 p-5">
                                <div
                                    class="size-10 rounded-xl bg-tryit-green/25 backdrop-blur-sm flex items-center justify-center mb-3">
                                    <x-lucide-factory class="size-5 text-white" stroke-width="1.5" />
                                </div>
                                <h3 class="font-display text-lg font-bold text-white leading-snug mb-1.5">
                                    Генеральне прибирання цехів
                                </h3>
                                <p class="text-white/65 text-sm leading-relaxed line-clamp-2">
                                    Комплексне прибирання цехів, складів та виробничих приміщень для безпеки та порядку.
                                </p>
                                <div class="mt-3 inline-flex items-center gap-1.5 text-xs font-semibold text-tryit-orange">
                                    Детальніше <x-lucide-arrow-right class="size-3" stroke-width="2.5" />
                                </div>
                            </div>
                        </div>
                    </a>

                    {{-- Card 4 --}}
                    <a href="{{ route('services.khimchystka') }}"
                        class="snap-center shrink-0 w-[80vw] rounded-2xl overflow-hidden relative shadow-md">
                        <div class="relative aspect-3/4">
                            <img src="{{ Vite::asset('resources/images/service-5.jpg') }}" alt="Хімчистка"
                                class="size-full object-cover" loading="lazy" />
                            <div class="absolute inset-0 bg-linear-to-t from-black/80 via-black/20 to-transparent"></div>
                            <div class="absolute inset-x-0 bottom-0 p-5">
                                <div
                                    class="size-10 rounded-xl bg-tryit-orange/25 backdrop-blur-sm flex items-center justify-center mb-3">
                                    <x-lucide-spray-can class="size-5 text-white" stroke-width="1.5" />
                                </div>
                                <h3 class="font-display text-lg font-bold text-white leading-snug mb-1.5">Хімчистка</h3>
                                <p class="text-white/65 text-sm leading-relaxed line-clamp-2">
                                    Глибоке очищення меблів, килимів та текстилю безпечними засобами.
                                </p>
                                <div class="mt-3 inline-flex items-center gap-1.5 text-xs font-semibold text-tryit-orange">
                                    Детальніше <x-lucide-arrow-right class="size-3" stroke-width="2.5" />
                                </div>
                            </div>
                        </div>
                    </a>

                    {{-- Card 5 --}}
                    <a href="{{ route('services.kompleksne-ta-pidtrymuiuche-prybyrannia-ofisu') }}"
                        class="snap-center shrink-0 w-[80vw] rounded-2xl overflow-hidden relative shadow-md">
                        <div class="relative aspect-3/4">
                            <img src="{{ Vite::asset('resources/images/service-6.jpg') }}" alt="Прибирання офісу"
                                class="size-full object-cover" loading="lazy" />
                            <div class="absolute inset-0 bg-linear-to-t from-black/80 via-black/20 to-transparent"></div>
                            <div class="absolute inset-x-0 bottom-0 p-5">
                                <div
                                    class="size-10 rounded-xl bg-tryit-green/25 backdrop-blur-sm flex items-center justify-center mb-3">
                                    <x-lucide-briefcase class="size-5 text-white" stroke-width="1.5" />
                                </div>
                                <h3 class="font-display text-lg font-bold text-white leading-snug mb-1.5">Прибирання офісу
                                </h3>
                                <p class="text-white/65 text-sm leading-relaxed line-clamp-2">Регулярне прибирання для
                                    комфортної атмосфери вашої команди та клієнтів.</p>
                                <div class="mt-3 inline-flex items-center gap-1.5 text-xs font-semibold text-tryit-orange">
                                    Детальніше <x-lucide-arrow-right class="size-3" stroke-width="2.5" />
                                </div>
                            </div>
                        </div>
                    </a>

                    {{-- Card 6 --}}
                    <a href="{{ route('services.promyslovyi-alpinizm') }}"
                        class="snap-center shrink-0 w-[80vw] rounded-2xl overflow-hidden relative shadow-md">
                        <div class="relative aspect-3/4">
                            <img src="{{ Vite::asset('resources/images/service-7.jpg') }}" alt="Промисловий альпінізм"
                                class="size-full object-cover" loading="lazy" />
                            <div class="absolute inset-0 bg-linear-to-t from-black/80 via-black/20 to-transparent"></div>
                            <div class="absolute inset-x-0 bottom-0 p-5">
                                <div
                                    class="size-10 rounded-xl bg-tryit-orange/25 backdrop-blur-sm flex items-center justify-center mb-3">
                                    <x-lucide-mountain class="size-5 text-white" stroke-width="1.5" />
                                </div>
                                <h3 class="font-display text-lg font-bold text-white leading-snug mb-1.5">Промисловий
                                    альпінізм</h3>
                                <p class="text-white/65 text-sm leading-relaxed line-clamp-2">Будь-які висотні роботи —
                                    професійно та безпечно з сертифікованим спорядженням.</p>
                                <div class="mt-3 inline-flex items-center gap-1.5 text-xs font-semibold text-tryit-orange">
                                    Детальніше <x-lucide-arrow-right class="size-3" stroke-width="2.5" />
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                {{-- Dot indicators --}}
                <div class="flex items-center justify-center gap-1.5 mt-2">
                    <template x-for="i in total" :key="i">
                        <button
                            @click="$refs.track.scrollTo({ left: (i - 1) * ($refs.track.querySelector('.snap-center').offsetWidth + 12), behavior: 'smooth' })"
                            class="rounded-full transition-all duration-300"
                            :class="current === i - 1 ? 'w-6 h-2 bg-tryit-orange' : 'size-2 bg-gray-300'"
                            aria-label="Slide"></button>
                    </template>
                </div>
            </div>

            {{-- ===== DESKTOP: Card grid ===== --}}
            <div class="hidden md:grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                {{-- Service 2 --}}
                <a href="{{ route('services.myika-ta-ochyshchennia-soniachnykh-panelei') }}"
                    class="group relative rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-500">
                    <div class="relative aspect-4/5 overflow-hidden">
                        <img src="{{ Vite::asset('resources/images/service-2.jpg') }}" alt="Мийка сонячних панелей"
                            class="size-full object-cover group-hover:scale-105 transition-transform duration-700"
                            loading="lazy" />
                        <div class="absolute inset-0 bg-linear-to-t from-black/85 via-black/45 to-transparent"></div>
                        <div class="absolute inset-x-0 bottom-0 p-6">
                            <div class="flex items-center gap-3 mb-3">
                                <div
                                    class="size-10 rounded-xl bg-tryit-green/25 backdrop-blur-sm flex items-center justify-center shrink-0">
                                    <x-lucide-sun class="size-5 text-white" stroke-width="1.5" />
                                </div>
                                <h3 class="font-display text-lg font-bold text-white leading-snug">Мийка сонячних
                                    панелей</h3>
                            </div>
                            <p class="text-sm text-white/80 leading-relaxed mb-0">
                                Видаляємо пил, бруд і наліт, щоб ваші батареї працювали на повну потужність.
                            </p>
                            <div
                                class="mt-4 flex items-center gap-1.5 text-sm font-semibold text-tryit-orange group-hover:gap-3 transition-all duration-300">
                                <span>Детальніше</span>
                                <x-lucide-arrow-right class="size-4" stroke-width="2" />
                            </div>
                        </div>
                    </div>
                </a>

                {{-- Service 3 --}}
                <a href="{{ route('services.pisliabudivelne-prybyrannia') }}"
                    class="group relative rounded-xl overflow-hidden hover:shadow-xl transition-all duration-500"
                    x-intersect="$el.classList.add('zoom-in')">
                    <div class="relative aspect-4/5 overflow-hidden">
                        <img src="{{ Vite::asset('resources/images/service-3.jpg') }}" alt="Післябудівельне прибирання"
                            class="size-full object-cover group-hover:scale-105 transition-transform duration-700"
                            loading="lazy" />
                        <div class="absolute inset-0 bg-linear-to-t from-black/85 via-black/45 to-transparent"></div>
                        <div class="absolute inset-x-0 bottom-0 p-6">
                            <div class="flex items-center gap-3 mb-3">
                                <div
                                    class="size-10 rounded-xl bg-tryit-orange/25 backdrop-blur-sm flex items-center justify-center shrink-0">
                                    <x-lucide-hard-hat class="size-5 text-white" stroke-width="1.5" />
                                </div>
                                <h3 class="font-display text-lg font-bold text-white leading-snug">Післябудівельне
                                    прибирання</h3>
                            </div>
                            <p class="text-sm text-white/80 leading-relaxed mb-0">
                                Швидко та якісно приберемо будівельне сміття, пил та бруд після ремонту.
                            </p>
                            <div
                                class="mt-4 flex items-center gap-1.5 text-sm font-semibold text-tryit-orange group-hover:gap-3 transition-all duration-300">
                                <span>Детальніше</span>
                                <x-lucide-arrow-right class="size-4" stroke-width="2" />
                            </div>
                        </div>
                    </div>
                </a>

                {{-- Service 4 --}}
                <a href="{{ route('services.heneralne-prybyrannia-tsekhiv-ta-vyrobnytstva') }}"
                    class="group relative rounded-xl overflow-hidden hover:shadow-xl transition-all duration-500"
                    x-intersect="$el.classList.add('zoom-in')">
                    <div class="relative aspect-4/5 overflow-hidden">
                        <img src="{{ Vite::asset('resources/images/service-4.jpg') }}" alt="Генеральне прибирання цехів"
                            class="size-full object-cover group-hover:scale-105 transition-transform duration-700"
                            loading="lazy" />
                        <div class="absolute inset-0 bg-linear-to-t from-black/85 via-black/45 to-transparent"></div>
                        <div class="absolute inset-x-0 bottom-0 p-6">
                            <div class="flex items-center gap-3 mb-3">
                                <div
                                    class="size-10 rounded-xl bg-tryit-green/25 backdrop-blur-sm flex items-center justify-center shrink-0">
                                    <x-lucide-factory class="size-5 text-white" stroke-width="1.5" />
                                </div>
                                <h3 class="font-display text-lg font-bold text-white leading-snug">Генеральне прибирання
                                    цехів</h3>
                            </div>
                            <p class="text-sm text-white/80 leading-relaxed mb-0">
                                Комплексне прибирання цехів, складів та виробничих приміщень для безпеки та порядку.
                            </p>
                            <div
                                class="mt-4 flex items-center gap-1.5 text-sm font-semibold text-tryit-orange group-hover:gap-3 transition-all duration-300">
                                <span>Детальніше</span>
                                <x-lucide-arrow-right class="size-4" stroke-width="2" />
                            </div>
                        </div>
                    </div>
                </a>

                {{-- Service 5 --}}
                <a href="{{ route('services.khimchystka') }}"
                    class="group relative rounded-xl overflow-hidden hover:shadow-xl transition-all duration-500"
                    x-intersect="$el.classList.add('zoom-in')">
                    <div class="relative aspect-4/5 overflow-hidden">
                        <img src="{{ Vite::asset('resources/images/service-5.jpg') }}" alt="Хімчистка"
                            class="size-full object-cover group-hover:scale-105 transition-transform duration-700"
                            loading="lazy" />
                        <div class="absolute inset-0 bg-linear-to-t from-black/85 via-black/45 to-transparent"></div>
                        <div class="absolute inset-x-0 bottom-0 p-6">
                            <div class="flex items-center gap-3 mb-3">
                                <div
                                    class="size-10 rounded-xl bg-tryit-orange/25 backdrop-blur-sm flex items-center justify-center shrink-0">
                                    <x-lucide-spray-can class="size-5 text-white" stroke-width="1.5" />
                                </div>
                                <h3 class="font-display text-lg font-bold text-white leading-snug">Хімчистка</h3>
                            </div>
                            <p class="text-sm text-white/80 leading-relaxed mb-0">
                                Глибоке очищення меблів, килимів та текстилю безпечними засобами.
                            </p>
                            <div
                                class="mt-4 flex items-center gap-1.5 text-sm font-semibold text-tryit-orange group-hover:gap-3 transition-all duration-300">
                                <span>Детальніше</span>
                                <x-lucide-arrow-right class="size-4" stroke-width="2" />
                            </div>
                        </div>
                    </div>
                </a>

                {{-- Service 6 --}}
                <a href="{{ route('services.kompleksne-ta-pidtrymuiuche-prybyrannia-ofisu') }}"
                    class="group relative rounded-xl overflow-hidden hover:shadow-xl transition-all duration-500">
                    <div class="relative aspect-4/5 overflow-hidden">
                        <img src="{{ Vite::asset('resources/images/service-6.jpg') }}" alt="Прибирання офісу"
                            class="size-full object-cover group-hover:scale-105 transition-transform duration-700"
                            loading="lazy" />
                        <div class="absolute inset-0 bg-linear-to-t from-black/85 via-black/45 to-transparent"></div>
                        <div class="absolute inset-x-0 bottom-0 p-6">
                            <div class="flex items-center gap-3 mb-3">
                                <div
                                    class="size-10 rounded-xl bg-tryit-green/25 backdrop-blur-sm flex items-center justify-center shrink-0">
                                    <x-lucide-briefcase class="size-5 text-white" stroke-width="1.5" />
                                </div>
                                <h3 class="font-display text-lg font-bold text-white leading-snug">Прибирання офісу</h3>
                            </div>
                            <p class="text-sm text-white/80 leading-relaxed mb-0">Регулярне прибирання для комфортної
                                атмосфери
                                вашої команди та клієнтів.</p>
                            <div
                                class="mt-4 flex items-center gap-1.5 text-sm font-semibold text-tryit-orange group-hover:gap-3 transition-all duration-300">
                                <span>Детальніше</span>
                                <x-lucide-arrow-right class="size-4" stroke-width="2" />
                            </div>
                        </div>
                    </div>
                </a>

                {{-- Service 7 --}}
                <a href="{{ route('services.promyslovyi-alpinizm') }}"
                    class="group relative rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-500 animate-in duration-700"
                    x-intersect="$el.classList.add('zoom-in')">
                    <div class="relative aspect-4/5 overflow-hidden">
                        <img src="{{ Vite::asset('resources/images/service-7.jpg') }}" alt="Промисловий альпінізм"
                            class="size-full object-cover group-hover:scale-105 transition-transform duration-700"
                            loading="lazy" />
                        <div class="absolute inset-0 bg-linear-to-t from-black/85 via-black/45 to-transparent"></div>
                        <div class="absolute inset-x-0 bottom-0 p-6">
                            <div class="flex items-center gap-3 mb-3">
                                <div
                                    class="size-10 rounded-xl bg-tryit-orange/25 backdrop-blur-sm flex items-center justify-center shrink-0">
                                    <x-lucide-mountain class="size-5 text-white" stroke-width="1.5" />
                                </div>
                                <h3 class="font-display text-lg font-bold text-white leading-snug">Промисловий альпінізм
                                </h3>
                            </div>
                            <p class="text-sm text-white/80 leading-relaxed mb-0">Будь-які висотні роботи — професійно та
                                безпечно з сертифікованим спорядженням.</p>
                            <div
                                class="mt-4 flex items-center gap-1.5 text-sm font-semibold text-tryit-orange group-hover:gap-3 transition-all duration-300">
                                <span>Детальніше</span>
                                <x-lucide-arrow-right class="size-4" stroke-width="2" />
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    {{-- === CTA: TRY IT + CALLBACK === --}}
    <section class="relative py-32 bg-white overflow-visible font-sans">
        <div class="max-w-6xl mx-auto px-5">

            {{-- Основний контейнер (Зелена плашка) --}}
            <div class="relative bg-[#2D6A4F] rounded-[45px] lg:rounded-[60px] min-h-100 flex items-center">

                <div class="grid lg:grid-cols-12 w-full">

                    {{-- Ліва частина: Смартфон --}}
                    <div class="lg:col-span-5 relative flex justify-center lg:block">
                        <div
                            class="lg:absolute mt-8 lg:mt-0 lg:left-17.5 lg:top-1/2 lg:-translate-y-1/2 z-30 w-72.5 md:w-82.5">

                            {{-- Корпус смартфона --}}
                            <div
                                class="relative aspect-9/18 rounded-[3.8rem] border-12 border-black bg-[#151515] shadow-[0_60px_100px_-20px_rgba(0,0,0,0.6)] overflow-hidden">

                                {{-- Екран активного виклику --}}
                                <div
                                    class="absolute inset-0 flex flex-col items-center justify-between py-20 px-6 bg-linearfaaA-to-b from-[#1a1a1a] to-black">

                                    <div class="text-center space-y-3 mt-4 animate-pulse">
                                        <p class="text-[10px] text-white/40 uppercase tracking-[0.3em]">Йде виклик...</p>
                                        <h3 class="text-5xl font-black text-white tracking-tighter">Try It</h3>
                                        <p class="text-xs text-white/30 uppercase tracking-wide">Клінінгова компанія</p>
                                    </div>

                                    {{-- Анімоване коло виклику --}}
                                    <div class="relative my-auto">
                                        <div class="absolute inset-5 rounded-full bg-white/10 animate-ping z-0"></div>

                                        <div class="absolute z-10 size-30 lg:size-36 rounded-full bg-black"></div>
                                        <div
                                            class="relative z-10 size-30 lg:size-36 rounded-full bg-white/15 flex items-center justify-center border border-white/20 backdrop-blur-xl">
                                            <span class="text-5xl lg:text-6xl font-black text-white/90">T</span>
                                        </div>
                                    </div>

                                    {{-- Кнопка скидання (як на фото) --}}
                                    <div class="w-full mt-auto">
                                        <div class="flex items-end justify-around">

                                            {{-- Клавіатура (або Повідомлення) --}}
                                            <div class="flex flex-col items-center gap-3">
                                                <div
                                                    class="size-12 rounded-full bg-white/10 backdrop-blur-md flex items-center justify-center text-white hover:bg-white/20 transition-colors">
                                                    <x-lucide-hash class="size-5" />
                                                </div>
                                                <span
                                                    class="text-[9px] text-white/40 uppercase tracking-widest font-medium">
                                                    Клавіші
                                                </span>
                                            </div>

                                            {{-- Кнопка скидання (Центральна) --}}
                                            <div class="flex flex-col items-center">
                                                <div
                                                    class="size-14 rounded-full bg-red-500 flex items-center justify-center shadow-[0_0_30px_rgba(239,68,68,0.5)]">
                                                    <x-lucide-phone class="size-8 fill-white stroke-white rotate-135" />
                                                </div>
                                                <span
                                                    class="text-[10px] text-white/70 mt-3 uppercase tracking-wide font-bold">
                                                    Скасувати</span>
                                            </div>

                                            {{-- Динамік --}}
                                            <div class="flex flex-col items-center gap-3">
                                                <div
                                                    class="size-12 rounded-full bg-white/10 backdrop-blur-md flex items-center justify-center text-white hover:bg-white/20 transition-colors">
                                                    <x-lucide-volume-2 class="size-5" />
                                                </div>
                                                <span
                                                    class="text-[9px] text-white/40 uppercase tracking-widest font-medium">
                                                    Динамік</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- Dynamic Island --}}
                                <div class="absolute top-0 left-1/2 -translate-x-1/2 w-32 h-8 bg-black rounded-b-3xl">
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Права частина: Текст --}}
                    <div class="lg:col-span-7 p-10 lg:p-20 lg:pl-0 text-white">
                        <div class="max-w-xl space-y-6">
                            <h2 class="font-display text-3xl md:text-5xl font-bold tracking-tight">
                                Чистота в один клік!
                            </h2>

                            <p class="text-white/80 text-base md:text-lg leading-relaxed font-light text-balance">
                                Поки ви керуєте справами, ми створюємо ідеальну чистоту. TryIt — професійний клінінг
                                для тих, хто цінує свій час та бездоганний результат.
                            </p>

                            <p class="text-white/70 text-sm font-semibold">
                                Передзвонити вам? Просто вкажіть свій номер.
                            </p>

                            {{-- Кнопки маркетів --}}
                            <div class="flex flex-wrap gap-4 pt-6">
                                {{-- Google Play --}}
                                <div
                                    class="flex items-center gap-3 bg-black/20 border border-white/15 backdrop-blur-md rounded-2xl px-5 py-2.5 transition-all focus-within:bg-black/40 focus-within:border-white/40 w-full max-w-70">
                                    {{-- Іконка телефону --}}
                                    <div class="w-8 h-8 flex items-center justify-center shrink-0">
                                        <x-lucide-phone class="size-6 stroke-white opacity-70" />
                                    </div>

                                    {{-- Поле введення --}}
                                    <div class="text-left w-full">
                                        <label for="phone" class="text-xs uppercase leading-none opacity-60 block">
                                            Ваш номер телефону
                                        </label>
                                        <input type="tel" id="phone" x-mask="+380 (99) 999-99-99"
                                            placeholder="+380 (63)  123-45-67"
                                            class="bg-transparent border-none p-0 focus:ring-0 text-white text-base font-bold focus:outline-none leading-none mt-1 w-full placeholder:text-white/20 placeholder:font-normal">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section x-data="{ scroll: 0 }" x-init="window.addEventListener('scroll', () => { scroll = window.scrollY })"
        class="relative overflow-hidden shadow-inner bg-cover bg-no-repeat bg-fixed"
        :style="`background-image: url('{{ Vite::asset('resources/images/header.webp') }}');`">

        <div class="absolute inset-0 bg-emerald-950/90 z-0"></div>


        <div class="absolute top-0 right-0 size-64 bg-emerald-500/10 blur-[100px] rounded-full z-10"></div>

        <div class="max-w-4xl mx-auto py-20 px-5 relative z-20">
            <div class="flex flex-col items-center">
                <x-section.badge color="slate">Про компанію</x-section.badge>

                <x-section.title tag="h3" color="white" size="sm">
                    Чому обирають <span class="text-emerald-400">нас</span>?
                </x-section.title>

                <div class="space-y-5 text-emerald-50 leading-relaxed text-center text-balance font-light mt-5">
                    <p>
                        Наша клінінгова компанія — це професійний сервіс, який допомагає підтримувати чистоту у вашому
                        домі чи офісі. Ми використовуємо сучасні методи та відповідально ставимося до кожного
                        замовлення.
                    </p>
                    <p>
                        Від генерального прибирання до спеціалізованого догляду за меблями. Наша мета — зробити ваш
                        простір ідеально чистим, де кожен вдих приносить задоволення.
                    </p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-3 gap-5 mt-10">
                    <div>
                        <div class="size-12 bg-emerald-500/20 rounded-xl flex items-center justify-center mb-4">
                            <x-lucide-award class="size-7 stroke-emerald-500" />
                        </div>
                        <h4 class="text-emerald-400 font-bold mb-2">12+ років досвіду</h4>
                        <p class="text-emerald-100/60 text-base leading-normal">
                            Понад десятиліття допомагаємо підтримувати чистоту, відточуючи кожну деталь сервісу.
                        </p>
                    </div>

                    <div>
                        <div class="size-12 bg-emerald-500/20 rounded-xl flex items-center justify-center mb-4">
                            <x-lucide-users class="size-7 stroke-emerald-500" />
                        </div>
                        <h4 class="text-emerald-400 font-bold mb-2">300+ задоволених клієнтів</h4>
                        <p class="text-emerald-100/60 text-base leading-normal">
                            Нам довіряють і рекомендують — більшість клієнтів повертаються до нас знову.
                        </p>
                    </div>

                    <div>
                        <div class="size-12 bg-emerald-500/20 rounded-xl flex items-center justify-center mb-4">
                            <x-lucide-badge-check class="size-7 stroke-emerald-500" />
                        </div>
                        <h4 class="text-emerald-400 font-bold mb-2">100% гарантія якості</h4>
                        <p class="text-emerald-100/60 text-base leading-normal">
                            Ми впевнені у результаті: якщо щось не влаштує — безкоштовно виправимо.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-white relative overflow-hidden">
        <div
            class="absolute top-1/2 left-0 w-full h-1 bg-linear-to-r from-transparent via-emerald-100 to-transparent -translate-y-1/2 hidden lg:block">
        </div>

        <div class="max-w-7xl mx-auto px-5 relative">
            {{-- Subtle Background Image --}}
            <div class="absolute inset-0 opacity-30 pointer-events-none z-0">
                <img src="https://demo2.pavothemes.com/cetro/wp-content/uploads/2025/07/h1-asked.png"
                    class="size-full object-cover grayscale-100 opacity-40 scale-75" alt="">
            </div>
            <div class="text-center mb-10 lg:mb-20">
                <x-section.badge class="mb-2.5">3 кроки до чистоти</x-section.badge>
                <x-section.title tag="h4">
                    Ваш час занадто <span class="text-emerald-500">дорогий</span>, <br>
                    щоб <span class="text-emerald-500">витрачати</span> його на бруд
                </x-section.title>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-5 lg:gap-10 relative">

                <div class="group relative pt-5">
                    <div
                        class="absolute top-0 left-0 text-[10rem] font-black text-slate-50 leading-none select-none z-0 transition-colors">
                        01</div>

                    <div
                        class="relative z-10 bg-slate-100 p-8 rounded-3xl border border-slate-100 transition-all duration-500 group-hover:shadow-2xl group-hover:-translate-y-2 group-hover:border-emerald-200">
                        <div
                            class="size-16 bg-slate-900 rounded-2xl flex items-center justify-center mb-8 shadow-xl group-hover:bg-emerald-600 group-hover:rotate-10 transition-all duration-500">
                            <x-lucide-timer class="size-8 stroke-slate-100" />
                        </div>

                        <h3 class="text-2xl font-bold text-slate-900 mb-4">Домовимось за хвилину</h3>
                        <p class="text-slate-500 leading-relaxed mb-6 text-sm">
                            Забудьте про дзвінки — лише 3 кліки. Оберіть тип сервісу, зручну дату та час. Наша система
                            автоматично підбере вільного профі-клінера під ваш запит.
                        </p>

                        <div class="flex items-center gap-2 text-emerald-600 font-bold text-xs uppercase tracking-wider">
                            <span class="w-8 h-px bg-emerald-600"></span>
                            Займає ~60 секунд
                        </div>
                    </div>
                </div>

                <div class="group relative pt-5 lg:mt-15">
                    <div
                        class="absolute top-0 left-0 text-[10rem] font-black text-slate-50 leading-none select-none z-0 transition-colors group-hover:text-blue-50">
                        02</div>

                    <div
                        class="relative z-10 bg-slate-900 p-8 rounded-3xl shadow-2xl transition-all duration-500 group-hover:-translate-y-2">
                        <div
                            class="size-16 bg-emerald-500 rounded-2xl flex items-center justify-center mb-8 shadow-lg shadow-emerald-500/40 group-hover:scale-110 transition-transform">
                            <x-lucide-sparkles class="size-8 stroke-slate-100" />
                        </div>

                        <h3 class="text-2xl font-bold text-white mb-2.5">Усе необхідне - з нас</h3>
                        <p class="text-slate-400 leading-relaxed mb-5 text-sm">
                            Ми приїжджаємо з повним арсеналом: від потужного промислового
                            <span class="text-slate-100 font-medium">обладнання</span> до сертифікованої
                            <span class="text-slate-100 font-medium">еко-хімії</span>. Вам не потрібно забезпечувати
                            інвентар. Процес налагоджений так, щоб
                            <span class="text-slate-100 font-medium">не відволікати</span>
                            вас від основних справ.
                        </p>

                        <div
                            class="inline-flex items-center gap-2 px-4 py-2 bg-slate-800 rounded-full text-emerald-400 text-[10px] font-bold uppercase tracking-tighter border border-slate-700">
                            <span class="flex h-2 w-2 rounded-full bg-emerald-500 animate-pulse"></span>
                            Клінер вже в дорозі
                        </div>
                    </div>
                </div>

                <div class="group relative pt-5">
                    <div
                        class="absolute top-0 left-0 text-[10rem] font-black text-slate-50 leading-none select-none z-0 transition-colors group-hover:text-emerald-50">
                        03</div>

                    <div
                        class="relative z-10 bg-stone-100 p-8 rounded-3xl border border-stone-100 transition-all duration-500 group-hover:shadow-2xl group-hover:-translate-y-2">
                        <div
                            class="size-16 bg-white border-2 border-slate-700 rounded-2xl flex items-center justify-center mb-8 shadow-xl group-hover:border-emerald-600 transition-all duration-500">
                            <x-lucide-smile-plus
                                class="size-8 stroke-slate-700 group-hover:stroke-emerald-600 transition-all duration-500" />
                        </div>

                        <h3 class="text-2xl font-bold text-slate-800 mb-2.5">Насолоджуйтесь</h3>
                        <p class="text-slate-500 leading-relaxed mb-5 text-sm">
                            Перевірте якість роботи та насолоджуйтеся свіжістю. Оплата списується лише після вашого
                            схвалення. Ви отримуєте не просто прибирання, а ідеальний простір для життя.
                        </p>

                        <div class="text-xs text-slate-400 font-medium">300+ чистих об'єктів</div>
                    </div>
                </div>

            </div>

            <div class="mt-20 flex justify-center">
                <x-button size="lg">Спробувати цей досвід</x-button>
            </div>
        </div>
    </section>

    <section class="py-20 relative overflow-hidden bg-slate-100" x-data="{ active: 1 }">
        <div class="max-w-3xl relative z-10 mx-auto px-5">
            <div class="mb-10 flex flex-col lg:flex-row lg:items-center lg:justify-between">
                <div>
                    <h2 class="font-display text-3xl font-black text-slate-900 tracking-tight">
                        Питання та <span class="text-emerald-500">відповіді</span>
                    </h2>
                    <p class="text-slate-500 text-xs mt-1">Все, що варто знати перед замовленням</p>
                </div>
                <a href="#"
                    class="inline-flex items-center gap-1.5 mt-5 lg:mt-0 text-xs font-semibold uppercase tracking-wide text-emerald-600 hover:text-emerald-700 transition-colors">
                    Задати запитання <x-lucide-arrow-right class="size-4" stroke-width="2" />
                </a>
            </div>

            <div class="space-y-2">
                @foreach (require resource_path('data/faqs.php') as $item)
                    <div class="bg-white overflow-hidden transition-all duration-300 rounded-2xl border border-gray-200 cursor-pointer hover:bg-slate-50"
                        :class="active === {{ $loop->index }} ? 'shadow-xl shadow-emerald-500/5' : ''">
                        <button @click="active = active === {{ $loop->index }} ? null : {{ $loop->index }}"
                            class="w-full flex items-center justify-between p-4 md:p-5 text-left transition-all cursor-pointer">
                            <div class="flex items-center gap-4">
                                <div class="size-10 rounded-xl flex items-center justify-center shrink-0 transition-[colors, transform]"
                                    :class="active === {{ $loop->index }} ? 'bg-emerald-600 rotate-45 text-white' :
                                        'bg-slate-100 text-slate-400'">
                                    <span class="font-display text-sm font-bold"
                                        :class="active === {{ $loop->index }} ? '-rotate-45' : ''">0{{ $loop->index + 1 }}</span>
                                </div>
                                <span class="font-bold text-sm md:text-base transition-colors"
                                    :class="active === {{ $loop->index }} ? 'text-slate-900' : 'text-slate-700'">
                                    {{ $item['q'] }}
                                </span>
                            </div>
                            <div class="transition-transform duration-500 text-slate-300"
                                :class="active === {{ $loop->index }} ? 'rotate-180 text-emerald-600' : ''">
                                <i class="fas fa-chevron-down text-[10px]"></i>
                            </div>
                        </button>

                        <div x-show="active === {{ $loop->index }}" x-collapse x-cloak>
                            <div class="px-5 pb-5 ml-0 md:ml-14">
                                <p class="text-slate-500 text-sm leading-relaxed max-w-xl">
                                    {{ $item['a'] }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- === BLOG === --}}
    <section class="py-20 bg-stone-50 relative overflow-hidden">
        {{-- Subtle Background Image --}}
        {{-- <div class="absolute inset-0 opacity-30 pointer-events-none z-0">
            <img src="https://demo2.pavothemes.com/cetro/wp-content/uploads/2025/07/h2-background04.jpg"
                class="size-full object-cover grayscale-100" alt="">
        </div> --}}

        <div class="max-w-6xl mx-auto px-5 relative z-10">
            <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-4 mb-12">
                <div>
                    <x-section.badge class="mb-2.5">Корисні статті</x-section.badge>
                    <x-section.title tag="h3" size="sm">
                        Наш <span class="text-emerald-500">Блог</span>
                    </x-section.title>
                </div>
                <a href="{{ route('blog') }}"
                    class="inline-flex items-center gap-1.5 text-sm font-semibold text-tryit-green hover:gap-3 transition-all duration-300">
                    Всі статті <x-lucide-arrow-right class="size-4" stroke-width="2" />
                </a>
            </div>

            @php $posts = \App\Models\Post::published()->take(6)->get(); @endphp

            {{-- Mobile: horizontal scroll --}}
            <div class="md:hidden" x-data="{ scrollEl: null, active: 0, count: {{ $posts->count() }} }" x-init="scrollEl = $refs.blogScroll;
            scrollEl.addEventListener('scroll', () => { active = Math.round(scrollEl.scrollLeft / (scrollEl.scrollWidth / count)) })">
                <div x-ref="blogScroll"
                    class="flex gap-4 overflow-x-auto scroll-smooth snap-x snap-mandatory pb-4 -mx-5 px-5 scroll-pl-5"
                    style="scrollbar-width: none; -ms-overflow-style: none;">
                    @foreach ($posts as $post)
                        <a href="{{ route('blog.show', ['slug' => $post->slug]) }}"
                            class="group flex-none w-[75vw] flex flex-col bg-gray-50 rounded-2xl overflow-hidden snap-start">
                            <div class="aspect-16/10 overflow-hidden">
                                <img src="{{ $post->cover_image }}" alt="{{ $post->title }}"
                                    class="size-full object-cover group-hover:scale-105 transition-transform duration-700"
                                    loading="lazy" />
                            </div>
                            <div class="flex flex-col flex-1 p-4">
                                <div class="flex items-center gap-3 text-xs text-gray-400 mb-2">
                                    <span class="inline-flex gap-1.5">
                                        <x-lucide-calendar class="size-3 shrink-0" />
                                        {{ $post->published_at->translatedFormat('d M Y') }}
                                    </span>
                                    <span class="size-1 rounded-full bg-gray-300"></span>
                                    <span>{{ $post->reading_time }} хв</span>
                                </div>
                                <h3 class="font-display text-sm font-bold text-gray-900 leading-snug mb-1.5 line-clamp-2">
                                    {{ $post->title }}</h3>
                                <p class="text-xs text-gray-500 leading-relaxed line-clamp-2 mb-0">{{ $post->excerpt }}
                                </p>
                                <div
                                    class="mt-auto pt-3 flex items-center gap-1.5 text-xs font-semibold text-tryit-orange">
                                    Читати <x-lucide-arrow-right class="size-3.5" stroke-width="2" />
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
                <div class="flex justify-center gap-1.5 mt-4">
                    <template x-for="i in count" :key="i">
                        <button
                            @click="scrollEl.scrollTo({ left: (i - 1) * (scrollEl.scrollWidth / count), behavior: 'smooth' })"
                            class="size-2 rounded-full transition-all duration-300 cursor-pointer"
                            :class="active === i - 1 ? 'bg-tryit-orange w-5' : 'bg-gray-300'"></button>
                    </template>
                </div>
            </div>

            {{-- Desktop: grid --}}
            <div class="hidden md:grid md:grid-cols-3 gap-6">
                @foreach ($posts as $post)
                    <a href="{{ route('blog.show', ['slug' => $post->slug]) }}"
                        class="group flex flex-col bg-gray-50 rounded-2xl overflow-hidden hover:shadow-xl transition-all duration-500">
                        <div class="aspect-16/10 overflow-hidden">
                            <img src="{{ $post->cover_image }}" alt="{{ $post->title }}"
                                class="size-full object-cover group-hover:scale-105 transition-transform duration-700"
                                loading="lazy" />
                        </div>
                        <div class="flex flex-col flex-1 p-5">
                            <div class="flex items-center gap-3 text-xs text-gray-400 mb-3">
                                <span>{{ $post->published_at->translatedFormat('d M Y') }}</span>
                                <span class="size-1 rounded-full bg-gray-300"></span>
                                <span>{{ $post->reading_time }} хв читання</span>
                            </div>
                            <h3
                                class="font-display text-base font-bold text-gray-900 leading-snug mb-2 group-hover:text-tryit-green transition-colors line-clamp-2">
                                {{ $post->title }}</h3>
                            <p class="text-sm text-gray-500 leading-relaxed line-clamp-2 mb-0">{{ $post->excerpt }}</p>
                            <div
                                class="mt-auto pt-4 flex items-center gap-1.5 text-xs font-semibold text-tryit-orange group-hover:gap-2.5 transition-all duration-300">
                                Читати <x-lucide-arrow-right class="size-3.5" stroke-width="2" />
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>
@endsection

<style>
    @keyframes float {
        0% {
            transform: translateY(0px) rotate(var(--tw-rotate, 0deg));
        }

        50% {
            transform: translateY(-20px) rotate(var(--tw-rotate, 0deg));
        }

        100% {
            transform: translateY(0px) rotate(var(--tw-rotate, 0deg));
        }
    }

    .animate-float {
        animation: float 6s ease-in-out infinite;
    }

    .glass-card {
        background: rgba(255, 255, 255, 0.7);
        backdrop-filter: blur(12px);
        border: 1px solid rgba(255, 255, 255, 0.3);
    }

    .blob {
        position: absolute;
        width: 400px;
        height: 400px;
        background: linear-gradient(180deg, rgba(52, 211, 153, 0.2) 0%, rgba(59, 130, 246, 0.2) 100%);
        filter: blur(80px);
        border-radius: 50%;
        z-index: -1;
    }
</style>
