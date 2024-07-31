<?php


class DB
{
    public $conn;

    public function __construct()
    {
        $servername = "localhost"; //DB存放路徑
        $username = "root";     //帳
        $password = "";         //密
        $dbname = "db0722";     //指定資料庫 (需存在)

        $this->conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    }
}





function dd($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}
