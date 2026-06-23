<?php

class ContactValidator
{
    public static function validate(array $data): array
    {
        $errors = [];

        $name = trim($data['name'] ?? '');
        $email = trim($data['email'] ?? '');
        $workType = trim($data['work_type'] ?? '');

        if ($name === '') {
            $errors[] = 'Name is required.';
        } elseif (!preg_match("/^[a-zA-Z\s'-]{2,100}$/", $name)) {
            $errors[] = 'Invalid name.';
        }

        if ($email === '') {
            $errors[] = 'Email is required.';
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = 'Invalid email.';
        }

        $allowedWorkTypes = [
            'Commercial Roofing Services',
            'Residential Roofing Services',
            'Specialized Roofing Services'
        ];

        if ($workType === '') {
            $errors[] = 'Service type is required.';
        } elseif (!in_array($workType, $allowedWorkTypes, true)) {
            $errors[] = 'Invalid service type.';
        }

        return $errors;
    }
}
