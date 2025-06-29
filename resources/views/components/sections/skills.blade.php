<div class="w-full h-screen bg-background autoscroll-section flex  items-center justify-center px-6 space-x-4 md:space-x-10"
    x-data="{ visible: false }" x-init="let observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                visible = true;
                observer.unobserve($el); // animate only once
            }
        });
    }, { threshold: 0.5 });
    
    observer.observe($el);">
    <h1 class="font-semibold text-2xl uppercase cursor-copy md:text-8xl text-center" title="click to copy" x-show="visible"
        x-transition:enter="transition transform duration-[1600ms]" x-transition:enter-start="-translate-x-10 opacity-0"
        x-transition:enter-end="translate-x-0 opacity-100">
        skills</h1>
    <div class="flex-1 grid grid-cols-3 gap-2 md:gap-10">
        <div class="p-6 text-center min-h-40">skill $</div>
        <div class="p-6 text-center min-h-40">skill $</div>
        <div class="p-6 text-center min-h-40">skill $</div>
        <div class="p-6 text-center min-h-40">skill $</div>
        <div class="p-6 text-center min-h-40">skill $</div>
        <div class="p-6 text-center min-h-40">skill $</div>

    </div>
</div>
