@if (session()->has('success'))
    <div>
        {{ session('success') }}
    </div> 
@elseif (session()->has('error'))
<div>
    {{ session('error') }}
</div> 
@endif
