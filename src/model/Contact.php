<?php


require_once __DIR__ . '/Model.php';
class Contact extends Model
{
    private $name;
    private $email;
    private $work_type;

   


    function getName()
    {
        return $this->name;
    }
    function setName($newname)
    {
        $this->name = $newname;
    }

    function getEmail()
    {
        return $this->email;
    }
    function setEmail($newemail)
    {
        $this->email = $newemail;
    }
    function getWorkType()
    {
        return $this->work_type;
    }
    function setWorkType($newworktype)
    {
        $this->work_type = $newworktype;
    }
    function save()
    {
        

        $stmt = $this->db->prepare("
            INSERT INTO contacts (name, email, work_type)
            VALUES (:name, :email, :work_type)
        ");

        return $stmt->execute([
            ':name' => $this->name,
            ':email' => $this->email,
            ':work_type' => $this->work_type
        ]);
    }
}
