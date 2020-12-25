//Register ServiceWorker
if ( 'serviceWorker' in navigator && (typeof Cache !== 'undefined' && Cache.prototype.addAll) ) {

    navigator.serviceWorker.register('./serviceworker.js')
    .then(function(registration) {
        console.log('ServiceWorker registration successful', registration.scope);
    })
    .catch(function(error) {
        console.log('ServiceWorker registration failed', error);
    });

}

// Output Current Year
$('.currentYear').text( (new Date).getFullYear() );