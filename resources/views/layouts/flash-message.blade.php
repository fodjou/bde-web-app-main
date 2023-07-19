<div class="max-w-lg mx-auto mt-2">

    @if(session()->has('success'))
        <div class="flex bg-green-100 roundedd-lg p-4 text-sm text-green-700">
            {{ session('success') }}
        </div>
    @endif

    @if(session()->has('info'))
        <div class="flex bg-blue-100 roundedd-lg p-4 text-sm text-blue-700">
            {{ session('info') }}
        </div>
    @endif

    @if(session()->has('error'))
        <div class="flex bg-red-100 roundedd-lg p-4 text-sm text-red-700">
            {{ session('error') }}
        </div>
    @endif
</div>