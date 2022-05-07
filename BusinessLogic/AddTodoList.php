<?php
function addTodoList(string $todo): void
{
    global $todolist;

    $number = sizeof($todolist) + 1;
    $todolist[$number] = $todo;
}