<?php

/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */

class ListNode
{
    public $val = 0;
    public $next = null;
    function __construct($val = 0, $next = null)
    {
        $this->val = $val;
        $this->next = $next;
    }
}

class Solution
{

    /**
     * @param ListNode $list1
     * @param ListNode $list2
     * @return ListNode
     */
    function mergeTwoLists(ListNode $list1, ListNode $list2) {
        $head = new ListNode();
        $current = $head;

        while ($list1 && $list2) {
            if ($list1->val <= $list2->val) {
                $current->next = $list1;
                $list1 = $list1->next;
            } else {
                $current->next = $list2;
                $list2 = $list2->next;
            }

            $current = $current->next;
        }

        $current->next = $list1 === null ? $list2 : $list1;

        return $head->next;
    }

    function convertFromArray($list = []) : ListNode {
        $head = new ListNode();
        $current = $head;
        foreach ($list as $val) {
            $current->next = new ListNode($val);
            $current = $current->next;
        }
        
        return $head->next;
    }
}

$solution = new Solution();
$result = $solution->mergeTwoLists(
    $solution->convertFromArray([1,2,4]),
    $solution->convertFromArray([1,3,4])
);

print_r($result);