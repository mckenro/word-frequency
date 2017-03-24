<?php
    class RepeatCounter
    {
        function countRepeats($input_sentence, $input_word)
        {
            $lower_sentence = strtolower($input_sentence);
            $lower_word = strtolower($input_word);

            if ($lower_sentence == $lower_word)
            {
                return true;
            } elseif ($lower_sentence != $lower_word)
            {
                return false;
            }

        }
    }
?>
