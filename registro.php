<!doctype html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Usuario</title>
    <style>
        body{
          box-sizing: border-box;
          font-family: Arial, Helvetica, sans-serif;
          display: flex;
          justify-content: center;
          align-items: center;
          min-height: 100vh;  
        }
        form{
            box-shadow: 0 0 20px rgb(0, 0, 0, 0.2);
            padding: 50px 35px;
            border-radius: 25px;
            display: flex;
            flex-direction: column;
            text-align: center;
            width: 380px;
        }
        .input-wrapper{
            position: relative;
            width: 305px;
            margin-bottom: 35px;
        }
        input{
            color: #0D0D0D;
            padding: 20px 15px 20px 60px;
            width: 100%;
            border-radius: 25px;
            border: 0;
            box-shadow: 0 0 20px rgb(192, 203, 251, 0.7);
            outline: none;
            font-size: 16px;
        }
        input::placeholder{
            font-size: 16px;
            color: #BBBBE2;

        }
        .input-icon{
            position: absolute;
            height: 30px;
            width: 30px;
            left: 20px;
            top: 50%;
            transform: translateY(-55%);
        }
        .btn{
            padding: 20px;
            background: linear-gradient(90deg, rgb(3, 192, 3)25%,rgb(148, 119, 119)100%);
            box-shadow: 0 0 20px rgba(192, 203, 251, 0.7);
            color: #FFFFFF;
            text-transform: uppercase;
            font-size: 14px;
            cursor: pointer;
        }
        .btn:hover{
            background: rgb(118, 196, 2);
        }
        .success{
            position: absolute;
            top: 50px;
            color: rgb(17, 186, 17);
            font-size: 18px;
        }
        .error{
            position: absolute;
            top: 50px;
            color: red;
            font-size: 18px;
        }

        @media(max-width:991px){
            body{
                padding: 10px;
            }
            form{
                padding: 20px;
                width: 100%;
            }
            .input-wrapper{
                position: relative;
                width: 88%;
                margin-bottom: 35px;
            }
            input{
                padding: 20px 0px 20px 45px;
            }
            .input-icon{
                height: 20px;
                width: 20px;
            }
        }
    </style>
</head>

<body>
    <form action="registroUser.php" method="post">
   
        <h2>¡Hola! Inicia tu registro.</h2>
   
     <div class="input-wrapper">
         <input type="text" id="username" name="username" placeholder="Nombre de Usuario">
         <img class="input-icon" src="imagenes/userregister.png" alt="">
        </div>
     <div class="input-wrapper">
         <input type="password" id="password" name="password" placeholder="Contraseña">
         <img class="input-icon" src="imagenes/passwordregister.png" alt="">
        </div>
      <input class="btn" type="submit" name="register" value="Enviar">
    </form>

</body>
</html>