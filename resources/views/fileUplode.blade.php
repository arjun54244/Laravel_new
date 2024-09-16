<ul>
    @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
</ul>

<h1>upload File Post</h1>
<form action="{{ route('products.update.file') }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="file" name="file" /><br>
    <button type="submit">Submit</button>
</form>
