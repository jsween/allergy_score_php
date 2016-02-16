<?php

    require_once "src/Anagram.php";

    class ChangeTest extends PHPUnit_Framework_TestCase
    {
        function test_for_quarters()
        {
            //Arrange
            $test_user_input = new Change;
            $user_change= 75;

            //Act
            $result = $test_user_input->giveChange($user_change);

            //Assert
            $this->assertEquals([3,0,0,0], $result);
        }
        function test_for_dimes()
        {
            //Arrange
            $test_user_input = new Change;
            $user_change= 70;

            //Act
            $result = $test_user_input->giveChange($user_change);

            //Assert
            $this->assertEquals([2,2,0,0], $result);
        }
        function test_for_nickels()
        {
            //Arrange
            $test_user_input = new Change;
            $user_change= 65;

            //Act
            $result = $test_user_input->giveChange($user_change);

            //Assert
            $this->assertEquals([2,1,1,0], $result);
        }
        function test_for_pennies()
        {
            //Arrange
            $test_user_input = new Change;
            $user_change= 4;

            //Act
            $result = $test_user_input->giveChange($user_change);

            //Assert
            $this->assertEquals([0,0,0,4], $result);
        }

        // function test_for_1_quarter()
        // {
        //     //Arrange
        //     $test_user_input = new Change;
        //     $user_change= 25;
        //
        //     //Act
        //     $result = $test_user_input->giveChange($user_change);
        //
        //     //Assert
        //     $this->assertEquals([1,0,0,0], $result);
        // }
        // function test_for_dimes()
        // {
        //     //Arrange
        //     $test_user_input = new Change;
        //     $user_change= 35;
        //
        //     //Act
        //     $result = $test_user_input->giveChange($user_change);
        //
        //     //Assert
        //     $this->assertEquals([1,1,0,0], $result);
        // }
        // function test_for_nickels()
        // {
        //     //Arrange
        //     $test_user_input = new Change;
        //     $user_change= 24;
        //
        //     //Act
        //     $result = $test_user_input->giveChange($user_change);
        //
        //     //Assert
        //     $this->assertEquals([0,2,0,4], $result);
        // }
        // function test_for_pennies()
        // {
        //     //Arrange
        //     $test_user_input = new Change;
        //     $user_change= 67;
        //
        //     //Act
        //     $result = $test_user_input->giveChange($user_change);
        //
        //     //Assert
        //     $this->assertEquals([2,1,1,2], $result);
        // }

    }

?>
