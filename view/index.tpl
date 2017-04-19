<!DOCTYPE HTML>
<html>
<head>
     <title>Test task</title>
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="js/scripts.js"></script>
<link rel="stylesheet" href="css/style.css">



<body>
</body>
<div class="container">
	<h3>Select city</h3>
	<select id="city">
	<option value="" class="label">City</option>
	  <? foreach ($data['city_list'] as $city) {?>
	  	<option value="<?=$city?>"><?=$city?></option>
	  <? } ?>
	</select>
	<div id="buttons">
		<a href="#" class="btn green" id="find_hotel">Find hotel</a>
	</div>	
	<div id="hotel_list">
	</div>
</div>

</html>