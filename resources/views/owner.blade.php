@include("common.html-start")

 {{-- <ul> --}}
    @foreach ($result as $person)
 
    <a href="{{route('owner.details',$person->id)}}">{{$person->surname}}</a><br>
    
    @endforeach
 {{-- </ul> --}}

 @include("common.html-end")