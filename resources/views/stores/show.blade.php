@extends('welcome')
        <style>
            #container{
                margin: 30px 30px 30px 30px;
                padding: 30px 30px 30px 30px;
                font-size: 30px;
                background-color: rgba(0, 110, 255, 0.219);
                border-radius: 30px;
                box-shadow: #041a3650 0px 5px 30px
            }
            .btn{
                background-color: rgba(255, 255, 255, 0.39);
                border-radius:15px;
                box-shadow: #00000075 0px 0px 10px;
                padding: 5px 30px 7px 30px
            }
            .inline{
                display: inline-block;
            }
        </style>
@section('content')
        <div id='container'>
            {{view("storeInformation",["store"=>$store])}}
        </div>
 @endsection