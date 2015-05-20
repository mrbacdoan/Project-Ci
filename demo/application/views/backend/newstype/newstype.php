<?php
if(isset($type) && $type=="form")
{
	include('newstype_form.php');
}
else
{
	include('newstype_list.php');
}
?>