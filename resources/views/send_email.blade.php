<!DOCTYPE html>
<html>
 <head>
  <title>How Send an Email in Laravel</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="boostrap/css/bootstrap.min.css">
	
    <!-- data tables css basico -->
    <link rel="stylesheet" type="text/css" href="datatables/datatables.min.css" />
    <!-- datatablesestiloboostrap 4 css  -->
    <link rel="stylesheet" type="text/css" href="datatables/DataTables-1.10.18/css/datatables.bootstrap4.min.css">
    <!-- font awesome con cdn  -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" 
    integrity="sha384-oS3vJWV+0UjzBFQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <style type="text/css">
   .box{
    width:600px;
    margin:0 auto;
    border:1px solid #ccc;
   }
   .has-error
   {
    border-color:#cc0000;
    background-color:#ffff99;
   }
  </style>
 </head>
 <body>

  <br />
  <br />
  <br />
  <div class="container box">
   <h3 align="center">!!! Por favor introduzca sus datos y el comentario para hacernoslo llegar !!!</h3><br />
   @if (count($errors) > 0)
    <div class="alert alert-danger">
     <button type="button" class="close" data-dismiss="alert">×</button>
     <ul>
      @foreach ($errors->all() as $error)
       <li>{{ $error }}</li>
      @endforeach
     </ul>
    </div>
   @endif
   @if ($message = Session::get('success'))
   <div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
           <strong>{{ $message }}</strong>
   </div>
   @endif
<form action="{{ route('emailsend') }}" method="GET">
    {{ csrf_field() }}
    <table border="0">
        <tr>
            <th>Nombre:</th>
            <td>
                <input type="text" name="nombre">
            </td>
        </tr>
        <tr>
            <th>E-mail:</th>
            <td>
                <input type="text" name="email">
            </td>
        </tr>
        <tr>
            <th>Asunto:</th>
            <td>
                <input type="text" name="asunto">
            </td>
        </tr>
        <tr>
            <th>Contenido:</th>
            <td>
                <textarea name="contenido"></textarea>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" value="Enviar">
            </td>
        </tr>
    </table>
    </form>

  </div>
 </body>
</html>