@extends('welcome')
        <style>
            #container{
                text-align: right;
                margin: 30px 30px 30px 30px;
                padding: 30px 30px 30px 30px;
                font-size: 30px;
                background-color: rgba(0, 110, 255, 0.219);
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
                border:#00000075 2px solid;
            }
        </style>
        @section('content')
        <div id="container">
            <h3 style="text-align: center;font-size:50px">edit the brand</h3>
            <form  action="{{route('brands.update',$brand->id)}}" method="POST">
                {{ csrf_field() }}
                @method("patch")
                <div>
                    <label for="name">name:</label>
                    <input type="text" name="name" id="name" value="{{$brand->name}}"><br>
                </div>
                <div>
                    <label for="website">website:</label>
                    <input type="email" id="website" name="website" value="{{$brand->website}}"><br>
                </div>
                <div>
                    <label for="status">status:</label>
                    <label for="active">active:</label>
                    <input type="radio" name="status" value="{{config('status.active')}}" id="active" @if($brand->status === 'active') checked @endif>
                    <label for="inactive">inactive:</label>
                    <input type="radio" name="status" value="{{config('status.inactive')}}" id="inactive" @if($brand->status === 'inactive') checked @endif ><br>
                </div>
                <button type="submit" class="btn">update</button>
            </form>
        </div>
    @endsection