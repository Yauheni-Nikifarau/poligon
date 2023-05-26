import { createApp } from "vue";
import Calculators from './Pages/Calculators.vue'

import Echo from 'laravel-echo';
import Pusher from 'pusher-js';

window.Pusher = Pusher;

window.Echo = new Echo({
    broadcaster: 'pusher',
    key: process.env.MIX_PUSHER_APP_KEY,
    cluster: process.env.MIX_PUSHER_APP_CLUSTER,
    forceTLS: true
});

createApp({
    components: {
        Calculators
    }
}).mount('#app')
