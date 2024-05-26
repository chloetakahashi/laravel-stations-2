<ul>
    @foreach ($practices as $practice)
        <li>タイトル：{{ $practice->title }}</li>
    @endforeach
</ul>
