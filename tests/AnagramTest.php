<?php

    require_once "src/Queen.php";

    class QueenTest extends PHPUnit_Framework_TestCase
    {   //check if the xy's between 0-7
        function test_num_valid()
        {
            //Arrange
            $test_canAttack = new Queen;
            $x_start = 0;
            $y_start = 0;
            $x_move = 1;
            $y_move = 1;

            //Act
            $result = $test_canAttack->canAttack($x_start, $y_start, $x_move, $y_move);

            //Assert
            $this->assertEquals(true, $result);
        }
    }  

?>
