<?php


require_once __DIR__ . '/../src/model/Quote.php';

class QuoteController
{
    public function submit()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $contact = new Quote();

            $contact->setName($_POST['name']);
            $contact->setEmail($_POST['email']);
            $contact->setMessage($_POST['message']);
            $contact->setPhone($_POST['phone']);
            $contact->setService($_POST['service']);
    
            $contact->save();

            $success = "Message sent successfully.";

            require __DIR__ . '/../views/contact.php';
        }
    }

    public function showForm()
    {
        require __DIR__ . '/../views/contact.php';
    }
}