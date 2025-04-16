<?php
function generateRandomNumbers() {
    $random_numbers = array();
    for ($i = 0; $i < 10; $i++) {
        array_push($random_numbers, rand(1, 100));
    }
    print_r($random_numbers);
}
generateRandomNumbers();