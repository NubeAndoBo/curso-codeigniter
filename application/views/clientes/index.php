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
