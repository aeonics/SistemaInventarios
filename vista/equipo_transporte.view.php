<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>TRANSPORTE</title>
<link rel="stylesheet" href="css/base.css" charset="utf-8">
   </head>
   <body>
      <!-- SE MANDA A LLAMAR AL MENU -->

        <?php require 'menu.view.php' ?>
       <!-- SE TERMINA DE LLAMAR AL MENU -->
      <!-- AQUI VA EL CONTENIDO -->
      <div id="CONTENIDO">
         <div>
            <div id="TITULOXMODULO">
                  <img src="imagen/iconos/transporte.jpg" width="48px" />
                  <h1>MODULO DE EQUIPO DE TRANSPORTE</h1>
            </div>
         <hr>

         <!-- SE LLAMA AL MENU DE ACCIONES -->
         <?php require ('menu_acciones.view.php') ?>
         <!-- SE TERMINA DE LLAMAR A MENU ACCIONES -->

         <div><br><br>
            <hr>
            <h3>El identificador para los equipos de Transporte es ET</h3>
            <form class="formulario_general" action="equipo_oficina.php" method="post">
               <!-- INSERTAR EL IDENTIFICADOR EN LA BD EO -->
               <ul>
               <fieldset>
                     <legend>Datos Generales</legend>
                  <li>

               <input class="campo-estilo campo-cortado align-left" type="text" name="vim" placeholder="VIN" title="Número de chasis bastidor" maxlength="20"> &nbsp;
               <input class="campo-estilo campo-cortado align-right" type="text" name="marca" placeholder="Marca" title="Chevrolet, Acura, HONDA, etc." maxlength="25">
                  </li>
            <li>
               <select class="campo-estilo field-full align-left" name="color" title="Elige el color del auto">
                  <option value="#">Selecciona un Color...</option>
                   <option value="Blanco">Blanco</option>
                   <option value="Negro">Negro</option>
                   <option value="Plata">Plata</option>
                   <option value="Azul">Azul</option>
                   <option value="Gris">Gris</option>
                   <option value="CAfe">Cafe</option>
                   <option value="Rojo">Rojo</option>
                   <option value="Verde">Verde</option>
                   <option value="Otro">Otro</option>
                 </select> &nbsp;
               <input class="campo-estilo campo-cortado align-right" type="text" name="placa" placeholder="Placa" title="Coloca el númerod e la Placa" maxlength="10">
            </li>
            <li>

               <select class="campo-estilo field-full align-left" name="ano" title="Elige el año del vehiculos">
                  <?php
                  for ($j=1990; $j<2017; $j++) {
                     echo "<option value=\"$j\">$j</option>";
                  }
                  ?>
                 </select> &nbsp;
               <select class="campo-estilo field-full align-left"name="responsable" title="Elige el responsable del equipo">
                   <option value="Usuario">Usuario</option>
                   <option value="Empleado">Empleado</option>
                   <option value="Empleado">Empleado</option>
                   <option value="Empleado">Empleado</option>
                 </select>
               </li>
               <li>

               </li>
            <li>
                  <select class="campo-estilo field-full align-left"name="estatus" title="Cual es el estatus del equipo">
                   <option value="Estatus 1">Estatus 1</option>
                   <option value="Estatus 2">Estatus 2</option>
                   <option value="Estatus 3">Estatus 3</option>
                   <option value="Estatus 4">Estatus 4</option>
                 </select>
            </li>
            <br>


            </fieldset>
            <br>
            <fieldset>
               <legend>Datos de compra</legend> <!--DATOS DE COMPRA-->
            <li>
               <input class="campo-estilo campo-cortado align-left" type="text" name="costo" placeholder="Costo del auto sin IVA" title="Solo números" maxlength="16" pattern="[0-9.]*">
               &nbsp;
               <input class="campo-estilo campo-cortado align-right" title="Solo números" pattern="[0-9.]*" type="text" name="iva" placeholder="Cual es el IVA" maxlength="10" required>
            </li>
               <li>
               <input class="campo-estilo field-full align-left" type="date" name="fechacompra" step="1" min="2013-01-01" max="2030-12-31" title="Coloca la fecha de compra">
               </li>
            </fieldset>
               <!-- Este espacio es para el valor actual de equipo aplicando la depreciasion -->
               <!--AQUI  -->
               <!-- Este espacio es para el valor actual de equipo aplicando la depreciasion -->
               <br>
               <fieldset>
                  <legend>Documentación</legend>
                  <label for="imagen">Subir imagen </label><br>
               <li>
               <input class="campo-estilo field-full align-left" type="file" name="imagen" title="Carga una imagen del equipo que no pese mas de 3 MB">
            </li><br><hr>
            <label for="pdf">Factura </label><br>
            <li>
               <input class="campo-estilo field-full align-left" type="file" name="pdf" title="Carga la factura del equipo">
            </li>
            <br>
            <hr>
               <label for="xml">XML de la factura </label><br>
               <li>
               <input class="campo-estilo field-full align-left" type="file" name="xml" title="Carga el XML de la factura del equipo">
            </li>
               </fieldset>
               <ul>
                  <input  id="boton_enviar" type="submit" name="guardar" value="Guardar">
            </form>
            <br><br><br><br>
         </div>
         </div>
      </div>
      <!-- TERMINA EL CONTENIDO -->
   </body>
</html>
