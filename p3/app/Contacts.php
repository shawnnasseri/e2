<?php

# Author  : Shawn Nasseri
# Date    : December 3, 2022
# Project : P3 Final Project
# Class   : Web Programming with PHP
# ClassNo : DGMD E-2
# Function: Contact class and getall and get by id
#           functions

namespace App;

class Contacts
{
    # Properties
    private $contacts = [];

    # Methods
    public function __construct($dataSource)
    {
        $json = file_get_contents($dataSource);
        $this->contacts = json_decode($json, true);
    }

    public function getAll()
    {
        return $this->contacts;
    }

    public function getById(int $id)
    {
        return $this->contacts[$id] ?? null;
    }

}