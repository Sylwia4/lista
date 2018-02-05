
<?php
include('db.php');


if(isset($_REQUEST['kraj']))
{
	$kraj=$_REQUEST['kraj'];
	
	if($kraj==1){echo "<option>Wybierz Miasto </option>";}

	else
	{
	$query = mysqli_query($link, "SELECT DISTINCT miasto FROM wycieczki where kraj = '$kraj'");
	echo '<option selected="selected" >Wybierz Miasto</option>';
	while($rekord = mysqli_fetch_array($query))
	{
		echo '<option value="'.$rekord['miasto'].'">'.$rekord['miasto'].'</option>';
	}	
	}
}
else if(isset($_REQUEST['miasto']))
{
	$miasto=$_REQUEST['miasto'];
	if($miasto==1){echo "<option> Wybierz Zabytek</option>";}
	else
	{
		$query = mysqli_query($link, "SELECT DISTINCT id, zabytek FROM wycieczki where miasto = '$miasto'");
		echo '<option selected="selected" >Wybierz Zabytek</option>';
		while($rekord = mysqli_fetch_array($query))
		{
			echo '<option value="'.$rekord['id'].'">'.$rekord['zabytek'].'</option>';
		}	
	}
}
else if(isset($_REQUEST['zabytek']))
{
	$zabytek=$_REQUEST['zabytek'];
	if($zabytek==0){echo "---";}
	else
	{

		$query = mysqli_query($link, "SELECT zabytek, opis, zdjecie FROM wycieczki where id = '$zabytek'");
		while($rekord = mysqli_fetch_array($query))
		{
			echo'<div class="card">
			<div name="card-image" class="card-image">
			 <img name src="images/'.$rekord['zdjecie'].'.jpg">
			  <span class="card-title">'.$rekord['zabytek'].'</span>
			  <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
			</div>
			<div class="opis">';
			
			echo $rekord['opis'];
			echo "</div>";
			
		}
		
		
	}
}
?>