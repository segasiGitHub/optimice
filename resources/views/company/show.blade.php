<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Parallax Template - Materialize</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <nav class="white" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="#" class="brand-logo black-text">Logo</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#">Navbar Link</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="#">Navbar Link</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse black-text"><i class="material-icons">menu</i></a>
    </div>
  </nav>

  <br><br><br>

     <h3 class="center-align">Datos Generales</h3>


  <div class="container">

    <div class="section">

<table class="bordered highlight">
  <thead>
    <tr>
      <th class="center-align" colspan="6">Datos Generales</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Razón Social</td>
      <td colspan="2">Prestaciones Médicas Miranda Limitada</td>
      <td>RUT</td>
      <td colspan="2">76.182.308-8</td>
    </tr>
    <tr>
      <td>Representate Legal</td>
      <td colspan="2">Mónica Andrea López Hernando</td>
      <td>RUT</td>
      <td colspan="2">15.312.027-7</td>
    </tr>
    <tr>
      <td>Giro</td>
      <td colspan="2">Servicios Médicos e Inversiones</td>
      <td>Comuna</td>
      <td colspan="2">Santiago</td>
    </tr>
    <tr>
      <td>Dirección</td>
      <td colspan="2">Ramón Corvalan 37 Oficina 228</td>
      <td>Horarios Visita</td>
      <td colspan="2">Vía Mail</td>
    </tr>
    <tr>
      <td>Teléfono</td>
      <td>-</td>
      <td>Celular</td>
      <td>56982484614</td>
      <td>Especialidad</td>
      <td>Sicología</td>
    </tr>
    <tr>
      <td>Médico</td>
      <td colspan="2">Mónica Andrea López Hernando</td>
      <td>Mail</td>
      <td colspan="2">-</td>
    </tr>
    <tr>
      <td>Contacto</td>
      <td>-</td>
      <td>Celular</td>
      <td>-</td>
      <td>Mail</td>
      <td>-</td>
    </tr>
  </tbody>
</table>

</div> 

  </div>
 

  <footer class="page-footer teal">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Company Bio</h5>
          <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Settings</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Connect</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="brown-text text-lighten-3" href="http://materializecss.com">Materialize</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script> 
   <script src="js/init.js"></script>

   <script>
       
  $('.timepicker').pickatime({
    default: 'now', // Set default time: 'now', '1:30AM', '16:30'
    fromnow: 0,       // set default time to * milliseconds from now (using with default = 'now')
    twelvehour: false, // Use AM/PM or 24-hour format
    donetext: 'OK', // text for done-button
    cleartext: 'Clear', // text for clear-button
    canceltext: 'Cancel', // Text for cancel-button
    autoclose: false, // automatic close timepicker
    ampmclickable: true, // make AM PM clickable
    aftershow: function(){} //Function for after opening timepicker
  });
   </script>

  </body>
</html>
