<section class="bg-alter main-container py-16 md:py-24">
    <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-4 gap-x-8 md:gap-x-16 gap-y-10 items-center text-center bg-gray-100 text-gray-800 px-6">
        <!-- Videos -->
        <div class="w-full">
            <span class="text-[40px] sm:text-[50px] md:text-[60px] font-bold bg-clip-text text-transparent bg-gradient-to-r from-slate-200/60 to-50% to-slate-200"
                  x-data="animation()"
                  x-init="animate(10)"
                  x-text="counter + ' +'">
                0
            </span>
            <p class="text-[16px] sm:text-[18px] md:text-[20px] text-ternary font-semibold font-unna">Lorem</p>
        </div>

        <!-- Subscribers -->
        <div class="w-full">
            <span class="text-[40px] sm:text-[50px] md:text-[60px] font-bold bg-clip-text text-transparent bg-gradient-to-r from-slate-200/60 to-50% to-slate-200"
                  x-data="animation()"
                  x-init="animate(50)"
                  x-text="counter + ' +'">
                0
            </span>
            <p class="text-[16px] sm:text-[18px] md:text-[20px] text-ternary font-semibold font-unna">Lorem</p>
        </div>

        <!-- Likes -->
        <div class="w-full">
            <span class="text-[40px] sm:text-[50px] md:text-[60px] font-bold bg-clip-text text-transparent bg-gradient-to-r from-slate-200/60 to-50% to-slate-200"
                  x-data="animation()"
                  x-init="animate(100)"
                  x-text="counter + ' +'">
                0
            </span>
            <p class="text-[16px] sm:text-[18px] md:text-[20px] text-ternary font-semibold font-unna">Lorem</p>
        </div>

        <!-- Another Metric -->
        <div class="w-full">
            <span class="text-[40px] sm:text-[50px] md:text-[60px] font-bold bg-clip-text text-transparent bg-gradient-to-r from-slate-200/60 to-50% to-slate-200"
                  x-data="animation()"
                  x-init="animate(120)"
                  x-text="counter + ' +'">
                0
            </span>
            <p class="text-[16px] sm:text-[18px] md:text-[20px] text-ternary font-semibold font-unna">Lorem</p>
        </div>
    </div>
</section>

<script>
    function animation() {
        return {
            counter: 0,
            animate(finalCount) {
                let time = 1500;
                let interval = 10;
                let step = Math.max(1, Math.floor(finalCount * interval / time));

                let timer = setInterval(() => {
                    this.counter += step;

                    if (this.counter >= finalCount) {
                        this.counter = finalCount;
                        clearInterval(timer);
                    }
                }, interval);
            }
        };
    }
</script>
