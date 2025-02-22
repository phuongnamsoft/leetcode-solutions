<?php 



class Solution {

    /**
     * @param string $s
     * @return bool
     */
    function isValid($s) {
        $s = str_split($s);
        $stack = [];
        $openOps = ['(', '[', '{'];
        $closeOps = [')', ']', '}'];

        if (count($s) % 2 !== 0) {
            return false;
        }

        foreach($s as $val) {
            if (in_array($val, $openOps)) {
                $stack [] = $val;
            } else if (in_array($val, $closeOps) && end($stack) === $openOps[array_search($val, $closeOps)]) { 
                array_pop($stack);
            }
        }

        return empty($stack) ? true : false;
    }
}

$solution = new Solution();
print_r($solution->isValid("(]"));
print_r($solution->isValid("([])"));
print_r($solution->isValid("([}}])"));



