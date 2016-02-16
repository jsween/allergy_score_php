<?php
    class Change
    {
        function giveChange($user_change)
        {
            $final_change = array(0,0,0,0);
            $currency = array(25, 10, 5, 1);
            for($i = 0; $i < 4; $i++) {
                while($user_change > ($currency[$i] - 1)) {
                    $final_change[$i] += 1;
                    $user_change -= $currency[$i];
                }
            }

        return $final_change[0] . " quarters " . $final_change[1] . " dimes " . $final_change[2] . " nickels " . $final_change[3] . " pennies ";
            // $final_change = array();
            // //quarters
            // $quarters = floor($user_change/25);
            // array_push($final_change, $quarters);
            // $remainder = floor($user_change % 25);
            // //dimes
            // $dimes = floor($remainder/10);
            // array_push($final_change, $dimes);
            // $remainder = floor($remainder % 10);
            // //nickels
            // $nickels = floor($remainder/5);
            // array_push($final_change, $nickels);
            // $remainder = floor($remainder % 5);
            // //pennies
            // $pennies = floor($remainder/1);
            // array_push($final_change, $pennies);
            // $remainder = floor($remainder % 1);

        //  return $final_change[0] . " quarters " . $final_change[1] . " dimes " . $final_change[2] . " nickels " . $final_change[3] . " pennies ";
        }
    }

?>
