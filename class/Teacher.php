<?php


class Teacher
{
    public $table;
    public $conn;

    public function __construct($table)
    {
        $db = new DB();
        $this->conn = $db->conn;
        $this->table = $table;
    }

    public function getAll()
    {
        $sql = "SELECT * FROM teachers";            // 資料表需存在（可為空）
        $data =  $this->conn->query($sql)->fetch_all(MYSQLI_ASSOC);
        // dd($data);
        return $data;
    }
}
