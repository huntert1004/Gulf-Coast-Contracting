<?php

require_once __DIR__ . '/../model/Contact.php';

class ContactController
{
    public function submit()
    {
        header('Content-Type: application/json');

        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            http_response_code(405);
            echo json_encode([
                'success' => false,
                'message' => 'Method not allowed.'
            ]);
            exit;
        }

        $name = trim($_POST['name'] ?? '');
        $email = trim($_POST['email'] ?? '');
        $workType = trim($_POST['work_type'] ?? '');

        if ($name === '' || $email === '' || $workType === '') {
            http_response_code(400);
            echo json_encode([
                'success' => false,
                'message' => 'All fields are required.'
            ]);
            exit;
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            http_response_code(400);
            echo json_encode([
                'success' => false,
                'message' => 'Invalid email.'
            ]);
            exit;
        }

        $contact = new Contact();

        $contact->setName($name);
        $contact->setEmail($email);
        $contact->setWorkType($workType);

        $contact->save();

        http_response_code(200);
        echo json_encode([
            'success' => true,
            'message' => 'Quote request sent successfully.'
        ]);
        exit;
    }

    public function showForm()
    {
        require __DIR__ . '/../views/contact.php';
    }
}