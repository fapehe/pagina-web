<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Pagina</title>
    </head>
    <body>
        <script>
            function mostrarId()
            {
                 var $texto=ID.values('cuadro');
                 alert($texto);
                 
            }
            
        </script>
        <style>
            .cuadro
            {
             background-color: red;  
             border-style: solid;
             border-color: black;
             height: 15px;
             
            }
            .texto
            {
             height: 18px
            }
            #boton
            {
             border-style: solid;
             border-color: black;
             border-width: 5px;
             
            }
        </style>
        <form>
            <label class="texto">Id</label><input type="text" class="cuadro" id="ID" size="15px" onclick="mostrarId()"><br>
            <label class="texto">Nombre</label><input type="text" class="cuadro" id="nombre"><br>
            <label class="texto">Edad</label><input type="text" class="cuadro" id="edad"><br>
            <input type="submit" value="Aceptar" id="boton"><br>
        </form>
    </body>
</html>
