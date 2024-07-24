@extends('layouts.main')

@section('content')

<!-- Drink Menu Page -->
@include('includes.drinkMenu')
<!-- end Drink Menu Page -->

<!-- Hot Drinks Page -->
<div id="hot" class="tm-tab-content">
    <div class="tm-list">
        <div class="tm-list-item">
            <img src="{{ asset('assets/img/hot-americano.png') }}" alt="Image" class="tm-list-item-img">
            <div class="tm-black-bg tm-list-item-text">
                <h3 class="tm-list-item-name">Hot Americano<span class="tm-list-item-price">$8.50</span></h3>
                <p class="tm-list-item-description">Here is a short description for the item along with a squared thumbnail.</p>
            </div>
        </div>
        <div class="tm-list-item">
            <img src="{{ asset('assets/img/hot-cappuccino.png') }}" alt="Image" class="tm-list-item-img">
            <div class="tm-black-bg tm-list-item-text">
                <h3 class="tm-list-item-name">Hot Cappuccino<span class="tm-list-item-price">$9.50</span></h3>
                <p class="tm-list-item-description">Here is a list of 4 items that can add more as you need. Only content area will be scrolling.</p>
            </div>
        </div>
        <div class="tm-list-item">
            <img src="{{ asset('assets/img/hot-espresso.png') }}" alt="Image" class="tm-list-item-img">
            <div class="tm-black-bg tm-list-item-text">
                <h3 class="tm-list-item-name">Hot Espresso<span class="tm-list-item-price">$7.50</span></h3>
                <p class="tm-list-item-description">Left side logo and main menu are fixed. The video background is fixed.</p>
            </div>
        </div>
        <div class="tm-list-item">
            <img src="{{ asset('assets/img/hot-latte.png') }}" alt="Image" class="tm-list-item-img">
            <div class="tm-black-bg tm-list-item-text">
                <h3 class="tm-list-item-name">Hot Latte<span class="tm-list-item-price">$6.50</span></h3>
                <p class="tm-list-item-description">Page contents are organized into 3 tabs to show different lists of items.</p>
            </div>
        </div>
        @foreach ($hotDrinks as $beverage)
        <div class="tm-list-item">
            @if ($beverage->beverage_image)
            <img src="{{ asset('assets/img/' . $beverage->beverage_image) }}" alt="Image" class="tm-list-item-img">
            @else
            <span class="text-danger">No valid image available.</span>
            @endif
            <div class="tm-black-bg tm-list-item-text">
                <h3>{{ $beverage->beverage_title }} <span class="tm-list-item-price">{{ $beverage->beverage_price }}</span></h3>
                <p class="tm-list-item-description">{{ $beverage->beverage_content }}</p>
            </div>
        </div>
        @endforeach
    </div>
</div>
<!-- end Hot Drinks Page -->

@endsection
