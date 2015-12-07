<?php
    class RockPaperScissors
    {
        function playGame($p1)
        {
            $computer_throw = array('Rock', 'Paper', 'Scissors');
            $p2 = array_rand($computer_throw);
            if ($p2 == 1)
            {
                $p2 = 'Rock';
            }
            elseif ($p2 == 2)
            {
                $p2 = 'Paper';
            }
            else
            {
                $p2 = 'Scissors';
            }

            if ((($p1 == 'Rock') && ($p2 == 'Scissors')) || (($p1 == 'Paper') && ($p2 == 'Rock')) || (($p1 == 'Scissors') && ($p2 == 'Paper')))
            {
                $statement = $p1 . " beats " . $p2 . ". You win!";
                return $statement;
            }
            elseif ($p1 == $p2)
            {
                return 'Draw. Play again.';
            }
            else
            {
                $statement = "The computer threw " . $p2 . ". You lose.";
                return $statement;
            }
        }
    }
 ?>
