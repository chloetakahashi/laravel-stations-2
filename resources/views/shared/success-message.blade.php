@if (session()->has('success'))
    <div>
        {{ session('success') }}
    </div>
@endif
