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
    public function getRecentContacts(int $limit = 5): array
    {
        $stmt = $this->db->prepare("
        SELECT *
        FROM contacts
        ORDER BY created_at DESC
        LIMIT :limit
    ");

        $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getContactCount(): int
    {
        $stmt = $this->db->prepare("
        SELECT COUNT(*)
        FROM contacts
    ");

        $stmt->execute();

        return (int)$stmt->fetchColumn();
    }
    public function getWeeklyContactCount(): int
    {
        $stmt = $this->db->prepare("
        SELECT COUNT(*)
        FROM contacts
        WHERE created_at >= DATE_SUB(NOW(), INTERVAL 7 DAY)
    ");

        $stmt->execute();

        return (int)$stmt->fetchColumn();
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
