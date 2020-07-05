<?
include "php/SQLiteConnection.php"
$query="SELECT rowid, * FROM manager";
$res=$db->query($query);
?>
<!DOCTYPE html>
<html>
<head>
<title>List</title>
<link rel="stylesheet" type="text/css" href="style.css"> 
</head>
<body>
<div>
<a href="Create.html">Add new</a>
<table width="100%">
<tr>
 <td>Name</td>
<td>E-mail</td> 
<td>Age</td>
</tr>
<? while($row=$res->fetchArray()) { ?>
<tr>
<td> <? echo $row['namefield'];  ?> </td>
<td> <? echo $row['emailfield']; ?></td>
<td> <? echo $row['agefield'];   ?></td>
<td> <a href="Update.php?<? echo $row['rowid']; ?>">Edit</a> | <a href="Delete.php?<? echo $row['rowid']; ?>">Delete</a> |                                   
 </td>
</tr>
<? }  ?>
</div>
</body>
</html>
