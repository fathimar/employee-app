<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
        <div class="row">
            <div class="col col-12 col-sm-2">
            <div class="col col-12 col-sm-8">
            <div class="col col-12 col-sm-2">
            </div>
        </div>
    </div>
    <form method="POST">
    <table class="table">
        <tr>
            <td>employee code</td>
            <td><input name="code" class="form-control" type="text"></td>
        </tr>
        <tr>
            <td>employee name</td>
            <td><input name="name" class="form-control" type="text"></td>
        </tr>
        <tr>
            <td>salary</td>
            <td><input name="sal" class="form-control" type="text"></td>
        </tr>
        <tr>
            <td>designation</td>
            <td><input name="desig" class="form-control" type="text"></td>
        </tr>
        <tr>
            <td></td>
            <td><button name="btn" class="btn btn-info">submit</button></td>
        </tr>
    </table>
    </form>
</body>
</html>
<?php
if(isset($_POST["btn"]))
{
$empcode=$_POST["code"];
$empname=$_POST["name"];
$salary=$_POST["sal"];
$designation=$_POST["desig"];

$connection=new mysqli("localhost","root","","employee");
$sql="INSERT INTO `employee`(`employee code`, `employee name`, `salary`, `designation`) 
VALUES( $empcode,'$empname',$salary,'$designation') ";

$result=$connection->query($sql);
if($result===true)
{
    echo "<script>alert('successfully inserted')</script>";
}
else
{
    echo "<script>alert('error in insertion')</script>";
}


}
?>
