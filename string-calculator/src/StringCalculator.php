<?php

class StringCalculator
{
    const MAX_NUMBER_ALLOWED = 1000;

    public function add($numbers) {

        //$numbers = explode(',', $numbers);
        $numbers = $this->parseNumbers($numbers);
        //var_dump($numbers);
        $solution = 0;

        foreach ($numbers as $number) {
            $this->guardAgainsInvalidNumber($number);
            if ($number >= self::MAX_NUMBER_ALLOWED) continue;

            $solution += $number;
        }
        return $solution;
    }

    /**
     * @param $number
     */
    public function guardAgainsInvalidNumber($number)
    {
        if ($number < 0) throw new InvalidArgumentException("Invalid number provided: {$number}");
    }

    /**
     * @param $numbers
     * @return array[]|false|string[]
     */
    public function parseNumbers($numbers)
    {
        return array_map('intval', preg_split('/\s*(,|\\\n)\s*/', $numbers));
    }
}
