<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horizon</title>
    <link rel="stylesheet" href="/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.min.css" integrity="sha512-06CZo7raVnbbD3BlY8/hGUoUCuhk8sTdVGV3m3nuh9i2R+UmkLbLRTE/My8TuJ3ALbDulhBObJQWtOUt0mXzNQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/min/tiny-slider.js" integrity="sha512-j+F4W//4Pu39at5I8HC8q2l1BNz4OF3ju39HyWeqKQagW6ww3ZF9gFcu8rzUbyTDY7gEo/vqqzGte0UPpo65QQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            AOS.init({
                once: true,
                anchorPlacement: 'bottom-top',
                duration: 1000,
            });
            const slider = tns({
                container: '.tiny-slider',
                controlsContainer: ".tiny-slider-control",
                navContainer: ".tiny-slider-nav",
                items: 1,
                slideBy: 'page',
                autoplay: true,
                autoplayButtonOutput: false,
                autoplayHoverPause: true,
            });
            const slider2 = tns({
                container: '.tiny-slider-2',
                controlsContainer: ".tiny-slider-control-2",
                nav: false,
                items: 3,
                slideBy: 1,
                gutter: 10,
                autoplay: true,
                autoplayButtonOutput: false,
                autoplayHoverPause: true,
                speed: 800,
            });
        });
    </script>
</head>

