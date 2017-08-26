## Rutas

editar /application/controllers/Welcome.php

añadimos las rutas:

http://localhost:8000/index.php/welcome/clientes
http://localhost:8000/index.php/welcome/cliente/#nro

luego editamos /application/config/routes.php añadiendo:

$route['clientes'] = 'welcome/clientes';
$route['clientes/(:num)'] = 'welcome/cliente/$1';
