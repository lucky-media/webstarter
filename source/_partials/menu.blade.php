<div x-data="{ isTop: false, isOpen: false }"
     x-on:scroll.window.passive="isTop = (window.pageYOffset > 150) ? true : false;"
     :class="{ 'sticky inset-0 z-50 bg-white shadow-lg': isTop, 'bg-blue-500': !isTop }"
     class="border-b border-white border-opacity-25 transition-all slide-in-out duration-300">
    <div class="container flex md:flex-row flex-wrap items-center justify-between py-5 md:py-0 md:flex-no-wrap">

        <a href="/"
           :class="{ 'text-grey-900': isTop ,'text-white': !isTop }"
           class="font-bold text-white text-xl text-left leading-none">
            tailwind <br> pages
        </a>

        <div @click="isOpen = !isOpen" class="block md:hidden">
            <svg class="fill-current w-8 h-8"
                 :class="{ 'text-grey-900': isTop ,'text-white': !isTop, 'text-orange-500': isOpen }"
                 xmlns="http://www.w3.org/2000/svg" fill="none"
                 viewBox="0 0 24 24">
                <path fill-rule="evenodd" d="M20.5 3.5h-17v17h17v-17zM2 2v20h20V2H2z" clip-rule="evenodd"/>
                <path fill-rule="evenodd" d="M17 8.5H7V7h10v1.5zM17 13h-6.667v-1.5H17V13zM17 17.5H7V16h10v1.5z"
                      clip-rule="evenodd"/>
            </svg>
        </div>

        <nav x-show.transition="true"
             class="w-full flex-grow md:flex flex-col md:flex-row items-center md:flex-grow-0 md:w-auto mt-5 md:mt-0"
             :class="{ 'md:block': isOpen, 'hidden': !isOpen }"
             @click.away="isOpen = false">
            @foreach($page->menu as $menu)
                <div class="-mb-px border-b md:border-b-2 last:border-b-0 md:last:border-b-2 md:border-transparent hover:border-orange-500 hover:bg-opacity-25 transition-all ease-in-out duration-150"
                    :class="{ 'text-grey-900 hover:bg-blue-500': isTop, 'text-white hover:bg-white': !isTop }">
                    <a href="{{ $menu->url }}" class="block px-6 py-8">{{ $menu->title }}</a>
                </div>
            @endforeach
        </nav>
    </div>
</div>
