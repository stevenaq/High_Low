<?php
//Game picks a random number between 0 and 100
$randNum = mt_rand(0, 100);

//Prompts user to guess the  number 
do {
fwrite(STDOUT, 'Guess a number between 1 and 100: ');
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
