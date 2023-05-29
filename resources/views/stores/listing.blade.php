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
        box-shadow: #4b5563 5px 5px 25px;
    }
    #new{
        text-align: center;
        font-size: 25px;
        border-bottom: rgba(1, 1, 29, 0.445) 3px solid;
    }
</style>
<div class="max-w-7xl p-6 lg:p-8">
    @if(isset($brand_id)&&$brand_id)
    <a href="{{route("stores.createWithBrand",$brand_id)}}" id="new">create new store</a>
    @else
    <a href="{{route("stores.create")}}" id="new">create new store</a>
    @endif
<div class="mt-16">
<div class="grid grid-cols-1 md:grid-cols-2  lg:gap-8 container">
    @forelse ($stores as $store)
        {{view("storeItem",["store"=>$store])}}
    @empty
        <p>no stores available</p>
    @endforelse
</div>