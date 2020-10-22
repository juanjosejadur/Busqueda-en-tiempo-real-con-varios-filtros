<?php
    $conexion = mysql_connect("localhost","root","");	
	if(!$conexion){
		die ("No se ha podido conectar a la base de datos ".mysql_error());	
	}
	//coneion a servidor	
	$bd_seleccionada= mysql_select_db("cv",$conexion);
	if(!$bd_seleccionada){
		die ("No se ha podido seleccionar la base de datos ".mysql_error());
	}
?>
<html>
    <head>
        <title>
            Inicio
        </title>
        <style>
            #table {
                font-size:14px;
                border:1;
                width:100%;
                height:100%;
            }
        </style>
    </head>
    <body>
        <center>
            <table id="table" >
                <tr>
                    <td>
                        <table width="100%" height="100%" border="2">
                            <tr>
                                <td colspan="13">
                                    <center>
                                        Buscar CV...
                                    </center>
                                </td>
                            </tr>
                            <tr>
                                 <td>Nombre y Apellido</td><td>Sexo</td><td>Fecha de nacimiento</td><td>Localidad</td><td>Contacto<br>Tel-Cel</td><td>Educacion</td><td>Profesion/<br>Ocupacion</td><td>Ingreso de CV</td><td>CV</td>
                            </tr>
                            <tr>
                                 <td>
                                    <input name="nombre" type="text">
                                </td>
                                <td>
                                    <select name="sexo">
                                        <option value="Masculino">M</option>
                                        <option value="Femenino">F</option> 
                                    </select>
                                </td>
                                <td>
                                    <input type="date">
                                </td>
                                <td>
                                    <input name="nombre" type="text">
                                </td>
                                <td>
                                    <input type="tel" name="telefono" placeholder="(Código de área) Número">
                                </td>
                                <td>
                                    <select name="educacion">
                                        <option value="pi">Primaria Incompleta</option>
                                        <option value="pc">Primaria Completa</option> 
                                        <option value="pc">Secundaria Incompleta</option> 
                                        <option value="pc">Secundaria Completa</option> 
                                        <option value="pc">Teriario Incompleto</option> 
                                        <option value="pc">Terciario Completo</option> 
                                    </select>
                                </td>
                                <td>
                                    <input type="textarea" name="conocimientoadd">    
                                </td>
                                <td>
                                
                                </td>
                                <td>
                                
                                </td>                                
                            </tr> 
                            <?php
                                $cv = mysql_query ("select * from cv ORDER BY ID asc ",$conexion);
                                while ($cvs = mysql_fetch_array ($cv)){
                                    $id=$cvs["id"];
                                    $nombre=$cvs["nombreapellido"];
                                    $sexo=$cvs["sexo"];
                                    $fechanacimiento=$cvs["fechanacimiento"];
                                    $localidad=$cvs["localidad"];
                                    $telocel=$cvs["telocel"];
                                    $educacion=$cvs["educacion"];
                                    $profesion=$cvs["profesion"];
                                
                            ?>
                            <tr>
                                <td>
                                    <?php
                                        echo $nombre."--".$id;
                                    ?>
                                </td>
                                <td>
                                    <?php
                                        echo $sexo;
                                    ?>
                                <td>
                                    <?php
                                        echo $fechanacimiento;
                                    ?>
                                </td>
                                <td>
                                    <?php
                                        echo $localidad;
                                    ?>
                                </td>
                                <td>
                                    <?php
                                        echo $telocel;
                                    ?>
                                </td>
                                <td>
                                    <?php
                                        echo $educacion;
                                    ?>
                                </td>
                                <td>
                                    <?php
                                        echo $profesion;
                                    
                                    ?>
                                </td>
                                <td>

                                </td>
                                <td>
                               
                                </td>                               
                            </tr>
                            <?php
                            
                            }
                            ?>
                        </table>
                    </td>
                </tr>
            </table>
        </center>   
    </body>
</html>
