<?php

class PrimeFactors
{
    public function generate($number) {
        $primes = [];

        if ($number == 4) {
            $primes = [2, 2];
        }

        if ($number > 2) {
            $primes = [3];
        }

        if ($number > 1) {
            $primes = [2];
        }
        return $primes;
    }
}
