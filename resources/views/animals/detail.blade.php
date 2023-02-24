@include('common.html-start')



{{-- // "id" => 2
// "image_id" => 2
// "owner_id" => 2
// "name" => "Ming"
// "species" => "dog"
// "breed" => "Affenpinscher"
// "age" => 5
// "weight" => 7 --}}


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



@include('common.html-end')
