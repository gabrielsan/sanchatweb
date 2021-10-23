@extends('layouts.app')

<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

<style>
            html, body {
                background-color: #EAE5E5;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
</style>

<div style="background-image:url('img/fundo/chat.png'); background-repeat:no-repeat; background-position:right">

<header style=" border: solid; height:50px; margin-top:-5px; border-color:white; background-color:white"> 
<center>
<img src="{{asset('img/logo/logo2.png')}}" alt="Logo"/>
        </center>
    <div  style="color:white"></div>
        </header>


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
        
                <div class="card-header"><b style="color:black">{{ __('Dashboard') }}</b></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
        
                        </div>
                    @endif

                    <b style="color:black">{{ __('You are logged in!') }}</b>
                </div>
            </div>
        </div>
    </div>
</div>

<textarea style="border-radius:5px ;margin-left:200px; border-color:white; height:130px; width:1150px; margin-top:320px"> </textarea>
<button type="submit" class="btn btn-primary"  style = "background-color:#641DA3 ; color:white ; border-radius:5px ; height:60px ; width:130px; font-size:20px; margin-top:-60px; margin-left:10px ">
                                Encerrar
                                </button>
                            <div>
                                <button type="submit" class="btn btn-primary"  style = "background-color:red ; color:white ; border-radius:5px ; height:60px ; width:130px; font-size:20px; margin-top:-130px; margin-left:10px ">
                                Denunciar
                                </button>
        </div>
        </div>
@endsection
