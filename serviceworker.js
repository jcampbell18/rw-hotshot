// importScripts('https://storage.googleapis.com/workbox-cdn/releases/4.3.1/workbox-sw.js');//

// if (workbox) {

//     console.log(`Yay! Workbox is loaded 🎉`);
//     workbox.routing.registerRoute(
//         /\.(?:js|css)$/,
//         new workbox.strategies.StaleWhileRevalidate(),
//     ); 

//     workbox.routing.registerRoute(
//         // Cache CSS files.
//         /\.css$/,
//         // Use cache but update in the background.
//         new workbox.strategies.StaleWhileRevalidate({
//             // Use a custom cache name.
//             cacheName: 'css-cache',
//         })
//     );
        
//     workbox.routing.registerRoute(
//         // Cache image files.
//         /\.(?:png|jpg|jpeg|svg|gif)$/,
//         // Use the cache if it's available.
//         new workbox.strategies.CacheFirst({
//             // Use a custom cache name.
//             cacheName: 'image-cache',
//             plugins: [
//             new workbox.expiration.Plugin({
//                 // Cache only 20 images.
//                 maxEntries: 20,
//                 // Cache for a maximum of a week.
//                 maxAgeSeconds: 7 * 24 * 60 * 60,
//             })
//             ],
//         })
//     );

// } else {
//   console.log(`Boo! Workbox didn't load 😬`);
// }




var CACHE_NAME = 'v1::rw-hotshot';
var urlsToCache = [
    '/',
    '/css/styles.min.css',
    '/css/styles700.min.css',
    '/css/styles1000.min.css',
    '/img/divider.svg',
    '/img/highway-through-the-forest.jpg',
    '/img/logo-football.png',
    '/img/makingItPossible.png',
    '/img/rw-hotshot.png',
    '/js/scripts.js',
    //'/offline.html'
];


// Install
self.addEventListener('install', function(event) {
    event.waitUntil(
        caches.open(CACHE_NAME).then(function(cache) {
            return cache.addAll(urlsToCache);
        })
    );
});


//Activate
self.addEventListener('activate', function(event) {
    event.waitUntil(
        caches.keys().then(function(cacheNames) {
            return Promise.all(
                cacheNames.filter(function(cacheName) {
                    return cacheName !== CACHE_NAME;
                }).map(function(cacheName) {
                    console.log('Deleting '+ cacheName);
                    return caches.delete(cacheName);
                })
            );
        })
    );
});


//Fetch
self.addEventListener('fetch', function(event) {
    event.respondWith(
      // If network fetch fails serve offline page form cache
      fetch(event.request).catch(function(error) {
        return caches.open(CACHE_NAME).then(function(cache) {
          //return cache.match('/offline.html');
          return cache.match('/index.html');
        });
      })
    );
});