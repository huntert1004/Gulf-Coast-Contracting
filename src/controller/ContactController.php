<?php

require_once __DIR__ . '/../model/Contact.php';
require_once __DIR__ . '/../validation/ContactValidator.php';

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

        $validator = new ContactValidator();

        $errors = $validator->validate($_POST);

        if (!empty($errors)) {
            http_response_code(400);

            echo json_encode([
                'success' => false,
                'errors' => $errors
            ]);

            exit;
        }

        $name = trim($_POST['name'] ?? '');
        $email = trim($_POST['email'] ?? '');
        $workType = trim($_POST['work_type'] ?? '');

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
