<form action="{{ route('products.update.post') }}" method="post">
    @csrf
    <input type="text" name="p_name" placeholder="Product Name" /><br>
    <input type="text" name="p_slug" placeholder="Product Slug" /><br>
    <input type="number" name="p_price" placeholder="Product Price" /><br>
    <input type="date" name="p_date" placeholder="Product date" /><br>
    <button type="submit">Submit</button>
</form>
<!-- print error  -->
@if($errors->any())
<ul>
    @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
</ul>
@endif  