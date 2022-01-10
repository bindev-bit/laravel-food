<!-- Section 1 -->
<section class="px-2 py-32 bg-white md:px-0">
    <div class="container items-center max-w-6xl px-8 mx-auto xl:px-5">
        <div class="flex flex-wrap items-center sm:-mx-3">
            <div class="w-full md:w-1/2 md:px-3">
                <div
                    class="w-full pb-6 space-y-6 sm:max-w-md lg:max-w-lg md:space-y-4 lg:space-y-8 xl:space-y-9 sm:pr-5 lg:pr-0 md:pb-0">
                    <h1
                        class="text-7xl font-extrabold tracking-tight text-gray-900 sm:text-5xl md:text-6xl lg:text-7xl xl:text-8xl">
                        <span class="block xl:inline">It's that</span>
                        <span class="block text-indigo-600 xl:inline">Simple.</span>
                    </h1>
                    <p class="mx-auto text-base text-gray-500 sm:max-w-md lg:text-xl md:max-w-3xl">It's never been
                        easier to build beautiful websites that convey your message and tell your story.</p>
                    <div class="relative flex flex-col sm:flex-row sm:space-x-4">
                        <a href="{{ route('list-products') }}"
                            class="flex items-center w-full px-6 py-3 mb-3 text-lg text-white bg-indigo-600 rounded-md sm:mb-0 hover:bg-indigo-700 sm:w-auto">
                            Order now
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-1" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12 5 19 12 12 19"></polyline>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/2">
                <div class="w-full h-auto overflow-hidden rounded-md shadow-xl sm:rounded-xl">
                    <img src="{{ asset('assets/home.jpg') }}">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section 2 -->
<section class="py-20 bg-white">
    <div class="container max-w-6xl mx-auto">
        <h2 class="text-4xl font-bold tracking-tight text-center">Our Features</h2>
        <p class="mt-2 text-lg text-center text-gray-600">Check out our list of awesome features below.</p>
        <div class="grid grid-cols-4 gap-8 mt-10 sm:grid-cols-8 lg:grid-cols-12 sm:px-8 xl:px-0">

            <div
                class="relative flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 overflow-hidden bg-gray-100 sm:rounded-xl">
                <div class="p-3 text-white bg-blue-500 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 " viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                        <path d="M5 8v-3a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2h-5"></path>
                        <circle cx="6" cy="14" r="3"></circle>
                        <path d="M4.5 17l-1.5 5l3 -1.5l3 1.5l-1.5 -5"></path>
                    </svg>
                </div>
                <h4 class="text-xl font-medium text-gray-700">Certifications</h4>
                <p class="text-base text-center text-gray-500">Each of our plan will provide you and your team with
                    certifications.</p>
            </div>

            <div
                class="flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 bg-gray-100 sm:rounded-xl">
                <div class="p-3 text-white bg-blue-500 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 " viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M18 8a3 3 0 0 1 0 6"></path>
                        <path d="M10 8v11a1 1 0 0 1 -1 1h-1a1 1 0 0 1 -1 -1v-5"></path>
                        <path
                            d="M12 8h0l4.524 -3.77a0.9 .9 0 0 1 1.476 .692v12.156a0.9 .9 0 0 1 -1.476 .692l-4.524 -3.77h-8a1 1 0 0 1 -1 -1v-4a1 1 0 0 1 1 -1h8">
                        </path>
                    </svg>
                </div>
                <h4 class="text-xl font-medium text-gray-700">Notification</h4>
                <p class="text-base text-center text-gray-500">Send out notifications to all your customers to keep
                    them engaged.</p>
            </div>

            <div
                class="flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 bg-gray-100 sm:rounded-xl">
                <div class="p-3 text-white bg-blue-500 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 " viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <polyline points="12 3 20 7.5 20 16.5 12 21 4 16.5 4 7.5 12 3"></polyline>
                        <line x1="12" y1="12" x2="20" y2="7.5"></line>
                        <line x1="12" y1="12" x2="12" y2="21"></line>
                        <line x1="12" y1="12" x2="4" y2="7.5"></line>
                        <line x1="16" y1="5.25" x2="8" y2="9.75"></line>
                    </svg>
                </div>
                <h4 class="text-xl font-medium text-gray-700">Home Delivery</h4>
                <p class="text-base text-center text-gray-500">High-quality bundles of awesome tools to help you
                    out.</p>
            </div>
        </div>
    </div>
</section>

