@if($store)
<div style="text-align: center">
    <h3 style="text-align: center;font-size:50px">    <p style="display:inline;">store name:    </p>
        <p style="display:inline;">{{$store->name}}</p><br></h3>
    <p style="display:inline;">status:   </p>
    <p style="display:inline;">{{$store->status}}</p><br>
    <p style="display:inline;">adress:   </p>
    <p style="display:inline;">{{$store->adress}}</p><br>
    <p style="display:inline;">brand:    </p>
    <p style="display:inline-block;">{{$store->brand->name}}</p><br><br>
    <a href="{{route("stores.edit",$store->id)}}" class="btn inline">edit</a>
    <form action="{{route("stores.destroy",$store->id)}}" method="POST" class="inline">
        @csrf
        @method("delete")
        <button type="submit" class="btn">delete</button>
    </form>
    {{-- <button href="{{route("brands.stores",$brand->id)}}" class="btn">stores</button> --}}
</div>
@endif