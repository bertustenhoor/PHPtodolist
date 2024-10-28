<?php

enum Priority
{
    case low;
    case medium;
    case high;
}

function prettyPrint(mixed $item): void
{
    echo '<pre>';
    print_r($item);
    echo '</pre>';
}