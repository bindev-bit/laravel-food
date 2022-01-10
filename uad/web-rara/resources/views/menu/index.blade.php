<x-app-layout>
    @if ($menu->isEmpty())
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
            <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                <span class="block">Menu is empty!</span>
                <span class="block text-indigo-600">Let's create your special menu now</span>
            </h2>
        </div>
    @else
        <div class="py-12">
            <div>
                <div class="max-w-2xl mx-auto px-4 sm:px-6 lg:max-w-7xl lg:px-8">
                    <h2 class="text-2xl font-extrabold tracking-tight text-gray-900">List all menu</h2>
                    <div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                        @foreach ($menu as $pd)
                            <div class="group relative">
                                <div
                                    class="w-full min-h-80 bg-gray-200 aspect-w-1 aspect-h-1 rounded-md overflow-hidden group-hover:opacity-75 lg:h-80 lg:aspect-none">
                                    <img src="{{ asset('storage/' . $pd->image_url) }}"
                                        alt="Front of men&#039;s Basic Tee in black."
                                        class="w-full h-full object-center object-cover lg:w-full lg:h-full">
                                </div>
                                <div class="mt-4 flex justify-between">
                                    <div>
                                        <h3 class="text-sm text-gray-700">
                                            <a href="{{ route('menu.edit', $pd->id) }}">
                                                <span aria-hidden="true" class="absolute inset-0"></span>
                                                {{ $pd->name }}
                                            </a>
                                        </h3>
                                        <p class="mt-1 text-sm text-gray-500">{{ $pd->description }}</p>
                                    </div>
                                    <p class="text-sm font-medium text-gray-900">{{ $pd->price }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @endif
</x-app-layout>
