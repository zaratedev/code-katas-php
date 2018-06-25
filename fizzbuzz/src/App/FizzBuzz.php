<?php

namespace App;

class FizzBuzz
{
    public function execute($number) {

        $output = '';

        if ($number % 3 == 0) $output = 'fizz';

        if ($number % 5 == 0) $output .= 'buzz';

        if ($output) return $output;

        return $number;
    }

    public function executeUpTo($number) {

        $output = [];

        foreach (range(1, $number) as $i) {
            $output[] = $this->execute($i);
        }

        return $output;
    }
}
