# CodeIgniter

cd /var/www/html

wget https://github.com/bcit-ci/CodeIgniter/archive/3.1.5.zip

cd codeigniter

php -S localhost:8000

http://localhost:8000/

## Rutas

editar /application/controllers/Welcome.php

añadimos las rutas:

http://localhost:8000/index.php/welcome/clientes
http://localhost:8000/index.php/welcome/cliente/#nro

luego editamos /application/config/routes.php añadiendo:

$route['clientes'] = 'welcome/clientes';
$route['clientes/(:num)'] = 'welcome/cliente/$1';
