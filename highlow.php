<?php
//Game picks a random number between 0 and 100
$randNum = rand(0, 100);

//Prompts user to guess the  number 
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
//Guess correct
else {
	fwrite(STDOUT, "YOU GUESS RIGHT!\n");
} 


?>
