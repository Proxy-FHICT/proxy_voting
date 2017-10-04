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

        <!-- Material Design Light -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
         <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.blue-pink.min.css" />  
        <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>        

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        
    </head>
    <body>
        <!--header-->
<div class="mdl-layout mdl-js-layout">
  <header class="mdl-layout__header--transparent ">
    <div class="mdl-layout-icon"></div>
    <div class="mdl-layout__header-row">
      <span class="mdl-layout__title">FHICTster 2017</span>
      <div class="mdl-layout-spacer"></div>
      <!--<nav class="mdl-navigation">
        <a class="mdl-navigation__link" href="#">Teachers</a>
        <a class="mdl-navigation__link" href="#">Share</a>
      </nav>-->
    </div>
  </header>
  <div class="mdl-layout__drawer">
    <span class="mdl-layout__title">Material Design Lite</span>
    <nav class="mdl-navigation">
      <a class="mdl-navigation__link" href="#">Teachers</a>
        <a class="mdl-navigation__link" href="#">Share</a>
    </nav>
  </div>       
        <!--<div class="mdl-layout__drawer">
            <span class="mdl-layout-title">PROXY VOTE</span>
            <nav class="mdl-navigation">
            <a class="mdl-navigation__link" href="">TEACHERS</a>
            <a class="mdl-navigation__link" href="">SHARE</a>
            </nav>
        </div>-->
        <main class="mdl-layout__content">
            <div class="page-content">
            
            <!-- Your content goes here -->
            <!--page content-->
         <div class="mdl-grid">
         
            <!--Caption-->
            <div class="mdl-cell mdl-cell--12-col mdl-typography--text-center">
                <h2>@yield('caption')</h2>
                <h3>@yield('title')</h3>
                <h2>@yield('subtitle')</h2>
            </div>

            <!--left space -->
            <div class="mdl-cell mdl-cell--2-col">
            </div>
            <!-- lists -->
            <div class="mdl-cell mdl-cell--4-col">
            <span class=" mdl-typography--text-center">
            <h4>Teachers</h4>
                </span>
            <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
  <div class="mdl-tabs__tab-bar">
      <a href="#qual-a-panel" class="mdl-tabs__tab is-active">Qual A</a>
      <a href="#qual-b-panel" class="mdl-tabs__tab">Qual B</a>
      <a href="#qual-c-panel" class="mdl-tabs__tab">Qual C</a>
  </div>
  <div class="mdl-tabs__panel is-active" id="qual-a-panel">       
                @yield('teacher_list_a')
            </div>
             <div class="mdl-tabs__panel" id="qual-b-panel">
             <h5>Coming Soon</h5>
    <!--@yield('teacher_list_b')
    <!--to be added later-->
  </div>
  <div class="mdl-tabs__panel" id="qual-c-panel">
  <h5>Coming Soon</h5>
   <!--@yield('teacher_list_c')
   <!--to be added later-->
  </div>
   </div>
         </div>
<!-- spacer -->
<div class="mdl-cell mdl-cell--1-col  ">
</div>
          <!-- responses -->
<div class="mdl-cell mdl-cell--2-col  mdl-layout--fixed ">
    <span class=" mdl-typography--text-center">
                    <h4>Your choice</h4>
                </span>

                @yield('response_form')
            </div>
   
            
            <!--end of grid-->
            </div>
            
        </main>
        </div>    
        </div>
         

    </body>
</html>
