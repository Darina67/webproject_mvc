<?
//Класс конфигурации базы данных
class DB
{
    const USER = "root";
    const PASS = "";
    const HOST = "localhost";
    const DB = "example";

    public static function connToDB()
    {
        $user = self::USER;
        $pass = self::PASS;
        $host = self::HOST;
        $db = self::DB;

        $conn = new PDO("mysql:dbname=$db;host=$host", $user, $pass);
        return $conn;
    }
}
