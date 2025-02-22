<?php

class Solution
{

    /**
     * @param string $s
     * @return bool
     */
    function isValid($s)
    {
        $s = str_split($s);
        $stack = [];
        $openOps = ['(', '[', '{'];
        $closeOps = [')', ']', '}'];
        $opsIndexes = [
            ')' => '(',
            ']' => '[',
            '}' => '{'
        ];

        if (count($s) % 2 !== 0) {
            return false;
        }

        foreach ($s as $val) {
            if (in_array($val, $openOps)) {
                $stack[] = $val;
            } else if (in_array($val, $closeOps) && end($stack) === $opsIndexes[$val]) {
                array_pop($stack);
            } else {
                return false;
            }
        }

        return empty($stack);
    }
}

$solution = new Solution();
// print_r($solution->isValid("(]"));
// print_r($solution->isValid("([])"));
var_dump($solution->isValid("([}}])"));
