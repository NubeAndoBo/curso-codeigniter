# Rutas

Estando en la raiz del proyecto

## Pasos a Seguir

* 1.- Añadir dos funciones editando el archivo:

 `gedit /application/controllers/Welcome.php`

 y añadimos los metodos:

 ```php
 public function mensajes(){
   echo '<h5> <small>Hola Mundo</small></h5>';
 }

 public function mensaje($id){
   echo '<h5> <small>Hola Mundo</small></h5>'.$id;
 }
 ```

* 2.- Añadir las rutas:

`gedit /application/config/routes.php`

y añadimos las Rutas:

```php
$route['mensajes'] = 'welcome/mensajes';
$route['mensajes/(:num)'] = 'welcome/mensaje/$1';
```

### Iniciado nuestra Aplicación las URL son

* http://localhost:8000/index.php/welcome/clientes

* http://localhost:8000/index.php/welcome/cliente/#nro
