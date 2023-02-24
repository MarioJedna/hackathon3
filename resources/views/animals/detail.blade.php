@include('common.html-start')

<h1>{{ $beast->name }} ({{ $beast->species }})</h1>
<h3>Breed: </h3>
<p>{{ $beast->breed }}</p>
<h3>Age: </h3>
<p>{{ $beast->age }}</p>
<h3>Weight: </h3>
<p>{{ $beast->age }}</p>
<h3>Owner: </h3>
<p>{{ $beast->owner->first_name }} {{ $beast->owner->surname }}</p>
<h3>Image: </h3>
<img src="/images/pets/{{ $beast->image->path }}" alt="">

<form action="{{ route('animals.edit', $beast->id) }}" method="get">
    <button type="submit">Update</button>
</form>
<form action="{{ route('animals.delete', $beast->id) }}" method="post">
    @csrf
    @method('DELETE')
    <button type="submit">Delete</button>
</form>



@include('common.html-end')
