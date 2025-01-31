<footer class="footer">
    <div class="footer__top">
        <div class="footer__container">
            <!-- Newsletter Section -->
            <div class="footer__newsletter">
                <h2 class="footer__newsletter-heading">
                    Subscribe to our<br>newsletter
                </h2>
                <form action="#" class="footer__newsletter-form">
                    <div class="relative w-full">
                        <input type="email" class="footer__newsletter-input" placeholder="Email address">
                        <button class="footer__newsletter-button">
                            <span class="text-white">Subscribe</span>
                            <span class="footer__newsletter-arrow">
                                <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 10L10 1M10 1L1 1M10 1L10 10" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </span>
                        </button>
                    </div>
                </form>
            </div>

            <!-- Footer Grid -->
            <div class="footer__grid">
                <!-- Logo and Contact -->
                <div>
                    <img src="{{ ('asset/images/logo_white.svg') }}" alt="Primary Logo" class="footer__logo">
                    <p class="footer__contact">Lyon, France</p>
                    <h3 class="footer__contact">
                        <a href="tel:+33764008298" class="footer__contact-link">+33 7 64 00 82 98</a>
                    </h3>
                    <p class="footer__contact">
                        <a href="mailto:info@torossianhrag.com" class="footer__contact-link">info@torossianhrag.com</a>
                    </p>
                </div>

                <!-- Useful Links -->
                <div>
                    <h2 class="footer__section-title">USEFUL LINKS</h2>
                    <ul class="footer__section-list">
                        <li><a href="#" class="footer__section-item">Home</a></li>
                        <li><a href="#" class="footer__section-item">About</a></li>
                        <li><a href="#" class="footer__section-item">Services</a></li>
                        <li><a href="#" class="footer__section-item">Case Study</a></li>
                    </ul>
                </div>

                <!-- Services -->
                <div>
                    <h2 class="footer__section-title">SERVICES</h2>
                    <ul class="footer__section-list">
                        <li class="footer__section-item">Lorem Ipsum</li>
                        <li class="footer__section-item">Lorem Ipsum</li>
                        <li class="footer__section-item">Lorem Ipsum</li>
                        <li class="footer__section-item">Lorem Ipsum Study</li>
                    </ul>
                </div>

                <!-- Resources -->
                <div>
                    <h2 class="footer__section-title">RESOURCES</h2>
                    <ul class="footer__section-list">
                        <li class="footer__section-item">Lorem Ipsum</li>
                        <li class="footer__section-item">Lorem Ipsum</li>
                        <li class="footer__section-item">Lorem Ipsum</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="footer__bottom">
        <div class="footer__bottom-container">
            <div class="footer__bottom-content">
                <!-- Social Links -->
                <div class="footer__socials">
                    <a class="footer__social-link">
                        <i class="footer__social-icon fa-brands fa-linkedin-in"></i>
                    </a>
                    <a class="footer__social-link">
                        <i class="footer__social-icon fa-brands fa-x-twitter"></i>
                    </a>
                    <a class="footer__social-link">
                        <i class="footer__social-icon fa-brands fa-facebook"></i>
                    </a>
                    <a class="footer__social-link">
                        <i class="footer__social-icon fa-brands fa-reddit"></i>
                    </a>
                </div>

                <!-- Copyright -->
                <div class="footer__copyright">
                    All Rights Reserved &copy; <span x-text="new Date().getFullYear()"></span>
                </div>

                <!-- Privacy Policy -->
                <div>
                    <ul class="footer__policy">
                        <li><a href="#" class="footer__policy-link">Privacy &amp; Cookie Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
