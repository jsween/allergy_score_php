<?php

    require_once "src/Person.php";

    class PersonTest extends PHPUnit_Framework_TestCase
    {
        function test_make_array()
        {
            //Arrange
            $test_user_input = new Person;
            $user_allergy= "eggs cats";

            //Act
            $result = $test_user_input->makeArray($user_allergy);

            //Assert
            $this->assertEquals(["eggs","cats"], $result);
        }

        function test_find_score_eggs()
        {
            //Arrange
            $test_user_input = new Person;
            $user_allergy= ["eggs","cats"];

            //Act
            $result = $test_user_input->findScore($user_allergy);

            //Assert
            $this->assertEquals(129, $result);
        }
        function test_find_score_cats()
        {
            //Arrange
            $test_user_input = new Person;
            $user_allergy= ["cats"];

            //Act
            $result = $test_user_input->findScore($user_allergy);

            //Assert
            $this->assertEquals(128, $result);
        }

    }

?>
