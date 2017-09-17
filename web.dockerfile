FROM nginx:1

ADD vhost.conf /etc/nginx/conf.d/default.conf
