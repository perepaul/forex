var staticCacheName = "pwa-v" + new Date().getTime();
var CACHE = 'cache-update-and-refresh';
var filesToCache = [
    // '/about',
    // '/faq',
    // '/privacy',
    // '/terms',
    // '/login',
    // '/register',
    '/offline',
    '/css/user/app.css',
    '/js/user/app.js',
    '/images/icons/icon-72x72.png',
    '/images/icons/icon-96x96.png',
    '/images/icons/icon-128x128.png',
    '/images/icons/icon-144x144.png',
    '/images/icons/icon-152x152.png',
    '/images/icons/icon-192x192.png',
    '/images/icons/icon-384x384.png',
    '/images/icons/icon-512x512.png',
    'https://code.jquery.com/jquery-3.6.0.min.js',
    'https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js',
    'https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css',
];

// Cache on install
self.addEventListener("install", event => {
    this.skipWaiting();
    event.waitUntil(
        caches.open(CACHE)
            .then(cache => {
                return cache.addAll(filesToCache);
            })
    )
});

// Clear cache on activate
self.addEventListener('activate', event => {
    // event.waitUntil(
    //     caches.keys().then(cacheNames => {
    //         return Promise.all(
    //             cacheNames
    //                 .filter(cacheName => (cacheName.startsWith("pwa-")))
    //                 .filter(cacheName => (cacheName !== staticCacheName))
    //                 .map(cacheName => caches.delete(cacheName))
    //         );
    //     })
    // );
});

// Serve from Cache
self.addEventListener("fetch", event => {
    // event.respondWith(
    //     caches.match(event.request).then(function(response) {
    //       return response || fetch(event.request).then(response => {
    //           return response;
    //       }).catch(()=>caches.match('offline'))
    //     }).catch(()=>caches.match('offline'))
    //   );

    //   self.console.log('here is the wait call');
    //   event.waitUntil(
    //       update(event.request)
    //   )

    // Let the browser do its default thing
  // for non-GET requests.
  if (event.request.method != 'GET') return;

  // Prevent the default, and handle the request ourselves.
  event.respondWith(async function() {
    // Try to get the response from a cache.
    const cache = await caches.open(CACHE);
    const cachedResponse = await caches.match(event.request);

    if (cachedResponse) {
      // If we found a match in the cache, return it, but also
      // update the entry in the cache in the background.
      event.waitUntil(cache.add(event.request));
      return cachedResponse;
    }

    // If we didn't find a match in the cache, use the network.
    return fetch(event.request).catch(()=>caches.match('offline'))
  }());


});

function update(request) {
    self.console.log(request);
    if(request.method !== 'GET'){
        return;
    }
    return caches.match(request).then(cache =>{
        fetch(request).then(response => {
            if(response.status === 200)
            {
                cache.put(request,response.clone()).then(res => {
                    return res;
                })
            }
        })
    })
}