@if ($menu->isNotEmpty())
    <section class="bg-white">
        <div class="w-full px-5 py-6 mx-auto space-y-5 sm:py-8 md:py-12 sm:space-y-8 md:space-y-16 max-w-7xl">

            <div class="flex flex-col items-center sm:px-5 md:flex-row">
                <div class="w-full md:w-1/2">
                    <a href="{{ route('menu.show', $top) }}" class="block">
                        <img class="object-cover w-full h-full rounded-lg max-h-64 sm:max-h-96"
                            src="{{ asset('storage/' . $top->image_url) }}">
                    </a>
                </div>
                <div class="flex flex-col items-start justify-center w-full h-full py-6 mb-6 md:mb-0 md:w-1/2">
                    <div
                        class="flex flex-col items-start justify-center h-full space-y-3 transform md:pl-10 lg:pl-16 md:space-y-5">
                        <div
                            class="bg-blue-500 flex items-center pl-2 pr-3 py-1.5 leading-none rounded-full text-xs font-medium uppercase text-white inline-block">
                            <svg class="w-3.5 h-3.5 mr-1" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            <span>Top menu</span>
                        </div>
                        <h1 class="text-4xl font-bold leading-none lg:text-5xl xl:text-6xl"><a
                                href="{{ route('menu.show', $top) }}">{{ $top->name }}</a></h1>
                        <p class="text-sm text-gray-500">{{ $top->description }}.</p>
                        <p class="pt-2 text-xs font-medium">
                            <span class="mx-1">$ </span>
                            <span class="mx-1 text-gray-600">{{ $top->price }}</span>
                        </p>
                    </div>
                </div>
            </div>

            <div class="flex grid grid-cols-12 pb-10 sm:px-5 gap-x-8 gap-y-16">
                @foreach ($menu as $key => $pd)
                    @if ($key > 0)
                        <div class="flex flex-col items-start col-span-12 space-y-3 sm:col-span-6 xl:col-span-4">
                            <a href="{{ route('products.show', $pd) }}" class="block">
                                <img class="object-cover w-full mb-2 overflow-hidden rounded-lg shadow-sm max-h-56"
                                    src="{{ asset('storage/' . $pd->image_url) }}">
                            </a>
                            @if ($pd->category->id == 1)
                                <div
                                    class="bg-purple-500 flex items-center px-3 py-1.5 leading-none rounded-full text-xs font-medium uppercase text-white inline-block">
                                    <span>{{ $pd->category->name }}</span>
                                </div>
                            @elseif($pd->category->id == 2)
                                <div
                                    class="bg-pink-500 flex items-center px-3 py-1.5 leading-none rounded-full text-xs font-medium uppercase text-white inline-block">
                                    <span>{{ $pd->category->name }}</span>
                                </div>
                            @else
                                <div
                                    class="bg-blue-500 flex items-center px-3 py-1.5 leading-none rounded-full text-xs font-medium uppercase text-white inline-block">
                                    <span>{{ $pd->category->name }}</span>
                                </div>
                            @endif

                            <h2 class="text-lg font-bold sm:text-xl md:text-2xl"><a
                                    href="{{ route('products.show', $pd) }}">{{ $pd->name }}</a>
                            </h2>
                            <p class="text-sm text-gray-500">{{ $pd->description }}.</p>
                            <p class="pt-2 text-xs font-medium">
                                <span class="mx-1">$ </span>
                                <span class="mx-1 text-gray-600">{{ $pd->price }}</span>
                            </p>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>
@else
    <div class="mx-auto mt-5 text-gray-500 mb-12 md:mt-12 md:max-w-lg md:text-center lg:text-lg">Menu
        <span
            class="relative mt-2 text-transparent bg-clip-text bg-gradient-to-br from-blue-600 to-indigo-500 md:inline-block">
            Menu
        </span> is empty.
    </div>
@endif

<section class="py-20 bg-white">
    <div class="px-4 mx-auto text-center max-w-7xl sm:px-6 lg:px-8">
        <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl md:text-5xl xl:text-6xl">
            The New Standard for Design
        </h2>
        <p class="max-w-md mx-auto mt-3 text-base text-gray-500 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
            Use our award-winning tools to help you maximize your profits. We've uncovered the correct recipe for
            converting visitors into customers.
        </p>
        <div class="flex justify-center mt-8 space-x-3">
            <a href="{{ route('list-products') }}"
                class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow hover:bg-indigo-700">
                Order now
            </a>
        </div>
    </div>
</section>

@livewire('footer')
