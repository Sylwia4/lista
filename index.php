<html>
<body>

<?php
	include('db.php');
?>

<label>Kraj:</label>
<select name="kraj" class="kraj">
	<option selected="selected" value="0">Wybierz Kraj</option>
	<?php
	
		$query = mysqli_query($link, "SELECT DISTINCT kraj FROM wycieczki");
		while($rekord = mysqli_fetch_array($query))
		{
				echo '<option value="'.$rekord['kraj'].'">'.$rekord['kraj'].'</option>';
		}
	 ?>
</select><br/><br/>

<label>Miasto :</label>
<select name="miasto" class="miasto">
	<option selected="selected" >Wybierz Miasto</option>
</select>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script kraje="text/javascript">
$(document).ready(function()
{
	$(".kraj").change(function()
	{
	var miasto=$(this).val();
	var miasto_String = 'miasto='+ miasto;

	$.ajax
	({
		kraje: "POST",
		url: "ajax.php",
		data: miasto_String,
		cache: false,
		success: function(miasto)
		{ 
			$(".miasto").html(miasto);
		} 
	});

	});
});
</script>
</body>
</html>