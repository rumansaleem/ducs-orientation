<template>
    <div class="relative" @scroll.prevent>
        <button class="absolute bottom-0 mr-2 right-0 text-3xl" @click.prevent="next">&gt;</button>
        <button class="absolute bottom-0 ml-2 left-0 text-3xl" @click.prevent="previous">&lt;</button>
        <div ref="slider" class="flex overflow-x-hidden no-scrollbar">
            <slot></slot>
        </div>
    </div>
</template>
<script>
    export default {
        data() {
            return {
                currentSlide: 0,
                totalSlides: 0,
                totalWidth: 0,
            }
        },
        watch: {
            currentSlide() {
                this.$refs.slider.children[this.currentSlide].scrollIntoView({
                    behavior: 'smooth',
                });
            }
        },
        methods: {
            onResize(x, y) {
                this.totalWidth = this.$refs.slider.clientWidth;
            },
            next() {
                this.currentSlide = (this.currentSlide+1) % this.totalSlides;
            },
            previous() {
                this.currentSlide = this.currentSlide > 0 ? this.currentSlide-1 : this.totalSlides-1;
            }
        },

        mounted() {
            this.totalWidth = this.$refs.slider.clientWidth;
            this.totalSlides = this.$refs.slider.childElementCount;

            this.$refs.slider.children[this.currentSlide].scrollIntoView({
                behavior: 'smooth',
            });

            window.addEventListener('resize', this.onResize);
        }
    }
</script>