<?php
class Users
{
    public static function Get_User_Id($cookiecode)
    {
        $db = parse_url(getenv("DATABASE_URL"));
        $pdo = new PDO("pgsql:" . sprintf("host=%s;port=%s;user=%s;password=%s;dbname=%s", $db["host"], $db["port"], $db["user"], $db["pass"], ltrim($db["path"], "/")));

        $req = $pdo->prepare('SELECT id_user 
    FROM users 
    WHERE cookiecode= :cc');
        $req->bindParam(':cc', $cookiecode);
        $req->execute();
        $data = $req->fetch();
        return $data['id_user']; //Verifier si null
        
    }

    public static function Get_User_Mail($userid)
    {
        $db = parse_url(getenv("DATABASE_URL"));
        $pdo = new PDO("pgsql:" . sprintf("host=%s;port=%s;user=%s;password=%s;dbname=%s", $db["host"], $db["port"], $db["user"], $db["pass"], ltrim($db["path"], "/")));

        $req = $pdo->prepare('SELECT email 
    FROM users 
    WHERE id_user= :userid');
        $req->bindParam(':userid', $userid);
        $req->execute();
        $data = $req->fetch();
        return $data['email'];
    }

    public static function Get_All_Users()
    {
        $db = parse_url(getenv("DATABASE_URL"));
        $pdo = new PDO("pgsql:" . sprintf("host=%s;port=%s;user=%s;password=%s;dbname=%s", $db["host"], $db["port"], $db["user"], $db["pass"], ltrim($db["path"], "/")));

        $req = $pdo->prepare('SELECT * 
    FROM users');
        $req->execute();
        while ($data = $req->fetch())
        {
            $result[] = $data;
        }
        return $result;
    }

    public static function Get_User_Role($userid)
    {
        $db = parse_url(getenv("DATABASE_URL"));
        $pdo = new PDO("pgsql:" . sprintf("host=%s;port=%s;user=%s;password=%s;dbname=%s", $db["host"], $db["port"], $db["user"], $db["pass"], ltrim($db["path"], "/")));

        $req = $pdo->prepare('SELECT isadmin 
    FROM users 
    WHERE id_user= :usersid');
        $req->bindParam(':usersid', $userid);
        $req->execute();
        $data = $req->fetch();
        return ($data['isadmin']);
    }

    public static function Set_User_Cookie($email, $usercookie)
    {
        $db = parse_url(getenv("DATABASE_URL"));
        $pdo = new PDO("pgsql:" . sprintf("host=%s;port=%s;user=%s;password=%s;dbname=%s", $db["host"], $db["port"], $db["user"], $db["pass"], ltrim($db["path"], "/")));

        $req = $pdo->prepare('UPDATE users 
    SET cookiecode= :cookie 
    WHERE email= :email');
        $req->bindParam(':cookie', $usercookie);
        $req->bindParam(':email', $email);
        $req->execute();
    }

    public static function Check_Password($email, $userpw)
    {
        $db = parse_url(getenv("DATABASE_URL"));
        $pdo = new PDO("pgsql:" . sprintf("host=%s;port=%s;user=%s;password=%s;dbname=%s", $db["host"], $db["port"], $db["user"], $db["pass"], ltrim($db["path"], "/")));

        $req = $pdo->prepare('SELECT userpassword,email 
    FROM users 
    WHERE email= :email');
        $req->bindParam(':email', $email);
        $req->execute();
        $data = $req->fetch();
        return ($data['userpassword'] === $userpw);
        //return($data['userspassword'] == $userpw);
        
    }

    public static function Get_Info()
    {
        $db = parse_url(getenv("DATABASE_URL"));
        $pdo = new PDO("pgsql:" . sprintf("host=%s;port=%s;user=%s;password=%s;dbname=%s", $db["host"], $db["port"], $db["user"], $db["pass"], ltrim($db["path"], "/")));

        $cook = $_COOKIE["cookieperso"];
        $req = $pdo->prepare('SELECT nom,prenom,email,num_portable,facebook,linkedin 
      FROM  users 
      WHERE cookiecode = :cook');
        $req->bindParam(':cook', $cook);
        $req->execute();
        $data = $req->fetch();
        return $data;
    }

    public static function Get_Mykhlasse()
    {
        $db = parse_url(getenv("DATABASE_URL"));
        $pdo = new PDO("pgsql:" . sprintf("host=%s;port=%s;user=%s;password=%s;dbname=%s", $db["host"], $db["port"], $db["user"], $db["pass"], ltrim($db["path"], "/")));

        $cook = $_COOKIE["cookieperso"];
        $req = $pdo->prepare('SELECT T.nomkhlasse,annee 
    FROM  khlasse E,typekhlasse T,a_etudie A,users U 
    WHERE T.id_typekhlasse = E.id_type AND A.id_user = U.id_user AND A.id_khlasse= E.id_khlasse  AND U.cookiecode = :cook ');
        $req->bindParam(':cook', $cook);
        $req->execute();
        while ($data = $req->fetch())
        {
            $result[] = $data;
        }
        return $result;
    }

    public static function Get_MySchool()
    {
        $db = parse_url(getenv("DATABASE_URL"));
        $pdo = new PDO("pgsql:" . sprintf("host=%s;port=%s;user=%s;password=%s;dbname=%s", $db["host"], $db["port"], $db["user"], $db["pass"], ltrim($db["path"], "/")));

        $cook = $_COOKIE["cookieperso"];
        $req = $pdo->prepare('SELECT nomecole,domaine 
    FROM ecole E, users U, a_etudie_postfaidherbe P
    WHERE P.id_user=U.id_user AND E.id_ecole=P.id_ecole AND U.cookiecode = :cook');
        $req->bindParam(':cook', $cook);
        $req->execute();
        $data = $req->fetch();
        return $data;
    }

    public static function Get_Khlasse_User($IDuser)
    {
        $db = parse_url(getenv("DATABASE_URL"));
        $pdo = new PDO("pgsql:" . sprintf("host=%s;port=%s;user=%s;password=%s;dbname=%s", $db["host"], $db["port"], $db["user"], $db["pass"], ltrim($db["path"], "/")));

        $req = $pdo->prepare('SELECT T.nomkhlasse,annee 
    FROM  khlasse E,typekhlasse T,a_etudie A,users U 
    WHERE T.id_typekhlasse = E.id_type AND A.id_user = U.id_user AND A.id_khlasse= E.id_khlasse  AND U.id_user = :user ');
        $req->bindParam(':user', $IDuser);
        $req->execute();
        while ($data = $req->fetch())
        {
            $result[] = $data;
        }
        return $result;
    }

    public static function Get_Info_User($IDuser)
    {
        $db = parse_url(getenv("DATABASE_URL"));
        $pdo = new PDO("pgsql:" . sprintf("host=%s;port=%s;user=%s;password=%s;dbname=%s", $db["host"], $db["port"], $db["user"], $db["pass"], ltrim($db["path"], "/")));

        $req = $pdo->prepare('SELECT nom,prenom,email,num_portable,facebook,linkedin 
      FROM  users 
      WHERE id_user = :user');
        $req->bindParam(':user', $IDuser);
        $req->execute();
        $data = $req->fetch();
        return $data;
    }

    public static function Get_School_User($IDuser)
    {
        $db = parse_url(getenv("DATABASE_URL"));
        $pdo = new PDO("pgsql:" . sprintf("host=%s;port=%s;user=%s;password=%s;dbname=%s", $db["host"], $db["port"], $db["user"], $db["pass"], ltrim($db["path"], "/")));

        $req = $pdo->prepare('SELECT nomecole,domaine 
    FROM ecole E, users U, a_etudie_postfaidherbe P 
    WHERE P.id_user=U.id_user AND E.id_ecole=P.id_ecole AND U.id_user = :user');
        $req->bindParam(':user', $IDuser);
        $req->execute();
        $data = $req->fetch();
        return $data;
    }

    public static function Update_My_Name($params)
    {
        $db = parse_url(getenv("DATABASE_URL"));
        $pdo = new PDO("pgsql:" . sprintf("host=%s;port=%s;user=%s;password=%s;dbname=%s", $db["host"], $db["port"], $db["user"], $db["pass"], ltrim($db["path"], "/")));

        $cook = $_COOKIE["cookieperso"];
        $req = $pdo->prepare('UPDATE users  
        SET nom = :valeur
         WHERE cookiecode = :cook');
        $req->bindParam(':valeur', $params);
        $req->bindParam(':cook', $cook);
        try
        {
            $req->execute();
            return true;
        }
        catch(Exception $e)
        {
            return false;
        }
    }
    public static function Update_My_FirsName($params)
    {
        $db = parse_url(getenv("DATABASE_URL"));
        $pdo = new PDO("pgsql:" . sprintf("host=%s;port=%s;user=%s;password=%s;dbname=%s", $db["host"], $db["port"], $db["user"], $db["pass"], ltrim($db["path"], "/")));

        $cook = $_COOKIE["cookieperso"];
        $req = $pdo->prepare('UPDATE users  
        SET prenom = :valeur
         WHERE cookiecode = :cook');
        $req->bindParam(':valeur', $params);
        $req->bindParam(':cook', $cook);
        try
        {
            $req->execute();
            return true;
        }
        catch(Exception $e)
        {
            return false;
        }
    }
    public static function Update_My_Portable($params)
    {
        $db = parse_url(getenv("DATABASE_URL"));
        $pdo = new PDO("pgsql:" . sprintf("host=%s;port=%s;user=%s;password=%s;dbname=%s", $db["host"], $db["port"], $db["user"], $db["pass"], ltrim($db["path"], "/")));

        $cook = $_COOKIE["cookieperso"];
        $req = $pdo->prepare('UPDATE users  
        SET num_portable = :valeur
         WHERE cookiecode = :cook');
        $req->bindParam(':valeur', $params);
        $req->bindParam(':cook', $cook);
        try
        {
            $req->execute();
            return true;
        }
        catch(Exception $e)
        {
            return false;
        }
    }
    public static function Update_My_Facebook($params)
    {
        $db = parse_url(getenv("DATABASE_URL"));
        $pdo = new PDO("pgsql:" . sprintf("host=%s;port=%s;user=%s;password=%s;dbname=%s", $db["host"], $db["port"], $db["user"], $db["pass"], ltrim($db["path"], "/")));

        $cook = $_COOKIE["cookieperso"];
        $req = $pdo->prepare('UPDATE users  
        SET facebook = :valeur
         WHERE cookiecode = :cook');
        $req->bindParam(':valeur', $params);
        $req->bindParam(':cook', $cook);
        try
        {
            $req->execute();
            return true;
        }
        catch(Exception $e)
        {
            return false;
        }
    }
    public static function Update_My_Linkedin($params)
    {
        $db = parse_url(getenv("DATABASE_URL"));
        $pdo = new PDO("pgsql:" . sprintf("host=%s;port=%s;user=%s;password=%s;dbname=%s", $db["host"], $db["port"], $db["user"], $db["pass"], ltrim($db["path"], "/")));

        $cook = $_COOKIE["cookieperso"];
        $req = $pdo->prepare('UPDATE users  
        SET linkedin = :valeur
         WHERE cookiecode = :cook');
        $req->bindParam(':valeur', $params);
        $req->bindParam(':cook', $cook);
        try
        {
            $req->execute();
            return true;
        }
        catch(Exception $e)
        {
            return false;
        }
    }

    public static function Insert_A_Etudie($params)
    {
        $db = parse_url(getenv("DATABASE_URL"));
        $pdo = new PDO("pgsql:" . sprintf("host=%s;port=%s;user=%s;password=%s;dbname=%s", $db["host"], $db["port"], $db["user"], $db["pass"], ltrim($db["path"], "/")));

        $cook = $_COOKIE["cookieperso"];
        $req1 = $pdo->prepare('INSERT INTO a_etudie 
      VALUES ((SELECT id_user FROM users WHERE cookiecode = :cook), :idkhlasse)');
        $req1->bindParam(':cook', $cook);
        $req1->bindParam(':idkhlasse', $params);
        try
        {
            $req1->execute();
            return true;
        }
        catch(Exception $e)
        {
            return false;
        }
    }

    public static function Insert_A_Etudie_PF($params)
    {
        $db = parse_url(getenv("DATABASE_URL"));
        $pdo = new PDO("pgsql:" . sprintf("host=%s;port=%s;user=%s;password=%s;dbname=%s", $db["host"], $db["port"], $db["user"], $db["pass"], ltrim($db["path"], "/")));

        $cook = $_COOKIE["cookieperso"];
        $req3 = $pdo->prepare('INSERT INTO a_etudie_postfaidherbe 
      VALUES ((SELECT id_user FROM users WHERE cookiecode = :cook), :idecole)');
        $req3->bindParam(':cook', $cook);
        $req3->bindParam(':idecole', $params);
        try
        {
            $req3->execute();
            return true;
        }
        catch(Exception $e)
        {
            return false;
        }
    }

    public static function Del_A_Etudie()
    {
        $db = parse_url(getenv("DATABASE_URL"));
        $pdo = new PDO("pgsql:" . sprintf("host=%s;port=%s;user=%s;password=%s;dbname=%s", $db["host"], $db["port"], $db["user"], $db["pass"], ltrim($db["path"], "/")));

        $cook = $_COOKIE["cookieperso"];
        $id = Users::Get_User_Id($cook);
        $req = $pdo->prepare(' DELETE FROM a_etudie
      WHERE id_user= :id');
        $req->bindParam(':id', $id);
        try
        {
            $req->execute();
            return true;
        }
        catch(Exception $e)
        {
            return false;
        }
    }

    public static function Del_A_Etudie_PF()
    {
        $db = parse_url(getenv("DATABASE_URL"));
        $pdo = new PDO("pgsql:" . sprintf("host=%s;port=%s;user=%s;password=%s;dbname=%s", $db["host"], $db["port"], $db["user"], $db["pass"], ltrim($db["path"], "/")));

        $cook = $_COOKIE["cookieperso"];
        $id = Users::Get_User_Id($cook);
        $req = $pdo->prepare(' DELETE FROM a_etudie_postfaidherbe
      WHERE id_user= :id');
        $req->bindParam(':id', $id);
        try
        {
            $req->execute();
            return true;
        }
        catch(Exception $e)
        {
            return false;
        }
    }

    public static function Del_User($id)
    {
        $db = parse_url(getenv("DATABASE_URL"));
        $pdo = new PDO("pgsql:" . sprintf("host=%s;port=%s;user=%s;password=%s;dbname=%s", $db["host"], $db["port"], $db["user"], $db["pass"], ltrim($db["path"], "/")));

        $req = $pdo->prepare(' DELETE FROM users
      WHERE id_user= :id');
        $req->bindParam(':id', $id);
        try
        {
            $req->execute();
            return true;
        }
        catch(Exception $e)
        {
            return false;
        }
    }

}
?>
