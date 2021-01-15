<?php

class Warehouse extends Model 
{
    public function get_all_items()
    {
        $query = "SELECT * FROM warehouse";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    
    public function get_item_by_id($id)
    {
        $query = "SELECT * FROM warehouse WHERE `id` = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result; 
    }
    
    public function addItem($data)
    {
        $name = trim($data['name']);
        $count = trim($data['count']);
        
        $this->db->beginTransaction();
        try 
        {
            $query = "INSERT INTO warehouse (`id`, `name`, `count`)
                            VALUES(null, :name , :count)";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(":name", $name);
            $stmt->bindParam(":count", $count);
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
    
    public function delete_item_by_id($id)
    {
        $this->db->beginTransaction();
        try 
        {
            $query = "DELETE FROM warehouse WHERE `id`= :id";

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
    
    public function updateItem()
    {
        $id = trim($_POST['id']);
        $name = trim($_POST['name']);
        $count = trim($_POST['count']);
        
        $this->db->beginTransaction();
        try 
        {
            $query = "UPDATE warehouse SET `name` = :name, `count` = :count WHERE `id` = :id";

            $stmt = $this->db->prepare($query);
            $stmt->bindParam(":id", $id);
            $stmt->bindParam(":name", $name);
            $stmt->bindParam(":count", $count);
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