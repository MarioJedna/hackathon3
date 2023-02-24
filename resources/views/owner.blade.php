@include("common.html-start")

 <ul>
    @foreach ($result as $person)
    <li>{{$person->surname}}</li>
    @endforeach
 </ul>

 @include("common.html-end")