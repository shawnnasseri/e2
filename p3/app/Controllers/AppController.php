<?php

# Author  : Shawn Nasseri
# Date    : December 3, 2022
# Project : P3 Final Project
# Class   : Web Programming with PHP
# ClassNo : DGMD E-2
# Function: App Controller
 
namespace App\Controllers;

class AppController extends Controller
{
    /**
     * This method is triggered by the route "/"
     */
    public function index()
    {

        $welcomes = ['Welcome', 'Aloha', 'Welkom', 'Bienvenidos', 'Bienvenu', 'Welkomma'];
        
        return $this->app->view('index', [
            'welcome' => $welcomes[array_rand($welcomes)]
        ]);
    }
    
}