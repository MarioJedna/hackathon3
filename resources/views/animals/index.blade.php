@include('common.html-start')

<ul>
    @foreach ($animals as $animal)
        <li>{{ $animal->name }}</li>
    @endforeach
</ul>

@include('common.html-end')
