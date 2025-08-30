<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title','Welcome')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @vite('resources/css/app.css')
        <!-- Scripts -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOM6g1z5g5e5e5e5e5e5e5e5e5e5e5e5e5e5e5" crossorigin="anonymous">
        @vite('resources/js/app.js')
        <style>
            html { 
                scroll-behavior: smooth;
            }
            
            body {
                scroll-behavior: smooth;
            }
            
            /* Smooth scroll for all anchor links */
            a[href^="#"] {
                transition: all 0.3s ease;
            }
            main {
                padding-top: 5rem; /* sesuai tinggi navbar */
            }

        </style>
</head>
    <body class="min-h-screen font-sans antialiased">
        <div class="flex flex-col min-h-screen">
            <x-navbar />
            <main class="flex-grow pt-16">
                @yield('content')
            </main>
            <x-footer></x-footer>
        </div>
        @vite('resources/js/aos-config.js')
        <script>
            // Enhanced smooth scrolling for anchor links
            document.addEventListener('DOMContentLoaded', function() {
                // Get all anchor links that start with #
                const anchorLinks = document.querySelectorAll('a[href^="#"]');
                
                anchorLinks.forEach(link => {
                    link.addEventListener('click', function(e) {
                        const targetId = this.getAttribute('href').substring(1);
                        const targetSection = document.getElementById(targetId);
                        
                        if (targetSection) {
                            e.preventDefault();
                            
                            // Smooth scroll to target
                            targetSection.scrollIntoView({
                                behavior: 'smooth',
                                block: 'start'
                            });
                            
                            // Add scroll margin to account for fixed navbar
                            targetSection.style.scrollMarginTop = '80px';
                        }
                    });
                });
                
                // Add scroll margin to all sections with IDs
                const sections = document.querySelectorAll('[id]');
                sections.forEach(section => {
                    section.style.scrollMarginTop = '80px';
                });
            });
        </script>
    </body>
</html>
