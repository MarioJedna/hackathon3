@include("common.html-start")
{{-- @php dd($search);
@endphp --}}
<ul>
    First Name:
    <li>{{$search->first_name}}</li>
    Last Name:
    <li>{{$search->surname}}</li>
    Email:
    <li>{{$search->email}}</li> 
    Phone No.:  
    <li>{{$search->phone}}</li>  
    Address: 
    <li>{{$search->address}}</li>    
</ul>


@foreach($search->animal as $animal)
<li><a href="{{ route('animals.detail', ['id' => $animal->id]) }}">{{ $animal->name }}</a></li>

@endforeach

@include("common.html-end")