@extends('layouts.main')

@section('content')
      <!-- Drink Menu Page -->
      @include('includes.drinkMenu')
      <!-- end Drink Menu Page --> 

      <!-- Iced Drinks Page -->
      <div id="cold" class="tm-tab-content">
              <div class="tm-list">
                <div class="tm-list-item">          
                  <img src="{{ asset ('assets/img/iced-americano.png') }}" alt="Image" class="tm-list-item-img">
                  <div class="tm-black-bg tm-list-item-text">
                    <h3 class="tm-list-item-name">Iced Americano<span class="tm-list-item-price">$10.25</span></h3>
                    <p class="tm-list-item-description">Here is a short description for the first item. Wave Cafe Template is provided by Tooplate.</p>
                  </div>
                </div>
                <div class="tm-list-item">          
                  <img src="{{ asset ('assets/img/iced-cappuccino.png') }}" alt="Image" class="tm-list-item-img">
                  <div class="tm-black-bg tm-list-item-text">
                    <h3 class="tm-list-item-name">Iced Cappuccino<span class="tm-list-item-price">$12.50</span></h3>
                    <p class="tm-list-item-description">Here is a list of 4 items or add more. You can use this template for commercial purposes.</p>
                  </div>
                </div>
                <div class="tm-list-item">          
                  <img src="{{ asset ('assets/img/iced-espresso.png') }}" alt="Image" class="tm-list-item-img">
                  <div class="tm-black-bg tm-list-item-text">
                    <h3 class="tm-list-item-name">Iced Espresso<span class="tm-list-item-price">$14.25</span></h3>
                    <p class="tm-list-item-description">You are not permitted to redistribute this template ZIP file on any other template websites.</p>
                  </div>
                </div>
                <div class="tm-list-item">          
                  <img src="{{ asset ('assets/img/iced-latte.png') }}" alt="Image" class="tm-list-item-img">
                  <div class="tm-black-bg tm-list-item-text">
                    <h3 class="tm-list-item-name">Iced Latte<span class="tm-list-item-price">$11.50</span></h3>
                    <p class="tm-list-item-description">Contents are organized into 3 tabs. Please <a href="https://www.tooplate.com/contact" rel="nofollow" target="_parent">contact Tooplate</a> if you have anything to ask.</p>
                  </div>
                </div> 
              <!-- Iced Drinks Page -->
                  <div class="tm-list">
                      @foreach ($icedDrinks as $beverage)
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
<!-- end Iced Drinks Page -->
@endsection