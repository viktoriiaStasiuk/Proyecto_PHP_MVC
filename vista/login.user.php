<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Next Travel</title>
        <link href="https://fonts.googleapis.com/css?family=Seaweed+Script" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../css/estilo.css" />
        <link rel="stylesheet" type="text/css" href="css/estilo.css" />
    </head>
    <body>
    <div class="uno">Next travel</div> 
    <div class="dos">
           <a href="../index.php">HOME</a>&#160; &#160; 
           <a href="registarse.user.php">Sign Up</a>
    </div> 
    <div class="login">
        <form action="../index.php" method="get">
        <input type="hidden" name="mod" value="user">
        <input type="hidden" name="ope" value="log">

            <h1>Log in</h1>

                <label for="uasario">Username: </label>
                <input id="usuario" type="text" name="usuario" required="" placeholder="Usuario"/>
                <br/>
                <label for="password">Password: </label>
                <input id="password" type="password" name="password" required="" placeholder="Contraseña"/>
                <br/>
                <button type="submit">Login</button>              
         </form>
    </div>        
    </body>
</html>