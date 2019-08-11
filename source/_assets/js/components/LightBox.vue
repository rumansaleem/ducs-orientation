<template>
    <div class="flex flex-wrap">
        <div v-for="(image, index) in images" :key="index" class="w-full md:w-1/2 lg:1/3 p-2 cursor-pointer">
            <img :src="image.src" :alt="image.caption" class="h-64 w-full object-cover rounded-lg" @click="open(index)">
        </div>
        <div v-if="showLightBox" class="fixed inset-0 bg-black-90 p-4 flex flex-col justify-center items-center overflow-y-auto no-scrollbar" style="z-index: 999;">
            <button class="absolute right-0 top-0 mt-2 mr-2" @click="close">
                <svg class="h-4 w-4" viewBox="0 0 20 20" stroke="currentColor" stroke-width="4">
                    <line x1="4" y1="4" x2="16" y2="16" />
                    <line x1="16" y1="4" x2="4" y2="16" />
                </svg>
            </button>
            <img :src="activeImage.src" :alt="activeImage.caption" class="max-w-full">
            <div class="absolute inset-x-0 bottom-0 mb-2 text-white flex justify-center items-center">
                <button class="text-lg mx-2" @click="previous">&#x25C2;</button>
                <button class="text-xl mx-2" v-for="(_, index) in images" :key="index" v-html="index == activeImageIndex ? '&#x25CF;' : '&#x25CB;'"></button>
                <button class="text-lg mx-2" @click="next">&#x25B8;</button>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: {images: {required: true, type: Array}},
    data() {
        return {
            showLightBox: false,
            activeImageIndex: 0,
        }
    },
    computed: {
        activeImage() {
            return this.images[this.activeImageIndex];
        },
        totalImages() {
            return this.images.length;
        }
    },
    methods: {
        open(selectedIndex = 0) {
            this.activeImageIndex = selectedIndex % this.totalImages;
            this.showLightBox = true;
        },
        close() {
            this.showLightBox = false;
        },
        next() {
            this.activeImageIndex = (this.activeImageIndex + 1) % this.totalImages;
        },
        previous() {
            this.activeImageIndex = this.activeImageIndex > 0 ?  this.activeImageIndex - 1 : this.totalImages - 1;
        },
    },
    created() {
        window.addEventListener('keydown', ({key}) => {
            switch(key) {
                case 'ArrowRight': 
                    this.next();
                    break;
                case 'ArrowLeft':
                    this.previous();
                    break;
                case 'Escape':
                    this.close();
                    break;
            }
            return false;
        });
    }
}
</script>
