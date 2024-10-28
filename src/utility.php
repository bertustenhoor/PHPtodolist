<?php

enum Priority
{
    case low;
    case medium;
    case high;
}

/**
 * Function to print the argument object in readable format
 *
 * @param mixed $item
 * @return void
 */
function prettyPrint(mixed $item): void
{
    echo '<pre>';
    print_r($item);
    echo '</pre>';
    die();
}