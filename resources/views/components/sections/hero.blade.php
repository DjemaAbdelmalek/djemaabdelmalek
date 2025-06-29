<div class="w-full h-screen bg-background autoscroll-section flex flex-col items-start justify-center px-6 space-y-20"
    x-data="{ animated: false }" x-init="setTimeout(() => animated = true, 100)">
    <h1 class="font-semibold md:text-8xl text-4xl" x-transition:enter="transition transform duration-[1600ms]"
        x-transition:enter-start="-translate-x-10 opacity-0" x-transition:enter-end="translate-x-0 opacity-100"
        x-show="animated">TALL <span class="text-xs md:text-lg font-extralight"><span
                class="font-semibold md:text-2xl">T</span>ailwind <span class="font-semibold md:text-2xl">A</span>lpinejs
            <span class="font-semibold md:text-2xl">L</span>aravel <span
                class="font-semibold md:text-2xl">L</span>ivewire</span>
        <br />
        DEVELOPER
    </h1>
    <div class="self-end">
        <h1 class="font-semibold md:text-8xl text-4xl uppercase"
            x-transition:enter="transition transform duration-[1600ms]"
            x-transition:enter-start="translate-x-10 opacity-0 " x-transition:enter-end="translate-x-0 opacity-100"
            x-show="animated">
            Djema <br /> abdelmalek <br /></h1>
        <h3 class="text-xs font-light md:text-2xl capitalize "
            x-transition:enter="transition transform duration-[1600ms]"
            x-transition:enter-start="translate-x-10 opacity-0" x-transition:enter-end="translate-x-0 opacity-100"
            x-show="animated">Freelancer - Based in Algiers, Algeria
        </h3>
    </div>
</div>
