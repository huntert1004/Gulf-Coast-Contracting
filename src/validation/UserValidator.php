<?php

use FontLib\Table\Type\name;

class UserValidator
{
    public static function validate(array $data): array
    {

        $errors = [];
        if (trim($data['name'] ?? '') != "") {
            if (trim($data['name'] ?? '') === '') {
                $errors[] = 'Name is required.';
            } elseif (!preg_match("/^[a-zA-Z\s'-]{2,100}$/", trim($data['name'] ?? ''))) {
                $errors[] = 'Invalid name.';
            }
        }
        $email = trim($data['email'] ?? '');
        $password = trim($data['password'] ?? '');

        if ($email === '') {
            $errors[] = 'Email is required.';
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = 'Invalid email.';
        }
        if (strlen($password) < 8) {
            $errors[] = "Password must be at least 8 characters.";
        }

        if (strlen($password) > 72) {
            $errors[] = "Password must be 72 characters or fewer.";
        }

        if (preg_match('/\s/', $password)) {
            $errors[] = "Password cannot contain spaces.";
        }

        if (!preg_match('/[A-Z]/', $password)) {
            $errors[] = "Password must contain at least one uppercase letter.";
        }

        if (!preg_match('/[a-z]/', $password)) {
            $errors[] = "Password must contain at least one lowercase letter.";
        }

        if (!preg_match('/[0-9]/', $password)) {
            $errors[] = "Password must contain at least one number.";
        }

        if (!preg_match('/[^A-Za-z0-9]/', $password)) {
            $errors[] = "Password must contain at least one special character.";
        }

        return $errors;
    }
}
