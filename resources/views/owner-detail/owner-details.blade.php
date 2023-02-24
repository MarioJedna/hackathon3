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
@include("common.html-end")