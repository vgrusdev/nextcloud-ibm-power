This is some examples for demonstrating of docker-compose capability on IBM Power System.

Here are 4 directories wiht 4 examples:

1. nextcloud-1
One simple container with nextcloud apache and internal sqlite db.
Just run "docker-compose up -d" and connect to the host http://<ip address>:8085

2. nextcloud-2
nextcloud-fpm, nginx, redis, cron

3. nextcloud-3
added external db Postgers

4. nextcloud-4
used https proxy - nginx-proxy.
was not able to build standard conteiner nginx-proxy for Power Linux.
Faced a roblem to build docker-conf (go-based script) for authomatic nginx-proxy conf file creation.
Used self-made script instead...


