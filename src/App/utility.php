<?php

declare(strict_types=1);

enum Priority
{
    case low;
    case medium;
    case high;
}

/**
 * Function to print the argument object in readable format
 *
 * @param mixed $value
 * @return void
 */
function prettyPrint(mixed $value): void
{
    echo "<pre>";
    print_r($value);
    echo "</pre>";
    die();
}