<?php

/**
 * URL: https://leetcode.com/problems/two-sum
 * Submission URL: https://leetcode.com/problems/two-sum/submissions/1551626182/
 */

class Solution
{

    /**
     * @param int[] $nums
     * @param int $target
     * @return int[]
     */
    function twoSum($nums, $target)
    {
        $seen = [];
        for ($i = 0; $i < count($nums); $i++) {
            $diff = $target - $nums[$i];
            if (array_key_exists($nums[$i], $seen)) {
                return [$seen[$nums[$i]], $i];
            } else {
                $seen[$diff] = $i;
            }
        }
    }
}

$solution = new Solution();
print_r($solution->twoSum([2,7,11,15], 9));
print_r($solution->twoSum([3,2,4], 6));
