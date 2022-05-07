<?php
require_once __DIR__."/../Model/Todolist.php";
require_once __DIR__."/../BusinessLogic/ShowTodoList.php";
require_once __DIR__."/../BusinessLogic/AddTodoList.php";

addTodoList("Belajar PHP Dasar");
addTodoList("Belajar PHP OOP");
addTodoList("Belajar PHP Unit Test");

showTodoList();