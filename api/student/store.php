<?php 
    include "../../class/base.php";
    $data = $_GET;
    $students = new DB('students');
    // $data = $students->getAllSetRank();
    
    // dd($data);

    // Array
    // (
    //     [name] => aaa
    //     [mobile] => 123
    // )

    $students->store($data);

?>