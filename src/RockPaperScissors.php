<?php
    class RockPaperScissors
    {
        function playGame($p1)
        {
            $computer_throw = array('Rock', 'Paper', 'Scissors');
            $p2 = array_rand($computer_throw);

            if ((($p1 == 'Rock') && ($p2 == 3)) || (($p1 == 'Paper') && ($p2 == 1)) || (($p1 == 'Scissors') && ($p2 == 2)))
            {
                return 'You win!';
            }
            elseif ($p1 == $p2)
            {
                return 'Draw. Play again.';
            }
            else
            {
                return 'You lose';
            }
        }
    }
 ?>
