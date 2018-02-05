 <html>
    <head>
     
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
       <!-- Compiled and minified CSS -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<!-- Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
          
	<?php
		include('db.php');
	?>
	
	
	
 <div class="row teal lighten-2">
 <center>
      <div class="col s12" >
		<div class="col s4">
		</br>
		<div class="card-panel"> 
		
			  
				<label>Kraj</label>
					<select  name="kraj" class="browser-default kraj">
					  <option selected="selected" disabled selected>Wybierz Kraj</option>
					  <?php
					
						$query = mysqli_query($link, "SELECT DISTINCT kraj FROM wycieczki");
						while($rekord = mysqli_fetch_array($query))
						{
								echo '<option value="'.$rekord['kraj'].'">'.$rekord['kraj'].'</option>';
						}
					 ?>
					</select>
				
				
				<label>Miasto</label>
					<select name="miasto" class="miasto browser-default">
					  <option selected="selected" disabled selected>Wybierz Miasto</option>
					</select>

				<label>Zabytek</label>
					<select name="zabytek" class="zabytek browser-default">
					  <option selected="selected" disabled selected>Wybierz Zabytek</option>
					</select>
					
				
		
		</div>
		</div>
		
		<div class="col s8">
		
		  <div class="row">
			<div name='opis' class="opis col s12 m6">

			  </div>
			</div>
			
		 
		 </div>
		
		
		</div>
	  </div>
</center>
 </div>
          
		  
		  

	

	<script "text/javascript">
	$(document).ready(function()
	{
		$(".kraj").change(function()
		{
		var kraj=$(this).val();
		var kraj_String = 'kraj='+ kraj;

		$.ajax
		({
			kraje: "POST",
			url: "ajax.php",
			data: kraj_String,
			cache: false,
			success: function(miasto)
			{ 
				$(".miasto").html(miasto);
			} 
		});

		});
		
		$(".miasto").change(function()
		{
		var miasto=$(this).val();
		var miasto_String = 'miasto='+ miasto;

		$.ajax
		({
			miasta: "POST",
			url: "ajax.php",
			data: miasto_String,
			cache: false,
			success: function(zabytek)
			{ 
				$(".zabytek").html(zabytek);				
			} 
		});

		});
		
		
		$(".zabytek").change(function()
		{
		var zabytek=$(this).val();
		var zabytek_String = 'zabytek='+ zabytek;

		$.ajax
		({
			opisy: "POST",
			url: "ajax.php",
			data: zabytek_String,
			cache: false,
			success: function(opis)
			{ 
				$(".opis").html(opis);
			} 
		});

		});

		
	});
	</script>
	</body>
</html>