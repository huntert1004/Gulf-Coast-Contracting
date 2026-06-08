<?php

require_once __DIR__ . '/../model/Contact.php';

class ContactController
{
    public function submit()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $contact = new Contact(); //have to pass in db initialation

            $contact->setName($_POST['name']);
            $contact->setEmail($_POST['email']);
            $contact->setWorkType($_POST['work_type']);

            $contact->save(); 

            $success = "Message sent successfully.";
            
            // require __DIR__ . '/../views/contact.php';
        }

    }

    public function showForm()
    {
        require __DIR__ . '/../views/contact.php';
    }
}