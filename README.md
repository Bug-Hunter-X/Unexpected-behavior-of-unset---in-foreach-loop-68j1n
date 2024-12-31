# PHP Foreach Loop and Unset() Bug
This repository demonstrates an uncommon bug in PHP related to the behavior of `unset()` within a `foreach` loop when iterating over an array.  The bug is subtle and can lead to unexpected results, particularly when dealing with associative arrays. The issue arises because modifying the array's structure within the loop affects the iteration process itself.

## How to Reproduce
Clone this repository and run the `bug.php` script. Observe that the output differs from what might be expected when `unset()` is used on an associative array within a `foreach` loop. The solution demonstrates how to address this by using a copy of the array or iterating in reverse.