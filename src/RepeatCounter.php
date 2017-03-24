<?php
    class RepeatCounter
    {
        function countRepeats($input_sentence, $input_word)
        {
            $lower_sentence = strtolower($input_sentence);
            $lower_word = strtolower($input_word);
            $punctuation_array = array(",","!","#","$","&","*","(",")","-","=","+","<",">","[","]","{","}",":",";","'",'"',".","?","/","~","_","%","|");
            $no_punc_sentence = str_replace($punctuation_array, " ", $lower_sentence);
            $sentence_array = explode(" ", $no_punc_sentence);
            $word_count = 0;
            $no_match = "Sorry, that sentence does not contain your count word.";

            foreach ($sentence_array as $word){
              if ($word == $lower_word)
              {
                  $word_count = $word_count + 1;
              }
            }
            if ($word_count >= 1) {
              return $word_count;
            } elseif ($word_count < 1) {
              return $no_match;
            }
        }
    }
?>
