FROM php:7.1.7-fpm-alpine
ENV SWOOLE_VERSION=1.9.10
ENV REDIS_VERSION=3.1.3
COPY ./php.ini /usr/local/etc/php/
# 新增main仓库
RUN echo "http://dl-cdn.alpinelinux.org/alpine/edge/main" >> /etc/apk/repositories \
 && apk --update upgrade \
 && apk update \
# 安装依赖
&& apk add --no-cache bash  \
g++ gcc make zlib zlib-dev pcre pcre-dev libjpeg  libpng libpng-dev freetype freetype-dev  libxml2 libxml2-dev  bzip2 bzip2-dev ncurses ncurses-dev curl curl-dev e2fsprogs e2fsprogs-dev krb5 krb5-dev openldap openldap-dev   openssl openssl-dev libjpeg-turbo-dev autoconf libmcrypt libmcrypt-dev gettext gettext-dev linux-headers git openssh cmake rabbitmq-c rabbitmq-c-dev



# 安装AMQP 并开启 amqp 扩展
RUN pecl install http://pecl.php.net/get/amqp-1.9.4.tgz


# 安装 swoole
RUN wget -P /tmp  https://github.com/swoole/swoole-src/archive/v${SWOOLE_VERSION}.tar.gz \
&& tar -zxvf /tmp/v${SWOOLE_VERSION}.tar.gz -C /tmp \
&& cd /tmp/swoole-src-${SWOOLE_VERSION} \
&& phpize \
&& ./configure \
&& make && make install 

# # 安装redis扩展
RUN curl -L -o /tmp/redis.tar.gz https://github.com/phpredis/phpredis/archive/${REDIS_VERSION}.tar.gz \
&& tar xfz /tmp/redis.tar.gz \
&& rm -r /tmp/redis.tar.gz \
&& mkdir -p /usr/src/php/ext \
&& mv phpredis-${REDIS_VERSION} /usr/src/php/ext/redis \
&& docker-php-ext-install redis 

# # 安装composer
RUN curl -sS https://getcomposer.org/installer | php \
&& mv composer.phar /usr/local/bin/composer \
# 设置阿里云镜像
&& composer config -g repo.packagist composer https://mirrors.aliyun.com/composer/


# # 安装php扩展
RUN docker-php-ext-install bcmath bz2 gd gettext mcrypt mysqli pcntl pdo_mysql shmop soap sysvsem xmlrpc opcache zip \
&& docker-php-ext-enable amqp
