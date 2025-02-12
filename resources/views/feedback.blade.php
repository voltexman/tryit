@extends('layouts.base')

@section('header')
    <x-page-header image="https://cleaning-group.pro/wp-content/uploads/2019/08/cleaning_appartment_vinnitsa.jpg">
        <x-slot:title>
            Зворотрій зв'язок
        </x-slot>
    </x-page-header>
@endsection

@section('content')
    <x-section>
        <div class="grid lg:grid-cols-5 gap-15 min-h-screen">
            <div class="col-span-3">Ми цінуємо вашу думку та завжди раді допомогти. Якщо у вас є
                запитання, пропозиції або відгуки, будь ласка, надішліть повідомлення – і наша команда зв’яжеться з вами
                якнайшвидше. Ми прагнемо зробити наш сервіс ще кращим, і ваша підтримка для нас дуже важлива. Дякуємо, що
                обираєте нас!"</div>
            <div class="col-span-2">@livewire('feedback')</div>
        </div>
    </x-section>
@endsection
