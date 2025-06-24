<div class="flex items-center justify-between w-full bg-background text-text md:text-2xl text-xl md:py-6 md:px-10 py-4 px-6 fixed top-0 left-0 z-50"
    :class="show ? 'bg-text text-background' : ''">
    <h1 class="Italic font-semibold capitalize" :class="show ? 'text-background' : 'text-text'">Djema abdelmalek</h1>
    <ul class="md:flex hidden flex-row items-center justify-center md:space-x-12">
        <a href="{{ route('home') }}"
            class="cursor-pointer {{ request()->is(['/']) ? 'underline underline-offset-8' : '' }}">
            <li class="font-semibold">Home</li>
        </a>
        <a href="" class="cursor-pointer {{ request()->is(['/work']) ? 'underline underline-offset-8' : '' }}">
            <li class="font-semibold">Work</li>
        </a>
        <a href="" class="cursor-pointer {{ request()->is(['/about']) ? 'underline underline-offset-8' : '' }}">
            <li class="font-semibold">About</li>
        </a>
        <a href=""
            class="cursor-pointer {{ request()->is(['/contact']) ? 'underline underline-offset-8' : '' }}">
            <li class="font-semibold">Contact</li>
        </a>
    </ul>
    <div class="md:block hidden ">
        <x-lucide-sunset class="md:w-8 md:h-8 cursor-pointer" x-show="!$store.theme.darkMode"
            @click="$store.theme.toggle()" />
        <x-lucide-sunrise class="md:w-8 md:h-8 cursor-pointer" x-show="$store.theme.darkMode"
            @click="$store.theme.toggle()" />
    </div>
    <div class="md:hidden block cursor-pointer transition-colors duration-[2000ms]" @click="show = !show"
        :class="show ? 'text-background' : 'text-text'">
        <x-lucide-menu class="w-8 h-8 cursor-pointer" x-show="!show" />
        <x-lucide-x class="w-8 h-8 cursor-pointer" x-show="show" />
    </div>
</div>
