<?php
    require_once 'src/RockPaperScissors.php';

    class RockPaperScissorsTest extends PHPUnit_Framework_TestCase
    {
        function test_play_draw()
        {
            //Arrange
            $test_RockPaperScissors = new RockPaperScissors;
            $p1 = 'Rock';
            $p2 = 'Rock';

            //Act
            $result = $test_RockPaperScissors->playGame($p1, $p2);

            //Assert
            $this->assertEquals('Draw. Play again.', $result);
        }

        function test_play_rock()
        {
            //Arrange
            $test_RockPaperScissors = new RockPaperScissors;
            $p1 = 'Rock';
            $p2 = 'Scissors';

            //Act
            $result = $test_RockPaperScissors->playGame($p1, $p2);

            //Assert
            $this->assertEquals('Player 1', $result);
        }
    }
 ?>
