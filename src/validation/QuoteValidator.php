<?php

require_once __DIR__ . '/../config/Services.php';
class QuoteValidator
{
    public static function validate(array $data): array
    {
        $errors = [];

        $name = trim($data['name'] ?? '');
        $email = trim($data['email'] ?? '');
        $phone = trim($data['phone'] ?? '');
        $address = trim($data['address'] ?? '');
        $city = trim($data['city'] ?? '');
        $zipCode = trim($data['zip'] ?? '');
        $services = $data['services'] ?? [];
        $message = trim($data['message'] ?? '');

        /* ------------------------------
           Name
        ------------------------------ */

        if ($name === '') {
            $errors[] = 'Name is required.';
        } elseif (!preg_match("/^[a-zA-Z\s'-]{2,100}$/", $name)) {
            $errors[] = 'Invalid name.';
        }

        /* ------------------------------
           Email
        ------------------------------ */

        if ($email === '') {
            $errors[] = 'Email is required.';
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = 'Invalid email.';
        }

        /* ------------------------------
           Phone
        ------------------------------ */

        if ($phone === '') {
            $errors[] = 'Phone number is required.';
        } elseif (!preg_match('/^[0-9()\-\+\s]{7,20}$/', $phone)) {
            $errors[] = 'Invalid phone number.';
        }

        /* ------------------------------
           Address
        ------------------------------ */

        if ($address === '') {
            $errors[] = 'Address is required.';
        }

        /* ------------------------------
           City
        ------------------------------ */

        if ($city === '') {
            $errors[] = 'City is required.';
        } elseif (!preg_match("/^[a-zA-Z\s'-]{2,100}$/", $city)) {
            $errors[] = 'Invalid city.';
        }

        /* ------------------------------
           Zip Code
        ------------------------------ */

        if ($zipCode === '') {
            $errors[] = 'Zip Code is required.';
        } elseif (!preg_match('/^\d{5}(-\d{4})?$/', $zipCode)) {
            $errors[] = 'Invalid Zip Code.';
        }

        /* ------------------------------
           Services
        ------------------------------ */
        $allowedServices = Services::ALL;

        if (!is_array($services) || count($services) === 0) {
            $errors[] = 'Please select at least one service.';
        } else {
            foreach ($services as $service) {
                if (!in_array($service, $allowedServices, true)) {
                    $errors[] = 'Invalid service selected.';
                    break;
                }
            }
        }

        /* ------------------------------
           Message
        ------------------------------ */

        if (strlen($message) > 5000) {
            $errors[] = 'Message is too long.';
        }

        return $errors;
    }
}
