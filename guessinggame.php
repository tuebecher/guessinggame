<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="author" content="Tue Becher" />
<title>Tues mostly fantastic guessing game</title>
</head>
<body>
<h1>Guess the correct answer</h1>
<p>Find the Answer to the Ultimate Question of Life, the Universe, and Everything</p>

<?php
$guess = filter_input(INPUT_GET, 'guess', FILTER_VALIDATE_INT);

if(!empty($guess)) {
	echo 'Your guess was '.$guess.'...<br />'.PHP_EOL;
	if ($guess == 42) {
		echo '<h2>You did it :-) <a href="http://bit.ly/ubitO4">Verify result using google</a></h2>';
	}
	else if ($guess < 42) {
		echo 'But '.$guess.' is not the answer, you have to guess on a larger number...';
	}
	else {
		echo 'But '.$guess.' is not the answer, you have to guess on a smaller number...';
	}
}
?>

<p>
<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
	<fieldset>
    	<legend>Guess on a number from 1 to 100</legend>
    	<input name="guess" type="number" min="1" max="100" />
    	<input type="submit" value="Check my answer" />
	</fieldset>
</form>
</p>
</body>
</html>