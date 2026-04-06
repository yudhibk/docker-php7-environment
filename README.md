# docker-php7-environment

Setup PHP 7 Environment with docket ^^

## List Tools

- **_PHP:7.4-apache_** ⚙️
- **_mysql:8.0_** 📈
- **_phpmyadmin_** 📉
- **_composer_** 📡

## List Command

Run Docker (Windows)

```bash
  docker-compose up -d
```
<sub>Use "docker compose" for linux</sub>

Stop Docker (Windows)

```bash
  docker-compose down
```
<sub>Use "docker compose" for linux</sub>

Open PHP Container Terminal

```bash
  docker-compose exec php bash 
```
<sub>Use "docker compose" for linux</sub>

Copy File ".sql" for restoring

```bash
  docker cp **File local/host location file .sql** mysql_db:**File container location**
```
```bash
  docker cp 'C:\Users\pusdatin_01\Downloads\www.sql' mysql_db:/www.sql
```

Restore Database (using ".sql" format)

```bash
  docker exec -it mysql_db mysql -u **User** -p **Password** www -e "source **File container location**"
```
```bash
  docker exec -it mysql_db mysql -u root -prootsecret www -e "source /www.sql"
```


## Port forward without apache

Change the IP host into "0.0.0.0" so it can be readable on the host, example:

```bash
  php spark serve --host 0.0.0.0 --port 8082
```

