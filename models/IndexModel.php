<?php
class IndexModel extends Model
{

    public function checkUser()
    {
        $login = $_POST['login'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM users WHERE email = :login AND password = :password";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(":login", $login, PDO::PARAM_STR);
        $stmt->bindValue(":password", $password, PDO::PARAM_STR);
        $stmt->execute();
        $res = $stmt->fetch(PDO::FETCH_ASSOC);
        if (!empty($res)) {
            header("Location: /cabinet");
        } else {
            return false;
        }
    }
}
