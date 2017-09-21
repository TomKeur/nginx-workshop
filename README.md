# NGINX workshop

Om gebruik te kunnen maken van deze mini workshop, dien je Docker geïnstalleerd te hebben.
Daarnaast dienen de volgende poorten vrij te zijn:

- 7080
- 8080
- 80

Na de workshop, komen deze poorten weer vrij :).

De volgende images worden gebruikt (makkelijk om deze nu alvast te pullen):


```
docker pull php:7.1.9-apache
docker pull nginx:alpine
docker pull php:7.1.9-fpm-alpine
```

Veel informatie kun je vinden in de admin-guide van NGINX:

https://www.nginx.com/resources/admin-guide/

Voor de rest kun je Google gebruiken, en vragen. 

Mocht je er echt niet uitkomen, door van Git branch te switchen, kun je alle antwoorden 
inzien.


## NGINX als Reverse Proxy
Het doel van deze opdracht is om Nginx voor Apache te zetten, Apache draait hier op poort 7080.

**Info:** https://www.nginx.com/resources/admin-guide/reverse-proxy/ 

## Redirects met NGINX
Het doel van deze opdracht is om een twee redirects te maken:

**Info:** https://www.nginx.com/blog/creating-nginx-rewrite-rules/

```
Van: old.html 
Naar: new.html
```

En een wildcard redirect:

```
Van: /oldstuff/*
Naar: new.html
```


## Cacheheaders met NGINX
Het doel van deze opdracht is om de afbeelding `bench.jpg`, 1 jaar in de cache van de browser op te slaan.
Testen met kan op de terminal via CURL:

```
curl -I http://localhost:8080/bench.jpg
```

**Info:** http://nicholaskuechler.com/2011/04/24/nginx-how-to-set-expires-headers-for-images/


## NGINX met PHP-FPM
Het doel van deze opdracht is om NGINX en PHP-FPM te laten samenwerken.

**Deze opdracht is iets moeilijker!**

**Info:** https://www.nginx.com/resources/wiki/start/topics/examples/phpfcgi/


## NGINX als Reverse proxy voor een gedeelte van de URL 
Het doel van deze opdracht is om een gedeelte van een URL te reverse proxyen, dit kan handig zijn wanneer je bijvoorbeeld een nieuewe applicatie wil gebruiken binnen je huidige website.

**Tip:** Kijk eens goed naar de NGINX als reverse proxy opdracht!


## NGINX als Loadbalancer
Het doel van deze opdracht is om NGINX te laten fungeren als Load balancer:

**Tip:** Kijk eens goed naar de NGINX als reverse proxy opdracht!

**Info:** https://www.nginx.com/resources/admin-guide/load-balancer/