# natsuko
1. Git clone...





## Construct docker env

1. Git clone ...

   ```
   $ cd /PROJECT_DIR/
   $ git clone https://[GITHUB_USER]:[GITHUB_PRIVATE_TOKEN]@github.com/roughlang/natsuko.git
   ```

   or

   ```
   $ cd /PROJECT_DIR/
   $ git clone https://github.com/roughlang/natsuko.git
   ```

2. Prepare to set up Laravel

   ```
   $ cd natsuko/app
   $ mkdir -p storage/framework/views
   $ mkdir -p storage/framework/sessions
   $ mkdir -p storage/framework/app/cache
   $ mkdir -p storage/framework/cache/data/
   ```

3. Composer install

   ```
   $ php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
   $ php -r "if (hash_file('sha384', 'composer-setup.php') === '906a84df04cea2aa72f40b5f787e49f22d4c2f19492ac310e8cba5b96ac8b64115ac402c8cd292b8a03482574915d1a8') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
   $ php composer-setup.php
   $ php -r "unlink('composer-setup.php');"
   ```

4. Composer update

   ```
   $ php composer.phar update
   ```

5. sail start

   ```
   $ ./vendor/bin/sail up -d
   ```

   This is not enough, you have to do the following

   ```
   $ docker-compose down && docker-compose up -d
   ```

   Try to access http://localhost:7250

   You get 500 error.

6. Set the .env

   ```
   $ cp -p .env.example .env
   ```

7. Create database

   ```
   $ docker-compose ps
   $ docker exec -it app_mysql_1 /bin/bash
   # mysql -u root
   mysql> create database app;
   mysql> show databases;
   +--------------------+
   | Database           |
   +--------------------+
   | app                |
   | information_schema |
   | mysql              |
   | performance_schema |
   | sys                |
   +--------------------+
   5 rows in set (0.01 sec)
   $ exit
   ```

   Access to http://localhost:7250/pma/index.php

   ```
   user: root
   password: (empty)
   ```

8. execute migration

   ```
   $ ./vendor/bin/sail artisan migrate
   Migration table created successfully.
   Migrating: 2014_10_12_000000_create_users_table
   Migrated:  2014_10_12_000000_create_users_table (69.71ms)
   Migrating: 2014_10_12_100000_create_password_resets_table
   Migrated:  2014_10_12_100000_create_password_resets_table (54.29ms)
   Migrating: 2019_08_19_000000_create_failed_jobs_table
   Migrated:  2019_08_19_000000_create_failed_jobs_table (60.73ms)
   Migrating: 2019_12_14_000001_create_personal_access_tokens_table
   Migrated:  2019_12_14_000001_create_personal_access_tokens_table (75.05ms)
   ```



## Set up wordpress

Access to http://localhost:7250/ac/wp-admin/

![](/Users/osamuyamakami/Documents/Roughlang/develop/natsuko/material/readme_img/readme-001.png)

Set the following: 

```
database name: app
user: root
password: (empty)
host: mysql
prefix: wp_
```
![](/Users/osamuyamakami/Documents/Roughlang/develop/natsuko/material/readme_img/readme-002.png)

Modify wp-config.php. add port number.

```
// /PROJECT_DIR/app/public/ac/wp-config.php
define( 'WP_HOME', 'http://localhost:7250/ac' );
define( 'WP_SITEURL', 'http://localhost:7250/ac' );
```

That's all.


