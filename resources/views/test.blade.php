<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
</head>
<body>
<div class="tm-container">
      <!-- Site Header -->
      @include('includes.siteHeader')
       <!-- end Site Header -->

       <main class="tm-main">
       <div id="drink" class="tm-page-content">
        
      <!-- Drink Menu Page -->
      @include('includes.drinkMenu')
      <!-- end Drink Menu Page -->

      <!-- About Us Page -->
      @include('includes.about')
      <!-- end About Us Page -->

      <!-- Special Items Page -->
      @include('includes.specialItems')
      <!-- end Special Items Page -->

      <!-- Contact Page -->
      @include('includes.contact')
      <!-- end Contact Page -->
        </main>
      </div>  
    </div>
  
  <!-- Background video+footerJS -->
  @include('includes.backGroundvideoJS')
</body>
</html>