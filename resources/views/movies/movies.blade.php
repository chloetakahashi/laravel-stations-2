<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Practices</title>
</head>

<body>
    @include('shared.success-message')
    @include('shared.search-bar')
    <a href="{{ route('movie.create') }}">映画を登録する</a>
    <table>
        <tr>
            <th>映画タイトル</th>
            <th>画像URL</th>
            <th>公開年</th>
            <th>上映中かどうか</th>
            <th>概要</th>
            <th>登録日時</th>
            <th>更新日時</th>
            <th>管理</th>
        </tr>
        @foreach ($movies as $movie)
            <tr>
                <td>{{ $movie->title }}</td>
                <td><img src={{ $movie->image_url }} alt="" width="300" height="200"></td>
                <td>{{ $movie->published_year }}</td>
                <td>{{ $movie->is_showing ? '上映中' : '上映予定' }}</td>
                <td>{{ $movie->description }}</td>
                <td>{{ $movie->created_at }}</td>
                <td>{{ $movie->updated_at }}</td>
                <td><a href="{{ route('movie.edit', ['id' => $movie->id]) }}">編集 | </a></td>
                <td>
                    <form method="POST" action="{{ route('movie.destroy', ['id' => $movie->id]) }}">
                        @csrf
                        @method('delete')
                        <button onclick="return confirm('削除してよろしいでしょうか？')">削除</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    {{ $movies->links() }}
</body>

</html>
