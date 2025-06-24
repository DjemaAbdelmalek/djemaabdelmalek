<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles

    <!-- Alpine.js (with defer) -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Alpine Store: Dark Mode -->
    <script>
        document.addEventListener('alpine:init', () => {
            // Theme Store
            Alpine.store('theme', {
                darkMode: JSON.parse(localStorage.getItem('darkMode')) || false,
                toggle() {
                    this.darkMode = !this.darkMode;
                    localStorage.setItem('darkMode', JSON.stringify(this.darkMode));
                }
            });

            // Auto Scroll Observer
            Alpine.data('autoScrollOnView', () => ({
                observer: null,

                init() {
                    console.log("Alpine scroll observer initialized.");

                    this.observer = new IntersectionObserver(
                        (entries) => {
                            entries.forEach(entry => {
                                if (entry.isIntersecting) {
                                    console.log('Scrolling to section:', entry.target);
                                    entry.target.scrollIntoView({
                                        behavior: 'smooth',
                                        block: 'start'
                                    });
                                }
                            });
                        }, {
                            threshold: 0,
                            rootMargin: '0px 0px -1% 0px'
                        }
                    );

                    // Observe all .autoscroll-section elements
                    document.querySelectorAll('.autoscroll-section').forEach(section => {
                        this.observer.observe(section);
                    });
                }
            }));
        });
    </script>


</head>

<body x-data="{ show: false }" x-bind:class="{ 'dark': $store.theme.darkMode }"
    class="flex flex-col w-full min-h-screen bg-background text-text">
    <x-sections.header />
    <x-sections.mobile-menu />
    {{ $slot }}

    @livewireScripts
</body>

</html>
