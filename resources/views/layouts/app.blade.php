<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

<!-- Fonts
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
        -->
    <link rel="stylesheet" href="{{URL::asset('lib/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('lib/bootstrap/css/bootstrap-theme.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('lib/onsen/css/onsenui.css')}}">
    <link rel="stylesheet" href="{{URL::asset('lib/onsen/css/onsen-css-components.css')}}">

    <script type="text/javascript" src="{{URL::asset('lib/onsen/js/onsenui.js')}}"></script>



    <style>  ons-splitter-side[side="left"] {
              border-right: 1px solid #ddd;
             
        }

           ons-splitter-side[side="right"] {
              border-left: 1px solid #ddd;
             
        }
        .page__content {
            background-color: #f6f6f6;
            padding: 10px;
        }
             </style>
     
    <script>         function toggle(side) {
            var side = document.querySelector('ons-splitter-side[side="' + side + '"]');
            side.toggle();
        }     </script>
       
    <style>  body {
              font-family: 'Lato';
             
        }

           .fa-btn {
              margin-right: 6px;
             
        }

             </style>


</head>
<body>
<ons-splitter> 
    <ons-splitter-side side="left" swipeable collapse="portrait" width="200px"> 
        <ons-page> 
            <ons-toolbar> 
                <div class="center">Menu APP</div>
                   
            </ons-toolbar>
               
            <ons-list> 
                <ons-list-header>Menu 1</ons-list-header>
                 
                <ons-list-item>Item A</ons-list-item>
                 
                <ons-list-item>Item B</ons-list-item>
                  
                <ons-list-header>Tappable / Ripple</ons-list-header>
                 
                <ons-list-item tappable>Tap me</ons-list-item>
                  
                <ons-list-header>Chevron</ons-list-header>
                 
                <ons-list-item modifier="chevron" tappable>Chevron</ons-list-item>
                   
        </ons-page>
         
    </ons-splitter-side>
      
    <ons-splitter-content> 
        <ons-page> 
            <ons-toolbar> 
                <div class="left"> 
                    <ons-back-button>Regresar</ons-back-button>
                     
                </div>
                 
                <div class="center">Principal</div>
                 
                <div class="right"> 




                    <ons-toolbar-button onclick="toggle('right')"> 
                        <ons-icon icon="cog"> 
                    </ons-toolbar-button>
                     
                </div>
                 
            </ons-toolbar>
               
            <p style="padding: 10px 20px;"> 
                <ons-button onclick="toggle('left')">toggle left menu</ons-button>
                 
            </p>
              
            <p style="padding: 10px 20px;"> 
                <ons-button onclick="toggle('right')">toggle right menu</ons-button>
                 
            </p>
               @yield('content')   
            <div style="padding: 10px">  <h3>Malla Grid</h3>  
                <ons-row> 
                    <ons-col>uno</ons-col>
                     
                    <ons-col>dos</ons-col>
                     
                </ons-row>
                   <p></p>  
                <ons-row> 
                    <ons-col>Col</ons-col>
                     
                    <ons-col>Col</ons-col>
                     
                    <ons-col>Col</ons-col>
                     
                </ons-row>
                   <p></p> 
                <ons-row> 
                    <ons-col>1</ons-col>
                     
                    <ons-col>2</ons-col>
                     
                    <ons-col>3</ons-col>
                     
                    <ons-col>4</ons-col>
                     
                </ons-row>
                  
            </div>
              <a class="navbar-brand" href="{{ url('/') }}">  Laravel  </a> 
            <ul class="nav navbar-nav"> 
                <li><a href="{{ url('/home') }}">Home</a></li>
                 
            </ul>
               
        </ons-page>
         
    </ons-splitter-content>
      
    <ons-splitter-side side="right" width="300px" collapse swipeable threhold-ratio-should-open="0.4"> 
        <ons-page> 
            <ons-toolbar> 
                <div class="left"> 
                    <ons-toolbar-button onclick="toggle('right')">Cerrar</ons-toolbar-button>
                     
                </div>
                  
                <div class="center">Ajustes</div>
                 
            </ons-toolbar>
              
            <ons-list>  
                <ons-list-header>Usuario</ons-list-header>
                 @if (Auth::guest()) 
                    <ons-list-item> 
                        <div class="center">  <a href="{{ url('/login') }}">Login</a> </div>
                         
                    </ons-list-item> 
                    <ons-list-item> 
                        <div class="center">  <a href="{{ url('/register') }}">Register</a> </div>
                         
                    </ons-list-item>  
                @else

                    <ons-row> 
                        <ons-list-item> 
                        <ons-col width="30%" class="col ons-col-inner">


                                 <img class="list__item__thumbnail center" src="http://krisnova.com/wp-content/uploads/2016/07/krisnova_logo.png"> 


                        </ons-col>
                        <ons-col width="70%" class="col ons-col-inner">

                            <div class="left"> 
                                <span class="list__item__title">{{ Auth::user()->name }} {{ Auth::user()->last_name }} {{ Auth::user()->last_name_second }}</span> 
                                <p></p> 
                                <span class="list__item__subtitle">On the Internet</span> 
                            </div>

                        </ons-col>
                        </ons-list-item>  
                    </ons-row>


                    <ons-list-item>  <a href="{{ url('/logout') }}"> 
                            <div class="fa fa-btn fa-sign-out"></div>
                              Logout</a> 
                    </ons-list-item>  @endif          </ons-page>
         
    </ons-splitter-side>
     
</ons-splitter>
 


<!-- JavaScripts -->

{{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
