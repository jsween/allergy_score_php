<?php
    class Change
    {
    
        function giveChange($user_change)
        {
            $final_change = array();
            //quarters
            $quarters = floor($user_change/25);
            array_push($final_change, $quarters);
            $remainder = floor($user_change % 25);
            //dimes
            $dimes = floor($remainder/10);
            array_push($final_change, $dimes);
            $remainder = floor($remainder % 10);
            //nickels
            $nickels = floor($remainder/5);
            array_push($final_change, $nickels);
            $remainder = floor($remainder % 5);
            //pennies
            $pennies = floor($remainder/1);
            array_push($final_change, $pennies);
            $remainder = floor($remainder % 1);

        return $final_change;
        }
    }

?>