<body>
    <div class="bg-blue-800">
        <ul class="max-w-screen-2xl mx-auto flex text-white py-3">
            <li class="mr-8"><i class="fa-solid fa-location-dot"></i> 80000, Agadir, Morocco</li>
            <li><a href="mailto:"><i class="fa-solid fa-envelope"></i> ss@ss.com</a></li>
            <li class="ml-auto"><a href="/"><i class="fa-brands fa-facebook-f"></i> facebook/test</a></li>
        </ul>
    </div>
    <header class="sticky top-0 [position:-webkit-sticky] shadow-md z-10">
        <nav id="top-nav" class="bg-white">
            <div class="max-w-screen-2xl mx-auto flex py-5 items-center">
                <img class="mr-auto" src="" alt="">
                <ul class="flex overflow-auto">
                    <li class="group active"><a class="block font-medium py-3 px-5 rounded-lg group-[.active]:font-bold group-[.active]:text-white group-[.active]:bg-rose-800 group-[:not(.active)]:hover:bg-neutral-200 mx-1 group-[:not(.active)]:text-blue-800" href="#">Accueil</a></li>
                    <li class="group"><a class="block font-medium py-3 px-5 rounded-lg group-[.active]:font-bold group-[.active]:text-white group-[.active]:bg-rose-800 group-[:not(.active)]:hover:bg-neutral-200 mx-1 group-[:not(.active)]:text-blue-800" href="#services">Services</a></li>
                    <li class="group"><a class="block font-medium py-3 px-5 rounded-lg group-[.active]:font-bold group-[.active]:text-white group-[.active]:bg-rose-800 group-[:not(.active)]:hover:bg-neutral-200 mx-1 group-[:not(.active)]:text-blue-800" href="#top-routes">Voyageurs</a></li>
                    <li class="group"><a class="block font-medium py-3 px-5 rounded-lg group-[.active]:font-bold group-[.active]:text-white group-[.active]:bg-rose-800 group-[:not(.active)]:hover:bg-neutral-200 mx-1 group-[:not(.active)]:text-blue-800" href="/">Touristique</a></li>
                    <li class="group"><a class="block font-medium py-3 px-5 rounded-lg group-[.active]:font-bold group-[.active]:text-white group-[.active]:bg-rose-800 group-[:not(.active)]:hover:bg-neutral-200 mx-1 group-[:not(.active)]:text-blue-800" href="/">Messagerie</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <section id="hero">
        <div class="relative">
            <div class="tiny-slider max-h-screen h-[800px]">
                <div class="relative h-full">
                    <img class="absolute inset-0 w-full h-full object-cover" src="https://images.unsplash.com/photo-1446694292248-2c2a7e575b1b" alt="">
                    <a href="#" class="block relative h-full hover:pb-10 flex justify-center items-center transition-all duration-500 bg-gradient-to-t from-[rgba(0,0,50,.7)] to-[rgba(0,0,50,.3)]">
                        <h3 class="text-3xl py-2 text-center h-full flex justify-center items-center text-white">Hash Brown and Bacon Omelet Cups</h3>
                    </a>
                </div>
                <div class="relative h-full">
                    <img class="absolute inset-0 w-full h-full object-cover" src="https://images.unsplash.com/photo-1446694292248-2c2a7e575b1b" alt="">
                    <a href="#" class="block relative h-full hover:pb-10 flex justify-center items-center transition-all duration-500 bg-gradient-to-t from-[rgba(0,0,50,.7)] to-[rgba(0,0,50,.3)]">
                        <h3 class="text-3xl py-2 text-center h-full flex justify-center items-center text-white">Hash Brown and Bacon Omelet Cups</h3>
                    </a>
                </div>
                <div class="relative h-full">
                    <img class="absolute inset-0 w-full h-full object-cover" src="https://images.unsplash.com/photo-1446694292248-2c2a7e575b1b" alt="">
                    <a href="#" class="block relative h-full hover:pb-10 flex justify-center items-center transition-all duration-500 bg-gradient-to-t from-[rgba(0,0,50,.7)] to-[rgba(0,0,50,.3)]">
                        <h3 class="text-3xl py-2 text-center h-full flex justify-center items-center text-white">Hash Brown and Bacon Omelet Cups</h3>
                    </a>
                </div>
            </div>
            <div class="tiny-slider-nav absolute bottom-0 left-0 right-0 mx-auto w-fit text-center py-1">
                <button class="group mx-1">
                    <span class="block w-3 h-3 rounded-full bg-neutral-400 group-[.tns-nav-active]:bg-white"></span>
                </button>
                <button class="group mx-1">
                    <span class="block w-3 h-3 rounded-full bg-neutral-400 group-[.tns-nav-active]:bg-white"></span>
                </button>
                <button class="group mx-1">
                    <span class="block w-3 h-3 rounded-full bg-neutral-400 group-[.tns-nav-active]:bg-white"></span>
                </button>
            </div>
            <div class="tiny-slider-control">
                <button class="absolute top-1/2 -translate-y-1/2  left-0 p-2 text-neutral-400 hover:text-white"><i class="fa-solid fa-angle-left  text-7xl"></i></button>
                <button class="absolute top-1/2 -translate-y-1/2 right-0 p-2 text-neutral-400 hover:text-white"><i class="fa-solid fa-angle-right text-7xl"></i></button>
            </div>
        </div>
    </section>
    <section id="services">
        <div class="max-w-screen-xl mx-auto py-10">
            <h5 class="text-rose-700 px-4 py-1 text-xl font-medium">Nos Services</h5>
            <h2 class="text-blue-800 px-4 py-8 text-5xl font-bold">Ce que nous offrons pour vous</h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 py-5 gap-10">
                <div class="border p-5 text-center" data-aos="fade-down-right">
                    <i class="fa-solid fa-truck-pickup block mx-auto text-6xl py-4 text-rose-800"></i>
                    <h4 class="text-3xl text-blue-800 py-2 font-bold">Transport de Marchandises</h4>
                    <p class="text-neutral-500">Nous assurons un transport fiable et sécurisé de vos marchandises vers leur destination.</p>
                </div>
                <div class="border p-5 text-center" data-aos="fade-down">
                    <i class="fa-solid fa-box block mx-auto text-6xl py-4 text-rose-800"></i>
                    <h4 class="text-3xl text-blue-800 py-2 font-bold">Messagerie</h4>
                    <p class="text-neutral-500">Notre service de messagerie rapide garantit la livraison efficace de vos colis et documents.</p>
                </div>
                <div class="border p-5 text-center" data-aos="fade-down-left">
                    <i class="fa-solid fa-truck-fast block mx-auto text-6xl py-4 text-rose-800"></i>
                    <h4 class="text-3xl text-blue-800 py-2 font-bold">Courses Urgentes</h4>
                    <p class="text-neutral-500">Besoin d'une livraison express ? Nous sommes là pour des courses rapides et ponctuelles.</p>
                </div>
                <div class="border p-5 text-center" data-aos="fade-up-left">
                    <i class="fa-solid fa-retweet block mx-auto text-6xl py-4 text-rose-800"></i>
                    <h4 class="text-3xl text-blue-800 py-2 font-bold">Location</h4>
                    <p class="text-neutral-500">Profitez de notre flotte variée de véhicules disponibles en location pour répondre à vos besoins spécifiques.</p>
                </div>
                <div class="border p-5 text-center" data-aos="fade-up">
                    <i class="fa-solid fa-cart-flatbed block mx-auto text-6xl py-4 text-rose-800"></i>
                    <h4 class="text-3xl text-blue-800 py-2 font-bold">Affrètement</h4>
                    <p class="text-neutral-500">Optez pour notre service d'affrètement sur mesure pour un transport adapté à vos exigences.</p>
                </div>
                <div class="border p-5 text-center" data-aos="fade-up-right">
                    <i class="fa-solid fa-comment-dollar block mx-auto text-6xl py-4 text-rose-800"></i>
                    <h4 class="text-3xl text-blue-800 py-2 font-bold">Retour de Fonds</h4>
                    <p class="text-neutral-500">Nous facilitons le retour sécurisé de vos fonds avec notre service dédié à cette opération.</p>
                </div>
            </div>
        </div>
    </section>
    <section id="top-routes" class="bg-blue-100 bg-opacity-40">
        <div class="relative py-10 max-w-screen-xl mx-auto">
            <h2 class="text-3xl font-bold text-center py-3 text-blue-800">Top Routes</h2>
            <div class="tiny-slider-2 my-5 max-h-screen h-[500px]">
                <div class="h-full" data-aos="zoom-in">
                    <div class="h-full relative">
                        <img class="absolute inset-0 w-full h-full object-cover" src="https://images.unsplash.com/photo-1446694292248-2c2a7e575b1b" alt="">
                        <div class="block relative h-full flex justify-center items-center">
                            <h3 class="text-xl w-full py-4 font-bold text-center flex justify-center items-center mt-auto mb-2 mx-2 rounded bg-white">Bash Crown and Tacos On let Caps</h3>
                        </div>
                    </div>
                </div>
                <div class="h-full" data-aos="zoom-in">
                    <div class="h-full relative">
                        <img class="absolute inset-0 w-full h-full object-cover" src="https://images.unsplash.com/photo-1446694292248-2c2a7e575b1b" alt="">
                        <div class="block relative h-full flex justify-center items-center">
                            <h3 class="text-xl w-full py-4 font-bold text-center flex justify-center items-center mt-auto mb-2 mx-2 rounded bg-white">Bash Crown and Tacos On let Caps</h3>
                        </div>
                    </div>
                </div>
                <div class="h-full" data-aos="zoom-in">
                    <div class="h-full relative">
                        <img class="absolute inset-0 w-full h-full object-cover" src="https://images.unsplash.com/photo-1446694292248-2c2a7e575b1b" alt="">
                        <div class="block relative h-full flex justify-center items-center">
                            <h3 class="text-xl w-full py-4 font-bold text-center flex justify-center items-center mt-auto mb-2 mx-2 rounded bg-white">Bash Crown and Tacos On let Caps</h3>
                        </div>
                    </div>
                </div>
                <div class="h-full" data-aos="zoom-in">
                    <div class="h-full relative">
                        <img class="absolute inset-0 w-full h-full object-cover" src="https://images.unsplash.com/photo-1446694292248-2c2a7e575b1b" alt="">
                        <div class="block relative h-full flex justify-center items-center">
                            <h3 class="text-xl w-full py-4 font-bold text-center flex justify-center items-center mt-auto mb-2 mx-2 rounded bg-white">Bash Crown and Tacos On let Caps</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tiny-slider-control-2">
                <button class="absolute top-1/2 -translate-y-1/2  left-0 h-10 w-10 flex justify-center items-center mx-1 text-center text-white bg-rose-800 bg-opacity-70 rounded-full overflow-hidden"><i class="fa-solid fa-angle-left  text-3xl"></i></button>
                <button class="absolute top-1/2 -translate-y-1/2 right-0 h-10 w-10 flex justify-center items-center mx-1 text-center text-white bg-rose-800 bg-opacity-70 rounded-full overflow-hidden"><i class="fa-solid fa-angle-right text-3xl"></i></button>
            </div>
        </div>
    </section>
    <footer class="bg-blue-800">
        <div class="grid sm:grid-cols-3 max-w-screen-xl mx-auto gap-16 py-16 text-white">
            <div>
                <img class="block mx-auto h-12 mb-5" src="" alt="">
                <p class="font-semibold py-2">Pullman du sud est une société de transport spécialisée dans le transport interurbain de voyageurs, le transport touristique et messagerie.</p>
            </div>
            <div>
                <h4 class="underline text-2xl font-bold">Liens Utiles</h4>
                <ul class="py-5">
                    <li class="py-2">
                        <a href="/"><i class="fa-solid fa-caret-right"></i> Accueil</a>
                    </li>
                    <li class="py-2">
                        <a href="/"><i class="fa-solid fa-caret-right"></i> Qui sommes nous ?</a>
                    </li>
                    <li class="py-2">
                        <a href="/"><i class="fa-solid fa-caret-right"></i> Voyageurs</a>
                    </li>
                    <li class="py-2">
                        <a href="/"><i class="fa-solid fa-caret-right"></i> Touristique</a>
                    </li>
                    <li class="py-2">
                        <a href="/"><i class="fa-solid fa-caret-right"></i> Messagerie</a>
                    </li>
                </ul>
            </div>
            <div>
                <h4 class="underline text-2xl font-bold">Besoin D'aide</h4>
                <ul class="py-5">
                    <li class="py-2">
                        <i class="fa-solid fa-location-dot w-10 text-xl text-center"></i> 80000, Agadir, Morocco
                    </li>
                    <li class="py-2">
                        <i class="fa-solid fa-mobile-screen w-10 text-xl text-center"></i> <a class="hover:underline" href="tel:+212610109097"> +212 610-109097</a>
                    </li>
                    <li class="py-2">
                        <i class="fa-solid fa-envelope w-10 text-xl text-center"></i> <a class="hover:underline" href="/"> infe@dd.com</a>
                    </li>
                    <li class="py-2">
                        <i class="fa-brands fa-facebook-f w-10 text-xl text-center"></i> <a class="hover:underline" href="/"> facebook/test</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="border-t border-white">
            <div class="flex py-5 max-w-screen-xl mx-auto text-white leading-9">
                <div>© Copyright © 2021-2022 **** | All Rights Reserved.</div>
                <div class="ml-auto">Designed by <a class="inline-block ml-1 px-2 rounded bg-rose-800 hover:bg-rose-700 active:bg-rose-800" href="/">Hamza</a></div>
            </div>
        </div>
    </footer>
</body>

</html>