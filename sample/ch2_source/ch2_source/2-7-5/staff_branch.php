<?php

if(isset($_POST['edit'])==true)
{
	header('Location:staff_edit.php');
	exit();
}

if(isset($_POST['delete'])==true)
{
	header('Location:staff_delete.php');
	exit();
}

?>