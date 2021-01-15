<?php

class Pricecatalog extends Model 
{
    public function get_all_items()
    {
        $query = "SELECT * FROM pricecatalog";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    
    public function get_item_by_id($id)
    {
        $query = "SELECT * FROM pricecatalog WHERE `id` = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result; 
    }
    
    public function addItem($data)
    {
        $action = trim($data['action']);
        $price = trim($data['price']);
        
        $this->db->beginTransaction();
        try 
        {
            $query = "INSERT INTO pricecatalog (`id`, `action`, `price`)
                            VALUES(null, :action , :price)";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(":action", $action);
            $stmt->bindParam(":price", $price);
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
            $query = "DELETE FROM pricecatalog WHERE `id`= :id";

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
        $action = trim($_POST['action']);
        $price = trim($_POST['price']);
        
        $this->db->beginTransaction();
        try 
        {
            $query = "UPDATE pricecatalog SET `action` = :action, `price` = :price WHERE `id` = :id";

            $stmt = $this->db->prepare($query);
            $stmt->bindParam(":id", $id);
            $stmt->bindParam(":action", $action);
            $stmt->bindParam(":price", $price);
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