<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class ContactPageCest
{
    public function newContact(AcceptanceTester $I)
    {
        $I->amOnPage('/contacts/new');
        $I->see('New Contact');
    }
}
