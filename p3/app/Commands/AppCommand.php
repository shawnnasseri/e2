<?php

# Author:  Shawn Nasseri
# Date:    December 3, 2022
# Project: P3 Final Project
# Class  : Web Programming with PHP
# Clas No: DGMD E-2

namespace App\Commands;

use App\Contacts;
use Faker\Factory;

class AppCommand extends Command
{
    public function test()
    {
        dump('test command working.');
    }

    public function migrate()
    {
        # Creating contact table to add contacts to. Shawn Nasseri Dec 1, 2022
        $this->app->db()->createTable('contact', [
        'first_name' => 'varchar(255)',
        'last_name' => 'varchar(255)',
        'street' => 'text',
        'city' => 'varchar(30)',
        'state' => 'varchar(2)',
        'zip' => 'varchar(20)',
        'phone' => 'varchar(12)',
        'email' => 'varchar(255)'
        ]);

        dump('Migration complete; check the database contact table.');
     }


     public function seedContact()
     {
         # inserting data into contact table Shawn Nasseri Dec 1, 2022
         # from json file in database folder
         $contacts = new Contacts($this->app->path('database/contacts.json'));
     
         foreach ($contacts->getAll() as $contact) {
     
             # ID is added so no need.
             unset($contact['id']);
             $this->app->db()->insert('contact', $contact);
         }
     }

    public function fresh() {
        $this->migrate();
        $this->seedContact();
    }

}

