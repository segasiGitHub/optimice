<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Optimice</title>

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

  <div class="container">
    <div class="row">
      <!-- Inicio Datos Generales -->
      <br><br><br>
      <h3 class="center-align">Datos Generales</h3>    
      <form class="col s12" method="POST" action="/company">
        {{ csrf_field() }}
        <div class="row">
          <div class="input-field col s6">
            <input id="business" name="business" type="text" class="validate" required>
            <label for="business">Razon Social</label>
          </div>
          <div class="input-field col s6">
            <input id="business_rut" name="business_rut" type="text" data-length="10">
            <label for="business_rut">Rut</label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s6">
            <input id="representative" name="representative" type="text" class="validate">
            <label for="representative">Representate Legal</label>
          </div>

          <div class="input-field col s6">
             <input id="representative_rut" name="representative_rut" type="text" data-length="10">
            <label for="representative_rut">Rut</label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s6">
            <input  id="item" name="item" type="text" class="validate">
            <label for="item">Giro</label>
          </div>

          <div class="input-field col s6">
            <input id="county" name="county" type="text" class="validate">
            <label for="county">Comuna</label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s6">
            <input id="address" name="address" type="text" class="validate">
            <label for="address">Dirección</label>
          </div>
        
          <div class="input-field col s6">
            <input id="schedule" name="schedule" type="text" class="validate">
            <label for="schedule">Horarios Visita</label>
          </div> 
        </div>

        <div class="row">
          <div class="input-field col s4">
            <input  id="phone" name="phone" type="text" class="validate">
            <label for="phone">Teléfono</label>
          </div>
         
          <div class="input-field col s4">
            <input id="celphone" name="celphone" type="text" class="validate">
            <label for="celphone">Celular</label>
          </div>

          <div class="input-field col s4">
            <input id="speciality" name="speciality" type="text" class="validate">
            <label for="speciality">Especialidad</label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s6">
            <input  id="doctor" name="doctor" type="text" class="validate">
            <label for="doctor">Médico</label>
          </div>
          
          <div class="input-field col s6">
            <input id="email" name="email" type="email" class="validate">
            <label for="email">Email</label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s4">
            <input id="contact" name="contact" type="text" class="validate">
            <label for="contact">Contacto</label>
          </div>
          
          <div class="input-field col s4">
             <input  id="contact_phone" name="contact_phone" type="text" class="validate">
            <label for="contact_phone">Celular</label>
          </div>
          
          <div class="input-field col s4">
            <input id="contact_mail" name="contact_mail" type="email" class="validate">
            <label for="contact_mail">Email</label>
          </div>
        </div>
        <!-- End Datos Generales -->
        
        <!-- Inicio Datos de la Sociedad -->
        <br><br><br>
        <div id="app">
          <partner></partner>
        </div>
        <!-- End Datos de la Sociedad -->

        <!-- Inicio de formulario DATOS OPTIMICE -->
      <br><br><br>
      <h3 class="center-align">Datos Optimice</h3>
      <form class="col s12">
        <div class="row">
          <div class="input-field col s6">
            <input id="ingress" name="ingress" type="text" class="validate">
            <label for="ingress">Fecha de Ingreso de Cliente</label>
          </div>
     
          <div class="input-field col s6">
            <input id="executive" name="executive" type="text" class="validate">
            <label for="executive">Ejecutivo a cargo</label>
          </div>
        </div>

        <div class="row">
            <div class="input-field col s6">
              <input id="schedule" name="schedule" type="text" class="validate">
              <label for="schedule">Honorario Mes</label>
            </div>

            <div class="input-field col s6">
              <input id="honorary" name="honorary" type="text" class="validate">
              <label for="honorary">Honorario Renta</label>
            </div>
        </div>
      
        <div class="row">
          <div class="input-field col s6">
            <select name="payment">
              <option value="" disabled selected>Elige una Opcion</option>
              <option value="1">Transferencia</option>
              <option value="2">Cheque</option>
            </select>
            <label>Modalidad de Pago</label>
          </div>
      
          <div class="input-field col s6">
            <input id="key_sii" name="key_sii" type="text" class="validate">
            <label for="key_sii">Clave SII</label>
          </div>
        </div>
      
        <div class="row">
          <div class="input-field col s6">
            <select name="remuneration">
              <option value="" disabled selected>Elige una Opcion</option>
              <option value="1">Transferencia</option>
              <option value="2">Cheque</option>
            </select>
            <label>Remuneración</label>
          </div>

          <div class="input-field col s6">
            <input id="key_previred" name="key_previred" type="text" class="validate">
            <label for="key_previred">Clave PreviRed</label>
          </div>
        </div>
       
        <div class="row">     
          <div class="input-field col s6">
            <input id="amount" name="amount" type="text" class="validate">
            <label for="amount">Cantidad Liquida</label>
          </div>

          <div class="input-field col s6">
            <select name="tax">
              <option value="" disabled selected>Elige una Opcion</option>
              <option value="1">Afecta</option>
              <option value="2">Exenta</option>
            </select>
            <label>Afecta ó Exenta</label>
          </div>
        </div>

        <div class="row">     
          <div class="input-field col s6">
            <select name="remuneration_type">
              <option value="" disabled selected>Elige una Opcion</option>
              <option value="1">Casa Particular</option>
              <option value="2">Independiente</option>
              <option value="3">Empleados</option>
            </select>
            <label>Tipo de Remuneración.</label>
          </div>

          <div class="input-field col s6">
            <select name="billing">
              <option value="" disabled selected>Elige una Opcion</option>
              <option value="1">Electrónica</option>
              <option value="2">Manual</option>
            </select>
            <label>Facturación</label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s6">
            <select name="ticket">
              <option value="" disabled selected>Elige una Opcion</option>
              <option value="1">Si</option>
              <option value="2">No</option>
            </select>
            <label>Boleta</label>
          </div>

          <div class="col s3">         
            <p>Atencion A cliente</p>
          </div>

          <div class="col s2">         
            <p>
              <input name="attention_mail" type="checkbox" class="filled-in" id="filled-in-box" checked="checked" />
              <label for="filled-in-box">Via Mail</label>
            </p>
          </div>

          <div class="col s1">
            <p>
              <input name="Attention_visit" type="checkbox" class="filled-in" id="filled-in-box1" checked="checked" />
              <label for="filled-in-box1">Visita</label>
            </p>          
          </div>
        </div>

        <div class="row">
          <div class="input-field col s6">
            <select name="ticket_monthly">
              <option value="" disabled selected>Elige una Opcion</option>
                <option value="1">Optimice</option>
                <option value="2">Clienete</option>
            </select>
            <label>Boleta Mensuales</label>
          </div>

          <div class="input-field col s6">
            <select name="complexity">
              <option value=""selected>Elige una Opcion</option>
              <option value="1">A</option>
              <option value="2">B</option>
              <option value="3">C</option>
            </select>
            <label>Grado de complejidad</label>
          </div>        
        </div>
      
        <div class="row">
          <div class="input-field col s12">
            <textarea name="observations" id="textarea1" class="materialize-textarea" data-length="1000"></textarea>
            <label for="textarea1">OBSERVACIONES</label>
          </div>
        </div>

        <!-- inicio Botton -->
        <div class="center-align">
          <button class="btn waves-effect waves-light" type="submit">Guardar
              <i class="material-icons right">save</i>
          </button>
        </div>
        <!-- End Botton -->
              
      </form>
    </div>
  </div>



 
  <div class="container">
    <div class="row">
      <!-- Inicio de formulario DATOS OPTIMICE -->
      
        <!-- fin de formulario DATOS OPTIMICE --> 
      </form>
    </div>
  </div>




<br><br><br><br>
    
     





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
      Made by <a class="brown-text text-lighten-3" href="http://segasi.cl">Segasi.cl</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="{{ asset('js/app.js') }}"></script>
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
   <script>
    $(document).ready(function() {
    $('select').material_select();
  });
        
   </script>


  </body>
</html>
