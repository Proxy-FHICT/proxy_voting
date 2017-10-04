<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Vote</title>

        <!-- Fonts -->
        <!--<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">-->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">

        <link href="{{ asset('css/custom.css') }}" rel="stylesheet" />

        <!-- Material Design Light -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
         <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.blue-pink.min.css" />  
        <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>        

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        
    </head>
    <body>
        <!--header-->
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
  <header class="mdl-layout__header mdl-color--primary-dark mdl-color-text--white-800 ">
    <div class="mdl-layout-icon"></div>
    <div class="mdl-layout__header-row">
      <!--<span class="mdl-layout__title">Teacher of 2017</span>-->
      <div class="mdl-layout-spacer"></div>
      <nav class="mdl-navigation">
        <!--<a class="mdl-navigation__link" href="#">CONTINUE, I HAVE SELECTED!</a>-->
        <!--<a class="mdl-navigation__link" href="#">Share</a>-->
      </nav>
    </div>
  </header>
  <div class="mdl-layout__drawer">
        <span class="mdl-layout__title">Teacher of 2017</a></span>
    <nav class="mdl-navigation">
      <a class="mdl-navigation__link" href="/">Restart Voting</a>
        <a class="mdl-navigation__link" href="https://www.facebook.com/FontysProxy/" target="_blank">Proxy Facebook</a>
      <a class="mdl-navigation__link" href="http://www.proxyict.com/" target="_blank">About Proxy</a>
      <a class="mdl-navigation__link" href="https://fontys.edu/" target="_blank">About Fontys</a>
        <!--<a class="mdl-navigation__link" href="#">Share</a>-->
    </nav>
  </div>       
        <!--<div class="mdl-layout__drawer">
            <span class="mdl-layout-title">PROXY VOTE</span>
            <nav class="mdl-navigation">
            <a class="mdl-navigation__link" href="">TEACHERS</a>
            <a class="mdl-navigation__link" href="">SHARE</a>
            </nav>
        </div>-->
        <div id="ribbon" class="mdl-color--primary ribbon" style="width:100%; height: 200pt; flex-shrink: 0; position: fixed; z-index: -1;">
        </div>
        <main class="mdl-layout__content">
            <div class="page-content">
            
            <!-- Your content goes here -->
            <!--page content-->
         <div class="mdl-grid">
<!--  not needed       
            <div class="mdl-cell mdl-cell--12-col mdl-typography--text-center">
                
            </div>-->
            <!--<div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet  mdl-color--white mdl-shadow--4dp">-->
            @yield('sectionsize')
                <div class="mdl-color--accent" style="width:100%; height: 10px;">
                </div>
                <div class="mdl-color-text--pink-A200">
                    @yield('extra')
                </div>
                <div class="mdl-typography--text-center">
                    <h2>@yield('caption')</h2>
                    <h3>@yield('title')</h3>
                    <h4>@yield('subtitle')</h4>
                </div>
                @yield('f_content')  
                <!--@yield('errors')-->
            </div>
            <!--spacer-->
            <div class="mdl-cell mdl-cell--4-col mdl-cell--2-col-tablet mdl-cell--hide-phone">
            </div>
            
            <!--end of grid-->
            </div>
            
        </main>
        </div>    
        </div>
         

    </body>
</html>
