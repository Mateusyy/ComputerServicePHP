<?php

class User extends Model 
{
    public function is_logged_in()
    {
        if(isset($_SESSION['user_id']))
        {
            return true;
        }
    }
    
    public function auth($data)
    {
        var_dump($data);
        $username = trim($data['username']);
        $password = trim($data['password']);

        $query = "SELECT * FROM user WHERE username = :username";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':username', $username);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if($stmt->rowCount() > 0)
        {
            if($password == $result['password'])
            {
                $_SESSION['user_id'] = $result['id'];
                $_SESSION['username'] = $result['username'];
                return true;
            }
            else
            {
//                $this->errors[] = "Invalid email or password";
                return false;
            }
        }
        else
        {
//            $this->errors[] = "Invalid email or password";
            return false;
        }
    }
}