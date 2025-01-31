<header class="relative bg-primary">

    <div class="bg-accent hidden lg:block  ">
        <div class="main-container">
            <div class="h-[50px] flex relative items-center justify-between">
                <div class="block">
                    <ul class="flex list-none m-0 p-0 gap-6 text-white text-[16px]">
                        <li class="flex items-center gap-2 border-r border-white/30 pr-6 a-links">
                            <i class=" fa-solid fa-envelope"></i>

                            info@torossianhrag.com
                        </li>
                        <li class="flex items-center gap-2 border-r border-white/30 pr-6 a-links">
                            <i class=" fa-solid fa-phone "></i>
                            +33 7 64 00 82 98
                        </li>
                        <li class="flex items-center gap-2 a-links">
                            <i class=" fa-solid fa-location-dot"></i>

                            Lyon, France
                        </li>
                    </ul>
                </div>
                <div class="block">
                    <div class="flex gap-6 text-white">
                        <a class="a-links">Linkedin</a>
                        <a class="a-links">Instagram</a>
                        <a class="a-links">Facebook</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <nav class="main-container flex items-center justify-between py-8 " x-data="{ open: false, openSide: false }"
         x-cloak="openSide"
    >
        <!-- Logo -->
        <div class="flex-shrink-0">
            <img src="{{ ('asset/images/logo_white.svg') }}" alt="Primary Logo" class="w-28">
        </div>
        <!-- Hamburger Menu Button (Mobile) -->
        <button @click="open = !open" class="lg:hidden text-primary">
            <div class="w-6 h-6 relative">
                <svg x-show="!open" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="#fff">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>

            </div>
        </button>

        <!-- Navigation Links -->
        <div
            x-bind:class="open ? 'translate-x-0' : '-translate-x-full'"
            class="fixed inset-y-0 left-0 w-full py-4 bg-primary transform transition-transform duration-300 ease-in-out lg:static lg:flex lg:translate-x-0 lg:items-center lg:gap-8 lg:bg-transparent lg:w-auto lg:py-0 lg:px-0 shadow-lg lg:shadow-none"
        >
            <!-- Close Button (X) -->
            <svg x-show="open" @click="open = !open" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                 stroke="#fff" class="w-8 h-20 absolute top-4 right-4 cursor-pointer flex lg:hidden">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>

            <!-- Logo on Mobile View -->
            <div class="flex lg:hidden p-6">
                <img src="{{ ('asset/images/logo_white.svg') }}" alt="Primary Logo" class="w-28">

            </div>

            <!-- Links -->
            <div class="flex flex-col gap-12 p-8 lg:flex-row lg:p-0">
                <a class="a-header" href="#">Home</a>
                <a class="a-header" href="#">About</a>
                <a class="a-header" href="#">Services</a>
                <a class="a-header" href="#">Case Study</a>
                <a class="a-header" href="#">Blogs</a>
                <a class="a-header" href="#">Contact</a>
            </div>
        </div>



        <!-- Desktop Side Bar -->
        <div class="hidden lg:flex gap-4">
            <button @click="openSide = !openSide" class="text-primary">
                <div class="w-6 h-6 relative">
                    <svg x-show="!openSide" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="#fff">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </div>
            </button>

            <div x-show="openSide" class="fixed inset-0 bg-black bg-opacity-50 z-40" @click="openSide = false"></div>

            <!-- Side Navigation Links for Desktop -->
            <div
                x-bind:class="openSide ? 'translate-x-0' : 'translate-x-full'"
                class="fixed inset-y-0 right-0 w-[500px] py-2 bg-white transform transition-transform duration-300 ease-in-out shadow-lg z-50 overflow-y-auto"
            >
                <!-- Close Button (X) -->

                <div class="sticky top-4 right-4 pr-3 flex justify-end z-10">
                    <svg x-show="openSide" @click="openSide = !openSide" xmlns="http://www.w3.org/2000/svg"
                         fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#18333b"
                         class="w-8 h-8 cursor-pointer">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </div>


                <!-- Sidebar Content -->
                <div class="flex flex-col gap-8 p-[70px] pt-[20px] px-[50px] pb-[20px]">
                    <!-- Logo -->
                    <a class="inline-block ">
                        <img src="{{ ('asset/images/logo.svg') }}" alt="Logo" class="w-36 mb-6">
                    </a>

                    <!-- Title  -->
                    <div class="block py-2">
                        <h2 class="mb-6">Lorem ipsum odor amet, consectetuer adipiscing elit?</h2>
                    </div>
                    <!-- Contact Info -->
                    <div class="block py-2">
                        <h3 class="">Contact Us</h3>
                        <ul>
                            <li>
                                <i class="i-contact fa-solid fa-phone "></i>
                                <span>
                                    <a href="#">+33 7 64 00 82 98</a>
                                </span>
                            </li>
                            <li>
                                <i class="i-contact fa-solid fa-envelope"></i>
                                <span>
                                    <a href="mailto:info@domain.com">info@torossianhrag.com</a>
                                </span>
                            </li>
                            <li>
                                <i class="i-contact fa-solid fa-location-dot"></i>
                                <span>
                                    Lyon, France
                                </span>
                            </li>

                        </ul>
                    </div>
                    <!-- Newsletter -->
                    <div class="block py-6">
                        <h3 class="text-xl font-semibold mb-4">Subscribe</h3>
                        <div class="flex flex-col gap-4 items-start">
                            <form action="#" class="relative w-full max-w-md flex items-center">
                                <div class="relative w-full">
                                    <input type="email" class="w-full border border-gray-300 rounded-[20px] h-[60px] px-4 focus:outline-none focus:ring-2 focus:ring-primary pr-16" placeholder="Email address">
                                    <button class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-primary text-white py-2 pl-6 pr-6 rounded-full flex items-center space-x-2 hover:bg-accent focus:outline-none focus:ring-2 focus:ring-accent transition">
                                        <span class="text-white">Subscribe</span>
                                        <!-- Arrow Icon -->
                                        <span class="relative w-6 h-6">
                                            <i class="absolute left-[50%] transform -translate-x-1/2 bottom-[7px]">
                                                <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1 10L10 1M10 1L1 1M10 1L10 10" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                            </i>
                                        </span>
                                    </button>
                                </div>
                            </form>
                            <div class="text-secondary text-[18px] text-start">
                                At vero eos et accusamus et iusto odio as part dignissimos ducimus qui blandit.
                            </div>
                        </div>
                    </div>

                    <!-- Socials -->
                    <div class="block py-6">
                        <h3 class="">Contact Us</h3>

                        <div class="flex flex-wrap gap-3">
                            <a class="rounded-[50%] border  p-3 w-12 h-12 flex items-center justify-center
              border-secondary text-secondary hover:border-accent transition duration-300 ease-in-out
              group hover:scale-110 hover:shadow-lg">
                                <i class="fa-brands fa-linkedin-in  group-hover:text-accent transition duration-300 ease-in-out"></i>
                            </a>

                            <a class="rounded-[50%] border  p-3 w-12 h-12 flex items-center justify-center
              border-secondary text-secondary hover:border-accent transition duration-300 ease-in-out
              group hover:scale-110 hover:shadow-lg">
                                <i class="fa-brands fa-x-twitter  group-hover:text-accent transition duration-300 ease-in-out"></i>
                            </a>

                            <a class="rounded-[50%] border  p-3 w-12 h-12 flex items-center justify-center
              border-secondary text-secondary hover:border-accent transition duration-300 ease-in-out
              group hover:scale-110 hover:shadow-lg">
                                <i class="fa-brands fa-facebook  group-hover:text-accent transition duration-300 ease-in-out"></i>
                            </a>

                            <a class="rounded-[50%] border  p-3 w-12 h-12 flex items-center justify-center
              border-secondary text-secondary hover:border-accent transition duration-300 ease-in-out
              group hover:scale-110 hover:shadow-lg">
                                <i class="fa-brands fa-reddit  group-hover:text-accent transition duration-300 ease-in-out"></i>
                            </a>
                        </div>



                    </div>


                </div>


            </div>
        </div>
    </nav>
</header>
