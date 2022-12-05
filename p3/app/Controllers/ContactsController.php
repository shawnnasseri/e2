<?php

# Author  : Shawn Nasseri
# Date    : December 3, 2022
# Project : P3 Final Project
# Class   : Web Programming with PHP
# ClassNo : DGMD E-2
# Function: Contact Controller Add and listing of
#           Contacts from ContactDB and contact Table

namespace App\Controllers;

use App\Contacts;

class ContactsController extends Controller
{

    public function index()
    {
      $contacts = $this->app->db()->all('contact');
      return $this->app->view('/contacts/index', ['contacts' => $contacts]);
    }

    
    public function new()
    {
        $contactSaved = $this->app->old('contactSaved');
        $id = $this->app->old('id');

        return $this->app->view('contacts/new', [
            'contactSaved' => $contactSaved,
            'id' => $id,
        ]);
    }

    public function save()
    {
        $this->app->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'street' => 'required|alphaNumericDash',
            'city' => 'required',
            'state' => 'required',
            'zip' => 'required|numeric',
            'phone' => 'required|alphaNumericDash',
            'email' => 'required'
        ]);

        $this->app->db()->insert('contact', $this->app->inputAll());

        $this->app->redirect('/contacts/new', [
            'contactSaved' => true,
            'id' => $this->app->input('id')
        ]);
    }

}