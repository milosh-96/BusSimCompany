<div class="min-h-screen flex flex-col sm:justify-center items-center pt-2 sm:pt-0">
    @if(isset($logo))
    <div>
        {{ $logo }}
    </div>
    @endif

    <div class="w-full sm:max-w-md mt-2 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>
</div>
