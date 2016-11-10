<div id ="intro">
<?php echo "Welcome ";
if(isset($_SESSION['user_name'])){
	echo $_SESSION['user_name'];
}else{
	echo "Guest";
?>
</div>
