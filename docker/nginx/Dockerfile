FROM alpine:3.9

ENV NGINX_VERSION 1.8.1

# nginxのインストール
RUN apk update && \
    apk add --no-cache nginx

RUN apk --update add tzdata && \
    cp /usr/share/zoneinfo/Asia/Tokyo /etc/localtime && \
    apk del tzdata && \
    rm -rf /var/cache/apk/*

# ポート設定
EXPOSE 80
 
RUN mkdir -p /run/nginx

# フォアグラウンドで動かす
CMD ["/usr/sbin/nginx", "-g", "daemon off;"]

WORKDIR /var/www/src
