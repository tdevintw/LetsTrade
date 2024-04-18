import Echo from "laravel-echo"

window.Echo = new Echo({
    broadcaster: 'pusher',
    key: process.env.MIX_PUSHER_APP_KEY,
    cluster: process.env.MIX_PUSHER_APP_CLUSTER,
    encrypted: true,
});

Echo.channel('chat')
    .listen('MessageSent', (e) => {
        console.log('New message:', e.message);
        // Update UI with new message
    });
