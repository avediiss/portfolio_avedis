<header class="header">
    <!-- Topbar for Contact Info -->
    <div class="header__topbar">
        <div class="header__topbar-container">
            <div class="header__topbar-content">
                <ul class="header__topbar-list">
                    <li class="header__topbar-item">
                        <i class="fa-solid fa-envelope"></i>
                        <a href="mailto:info@torossianhrag.com" class="header__topbar-link">info@torossianhrag.com</a>
                    </li>
                    <li class="header__topbar-item">
                        <i class="fa-solid fa-phone"></i>
                        <a href="tel:+33764008298" class="header__topbar-link">+33 7 64 00 82 98</a>
                    </li>
                    <li class="header__topbar-item">
                        <i class="fa-solid fa-location-dot"></i> Lyon, France
                    </li>
                </ul>
                <div class="header__topbar-socials">
                    <a href="#" class="header__topbar-link">LinkedIn</a>
                    <a href="#" class="header__topbar-link">Instagram</a>
                    <a href="#" class="header__topbar-link">Facebook</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Navigation -->
    <nav class="header__nav" x-data="{ open: false, openSide: false }" x-cloak="openSide">
        <!-- Logo -->
        <div>
            <img src="{{ ('asset/images/logo_white.svg') }}" alt="Torossian Hrag Logo" class="header__logo">
        </div>

        <!-- Mobile Menu Button -->
        <button @click="open = !open" class="header__mobile-menu-button" aria-label="Open menu">
            <svg x-show="!open" class="header__mobile-menu-icon" fill="none" viewBox="0 0 24 24" stroke="white">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>

        <!-- Navigation Links -->
        <div :class="open ? 'header__nav-links--open' : 'header__nav-links--closed'"
             class="header__nav-links">
            <!-- Close Button (Mobile) -->
            <button @click="open = false" class="header__close-button">
                <svg class="header__close-icon" fill="none" viewBox="0 0 24 24" stroke="white">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>

            <!-- Mobile View Logo -->
            <div class="header__mobile-logo">
                <img src="{{ ('asset/images/logo_white.svg') }}" alt="Primary Logo" class="header__logo">
            </div>

            <div class="header__nav-items">
                <a class="header__nav-link" href="#" @click="open = false">Home</a>
                <a class="header__nav-link" href="#" @click="open = false">About</a>
                <a class="header__nav-link" href="#" @click="open = false">Services</a>
                <a class="header__nav-link" href="#" @click="open = false">Case Study</a>
                <a class="header__nav-link" href="#" @click="open = false">Blogs</a>
                <a class="header__nav-link" href="#" @click="open = false">Contact</a>
            </div>
        </div>

        <!-- Desktop Side Bar -->
        <div class="header__desktop-sidebar">
            <button @click="openSide = !openSide" class="header__sidebar-button">
                <div class="w-6 h-6 relative">
                    <svg x-show="!openSide" class="header__sidebar-icon" fill="none" viewBox="0 0 24 24" stroke="#fff">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </div>
            </button>

            <div x-show="openSide" class="header__sidebar-overlay" @click="openSide = false"></div>

            <!-- Side Navigation Links for Desktop -->
            <div
                :class="openSide ? 'header__sidebar--open' : 'header__sidebar--closed'"
                class="header__sidebar"
            >
                <!-- Close Button (X) -->
                <div class="header__sidebar-close-button">
                    <svg x-show="openSide" @click="openSide = !openSide" xmlns="http://www.w3.org/2000/svg"
                         fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#18333b"
                         class="header__sidebar-close-icon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </div>

                <!-- Sidebar Content -->
                <div class="header__sidebar-content">
                    <!-- Logo -->
                    <a class="inline-block">
                        <img src="{{ ('asset/images/logo.svg') }}" alt="Logo" class="header__sidebar-logo">
                    </a>

                    <!-- Title -->
                    <div class="header__sidebar-title">
                        <h2 class="mb-6">Lorem ipsum odor amet, consectetuer adipiscing elit?</h2>
                    </div>

                    <!-- Contact Info -->
                    <div class="header__sidebar-contact">
                        <h3 class="">Contact Us</h3>
                        <ul class="header__sidebar-contact-list">
                            <li class="header__sidebar-contact-item">
                                <i class="header__sidebar-contact-icon fa-solid fa-phone"></i>
                                <span>
                                    <a href="#">+33 7 64 00 82 98</a>
                                </span>
                            </li>
                            <li class="header__sidebar-contact-item">
                                <i class="header__sidebar-contact-icon fa-solid fa-envelope"></i>
                                <span>
                                    <a href="mailto:info@domain.com">info@torossianhrag.com</a>
                                </span>
                            </li>
                            <li class="header__sidebar-contact-item">
                                <i class="header__sidebar-contact-icon fa-solid fa-location-dot"></i>
                                <span>
                                    Lyon, France
                                </span>
                            </li>
                        </ul>
                    </div>

                    <!-- Newsletter -->
                    <div class="header__sidebar-newsletter">
                        <h3 class="text-xl font-semibold mb-4">Subscribe</h3>
                        <div class="flex flex-col gap-4 items-start">
                            <form action="#" class="header__sidebar-newsletter-form">
                                <div class="relative w-full">
                                    <input type="email" class="header__sidebar-newsletter-input" placeholder="Email address">
                                    <button class="header__sidebar-newsletter-button">
                                        <span class="text-white">Subscribe</span>
                                        <!-- Arrow Icon -->
                                        <span class="header__sidebar-newsletter-arrow">
                                            <i class="header__sidebar-newsletter-arrow-icon">
                                                <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1 10L10 1M10 1L1 1M10 1L10 10" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                            </i>
                                        </span>
                                    </button>
                                </div>
                            </form>
                            <div class="header__sidebar-newsletter-text">
                                At vero eos et accusamus et iusto odio as part dignissimos ducimus qui blandit.
                            </div>
                        </div>
                    </div>

                    <!-- Socials -->
                    <div class="header__sidebar-socials">
                        <h3 class="">Contact Us</h3>
                        <div class="header__sidebar-socials-list">
                            <a class="header__sidebar-social-link">
                                <i class="header__sidebar-social-icon fa-brands fa-linkedin-in"></i>
                            </a>
                            <a class="header__sidebar-social-link">
                                <i class="header__sidebar-social-icon fa-brands fa-x-twitter"></i>
                            </a>
                            <a class="header__sidebar-social-link">
                                <i class="header__sidebar-social-icon fa-brands fa-facebook"></i>
                            </a>
                            <a class="header__sidebar-social-link">
                                <i class="header__sidebar-social-icon fa-brands fa-reddit"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
