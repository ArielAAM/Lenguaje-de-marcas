<!DOCTYPE html>
<head>
    <title>Salida</title>
    <link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
    <h1>Inscripcion curso</h1>
    <?php
        $errores = array();
        if(empty($_POST['nombre'])){
            $errores[]="no has introducido el nombre";
        }
        if(empty($_POST['apellidos'])){
            $errores[]="no has introducido el apellido";
        }
        if(empty($_POST['dni'])){
            $errores[]="no has introducido el dni";
        }
        if(empty($_POST['edad'])){
            $errores[]="la edad no ha sido introducida";
        }
        if(empty($_POST['hombre']) and empty($_POST['mujer'])){
            $errores[]="no has introducido genero";
        }
        if(empty($_POST['localidad'])){
            $errores[]="la localidad no ha sido introducida";
        }
        if(empty($_POST['edad'])){
            $errores[]="la edad no ha sido introducida";
        }
        if(!isset($_POST['provincias'])){
            $errores[]="no has seleccionado provincia";
        }
        if(!isset($_POST['nacimiento'])){
            $errores[]="no has seleccionado fecha de nacimiento";
        }
        if(!isset($_POST['tipoCalle'])){
            $errores[]="no has seleccionado el tipo de tu calle";
        }
        if(empty($_POST['nombreCalle'])){
            $errores[]="has dejado en blanco tu calle";
        }
        if(empty($_POST['codigoPostal'])){
            $errores[]="has dejado en blanco el codigo postal";
        }
        if(count($errores)>0){
            echo "Ha ocurrido un error: haz click <a href=formulario.html>aqui</a> para volver"
        }else{
            echo "<fieldset>";
            echo "<table>";
            echo "<tr>";
            echo "<th colspan=2>Datos personales</th>";
            echo "<th colspan=2> Datos complementarios</th>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>Apellidos</td>";
            echo "<td> $_POST['apellidos'] </td>";
            echo "<td>Localidad</td>";
            echo "<td>$_POST['localidad']</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>Nombre</td>";
            echo "<td> $_POST['nombre']</td>";
            echo "<td>Provincia</td>";
            echo "<td> $_POST['provincia'] </td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>DNI</td>";
            echo "<td> $_POST['dni'] </td>";
            echo "<td>Fecha de nacimiento</td>";
            echo "<td>$_POST['nacimiento']</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>Edad</td>";
            echo "<td>$_POST['edad']</td>";
            echo "<td>Tipo de domicilio</td>";
            echo "<td>$_POST['tipoCalle']</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td rowspan=2>Sexo</td>",
            echo "<td>";
            if(isset($_POST['hombre'])){
                echo $_POST['hombre'];
            }
            if(isset($_POST['mujer'])){
                echo $_POST['mujer'];
            }
            echo "</td>";
            echo "<td>direccion</td>";
            echo "<td>$_POST['nombreCalle']</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>Codigo postal </td>";
            echo "<td> $_POST['codigoPostal']</td>";
            echo "</tr>";
            echo "</table>";
            echo "</fieldset>";
        }
        ?>