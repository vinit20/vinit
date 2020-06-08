<?php
session_start();
if(isset($_SESSION["Uname"]))
{   echo "<h1 align='center' style='margin-top:230px'> You are already login</h1>";

exit();

}

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Example of $_session</title>
  </head>
  <body>
    <form method="post">

<table align="center" style="margin-top:230px">
<tr>
<td> Username </td>
<td> <input type="text" name="username"/></td>
</tr>

<tr>
<td> Password </td>
<td> <input type="password" name="password"/></td>
</tr>



<tr>
<td colspan="2" align="center"> <input type="submit"/></td>
</tr>
</table>
    </form>
  </body>
</html>
<?php
if(isset($_POST['submit']))
{
$_SESSION["Uname"] = $_POST['username'];

header('location:welcome.php');
}
 ?>
