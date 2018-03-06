<!DOCTYPE html>
<html lang="es" xml:lang="es" xmlns="http://www.w3.org/1999/xhtml">
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
      <form class="col s12" method="POST" action="/company" action="/action_page.php">
        {{ csrf_field() }}
        <div class="row">
          <div class="input-field col s6">
            <input id="business" name="business" type="text" class="validate" required value="{{ $company->business }}">
            <label class="active" for="business">Razon Social</label>
          </div>
          <div class="input-field col s6">
            <input id="business_rut" name="business_rut" type="text" data-length="10" required value="{{ $company->business_rut }}">
            <label class="active" for="business_rut">Rut</label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s6">
            <input id="representative" name="representative" type="text" class="validate" required value="{{ $company->representative }}">
            <label class="active" class="active" for="representative">Representate Legal</label>
          </div>

          <div class="input-field col s6">
             <input id="representative_rut" name="representative_rut" type="text" data-length="10" required value="{{ $company->representative_rut }}">
            <label class="active" for="representative_rut">Rut</label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s6">
            <input  id="item" name="item" type="text" class="validate" required value="{{ $company->item }}">
            <label class="active" for="item">Giro</label>
          </div>

          <div class="input-field col s6">
            <input id="county" name="county" type="text" class="validate" required value="{{ $company->county }}">
            <label class="active" for="county">Comuna</label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s6">
            <input id="address" name="address" type="text" class="validate" required value="{{ $company->address }}">
            <label class="active" for="address">Dirección</label>
          </div>
        
          <div class="input-field col s6">
            <input id="schedule" name="schedule" type="text" class="validate" required value="{{ $company->schedule }}">
            <label class="active" for="schedule">Horarios Visita</label>
          </div> 
        </div>

        <div class="row">
          <div class="input-field col s4">
            <input  id="phone" name="phone" type="text" class="validate" required value="{{ $company->phone }}">
            <label class="active" for="phone">Teléfono</label>
          </div>
         
          <div class="input-field col s4">
            <input id="celphone" name="celphone" type="text" class="validate" required value="{{ $company->celphone }}">
            <label class="active" for="celphone">Celular</label>
          </div>

          <div class="input-field col s4">
            <input id="speciality" name="speciality" type="text" class="validate" required value="{{ $company->speciality }}">
            <label class="active" for="speciality">Especialidad</label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s6">
            <input  id="doctor" name="doctor" type="text" class="validate" required value="{{ $company->doctor }}">
            <label class="active" for="doctor">Médico</label>
          </div>
          
          <div class="input-field col s6">
            <input id="email" name="email" type="email" class="validate" required value="{{ $company->email }}">
            <label class="active" for="email">Email</label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s4">
            <input id="contact" name="contact" type="text" class="validate" required value="{{ $company->contact }}">
            <label class="active" for="contact">Contacto</label>
          </div>
          
          <div class="input-field col s4">
             <input  id="contact_phone" name="contact_phone" type="text" class="validate" required value="{{ $company->contact_phone }}">
            <label class="active" for="contact_phone">Celular</label>
          </div>
          
          <div class="input-field col s4">
            <input id="contact_mail" name="contact_mail" type="email" class="validate" required value="{{ $company->contact_mail }}">
            <label class="active" for="contact_mail">Email</label>
          </div>
        </div>
        <!-- End Datos Generales -->
        
        <!-- Inicio Datos de la Sociedad -->
        <br><br><br>
        <h3 class="center-align">Datos de la Sociedad</h3> 
        <div class="row">
          <div class="input-field col s4">
            <input id="partner_name" name="partner_name" type="text" class="validate" required value="{{ $company->partner_name }}">
            <label class="active" for="partner_name">Nombre</label>
          </div>

          <div class="input-field col s2">
            <input id="partner_percentage" name="partner_percentage" type="text" class="validate" required value="{{ $company->partner_percentage }}">
            <label class="active" for="partner_percentage">Porcentaje</label>
          </div>

          <div class="input-field col s2">
            <input id="partner_rut" name="partner_rut" type="text" class="validate" required value="{{ $company->partner_partner_rut }}">
            <label class="active" for="partner_rut">Rut</label>
          </div>

          <div class="input-field col s2">
            <input id="partner_sii" name="partner_sii" type="text" class="validate" required value="{{ $company->partner_sii }}">
            <label class="active" for="partner_sii">SII</label>
          </div>

          <div class="col s2 right-align">
            <a class="btn btn-floating btn-large waves-light"><i class="material-icons">add</i></a>
          </div>
        </div>    
        <!-- End Datos de la Sociedad -->

        <!-- Inicio de formulario DATOS OPTIMICE -->
      <br><br><br>
      <h3 class="center-align">Datos Optimice</h3>
      <form class="col s12">
        <div class="row">
          <div class="input-field col s6">
            <input id="ingress" name="ingress" type="text" class="validate" required>
            <label for="ingress">Fecha de Ingreso de Cliente</label>
          </div>
     
          <div class="input-field col s6">
            <input id="executive" name="executive" type="text" class="validate" required>
            <label for="executive">Ejecutivo a cargo</label>
          </div>
        </div>

        <div class="row">
            <div class="input-field col s6">
              <input id="schedule" name="schedule" type="text" class="validate" required>
              <label for="schedule">Honorario Mes</label>
            </div>

            <div class="input-field col s6">
              <input id="honorary" name="honorary" type="text" class="validate" required>
              <label for="honorary">Honorario Renta</label>
            </div>
        </div>
      
        <div class="row">
          <div class="input-field col s6">
            <select required name="payment" >
              <option value="" disabled selected>Elige una Opcion</option required>
              <option value="1">Transferencia</option>
              <option value="2">Cheque</option>
            </select>
            <label>Modalidad de Pago</label>
          </div>
      
          <div class="input-field col s6">
            <input id="key_sii" name="key_sii" type="text" class="validate" required>
            <label for="key_sii">Clave SII</label>
          </div>
        </div>
      
        <div class="row">
          <div class="input-field col s6">
            <select name="remuneration" required>
              <option value="" disabled selected>Elige una Opcion</option>
              <option required value="1">Transferencia</option>
              <option value="2">Cheque</option>
            </select>
            <label>Remuneración</label>
          </div>

          <div class="input-field col s6">
            <input id="key_previred" name="key_previred" type="text" class="validate" required>
            <label for="key_previred">Clave PreviRed</label>
          </div>
        </div>
       
        <div class="row">     
          <div class="input-field col s6">
            <input id="amount" name="amount" type="text" class="validate" required>
            <label for="amount">Cantidad Liquida</label>
          </div>

          <div class="input-field col s6">
            <select name="tax" required>
              <option value="" disabled selected>Elige una Opcion</option>
              <option value="1">Afecta</option>
              <option value="2">Exenta</option>
            </select>
            <label>Afecta ó Exenta</label>
          </div>
        </div>

        <div class="row">     
          <div class="input-field col s6">
            <select name="remuneration_type" required>
              <option value="" disabled selected>Elige una Opcion</option>
              <option value="1">Casa Particular</option>
              <option value="2">Independiente</option>
              <option value="3">Empleados</option>
            </select>
            <label>Tipo de Remuneración.</label>
          </div>

          <div class="input-field col s6">
            <select name="billing" required>
              <option value="" disabled selected>Elige una Opcion</option>
              <option value="1">Electrónica</option>
              <option value="2">Manual</option>
            </select>
            <label>Facturación</label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s6">
            <select name="ticket" required>
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
            <select name="ticket_monthly" required>
              <option value="" disabled selected>Elige una Opcion</option>
                <option value="1">Optimice</option>
                <option value="2">Clienete</option>
            </select>
            <label>Boleta Mensuales</label>
          </div>

          <div class="input-field col s6">
            <select name="complexity" required>
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
            <label for="textarea1">Observaciones</label>
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
      
      <div class="row">
    <div class="input-field col s6">
      <input value="Alvin" id="first_name2" type="text" class="validate">
      <label class="active" for="first_name2">First Name</label>
    </div>
  </div>

        <!-- fin de formulario DATOS OPTIMICE --> 
      </form>
    </div>
  </div>


<br><br><br><br>
    
     





  
    <div class="footer-copyright page-footer teal">
      <div class="container">
      Made by <a class="brown-text text-lighten-3" href="http://segasi.cl">Segasi.cl</a>
      </div>
    </div>
  


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
  <script>
 $(document).ready(function() {
    Materialize.updateTextFields();
  });
        
  </script>

  <script>
    $(document).ready(function() {
    $('select').material_select();
    $("select[required]").css({position: 'absolute', display: 'inline', height: 0, padding: 0, width: 0});
    });
  </script>

  <script>

  $(document).ready(function() {
    $('select').material_select();
  });
       

  </script>


  </body>
</html>
