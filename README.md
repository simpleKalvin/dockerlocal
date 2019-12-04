# 🚀本地Docker使用教程🚗
1. 克隆项目后修改根目录的.env PROJECTPATH 至自己项目路径
> 项目路径如果是 D:/project/forcast.api.com 则项目路径为 D:/project 🔥
2. 修改 根目录下的 nginx 下的 sites/default.conf.example 为 项目名称.conf 并修改文件中的root地址至 项目地址
> 由于映射后路径 如：D:/project:/var/www 所以 如果项目名为forcast.api.com root路径为/var/www/orcast.api.com/web  及为index.php目录🔥
3. 执行 docker-compose build php
4. 执行 docker-compose up -d nginx php 即可开始体验与开发环境版本一致的开发感受🌪️

## 进阶
### 新增新的php版本
1. 复制php 目录下的php7.1.7 至你想要的版本 如php7.2.1
2. 修改对应版本中的Dockerfile 中的FROM php:7.1.7-fpm-alpine 至 FROM php:（你要的版本）-fpm-alpine
3. 修改根目录下的.env 中的PHPVERSION 至 1号你设置的php版本 如 php7.2.1
4. 执行 docker-compose build php
5. 执行 docker-compose up -d nginx php 即可开始使用新版本🌪️

### 修改swoole版本
1. 进入想要修改swoole版本的php 版本文件夹 如 根目录下的 php/php7.1.7/Dockerfile
2. 修改ENV SWOOLE_VERSION = 为你要的swoole版本 如 ENV SWOOLE_VERSION = 3.4.10
3. 执行 docker-compose build php
4. 执行 docker-compose up -d nginx php 即可开始使用新版本swoole🚀 