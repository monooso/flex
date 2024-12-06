<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Flex</title>

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>

<body class="font-sans antialiased bg-gray-50 text-gray-900 dark:bg-gray-950 dark:text-gray-50">
    <header class="p-4 border-b border-dotted border-gray-500">
        <h1 class="font-black uppercase text-sm">Flex</h1>
    </header>

    <section class="my-2 px-4">
        <ol class="border-b border-dotted border-gray-500 divide-y divide-gray-500 divide-dotted">
            @foreach ($exercises as $exercise)
                <li class="flex flex-row items-center justify-between py-6">
                    <div class="flex flex-col space-y-1">
                        <span class="font-black text-[0.6rem] text-gray-500 uppercase">{{ $exercise->muscle_group->value }}</span>
                        <span>{{ $exercise->name }}</span>
                    </div>

                    <a class="p-2 text-gray-500 rounded-full hover:bg-gray-500 hover:text-gray-900 dark:hover:text-gray-100" href="{{ $exercise->demo_url }}" target="_blank"
                       title="Watch a demonstration of this exercise">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="size-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="m15.75 10.5 4.72-4.72a.75.75 0 0 1 1.28.53v11.38a.75.75 0 0 1-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 0 0 2.25-2.25v-9a2.25 2.25 0 0 0-2.25-2.25h-9A2.25 2.25 0 0 0 2.25 7.5v9a2.25 2.25 0 0 0 2.25 2.25Z"/>
                        </svg>
                    </a>
                </li>
            @endforeach
        </ol>

        <p class="text-center mt-8">
            <a class="inline-block p-2 rounded-full bg-gray-500" href="{{ route('workout') }}" title="Generate a new workout">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182m0-4.991v4.99" />
                </svg>
            </a>
        </p>
    </section>
</body>
</html>
