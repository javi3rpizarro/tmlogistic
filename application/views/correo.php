   <?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang='es'>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <title>Previsualizacion Correo</title>
</head>
<body>

<div style='background-color: #ddd; padding: 0px; margin: 0px;'>
    <table style='min-width: 400px; max-width: 600px; padding: 0; margin:0 auto; border-collapse: collapse;'>
        <tr>
            <td style='font-family: Arial, sans-serif; background-color: #F39736; text-align: center; color: #fff; padding: 0px'>
                <h3 style='font-weight: 400'>TECH-MARINE LOGISTIC</h3>
            </td>
            <td style='background-color: #F39736;'>
                <img style='width: 200px; height: 80px;' src='<?=base_url()?>assets/images/tmlogo.png'>
            </td>
            
        </tr>

        
        <tr>
            <td colspan='2' style='font-family: sans-serif; font-size: .8rem; background-color: #fff; text-align: right; padding-right: 20px; padding-top: 0px; padding-bottom: 40px;'>
                <p>
                    Mensaje enviado el 22-08-2019
                </p>
            </td>
        </tr>
        <tr style='font-family: sans-serif; font-size: .9rem; background-color: #fff;  padding-left: 40px; padding-top: 40px;'>
            <td style='text-align: left; padding-left: 40px;'>Nombre: <?=$_POST['nombre']?></td>
            <td style='text-align: left;'>Correo: <?=$_POST['correo']?></td>
        </tr>
        <tr style='font-family: sans-serif; font-size: .9rem; background-color: #fff; padding-left: 40px; padding-top: 40px;'>
            <td style='text-align: left; padding-left: 40px;'>Empresa: <?=$_POST['empresa']?></td>
            <td style='text-align: left;'>Telefono: <?=$_POST['telefono']?></td>    
        </tr>
        <!--tr style='font-family: sans-serif; font-size: .9rem; background-color: #fff;  padding-left: 40px; padding-top: 40px;'>
            <td style='text-align: left; padding-left: 40px;'>Motivo: <?=$_POST['motivo']?></td>
            <td style='text-align: left;'></td>
        </tr-->
        
        <tr>
            <td colspan='2' style='background-color: #fff; padding-left: 40px; padding-right: 40px;'>
                <div style='background-color: #fff; margin-top: 20px; border-top-style: solid; border-top-width: 1px; border-top-color: #ddd;'></div>
            </td>
        </tr>
        <tr>
            <td colspan='2' style='font-family: sans-serif; font-weight: 500; background-color: #fff; font-size: .85rem; text-align: left; padding-left: 90px; padding-right: 90px; padding-top: 50px; padding-bottom: 50px;'>
                <p style='word-break: break-all;'>
                    <?php $string = str_replace(array('\r\n', '\n\r', '\r', '\n'), '<br />', $_POST['mensaje']);?>
                    <?=$string?>
                </p>
            </td>
        </tr>
        <tr>
            <td colspan='2' style='font-family: sans-serif; font-size: 11px; background-color: #ecf0f1; text-align: center; padding: 40px'>
                <p>
                    Si se presenta algún problema con el correo recibido, por favor contactarse<br>con los desarrolladores al email contacto@owc.cl   
                </p>
            </td>
        </tr>
        <tr>
            <td colspan='2' style='font-family: Arial, sans-serif; font-size: 1.1rem; background-color: #000040; color: #fff; text-align: center; padding: 0px'>
                <h6 style='font-weight: 300'>TMLOGISTIC, DERECHOS RESERVADOS &copy;. Valparaiso, Chile.</h6>
            </td>
        </tr>
        
        
    </table>
</div>

</body>
</html>