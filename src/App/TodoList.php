<?php

declare(strict_types = 1);

namespace App;

require_once '../utility.php';

class TodoList
{
    private string $name;
    private array $todoItems;

    public function __construct(string $name)
    {
        $this->name = $name;
        $this->todoItems = [];
    }

    public function addTodoItem(TodoItem $item): void
    {
        $this->todoItems[] = $item;
    }
}

##################### TESTCASE #########################

$list = new TodoList("lijst 1");

var_dump($list);

$item = new TodoItem("item 1", "moet even gebeuren", \Priority::medium);

$list->addTodoItem($item);

prettyPrint($list);