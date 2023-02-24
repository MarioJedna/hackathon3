@include('common.html-start')
@if(is_null($owner->id))
<form action="{{route('owners.insert')}}" method='POST'>
@else
<form action="{{route('owner.update',$owner->id)}}" method='POST'>
    @method('PUT')
    @endif
    @csrf
<label for="name">Enter First Name: </label>
<input type="text" name="name"value="{{old('name',$owner->first_name)}}"><br>
<label for="surname">Enter Last Name: </label>
<input type="text" name="surname"value="{{old('surname',$owner->surname)}}"><br>
<label for="email">Enter E-Mail: </label>
<input type="email" name="email"value="{{old('email',$owner->email)}}"><br>
<label for="phone">Enter Phone Number: </label>
<input type="text" name="phone"value="{{old('phone',$owner->phone)}}"><br>
<label for="address">Enter Address: </label>
<input type="text" name="address"value="{{old('address',$owner->address)}}"><br>
<button>Submit</button>
</form>
@include('common.html-end')