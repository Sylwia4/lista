
<?php
include('db.php');
if($_REQUEST['miasto'])
{
	$miasto=$_REQUEST['miasto'];
	if($miasto==1){echo "<option>Wybierz Miasto miasto=1</option>";}

	else
	{
	$query = mysqli_query($link, "SELECT DISTINCT miasto FROM wycieczki where kraj = '$miasto'");
	echo '<option selected="selected" >Wybierz Miasto</option>';
	while($rekord = mysqli_fetch_array($query))
	{
		echo '<option value="'.$rekord['miasto'].'">'.$rekord['miasto'].'</option>';
	}	
	}
}
else
{
	echo "<option>???</option>";
	
}
?>