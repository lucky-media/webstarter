<footer>
    <div class="bg-gray-200">
        <div class="h-32"></div>
        <div class="mt-8 bg-black pb-16 sm:mt-12 sm:pb-20 lg:pb-12">
            <div class="relative">
                <div class="absolute inset-0 h-1/2 bg-gray-100"></div>
                <div class="relative max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="bg-orange-500 rounded-lg px-6 py-16 md:py-32">
                        <h3 class="text-white text-2xl lg:text-4xl font-bold text-center">Subscribe to our newsletter</h3>

                        <div class="w-full max-w-lg mx-auto mt-8">
                            <label for="email" class="sr-only">Email</label>
                            <div class="mt-1 flex flex-col md:flex-row rounded-md shadow-sm">
                                <div class="relative flex-grow focus-within:z-10">
                                    <input id="email"
                                           class="form-input block w-full px-5 py-5 rounded-none md:rounded-l-md transition ease-in-out duration-150 sm:text-sm sm:leading-5"
                                           placeholder="John Doe">
                                </div>
                                <button class="mt-2 md:mt-0 md:-ml-px px-10 py-5 text-sm font-medium uppercase md:rounded-r-md text-white bg-gray-900 hover:bg-black focus:outline-none transition ease-in-out duration-150">
                                    Subscribe
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container mt-24">
                <div class="flex flex-col items-center md:flex-row justify-between">
                    <a href="/" class="font-bold text-white text-3xl text-left leading-none mb-8 md:mb-0">tailwind <br> pages</a>

                    <ul class="flex flex-row space-x-2 md:space-x-6">
                        @foreach($page->social_media as $item)
                            <li>
                                <a class="w-16 h-16 rounded-full border-2 border-white border-opacity-25 inline-flex items-center justify-center hover:border-opacity-100 transition-all ease-in-out duration-200 group"
                                   href="{{ $item->url }}">
                                    <x-icon name="{{ strtolower($item->name) }}" class="text-white w-8 h-8"></x-icon>
                                    <span class="sr-only">{{ $item->name }}</span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <div class="flex flex-col items-center justify-between mt-24">
                    <p class="text-gray-800 font-medium mb-6">2020 Copyright © Tailwind Pages</p>
                    <p class="text-gray-800 font-medium">Made with love from <a href="https://www.luckymedia.dev/" class="text-orange-500 hover:underline">Lucky Media</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>
