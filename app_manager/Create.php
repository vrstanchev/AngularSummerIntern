<?
$message="";
if(isset($_POST['ins_data'] )){
    $name=$_POST['namefield'];
    $email=$_POST['emailfield'];
    $age=$_POST['agefield'];
    $insquery="INSERT INTO manager (name,email,age) VALUES ('$name','$email','$age')";
    if($db->exec($insquery)){
    echo 'Data is  inserted';
    }
    else {
    echo 'Data is not inserted';
    }



}


?>
