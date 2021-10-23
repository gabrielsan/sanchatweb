<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sanchat</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
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
                font-size: 13px;
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

    
    <div style="background-image:url('img/fundo/fundo.png');"> 
    <div style="background-image:url('img/fundo/chat.png'); background-repeat:no-repeat;at; background-position:left"> 
    <div style="background-image:url('img/fundo/bot.png'); background-repeat:no-repeat; background-position:right"> 
    

        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links"  style="margin-right:820px">
                    @auth
                        <a href="{{ url('/home') }}">Login</a>
                    @else
                        <a href="{{ route('login') }}"  style="color:black ; text-decoration:none ; font-size:20px">Login</a>
                        &nbsp &nbsp <h><b> | </b></h> &nbsp &nbsp
                        <a href=""  style="color:black ; text-decoration:none ; font-size:20px">Quem somos</a>
                        &nbsp &nbsp <h><b> | </b></h> &nbsp &nbsp
                        <a href=""  style="color:black ; text-decoration:none ; font-size:20px">Sobre</a>
                </div>
                
                
            @endif
            

            <div class="content">
                <div class="title m-b-md">
                    
               
    <center>
    <img src="{{asset('img/logo/logo.png')}}" alt="Logo"/>
    </center>
       
        
                </div>

                <div>
            <center>  <a  href = " chat.blade.php " > <button  style= " background-color:#641DA3 ; border-radius:5px ; color:white ; height:71px; width:130px ; font-size:20px " > Texto </button > </a >
                      &nbsp &nbsp <h style= "color:black; font-size:20px"><b> ou </b></h> &nbsp &nbsp
                      <a  href = " "> <button  style= " background-color:#641DA3 ; border-radius:5px ; color:white ; height:71px; width:130px ; font-size:20px "> Vídeo </button> </a >
            </center >
                </div>

                &nbsp &nbsp &nbsp
     <center> <input  style = " border-radius:5px ; height:43px ; width:250px ; font-size:20px ; border-color:#641DA3 "   type = "text"  name = "nome"  placeholder = "     Selecione o idioma  " />
              <button   style = "background-color:#641DA3 ; color:white ; border-radius:5px ; height:50px ; width:130px; font-size:20px "   type="button"  value="Pesquisar"  onclick="msg ()">Pesquisar</button>
    </center>

        <br>
        <center> 
            <button  style= " background-color:#641DA3 ; border-radius:5px ; color:white ; height:71px; width:130px ; font-size:20px "> 
    @if (Route::has('register'))
                            <a href="{{ route('register') }}"  style= " color:white ; text-decoration:none">Cadastre-se</a>
                        @endif
                    @endauth
            </button>
        </center>

        <br><br><br><br>
    <center> <h> Este site é protegido pelo reCAPTCHA e aplicam-se os Termos de Serviço e Política de Privacidade do Google. </h> </center>

          
            </div>
        </div>
        </div>
        </div>
        </div>
        </div>
    </body>
       
</html>
