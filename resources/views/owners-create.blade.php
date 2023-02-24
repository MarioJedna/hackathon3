@include('common.html-start')
<form action="{{route('owners.insert')}}" method='POST'>
    @csrf
<label for="name">Enter First Name: </label>
<input type="text" name="name"><br>
<label for="surname">Enter Last Name: </label>
<input type="text" name="surname"><br>
<label for="email">Enter E-Mail: </label>
<input type="email" name="email"><br>
<label for="phone">Enter Phone Number: </label>
<input type="text" name="phone"><br>
<label for="address">Enter Address: </label>
<input type="text" name="address"><br>
<button>Submit</button>
</form>
@include('common.html-end')