<!DOCTYPE html>
<html lang="es">
<head>
    <title>Next Travel</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="../css/estilo.css" />
</head>
<body>
    <div class="uno">Next travel</div> 
    <div class="dos">
           <a href="../index.php">HOME</a>
    </div> 

<div class="registro">
    <form action="../index.php" method="get"> 
        <input type="hidden" name="mod" value="user">
        <input type="hidden" name="ope" value="reg">
                
        <h1>Registration</h1>
        
        <label for="nom">Name: </label>
        <input id="nom" type="text" name="nom" required placeholder="Nombre" />
        <br/>
        <label for="ape">Surname: </label>
        <input id="ape" type="text" name="ape"  maxlength="10" required placeholder="Apellidos"/>
        <br/>
        <label for="usr">Username: </label>
        <input id="usr" type="text" name="usr" placeholder="Usuario"/>
        <br/>
        <label for="pwd">Password: </label>
        <input id="pwd" type="password" name="pwd" placeholder="Contraseña"/>
        <br/>
        <label for="mail">Email: </label>
        <input id="mail" type="email" name="mail"  placeholder="Email"/>
        <br/>
        <br/>
        <button type="submit" >Register</button>
    </form>
</div>
</body>
</html>