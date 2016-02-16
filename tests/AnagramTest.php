<?php

    require_once "src/Anagram.php";

    class AnagramTest extends PHPUnit_Framework_TestCase
    {   //check if alpha
        function test_for_all_letters()
        {
            //Arrange
            $test_letter_input = new Anagram;
            $word= "abc";
            $array = array("Abc");

            //Act
            $result = $test_letter_input->checkWord($word,$array);

            //Assert
            $this->assertEquals(true, $result);
        }

        function test_for_non_alpha()
        {
            //Arrange
            $test_letter_input = new Anagram;
            $word= "ab12$";
            $array = array("abc");

            //Act
            $result = $test_letter_input->checkWord($word,$array);

            //Assert
            $this->assertEquals(false, $result);
        }

        function test_for_match()
        {
            //Arrange
            $test_letter_input = new Anagram;
            $word= "cat";
            $array = array("CaT");

            //Act
            $result = $test_letter_input->checkWord($word,$array);

            //Assert
            $this->assertEquals(true, $result);
        }

        // function test_for_word_in_array()
        // {
        //     //Arrange
        //     $test_letter_input = new Anagram;
        //     $word= "cat";
        //     $array = array("CaT");
        //
        //     //Act
        //     $result = $test_letter_input->checkWord($word,$array);
        //
        //     //Assert
        //     $this->assertEquals(true, $result);
        // }

        // function test_for_letter_input()
        // {
        //     //Arrange
        //     $test_letter_input = new Anagram;
        //     $word= "abc";
        //
        //     //Act
        //     $result = $test_letter_input->checkWord($letter);
        //
        //     //Assert
        //     $this->assertEquals(true, $result);
        // }


    }

?>
