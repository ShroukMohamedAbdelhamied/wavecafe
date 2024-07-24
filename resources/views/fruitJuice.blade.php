@extends('layouts.main')

@section('content')

      <!-- Drink Menu Page -->
      @include('includes.drinkMenu')
      <!-- end Drink Menu Page -->

      <!-- Fruit Juice Page -->
      <div id="juice" class="tm-tab-content">
              <div class="tm-list">
                <div class="tm-list-item">          
                  <img src="{{ asset ('assets/img/smoothie-1.png') }}" alt="Image" class="tm-list-item-img">
                  <div class="tm-black-bg tm-list-item-text">
                    <h3 class="tm-list-item-name">Strawberry Smoothie<span class="tm-list-item-price">$12.50</span></h3>
                    <p class="tm-list-item-description">Here is a short description for the item along with a squared thumbnail.</p>              
                  </div>
                </div>
                <div class="tm-list-item">          
                  <img src="{{ asset ('assets/img/smoothie-2.png') }}" alt="Image" class="tm-list-item-img">
                  <div class="tm-black-bg tm-list-item-text">
                    <h3 class="tm-list-item-name">Red Berry Smoothie<span class="tm-list-item-price">$14.50</span></h3>
                    <p class="tm-list-item-description">Here is a list of 4 items or add more. You can use this template for commercial purposes.</p>                    
                  </div>
                </div>
                <div class="tm-list-item">          
                  <img src="{{ asset ('assets/img/smoothie-3.png') }}" alt="Image" class="tm-list-item-img">
                  <div class="tm-black-bg tm-list-item-text">
                    <h3 class="tm-list-item-name">Pineapple Smoothie<span class="tm-list-item-price">$16.50</span></h3>
                    <p class="tm-list-item-description">Left side logo and main menu are fixed. The video background is fixed.</p>              
                  </div>
                </div>
                <div class="tm-list-item">          
                  <img src="{{ asset ('assets/img/smoothie-4.png') }}" alt="Image" class="tm-list-item-img">
                  <div class="tm-black-bg tm-list-item-text">
                    <h3 class="tm-list-item-name">Spinach Smoothie<span class="tm-list-item-price">$18.50</span></h3>
                    <p class="tm-list-item-description">You are not allowed to redistribute the template ZIP file on other template sites.</p>              
                  </div>
                </div>   
                @foreach ($fruitJuices as $beverage)
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
      <!-- end Fruit Juice Page -->
    
@endsection