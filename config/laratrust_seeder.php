<?php

return [
    /**
     * Control if the seeder should create a user per role while seeding the data.
     */
    'create_users' => false,

    /**
     * Control if all the laratrust tables should be truncated before running the seeder.
     */
    'truncate_tables' => true,

    'roles_structure' => [
        'admin' => [
            'users' => 'c,r,u,d,s',
            'produit' => 'c,r,u,d,s',
            'commande' => 'c,r,u,d,s',
            'fournisseur' => 'c,r,u,d,s',
            'categorie' => 'c,r,u,d,s',


        ],

        'secretaire' => [
            'projet' => 'c,r,u,d',


        ],

    ],

    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete',
        's' => 'show'
    ],
];
