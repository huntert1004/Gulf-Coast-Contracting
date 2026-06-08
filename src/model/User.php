<?php
require_once __DIR__ . '/Model.php';

class User extends Model
{
    private $name;
    private $username;
    private $password;

    public function setName($name)
    {
        $this->name = trim($name);
    }

    public function setUserName($username)
    {
        $this->username = trim($username);
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function save(): bool
    {
        $passwordHash = password_hash($this->password, PASSWORD_DEFAULT);

        $stmt = $this->db->prepare("
            INSERT INTO users (name, username, password_hash)
            VALUES (:name, :username, :password_hash)
        ");

        return $stmt->execute([
            ':name' => $this->name,
            ':username' => $this->username,
            ':password_hash' => $passwordHash
        ]);
    }

    public function findByUsername(string $username): ?array
    {
        $stmt = $this->db->prepare("
            SELECT * FROM users
            WHERE username = :username
            LIMIT 1
        ");

        $stmt->execute([
            ':username' => $username
        ]);

        $user = $stmt->fetch(PDO::FETCH_ASSOC); //tunrs sgl db row into php array that we can work with I love this;)

        return $user ?: null;
    }
}
