<div x-data="{ isActive: false }"
     @mouseenter.passive="isActive = true"
     @mouseleave.passive="isActive = false"
     style="background: url('https://images.unsplash.com/photo-1507238691740-187a5b1d37b8?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=693&q=80') no-repeat center center / cover;" class="w-full min-h-40 md:min-h-60 relative cursor-pointer">

    <div x-show.transition.opacity.duration.400ms="isActive"
         style="background: linear-gradient(180deg, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.7774) 47.9%, #000000 100%)"
         class="absolute inset-0 flex flex-col items-start justify-end p-12">

        <x-pill color="bg-green-500">Free</x-pill>

        <p class="font-bold text-white text-3xl mt-3 mb-12">{{ $title }}</p>

        <a href="{{ $url }}" class="rounded-lg border border-white text-white text-sm uppercase px-6 py-2 group inline-flex items-center hover:bg-white hover:text-black transition-all ease-in duration-150">
            <svg class="fill-current w-5 h-5 mr-2 text-white group-hover:text-black" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                <path d="M12.357 10l1.179 1.178 2.357-2.357a3.333 3.333 0 10-4.715-4.714L8.822 6.464 10 7.643l2.357-2.357a1.667 1.667 0 112.357 2.357L12.357 10zM10 12.357l1.178 1.179-2.356 2.357a3.333 3.333 0 11-4.715-4.714l2.357-2.357L7.644 10l-2.357 2.357a1.667 1.667 0 102.357 2.357L10 12.357z"/>
                <path d="M12.357 8.821a.833.833 0 00-1.178-1.178l-3.536 3.535a.833.833 0 101.179 1.179l3.535-3.536z"/>
            </svg>

            Open Theme
        </a>
    </div>
</div>
