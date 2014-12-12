<?php
//If 2 arguments pass and both numbers set to min and max of random generator
//need to check vartype on both
//else do  the regular way with 0 and 100

if ($argc == 3) {
	$randNum = mt_rand($argv[1], $argv[2]);
}else {
	//Game picks a random number between 0 and 100
	$randNum = mt_rand(0, 100);
}

//Prompts user to guess the  number 
do {
fwrite(STDOUT, 'Guess? ');
$userNum = fgets(STDIN);

//Guess too low
	if ($userNum < $randNum){
		fwrite(STDOUT, "HIGHER\n");
	}
//Guess too high
	elseif ($userNum > $randNum){
		fwrite(STDOUT, "LOWER\n");
	}

//Keep going  while guess incorrect	
}while ($userNum != $randNum);
//Guess correct
fwrite(STDOUT, "YOU'RE A FUCKING GENIUS!\n");

exit(0); 
?>
