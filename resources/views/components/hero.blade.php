<section class="pt-10 bg-primary">
{{--    <div class="main-container">--}}
{{--        <h1 class="mb-16 text-white font-bold text-[56px] lg:text-[100px] leading-tight">--}}
{{--            Business analyst experts, navigating success--}}
{{--        </h1>--}}
{{--    </div>--}}
    <!-- resources/views/draw-circle-text.blade.php -->
    <div
        x-data="{ pathLength: 0 }"
        x-intersect="setTimeout(() => pathLength = 1, 100)"
        class="grid  place-content-center  px-4 py-24 text-yellow-50"
    >
        <h1 class="max-w-2xl text-center text-3xl sm:text-4xl md:text-5xl leading-snug">
           Business Analyst
            <span class="relative inline-block">
            Experts
            <svg
                viewBox="0 0 286 73"
                fill="none"
                class="absolute -left-2 -right-2 -top-2 bottom-0 translate-y-1"
            >
                <path
                    :stroke-dasharray="`${pathLength * 100}, 100`"
                    d="M142.293 1C106.854 16.8908 6.08202 7.17705 1.23654 43.3756C-2.10604 68.3466 29.5633 73.2652 122.688 71.7518C215.814 70.2384 316.298 70.689 275.761 38.0785C230.14 1.37835 97.0503 24.4575 52.9384 1"
                    stroke="#FACC15"
                    stroke-width="3"
                    :style="`stroke-dasharray: ${pathLength * 100}%, 100%; stroke-width: 3; transition: stroke-dasharray 1s ease-in-out;`"
                />
            </svg>
        </span>
            , navigating success
        </h1>
    </div>



    <!-- Hero Image with Stats -->
    <div class="flex w-full min-h-[600px] bg-cover bg-center bg-no-repeat"
         style="background-image: url('{{ 'asset/images/hero_img.jpeg' }}');">
        <div class="main-container flex justify-end items-end pt-[168px] w-full">
            <div class="w-[250px] bg-accent rounded-tl-[50px] px-6 py-6 text-center">
                <div class="mb-6">
                    <div class="text-white font-bold text-[60px]">50k</div>
                    <p class="text-gray font-semibold text-[20px]">Worldwide clients</p>
                </div>
                <div class="mb-6">
                    <div class="text-white font-bold text-[60px]">200+</div>
                    <p class="text-gray font-semibold text-[20px]">Projects Completed</p>
                </div>
                <div class="mb-6">
                    <div class="text-white font-bold text-[60px]">10+</div>
                    <p class="text-gray font-semibold text-[20px]">Year's Experience</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Trusted By Section -->
    <main class="main-container bg-accent flex justify-center py-12">
        <div class="w-full max-w-6xl text-center px-6 md:px-12">
            <div class="font-bold text-3xl md:text-4xl bg-clip-text text-transparent bg-gradient-to-r from-slate-200/60 to-slate-200">
                Trusted by the most innovative minds in
                <span class="text-primary inline-flex flex-col h-[calc(theme(fontSize.3xl)*theme(lineHeight.tight))] md:h-[calc(theme(fontSize.4xl)*theme(lineHeight.tight))] overflow-hidden">
                    <ul class="animate-text-slide-5 leading-tight [&_li]:block px-0">
                        <li>Finance</li>
                        <li>Tech</li>
                        <li>AI</li>
                        <li>Crypto</li>
                        <li>eCommerce</li>
                        <li aria-hidden="true">Finance</li>
                    </ul>
                </span>
            </div>
        </div>
    </main>
</section>
