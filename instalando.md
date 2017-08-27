# Instalando un proyecto CodeIgniter

* 1.- Nos Ubicamos en el directorio base de nuestro servidor Web (En mi caso uso apache2 Linux)

`cd /var/www/html`

* 2.- Desacargamos el comprimido base de CodeIgniter 3.1.5

`wget https://github.com/bcit-ci/CodeIgniter/archive/3.1.5.zip`

Lo descomprimimos y renombramos como queramos en mi caso le llamare codeigniter

* 3.- Entramos en la carpeta de nuestro proyecto

`cd codeigniter`

* 4.- Remplazamos la linea de codigo del archivo

`gedit /application/config/config.php`

```php
$config['base_url'] = '';
```
Por esta otra linea:

```php
$config['base_url'] = 'http://localhost:8000';
```

* 5.- Remplazamos la linea de codigo del archivo

`gedit /application/config/autoload.php`

```php
$autoload['helper'] = array();
```
Por esta otra linea:

```php
$autoload['helper'] = array('url');
```

* Ejecutamos en un servidor el proyecto

`php -S localhost:8000`

## URL de nuestra Aplicación

http://localhost:8000/
