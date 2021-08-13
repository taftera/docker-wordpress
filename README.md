# Wordpress Docker

## Docker
- Using 
 - Nginx
 - mysql
 - php
 - phpmyadim
 - wordpress
 - wp-cli

### URL 
https://wordpress-docker.test/

### PHPMYADMIN
http://wordpress-docker.test:8000/

### DOCKER Commands
```bash
# When something on the *.dockerfile changes
$ docker-compose up -d --build
# When something pull down all changes
$ docker-compose down -d --build
# Get all containers active
$ docker-compose ps
```
### WP-CLI - [URL](https://wp-cli.org/)

```bash
# Get users
$ docker-compose run --rm wp user list
# Get plugins
$ docker-compose run --rm wp plugin list
```

#### Other tools
mkcert [documentation](https://github.com/FiloSottile/mkcert)
```bash
# login to the folder
$ cd /nginx/certs
# create the certificate
$ mkcert wordpress-docker.test
```
**NOTE:** remember to update the ``` etc/hosts ``` to be able to log to the domain.