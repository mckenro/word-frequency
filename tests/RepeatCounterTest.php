<?php

    require_once "src/RepeatCounter.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {

        function myFunction()
        {
            //Arrange
            $test_TitleCaseGenerator = new Class;
            $input = "beowolf";

            //Act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //Assert
            $this->assertEquals("Beowolf", $result);
        }

    }

?>
