<?php

declare(strict_types = 1);

include '../src/App/utility.php';

echo '<h4>This is the Todo List application</h4>';

$app = include __DIR__ . '/../src/App/bootstrap.php';

$app->run();

prettyPrint($_SERVER);
