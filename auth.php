<?php

session_start();

include_once('db.php');

class Auth extends DB {
    public static function register($data)
    {
        $username = $data['username'];
        $email = $data['email'];
        $password = $data['password'];
        $confirmPass = $data['confirmPass'];

        if($password === $confirmPass) 
        {
            $password = password_hash($password, PASSWORD_DEFAULT);

            $sql = "INSERT INTO form_auth (username, email, password) VALUES ('$username', '$email', '$password')";

            $hasil = DB::conn()->query($sql);

            return 
            [   
                "status" => "success",
                "data" => $hasil, 
                "pesan" => "Berhasil membuat akun",
            ];
        } 
        else 
        {
            return 
            [
                "status" => "error",
                "data" => [], 
                "pesan" => "Password tidak cocok",
            ];
        }
    } 

    public static function checkPassword($password, $password_hash) {
        $decrypt = password_verify($password, $password_hash); 

        return $decrypt;
    }

    public static function checkEmail($email) {
        $sql = "SELECT * FROM form_auth WHERE email = '$email'";
        
        $hasil = DB::conn()->query($sql)->fetch_assoc();

        return $hasil;
    }

    public static function login($data) {
        $email = $data['email'];
        $password = $data['password'];

        $email = Auth::checkEmail($email);

        if($email === null) {
            return 
            [
                "status" => "gagal",
                "data" => [], 
                "pesan" => "Email atau password salah",
            ];
        } else {
            $decrypt = Auth::checkPassword($password, $email['password']);

            if(!$decrypt) {
                return 
                [
                "status" => "gagal",
                "data" => [], 
                "pesan" => "Email atau password salah",
                ];
            } else {
                $_SESSION["email"] = $email;
                setcookie("email", $email["email"], time() + 34600);

                header('Location: home.php');
            }
        }
        
    }
    
}