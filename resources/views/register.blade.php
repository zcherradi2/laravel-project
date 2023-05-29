@extends('welcome')
        <style>
            .container{
                margin: 30px 30px 30px 30px;
                padding: 30px 30px 30px 30px;
                font-size: 30px;
                background-color: rgba(0, 0, 0, 0.192);
                border-radius: 20px;
                text-align: right;
                align-items: center;
            }
            .btn{
                background-color: rgba(25, 144, 255, 0.171);
                border-radius:15px;
                box-shadow: #00000075 0px 0px 10px;
                padding: 5px 30px 7px 30px
                ;
            }
            input{
                border:#00000075 2px solid;
            }
        </style>
        @section('content')
        <div>
            <h3 style="text-align: center;font-size:50px">Sign up</h3>
            <div>
                <form method="post" action="{{route('store_user')}}"  class="container">
                    {{ csrf_field() }}
                    {{-- <input type="datetime" value="{{now()}}" name="creation_date" hidden> --}}
                    <div>
                        <label for="name">name:</label>
                        <input type="text" name="name" id="name" value="{{old('name')}}"><br>
                        @error('name') <p style="color: #ef4444;font-size:25px;">{{$message}}</p>@enderror
                    </div>
                    <div>
                        <label for="email">email:</label>
                        <input type="email" name="email" id="email" value="{{old('email')}}"><br>
                        @error('email') <p style="color: #ef4444;font-size:25px;">{{$message}}</p>@enderror
                    </div>
                    <div>
                        <label for="password">password:</label>
                        <input type="password" id="password" name="password" value="{{old('password')}}"><br>
                        @error('password') <p style="color: #ef4444;font-size:25px;">{{$message}}</p>@enderror
                    </div><br>
                    <button type="submit" class="btn">create</button>
                </form>
            </div>
        </div>
        @endsection
    
