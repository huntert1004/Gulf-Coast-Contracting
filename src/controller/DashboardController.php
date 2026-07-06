<?php
require_once __DIR__ . '/../model/Contact.php';
require_once __DIR__ . '/../model/Quote.php';
class DashboardController
{
    public function index()
    {
        $quoteModel = new Quote();
        $contactModel = new Contact();

        $recentQuotes = $quoteModel->getRecentQuotes();
        $recentContacts = $contactModel->getRecentContacts();
        
        $totalQuotes = $quoteModel->getQuoteCount();
        $totalContacts = $contactModel->getContactCount();

        $weeklyLeads = $quoteModel->getWeeklyQuoteCount()
            + $contactModel->getWeeklyContactCount();

        $topService = $quoteModel->getMostRequestedService();

        require __DIR__ . '/../view/pages/Dashboard.php';
    }

    public function quote()
    {
        $quoteModel = new Quote();


        $recentQuotes = $quoteModel->getRecentQuotes();

        require __DIR__ . '/../view/pages/DashboardQuote.php';
    }
    public function contact()
    {

        $contactModel = new Contact();


        $recentContacts = $contactModel->getRecentContacts();
        require __DIR__ . '/../view/pages/DashboardContact.php';
    }
}
