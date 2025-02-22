<?php 

/**
 * URL: https://leetcode.com/problems/valid-palindrome/
 */

class Solution {

    /**
     * @param string $s
     * @return bool
     */
    function isPalindrome($s) {
        $s = strtolower($s);
        $s = preg_replace('/[^a-z0-9]/', '', $s);

        $strLength = strlen($s);
        if ($strLength <= 1) {
            return true;
        }

        for ($i = 0; $i < intdiv($strLength, 2); $i ++) {
            $j = $strLength - $i - 1;

            if ($s[$i] !== $s[$j]) {
                return false;
            } 
        }

        return true;
    }
}

$solution = new Solution();
var_dump($solution->isPalindrome("A man, a plan, a canal: Panama"));