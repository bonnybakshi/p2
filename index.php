<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>P2 Rajrupa Bakshi - DWA15</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <?php require 'logic.php' ?>
</head>
<body>
<div class='container'>
	<h1 class="center"> <img src="https://openclipart.org/download/190821/Cles-de-serrure-lock-keys.svg" width="50"/> xkcd Password Generator</h1>
	<h3 class="center">CSCI E-15 Dynamic Web Applications - Project 2<br></h3>
	<h2 class="passwordHolder center"> <?php echo $password; ?></h2>

<form  class="center" action="index.php" method="GET">
	<div class="form-group">
	<label for="word_num"> Number of Words
	<input type="number" min="2" max="8" step="1" name="word_num" id="word_num" value="">
	<i>(Min 2 &amp; Max 8)</i>
	</label>
	</div>	
	
	<div class="form-group">
	<label class="form-check-label">
  	<input class="form-check-input" type="checkbox"  name="number" id="number" 
	<?php if($config['number'])  echo "checked"; ?>
  	> Include a number
	</label>
	</div>

	<div class="form-group">
	<label class="form-check-label">
  		<input class="form-check-input" type="checkbox" name="symbol" id="symbol" 
  		<?php if($config['symbol'])  echo "checked"; ?>
  		> Include a symbol
	</label>
	</div>

	<div class="form-group"> 
    <label class="radio-inline">
      <input name="case" type="radio" value="upper" 
      <?php if ($config['case']== "upper") echo "checked"; ?> >
      All upper case
    </label>
  
    <label class="radio-inline">
      <input name="case" type="radio" value="lower" 
      <?php if ($config['case'] == "lower") echo "checked";?> >
      All lower case
    </label>
  </div>

	<div class="form-group">
	<input type='submit' class='btn btn-default button' value='Generate Password'>
	</div>			
</form>

<div class="center">					
<p class='xkcd'>
<p><a href='http://xkcd.com/936/'>Inspired by xkcd password strength</a></p>

<a href='http://xkcd.com/936/'>
<img class='xkcd center' src='http://imgs.xkcd.com/comics/password_strength.png' alt='xkcd password strength'>
</a>
</p>
</div>

	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>