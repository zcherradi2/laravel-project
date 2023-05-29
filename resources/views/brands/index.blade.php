@extends('welcome')
        <style>
            .container{
                background-color: rgba(0, 110, 255, 0.219);
                border-radius: 30px;
                box-shadow: #041a3650 0px 5px 30px
            }
            .row{
                display: flex;
                margin: 30px 30px 30px 30px;
                flex-direction: column;
                box-shadow: #4b5563 5px 5px 25px
            }
        </style>
        @section('content')
        <div class="max-w-7xl p-6 lg:p-8">
        <div class="mt-16">
        <div class="grid grid-cols-1 md:grid-cols-2  lg:gap-8 container">
            @foreach ($brands as $brand)
                {{view("brandItem",["brand"=>$brand])}}
                @if($loop->iteration % 3 === 0)
                    
                @endif
            @endforeach
        </div>                    
    </div>
    </div>
    </div>
        @endsection