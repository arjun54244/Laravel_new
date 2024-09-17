<!-- <ul>
    @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
</ul>

<form action="{{route("products.insert.post")}}" method="POST ">
    <input type="text" name="p_name" placeholder="Product Name" /><br>
    <input type="text" name="p_slug" placeholder="Product Slug" /><br>
    <input type="number" name="p_price" placeholder="Product Price" /><br>
    <input type="date" name="p_date" placeholder="Product date" /><br>
    <button type="submit">Submit</button>
</form> -->

@if (session('wellcome'))
    <div class="alert alert-success">
        {{ session('wellcome') }}
    </div>
@endif