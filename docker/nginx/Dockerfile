FROM alpine:3.9

# nginxのインストール
RUN apk update && \
    apk add --no-cache nginx && \
    apk add tzdata && \
    cp /usr/share/zoneinfo/Asia/Tokyo /etc/localtime && \
    apk del tzdata && \
    mkdir -p /run/nginx

# ポートを明示する
EXPOSE 80

WORKDIR /var/www/src

# フォアグラウンドで動かす
CMD ["/usr/sbin/nginx", "-g", "daemon off;"]
