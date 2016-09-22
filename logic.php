<?php 
/* get the list of words into an array */
$wordList =  file ( "./file/wordlist.txt" );

$password = ""; /*variable to hold password*/

# array to store user input 
$config['word_num']= 2; /* minimum 2 words */
$config['number']= false;
$config['symbol']= false;
$config['case']= false;

/* loop through $_GET and check for input and record the value  */
foreach ($_GET as $name => $value){
	if ($value){
		$config[$name]= $value;
	}
}

/* generate password*/
for ($i = 1; $i <= (int)($config['word_num']); $i++) { 
	$index = rand(0, count($wordList) - 1);
	$word = $wordList[$index];
	# use hyphen after second word 
	if ($i >= 2) {
		# if the user selects 'All upper case", convert the password into uppercase 
		if($config['case'] == 'upper'){
			$password .= "-" . strtoupper(trim($word));
		}else{ # else keep it lower case 
			$password .= "-" . trim($word);
		}
	}else{
		# if the user selects 'All upper case", convert the password into uppercase
		if($config['case'] == 'upper'){
			$password .= strtoupper(trim($word));
		}else{ # else keep it lower case 
			$password .= trim($word);;
		}
		
	}
}
/* append a random symbol from the given symbol array if 'add a symbol' option is checked*/
$symbol = array("!","@","#","$","%","&");
if($config['symbol']){
	$index = rand(0, count($symbol) - 1);
	$password .= $symbol[$index];
}

/* append a random number between 0 and 9 if 'add a number' option is checked*/ 
if($config['number']){
	$number = rand(0, 9);
	$password .= $number;
}