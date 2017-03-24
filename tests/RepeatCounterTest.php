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

    }

?>
