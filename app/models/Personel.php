<?php

class Personel extends Model 
{
    public function get_all_users()
    {
        $query = "SELECT * FROM personel";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    
    public function get_user_by_id($id)
    {
        $query = "SELECT * FROM personel WHERE `id` = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result; 
    }
    
    public function addUser($data)
    {
        $name = trim($data['name']);
        $surname = trim($data['surname']);
        $type = intval($data['typeOfWorker']);
        
        $this->db->beginTransaction();
        try 
        {
            $query = "INSERT INTO personel (`id`, `name`, `surname`, `type`)
                            VALUES(null, :name , :surname, :type)";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(":name", $name);
            $stmt->bindParam(":surname", $surname);
            $stmt->bindParam(":type", $type);
            $stmt->execute();
        
            $this->db->commit();
            return true;
        }
        catch (PDOException $e)
        {
                $this->db->rollback();
                throw $e;
        }
    }
    
    public function delete_user_by_id($id)
    {
        $this->db->beginTransaction();
        try 
        {
            $query = "DELETE FROM personel WHERE `id`= :id";

            $stmt = $this->db->prepare($query);
            $stmt->bindParam(":id", $id);
            $stmt->execute();
        
            $this->db->commit();
            return true;
        }
        catch (PDOException $e)
        {
                $this->db->rollback();
                throw $e;
        }
    }
    
    public function updateUser()
    {
        $id = trim($_POST['id']);
        $name = trim($_POST['name']);
        $surname = trim($_POST['surname']);
        $type = intval($_POST['typeOfWorker']);
        
        $this->db->beginTransaction();
        try 
        {
            $query = "UPDATE personel SET `name` = :name, `surname` = :surname, `type` = :type WHERE `id` = :id";

            $stmt = $this->db->prepare($query);
            $stmt->bindParam(":id", $id);
            $stmt->bindParam(":name", $name);
            $stmt->bindParam(":surname", $surname);
            $stmt->bindParam(":type", $type);
            $stmt->execute();
        
            $this->db->commit();
            return true;
        }
        catch (PDOException $e)
        {
                $this->db->rollback();
                throw $e;
        }
    }
}