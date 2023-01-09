<!-- <p>Hi, This is {{ $data['name'] }}</p>
<p>I have some query like {{ $data['message'] }}.</p>
 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>joyeria Luminosite</title>
</head>
<body text "#cccccc">
    <center>
    <h3>Nosotros</h3>
    <img src="https://i.ibb.co/2h8HVW6/joyeria-luminusite.png" alt="joyeria-luminusite" border="0" />
        
        <hr>
        <h3>Estimado {{ $data['name'] }} </h3><br>
        <br>
        <h2><p>Hemos recibido su mensaje:</p></h2>
         <br>
        <h3>{{ $data['message'] }}</h3><br>
        <br>
        <h3><p>Apreciamos tus comentarios, nos ayuda a mejorar la página</p></h3>
    </center>

</body>
</html>