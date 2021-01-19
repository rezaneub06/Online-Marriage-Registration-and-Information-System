<?php session_start();
if(isset($_REQUEST["user"])=="Varify")
{
    require_once("mainDatabase.php");
    $conn=DataBaseConnection::getMysqlConnection();
    $sql="select password from  users where password=:password";
    $pst=$conn->prepare($sql);
    $pst->bindParam(":password",$_REQUEST["password"]);
    $pst->execute();
    if($pst->rowCount())
    {
       header("location: ../view/forgotpassword");
    } 
    else{
        $_SESSION["old"]="password Does Not Match..!";
        header("location: ../view/varifypassword");
    }
}
else{
    require_once("mainDatabase.php");
    $conn=DataBaseConnection::getMysqlConnection();
    $sql="select password from  Admin where password=:password";
    $pst=$conn->prepare($sql);
    $pst->bindParam(":password",$_REQUEST["password"]);
    $pst->execute();
    if($pst->rowCount())
    {
       header("location: ../admin/forgotpassword");
    } 
    else{
        $_SESSION["old"]="password Does Not Match..!";
        header("location: ../view/varifypassword");
    }
}
?>