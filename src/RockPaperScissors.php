<?php
    class RockPaperScissors
    {
        function playGame($p1, $p2)
        {
            if ($p1 == $p2)
            {
                return 'Draw. Play again.';
            }
            else
            {
                if ((($p1 == 'Rock') && ($p2 == 'Scissors')) || (($p1 == 'Paper') && ($p2 == 'Rock')) || (($p1 == 'Scissors') && ($p2 == 'Paper')))
                {
                    return 'Player 1';
                }
                else
                {
                    return 'Player 2';
                }
            }
        }
    }

 ?>
