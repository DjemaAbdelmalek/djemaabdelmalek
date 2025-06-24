<div x-show="show"
    class="md:hidden fixed  left-0 w-full  bg-text text-background h-screen flex flex-col items-start justify-center space-y-15  px-6"
    x-transition:enter="transition transform duration-[1200ms] ease-in-out" x-transition:enter-start="translate-y-full"
    x-transition:enter-end="translate-y-0" x-transition:leave="transition transform duration-[1200ms] ease-in-out"
    x-transition:leave-start="translate-y-0" x-transition:leave-end="translate-y-full">

    <ul class="flex flex-col space-y-6 text-6xl font-semibold ">
        <a href="{{ route('home') }}"
            class="cursor-pointer {{ request()->is(['/']) ? 'underline underline-offset-8' : '' }}">
            <li x-show="show" x-transition:enter="transition transform duration-[1600ms]"
                x-transition:enter-start="-translate-x-10 opacity-0" x-transition:enter-end="translate-x-0 opacity-100"
                class="cursor-pointer">Home</li>
        </a>
        <a href="" class="cursor-pointer {{ request()->is(['/work*']) ? 'underline underline-offset-8' : '' }}">
            <li x-show="show" x-transition:enter="transition transform duration-[1600ms]"
                x-transition:enter-start="-translate-x-20 opacity-0" x-transition:enter-end="translate-x-0 opacity-100">
                Work</li>
        </a>
        <a href="" class="cursor-pointer {{ request()->is(['/about*']) ? 'underline underline-offset-8' : '' }}">
            <li x-show="show" x-transition:enter="transition transform duration-[1600ms]"
                x-transition:enter-start="-translate-x-30 opacity-0" x-transition:enter-end="translate-x-0 opacity-100">
                About</li>
        </a>
        <a href=""
            class="cursor-pointer {{ request()->is(['/contact*']) ? 'underline underline-offset-8' : '' }}">
            <li x-show="show" x-transition:enter="transition transform duration-[1600ms]"
                x-transition:enter-start="-translate-x-40 opacity-0" x-transition:enter-end="translate-x-0 opacity-100">
                Contact</li>
        </a>
    </ul>
    <div class="space-y-2 ">
        <h1 class="font-semibold text-2xl">Currently a Freelancer.</h1>
        <h1 class="font-semibold text-2xl">Based in Algiers, Algeria</h1>
    </div>
    <div class="">
        <x-lucide-sunset class=" h-10 w-10 cursor-pointer" x-show="!$store.theme.darkMode"
            @click="$store.theme.toggle()" />
        <x-lucide-sunrise class="h-10 w-10 cursor-pointer" x-show="$store.theme.darkMode"
            @click="$store.theme.toggle()" />
    </div>
</div>
