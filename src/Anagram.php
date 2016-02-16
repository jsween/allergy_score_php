<?php
  class Anagram
  {
      public $first_word;
      public $word_list;
      public $anagram_array;
      public $sorted_array;
      public $sorted_word;

      function checkWord($first_word, $word_list)
      {
          $this->first_input = $first_word;
          $this->word_list = array($word_list);
          $anagram_array = array();
          $sorted_array = array();

        //   if(!(ctype_alpha($first_word))) {
        //       return false;
        //   }
          $word_list = explode(" ", $word_list);
        //   foreach ($word_list as $i => $word) {
        //       if(!ctype_alpha($word)) {
        //         return false;
        //       }
        //   }
        //   foreach ($word_list as $i => $word) {
        //       if((strcasecmp($first_word,$word) == 0))
        //       {
        //           array_push($anagram_array, $word);
        //       }
        //   }

          $sorted_word = str_split($first_word, 1);
          asort($sorted_word);
          $new_sorted_word = array();
          foreach ($sorted_word as $letter) {
              array_push($new_sorted_word, $letter);
          }
          $new_sorted_word = join("", $new_sorted_word);

          foreach ($word_list as $i => $word) {
              $word = str_split($word, 1);
              asort($word);
              $new_word = array();
              foreach($word as $letter) {
                  array_push($new_word, $letter);
              }
              $new_word = join("", $new_word);
              if(strcasecmp($new_sorted_word, $new_word) == 0) {
                  array_push($anagram_array, $word_list[$i]);
              }

            //   $word = asort($word);
            //   $word = join(" ", $word);
            //   if (strcasecmp($sorted_word, $word) == 0)
            //   {
            //       array_push($anagram_array, $word_list[$i]);
            //   }
          }


          return $anagram_array;

      }
  }

?>
