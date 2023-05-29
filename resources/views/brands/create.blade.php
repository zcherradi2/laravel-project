@extends('welcome')
        <style>
            #container{
                margin: 30px 30px 30px 30px;
                padding: 30px 30px 30px 30px;
                font-size: 30px;
                background-color: rgba(0, 0, 0, 0.192);
                border-radius: 20px;
                text-align:right;
            }
            .btn{
                background-color: rgba(25, 144, 255, 0.171);
                border-radius:15px;
                box-shadow: #00000075 0px 0px 10px;
                padding: 5px 30px 7px 30px
            }
            input{
                border:#00000075 2px solid;
            }
        </style>
        @section('content')
        <div>
        <h3 style="text-align: center;font-size:50px">create a brand</h3>
        <div id="container">
            <form method="post" action="{{route('brands.store')}}">
                {{ csrf_field() }}
                <input type="datetime" value="{{now()}}" name="creation_date" hidden>
                <div>
                <label for="name">name:</label>
                <input type="text" name="name" id="name" value="{{old('name')}}"><br>
                @error('name') <p style="color: #ef4444;font-size:25px;">{{$message}}</p>@enderror
                    
                </div>
            <div>
                <label for="website">website</label>
                <input type="email" id="website" name="website" value="{{old('email')}}"><br>
                @error('website') <p style="color: #ef4444;font-size:25px;">{{$message}}</p>@enderror
            </div>
            <div>
                <label for="status">status:</label>
                <label for="active">active:</label>
                <input type="radio" name="status" value="{{config('status.active')}}" id="active" checked>
                <label for="inactive">inactive:</label>
                <input type="radio" name="status" value="{{config('status.inactive')}}" id="inactive"><br>
            </div>
                <button type="submit" class="btn">create</button>
            </form>
        </div>
    </div>
    @endsection
    