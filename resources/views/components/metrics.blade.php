<section class="metrics">
    <div class="metrics__container">
        <div class="metrics__grid">
            <!-- Videos -->
            <div class="metrics__item">
                <span class="metrics__number"
                      x-data="counterAnimation()"
                      x-init="startCount(10)"
                      x-text="counter + ' +'">
                    0
                </span>
                <p class="metrics__label">Lorem</p>
            </div>

            <!-- Subscribers -->
            <div class="metrics__item">
                <span class="metrics__number"
                      x-data="counterAnimation()"
                      x-init="startCount(50)"
                      x-text="counter + ' +'">
                    0
                </span>
                <p class="metrics__label">Lorem</p>
            </div>

            <!-- Likes -->
            <div class="metrics__item">
                <span class="metrics__number"
                      x-data="counterAnimation()"
                      x-init="startCount(100)"
                      x-text="counter + ' +'">
                    0
                </span>
                <p class="metrics__label">Lorem</p>
            </div>

            <!-- Another Metric -->
            <div class="metrics__item">
                <span class="metrics__number"
                      x-data="counterAnimation()"
                      x-init="startCount(120)"
                      x-text="counter + ' +'">
                    0
                </span>
                <p class="metrics__label">Lorem</p>
            </div>
        </div>
    </div>
</section>

<script>
    function counterAnimation() {
        return {
            counter: 0,
            startCount(targetNumber) {
                let duration = 5000;
                let stepTime = 50;
                let increment = Math.max(1, Math.floor(targetNumber * stepTime / duration));

                let interval = setInterval(() => {
                    this.counter += increment;

                    if (this.counter >= targetNumber) {
                        this.counter = targetNumber;
                        clearInterval(interval);
                    }
                }, stepTime);
            }
        };
    }
</script>
