FROM nginx

RUN apt-get update

RUN apt-get install --no-install-recommends --no-install-suggests -y \
                        libgd-dev \
                        nginx-module-image-filter \
                        sed

RUN sed -i '1s|^|load_module modules/ngx_http_image_filter_module.so;\n|' /etc/nginx/nginx.conf

RUN /etc/init.d/nginx restart