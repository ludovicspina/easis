<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-800">
    <div class="flex gap-4">
        <div>
        {{ $logo }}
        </div>
        <div class="text-5xl">Easis</div>
    </div>

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-gray-700 shadow-md overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>

    <a href="{{ route('home') }}" class="flex justify-center gap-4 w-full text-center hover:bg-gray-600 sm:max-w-md mt-6 px-6 py-4 bg-gray-700 shadow-md overflow-hidden sm:rounded-lg">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 15L3 9m0 0l6-6M3 9h12a6 6 0 010 12h-3" />
        </svg>
        <div>Retour</div>
    </a>
</div>
