<div>
    <form action="{{ route('movie.search') }}" method="GET">
        <input name="keyword" type="text" id="search" value="{{ $keyword ? $keyword : '' }}">
        <button>検索</button>
        <input type="radio" name="is_showing" id="is_showing" value=""
            {{ $is_showing == '' ? 'checked' : '' }}>すべて
        <input type="radio" name="is_showing" id="is_showing_0" value="0"
            {{ $is_showing == 0 ? 'checked' : '' }}>上映予定
        <input type="radio" name="is_showing" id="is_showing_1" value="1"
            {{ $is_showing == 1 ? 'checked' : '' }}>上映中
    </form>
</div>
