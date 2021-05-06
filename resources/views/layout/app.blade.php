<!DOCTYPE html>
<html lang="en">
    
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Kingdom Books</title>
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon/favicon.png" />

        @include('layout.styles')
    </head>

    <body class="home-5 home-6 home-8 home-9 home-furniture">
        <!-- main layout start from here -->
        <!--====== PRELOADER PART START ======-->

        <!-- <div id="preloader">
        <div class="preloader">
            <span></span>
            <span></span>
        </div>
    </div> -->

        <!--====== PRELOADER PART ENDS ======-->
        <div id="main">
            <!-- Header Start -->
            @include('layout.header')
            <!-- Header Section Start -->
            <!-- Header Section End -->
            <!-- Header End -->

             @yield('content')

            <!-- Footer Area start -->
            
            @include('layout.footer')
            <!--  Footer Area End -->
        </div>

        <!-- Modal -->
        
        @include('layout.preview')
        <!-- Modal end -->

        <!-- Scripts to be loaded  -->
        <!-- JS
============================================ -->

       @include('layout.scripts')

       
       
    </body>

</html>
