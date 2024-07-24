   <!-- Site Header -->
        <div class="tm-left">
        <div class="tm-left-inner">
          <div class="tm-site-header">
            <i class="fas fa-coffee fa-3x tm-site-logo"></i>
            <h1 class="tm-site-name">Wave Cafe</h1>
          </div>
          <nav class="tm-site-nav">
            <ul class="tm-site-nav-ul">
              <li class="tm-page-nav-item">
              <a class="tm-page-link {{ request()->route()->getName() === 'icedDrinkes' || request()->route()->getName() === 'hotDrinks' || request()->route()->getName() === 'fruitJuice' ? 'active' : '' }}" href="{{ route('icedDrinkes') }}">
              <i class="fas fa-mug-hot tm-page-link-icon"></i>
                  <span>Drink Menu</span>
                </a>
              </li>
              <li class="tm-page-nav-item">
              <a  class="tm-page-link {{request()->is('aboutus') ? 'active' : ''}}" href="{{route('aboutus')}}">
              <i class="fas fa-users tm-page-link-icon"></i>
                  <span>About Us</span>
                </a>
              </li>
              <li class="tm-page-nav-item">
              <a class="tm-page-link {{request()->is('specials') ? 'active' : ''}}" href="{{route('specials')}}">
              <i class="fas fa-glass-martini tm-page-link-icon"></i>
                  <span>Special Items</span>
                </a>
              </li>
              <li class="tm-page-nav-item">
              <a  class="tm-page-link {{request()->is('contactus') ? 'active' : ''}}" href="{{route('contactus')}}">
              <i class="fas fa-comments tm-page-link-icon"></i>
                  <span>Contact</span>
                </a>
              </li>
            </ul>
          </nav>
        </div>        
      </div>