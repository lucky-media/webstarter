@extends('_layouts.master')

@section('body')
    <div class="bg-blue-500 relative">
        <div class="container py-32 md:py-48">
            <div class="w-full max-w-3xl mx-auto">
                <div class="flex flex-col items-center justify-center">
                    <h2 class="text-3xl lg:text-6xl font-bold text-white text-center">Tailwind CSS starter themes and more...</h2>
                    <x-button>Explore themes</x-button>
                </div>
            </div>
        </div>
        <div class="hidden md:block absolute right-0 bottom-0">
            <svg width="567" height="652" viewBox="0 0 567 652" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0)">
                    <path opacity="0.04"
                          d="M669.449 40.2451L260.255 276.465C242.119 286.981 218.649 280.732 208.134 262.444C197.618 244.309 203.867 220.839 222.155 210.324L631.349 -25.8965C649.484 -36.4121 672.954 -30.1637 683.469 -11.8757C693.833 6.25988 687.584 29.7295 669.449 40.2451Z"
                          fill="white"/>
                    <path opacity="0.04"
                          d="M778.684 328.55L369.49 564.77C351.354 575.286 327.885 569.038 317.369 550.75C306.854 532.614 313.102 509.144 331.39 498.629L740.584 262.409C758.72 251.893 782.189 258.142 792.705 276.43C803.068 294.565 796.82 318.035 778.684 328.55Z"
                          fill="white"/>
                    <path opacity="0.04"
                          d="M504.449 251.245L95.2545 487.465C77.1189 497.981 53.6494 491.732 43.1338 473.444C32.6182 455.309 38.8666 431.839 57.1546 421.324L466.349 185.103C484.484 174.588 507.954 180.836 518.469 199.124C528.833 217.26 522.584 240.729 504.449 251.245Z"
                          fill="white"/>
                    <path opacity="0.04"
                          d="M482.418 383.872L73.2243 620.092C55.0887 630.607 31.6191 624.359 21.1035 606.071C10.5879 587.935 16.8363 564.466 35.1243 553.95L444.318 317.73C462.454 307.214 485.923 313.463 496.439 331.751C506.955 349.886 500.554 373.356 482.418 383.872Z"
                          fill="white"/>
                </g>
                <defs>
                    <clipPath id="clip0">
                        <rect width="567" height="652" fill="white"/>
                    </clipPath>
                </defs>
            </svg>
        </div>
    </div>

    <div id="about" class="bg-gray-200">
        <div class="container py-16">
            <h3 class="font-bold text-xl md:text-2xl text-center text-gray-600 mb-12">
                Our themes are simple to use, practical yet powerful. <br> Looking for fresh designs and great
                functionality?
            </h3>
            <div class="flex flex-wrap -mx-4">
                <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-10 lg:mb-0">
                    <x-card>
                        <img src="assets/images/page.svg" class="w-64 h-auto object-cover" alt="page">
                        <p class="text-blue-900 text-center font-medium text-2xl mt-10">Clean and semantic code</p>
                    </x-card>
                </div>
                <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-10 lg:mb-0">
                    <x-card>
                        <img src="assets/images/customization.svg" class="w-64 h-auto object-cover" alt="customization">
                        <p class="text-blue-900 text-center font-medium text-2xl mt-10">Easy to customize</p>
                    </x-card>
                </div>
                <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-10 lg:mb-0">
                    <x-card>
                        <img src="assets/images/coding.svg" class="w-64 h-auto object-cover" alt="coding">
                        <p class="text-blue-900 text-center font-medium text-2xl mt-10">SEO and Accessible</p>
                    </x-card>
                </div>
            </div>
        </div>
    </div>

    <div class="container py-24">
        <h3 class="font-bold text-center text-gray-600 text-3xl md:text-4xl mb-20">Featured Themes</h3>

        <div class="flex flex-wrap justify-center -mx-4">
            @for($i=0; $i<=3; $i++)
            <div class="w-full md:w-1/2 lg:w-2/5 px-4 mb-10">
                <x-theme title="Blog theme" url="/"></x-theme>
            </div>
            @endfor
        </div>

        <div class="flex justify-center">
            <x-button>Explore Themes</x-button>
        </div>
    </div>

@endsection
