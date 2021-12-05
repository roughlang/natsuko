# natsuko
Natural body art 208

```
$ cd /PROJECT_DIR/app
$ ./vendor/bin/sail up -d
```

### Database

user: root
password: 
database: app
host: mysql




## From Git

git clone
```
$ git clone https://github.com/roughlang/natsuko.git
$ cd natsuko/app
```

make cache directory
```
$ mkdir -p storage/framework/cache/data/
$ mkdir -p storage/framework/aop/cache
$ mkdir -p storage/framework/sessions
$ mkdir -p storage/framework/views
```

composer download
```
$ /usr/local/php/8.0/bin/php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
$ /usr/local/php/8.0/bin/php -r "if (hash_file('sha384', 'composer-setup.php') === '906a84df04cea2aa72f40b5f787e49f22d4c2f19492ac310e8cba5b96ac8b64115ac402c8cd292b8a03482574915d1a8') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
$ /usr/local/php/8.0/bin/php composer-setup.php
$ /usr/local/php/8.0/bin/php -r "unlink('composer-setup.php');"
$ /usr/local/php/8.0/bin/php -r "unlink('composer-setup.php');"
```

composer update
```
$ /usr/local/php/8.0/bin/php composer.phar update
```

create .env file
```
$ cp .env.example .env
$ /usr/local/php/8.0/bin/php artisan key:generate
```
.envの内容は環境に合わせて書き換えてください。

db setting
mysql dbを作成して、そのアクセス情報を書いておきます。
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=app
DB_USERNAME=root
DB_PASSWORD=
```