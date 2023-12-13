import './bootstrap';

import { createApp } from 'vue'
import coment from '@/components/coment.vue'

window.app = createApp({
    setup() {
        return {
            message: 'Welcome to Your Vue.js App',
        };
    },
    components: {
        coment
    },
}).mount('#app');
