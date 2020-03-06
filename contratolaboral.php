<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ContraApp - Terminados</title>

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
    <!-- Compiled and minified CSS Datatables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <!-- ContrApp Styelesheet -->
    <link rel="stylesheet" href="css/ContrAppstyles.css">

        <!-- Fontfaces CSS-->
        <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">


    <!-- Compiled and minified jQuery -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" ></script>
    <!-- Compiled and minified JavaScript Datatables -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>

    <script src="xepOnline.jqPlugin.js"></script>

    
</head>
<body class="grey lighten-4">  

   
    <?php $emp_oficio= $_POST["oficio"];?>
    <?php $emp_salario= $_POST["salario"];?>
    <?php $emp_periodo= $_POST["periodo"];?>
    <?php $emp_inicio= $_POST["inicio"];?>
    <?php $emp_lugar= $_POST["lugar"];?>
    <?php $emp_horario= $_POST["horario"];?>

    <!-- php file to sesion start --> 
    <?php include 'php/sesion.php'; ?>
    <!-- php file to set profile image file path  -->
    <?php include 'php/rutaimagen.php'; ?>
    <!-- php file to show datauser  -->
    <?php include 'php/datauser.php'; ?>
     <!-- php file to show employee data  -->
     <?php include 'php/dataemployee.php'; ?>
      <header>

        <!--file to sidenav and  navbar --> 
        <?php include 'nav_sidenav_bar.php'; ?>     

      </header>

      <main >              
               <!-- in this section is the main content -->

              <nav class="transparent" >
                <div class="nav-wrapper">
                  <div class="col s12">
                    <a href="#!" class="breadcrumb">ContrApp</a>
                    <a href="#!" class="breadcrumb">Mis contratos</a>
                    <a href="#!" class="breadcrumb">Terminados</a>
                  </div>
                </div>
              </nav>
                  
              <div class="container">
               <div class="masonry-row" style="position:relative;">
               <a href="#" onclick="return xepOnline.Formatter.Format('prueba',{pageWidth:'216mm', pageHeight:'279mm'});">BUTTON</a>

                <!-- Contract Start -->

                <div class="row">   
                  <div class="col s12">
                    <div id="prueba" class="card">


                            <p style="text-align: justify;"><span style="font-size: 10.5pt; line-height: 110%; font-family: 'Century Gothic',sans-serif;">&nbsp;</span></p>
                            <table style="height: 1385px; border-collapse: collapse; border: none; width: 578px; margin-left: auto; margin-right: auto;" width="578">
                            <tbody>
                            <tr style="height: 23.0pt;">
                            <td style="width: 174.625px; border: 1pt solid black; padding: 0cm 5.4pt; height: 72px;" rowspan="2">

                            <p style="text-align: center;"><span style="font-size: 10.5pt; line-height: 110%; color: #d9d9d9;"><img style="height: 100px;  margin:auto;" src="uploads/<?php echo $ruta_img;?>"></span></p>
                            
                            </td>
                            <td style="width: 262.625px; border-top: 1pt solid black; border-right: 1pt solid black; border-bottom: 1pt solid black; border-image: initial; border-left: none; padding: 0cm 5.4pt; height: 72px;" colspan="2" rowspan="2">
                            <p style="text-align: center;"><strong><span style="font-size: 10.5pt; line-height: 110%;">&nbsp;</span></strong></p>
                            <p style="text-align: center;"><strong><span style="font-size: 10.5pt; line-height: 110%;">CONTRATO INDIVIDUAL DE TRABAJO A </span></strong><span style="font-size: 10.5pt; line-height: 110%;"><strong>T&Eacute;RMINO FIJO GENERADO CON TECNOLOG&Iacute;A <em>BLOCKCHAIN</em></strong></span></p>
                            </td>
                            <td style="width: 130.625px; border-top: 1pt solid black; border-right: 1pt solid black; border-bottom: 1pt solid black; border-image: initial; border-left: none; padding: 0cm 5.4pt; height: 23px;">
                            <p style="text-align: left;"><span style="font-size: 10.5pt; line-height: 110%;">Nro. 01-1</span><span style="font-size: 10.5pt; line-height: 110%;">9</span></p>
                            </td>
                            </tr>
                            <tr style="height: 49.5pt;">
                            <td style="width: 130.625px; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 0cm 5.4pt; height: 49px;">
                            <p><span style="font-size: 10.5pt; line-height: 110%;">Edici&oacute;n.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 001</span></p>
                            </td>
                            </tr>
                            <tr style="height: 17.0pt;">
                            <td style="width: 598.625px; border-right: 1pt solid black; border-bottom: 1pt solid black; border-left: 1pt solid black; border-image: initial; border-top: none; background: black; padding: 0cm 5.4pt; height: 17px;" colspan="4">
                            <p style="text-align: center;"><span style="font-family: verdana, geneva;"><strong><span style="font-size: 10.5pt; line-height: 110%; color: #ffffff;">DATOS DEL EMPLEADOR</span></strong></span></p>
                            </td>
                            </tr>
                            <tr style="height: 17.0pt;">
                            <td style="width: 293.625px; border-right: 1pt solid black; border-bottom: 1pt solid black; border-left: 1pt solid black; border-image: initial; border-top: none; padding: 0cm 5.4pt; height: 17px;" colspan="2">
                            <p><strong><span style="font-size: 10.5pt; line-height: 110%; color: black;">Nombre del EMPLEADOR:</span></strong></p>
                            </td>
                            <td style="width: 289.625px; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 0cm 5.4pt; height: 17px;" colspan="2">
                            <p id="emisor"><span style="font-size: 10.5pt; line-height: 110%; color: black;"><?php echo $NAME;?></span></p>
                            </td>
                            </tr>
                            <tr style="height: 18.0pt;">
                            <td style="width: 293.625px; border-right: 1pt solid black; border-bottom: 1pt solid black; border-left: 1pt solid black; border-image: initial; border-top: none; padding: 0cm 5.4pt; height: 18px;" colspan="2">
                            <p><strong><span style="font-size: 10.5pt; line-height: 110%; color: black;">C&eacute;dula de Ciudadan&iacute;a</span></strong></p>
                            </td>
                            <td style="width: 289.625px; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 0cm 5.4pt; height: 17px;" colspan="2">
                            <p><span style="font-size: 10.5pt; line-height: 110%; color: black;"><?php echo $IDENT;?></span></p>
                            </td>
                            </tr>
                            <tr style="height: 12.0pt;">
                            <td style="width: 293.625px; border-right: 1pt solid black; border-bottom: 1pt solid black; border-left: 1pt solid black; border-image: initial; border-top: none; padding: 0cm 5.4pt; height: 12px;" colspan="2">
                            <p><strong><span style="font-size: 10.5pt; line-height: 110%; color: black;">Direcci&oacute;n y Domicilio del EL EMPLEADOR </span></strong></p>
                            </td>
                            <td style="width: 289.625px; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 0cm 5.4pt; height: 12px;" colspan="2">
                            <p><span style="font-size: 10.5pt; line-height: 110%;"><?php echo $ADDRESS;?></span></p>
                            </td>
                            </tr>
                            <tr style="height: 17.0pt;">
                            <td style="width: 598.625px; border-right: 1pt solid black; border-bottom: 1pt solid black; border-left: 1pt solid black; border-image: initial; border-top: none; background: black; padding: 0cm 5.4pt; height: 17px;" colspan="4">
                            <p style="text-align: center;"><span style="color: #ffffff;"><strong><span style="font-size: 10.5pt; line-height: 110%;">DATOS DEL TRABAJADOR</span></strong></span></p>
                            </td>
                            </tr>
                            <tr style="height: 18.0pt;">
                            <td style="width: 293.625px; border-right: 1pt solid black; border-bottom: 1pt solid black; border-left: 1pt solid black; border-image: initial; border-top: none; padding: 0cm 5.4pt; height: 18px;" colspan="2">
                            <p><strong><span style="font-size: 10.5pt; line-height: 110%; color: black;">Nombre del TRABAJADOR:</span></strong></p>
                            </td>
                            <td style="width: 289.625px; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 0cm 5.4pt; height: 18px;" colspan="2">
                            <p id="receptor"><span style="font-size: 10.5pt; line-height: 110%; color: black;"><?php echo $NAME_emp;?></span></p>
                            </td>
                            </tr>
                            <tr style="height: 17.0pt;">
                            <td style="width: 293.625px; border-right: 1pt solid black; border-bottom: 1pt solid black; border-left: 1pt solid black; border-image: initial; border-top: none; padding: 0cm 5.4pt; height: 17px;" colspan="2">
                            <p><strong><span style="font-size: 10.5pt; line-height: 110%; color: black;">C&eacute;dula de ciudadan&iacute;a:</span></strong></p>
                            </td>
                            <td style="width: 289.625px; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 0cm 5.4pt; height: 17px;" colspan="2">
                            <p><span style="font-size: 10.5pt; line-height: 110%;"><?php echo $IDENT_emp;?></span></p>
                            </td>
                            </tr>
                            <tr style="height: 16.0pt;">
                            <td style="width: 293.625px; border-right: 1pt solid black; border-bottom: 1pt solid black; border-left: 1pt solid black; border-image: initial; border-top: none; padding: 0cm 5.4pt; height: 16px;" colspan="2">
                            <p style="text-align: left;"><strong><span style="font-size: 10.5pt; line-height: 110%; color: black;">Direcci&oacute;n del trabajador</span></strong></p>
                            </td>
                            <td style="width: 289.625px; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 0cm 5.4pt; height: 16px;" colspan="2">
                            <p><span style="font-size: 10.5pt; line-height: 110%;"><?php echo $ADDRESS_emp;?></span></p>
                            </td>
                            </tr>
                            <tr style="height: 19.0pt;">
                            <td style="width: 293.625px; border-right: 1pt solid black; border-bottom: 1pt solid black; border-left: 1pt solid black; border-image: initial; border-top: none; padding: 0cm 5.4pt; height: 19px;" colspan="2">
                            <p><strong><span style="font-size: 10.5pt; line-height: 110%; color: black;">Lugar, fecha de nacimiento</span></strong><strong><span style="font-size: 10.5pt; line-height: 110%; color: black;">:</span></strong></p>
                            </td>
                            <td style="width: 289.625px; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; padding: 0cm 5.4pt; height: 19px;" colspan="2">
                            <p><span style="font-size: 10.5pt; line-height: 110%;">&nbsp;</span></p>
                            </td>
                            </tr>
                            <tr style="height: 17.0pt;">
                            <td style="width: 598.625px; border-right: 1pt solid black; border-bottom: 1pt solid black; border-left: 1pt solid black; border-image: initial; border-top: none; background: black; padding: 0cm 5.4pt; height: 17px;" colspan="4">
                            <p style="text-align: center;"><span style="color: #ffffff;"><strong><span style="font-size: 10.5pt; line-height: 110%;">DATOS DEL CARGO LABORAL</span></strong></span></p>
                            </td>
                            </tr>
                            <tr style="height: 17.0pt;">
                            <td style="width: 293.625px; border-right: 1pt solid black; border-bottom: 1pt solid black; border-left: 1pt solid black; border-image: initial; border-top: none; background: white; padding: 0cm 5.4pt; height: 17px;" colspan="2">
                            <p><strong><span style="font-size: 10.5pt; line-height: 110%; color: black;">Oficio que desempe&ntilde;ar&aacute; el trabajador:</span></strong></p>
                            </td>
                            <td style="width: 289.625px; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; background: white; padding: 0cm 5.4pt; height: 17px;" colspan="2">
                            <p id="oficio"><?php echo $emp_oficio;?></p>
                            </td>
                            </tr>
                            <tr style="height: 19.0pt;">
                            <td style="width: 293.625px; border-right: 1pt solid black; border-bottom: 1pt solid black; border-left: 1pt solid black; border-image: initial; border-top: none; background: white; padding: 0cm 5.4pt; height: 19px;" colspan="2">
                            <p><strong><span style="font-size: 10.5pt; line-height: 110%; color: black;">Salario:</span></strong></p>
                            </td>
                            <td style="width: 289.625px; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; background: white; padding: 0cm 5.4pt; height: 19px;" colspan="2">
                            <p id="salario"><?php echo $emp_salario;?></p>
                            </td>
                            </tr>
                            <tr style="height: 17.0pt;">
                            <td style="width: 293.625px; border-right: 1pt solid black; border-bottom: 1pt solid black; border-left: 1pt solid black; border-image: initial; border-top: none; background: white; padding: 0cm 5.4pt; height: 17px;" colspan="2">
                            <p><strong><span style="font-size: 10.5pt; line-height: 110%;">Periodo de Pago:</span></strong></p>
                            </td>
                            <td style="width: 289.625px; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; background: white; padding: 0cm 5.4pt; height: 17px;" colspan="2">
                            <p id="periodo"><?php echo $emp_periodo;?></p>
                            </td>
                            </tr>
                            <tr style="height: 17.0pt;">
                            <td style="width: 293.625px; border-right: 1pt solid black; border-bottom: 1pt solid black; border-left: 1pt solid black; border-image: initial; border-top: none; background: white; padding: 0cm 5.4pt; height: 17px;" colspan="2">
                            <p><strong><span style="font-size: 10.5pt; line-height: 110%; color: black;">Fecha de iniciaci&oacute;n de labores:</span></strong></p>
                            </td>
                            <td style="width: 289.625px; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; background: white; padding: 0cm 5.4pt; height: 17px;" colspan="2">
                            <p id="inicio"><?php echo $emp_inicio;?></p>
                            </td>
                            </tr>
                            <tr style="height: 17.0pt;">
                            <td style="width: 293.625px; border-right: 1pt solid black; border-bottom: 1pt solid black; border-left: 1pt solid black; border-image: initial; border-top: none; background: white; padding: 0cm 5.4pt; height: 17px;" colspan="2">
                            <p><strong><span style="font-size: 10.5pt; line-height: 110%; color: black;">Fecha de terminaci&oacute;n de labores:</span></strong></p>
                            </td>
                            <td style="width: 289.625px; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; background: white; padding: 0cm 5.4pt; height: 17px;" colspan="2">
                            <p><span style="font-size: 10.5pt; line-height: 110%;">&nbsp;</span></p>
                            </td>
                            </tr>
                            <tr style="height: 16.0pt;">
                            <td style="width: 293.625px; border-right: 1pt solid black; border-bottom: 1pt solid black; border-left: 1pt solid black; border-image: initial; border-top: none; background: white; padding: 0cm 5.4pt; height: 16px;" colspan="2">
                            <p style="text-align: left;"><strong><span style="font-size: 10.5pt; line-height: 110%; color: black;">Lugar donde desempe&ntilde;ar&aacute; las labores:</span></strong></p>
                            </td>
                            <td style="width: 289.625px; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; background: white; padding: 0cm 5.4pt; height: 16px;" colspan="2">
                            <p id="lugar"><?php echo $emp_lugar;?></p>
                            </td>
                            </tr>
                            <tr style="height: 16.0pt;">
                            <td style="width: 293.625px; border-right: 1pt solid black; border-bottom: 1pt solid black; border-left: 1pt solid black; border-image: initial; border-top: none; background: white; padding: 0cm 5.4pt; height: 16px;" colspan="2">
                            <p><strong><span style="font-size: 10.5pt; line-height: 110%; color: black;">Ciudad donde se contrat&oacute;:&nbsp;&nbsp; </span></strong></p>
                            </td>
                            <td style="width: 289.625px; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; background: white; padding: 0cm 5.4pt; height: 16px;" colspan="2">
                            <p><span style="font-size: 10.5pt; line-height: 110%;">&nbsp;</span></p>
                            </td>
                            </tr>
                            <tr style="height: 16.0pt;">
                            <td style="width: 293.625px; border-right: 1pt solid black; border-bottom: 1pt solid black; border-left: 1pt solid black; border-image: initial; border-top: none; background: white; padding: 0cm 5.4pt; height: 16px;" colspan="2">
                            <p><strong><span style="font-size: 10.5pt; line-height: 110%; color: black;">Horario de Trabajo</span></strong></p>
                            </td>
                            <td style="width: 289.625px; border-top: none; border-left: none; border-bottom: 1pt solid black; border-right: 1pt solid black; background: white; padding: 0cm 5.4pt; height: 16px;" colspan="2">
                            <p id="horario"><?php echo $emp_horario;?></p>
                            </td>
                            </tr>
                            <tr style="height: 16.0pt;">
                            <td style="width: 598.625px; border-right: 1pt solid black; border-bottom: 1pt solid black; border-left: 1pt solid black; border-image: initial; border-top: none; background: white; padding: 0cm 5.4pt; height: 16px;" colspan="4">
                            <p style="text-align: justify;"><span style="font-size: 10.5pt; line-height: 110%;">Entre <strong>EL EMPLEADOR </strong>y<strong> EL TRABAJADOR </strong>se ha celebrado el presente contrato de trabajo, el cual se regir&aacute; por las siguientes cl&aacute;usulas y en lo no previsto en ellas por el Reglamento Interno de Trabajo de <strong>EL EMPLEADOR, </strong>el c&oacute;digo Sustantivo del Trabajo y dem&aacute;s normas concordantes, y teniendo en cuenta las siguientes:</span></p>
                            </td>
                            </tr>
                            <tr style="height: 16.0pt;">
                            <td style="width: 598.625px; border-right: 1pt solid black; border-bottom: 1pt solid black; border-left: 1pt solid black; border-image: initial; border-top: none; background: black; padding: 0cm 5.4pt; height: 16px;" colspan="4">
                            <p style="text-align: center;"><span style="color: #ffffff;"><strong><span style="font-size: 10.5pt; line-height: 110%;">DEFINICIONES</span></strong></span></p>
                            </td>
                            </tr>
                            <tr style="height: 16.0pt;">
                            <td style="width: 598.625px; border-right: 1pt solid black; border-bottom: 1pt solid black; border-left: 1pt solid black; border-image: initial; border-top: none; background: white; padding: 0cm 5.4pt; height: 16px;" colspan="4">
                            <p><span style="font-size: 10.5pt; line-height: 110%;">&nbsp;</span></p>
                            </td>
                            </tr>
                            <tr style="height: 16.0pt;">
                            <td style="width: 598.625px; border-right: 1pt solid black; border-bottom: 1pt solid black; border-left: 1pt solid black; border-image: initial; border-top: none; background: black; padding: 0cm 5.4pt; height: 16px;" colspan="4">
                            <p style="text-align: center;"><span style="color: #ffffff;"><strong><span style="font-size: 10.5pt; line-height: 110%;">TECNOLOG&Iacute;A BLOCKCHAIN EN EL CONTRATO</span></strong></span></p>
                            </td>
                            </tr>
                            <tr style="height: 16.0pt;">
                            <td style="width: 598.625px; border-right: 1pt solid black; border-bottom: 1pt solid black; border-left: 1pt solid black; border-image: initial; border-top: none; background: white; padding: 0cm 5.4pt; height: 16px;" colspan="4">
                            <p><span style="font-size: 10.5pt; line-height: 110%;">&nbsp;</span></p>
                            </td>
                            </tr>
                            <tr style="height: 16.0pt;">
                            <td style="width: 598.625px; border-right: 1pt solid black; border-bottom: 1pt solid black; border-left: 1pt solid black; border-image: initial; border-top: none; background: black; padding: 0cm 5.4pt; height: 16px;" colspan="4">
                            <p style="text-align: center;"><span style="color: #ffffff;"><strong><span style="font-size: 10.5pt; line-height: 110%;">CL&Aacute;USULAS</span></strong></span></p>
                            </td>
                            </tr>
                            <tr style="height: 16.0pt;">
                            <td style="width: 598.625px; border-right: 1pt solid black; border-bottom: 1pt solid black; border-left: 1pt solid black; border-image: initial; border-top: none; background: #d9d9d9; padding: 0cm 5.4pt; height: 16px;" colspan="4">
                            <p><strong><span style="font-size: 10.5pt; line-height: 110%;">PRIMERA: OBJETO DEL CONTRATO.</span></strong></p>
                            </td>
                            </tr>
                            <tr style="height: 16.0pt;">
                            <td style="width: 598.625px; border-right: 1pt solid black; border-bottom: 1pt solid black; border-left: 1pt solid black; border-image: initial; border-top: none; background: white; padding: 0cm 5.4pt; height: 16px;" colspan="4">
                            <p style="text-align: justify;"><strong><span style="font-size: 10.5pt; line-height: 110%;">EL TRABAJADOR</span></strong><span style="font-size: 10.5pt; line-height: 110%;"> se obliga a prestar sus servicios personales en forma exclusiva a <strong>EL EMPLEADOR</strong>, en el desempe&ntilde;o de las funciones propias del cargo suscrito en el encabezado de este contrato, en las labores anexas y complementarias del mismo, y las dem&aacute;s que <strong>EL EMPLEADOR </strong>le se&ntilde;ale, en las sedes donde sea asignado por &eacute;l o en cualquiera otra ciudad o dependencia de la misma, de acuerdo con las instrucciones y &oacute;rdenes que le impartan sus superiores.</span></p>
                            </td>
                            </tr>
                            <tr style="height: 16.0pt;">
                            <td style="width: 598.625px; border-right: 1pt solid black; border-bottom: 1pt solid black; border-left: 1pt solid black; border-image: initial; border-top: none; background: white; padding: 0cm 5.4pt; height: 16px;" colspan="4">
                            <p><strong><span style="font-size: 10.5pt; line-height: 110%;">PAR&Aacute;GRAFO.</span></strong></p>
                            </td>
                            </tr>
                            <tr style="height: 16.0pt;">
                            <td style="width: 598.625px; border-right: 1pt solid black; border-bottom: 1pt solid black; border-left: 1pt solid black; border-image: initial; border-top: none; background: white; padding: 0cm 5.4pt; height: 16px;" colspan="4">
                            <p style="text-align: justify;"><span style="font-size: 10.5pt; line-height: 110%;">Las partes podr&aacute;n convenir que el trabajo se preste en lugar distinto del inicialmente contratado, siempre que tales traslados no desmejoren las condiciones laborales o de remuneraci&oacute;n del <strong>TRABAJADOR</strong>, ni que impliquen perjuicios para &eacute;l. Los gastos que se originen con el traslado ser&aacute;n cubiertos por <strong>EL TRABAJADOR</strong>, de conformidad con el numeral 8&ordm; del art&iacute;culo 57 C.S.T. el trabajador se obliga a aceptar los cambios de oficio que decida <strong>EL EMPLEADOR</strong> dentro de su poder subordinante, siempre que se respeten las condiciones laborales del trabajador y o se le causen perjuicios. Todo ello sin que se afecte el honor, la dignidad y los derechos m&iacute;nimos del trabajador, de conformidad con el art&iacute;culo 23 del C.S.T.&nbsp; Modificado por el art&iacute;culo 1 de la Ley 50 de 1990.</span></p>
                            </td>
                            </tr>
                            <tr style="height: 16.0pt;">
                            <td style="width: 598.625px; border-right: 1pt solid black; border-bottom: 1pt solid black; border-left: 1pt solid black; border-image: initial; border-top: none; background: #d9d9d9; padding: 0cm 5.4pt; height: 16px;" colspan="4">
                            <p><strong><span style="font-size: 10.5pt; line-height: 110%;">SEGUNDA: DURACI&Oacute;N.</span></strong></p>
                            </td>
                            </tr>
                            <tr style="height: 16.0pt;">
                            <td style="width: 598.625px; border-right: 1pt solid black; border-bottom: 1pt solid black; border-left: 1pt solid black; border-image: initial; border-top: none; background: white; padding: 0cm 5.4pt; height: 16px;" colspan="4">
                            <p style="text-align: justify;"><span style="font-size: 10.5pt; line-height: 110%; layout-grid-mode: line;">La duraci&oacute;n del contrato ser&aacute; por un tiempo determinado, tal como se estableci&oacute; en el encabezado, mientras subsistan las causas que le dieron origen y la materia del trabajo. No obstante, EL EMPLEADOR podr&aacute; darlo por terminado sin lugar al pago de una indemnizaci&oacute;n, enviando un preaviso mediante el sistema al TRABAJADOR con m&iacute;nimo treinta (30) d&iacute;as de antelaci&oacute;n a la fecha de terminaci&oacute;n, si el preaviso es enviado por el sistema, y dentro de los tres (3) d&iacute;as comunes siguientes a la generaci&oacute;n de la huella criptogr&aacute;fica en la cadena de bloques, EL TRABAJADOR no ingresa al sistema o no revisa el correo electr&oacute;nico que genera el sistema a la direcci&oacute;n electr&oacute;nica registrada en el sistema, LAS PARTES acuerdan que operar&aacute; la &ldquo;NOTIFICACI&Oacute;N T&Aacute;CITA CRIPTOGR&Aacute;FICA&rdquo;, esto es, el sistema generar&aacute; una huella en la cadena de bloques y remitir&aacute; un correo electr&oacute;nico a cada una de LAS PARTES indicando las consecuencias generadas; En este &uacute;ltimo evento, los treinta (30) d&iacute;as que exige la ley para el c&aacute;lculo de los tiempos del preaviso se contar&aacute;n desde la generaci&oacute;n de huella criptogr&aacute;fica en la cadena de bloques.</span></p>
                            </td>
                            </tr>
                            <tr style="height: 16.0pt;">
                            <td style="width: 598.625px; border-right: 1pt solid black; border-bottom: 1pt solid black; border-left: 1pt solid black; border-image: initial; border-top: none; background: white; padding: 0cm 5.4pt; height: 16px;" colspan="4">
                            <p><span style="font-size: 10.5pt; line-height: 110%; layout-grid-mode: line;">PAR&Aacute;GRAFO PRIMERO. </span><span style="font-size: 10.5pt; line-height: 110%;">PERIODO DE PRUEBA.</span></p>
                            </td>
                            </tr>
                            <tr style="height: 16.0pt;">
                            <td style="width: 598.625px; border-right: 1pt solid black; border-bottom: 1pt solid black; border-left: 1pt solid black; border-image: initial; border-top: none; background: white; padding: 0cm 5.4pt; height: 16px;" colspan="4">
                            <p style="text-align: justify;"><span style="font-size: 10.5pt; line-height: 110%; layout-grid-mode: line;">Los primeros <strong><span style="background: yellow;">dos (2) meses</span></strong> </span><span style="font-size: 10.5pt; line-height: 110%; layout-grid-mode: line;">del presente contrato se consideran como per&iacute;odo de prueba y, por consiguiente, <strong>LA EMPRESA</strong> podr&aacute; terminar el contrato unilateralmente, en cualquier momento durante dicho per&iacute;odo, sin que se cause el pago de indemnizaci&oacute;n alguna. </span></p>
                            </td>
                            </tr>
                            <tr style="height: 16.0pt;">
                            <td style="width: 598.625px; border-right: 1pt solid black; border-bottom: 1pt solid black; border-left: 1pt solid black; border-image: initial; border-top: none; background: white; padding: 0cm 5.4pt; height: 16px;" colspan="4">
                            <p><span style="font-size: 10.5pt; line-height: 110%; layout-grid-mode: line;">PAR&Aacute;GRAFO SEGUNDO. TERMINACI&Oacute;N POR PARTE DEL TRABAJADOR.</span></p>
                            </td>
                            </tr>
                            <tr style="height: 16.0pt;">
                            <td style="width: 598.625px; border-right: 1pt solid black; border-bottom: 1pt solid black; border-left: 1pt solid black; border-image: initial; border-top: none; background: white; padding: 0cm 5.4pt; height: 16px;" colspan="4">
                            <p style="text-align: justify;"><strong><span style="font-size: 10.5pt; line-height: 110%; layout-grid-mode: line;">EL TRABAJADOR</span></strong><span style="font-size: 10.5pt; line-height: 110%; layout-grid-mode: line;"> podr&aacute; dar por terminado el contrato en cualquier momento, pero siempre manifest&aacute;ndolo por el sistema </span><span style="font-size: 10.5pt; line-height: 110%; layout-grid-mode: line;">al <strong>EL EMPLEADOR </strong>con treinta d&iacute;as calendario de anticipaci&oacute;n</span><span style="font-size: 10.5pt; line-height: 110%; layout-grid-mode: line;">. En el evento que se omita el preaviso antes mencionado <strong>EL TRABAJADOR</strong>, deber&aacute; al <strong>EMPLEADOR</strong> una indemnizaci&oacute;n equivalente a un mes y medio (45 d&iacute;as) de salario, deducible de su liquidaci&oacute;n, <strong>EL EMPLEADOR</strong>&nbsp; podr&aacute; hacer lo mismo en la forma indicada en la presente cl&aacute;usula.</span></p>
                            </td>
                            </tr>
                            <tr style="height: 16.0pt;">
                            <td style="width: 598.625px; border-right: 1pt solid black; border-bottom: 1pt solid black; border-left: 1pt solid black; border-image: initial; border-top: none; background: #d9d9d9; padding: 0cm 5.4pt; height: 16px;" colspan="4">
                            <p><strong><span style="font-size: 10.5pt; line-height: 110%;">TERCERA: REMUNERACI&Oacute;N.</span></strong></p>
                            </td>
                            </tr>
                            <tr style="height: 16.0pt;">
                            <td style="width: 598.625px; border-right: 1pt solid black; border-bottom: 1pt solid black; border-left: 1pt solid black; border-image: initial; border-top: none; background: white; padding: 0cm 5.4pt; height: 16px;" colspan="4">
                            <p style="text-align: justify;"><span style="font-size: 10.5pt; line-height: 110%;">Por la prestaci&oacute;n de sus servicios, <strong>EL EMPLEADOR</strong> se obliga a pagar a <strong>EL TRABAJADOR </strong>una remuneraci&oacute;n mensual denominada SALARIO de acuerdo con lo pactado en el encabezado de este documento y/o en sus anexos.&nbsp; Dentro de esta remuneraci&oacute;n mensual queda comprendido el pago de los d&iacute;as de descanso obligatorio.</span></p>
                            <p style="text-align: justify;"><span style="font-size: 10.5pt; line-height: 110%;">Acuerdan las partes que toda suma adicional que <strong>EL EMPLEADOR</strong> reconozca por mera liberalidad, ocasional o habitualmente, como prestaci&oacute;n extralegal, o participaci&oacute;n en utilidades, las cuales no retribuyen el trabajo, no ser&aacute; tenida en cuenta como constitutiva de salario en los t&eacute;rminos se&ntilde;alados en la ley.</span></p>
                            </td>
                            </tr>
                            <tr style="height: 16.0pt;">
                            <td style="width: 598.625px; border-right: 1pt solid black; border-bottom: 1pt solid black; border-left: 1pt solid black; border-image: initial; border-top: none; background: white; padding: 0cm 5.4pt; height: 16px;" colspan="4">
                            <p><strong><span style="font-size: 10.5pt; line-height: 110%;">PAR&Aacute;GRAFO PRIMERO. PRESTACIONES SOCIALES.</span></strong></p>
                            </td>
                            </tr>
                            <tr style="height: 16.0pt;">
                            <td style="width: 598.625px; border-right: 1pt solid black; border-bottom: 1pt solid black; border-left: 1pt solid black; border-image: initial; border-top: none; background: white; padding: 0cm 5.4pt; height: 16px;" colspan="4">
                            <p><span style="font-size: 10.5pt; line-height: 110%;">&nbsp;</span></p>
                            </td>
                            </tr>
                            <tr style="height: 16.0pt;">
                            <td style="width: 598.625px; border-right: 1pt solid black; border-bottom: 1pt solid black; border-left: 1pt solid black; border-image: initial; border-top: none; background: white; padding: 0cm 5.4pt; height: 16px;" colspan="4">
                            <p><strong><span style="font-size: 10.5pt; line-height: 110%;">PAR&Aacute;GRAFO SEGUNDO. AUTORIZACI&Oacute;N PARA DEDUCCIONES.</span></strong></p>
                            </td>
                            </tr>
                            <tr style="height: 16.0pt;">
                            <td style="width: 598.625px; border-right: 1pt solid black; border-bottom: 1pt solid black; border-left: 1pt solid black; border-image: initial; border-top: none; background: white; padding: 0cm 5.4pt; height: 16px;" colspan="4">
                            <p style="text-align: justify;"><strong><span style="font-size: 10.5pt; line-height: 110%;">EL TRABAJADOR</span></strong><span style="font-size: 10.5pt; line-height: 110%;"> autoriza a <strong>EL EMPLEADOR</strong> para que deduzca de su salario o de sus prestaciones sociales, cualquier suma que llegare a adeudarle por cualquier concepto. Igualmente, desde ahora autoriza a EL EMPLEADOR, a que, en caso de terminaci&oacute;n del contrato por cualquier causa, se deduzcan de su liquidaci&oacute;n de prestaciones sociales cualquier suma de dinero que llegare a adeudarle por cualquier concepto, especialmente el valor de las dotaciones que no sean restituidas a <strong>EL EMPLEADOR,</strong> el valor de los cursos que el trabajador realice siempre que este renuncie sin justa causa comprobada a EL EMPLEADOR durante los tres (3) primeros meses del contrato; y&nbsp; en general todas aquellas deducciones que autorice EL TRABAJADOR mediante el sistema.</span></p>
                            </td>
                            </tr>
                            <tr style="height: 16.0pt;">
                            <td style="width: 598.625px; border-right: 1pt solid black; border-bottom: 1pt solid black; border-left: 1pt solid black; border-image: initial; border-top: none; background: #d9d9d9; padding: 0cm 5.4pt; height: 16px;" colspan="4">
                            <p><strong><span style="font-size: 10.5pt; line-height: 110%;">CUARTA. JORNADA DE TRABAJO.</span></strong></p>
                            </td>
                            </tr>
                            <tr style="height: 16.0pt;">
                            <td style="width: 598.625px; border-right: 1pt solid black; border-bottom: 1pt solid black; border-left: 1pt solid black; border-image: initial; border-top: none; background: white; padding: 0cm 5.4pt; height: 16px;" colspan="4">
                            <p style="text-align: justify;"><strong><span style="font-size: 10.5pt; line-height: 110%;">EL TRABAJADOR</span></strong> <span style="font-size: 10.5pt; line-height: 110%;">se obliga a laborar la jornada m&aacute;xima legal en los turnos y dentro de las horas se&ntilde;aladas por el <strong>EMPLEADOR</strong> en el encabezado del presente contrato, pudiendo hacer &eacute;ste ajustes o cambios de horarios cuando lo estime conveniente pero siempre registr&aacute;ndolos en el sistema. Por el acuerdo expreso mediante el sistema, &nbsp;las partes podr&aacute;n repartirse las horas de la jornada ordinaria en la forma prevista en el art&iacute;culo 164 del C.S.T. modificado por el art&iacute;culo 23 de la Ley 50 de 1990, teniendo en cuenta que los tiempos de descanso entre las secciones de la jornada no se computan dentro de la misma, seg&uacute;n el art&iacute;culo 167 ib&iacute;dem. As&iacute; mismo las partes podr&aacute;n acordar que la jornada semanal de cuarenta y ocho (48) horas se realice mediante jornadas diarias flexibles de trabajo, distribuidas en m&aacute;ximo seis (6) d&iacute;as a la semana, con un&nbsp; d&iacute;a de descanso obligatorio, que podr&aacute; coincidir con el domingo. En este, el n&uacute;mero de horas de trabajo diario podr&aacute; repartirse de manera variable durante la respectiva semana y podr&aacute; ser de m&iacute;nimo cuatro horas continuas y hasta diez (10) horas diarias sin lugar a ning&uacute;n recargo por trabajo suplementario, cuando el n&uacute;mero de horas de trabajo no exceda el promedio de cuarenta y ocho (48) horas semanales dentro de la jornada ordinaria de 6 am a 10&nbsp;pm, en los turnos y dentro de las horas se&ntilde;aladas por EL EMPLEADOR<strong>.</strong></span></p>
                            </td>
                            </tr>
                            <tr style="height: 16.0pt;">
                            <td style="width: 598.625px; border-right: 1pt solid black; border-bottom: 1pt solid black; border-left: 1pt solid black; border-image: initial; border-top: none; background: #d9d9d9; padding: 0cm 5.4pt; height: 16px;" colspan="4">
                            <p><strong><span style="font-size: 10.5pt; line-height: 110%;">QUINTA. DESCANSO DOMINICAL REMUNERADO.</span></strong></p>
                            </td>
                            </tr>
                            <tr style="height: 16.0pt;">
                            <td style="width: 598.625px; border-right: 1pt solid black; border-bottom: 1pt solid black; border-left: 1pt solid black; border-image: initial; border-top: none; background: white; padding: 0cm 5.4pt; height: 16px;" colspan="4">
                            <p style="text-align: justify;"><strong><span style="font-size: 10.5pt; line-height: 110%;">EL EMPLEADOR</span></strong><span style="font-size: 10.5pt; line-height: 110%;"> se obliga a dar descanso dominical remunerado al <strong>TRABAJADOR</strong>, el cual se encuentra incluido dentro del salario ordinario. Todo trabajo suplementario o en horas extras y todo trabajo en d&iacute;a domingo o festivo en los que legalmente debe concederse descanso, se remunerar&aacute; conforme a la ley, as&iacute; como los correspondientes recargos nocturnos. Para el reconocimiento y pago del trabajo suplementario, dominical o festivo, <strong>EL EMPLEADOR</strong> o su representante deben autorizarlo previamente por el sistema. </span></p>
                            </td>
                            </tr>
                            <tr style="height: 16.0pt;">
                            <td style="width: 598.625px; border-right: 1pt solid black; border-bottom: 1pt solid black; border-left: 1pt solid black; border-image: initial; border-top: none; background: #d9d9d9; padding: 0cm 5.4pt; height: 16px;" colspan="4">
                            <p><strong><span style="font-size: 10.5pt; line-height: 110%;">SEXTA. OBLIGACIONES GENERALES DEL TRABAJADOR.</span></strong></p>
                            </td>
                            </tr>
                            <tr style="height: 16.0pt;">
                            <td style="width: 598.625px; border-right: 1pt solid black; border-bottom: 1pt solid black; border-left: 1pt solid black; border-image: initial; border-top: none; background: white; padding: 0cm 5.4pt; height: 16px;" colspan="4">
                            <p style="text-align: justify;"><strong><span style="font-size: 10.5pt; line-height: 110%;">EL EMPLEADOR</span></strong><span style="font-size: 10.5pt; line-height: 110%;"> contrata los servicios personales del<strong> TRABAJADOR</strong> y &eacute;ste se obliga de forma general:</span></p>
                            <p style="margin-left: 18pt; text-indent: -18pt; border: none; text-align: justify;"><span style="font-size: 10.5pt; line-height: 110%; color: black;">a)<span style="font: 7.0pt 'Times New Roman';">&nbsp;&nbsp; </span></span><span style="font-size: 10.5pt; line-height: 110%; color: black;">A poner al servicio de <strong>EL EMPLEADOR</strong> toda su capacidad normal de trabajo, en forma exclusiva en el desempe&ntilde;o de las funciones propias del oficio mencionado y en las labores anexas y complementarias del mismo, de conformidad con las &oacute;rdenes e instrucciones que le imparta <strong>EL EMPLEADOR</strong> o sus representantes.</span></p>
                            <p style="margin-left: 18pt; text-indent: -18pt; border: none; text-align: justify;"><span style="font-size: 10.5pt; line-height: 110%; color: black;">b)<span style="font: 7.0pt 'Times New Roman';">&nbsp;&nbsp; </span></span><span style="font-size: 10.5pt; line-height: 110%; color: black;">Prestar sus servicios con fidelidad y entrega, cumpliendo debidamente con todas las obligaciones derivadas del presente contrato. </span></p>
                            <p style="margin-left: 18pt; text-indent: -18pt; border: none; text-align: justify;"><span style="font-size: 10.5pt; line-height: 110%; color: black;">c)<span style="font: 7.0pt 'Times New Roman';">&nbsp;&nbsp;&nbsp; </span></span><strong><span style="font-size: 10.5pt; line-height: 110%; color: black;">Exclusividad.</span></strong><span style="font-size: 10.5pt; line-height: 110%; color: black;"> Durante la vigencia de este contrato, <strong>EL TRABAJADOR</strong> no podr&aacute; prestar directa ni indirectamente servicios laborales a otros empleadores en el horario en que presta sus servicios al <strong>EMPLEADOR</strong>. </span></p>
                            <p style="margin-left: 18pt; text-indent: -18pt; line-height: 117%; border: none; text-align: justify;"><span style="font-size: 10.5pt; line-height: 117%; color: black;">d)<span style="font: 7.0pt 'Times New Roman';">&nbsp;&nbsp; </span></span><strong><span style="font-size: 10.5pt; line-height: 117%; color: black;">Confidencialidad</span></strong><span style="font-size: 10.5pt; line-height: 117%; color: black;">. EL TRABAJADOR utilizar&aacute; toda la informaci&oacute;n recibida con ocasi&oacute;n del presente instrumento exclusivamente para el desarrollo de las obligaciones adquiridas por las partes en desarrollo del contrato de trabajo, como estrictamente confidencial, inclusive ante las Autoridades P&uacute;blicas, y su divulgaci&oacute;n solo podr&aacute; efectuarse previo consentimiento escrito de<strong> EL EMPLEADOR.</strong></span></p>
                            </td>
                            </tr>
                            <tr style="height: 16.0pt;">
                            <td style="width: 598.625px; border-right: 1pt solid black; border-bottom: 1pt solid black; border-left: 1pt solid black; border-image: initial; border-top: none; background: white; padding: 0cm 5.4pt; height: 16px;" colspan="4">
                            <p><span style="font-size: 10.5pt; line-height: 110%;">PAR&Aacute;GRAFO PRIMERO. OBLIGACIONES ESPECIALES DEL TRABAJADOR</span></p>
                            </td>
                            </tr>
                            <tr style="height: 16.0pt;">
                            <td style="width: 598.625px; border-right: 1pt solid black; border-bottom: 1pt solid black; border-left: 1pt solid black; border-image: initial; border-top: none; background: white; padding: 0cm 5.4pt; height: 16px;" colspan="4">
                            <p style="text-align: justify;"><span style="font-size: 10.5pt; line-height: 110%;">De forma especial el trabajador se obliga a desempe&ntilde;ar las funciones que se relacionan a continuaci&oacute;n:</span></p>
                            <p style="margin-left: 18pt; text-indent: -18pt; border: none; text-align: justify;"><span style="font-size: 10.5pt; line-height: 110%; color: black;">a)<span style="font: 7.0pt 'Times New Roman';">&nbsp;&nbsp; </span></span><span style="font-size: 10.5pt; line-height: 110%; color: black;">Realizar las funciones que se le asignen con la diligencia y el cuidado que las personas emplean ordinariamente en sus propios negocios; </span></p>
                            <p style="margin-left: 18pt; text-indent: -18pt; border: none; text-align: justify;"><span style="font-size: 10.5pt; line-height: 110%; color: black;">b)<span style="font: 7.0pt 'Times New Roman';">&nbsp;&nbsp; </span></span><span style="font-size: 10.5pt; line-height: 110%; color: black;">Manejar escrupulosamente los valores, bienes y documentos que se le encomienden, transitoria o permanentemente, por raz&oacute;n de su cargo y rendir cuenta rigurosa de ellos a <strong>EL EMPLEADOR</strong>, en las condiciones y tiempo que se le indiquen; </span></p>
                            <p style="margin-left: 18pt; text-indent: -18pt; border: none; text-align: justify;"><span style="font-size: 10.5pt; line-height: 110%; color: black;">c)<span style="font: 7.0pt 'Times New Roman';">&nbsp;&nbsp;&nbsp; </span></span><span style="font-size: 10.5pt; line-height: 110%; color: black;">Ejecutar por s&iacute; mismo las funciones asignadas y seguir cuidadosamente las instrucciones que le sean dadas por EL EMPLEADOR respecto al desarrollo de su labor; </span></p>
                            <p style="margin-left: 18pt; text-indent: -18pt; border: none; text-align: justify;"><span style="font-size: 10.5pt; line-height: 110%; color: black;">d)<span style="font: 7.0pt 'Times New Roman';">&nbsp;&nbsp; </span></span><span style="font-size: 10.5pt; line-height: 110%; color: black;">No divulgar los aspectos m&eacute;dicos, cl&iacute;nicos, familiares, financieros, ni la correspondencia, documentos y similares de EL EMPLEADOR, es decir, guardar completa reserva sobre todos los datos que lleguen a su conocimiento en el ejercicio de su profesi&oacute;n y cuya divulgaci&oacute;n pudiera causar perjuicios a EL EMPLEADOR; </span></p>
                            <p style="margin-left: 18pt; text-indent: -18pt; border: none; text-align: justify;"><span style="font-size: 10.5pt; line-height: 110%; color: black;">e)<span style="font: 7.0pt 'Times New Roman';">&nbsp;&nbsp;&nbsp; </span></span><span style="font-size: 10.5pt; line-height: 110%; color: black;">Conservar y restituir en buen estado, salvo el natural deterioro causado por el servicio, los enseres, instrumentos de trabajo y dem&aacute;s bienes que EL EMPLEADOR deposite a su cuidado; </span></p>
                            <p style="margin-left: 18pt; text-indent: -18pt; border: none; text-align: justify;"><span style="font-size: 10.5pt; line-height: 110%; color: black;">f)<span style="font: 7.0pt 'Times New Roman';">&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span style="font-size: 10.5pt; line-height: 110%; color: black;">Indemnizar a EL EMPLEADOR por la p&eacute;rdida de los objetos y valores que se le hayan confiado permanente o transitoriamente, salvo cuando aquella ocurra por fuerza mayor o caso fortuito; </span></p>
                            <p style="margin-left: 18pt; text-indent: -18pt; border: none; text-align: justify;"><span style="font-size: 10.5pt; line-height: 110%; color: black;">g)<span style="font: 7.0pt 'Times New Roman';">&nbsp;&nbsp; </span></span><span style="font-size: 10.5pt; line-height: 110%; color: black;">EL TRABAJADOR se compromete a usar responsablemente todos los equipos e implementos de trabajo asignados, que en raz&oacute;n de su cargo le han sido entregados e instalados en su lugar de trabajo, a cuidar por Su conservaci&oacute;n y custodia y a entregarlos debidamente relacionados en el momento en que sea trasladado o se desvincule de EL EMPLEADOR, dado lugar a responder econ&oacute;micamente por los mismos cuando dichas condiciones no se cumplen; </span></p>
                            <p style="margin-left: 18pt; text-indent: -18pt; border: none; text-align: justify;"><span style="font-size: 10.5pt; line-height: 110%; color: black;">h)<span style="font: 7.0pt 'Times New Roman';">&nbsp;&nbsp;&nbsp; </span></span><span style="font-size: 10.5pt; line-height: 110%; color: black;">A rendir oportunamente los informes y relaciones que&nbsp; EL EMPLEADOR le&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; solicite; </span></p>
                            <p style="margin-left: 18pt; text-indent: -18pt; border: none; text-align: justify;"><span style="font-size: 10.5pt; line-height: 110%; color: black;">i)<span style="font: 7.0pt 'Times New Roman';">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span style="font-size: 10.5pt; line-height: 110%; color: black;">A hacer uso de su horario de trabajo en forma puntual y exclusivamente para el cumplimiento de las labores contratadas con EL EMPLEADOR; </span></p>
                            <p style="margin-left: 18pt; text-indent: -18pt; border: none; text-align: justify;"><span style="font-size: 10.5pt; line-height: 110%; color: black;">j)<span style="font: 7.0pt 'Times New Roman';">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span style="font-size: 10.5pt; line-height: 110%; color: black;">EL TRABAJADOR tiene conocimiento de la campa&ntilde;a de prevenci&oacute;n que se ha&nbsp; &nbsp; &nbsp; &nbsp; desarrollado dentro de EL EMPLEADOR para evitar el uso indebido del software. Entendi&eacute;ndose que el uso indebido del mismo dar&aacute; lugar a las sanciones laborales establecidas en las normas que regulan la relaci&oacute;n laboral. Se entiende por uso indebido el prestar el software a terceras personas para que lo copien, compartir el software instalado en la estaci&oacute;n con otras estaciones las cuales no tienen licencia ese software no autorizado, copiar software de otras estaciones, u otras conductas similares; </span></p>
                            <p style="margin-left: 18pt; text-indent: -18pt; border: none; text-align: justify;"><span style="font-size: 10.5pt; line-height: 110%; color: black;">k)<span style="font: 7.0pt 'Times New Roman';">&nbsp;&nbsp;&nbsp; </span></span><span style="font-size: 10.5pt; line-height: 110%; color: black;">EL TRABAJADOR se compromete a no cambiar las configuraciones de hardware o software o instalar dispositivos o programas diferentes a los asignados por EL EMPLEADOR, a no ser que est&eacute; autorizado por escrito por parte de EL EMPLEADOR; </span></p>
                            <p style="margin-left: 18pt; text-indent: -18pt; border: none; text-align: justify;"><span style="font-size: 10.5pt; line-height: 110%; color: black;">l)<span style="font: 7.0pt 'Times New Roman';">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span style="font-size: 10.5pt; line-height: 110%; color: black;">EL TRABAJADOR se compromete a no usar tanto el Hardware como el Software en labores diferentes a las de EL EMPLEADOR; </span></p>
                            <p style="margin-left: 18pt; text-indent: -18pt; border: none; text-align: justify;"><span style="font-size: 10.5pt; line-height: 110%; color: black;">m)<span style="font: 7.0pt 'Times New Roman';">&nbsp; </span></span><span style="font-size: 10.5pt; line-height: 110%; color: black;">No suministrar informaci&oacute;n errada, incompleta o falsa a EL EMPLEADOR.</span></p>
                            <p style="margin-left: 18pt; text-indent: -18pt; border: none; text-align: justify;"><span style="font-size: 10.5pt; line-height: 110%; color: black;">n)<span style="font: 7.0pt 'Times New Roman';">&nbsp;&nbsp;&nbsp; </span></span><span style="font-size: 10.5pt; line-height: 110%; color: black;">Las dem&aacute;s obligaciones que le corresponden de acuerdo con la Ley y en especial la obligaci&oacute;n de no realizar las siguientes prohibiciones:&nbsp;&nbsp;&nbsp; </span></p>
                            <p style="margin-left: 36pt; text-indent: -18pt; border: none; text-align: justify;"><span style="font-size: 10.5pt; line-height: 110%; color: black;">1.<span style="font: 7.0pt 'Times New Roman';"> &nbsp;&nbsp; </span></span><span style="font-size: 10.5pt; line-height: 110%; color: black;">Sustraer del lugar de trabajo o instalaciones de EL EMPLEADOR en general o&nbsp; de un tercero, los &uacute;tiles de trabajo, las materias primas o productos elaborados sin permiso de EL EMPLEADOR, ya sean en beneficio propio o de un tercero.</span></p>
                            <p style="margin-left: 36pt; text-indent: -18pt; border: none; text-align: justify;"><span style="font-size: 10.5pt; line-height: 110%; color: black;">2.<span style="font: 7.0pt 'Times New Roman';">&nbsp;&nbsp;&nbsp; </span></span><span style="font-size: 10.5pt; line-height: 110%; color: black;">Presentarse al trabajo en estado de embriaguez o bajo la reciente influencia de narc&oacute;ticos o de drogas enervantes o con reciente posterioridad a haber ingerido cualquiera de las anteriores sustancias, las cuales han sido nombradas de manera enunciativa. </span></p>
                            <p style="margin-left: 36.0pt; text-indent: -18.0pt; tab-stops: 18.0pt; border: none;"><span style="font-size: 10.5pt; line-height: 110%; color: black;">3.<span style="font: 7.0pt 'Times New Roman';">&nbsp;&nbsp;&nbsp; </span></span><span style="font-size: 10.5pt; line-height: 110%; color: black;">Conservar armas de cualquier clase en el sitio de trabajo.</span></p>
                            <p style="margin-left: 36.0pt; text-indent: -18.0pt; tab-stops: 18.0pt; border: none;"><span style="font-size: 10.5pt; line-height: 110%; color: black;">4.<span style="font: 7.0pt 'Times New Roman';">&nbsp;&nbsp;&nbsp; </span></span><span style="font-size: 10.5pt; line-height: 110%; color: black;">Faltar a una jornada completa o d&iacute;a de trabajo sin justa causa de impedimento o sin permiso de EL EMPLEADOR, aun por la primera vez.</span></p>
                            <p style="margin-left: 36pt; text-indent: -18pt; border: none; text-align: justify;"><span style="font-size: 10.5pt; line-height: 110%; color: black;">5.<span style="font: 7.0pt 'Times New Roman';">&nbsp;&nbsp;&nbsp; </span></span><span style="font-size: 10.5pt; line-height: 110%; color: black;">Usar los &uacute;tiles o herramientas suministradas por EL EMPLEADOR en objetivos distintos del trabajo contratado (CST, art&iacute;culo 60), en beneficio propio o de un tercero.</span></p>
                            <p style="margin-left: 36pt; text-indent: -18pt; border: none; text-align: justify;"><span style="font-size: 10.5pt; line-height: 110%; color: black;">6.<span style="font: 7.0pt 'Times New Roman';">&nbsp;&nbsp;&nbsp; </span></span><span style="font-size: 10.5pt; line-height: 110%; color: black;">Realizar cambios de turnos u horarios de trabajo, sin expresa autorizaci&oacute;n del respectivo superior.</span></p>
                            <p style="margin-left: 36pt; text-indent: -18pt; border: none; text-align: justify;"><span style="font-size: 10.5pt; line-height: 110%; color: black;">7.<span style="font: 7.0pt 'Times New Roman';">&nbsp;&nbsp;&nbsp; </span></span><span style="font-size: 10.5pt; line-height: 110%; color: black;">El retardo en la hora de entrada al trabajo cuando cause perjuicios graves a EL EMPLEADOR a&uacute;n por primera vez.</span></p>
                            <p style="margin-left: 36pt; text-indent: -18pt; border: none; text-align: justify;"><span style="font-size: 10.5pt; line-height: 110%; color: black;">8.<span style="font: 7.0pt 'Times New Roman';">&nbsp;&nbsp;&nbsp; </span></span><span style="font-size: 10.5pt; line-height: 110%; color: black;">Dormir en las dependencias de EL EMPLEADOR, ya sea en horas de trabajo o no, siempre y cuando no sea por instrucci&oacute;n previa y por escrito por parte de EL EMPLEADOR.</span></p>
                            <p style="margin-left: 36pt; text-indent: -18pt; border: none; text-align: justify;"><span style="font-size: 10.5pt; line-height: 110%; color: black;">9.<span style="font: 7.0pt 'Times New Roman';">&nbsp;&nbsp;&nbsp; </span></span><span style="font-size: 10.5pt; line-height: 110%; color: black;">Consumir durante el trabajo, en horas laborales o en las instalaciones de EL EMPLEADOR, de manera enunciativa, uno o m&aacute;s de los siguientes productos, independiente de la cantidad consumida: bebidas embriagantes, narc&oacute;ticos, drogas enervantes, marihuana, bazuco, coca&iacute;na, &eacute;xtasis, pepas, etc.</span></p>
                            <p style="margin-left: 36pt; text-indent: -18pt; border: none; text-align: justify;"><span style="font-size: 10.5pt; line-height: 110%; color: black;">10.<span style="font: 7.0pt 'Times New Roman';">&nbsp; </span></span><span style="font-size: 10.5pt; line-height: 110%; color: black;">Utilizar los sitios o elementos de trabajo para actividades contrarias a la&nbsp; &nbsp; &nbsp; &nbsp;moral o las buenas costumbres.</span></p>
                            <p style="margin-left: 36pt; text-indent: -18pt; border: none; text-align: justify;"><span style="font-size: 10.5pt; line-height: 110%; color: black;">11.<span style="font: 7.0pt 'Times New Roman';">&nbsp; </span></span><span style="font-size: 10.5pt; line-height: 110%; color: black;">Poner en peligro de p&eacute;rdida total o aun da&ntilde;o parcial o proporcionar maltrato, por actos u omisiones, a la seguridad de la paciente o de las personas vinculadas con EL EMPLEADOR y de los bienes propiedad de &eacute;sta o de terceros relacionados con ella o confiados a la misma.</span></p>
                            <p style="margin-left: 36pt; text-indent: -18pt; border: none; text-align: justify;"><span style="font-size: 10.5pt; line-height: 110%; color: black;">12.<span style="font: 7.0pt 'Times New Roman';">&nbsp; </span></span><span style="font-size: 10.5pt; line-height: 110%; color: black;">Distraer, apropiarse o aprovecharse aun temporalmente en forma il&iacute;cita, oculta o clandestina, de dineros valores u otros bienes que por raz&oacute;n de su oficio en EL EMPLEADOR tenga que manejar, lleguen a sus manos, o sean elementos de trabajo.</span></p>
                            <p style="margin-left: 36pt; text-indent: -18pt; border: none; text-align: justify;"><span style="font-size: 10.5pt; line-height: 110%; color: black;">13.<span style="font: 7.0pt 'Times New Roman';">&nbsp; </span></span><span style="font-size: 10.5pt; line-height: 110%; color: black;">Permitir voluntariamente, por acci&oacute;n u omisi&oacute;n o por culpa que personas distintas a las autorizadas por EL EMPLEADOR, lleguen a tener conocimiento de datos o hechos de conocimiento privativo de EL EMPLEADOR o de un funcionario del mismo.</span></p>
                            <p style="margin-left: 36pt; text-indent: -18pt; border: none; text-align: justify;"><span style="font-size: 10.5pt; line-height: 110%; color: black;">14.<span style="font: 7.0pt 'Times New Roman';">&nbsp; </span></span><span style="font-size: 10.5pt; line-height: 110%; color: black;">Comentar asuntos confidenciales o de naturaleza reservada de EL EMPLEADOR o de su cargo, conocidos por raz&oacute;n de su trabajo o con relaci&oacute;n al mismo.</span></p>
                            <p style="margin-left: 36pt; text-indent: -18pt; border: none; text-align: justify;"><span style="font-size: 10.5pt; line-height: 110%; color: black;">15.<span style="font: 7.0pt 'Times New Roman';">&nbsp; </span></span><span style="font-size: 10.5pt; line-height: 110%; color: black;">Todo acto de deslealtad para con la paciente, EL EMPLEADOR, los propietarios de EL EMPLEADOR, as&iacute; como realizar actos que, por acci&oacute;n u omisi&oacute;n, lo (s) atemorice (n), coaccione (n), o intimide (n) o faltarle al respeto con palabras insultantes.</span></p>
                            <p style="margin-left: 36pt; text-indent: -18pt; border: none; text-align: justify;"><span style="font-size: 10.5pt; line-height: 110%; color: black;">16.<span style="font: 7.0pt 'Times New Roman';">&nbsp; </span></span><span style="font-size: 10.5pt; line-height: 110%; color: black;">Cambiar el horario de trabajo o la jornada a realizar o el turno, sin la previa autorizaci&oacute;n de EL EMPLEADOR.</span></p>
                            <p style="margin-left: 36pt; text-indent: -18pt; border: none; text-align: justify;"><span style="font-size: 10.5pt; line-height: 110%; color: black;">17.<span style="font: 7.0pt 'Times New Roman';">&nbsp; </span></span><span style="font-size: 10.5pt; line-height: 110%; color: black;">Abstenerse de firmar documentos que por el ejercicio de las funciones que le son propias, deba firmar. </span></p>
                            <p style="margin-left: 36.0pt; text-indent: -18.0pt; tab-stops: 18.0pt; border: none;"><span style="font-size: 10.5pt; line-height: 110%; color: black;">18.<span style="font: 7.0pt 'Times New Roman';">&nbsp; </span></span><span style="font-size: 10.5pt; line-height: 110%; color: black;">Suministrar a extra&ntilde;os, sin autorizaci&oacute;n expresa de las directivas de EL EMPLEADOR, datos relacionados con la familia o la paciente.</span></p>
                            <p style="margin-left: 36pt; text-indent: -18pt; border: none; text-align: justify;"><span style="font-size: 10.5pt; line-height: 110%; color: black;">19.<span style="font: 7.0pt 'Times New Roman';">&nbsp; </span></span><span style="font-size: 10.5pt; line-height: 110%; color: black;">Manipular y utilizar de manera reiterada, dentro de la jornada de trabajo, aparatos electr&oacute;nicos y dispositivos m&oacute;viles de comunicaci&oacute;n, audio, video, etc., para actividades personales o ajenas al desarrollo de sus funciones. </span></p>
                            <p style="margin-left: 36pt; text-indent: -18pt; border: none; text-align: justify;"><span style="font-size: 10.5pt; line-height: 110%; color: black;">20.<span style="font: 7.0pt 'Times New Roman';">&nbsp; </span></span><span style="font-size: 10.5pt; line-height: 110%; color: black;">Fumar dentro del hogar, veh&iacute;culos, instalaciones del EMPLEADOR y otros lugares que tengan relaci&oacute;n directa con EL EMPLEADOR.</span></p>
                            <p style="text-align: justify;"><span style="font-size: 10.5pt; line-height: 110%;">El incumplimiento de estas obligaciones o la realizaci&oacute;n de las conductas prohibidas por <strong>EL TRABAJADOR</strong> se tendr&aacute; como falta grave, y dar&aacute; lugar a la terminaci&oacute;n unilateral del contrato de trabajo por parte de <strong>EL EMPLEADOR </strong>con justa causa, y por lo tanto sin lugar al pago de indemnizaci&oacute;n, todo acorde con la normatividad laboral vigente y el Reglamento Interno de Trabajo.</span></p>
                            </td>
                            </tr>
                            <tr style="height: 16.0pt;">
                            <td style="width: 598.625px; border-right: 1pt solid black; border-bottom: 1pt solid black; border-left: 1pt solid black; border-image: initial; border-top: none; background: white; padding: 0cm 5.4pt; height: 16px;" colspan="4">
                            <p><span style="font-size: 10.5pt; line-height: 110%;">PAR&Aacute;GRAFO SEGUNDO. OBLIGACIONES ESPEC&Iacute;FICAS DEL TRABAJADOR</span></p>
                            </td>
                            </tr>
                            <tr style="height: 16.0pt;">
                            <td style="width: 598.625px; border-right: 1pt solid black; border-bottom: 1pt solid black; border-left: 1pt solid black; border-image: initial; border-top: none; background: white; padding: 0cm 5.4pt; height: 16px;" colspan="4">
                            <p><span style="font-size: 10.5pt; line-height: 110%;">Adicionalmente <strong>EL TRABAJADOR</strong> se obliga de forma espec&iacute;fica a: </span></p>
                            <p><strong><span style="font-size: 10.5pt; line-height: 110%;">&nbsp;</span></strong></p>
                            </td>
                            </tr>
                            <tr style="height: 16.0pt;">
                            <td style="width: 598.625px; border-right: 1pt solid black; border-bottom: 1pt solid black; border-left: 1pt solid black; border-image: initial; border-top: none; background: #d9d9d9; padding: 0cm 5.4pt; height: 16px;" colspan="4">
                            <p><strong><span style="font-size: 10.5pt; line-height: 110%;">S&Eacute;PTIMA. OBLIGACIONES DE EL EMPLEADOR.</span></strong></p>
                            </td>
                            </tr>
                            <tr style="height: 16.0pt;">
                            <td style="width: 598.625px; border-right: 1pt solid black; border-bottom: 1pt solid black; border-left: 1pt solid black; border-image: initial; border-top: none; background: white; padding: 0cm 5.4pt; height: 16px;" colspan="4">
                            <p><span style="font-size: 10.5pt; line-height: 110%;">Son obligaciones del <strong>EL EMPLEADOR:</strong></span></p>
                            <p style="margin-left: 18pt; text-indent: -18pt; border: none; text-align: justify;"><span style="font-size: 10.5pt; line-height: 110%; color: black;">a)<span style="font: 7.0pt 'Times New Roman';">&nbsp;&nbsp; </span></span><span style="font-size: 10.5pt; line-height: 110%; color: black;">Proporcionar a <strong>EL TRABAJADOR</strong> los elementos y &uacute;tiles adecuados al trabajo, de tal forma que se garantice la eficacia del servicio, su salud y su seguridad personal; </span></p>
                            <p style="margin-left: 18pt; text-indent: -18pt; border: none; text-align: justify;"><span style="font-size: 10.5pt; line-height: 110%; color: black;">b)<span style="font: 7.0pt 'Times New Roman';">&nbsp;&nbsp; </span></span><span style="font-size: 10.5pt; line-height: 110%; color: black;">Afiliar a <strong>EL TRABAJADOR</strong> al sistema general de seguridad social, tanto en salud, como al sistema de pensiones, as&iacute; como al sistema de riesgos laborales con base en los riesgos reales de la actividad realizada por <strong>EL TRABAJADOR.</strong></span></p>
                            <p style="margin-left: 18pt; text-indent: -18pt; border: none; text-align: justify;"><span style="font-size: 10.5pt; line-height: 110%; color: black;">c)<span style="font: 7.0pt 'Times New Roman';">&nbsp;&nbsp;&nbsp; </span></span><span style="font-size: 10.5pt; line-height: 110%; color: black;">Tratar correctamente a <strong>EL TRABAJADOR</strong>, no lesionar su dignidad y respetar sus creencias religiosas y opiniones pol&iacute;ticas; </span></p>
                            <p style="margin-left: 18pt; text-indent: -18pt; border: none; text-align: justify;"><span style="font-size: 10.5pt; line-height: 110%; color: black;">d)<span style="font: 7.0pt 'Times New Roman';">&nbsp;&nbsp; </span></span><span style="font-size: 10.5pt; line-height: 110%; color: black;">Procurar la armon&iacute;a del personal de <strong>EL EMPLEADOR</strong> y velar por su mejoramiento colectivo; </span></p>
                            <p style="margin-left: 18pt; text-indent: -18pt; border: none; text-align: justify;"><span style="font-size: 10.5pt; line-height: 110%; color: black;">e)<span style="font: 7.0pt 'Times New Roman';">&nbsp;&nbsp;&nbsp; </span></span><span style="font-size: 10.5pt; line-height: 110%; color: black;">Pagarle la remuneraci&oacute;n acordada en el tiempo, lugar y modo estipulados; </span></p>
                            <p style="margin-left: 18pt; text-indent: -18pt; border: none; text-align: justify;"><span style="font-size: 10.5pt; line-height: 110%; color: black;">f)<span style="font: 7.0pt 'Times New Roman';">&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span style="font-size: 10.5pt; line-height: 110%; color: black;">Conceder a <strong>EL TRABAJADOR</strong> el tiempo necesario para el cumplimiento de sus deberes ciudadanos y el desempe&ntilde;o de cargos oficiales transitorios o de forzosa aceptaci&oacute;n; </span></p>
                            <p style="margin-left: 18pt; text-indent: -18pt; border: none; text-align: justify;"><span style="font-size: 10.5pt; line-height: 110%; color: black;">g)<span style="font: 7.0pt 'Times New Roman';">&nbsp;&nbsp; </span></span><span style="font-size: 10.5pt; line-height: 110%; color: black;">Dar a <strong>EL TRABAJADOR</strong>, si lo solicita, a la expiraci&oacute;n del convenio, un certificado en que conste el tiempo en el cual ha prestado sus servicios, la &iacute;ndole de la labor ejecutada y el sueldo devengado y las dem&aacute;s que se fijen en la Ley.</span></p>
                            </td>
                            </tr>
                            <tr style="height: 16.0pt;">
                            <td style="width: 598.625px; border-right: 1pt solid black; border-bottom: 1pt solid black; border-left: 1pt solid black; border-image: initial; border-top: none; background: #d9d9d9; padding: 0cm 5.4pt; height: 16px;" colspan="4">
                            <p><strong><span style="font-size: 10.5pt; line-height: 110%;">OCTAVA.</span></strong><span style="font-size: 10.5pt; line-height: 110%;"> <strong>JUSTAS CAUSAS DE TERMINACI&Oacute;N DEL CONTRATO</strong>.</span></p>
                            </td>
                            </tr>
                            <tr style="height: 16.0pt;">
                            <td style="width: 598.625px; border-right: 1pt solid black; border-bottom: 1pt solid black; border-left: 1pt solid black; border-image: initial; border-top: none; background: white; padding: 0cm 5.4pt; height: 16px;" colspan="4">
                            <p style="text-align: justify;"><span style="font-size: 10.5pt; line-height: 110%;">Son justas causas para poner t&eacute;rmino a este contrato, unilateralmente las enumeradas en el art&iacute;culo 7 del Decreto 2351 de 1965, y adem&aacute;s por parte del EL EMPLEADOR, las siguientes faltas que para el efecto se califican como graves:</span></p>
                            <p style="margin-left: 18pt; text-indent: -18pt; border: none; text-align: justify;"><span style="font-size: 10.5pt; line-height: 110%; color: black;">a)<span style="font: 7.0pt 'Times New Roman';">&nbsp;&nbsp; </span></span><span style="font-size: 10.5pt; line-height: 110%; color: black;">La ejecuci&oacute;n por parte del <strong>TRABAJADOR </strong>de labores remuneradas al servicio de terceros sin autorizaci&oacute;n del EMPLEADOR, as&iacute; como revelar informaci&oacute;n confidencial; </span></p>
                            <p style="margin-left: 18pt; text-indent: -18pt; border: none; text-align: justify;"><span style="font-size: 10.5pt; line-height: 110%; color: black;">b)<span style="font: 7.0pt 'Times New Roman';">&nbsp;&nbsp; </span></span><span style="font-size: 10.5pt; line-height: 110%; color: black;">Las repetidas desavenencias con <strong>EL EMPLEADOR</strong> o sus representantes como violencia, injuria, malos tratos o indisciplina, </span></p>
                            <p style="margin-left: 18pt; text-indent: -18pt; border: none; text-align: justify;"><span style="font-size: 10.5pt; line-height: 110%; color: black;">c)<span style="font: 7.0pt 'Times New Roman';">&nbsp;&nbsp;&nbsp; </span></span><span style="font-size: 10.5pt; line-height: 110%; color: black;">el abuso de confianza por parte del <strong>TRABAJADOR</strong>, como tambi&eacute;n sustraer de las instalaciones de <strong>EL EMPLEADOR</strong> equipos y objetos en general, sin el permiso del EMPLEADOR y </span></p>
                            <p style="margin-left: 18pt; text-indent: -18pt; border: none; text-align: justify;"><span style="font-size: 10.5pt; line-height: 110%; color: black;">d)<span style="font: 7.0pt 'Times New Roman';">&nbsp;&nbsp; </span></span><span style="font-size: 10.5pt; line-height: 110%; color: black;">La realizaci&oacute;n por parte de <strong>EL TRABAJADOR</strong> de cualquiera de las conductas indicadas en el literal &ldquo;n&rdquo; del par&aacute;grafo primero de la cl&aacute;usula sexta del presente contrato.</span></p>
                            </td>
                            </tr>
                            <tr style="height: 16.0pt;">
                            <td style="width: 598.625px; border-right: 1pt solid black; border-bottom: 1pt solid black; border-left: 1pt solid black; border-image: initial; border-top: none; background: #d9d9d9; padding: 0cm 5.4pt; height: 16px;" colspan="4">
                            <p><strong><span style="font-size: 10.5pt; line-height: 110%;">NOVENA.</span></strong><span style="font-size: 10.5pt; line-height: 110%;"> <strong>LIQUIDACI&Oacute;N FINAL DE PRESTACIONES.</strong></span></p>
                            </td>
                            </tr>
                            <tr style="height: 16.0pt;">
                            <td style="width: 598.625px; border-right: 1pt solid black; border-bottom: 1pt solid black; border-left: 1pt solid black; border-image: initial; border-top: none; background: white; padding: 0cm 5.4pt; height: 16px;" colspan="4">
                            <p style="text-align: justify;"><span style="font-size: 10.5pt; line-height: 110%;">En consideraci&oacute;n a que toda liquidaci&oacute;n, pago de comisiones y prestaciones sociales exige varios d&iacute;as para obtener los datos contables, revisarlos, hacer la liquidaci&oacute;n definitiva, aprobarla por las partes, las partes convienen fijar un plazo no mayor de quince (15) d&iacute;as, contados a partir de la terminaci&oacute;n del contrato, para la liquidaci&oacute;n y pago de las comisiones, si a &eacute;stas hay lugar, prestaciones sociales e indemnizaci&oacute;n (cuando a &eacute;sta haya lugar) prevista en el C&oacute;digo Sustantivo de Trabajo.</span></p>
                            </td>
                            </tr>
                            <tr style="height: 16.0pt;">
                            <td style="width: 598.625px; border-right: 1pt solid black; border-bottom: 1pt solid black; border-left: 1pt solid black; border-image: initial; border-top: none; background: #d9d9d9; padding: 0cm 5.4pt; height: 16px;" colspan="4">
                            <p><strong><span style="font-size: 10.5pt; line-height: 110%;">D&Eacute;CIMA. BUENA FE.</span></strong></p>
                            </td>
                            </tr>
                            <tr style="height: 16.0pt;">
                            <td style="width: 598.625px; border-right: 1pt solid black; border-bottom: 1pt solid black; border-left: 1pt solid black; border-image: initial; border-top: none; background: white; padding: 0cm 5.4pt; height: 16px;" colspan="4">
                            <p style="text-align: justify;"><span style="font-size: 10.5pt; line-height: 110%;">Este contrato ha sido elaborado estrictamente de acuerdo con la ley y ser&aacute; interpretado de buena fe y en consonancia con el C&oacute;digo Sustantivo del Trabajo, con el prop&oacute;sito de lograr la justicia entre <strong>EL EMPLEADORES</strong> y <strong>TRABAJADORES</strong> dentro de un esp&iacute;ritu de coordinaci&oacute;n econ&oacute;mica y equilibrio social. </span></p>
                            </td>
                            </tr>
                            <tr style="height: 16.0pt;">
                            <td style="width: 598.625px; border-right: 1pt solid black; border-bottom: 1pt solid black; border-left: 1pt solid black; border-image: initial; border-top: none; background: #d9d9d9; padding: 0cm 5.4pt; height: 16px;" colspan="4">
                            <p><strong><span style="font-size: 10.5pt; line-height: 110%;">D&Eacute;CIMA PRIMERA. PROPIEDAD INDUSTRIAL Y DERECHOS PATRIMONIALES SOBRE LA PROPIEDAD INTELECTUAL.&nbsp;</span></strong></p>
                            </td>
                            </tr>
                            <tr style="height: 16.0pt;">
                            <td style="width: 598.625px; border-right: 1pt solid black; border-bottom: 1pt solid black; border-left: 1pt solid black; border-image: initial; border-top: none; background: white; padding: 0cm 5.4pt; height: 16px;" colspan="4">
                            <p style="line-height: 117%; text-align: justify;"><span style="font-size: 10.5pt; line-height: 117%;">Las invenciones o descubrimientos realizados por el trabajador contratado&nbsp;para investigar o desarrollar productos, dise&ntilde;os, im&aacute;genes, campa&ntilde;as publicitarias y dem&aacute;s que est&eacute;n directa o indirectamente relacionadas con sus funciones pertenecen <strong>AL EL EMPLEADOR,</strong> de conformidad con el art&iacute;culo 539 del C&oacute;digo de Comercio, as&iacute; como el art&iacute;culo 20 y concordantes de la ley 23 de 1982 sobre derechos de autor y en especial al manual de propiedad intelectual que implemente<strong> EL EMPLEADOR</strong>. En ning&uacute;n caso el invento o los derechos patrimoniales del mismo o de las obras que el trabajador realice le pertenecen. Desde este momento el trabajador declara que cede al EL EMPLEADOR todos los derechos patrimoniales que se generen por sus invenciones, siempre que estas se realicen en virtud de su contrato de trabajo. &nbsp;En todo caso <strong>EL EMPLEADOR</strong> deber&aacute; garantizar e indicar siempre el autor, esto es, hacer la menci&oacute;n de los derechos morales del autor sobre la invenci&oacute;n.</span></p>
                            <p style="text-align: justify;"><strong><span style="font-size: 10.5pt; line-height: 110%;">EL EMPLEADOR y EL TRABAJADOR</span></strong><span style="font-size: 10.5pt; line-height: 110%;"> reconocen que <strong>EL TRABAJADOR </strong>fue vinculado para la prestaci&oacute;n de sus servicios personales y en consecuencia podr&iacute;a llegar a desarrollar para <strong>EL EMPLEADOR </strong>diferentes obras literarias, cient&iacute;ficas, t&eacute;cnicas o art&iacute;sticas, software y / o productos de seguros y seguridad social.</span></p>
                            <p style="text-align: justify;"><span style="font-size: 10.5pt; line-height: 110%;">En consecuencia, <strong>EL TRABAJADOR</strong>, quien conoce el objeto y la causa del contrato laboral y el encargo de su actividad intelectual, acuerda que en su remuneraci&oacute;n salarial se comprende la retribuci&oacute;n patrimonial por su actividad intelectual y transfiere los derechos patrimoniales de la (s) obra (a) que realice durante la vigencia y en el desarrollo del contrato de trabajo, a <strong>EL EMPLEADOR.</strong></span></p>
                            <p style="text-align: justify;"><span style="font-size: 10.5pt; line-height: 110%;">Adicionalmente <strong>EL TRABAJADOR</strong> se obliga a suscribir los documentos t&eacute;cnicos ante las autoridades de diferente orden en Colombia y / o la comunidad Andina, para efectuar el registro a nombre de <strong>EL EMPLEADOR</strong> o de quien est&aacute; determine, conservando <strong>EL TRABAJADOR</strong> los derechos morales no transferibles (ser reconocido como autor de su obra),</span></p>
                            <p style="text-align: justify;"><span style="font-size: 10.5pt; line-height: 110%;">Los descubrimientos, desarrollos de software o de otra naturaleza invenciones y dem&aacute;s obras de producci&oacute;n intelectual realizados por <strong>EL TRABAJADOR</strong> le pertenecen a <strong>EL EMPLEADOR, </strong>porque la invenci&oacute;n ha sido realizada por <strong>EL TRABAJADOR</strong> contratado siendo la invenci&oacute;n el resultado de la prestaci&oacute;n de sus servicios, o porque los descubrimientos realizados por <strong>EL TRABAJADOR</strong> se obtienen mediante datos o medios conocidos o utilizados en raz&oacute;n de la labor desempe&ntilde;ada.</span></p>
                            <p style="text-align: justify;"><span style="font-size: 10.5pt; line-height: 110%;">Los derechos morales de autor permanecer&aacute;n en cabeza de <strong>EL TRABAJADOR</strong> (ser conocido como autor de su obra). Los derechos patrimoniales de autor sobre obras creadas por <strong>EL TRABAJADOR</strong> en ejercicio de sus funciones o con ocasi&oacute;n de ellas pertenecen a <strong>EL EMPLEADOR.</strong></span></p>
                            </td>
                            </tr>
                            <tr style="height: 16.0pt;">
                            <td style="width: 598.625px; border-right: 1pt solid black; border-bottom: 1pt solid black; border-left: 1pt solid black; border-image: initial; border-top: none; background: #d9d9d9; padding: 0cm 5.4pt; height: 16px;" colspan="4">
                            <p><strong><span style="font-size: 10.5pt; line-height: 110%;">D&Eacute;CIMA SEGUNDA. ACUERDO DE CONFIDENCIALIDAD.</span></strong></p>
                            </td>
                            </tr>
                            <tr style="height: 16.0pt;">
                            <td style="width: 598.625px; border-right: 1pt solid black; border-bottom: 1pt solid black; border-left: 1pt solid black; border-image: initial; border-top: none; background: white; padding: 0cm 5.4pt; height: 16px;" colspan="4">
                            <p style="text-align: justify;"><strong><span style="font-size: 10.5pt; line-height: 110%;">EL TRABAJADOR</span></strong><span style="font-size: 10.5pt; line-height: 110%;">, se obliga a guardar absoluta reserva sobre toda la informaci&oacute;n que adquiera o conozca en raz&oacute;n de su trabajo para <strong>EL EMPLEADOR </strong>y, se obliga a no utilizar esta fuera de <strong>EL EMPLEADOR,</strong> a no comunicarlo a terceros en especial, los secretos profesionales, industriales, comerciales y tecnol&oacute;gicos de <strong>EL EMPLEADOR</strong>, como software operaciones, desarrollos de sistema, an&aacute;lisis, estudios, bases de datos, dise&ntilde;os, dibujo, sistemas de c&aacute;lculos, entre otros, o de aquella informaci&oacute;n de naturaleza reservada, durante la vigencia del contrato y dentro de los 10 (diez) a&ntilde;os posteriores a su terminaci&oacute;n, con fines diferentes a la prestaci&oacute;n de los servicios contratados con <strong>EL EMPLEADOR</strong>. La violaci&oacute;n de esta obligaci&oacute;n durante la vigencia del contrato constituye falta grave que da lugar al despido, aun por la primera vez. Finalizando el contrato de trabajo, da lugar al pago de la indemnizaci&oacute;n de los perjuicios que causa a <strong>EL EMPLEADOR</strong>.</span></p>
                            <p style="text-align: justify;"><strong><span style="font-size: 10.5pt; line-height: 110%;">EL TRABAJADOR</span></strong><span style="font-size: 10.5pt; line-height: 110%;"> acepta que la informaci&oacute;n de car&aacute;cter confidencial incluye, pero no se limita a toda la informaci&oacute;n de la compa&ntilde;&iacute;a y / o de cualquiera de sus clientes y / o potenciales clientes, como la relacionada con cifras, los comprobantes contables, pagos, planes negocios, procedimientos, estrategias (incluidas las publicitarias), y pol&iacute;ticas.</span></p>
                            <p style="text-align: justify;"><span style="font-size: 10.5pt; line-height: 110%;">Se presume como violaci&oacute;n del compromiso de confidencialidad y por ende un incumplimiento del presente acuerdo, cualquier utilizaci&oacute;n o divulgaci&oacute;n de la informaci&oacute;n confidencial con la intenci&oacute;n de obtener un provecho personal, directa o indirectamente, lo cual incluye la utilizaci&oacute;n de la informaci&oacute;n confidencial en la realizaci&oacute;n de trabajos o la prestaci&oacute;n de servicios a personas naturales o jur&iacute;dicas que desarrollen actividades similares o conexas al objeto social de <strong>EL EMPLEADOR</strong>&nbsp; y que puedan considerarse competencia de <strong>LA EMPRESA.</strong></span></p>
                            <p style="text-align: justify;"><span style="font-size: 10.5pt; line-height: 110%;">Para efectos de interpretaci&oacute;n se entender&aacute; por <strong>SECRETOS EMPRESARIALES:</strong> Cualquier informaci&oacute;n divulgada que <strong>EL EMPLEADOR</strong> suministre directa o indirectamente al trabajador con ocasi&oacute;n del presente contrato y que pueda usarse en alguna actividad productiva, industrial o comercial, y que sea susceptible de transmitirse a un tercero, en la medida que dicha informaci&oacute;n sea: a) Secreta, en el sentido que como conjunto o en la configuraci&oacute;n y reuni&oacute;n precisa de sus componentes, no sea generalmente conocida ni f&aacute;cilmente accesible por quienes se encuentran en los c&iacute;rculos que normalmente manejan la informaci&oacute;n respectiva; b) Tenga un valor comercial por ser secreta; y c) Haya sido objeto de medidas razonables tomadas por <strong>EL EMPLEADOR </strong>&nbsp;para mantenerla secreta, para la cual las partes se comprometen a informar a la otra la informaci&oacute;n que goza de confidencialidad. La informaci&oacute;n de un secreto empresarial podr&aacute; estar referida a la naturaleza, caracter&iacute;sticas o finalidades de los productos; a los m&eacute;todos o procesos de producci&oacute;n; o, a los medios o formas de distribuci&oacute;n o comercializaci&oacute;n de productos o prestaci&oacute;n de servicios. </span></p>
                            <p style="text-align: justify;"><strong><span style="font-size: 10.5pt; line-height: 110%;">EL TRABAJADOR</span></strong><span style="font-size: 10.5pt; line-height: 110%;"> se obliga a devolver toda la informaci&oacute;n confidencial que tenga en su posesi&oacute;n a la terminaci&oacute;n del contrato de trabajo como documentos, archivos, informes, etc.</span></p>
                            <p style="text-align: justify;"><span style="font-size: 10.5pt; line-height: 110%;">A cualquier incumplimiento en las obligaciones emanadas en el presente acuerdo de confidencialidad le ser&aacute;n aplicadas las sanciones consagradas en el art&iacute;culo 16 de la ley 256 de 1996 que consagra: <strong>VIOLACI&Oacute;N </strong>de secretos. Se considera desleal la divulgaci&oacute;n o explotaci&oacute;n, sin autorizaci&oacute;n de su titular, de secretos industriales o de cualquiera otra clase de secretos empresariales a los que se haya tenido acceso leg&iacute;timamente, pero con deber de reserva, o ileg&iacute;timamente, a consecuencia de algunas de las conductas previstas en el inciso siguiente o en el art&iacute;culo 18 de esta ley. Tendr&aacute; as&iacute; mismo la consideraci&oacute;n de desleal, la adquisici&oacute;n de secretos por medio de espionaje o procedimientos an&aacute;logos, sin perjuicio de las sanciones que otras normas establezcan. Las acciones referentes a la violaci&oacute;n de secretos proceder&aacute;n sin que para ello sea preciso que concurran los requisitos a que hace referencia el art&iacute;culo 20 de esta ley. As&iacute; mismo se le podr&aacute;n iniciar las acciones consagradas en el art&iacute;culo 308 del c&oacute;digo Penal.</span></p>
                            </td>
                            </tr>
                            <tr style="height: 16.0pt;">
                            <td style="width: 598.625px; border-right: 1pt solid black; border-bottom: 1pt solid black; border-left: 1pt solid black; border-image: initial; border-top: none; background: white; padding: 0cm 5.4pt; height: 16px;" colspan="4">
                            <p><span style="font-size: 10.5pt; line-height: 110%;">PAR&Aacute;GRAFO.</span></p>
                            </td>
                            </tr>
                            <tr style="height: 16.0pt;">
                            <td style="width: 598.625px; border-right: 1pt solid black; border-bottom: 1pt solid black; border-left: 1pt solid black; border-image: initial; border-top: none; background: white; padding: 0cm 5.4pt; height: 16px;" colspan="4">
                            <p style="text-align: justify;"><span style="font-size: 10.5pt; line-height: 110%;">En consecuencia de lo anterior y con base en &nbsp;la naturaleza de las funciones del cargo de <strong>EL TRABAJADOR</strong>, el incumplimiento a esta obligaci&oacute;n de confidencialidad se trata como justa causa de terminaci&oacute;n del contrato de trabajo.</span></p>
                            </td>
                            </tr>
                            <tr style="height: 16.0pt;">
                            <td style="width: 598.625px; border-right: 1pt solid black; border-bottom: 1pt solid black; border-left: 1pt solid black; border-image: initial; border-top: none; background: #d9d9d9; padding: 0cm 5.4pt; height: 16px;" colspan="4">
                            <p><strong><span style="font-size: 10.5pt; line-height: 110%;">D&Eacute;CIMA TERCERA. CONSULTAR BASES DE DATOS.</span></strong></p>
                            </td>
                            </tr>
                            <tr style="height: 16.0pt;">
                            <td style="width: 598.625px; border-right: 1pt solid black; border-bottom: 1pt solid black; border-left: 1pt solid black; border-image: initial; border-top: none; background: white; padding: 0cm 5.4pt; height: 16px;" colspan="4">
                            <p style="text-align: justify;"><strong><span style="font-size: 10.5pt; line-height: 110%;">EL TRABAJADOR</span></strong><span style="font-size: 10.5pt; line-height: 110%;"> faculta expresamente a <strong>EL EMPLEADOR </strong>para consultar sus bases de datos relativas a todo manejo financiero, al cumplimiento de obligaciones crediticias y a las dem&aacute;s que permitan un conocimiento adecuado del mismo. As&iacute; mismo, <strong>EL TRABAJADOR</strong> faculta a <strong>EL EMPLEADOR</strong> para que informe a esas mismas bases de datos los aspectos que considere pertinentes en relaci&oacute;n con el presente contrato.</span></p>
                            </td>
                            </tr>
                            <tr style="height: 16.0pt;">
                            <td style="width: 598.625px; border-right: 1pt solid black; border-bottom: 1pt solid black; border-left: 1pt solid black; border-image: initial; border-top: none; background: #d9d9d9; padding: 0cm 5.4pt; height: 16px;" colspan="4">
                            <p><strong><span style="font-size: 10.5pt; line-height: 110%;">D&Eacute;CIMA CUARTA. USO DE INFORMACI&Oacute;N PERSONAL.</span></strong></p>
                            </td>
                            </tr>
                            <tr style="height: 16.0pt;">
                            <td style="width: 598.625px; border-right: 1pt solid black; border-bottom: 1pt solid black; border-left: 1pt solid black; border-image: initial; border-top: none; background: white; padding: 0cm 5.4pt; height: 16px;" colspan="4">
                            <p style="text-align: justify;"><strong><span style="font-size: 10.5pt; line-height: 110%;">EL TRABAJADOR</span></strong><span style="font-size: 10.5pt; line-height: 110%;"> autoriza a <strong>EL EMPLEADOR </strong>para utilizar su informaci&oacute;n personal para fines comerciales a las empresas en las cuales &eacute;sta o sus filiales tengan participaci&oacute;n accionar&iacute;a.</span></p>
                            </td>
                            </tr>
                            <tr style="height: 16.0pt;">
                            <td style="width: 598.625px; border-right: 1pt solid black; border-bottom: 1pt solid black; border-left: 1pt solid black; border-image: initial; border-top: none; background: #d9d9d9; padding: 0cm 5.4pt; height: 16px;" colspan="4">
                            <p><strong><span style="font-size: 10.5pt; line-height: 110%;">D&Eacute;CIMA QUINTA. DOCUMENTOS DEL CONTRATO.</span></strong></p>
                            </td>
                            </tr>
                            <tr style="height: 16.0pt;">
                            <td style="width: 598.625px; border-right: 1pt solid black; border-bottom: 1pt solid black; border-left: 1pt solid black; border-image: initial; border-top: none; background: white; padding: 0cm 5.4pt; height: 16px;" colspan="4">
                            <p style="text-align: justify;"><span style="font-size: 10.5pt; line-height: 110%;">Se considerar&aacute; para efectos de interpretaci&oacute;n del presente contrato que los documentos que se enuncian a continuaci&oacute;n son parte integral de &eacute;l: </span></p>
                            <p style="margin-left: 36.0pt; text-indent: -18.0pt; border: none;"><span style="font-size: 10.5pt; line-height: 110%; color: black;">a)<span style="font: 7.0pt 'Times New Roman';">&nbsp;&nbsp; </span></span><span style="font-size: 10.5pt; line-height: 110%; color: black;">la Hoja de Vida.</span></p>
                            <p style="margin-left: 36.0pt; text-indent: -18.0pt; border: none;"><span style="font-size: 10.5pt; line-height: 110%; color: black;">b)<span style="font: 7.0pt 'Times New Roman';">&nbsp;&nbsp; </span></span><span style="font-size: 10.5pt; line-height: 110%; color: black;">Los documentos aportados por EL TRABAJADOR para el ingreso a la compa&ntilde;&iacute;a.</span></p>
                            <p style="margin-left: 36.0pt; text-indent: -18.0pt; border: none;"><span style="font-size: 10.5pt; line-height: 110%; color: black;">c)<span style="font: 7.0pt 'Times New Roman';">&nbsp;&nbsp;&nbsp; </span></span><span style="font-size: 10.5pt; line-height: 110%; color: black;">Los otros&iacute;es que LAS PARTES acuerden por el sistema,&nbsp; o por escrito en el evento en que no sigan el usando el sistema.</span></p>
                            <p style="margin-left: 36.0pt; text-indent: -18.0pt; border: none;"><span style="font-size: 10.5pt; line-height: 110%; color: black;">d)<span style="font: 7.0pt 'Times New Roman';">&nbsp;&nbsp; </span></span><span style="font-size: 10.5pt; line-height: 110%; color: black;">Todas las comunicaciones que se crucen las partes por el sistema en desarrollo del contrato.</span></p>
                            </td>
                            </tr>
                            <tr style="height: 16.0pt;">
                            <td style="width: 598.625px; border-right: 1pt solid black; border-bottom: 1pt solid black; border-left: 1pt solid black; border-image: initial; border-top: none; background: #d9d9d9; padding: 0cm 5.4pt; height: 16px;" colspan="4">
                            <p><strong><span style="font-size: 10.5pt; line-height: 110%;">D&Eacute;CIMA SEXTA.</span></strong></p>
                            </td>
                            </tr>
                            <tr style="height: 16.0pt;">
                            <td style="width: 598.625px; border-right: 1pt solid black; border-bottom: 1pt solid black; border-left: 1pt solid black; border-image: initial; border-top: none; background: white; padding: 0cm 5.4pt; height: 16px;" colspan="4">
                            <p><span style="font-size: 10.5pt; line-height: 110%;">&nbsp;</span></p>
                            </td>
                            </tr>
                            <tr style="height: 16.0pt;">
                            <td style="width: 598.625px; border-right: 1pt solid black; border-bottom: 1pt solid black; border-left: 1pt solid black; border-image: initial; border-top: none; background: #d9d9d9; padding: 0cm 5.4pt; height: 16px;" colspan="4">
                            <p><strong><span style="font-size: 10.5pt; line-height: 110%;">D&Eacute;CIMA S&Eacute;PTIMA. COMUNICACIONES &ndash; TECNOLOG&Iacute;A <em>BLOCKCHAIN</em>-</span></strong></p>
                            </td>
                            </tr>
                            <tr style="height: 16.0pt;">
                            <td style="width: 598.625px; border-right: 1pt solid black; border-bottom: 1pt solid black; border-left: 1pt solid black; border-image: initial; border-top: none; background: white; padding: 0cm 5.4pt; height: 16px;" colspan="4">
                            <p><span style="font-size: 10.5pt; line-height: 110%;">&nbsp;</span></p>
                            </td>
                            </tr>
                            <tr style="height: 16.0pt;">
                            <td style="width: 598.625px; border-right: 1pt solid black; border-bottom: 1pt solid black; border-left: 1pt solid black; border-image: initial; border-top: none; background: #d9d9d9; padding: 0cm 5.4pt; height: 16px;" colspan="4">
                            <p><strong><span style="font-size: 10.5pt; line-height: 110%;">D&Eacute;CIMA OCTAVA. NUEVO CONTRATO</span></strong></p>
                            </td>
                            </tr>
                            <tr style="height: 16.0pt;">
                            <td style="width: 598.625px; border-right: 1pt solid black; border-bottom: 1pt solid black; border-left: 1pt solid black; border-image: initial; border-top: none; background: white; padding: 0cm 5.4pt; height: 16px;" colspan="4">
                            <p style="text-align: justify;"><span style="font-size: 10.5pt; line-height: 110%;">El presente contrato reemplaza en su integridad y deja sin efecto alguno cualquier otro contrato verbal o escrito celebrado entre las partes con anterioridad&nbsp; al uso del Sistema.&nbsp; Las modificaciones que se acuerden al presente contrato se generar&aacute;n por el sistema mientras las partes tengan los servicios vigentes, finalizados los servicios, todos los cambios y/o modificaciones realizados al contrato deber&aacute;n hacerse por escrito o por un sistema similar o superior a ContrApp.</span></p>
                            </td>
                            </tr>
                            <tr style="height: 16.0pt;">
                            <td style="width: 598.625px; border-right: 1pt solid black; border-bottom: 1pt solid black; border-left: 1pt solid black; border-image: initial; border-top: none; background: black; padding: 0cm 5.4pt; height: 16px;" colspan="4">
                            <p style="text-align: center;"><span style="color: #ffffff;"><strong><span style="font-size: 10.5pt; line-height: 110%;">FECHA DE APROBACI&Oacute;N</span></strong></span></p>
                            </td>
                            </tr>
                            <tr style="height: 16.0pt;">
                            <td style="width: 598.625px; border-right: 1pt solid black; border-bottom: 1pt solid black; border-left: 1pt solid black; border-image: initial; border-top: none; background: white; padding: 0cm 5.4pt; height: 16px;" colspan="4">
                            <p style="line-height: 117%;"><span style="font-size: 10.5pt; line-height: 117%;">xxxxxxxxxxxxxxxx</span></p>
                            </td>
                            </tr>
                            <tr style="height: 16.0pt;">
                            <td style="width: 598.625px; border-right: 1pt solid black; border-bottom: 1pt solid black; border-left: 1pt solid black; border-image: initial; border-top: none; background: black; padding: 0cm 5.4pt; height: 16px;" colspan="4">
                            <p style="text-align: center;"><span style="color: #ffffff;"><strong><span style="font-size: 10.5pt; line-height: 110%;">FIRMAS CRIPTOGR&Aacute;FICAS CON TECNOLOG&Iacute;A <em>BLOCKCHAIN</em></span></strong></span></p>
                            </td>
                            </tr>
                            <tr style="height: 16.0pt;">
                            <td style="width: 598.625px; border-right: 1pt solid black; border-bottom: 1pt solid black; border-left: 1pt solid black; border-image: initial; border-top: none; background: white; padding: 0cm 5.4pt; height: 16px;" colspan="4">
                            <p><span style="font-size: 10.5pt; line-height: 110%;">&nbsp;</span></p>
                            <table style="width: 448.9pt; border-collapse: collapse; border: none;" width="599">
                            <tbody>
                            <tr>
                            <td style="width: 224.45pt; border: solid black 1.0pt; background: #0D0D0D; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="299">
                            <p style="text-align: center; tab-stops: -7.1pt 0cm; border: none; margin: 3.0pt 0cm 3.0pt 0cm;"><strong><span style="font-size: 10.5pt; line-height: 110%; color: white;">EL EMPLEADOR</span></strong></p>
                            </td>
                            <td style="width: 224.45pt; border: solid black 1.0pt; border-left: none; background: #0D0D0D; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="299">
                            <p style="text-align: center; tab-stops: -7.1pt 0cm; border: none; margin: 3.0pt 0cm 3.0pt 0cm;"><strong><span style="font-size: 10.5pt; line-height: 110%; color: white;">EL TRABAJADOR</span></strong></p>
                            </td>
                            </tr>
                            <tr>
                            <td style="width: 112.2pt; border: solid black 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt;" width="150">
                            <p style="text-align: center; tab-stops: -7.1pt 0cm; border: none; margin: 3.0pt 0cm 3.0pt 0cm;"><strong><span style="font-size: 10.5pt; line-height: 110%; color: #7f7f7f;">Firma escaneada</span></strong></p>
                            <p style="text-align: center; tab-stops: -7.1pt 0cm; border: none; margin: 3.0pt 0cm 3.0pt 0cm;"><strong><span style="font-size: 10.5pt; line-height: 110%; color: #7f7f7f;">&nbsp;</span></strong></p>
                            </td>
                            <td style="width: 112.25pt; border-top: none; border-left: none; border-bottom: solid black 1.0pt; border-right: solid black 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="150">
                            <p style="text-align: center; tab-stops: -7.1pt 0cm; border: none; margin: 3.0pt 0cm 3.0pt 0cm;"><strong><span style="font-size: 10.5pt; line-height: 110%; color: #7f7f7f;">C&oacute;digo Qr</span></strong></p>
                            <p style="text-align: center; tab-stops: -7.1pt 0cm; border: none; margin: 3.0pt 0cm 3.0pt 0cm;"><strong><span style="font-size: 10.5pt; line-height: 110%; color: #7f7f7f;">&nbsp;</span></strong></p>
                            </td>
                            <td style="width: 112.2pt; border-top: none; border-left: none; border-bottom: solid black 1.0pt; border-right: solid black 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="150">
                            <p style="text-align: center; tab-stops: -7.1pt 0cm; border: none; margin: 3.0pt 0cm 3.0pt 0cm;"><strong><span style="font-size: 10.5pt; line-height: 110%; color: #7f7f7f;">Firma escaneada</span></strong></p>
                            <p style="text-align: center; tab-stops: -7.1pt 0cm; border: none; margin: 3.0pt 0cm 3.0pt 0cm;"><strong><span style="font-size: 10.5pt; line-height: 110%; color: #7f7f7f;">&nbsp;</span></strong></p>
                            </td>
                            <td style="width: 112.25pt; border-top: none; border-left: none; border-bottom: solid black 1.0pt; border-right: solid black 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" width="150">
                            <p style="text-align: center; tab-stops: -7.1pt 0cm; border: none; margin: 3.0pt 0cm 3.0pt 0cm;"><strong><span style="font-size: 10.5pt; line-height: 110%; color: #7f7f7f;">C&oacute;digo Qr</span></strong></p>
                            <p style="text-align: center; tab-stops: -7.1pt 0cm; border: none; margin: 3.0pt 0cm 3.0pt 0cm;"><strong><span style="font-size: 10.5pt; line-height: 110%; color: #7f7f7f;">&nbsp;</span></strong></p>
                            </td>
                            </tr>
                            <tr>
                            <td style="width: 224.45pt; border: solid black 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="299">
                            <p><strong><span style="font-size: 10.5pt; line-height: 110%; color: black;">XXXXXXXXXXXXXXXXX</span></strong></p>
                            <p><span style="font-size: 10.5pt; line-height: 110%; color: black;">C.C. XXXXXXXXXXXX</span></p>
                            <p><span style="font-size: 10.5pt; line-height: 110%; color: black;">Representante Legal</span></p>
                            <p><strong><span style="font-size: 10.5pt; line-height: 110%; color: black;">XXXXXXXXXXXXX S.A.S.</span></strong></p>
                            <p><span style="font-size: 10.5pt; line-height: 110%; color: black;">&nbsp;</span></p>
                            </td>
                            <td style="width: 224.45pt; border-top: none; border-left: none; border-bottom: solid black 1.0pt; border-right: solid black 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" width="299">
                            <p><strong><span style="font-size: 10.5pt; line-height: 110%; color: black;">XXXXXXXXXXXXXXXXX</span></strong></p>
                            <p><span style="font-size: 10.5pt; line-height: 110%; color: black;">C.C. XXXXXXXXXXXX</span></p>
                            <p style="tab-stops: -7.1pt 0cm; border: none; margin: 3.0pt 0cm 3.0pt 0cm;"><strong><span style="font-size: 10.5pt; line-height: 110%; color: black;">&nbsp;</span></strong></p>
                            </td>
                            </tr>
                            <tr>
                            <td style="border: none;" width="150">&nbsp;</td>
                            <td style="border: none;" width="150">&nbsp;</td>
                            <td style="border: none;" width="150">&nbsp;</td>
                            <td style="border: none;" width="150">&nbsp;</td>
                            </tr>
                            </tbody>
                            </table>
                            </td>
                            </tr>
                            <tr style="height: 18px;">
                            <td style="border: none; width: 188px; height: 18px;">&nbsp;</td>
                            <td style="border: none; width: 117px; height: 18px;">&nbsp;</td>
                            <td style="border: none; width: 157px; height: 18px;">&nbsp;</td>
                            <td style="border: none; width: 144px; height: 18px;">&nbsp;</td>
                            </tr>
                            </tbody>
                            </table>
                  </div>
                  <div class="center col l4">                               
                          <button class="btn waves-effect waves-light" name="action" type="submit" onclick="enviar_firmar()">Firmar y Enviar</button>
                        </div>
                        <div class="center col l4">                               
                          <button class="btn waves-effect waves-light" type="button">Guardar Borrador</button>
                        </div>
                        <div class="center col l4">                               
                          <button class="btn waves-effect waves-light" type="button" href="home.php">Cancelar Contrato</button>
                  </div>
                 </div>
                </div>
                            			<!-- modal static -->
			<div class="modal fade" id="staticModal" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true"
            data-backdrop="static">
               <div class="modal-dialog modal-lg" role="document">
                   <div class="modal-content">
                       <div class="modal-header">
                           <h5 class="modal-title" id="staticModalLabel">Firma Digital</h5>
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                               <span aria-hidden="true">&times;</span>
                           </button>
                       </div>
                       <div class="modal-body">
                           <p>
                               Ingrese su firma digital con la respectiva contraseña para hacer oficial el Contrato y enviarlo para su firma a la contraparte.
                           </p>
                           <form id="myform">
                                <input id="myfile" name="file" type="file" />
                                <input type="password" id="passwordkey" name="passwordkey" placeholder="Contraseña" class="form-control">
                            </form>
                       </div>
                       <div class="modal-footer">
                           <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                           <button type="button" class="btn btn-primary" onclick="decrypt_wallet()">Confirm</button>
                       </div>
                       <div class="alert alert-danger" role="alert" id="alert_pass" style="display:none;">
                        Porfavor llene el campo de contraseña
                        </div>
                        <div class="alert alert-danger" role="alert" id="alert_firma" style="display:none;">
                            Porfavor cargue el archivo de su Firma
                        </div>
                   </div>
               </div>
           </div>
           <!-- end modal static -->
               </div>            
              </div>
             
      </main>
            
 <!-- Compiled and minified JavaScript -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
     <!-- Jquery JS-->
     <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="JavaScript/main.js"></script>
    <script src="JavaScript/bundle.js"></script>
    <script src="JavaScript/emitir_contrato.js"></script>
    <script src="JavaScript/carga_firma.js"></script>
    <script src="JavaScript/decrypt_wallet.js"></script>
    <script src="JavaScript/formulario_dinamico_diploma.js"></script>
    <script src="JavaScript/validar_formulario_diploma.js"></script>
    <script src="https://unpkg.com/sweetalert2@7.8.2/dist/sweetalert2.all.js"></script>
 
 <!-- this script initializes all Materialize javascript components -->
 <script>
  document.addEventListener('DOMContentLoaded', function() {
  M.AutoInit();
  });    
  function enviar_firmar(){
    $('#staticModal').modal('show');
  }
 </script> 

 <!-- this script initializes Dropdown for settings -->
 <script>
  document.addEventListener('DOMContentLoaded', function() {
      var elems = document.querySelectorAll('.dropdown-trigger');
      var instances = M.Dropdown.init(elems, {coverTrigger: false});
    });
 </script>
   
</body>
</html>