<h2>映画を編集する</h2>
<form action="{{ route('movie.update', ['id' => $movie->id]) }}" method="post">
    @csrf
    @method('PATCH')
    <div>映画タイトル</div>
    <input type="text" id="title" name="title" value="{{ $movie->title }}">
    @error('title')
        <span>{{ $message }}</span>
    @enderror
    <div>画像URL</div>
    <input type="text" id="image_url" name="image_url" value="{{ $movie->image_url }}">
    @error('image_url')
        <span>{{ $message }}</span>
    @enderror
    <div>公開年</div>
    <input type="text" id="published_year" name="published_year" value="{{ $movie->published_year }}">
    @error('published_year')
        <span>{{ $message }}</span>
    @enderror
    <div>ジャンル</div>
    <input type="text" id="genre" name="genre" value="{{ $movie->genre?->name }}">
    @error('genre')
        <span>{{ $message }}</span>
    @enderror
    <div>公開中かどうか</div>
    <input type="checkbox" name="is_showing" id="is_showing_0" value="0"
        {{ $movie->is_showing == 0 ? 'checked' : '' }}>
    <input type="checkbox" name="is_showing" id="is_showing_1" value="1"
        {{ $movie->is_showing == 1 ? 'checked' : '' }}>
    @error('is_showing')
        <span>{{ $message }}</span>
    @enderror
    <div>概要</div>
    <textarea name="description" id="description" cols="30" rows="10">{{ $movie->description }}</textarea>
    @error('description')
        <span>{{ $message }}</span>
    @enderror
    <button type="submit">更新</button>
</form>
