<!DOCTYPE html>
<html lang="en">
<head>
    <title>Finals!!!</title>
    <link rel="icon" href="img/poll.png">
    <style>
        @font-face{
            font-family: 'Chihaya';
            src: url(font/chihayajun.ttf);
        }
        *{
            font-family: 'Chihaya';
        }
        body{
            background-color: #d8d8d8;
        }
        .table{
            margin: auto;
            margin-top: 200px;
            border-radius: 10px;
            padding: 30px;
            font-size: 2em;
            margin-bottom: 200px;
        }
        input[type=text]{
            width: 100%;
            padding: 12px;
            border: 1px solid #6699cc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            resize: vertical;
            font-size: 20px;
            color: #6699cc;
        }
        input[type="password"]{
            width: 100%;
            padding: 12px;
            border: 1px solid white;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            resize: vertical;
            font-size: 20px;
            color: #6699cc;
           
            /* background-color: black; */
        }
        input[type="password"]:focus{

            color: #6699cc;
        }
        input[type=submit]{
            background-color: #6699cc;
            color: #d8d8d8;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 15px;
            font-family: 'Chihaya';
            font-size: 20px;
            font-weight: bold;
        }
        input[type=submit]:hover{
            background-color: #d8d8d8;
            color: #6699cc;
        }
        .login-header{
            margin-left: auto;
            margin-right: auto;
            color: #d8d8d8;
        }
        h1{
            text-align: center;
        }
        .table{
            background-color: #6699cc;
        }
        label{
            color: #d8d8d8;
        }
    </style>
</head>

<body>
    <form action="handleLogin.php" method="POST">
        <table class="table">
            <tr>
                <td> 
                    <h2 class="login-header">LOG IN</h2>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="name">Username: </label>
                </td>
                <td>
                    <input type="text" name="inputUsername" value="" placeholder="Username here...">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="name">Password: </label>
                </td>
                <td>
                    <input type="password" name="inputPassword" value="" placeholder="Password here...">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="LOGIN" class="btn">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>