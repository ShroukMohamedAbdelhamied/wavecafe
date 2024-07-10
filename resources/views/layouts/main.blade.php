<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
</head>

<body>
   <div class="tm-container">
   <div class="tm-row">
      
      <!-- Site Header -->
      @include('includes.siteHeader')
       <!-- end Site Header -->

<main class="tm-main">

   @yield('content') 
      
</main>

   </div>
     <!-- Footer -->
     @include('includes.footer')
       <!-- end  Footer -->
   </div>

     <!-- footer+Background video+footerJS -->
     @include('includes.backGroundvideoJS')

</body>
</html>