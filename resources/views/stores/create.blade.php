@extends('welcome')
        <style>
            #container{
                margin: 30px 30px 30px 30px;
                padding: 30px 30px 30px 30px;
                font-size: 30px;
                background-color: rgba(0, 0, 0, 0.192);
                border-radius: 20px;
                text-align: center;
            }
            .btn{
                background-color: rgba(25, 144, 255, 0.171);
                border-radius:15px;
                box-shadow: #00000075 0px 0px 10px;
                padding: 5px 30px 7px 30px
            }
        </style>
@section('content')
        <h3 style="text-align: center;font-size:50px">create a store</h3>
        <div id="container">
            <form method="post" action="{{route('stores.store')}}">
                {{ csrf_field() }}
                @if(isset($brand_id) && $brand_id)
                <input type="text" name="brand_id" value="{{$brand_id}}" hidden>
                @else
                <label for="brand_id">brand:</label>
                <select name="brand_id">
                    @foreach ($brands as $brand)
                        <option value="{{$brand->id}}">{{$brand->name}}</option>
                    @endforeach
                </select>
                @endif
                <div>
                <label for="name">name:</label>
                <input type="text" name="name" id="name" value="{{old('name')}}"><br>
                @error('name') <p style="color: #ef4444;font-size:25px;">{{$message}}</p>@enderror
                    
                </div>
            <div>
                <label for="adress">adress</label>
                <input type="text" id="adress" name="adress" value="{{old('adress')}}"><br>
                @error('adress') <p style="color: #ef4444;font-size:25px;">{{$message}}</p>@enderror
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
    
@endsection