<?php
function removeTodoList(int $number): bool
{
    global $todolist;

    $sizeTodoList = sizeof($todolist);

    if ($number > $sizeTodoList) {
        return false;
    }

/*     if ($number == $sizeTodoList) {
        unset($todolist[$sizeTodoList]);
    }else{
        for ($i=$number; $i < $sizeTodoList ; $i++) { 
            $todolist[$i] = $todolist[$i + 1];
        }
        unset($todolist[$sizeTodoList]);
    }
 */
    for ($i=$number; $i < $sizeTodoList ; $i++) { 
        $todolist[$i] = $todolist[$i + 1];
    }
    unset($todolist[$sizeTodoList]);

    return true;
}