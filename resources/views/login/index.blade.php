<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login | Page</title>
</head>
<style>
    tr,h2{
        text-align: center;
    }
    h2{
        text-decoration: underline;
    }
    p{
        color:red; 
        margin:0px;
    }
</style>

<body>
    <form method="post">
        {{@csrf_field()}}
        <br>
        <h2>Login Page</h2>

        <table align="center">
            <tr>
                <td>User Name</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>password</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <p>{{session('message')}}</p>
                </td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="login"></td>
            </tr>

        </table>
    </form>


</body>

</html>
