@extends('welcome')
        <style>
            #container{
                text-align: center;
                margin: 30px 30px 30px 30px;
                padding: 30px 30px 30px 30px;
                font-size: 30px;
                background-color: rgba(0, 47, 255, 0.219);
                border-radius: 30px;
                box-shadow: #041a3650 0px 5px 30px;
            }
            .btn{
                background-color: rgba(25, 144, 255, 0.171);
                border-radius:15px;
                box-shadow: #00000075 0px 0px 10px;
                padding: 5px 30px 7px 30px;
            }
            input{
                background-color: rgba(197, 227, 255, 0.562);
                border:#4b5563 2px solid;
            }
        </style>

        @section('content')
        <div id="container">
            <h3 style="text-align: center;font-size:50px">edit the store</h3>
            <form  action="{{route('stores.update',$store->id)}}" method="POST">
                {{ csrf_field() }}
                @method("patch")
                <div>
                <label for="name">store name:</label>
                <input type="text" name="name" id="name" value="{{$store->name}}"><br>
            </div>
            <div>
                <label for="adress">adress:</label>
                <input type="text" id="website" name="adress" value="{{$store->adress}}"><br>
            </div>
            <div>
                <label for="status">status:</label>
                <label for="active">active:</label>
                <input type="radio" name="status" value="{{config('status.active')}}" id="active" @if($store->status === 'active') checked @endif>
                <label for="inactive">inactive:</label>
                <input type="radio" name="status" value="{{config('status.inactive')}}" id="inactive" @if($store->status === 'inactive') checked @endif ><br>
            </div>
                <button type="submit" class="btn">update</button>
            </form>
        </div>
        @endsection
    
