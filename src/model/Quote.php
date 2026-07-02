<?php
require_once __DIR__ . '/Model.php';

class Quote extends Model
{
    private $name;
    private $email;
    private $phone;
    private $address;
    private $city;
    private $zip_code;
    private array $services = [];
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


    function getAddress()
    {
        return $this->address;
    }
    function setAddress($newaddress)
    {
        $this->address = $newaddress;
    }
    public function setServices(array $services): void
    {
        $this->services = $services;
    }

    public function getServices(): array
    {
        return $this->services;
    }
    function setZipCode($newzipcode)
    {
        $this->zip_code = $newzipcode;
    }
    function getZipCode()
    {
        return $this->zip_code;
    }
    function getCity()
    {
        return $this->city;
    }
    function setCity($newcity)
    {
        $this->city = $newcity;
    }

    function getMessage()
    {
        return $this->message;
    }
    function setMessage($newmessage)
    {
        $this->message = $newmessage;
    }

    function save()
    {
        $stmt = $this->db->prepare("
        INSERT INTO quotes (name, email, phone, address, zip_code, city, services, message)
        VALUES (:name, :email, :phone, :address, :zip_code, :city, :services, :message)
    ");

        return $stmt->execute([
            ':name' => $this->name,
            ':email' => $this->email,
            ':phone' => $this->phone,
            ':address' => $this->address,
            ':zip_code' => $this->zip_code,
            ':city' => $this->city,
            ':services' => json_encode($this->services),
            ':message' => $this->message
        ]);
    }
}
