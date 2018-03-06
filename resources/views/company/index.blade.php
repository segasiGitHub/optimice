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
<main>
  <br><br><br>

  <h3 class="center-align">Datos Generales</h3>


  <div class="container"> 
    <table>
      <thead>
        <tr>
          <th>Id</th>
          <th>Representante Legal</th>
          <th>Rut Representante Legal</th>
        </tr>
      </thead>

      <tbody>
        @foreach($companies as $company)
          
          <tr>
            
            <td>{{ $company->id }}</td>
          
              
            <td><a href="/company/{{ $company->id }}">{{ $company->business }}</a>    </td>
            <td>{{ $company->business_rut }}</td>
            <td><a href="/company/edit/{{$company->id}}"><i class="material-icons">edit</i></a></td>
              

          </tr>
            
        @endforeach
      </tbody>
    </table>

</div>
 
 </main>
 <div class="container">
   <div class="right-align">
      <a href="create" class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">mode_edit</i></a>
    </div> 
    <br>  
</div>

 
   
    <div class="footer-copyright teal">
      <div class="container">
      Made by <a class="brown-text text-lighten-3" href="http://segasi.cl">segasi</a>
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

  </body>
</html>
