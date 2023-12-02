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
        'super_admin' => [
            'users' => 'c,r,u,d,s',
            'regions' => 'c,r,u,d,s',
            'departements' => 'c,r,u,d,s',
            'communes' => 'c,r,u,d,s',
            'personnes' => 'c,r,u,d,s',
            'employers' => 'c,r,u,d,s',
            'medecins' => 'c,r,u,d,s',
            'publications' => 'c,r,u,d,s,p',
            'declaration_naissances' => 'c,r,u,d,s,p',
            'declaration_deces' => 'c,r,u,d,s,p',
            'acte_naissances' => 'c,r,u,d,s,p,t',
            'acte_deces' => 'c,r,u,d,s,p',
            'acte_mariages' => 'c,r,u,d,s,p',
            'temoinages' => 'c,r,u,d,',
        ],
        'admin_local' => [
            'regions' => 'c,r,u,d,s',
            'employers' => 'c,r,u,d,s',
            'medecins' => 'c,r,u,d,s',
            'temoinages' => 'c,r,u,d,',

        ],
        'maire' => [
            'profile' => 'r,u',
        ],
       
        'secretaire' => [
            'module_1_name' => 'c,r,u,d',
            'temoinages' => 'c,r,u,d,',

        ],
      
        'statisticien' => [
            'module_1_name' => 'c,r,u,d',
        ],
    ],

    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete',
        's' => 'show',
        'p' => 'print',
        't' => 'status'
    ],
];
