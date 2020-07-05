<?
$message="";
if(isset($_POST['upddata'] )){
    $id=$_POST['id'];
    $name=$_POST['namefield'];
    $email=$_POST['emailfield'];
    $age=$_POST['agefield'];
    $insquery="UPDATE  manager set name= '$name',email= '$email',age= '$age' WHERE rowid= $id";
    if($db->exec($insquery)){
    echo 'Data is  updated';
    }
    else {
    echo 'Data is not updated';
    }



}
$id=$_GET['id'];
$res=$db->querty($querty);
$data=$res->fetchArray();
?>
