<?php


require_once __DIR__ . '/../model/Quote.php';
require_once __DIR__ . '/../validation/QuoteValidator.php';

class QuoteController
{
    public function submit()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            header('Content-Type: application/json');

            if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
                http_response_code(405);
                echo json_encode([
                    'success' => false,
                    'message' => 'Method not allowed.'
                ]);
                exit;
            }

            $validator = new QuoteValidator();

            $errors = $validator->validate($_POST);

            if (!empty($errors)) {
                http_response_code(400);

                echo json_encode([
                    'success' => false,
                    'errors' => $errors
                ]);

                exit;
            }
            $quote = new Quote();

            $quote->setName($_POST['name']);
            $quote->setEmail($_POST['email']);
            $quote->setPhone($_POST['phone']);
            $quote->setAddress($_POST['address']);
            $quote->setCity($_POST['city']);
            $quote->setZipCode($_POST['zip']);
            $quote->setServices($_POST['services'] ?? []);
            $quote->setMessage($_POST['message']);

            $quote->save();

            $success = "Message sent successfully.";
        }
    }

    public function showForm()
    {
        require __DIR__ . '/../view/pages/Quote.php';
    }
}
