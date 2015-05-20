<?php
if(isset($type) && $type=="form")
{
	include('news_form.php');
}
else
{
	include('news_list.php');
}
?>