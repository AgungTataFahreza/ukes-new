require('./bootstrap');

import Echo from 'laravel-echo';
import Pusher from 'pusher-js';

window.Pusher = Pusher;

window.Echo = new Echo({
    broadcaster: 'pusher',
    key: '1885914', // sama dengan yang di .env
    cluster: 'ap1', // sama dengan yang di .env
    forceTLS: true, // pastikan ini diatur ke true jika Anda menggunakan HTTPS
    encrypted: true, // jika menggunakan HTTPS
});
