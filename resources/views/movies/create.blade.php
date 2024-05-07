<h2>映画を登録する</h2>
<form action="{{ route('movie.store') }}" method="post">
    @csrf
    <div>映画タイトル</div>
    <input type="text" id="title" name="title">
    @error('title')
        <span>{{ $message }}</span>
    @enderror
    <div>画像URL</div>
    <input type="text" id="image_url" name="image_url">
    @error('image_url')
        <span>{{ $message }}</span>
    @enderror
    <div>公開年</div>
    <input type="text" id="published_year" name="published_year">
    @error('published_year')
        <span>{{ $message }}</span>
    @enderror
    <div>公開中かどうか</div>
    <input type="checkbox" name="is_showing" id="is_showing_0" value="0">上映予定
    <input type="checkbox" name="is_showing" id="is_showing_1" value="1">上映中
    @error('is_showing')
        <span>{{ $message }}</span>
    @enderror
    <div>概要</div>
    <textarea name="description" id="description" cols="30" rows="10"></textarea>
    @error('description')
        <span>{{ $message }}</span>
    @enderror
    <button type="submit">登録</button>
</form>
