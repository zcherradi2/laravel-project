@if($brand)
<div style="text-align: center">
    <h3 style="text-align: center;font-size:50px">    <p style="display:inline;">name:    </p>
        <p style="display:inline;">{{$brand->name}}</p><br></h3>
    <p style="display:inline;">status:   </p>
    <p style="display:inline;">{{$brand->status}}</p><br>
    <p style="display:inline;">website:   </p>
    <a style="display:inline;" href={{$brand->website}}>{{$brand->website}}</a><br>
    <p style="display:inline;">creation date:    </p>
    <p style="display:inline-block;">{{$brand->creation_date}}</p><br><br>
    <a href="{{route("brands.edit",$brand->id)}}" class="btn inline">edit</a>
    <form action="{{route("brands.destroy",$brand->id)}}" method="POST" class="inline">
        @csrf
        @method("delete")
        <button type="submit" class="btn">delete</button>
    </form>
    {{-- <button href="{{route("brands.stores",$brand->id)}}" class="btn">stores</button> --}}
</div>
@endif