<?php
  class Anagram
  {
      public $first_word;
      public $word_list;

      function checkWord($first_word, $word_list)
      {
          $this->first_input = $first_word;
          $this->word_list = array($word_list);

          if(!(ctype_alpha($first_word))) {
              return false;
          }
          foreach ($word_list as $i => $word) {
              if(!ctype_alpha($word)) {
                return false;
              }
          }
          foreach ($word_list as $i => $word) {
              if((strcasecmp($first_word,$word) != 0))
              {
                  return false;
              }
          }
          return true;

      }


    // function canAttack($x_start, $y_start, $x_move, $y_move)
    // {
    //     $input_array = array($x_start, $y_start, $x_move, $y_move);
    //     foreach ($input_array as $input) {
    //         if($input > 7 || $input < 0) {//check if numbers are valid
    //             return false;
    //         }
    //     }
    //     if($x_start == $x_move && $y_start == $y_move) {//queen isn't moved
    //         return false;
    //     }
    //     if($x_start == $x_move || $y_start == $y_move) { //horiz or vert move
    //         return true;
    //     }
    //     $x_difference = abs($x_start - $x_move);
    //     $y_difference = abs($y_start - $y_move);
    //
    //     if($x_difference != $y_difference) {
    //         return false;
    //     }
    //
    //     return true;
    // }
  }

?>
