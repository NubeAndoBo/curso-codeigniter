# Controladores

Estando en la raiz del proyecto

## Pasos a Seguir

* 1.- Creamos un controlador llamado Cliente:

 `gedit /application/controllers/Cliente.php`

 cuyo contenido será:

 ```php
 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');

 class Cliente extends CI_Controller {

   public function mensajes(){
 		echo 'nuevo Controlador';
 	}

 	public function mensaje($id){
 		echo 'El identificador es: '.$id;
 	}
 }
 ```

* 2.- Añadir las rutas:

`gedit /application/config/routes.php`

y añadimos las Rutas:

```php
$route['mensajescliente'] = 'cliente/mensajes';
$route['mensajescliente/(:num)'] = 'cliente/mensaje/$1';
```

### Iniciado nuestra Aplicación las URL son

`php -S localhost:8000`

* http://localhost:8000/mensajescliente

* http://localhost:8000/mensajescliente/#nro
