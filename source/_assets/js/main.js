import Vue from 'vue';

Vue.component('vue-slider', require('./components/Slider.vue').default);
Vue.component('vue-lightbox', require('./components/LightBox.vue').default);

const app = new Vue({
    el: '#app',
});
