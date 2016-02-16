<?php
    class Person
    {
        public $allergyScore;

        function __construct()
        {
            $this->allergyScore = 0;
        }

        function makeArray($user_allergy_array)
        {
            $user_allergy_array = explode(" ", $user_allergy_array);

            return $user_allergy_array;
        }

        function findScore($user_allergy_array)
        {
            $allergyScore = 0;
            $allergen_array = array("eggs" => 1, "peanuts" => 2, "shellfish" => 4, "strawberries" => 8, "tomatoes" => 16, "chocolate" => 32, "pollen" => 64, "cats" => 128);

            foreach ($user_allergy_array as $user_allergy)
            {
                foreach ($allergen_array as $allergen => $score)
                {
                    if($user_allergy == $allergen)
                    {
                        $allergyScore += $score;
                    }
                }
            }

            return $allergyScore;
            
        }


    }
?>
