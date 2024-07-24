<div id="drink" class="tm-page-content">
 <!-- Drink Menu Page -->
 <nav class="tm-black-bg tm-drinks-nav">
   <ul>
     <li>
     <a href="{{ route('icedDrinks') }}" class="tm-tab-link {{ request()->route()->getName() === 'icedDrinks' ? 'active' : '' }}" data-id="cold">Iced Coffee</a>
     </li>
     <li>
     <a href="{{ route('hotDrinks') }}" class="tm-tab-link {{ request()->route()->getName() === 'hotDrinks' ? 'active' : '' }}" data-id="hot">Hot Coffee</a>
     </li>
     <li>
     <a href="{{ route('fruitJuice') }}" class="tm-tab-link {{ request()->route()->getName() === 'fruitJuice' ? 'active' : '' }}" data-id="juice">Fruit Juice</a>
     </li>
   </ul>
 </nav>
 <!-- end Drink Menu Page -->
</div>
