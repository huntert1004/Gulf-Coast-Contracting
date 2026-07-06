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
    public function getRecentQuotes(int $limit = 5): array
    {
        $stmt = $this->db->prepare("
        SELECT *
        FROM quotes
        ORDER BY created_at DESC
        LIMIT :limit
    ");

        $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getQuoteCount(): int
    {
        $stmt = $this->db->prepare("
        SELECT COUNT(*)
        FROM quotes
    ");

        $stmt->execute();

        return (int)$stmt->fetchColumn();
    }
    public function getWeeklyQuoteCount(): int
    {
        $stmt = $this->db->prepare("
        SELECT COUNT(*)
        FROM quotes
        WHERE created_at >= DATE_SUB(NOW(), INTERVAL 7 DAY)
    ");

        $stmt->execute();

        return (int)$stmt->fetchColumn();
    }
    public function getMostRequestedService(): string
    {
        $stmt = $this->db->prepare("
        SELECT services
        FROM quotes
    ");

        $stmt->execute();

        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $counts = [];

        foreach ($rows as $row) {

            $services = json_decode($row['services'], true) ?? [];

            foreach ($services as $service) {

                if (!isset($counts[$service])) {
                    $counts[$service] = 0;
                }

                $counts[$service]++;
            }
        }

        if (empty($counts)) {
            return 'N/A';
        }

        arsort($counts);

        return array_key_first($counts);
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
