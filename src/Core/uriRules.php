<?php

return [
    '/home' => 'site/home',
    '/about' => 'site/about',
    '/login' => 'site/loginform',

    '/users/page{page}' => 'users/show',
    '/users/edit{id}' => 'users/showeditform',
    '/users/add' => 'users/showaddform',
    '/users/delete{id}' => 'users/delete',


    '/usergroup/page{page}' => 'usergroup/show',
    '/usergroup/edit{id}' => 'usergroup/showeditform',
    '/usergroup/add' => 'usergroup/showaddform',
    '/usergroup/delete{id}' => 'usergroup/delete',

    '/cars/page{page}' => 'cars/show',
    '/cars/edit{id}' => 'cars/showeditform',
    '/cars/add' => 'cars/showaddform',
    '/cars/delete{id}' => 'cars/delete',

    '/orders/page{page}' => 'orders/show',
    '/orders/edit{id}' => 'orders/showeditform',
    '/orders/add' => 'orders/showaddform',
    '/orders/delete{id}' => 'orders/delete',

    '/signup' => 'signup/showform'
];
