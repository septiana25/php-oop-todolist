<?php
require_once __DIR__."/../Model/Todolist.php";
require_once __DIR__."/../BusinessLogic/ShowTodoList.php";
require_once __DIR__."/../Helper/Input.php";

function viewShowTodoList()
{
    while (true) {
        showTodoList();

        echo "+MENU+ \n";
        echo "1. TAMBAH TODOLIST \n";
        echo "2. HAPUS TODOLIST \n";
        echo "x. KELUAR \n";
        
        $pilihan = input("Pilih ");
        if ($pilihan == "1") {
            echo "Tambah";
        }else if ($pilihan == "2") {
            echo "Hapus";
        }else if ($pilihan == "x") {
            break;
        }else{
            echo "Pilihan Tidak Ada \n";
        }
        
    }
    echo "Selamat Tinggal \n";
}