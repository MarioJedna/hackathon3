@include('common.html-start')

@if (is_null($animal->id))
    <form action="{{ route('animals.insert') }}" method="post">
    @else
        <form action="{{ route('animals.update', $animal->id) }}" method="post">
            @method('PUT')
@endif

@csrf
<br>
Owner: <input type="text" name="owner_id" value="{{ old('owner_id', $animal->owner_id) }}"><br>
Name: <input type="text" name="name" value="{{ old('name', $animal->name) }}"><br>
Species: <input type="text" name="species" value="{{ old('species', $animal->species) }}"><br>
Breed: <input type="text" name="breed" value="{{ old('breed', $animal->breed) }}"><br>
Age: <input type="number" name="age" value="{{ old('age', $animal->age) }}"><br>
Weight: <input type="number" name="weight" value="{{ old('weight', $animal->weight) }}"><br>
<button type="submit">Submit</button>

</form>

@if (isset($animal->id))
    <img src="/images/pets/{{ $animal->image->path }}" alt="">
@endif


@include('common.html-end')
