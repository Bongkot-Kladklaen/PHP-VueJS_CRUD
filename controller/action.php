<?php 

$path = realpath(dirname(__FILE__));
require_once $path."../../config/database.php";

$request_data = json_decode(file_get_contents("php://input"));

if ($request_data->action == "insert") {
    $data = array(":fname"=>$request_data->fname, ":lname"=>$request_data->lname);
    $sql = "INSERT INTO tb_users(fname,lname) VALUES(:fname,:lname)";
    $query = $conn->prepare($sql);
    $query->execute($data);

    $output = array("message"=>"Insert Complete");
    echo json_encode($output);
}

if ($request_data->action == "getAll") {
    $sql = "SELECT * FROM tb_users";
    $query = $conn->prepare($sql);
    $query->execute();

    while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
        $data[]=$row;
    }
    echo json_encode($data);
}

if ($request_data->action == "getEditUser") {
    $sql = "SELECT * FROM tb_users WHERE id = $request_data->id";
    $query = $conn->prepare($sql);
    $query->execute();

    while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
        $data['id'] = $row['id'];
        $data['fname'] = $row['fname'];
        $data['lname'] = $row['lname'];
    }
    echo json_encode($data);
}

if ($request_data->action == "update") {
    $data = array(":fname"=>$request_data->fname, ":lname"=>$request_data->lname, ":id"=>$request_data->id);
    $sql = "UPDATE tb_users SET fname=:fname, lname=:lname WHERE id=:id";
    $query = $conn->prepare($sql);
    $query->execute($data);

    $output = array("message"=>"Update Complete");
    echo json_encode($output);
}

if ($request_data->action == "getDeleteUser") {
    $sql = "DELETE FROM tb_users WHERE id=$request_data->id";
    $query = $conn->prepare($sql);
    $query->execute();

    $output = array("message"=>"Delete Complete");
    echo json_encode($output);
}


?>