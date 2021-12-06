<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        table {
            margin: 150px;
            border: 1px solid;
            background-color: #eee;
        }
        td {
            padding: 10px;
            border: 0px;
        }
        th {
            border-bottom: 1px solid;
            background-color: #ddd;
        }
    </style>
</head>
<body>
    <form action="homee.php" method="post">
        <table>
            <tr>
                <th colspan="2" align="center">LOGIN</th>
            </tr>
            <tr>
                <td>Username: </td>
                <td><input type="text" name="uname" placeholder="Username" autocomplete="off"></td>
            </tr>
            <tr>
                <td>Password: </td>
                <td><input type="password" name="pwd" placeholder="Password" autocomplete="off"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="login" value="Login"></td>
            </tr>
        </table>
    </form>
</body>
</html>