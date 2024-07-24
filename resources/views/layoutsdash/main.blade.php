<!DOCTYPE html>
<html lang="en">
  <head>
    @include('includesdash.head')
  </head>
        <!-- menu profile quick info -->
        @include('includesdash.menuProfile')
        <!-- /menu profile quick info -->

        <!-- sidebar menu -->
        @include('includesdash.sidebarMenu')
		<!-- /sidebar menu -->

        <!-- /menu footer buttons -->
        @include('includesdash.menuFooter')
        <!-- /menu footer buttons -->

        <!-- top navigation -->
        @include('includesdash.topNav')
        <!-- /top navigation -->

     @yield('content') 

        <!-- footer content -->
        @include('includesdash.footer')
       <!-- /footer content -->

        <!-- footerJS -->
        @include('includesdash.footerJS')
        <!-- footerJS -->
         
  </body>
</html>