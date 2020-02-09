<?php

namespace App\Db;
class MySql
{
    private $host;
    private $user;
    private $password;
    private  $db_name;
    private $connect;

    public function connect( string $host , string $user , string $password , string $db_name){
        $this->host = $host;
        $this->user = $user;
        $this->password = $password;
        $this->db_name = $db_name;
        if(!$this->connect){
            $this->connect = mysqli_connect($this->host , $this->user , $this->password , $this-> db_name);
            mysqli_set_charset($this->connect, 'utf8');
            $mysql_error = mysqli_connect_errno();
            if ($mysql_error > 0) {
                $message = "Mysql connect error: $mysql_error ";
                die($message);
            }
        }
        return $this->connect;
    }
}