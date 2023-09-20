<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<center>
    <h1>Calculation</h1>
    <form action="cal" method="POST">
        @csrf
        <table>
            <tr>
                <td>Enter Your First Number 1</td>
                <td><input type="text" name="txt1"></td>
            </tr>

            <tr>
                <td>Enter Your First Number 2</td>
                <td><input type="text" name="txt2"></td>
            </tr>


            <tr>
                <td>Enter Your  Operator</td>
                <td><input type="text" name="txt3"></td>
            </tr>

<tr>
    <td></td>
    <td><input type="submit" value="Calculation"></td>
</tr>

        </table>
    </form>

<?php 

if(isset($_SESSION["res"]))
{
    echo $_SESSION["res"];
}

?>

</center>
    
</body>
</html>