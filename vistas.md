# Vistas

Estando en la raiz del proyecto

## Pasos a Seguir

Antes de seguir con cada paso, tomar en cuenta que se debe crear una carpeta assets en la raiz del proyecto
que contendra los javascript, css, e imagenes del proyecto.
Dichos archivos lo pueden ver ya creados en este repositorio.

* 1.- Creamos dos vistas:

 `gedit /application/views/clientes/index.php`

 cuyo contenido será:

 ```php
 <!DOCTYPE html>
 <html data-whatinput="keyboard" data-whatintent="keyboard" class=" whatinput-types-initial whatinput-types-keyboard"><head>
 <meta http-equiv="content-type" content="text/html; charset=UTF-8">
         <meta charset="UTF-8">
         <title>Curso PHP MVC Framework CodeIgniter</title>
             <link rel="icon" type="image/x-icon" href="favicon.ico" />
             <link rel="stylesheet" href="<?php echo base_url('./assets/css/foundation.css') ?>">
             <link rel="stylesheet" href="<?php echo base_url('./assets/css/app.css') ?>">
     <meta class="foundation-mq"></head>
     <body>

     <!-- Start Top Bar -->
     <div class="top-bar">
       <div class="row">
         <div class="top-bar-left">
           <ul class="dropdown menu" data-dropdown-menu="tckp8q-dropdown-menu" role="menubar">
             <li role="menuitem">Curso PHP MVC Framework CodeIgniter</li>
           </ul>
         </div>
       </div>
     </div>
     <!-- End Top Bar -->

     <br>

     <div class="row">
       <h4>Index</h4>
       <div class="medium-12  columns">
         <table>
           <tr>
             <th>Nombre</th>
             <th>Apellidos</th>
             <th>Correo</th>
             <th width="200">Accion</th>
           </tr>
           <?php foreach($clients as $cliente): ?>
           <tr>
             <td><?php echo $cliente['nombre'] ?></td>
             <td><?php echo $cliente['apellido'] ?></td>
             <td><?php echo $cliente['correo'] ?></td>
             <td><a class="button hollow" href="./clientes/1">VER DETALLES</a></td>
           </tr>
           <?php endforeach; ?>
         </table>
       </div>
     </div>

     <div class="row column">
       <hr>
       <ul class="menu">
         <li class="float-right">Copyright Footer</li>
       </ul>
     </div>

         <script src="<?php echo base_url('assets/js/vendor/jquery.js') ?>"></script>
         <script src="<?php echo base_url('assets/js/vendor/what-input.js') ?>"></script>
         <script src="<?php echo base_url('assets/js/vendor/foundation.js') ?>"></script>
         <script src="<?php echo base_url('assets/js/app.js') ?>"></script>
     </body>
 </html>
 }
 ```

  `gedit /application/views/clientes/detalles.php`

  cuyo contenido será:

  ```php
  <!DOCTYPE html>
  <html data-whatinput="keyboard" data-whatintent="keyboard" class=" whatinput-types-initial whatinput-types-keyboard"><head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
          <meta charset="UTF-8">
          <title>Curso PHP MVC Framework CodeIgniter</title>
              <link rel="icon" type="image/x-icon" href="favicon.ico" />
              <link rel="stylesheet" href="<?php echo base_url('./assets/css/foundation.css') ?>">
              <link rel="stylesheet" href="<?php echo base_url('./assets/css/app.css') ?>">
      <meta class="foundation-mq"></head>
      <body>

          <!-- Start Top Bar -->
      <div class="top-bar">
        <div class="row">
          <div class="top-bar-left">
            <ul class="dropdown menu" data-dropdown-menu="tckp8q-dropdown-menu" role="menubar">
              <li role="menuitem">Curso PHP MVC Framework CodeIgniter</li>
            </ul>
          </div>
        </div>
      </div>
      <!-- End Top Bar -->
      <br>


      <div class="row">
        <div class="medium-12 large-12 columns">
          <h4>Detalles</h4>
          <form method="POST">
            <div class="medium-4  columns">
              <label>Nombre</label>
              <input type="text" name="nombre">
            </div>
            <div class="medium-4  columns">
              <label>Apellidos</label>
              <input type="text" name="apellido">
            </div>
            <div class="medium-4  columns">
              <label>Correo</label>
              <input type="text" name="correo">
            </div>
            <div class="medium-12  columns">
              <input value="SEND" class="button success hollow" type="submit">
            </div>
          </form>
        </div>
      </div>


      <div class="row column">
        <hr>
        <ul class="menu">
          <li class="float-right">Copyright Footer</li>
        </ul>
      </div>

          <script src="<?php echo base_url('assets/js/vendor/jquery.js') ?>"></script>
          <script src="<?php echo base_url('assets/js/vendor/what-input.js') ?>"></script>
          <script src="<?php echo base_url('assets/js/vendor/foundation.js') ?>"></script>
          <script src="<?php echo base_url('assets/js/app.js') ?>"></script>
      </body>
  </html>
  }
  ```

  * 2.- Añadimos una variable y dos metodos en el controlador llamado Cliente:

   `gedit /application/controllers/Cliente.php`

   lo añadido será:

   ```php

   var $clientes = [
                     [ 'id' => 0 , 'nombre' => 'Emmett', 'apellido' => 'Brown', 'correo' => 'emmett@domain.com' ] ,
                     [ 'id' => 1 , 'nombre' => 'Jennifer', 'apellido' => 'Parker', 'correo' => 'jennifer@domain.com' ] ,
                 ];

   public function index(){
 		$this->load->view('clientes/index', [ 'clients' => $this->clientes ]);
 	 }

 	 public function clientes($id){
 		$this->load->view('clientes/detalles');
 	 }
   ```

  * 3.- Añadir las rutas:

  `gedit /application/config/routes.php`

  y añadimos las Rutas:

  ```php
  $route['clientes'] = 'cliente/index';
  $route['clientes/(:num)'] = 'cliente/clientes/$1';
  ```

### Iniciado nuestra Aplicación las URL son

`php -S localhost:8000`

* http://localhost:8000/clientes

* http://localhost:8000/clientes/#nro
