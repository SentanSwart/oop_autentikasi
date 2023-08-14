<?php

class DB {
    private static $hostname = "localhost";
    private static $name = "root";
    private static $password = "";
    private static $database = "form_oop";

    public static $conn;

    public static function conn() 
    {
    self::$conn = mysqli_connect(self::$hostname, self::$name, self::$password, self::$database);
    
    if(self::$conn->connect_error) 
    {
        die("Gagal terkoneksi");
    }
    else 
    {
        return self::$conn;
    }
    }
}
