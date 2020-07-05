<?
$message="";
    $id=$_GET['id'];
    $insquery="DELETE FROM  manager  WHERE rowid= $id";
    if($db->exec($insquery)){
    echo 'Data is  deleted';
    }
    else {
    echo 'Data is not deleted';
    }


?>
