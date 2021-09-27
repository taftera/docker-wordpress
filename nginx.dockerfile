FROM nginx:stable-alpine

ADD ./nginx/default.conf /etc/nginx/conf.d/default.conf
ADD ./nginx/nginx.conf /etc/nginx/nginx.conf
ADD ./nginx/certs /etc/nginx/certs/self-signed