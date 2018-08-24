<?php
include "crud.php";
$crud = new Crud();

$logindata = json_decode(file_put_contents("php://input"));
if(sizeof($logindata)!=0){

    $index_no=$logindata->index_signin;
    $password=$logindata->password_signin;

    $query="SELECT indexno,password,type FROM login WHERE indexno='$logindata->index_signin'";
    $data=$crud->getData($query);
    if($data[0]["password"]==$password){
        echo json_encode($data[0]);
    }
}

?>