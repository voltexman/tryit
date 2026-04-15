<?php
use function Laravel\Folio\name;
name('faq');
?>

@extends('layouts.base')

@section('header')
    <x-page-header image="{{ Vite::asset('resources/images/breadcrumb-default.jpg') }}">
        <x-slot:title>Часті запитання</x-slot:title>
        <x-slot:description>Найпопулярніші запитання наших клієнтів</x-slot:description>
    </x-page-header>
@endsection

@section('content')
    <x-section class="bg-tryit-cream/5">
        <div class="max-w-3xl mb-10">
            <x-forms.input variant="light" size="lg" placeholder="Знайти запитання" />
            <x-forms.hint text="Знайдіть відповідь на запитання, яке вас цікавить" />
        </div>

        <div class="columns-1 sm:columns-2 gap-10 [column-fill:_balance] relative">
            <img src="{{ Vite::asset('resources/images/h1-asked.png') }}" class="absolute -top-10 inset-0 opacity-10 -z-10"
                alt="">

            <!-- Загальні запитання -->
            <div class="mb-10 break-inside-avoid">
                <h2 class="font-[Oswald] text-3xl font-semibold mb-5">Загальні запитання</h2>
                <x-accordion default-selected="1" class="rounded-3xl shadow-lg bg-white">
                    <x-accordion.item index="1">
                        <x-accordion.trigger index="1">
                            Чи потрібно мені бути вдома під час прибирання?
                        </x-accordion.trigger>
                        <x-accordion.content index="1">
                            Ні, ваша присутність не обов’язкова. Усі наші працівники проходять перевірку, тому ви можете
                            спокійно залишити ключ або впустити команду зранку, а повернутися вже в чисту, доглянуту оселю.
                            Якщо хочете — ми повідомимо, коли роботу буде завершено, або надішлемо фото результату.
                        </x-accordion.content>
                    </x-accordion.item>
                    <x-accordion.item index="2">
                        <x-accordion.trigger index="2">Як оформити замовлення?</x-accordion.trigger>
                        <x-accordion.content index="2">
                            Зробити це можна у будь-який зручний для вас спосіб — через сайт, Instagram, Telegram чи просто
                            телефоном. Ми уточнимо деталі (площа, тип прибирання, адреса, зручний час) і миттєво підтвердимо
                            бронювання.
                        </x-accordion.content>
                    </x-accordion.item>
                    <x-accordion.item index="3">
                        <x-accordion.trigger index="3">
                            Які засоби для прибирання ви використовуєте?
                        </x-accordion.trigger>
                        <x-accordion.content index="3">
                            Ми застосовуємо лише професійні та безпечні мийні засоби, що не шкодять людям і тваринам.
                        </x-accordion.content>
                    </x-accordion.item>
                    <x-accordion.item index="4">
                        <x-accordion.trigger index="4">Скільки часу займає прибирання?</x-accordion.trigger>
                        <x-accordion.content index="4">
                            Тривалість залежить від площі, кількості кімнат та рівня забруднення. Наприклад, звичайна
                            квартира займає близько 2–3 годин, а генеральне прибирання приватного будинку — до 6 годин. Усі
                            терміни ми узгоджуємо перед виїздом.
                        </x-accordion.content>
                    </x-accordion.item>
                    <x-accordion.item index="5">
                        <x-accordion.trigger index="5">Чи можна замовити прибирання на конкретну дату і
                            час?</x-accordion.trigger>
                        <x-accordion.content index="5">
                            Звісно. Ми працюємо за попереднім записом, тому ви можете обрати будь-який зручний день і
                            годину. Якщо потрібне термінове прибирання — часто можемо приїхати того ж дня.
                        </x-accordion.content>
                    </x-accordion.item>
                </x-accordion>
            </div>

            <!-- Типи прибирання -->
            <div class="mb-10 break-inside-avoid">
                <h2 class="font-[Oswald] text-3xl font-semibold mb-5">Типи прибирання</h2>
                <x-accordion class="rounded-3xl shadow-lg bg-white">
                    <x-accordion.item index="1">
                        <x-accordion.trigger index="1">Які види прибирання ви пропонуєте?</x-accordion.trigger>
                        <x-accordion.content index="1">
                            Ми виконуємо стандартне, генеральне, післяремонтне, офісне, разове та регулярне прибирання.
                            Також є спеціальні послуги — миття вікон, хімчистка меблів і прибирання після свят чи подій.
                        </x-accordion.content>
                    </x-accordion.item>
                    <x-accordion.item index="2">
                        <x-accordion.trigger index="2">Що входить до стандартного прибирання?</x-accordion.trigger>
                        <x-accordion.content index="2">
                            Видалення пилу з усіх поверхонь, миття підлоги, очищення кухні й санвузлів, протирання меблів,
                            вимикачів, ручок, винесення сміття — усе, щоб ваш простір став свіжим і доглянутим.
                        </x-accordion.content>
                    </x-accordion.item>
                    <x-accordion.item index="3">
                        <x-accordion.trigger index="3">Що таке генеральне прибирання?</x-accordion.trigger>
                        <x-accordion.content index="3">
                            Це глибоке очищення всіх зон: ми миємо вікна, фасади меблів, побутову техніку, видаляємо пил
                            у важкодоступних місцях, обробляємо плінтуси, двері, стіни. Результат — квартира як після
                            ремонту.
                        </x-accordion.content>
                    </x-accordion.item>
                    <x-accordion.item index="4">
                        <x-accordion.trigger index="4">Чи прибираєте після ремонту?</x-accordion.trigger>
                        <x-accordion.content index="4">
                            Так, це одна з наших спеціалізацій. Ми видаляємо пил, залишки фарби, будматеріали, клеї,
                            цемент, очищуємо вікна та підлогу без подряпин. Після нас можна одразу заселятися.
                        </x-accordion.content>
                    </x-accordion.item>
                    <x-accordion.item index="5">
                        <x-accordion.trigger index="5">Чи робите хімчистку меблів і килимів?</x-accordion.trigger>
                        <x-accordion.content index="5">
                            Так. Ми очищуємо тканинні дивани, крісла, матраци, стільці, килими та килимові покриття за
                            допомогою професійного екстракторного обладнання.
                        </x-accordion.content>
                    </x-accordion.item>
                </x-accordion>
            </div>

            <!-- Оплата та гарантії -->
            <div class="mb-10 break-inside-avoid">
                <h2 class="font-[Oswald] text-3xl font-semibold mb-5">Оплата та гарантії</h2>
                <x-accordion class="rounded-3xl shadow-lg bg-white">
                    <x-accordion.item index="1">
                        <x-accordion.trigger index="1">Як я можу оплатити послугу?</x-accordion.trigger>
                        <x-accordion.content index="1">
                            Ми приймаємо оплату готівкою, банківською карткою або онлайн через сайт. Усе максимально зручно
                            й прозоро — без прихованих платежів.
                        </x-accordion.content>
                    </x-accordion.item>
                    <x-accordion.item index="2">
                        <x-accordion.trigger index="2">Чи можна оплатити після прибирання?</x-accordion.trigger>
                        <x-accordion.content index="2">
                            Так, звичайно. Ми хочемо, щоб ви переконалися у результаті перед оплатою. Спочатку ви
                            перевіряєте чистоту, і лише потім розраховуєтеся.
                        </x-accordion.content>
                    </x-accordion.item>
                    <x-accordion.item index="3">
                        <x-accordion.trigger index="3">Чи є передоплата?</x-accordion.trigger>
                        <x-accordion.content index="3">
                            Для стандартних замовлень — ні. Для великих об’єктів або корпоративних клієнтів може бути
                            невелика передоплата для резерву часу.
                        </x-accordion.content>
                    </x-accordion.item>
                    <x-accordion.item index="4">
                        <x-accordion.trigger index="4">Чи даєте ви гарантію на свої послуги?</x-accordion.trigger>
                        <x-accordion.content index="4">
                            Так! Якщо вам щось не сподобається — ми обов’язково виправимо це безкоштовно. Наша мета — щоб
                            кожен клієнт залишився задоволеним.
                        </x-accordion.content>
                    </x-accordion.item>
                    <x-accordion.item index="5">
                        <x-accordion.trigger index="5">Чи надаєте ви чек або договір?</x-accordion.trigger>
                        <x-accordion.content index="5">
                            Так, ми працюємо офіційно. Для приватних клієнтів надаємо електронний чек, а для компаній —
                            договір і акт виконаних робіт.
                        </x-accordion.content>
                    </x-accordion.item>
                </x-accordion>
            </div>

            <!-- Локації та виїзди -->
            <div class="mb-10 break-inside-avoid">
                <h2 class="font-[Oswald] text-3xl font-semibold mb-5">Локації та виїзди</h2>
                <x-accordion class="rounded-3xl shadow-lg bg-white">
                    <x-accordion.item index="1">
                        <x-accordion.trigger index="1">У яких районах ви працюєте?</x-accordion.trigger>
                        <x-accordion.content index="1">
                            Ми працюємо по всьому місту та найближчих передмістях. Для зручності можете перевірити
                            список районів на сайті або уточнити адресу в менеджера.
                        </x-accordion.content>
                    </x-accordion.item>
                    <x-accordion.item index="2">
                        <x-accordion.trigger index="2">
                            Чи можна замовити прибирання в той самий день?
                        </x-accordion.trigger>
                        <x-accordion.content index="2">
                            Так, якщо є вільна команда — приїдемо навіть протягом кількох годин. Ми розуміємо, що
                            бувають термінові ситуації.
                        </x-accordion.content>
                    </x-accordion.item>
                    <x-accordion.item index="3">
                        <x-accordion.trigger index="3">Чи приїжджаєте ви за місто?</x-accordion.trigger>
                        <x-accordion.content index="3">
                            Так, ми здійснюємо виїзди за межі міста з невеликою доплатою за дорогу.
                        </x-accordion.content>
                    </x-accordion.item>
                    <x-accordion.item index="4">
                        <x-accordion.trigger index="4">
                            Чи можна перенести або скасувати замовлення?
                        </x-accordion.trigger>
                        <x-accordion.content index="4">
                            Так, безкоштовно, якщо повідомите щонайменше за 12 годин до запланованого часу.
                        </x-accordion.content>
                    </x-accordion.item>
                </x-accordion>
            </div>

            <!-- Безпека та персонал -->
            <div class="mb-10 break-inside-avoid">
                <h2 class="font-[Oswald] text-3xl font-semibold mb-5">Безпека та персонал</h2>
                <x-accordion class="rounded-3xl shadow-lg bg-white">
                    <x-accordion.item index="1">
                        <x-accordion.trigger index="1">Чи перевірені ваші працівники?</x-accordion.trigger>
                        <x-accordion.content index="1">
                            Так, усі наші клінери проходять ретельний відбір, перевірку документів і навчання. Ми
                            гарантуємо відповідальність і порядність персоналу.
                        </x-accordion.content>
                    </x-accordion.item>
                    <x-accordion.item index="2">
                        <x-accordion.trigger index="2">
                            Чи безпечні ваші засоби для дітей та тварин?
                        </x-accordion.trigger>
                        <x-accordion.content index="2">
                            Абсолютно. Ми використовуємо засоби, схвалені для побутового використання, без токсичних
                            компонентів і різких запахів.
                        </x-accordion.content>
                    </x-accordion.item>
                    <x-accordion.item index="3">
                        <x-accordion.trigger index="3">
                            Що робити, якщо під час прибирання щось пошкодили?
                        </x-accordion.trigger>
                        <x-accordion.content index="3">
                            Ми дуже уважно ставимося до майна клієнтів, але якщо таке трапиться — обов’язково
                            компенсуємо збитки або замінимо річ.
                        </x-accordion.content>
                    </x-accordion.item>
                    <x-accordion.item index="4">
                        <x-accordion.trigger index="4">
                            Чи можна залишити клінера самого вдома?
                        </x-accordion.trigger>
                        <x-accordion.content index="4">
                            Так, більшість наших клієнтів так і робить. Ви можете спокійно займатися своїми справами
                            — усе буде зроблено відповідально і вчасно.
                        </x-accordion.content>
                    </x-accordion.item>
                </x-accordion>
            </div>

            <!-- Після прибирання -->
            <div class="mb-10 break-inside-avoid">
                <h2 class="font-[Oswald] text-3xl font-semibold mb-5">Після прибирання</h2>
                <x-accordion class="rounded-3xl shadow-lg bg-white">
                    <x-accordion.item index="1">
                        <x-accordion.trigger index="1">Чи прибираєте ви після вечірок або подій?</x-accordion.trigger>
                        <x-accordion.content index="1">
                            Так, ми допоможемо швидко повернути порядок — зберемо сміття, помиємо підлогу, посуд, витремо
                            всі поверхні. Після нас простір знову сяє.
                        </x-accordion.content>
                    </x-accordion.item>
                    <x-accordion.item index="2">
                        <x-accordion.trigger index="2">Чи забираєте сміття після прибирання?</x-accordion.trigger>
                        <x-accordion.content index="2">
                            Так, усе зібране сміття ми виносимо самостійно. Якщо потрібно — можемо вивезти великогабаритне.
                        </x-accordion.content>
                    </x-accordion.item>
                    <x-accordion.item index="3">
                        <x-accordion.trigger index="3">Чи можна замовити регулярне прибирання?</x-accordion.trigger>
                        <x-accordion.content index="3">
                            Так, ми пропонуємо вигідні абонементи на щотижневе або щомісячне прибирання. Це зручно — і
                            дешевше, ніж разові виклики.
                        </x-accordion.content>
                    </x-accordion.item>
                    <x-accordion.item index="4">
                        <x-accordion.trigger index="4">Чи робите фотозвіт після прибирання?</x-accordion.trigger>
                        <x-accordion.content index="4">
                            Так, якщо клієнт просить. Ми надсилаємо фото “до” і “після”, щоб ви бачили, як все змінилося
                            навіть якщо були відсутні.
                        </x-accordion.content>
                    </x-accordion.item>
                </x-accordion>
            </div>
        </div>
    </x-section>
@endsection
