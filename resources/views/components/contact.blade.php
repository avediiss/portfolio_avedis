<section class="contact">

    <div class="contact__background" style="background-image: url('{{ ('asset/images/contact_bg.jpeg') }}');">

        <!-- Image -->
        <div class="contact__image">
            <img src="{{ ('asset/images/goal.svg') }}" alt="Case Study 4" class="contact__image">
        </div>

        <!-- Content -->
        <div class="contact__content">
            <h2 class="contact__heading">
                We offer practical insights rooted in our vast real-world experience across the globe's primary industries.
                We are happy to serve you.
            </h2>

            <button class="contact__button">
                <span class="contact__button-text">Learn More</span>
                <!-- Arrow Icon -->
                <span class="contact__button-icon">
                    <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 10L10 1M10 1L1 1M10 1L10 10" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </span>
            </button>

            <button class="group inline-flex items-center gap-1 pl-2 pr-0.5 py-1 rounded-full font-bold bg-primary text-white border border-primary hover:bg-transparent hover:text-white transition-colors duration-300 ease-in-out">
                <span class="contact__button-text">Learn More</span>
                <svg viewBox="0 0 24 24" class="w-5 h-5 stroke-[3px] fill-none stroke-current opacity-50 group-hover:opacity-100 transition-opacity duration-300 ease-in-out">
                    <line x1="5" y1="12" x2="19" y2="12" class="scale-x-0 translate-x-[10px] group-hover:translate-x-0 group-hover:scale-x-100 transition-transform duration-300 ease-in-out"/>
                    <polyline points="12 5 19 12 12 19" class="-translate-x-2 group-hover:translate-x-0 transition-transform duration-300 ease-in-out"/>
                </svg>
            </button>

        </div>
    </div>



    <div class="contact__spacer"></div>
</section>

{{--<section class="h-[2000vh] bg-neutral-50 text-neutral-950" x-data="scrollEffect()" x-init="initScroll()">--}}
{{--    <div class="sticky top-0 flex h-screen items-center overflow-hidden">--}}
{{--        <p x-ref="targetText"--}}
{{--           :style="{ 'transform': transformValue }"--}}
{{--           class="origin-bottom-left whitespace-nowrap text-5xl font-black uppercase leading-[0.85] md:text-7xl md:leading-[0.85]">--}}
{{--            This objective mirrors our growth plan, our mission,--}}
{{--            our fundamental principles, and our ethos of--}}
{{--            collective achievement.--}}
{{--        </p>--}}
{{--    </div>--}}
{{--</section>--}}

{{--<script>--}}
{{--    function scrollEffect() {--}}
{{--        return {--}}
{{--            scrollYProgress: 0,--}}
{{--            transformValue: "skewX(0deg)",--}}

{{--            initScroll() {--}}
{{--                window.addEventListener('scroll', () => {--}}
{{--                    let scrollY = window.scrollY;--}}
{{--                    this.scrollYProgress = scrollY / document.documentElement.scrollHeight;--}}

{{--                    this.updateTransform();--}}
{{--                });--}}
{{--            },--}}

{{--            updateTransform() {--}}
{{--                // Scroll velocity can be approximated based on progress--}}
{{--                let velocity = this.scrollYProgress * 2 - 1;--}}

{{--                // Calculate skew effect based on velocity (limit skew to avoid excessive distortion)--}}
{{--                let skewX = Math.min(Math.max(velocity * 25, -15), 15) + "deg";  // limiting skew between -15deg and 15deg--}}

{{--                // Apply translation based on scroll progress--}}
{{--                // Adjust the translation range to keep the text within the screen--}}
{{--                let x = (this.scrollYProgress * -2000) + "px"; // adjusted to -2000px to prevent the text from moving too far--}}

{{--                this.transformValue = `skewX(${skewX}) translateX(${x})`;--}}
{{--            }--}}
{{--        }--}}
{{--    }--}}
{{--</script>--}}




