<!DOCTYPE html>
<html lang="en">
  <head>
  @include('includesdash.head')
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">

            <!-- menu profile quick info -->
            @include('includesdash.menuProfile')
            <!-- /menu profile quick info -->

            <!-- sidebar menu -->
            @include('includesdash.sidebarMenu')
			<!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            @include('includesdash.menuFooter')
            <!-- /menu footer buttons -->
    </div>
    </div>

        <!-- top navigation -->
        @include('includesdash.topNav')
        <!-- /top navigation -->

        
        <!-- page content -->
        @include('includesdash.pageContent')
        <!-- /page content -->

        <!-- footer content -->
        @include('includesdash.footer')
       <!-- /footer content -->
    </div>
    </div>
        <!-- footerJS -->
        @include('includesdash.footerJS')
        <!-- footerJS -->
         
  </body>
</html>