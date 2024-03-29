<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Blog</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
  

 <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100%;
                margin: 0;
            }
            .bg {
                  /* The image used */
                  background-image: url("https://mdbootstrap.com/img/Photos/Horizontal/Nature/full page/img(11).jpg");

                  /* Half height */
                  height: 100%;

                  /* Center and scale the image nicely */
                  background-position: center center;
                  background-repeat: no-repeat;
                  background-size: cover;
                }
                .h6 {
                  line-height: 1.7;
                }

                

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
      
    </head>
     <body>
         <nav class="navbar navbar-dark bg-dark">
 
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                        <a href="{{route('logout')}}">Logout</a>
                    @endauth
                </div>

            @endif
          
         </nav>  
         <div class="bg">
     
              <!-- Content -->
              <div class="center" style="position: absolute; right: 60%;">
                <div style="position: relative; right: -60%;">"
               
               
                 
                 
                    <h1 class="h1-responsive font-weight-bold text-center white-text mt-sm-5">Welcome to my blog of thoughts about life   </h1>
                    <hr class="hr-light">
                    <h6 class="mb-4 text-center ">Share with us your thoughts and we will discuss about together </h6>
                </div>
            </div>

        </div>      
    </body>
      
</html>





