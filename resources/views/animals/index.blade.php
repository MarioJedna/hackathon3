<ul>
    @foreach ($animals as $animal)
        <li>{{ $animal->name }}</li>
    @endforeach
</ul>
