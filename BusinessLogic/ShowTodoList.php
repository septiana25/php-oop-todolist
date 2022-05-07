<?php
function showTodoList()
{
    global $todolist;
    echo "===TODOLIST=== \n";
    foreach ($todolist as $key => $value) {
       echo "$key. $value \n";
    }
}