importScripts('/pusher.min.js');

let pusher = new Pusher('key', {
    cluster: 'mt1'
});

let channel = pusher.subscribe('drivers');
channel.bind('drivers1', function(data) {
    console.log(data);
    // Handle the event data
});
