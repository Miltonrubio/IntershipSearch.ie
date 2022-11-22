var cacheName = "appValo";
var contenidoCache = [
  "index.html",
  "amreria.html",
  "rutinas.html",
  "app.js",
  "sw.js",
  "manifest.webmanifest",
  "css/main-css.css",
  "css/bootstrap.min.css",
  "js/bootstrap.min.js",
  "img/shorty",
  
];




self.addEventListener('install',(e)=>{
  console.log("Instalado")
  e.waitUntil((async()=>{
      const cache=await caches.open(cacheName);
      await cache.addAll(contenidoCache);
  })())
  });
  
  
  self.addEventListener('fetch',(e)=>{
      e.respondWith((async()=>{
          const r= await caches.match(e.request);
          if (r) return r;
          const response= await fetch(e.request);
          const cache=await caches.open(cacheName);
          cache.put(e.request, response.clone());
          return response;
      })())
  });