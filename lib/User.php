<?php

class User
{
    protected null|string $name;
    protected string $email;
    protected mixed $password;
    protected mixed $pdo;

    public function __construct($name, $email, $password, $pdo)
    {
        $this->name = $name;
        $this->email = $email;
        $this->password = password_hash($password, PASSWORD_DEFAULT);
        $this->pdo = $pdo;
    }

    public function register(): array
    {

        $sql = $this->pdo->prepare('INSERT INTO peoples (name, email, password) VALUES (:name, :email, :password)');

        try {
            $sql->execute([
                ':name' => $this->name,
                ':email' => $this->email,
                ':password' => $this->password,
            ]);
            return ['status' => 'success', 'message' => 'Регистрация прошла успешно!'];
        } catch (PDOException $e) {
            return ['status' => 'error', 'message' => 'Ошибка: ' . $e->getMessage()];
        }

    }
    public static function delete(PDO $pdo, $identifier): array
    {

        if (is_numeric($identifier)) {
            $sql = $pdo->prepare('DELETE FROM peoples WHERE id = :id');
            $sql->bindParam(':id', $identifier, PDO::PARAM_INT);
        } else {
            $sql = $pdo->prepare('DELETE FROM peoples WHERE email = :email');
            $sql->bindParam(':email', $identifier);
        }

        try {
            $sql->execute();
            return ['status' => 'success', 'message' => 'Пользователь удалён!'];
        } catch (PDOException $e) {
            return ['status' => 'error', 'message' => 'Ошибка: ' . $e->getMessage()];
        }

    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

}