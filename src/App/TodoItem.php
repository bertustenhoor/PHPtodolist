<?php

declare(strict_types = 1);

namespace App;

require '../utility.php';

class TodoItem
{
    private \DateTime $createDate;
    private string $title;
    private string $description;
    private \Priority $priority;
    private bool $isCompleted;

    public function __construct(string $title, string $description, \Priority $priority)
    {
        $this->createDate = new \DateTime();
        $this->title = $title;
        $this->description = $description;
        $this->priority = $priority;
        $this->isCompleted = false;
    }

    /**
     * Edit the title of the item
     *
     * @param string $title
     * @return void
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * Edit the description
     *
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function toggleIsComplete(): void
    {
        $this->isCompleted = !$this->isCompleted;
    }


    public function __toString(): string
    {
        return sprintf("creation date: %s\nTitle: %s\nDescription: %s\nPriority: %s\nCompleted: %s",
            date_format
            (
            $this->createDate,"d-M-Y"
            ),
            $this->title,
            $this->description,
            match ($this->priority){
                \Priority::low => "low",
                \Priority::medium => "medium",
                \Priority::high => "high"
            },
            $this->isCompleted ? "yes" : "no" );
    }
}

#################### testcase ###################

$item = new TodoItem("Naar de apotheek", "Medicijnen liggen klaar in de nachtkluis", \Priority::medium);

// creation and properties
var_dump($item);

// toString implemented
print ($item);

// test toggle isCompleted
$item->toggleIsComplete();
print($item);
