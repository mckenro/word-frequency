<?php

    require_once "src/RepeatCounter.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {

        function test_Repeat_OneWord()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $input_sentence = "This";
            $input_word = "This";

            //Act
            $result = $test_RepeatCounter->countRepeats($input_sentence, $input_word);

            //Assert
            $this->assertEquals(true, $result);
        }

        function test_Repeat_MultiWord()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $input_sentence = "Words make sentences of words";
            $input_word = "words";

            //Act
            $result = $test_RepeatCounter->countRepeats($input_sentence, $input_word);

            //Assert
            $this->assertEquals(2, $result);
        }

        function test_Repeat_NoMatch()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $input_sentence = "Words make sentences of words";
            $input_word = "pizza";

            //Act
            $result = $test_RepeatCounter->countRepeats($input_sentence, $input_word);

            //Assert
            $this->assertEquals("Sorry, that sentence does not contain your count word.", $result);
        }

        function test_Repeat_NoCaps()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $input_sentence = "Words";
            $input_word = "words";

            //Act
            $result = $test_RepeatCounter->countRepeats($input_sentence, $input_word);

            //Assert
            $this->assertEquals(1, $result);
        }

        function test_Repeat_NoPunc()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $input_sentence = "words words, Words!";
            $input_word = "words";

            //Act
            $result = $test_RepeatCounter->countRepeats($input_sentence, $input_word);

            //Assert
            $this->assertEquals(3, $result);
        }

    }

?>
