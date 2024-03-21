import 'bootstrap';

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

import Echo from 'laravel-echo';

import Pusher from 'pusher-js';
window.Pusher = Pusher;

// If using http connection use this
window.Echo = new Echo({
    broadcaster: 'pusher',
    key: import.meta.env.VITE_PUSHER_APP_KEY,
<<<<<<< HEAD
    cluster: import.meta.env.VITE_PUSHER_APP_CLUSTER,
<<<<<<< HEAD
    wsHost: import.meta.env.VITE_PUSHER_HOST,
    wsPort: import.meta.env.VITE_PUSHER_PORT,
    //wssPort: import.meta.env.VITE_PUSHER_PORT ?? 443,
    forceTLS: false,//important forceTLS is important! do not remove it.
    disableStats: true,
=======
    cluster: import.meta.env.VITE_PUSHER_APP_CLUSTER ?? 'mt1',
    wsHost: '127.0.0.1', // Your domain
    encrypted: false,
    wsPort: 6001, // Yor http port
    disableStats: true, // Change this to your liking this disables statistics
    forceTLS: false,
>>>>>>> parent of 25bd571 (remove nav)
    enabledTransports: ['ws', 'wss'],
    disabledTransports: ['sockjs', 'xhr_polling', 'xhr_streaming'] // Can be removed

    
<<<<<<< HEAD
// });
=======
    wsHost: 'auctionear.shop', // Your domain
    encrypted: true,
    wsPort: 443, // Yor http port
    disableStats: true, // Change this to your liking this disables statistics
    forceTLS: true,
    enabledTransports: ['ws', 'wss'],
    disabledTransports: ['sockjs', 'xhr_polling', 'xhr_streaming'] // Can be removed
});
>>>>>>> 1923eb4b9fa424c9c26acbb41028c0fbe7bde433
=======
});

>>>>>>> parent of 25bd571 (remove nav)

// wsHost: window.location.hostname,       //import.meta.env.VITE_PUSHER_HOST ?? `ws-${import.meta.env.VITE_PUSHER_APP_CLUSTER}.pusher.com`,
//     wsPort: 6001,       //import.meta.env.VITE_PUSHER_PORT ?? 80,
//     //wssPort: import.meta.env.VITE_PUSHER_PORT ?? 443,
//     forceTLS: false,//(import.meta.env.VITE_PUSHER_SCHEME ?? 'https') === 'https',
//     //enabledTransports: ['ws', 'wss'],
//     disableStatus: true,
