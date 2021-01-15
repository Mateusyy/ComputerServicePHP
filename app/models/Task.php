<?php

class Task extends Model 
{
    public function get_all_tasks()
    {
        $query = "SELECT * FROM tasks";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    
    public function get_task_by_id($id)
    {
        $query = "SELECT * FROM tasks WHERE `id` = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result; 
    }
    
    public function addTask($data)
    {
        $title = trim($data['title']);
        $desc = trim($data['desc']);
        $group = trim($data['group']);
        
        $this->db->beginTransaction();
        try 
        {
            $query = "INSERT INTO tasks (`id`, `title`, `description`, `group`)
                            VALUES(null, :title , :desc, :group)";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(":title", $title);
            $stmt->bindParam(":desc", $desc);
            $stmt->bindParam(":group", $group);
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
    
    public function delete_task_by_id($id)
    {
        $this->db->beginTransaction();
        try 
        {
            $query = "DELETE FROM tasks WHERE `id`= :id";

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
    
    public function updateTask()
    {
        $id = trim($_POST['id']);
        $title = trim($_POST['title']);
        $desc = trim($_POST['desc']);
        
        $this->db->beginTransaction();
        try 
        {
            $query = "UPDATE tasks SET `title` = :title, `description` = :desc WHERE `id` = :id";

            $stmt = $this->db->prepare($query);
            $stmt->bindParam(":id", $id);
            $stmt->bindParam(":title", $title);
            $stmt->bindParam(":desc", $desc);
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