<?php

# Define the routes for contact app

return [
    '/' => ['AppController', 'index'],
    '/contacts/index' => ['ContactsController', 'index'],
    '/contacts/save' => ['ContactsController','save'],
    '/contacts/new' => ['ContactsController','new'],
];