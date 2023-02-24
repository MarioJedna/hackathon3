@include('common.html-start')

<ul>
    @foreach ($animals as $animal)
        <a href="{{ route('animals.detail', ['id' => $animal->id]) }}">{{ $animal->name }}</a><br>
    @endforeach
</ul>

@include('common.html-end')
