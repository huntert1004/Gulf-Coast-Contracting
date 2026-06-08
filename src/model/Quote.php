<?php
require_once __DIR__ . '/Model.php';

class Quote extends Model
{
    private $name;
    private $email;
    private $phone;
    private $service;
    private $message;

    

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
    function getPhone()
    {
        return $this->phone;
    }
    function setPhone($newphone)
    {
        $this->phone = $newphone;
    }
    function getService()
    {
        return $this->service;
    }
    function setService($newservice)
    {
        $this->service = $newservice;
    }
    function getMessage()
    {
        return $this->message;
    }
    function setMessage($newmessage)
    {
        $this->message = $newmessage;
    }
    function save(){
        $stmt = $this->db->prepare("
            INSERT INTO quotes (name, email, phone, service, message)
            VALUES (:name, :email, :phone, :service, :message)
        ");

        return $stmt->execute([
            ':name' => $this->name,
            ':email' => $this->email,
            ':phone' => $this->phone,
            ':service' => $this->service,
            ':message' => $this->message
            
        ]);
    }
}
