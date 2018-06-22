<?php

class PrimeFactors
{
    public function generate($number) {
        $primes = [];
        $candidate = 2;

        /*if ($number == 4) {
            $primes = [2, 2];
        }*/

        while ($number > 1) {
            while ($number % $candidate == 0) {
                $primes[] = $candidate;

                $number /= $candidate;
            }

            $candidate++;
        }

        return $primes;
    }
}
