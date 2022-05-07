<?php
require_once __DIR__."/../Model/Todolist.php";
require_once __DIR__."/../BusinessLogic/ShowTodoList.php";
require_once __DIR__."/../BusinessLogic/AddTodoList.php";
require_once __DIR__."/../BusinessLogic/RemoveTodoList.php";

addTodoList("Belajar PHP Dasar");

showTodoList();

var_dump(removeTodoList(1));
showTodoList();