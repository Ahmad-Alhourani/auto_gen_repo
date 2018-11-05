<?php
return [
    /*
    |--------------------------------------------------------------------------
    | Labels Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used in labels throughout the system.
    | Regardless where it is placed, a label can be listed here so it is easily
    | found in a intuitive way.
    |
    */
    'general' => [
        'all'     => 'All',
        'yes'     => 'Yes',
        'no'      => 'No',
        'copyright' => 'Copyright',
        'custom'  => 'Custom',
        'actions' => 'Actions',
        'active'  => 'Active',
        'buttons' => [
            'save'   => 'Save',
            'update' => 'Update',
        ],
        'hide'              => 'Hide',
        'inactive'          => 'Inactive',
        'none'              => 'None',
        'show'              => 'Show',
        'toggle_navigation' => 'Toggle Navigation',
    ],
    'backend' => [
        'access' => [
            'roles' => [
                'create'     => 'Create Role',
                'edit'       => 'Edit Role',
                'management' => 'Role Management',
                'table' => [
                    'number_of_users' => 'Number of Users',
                    'permissions'     => 'Permissions',
                    'role'            => 'Role',
                    'sort'            => 'Sort',
                    'total'           => 'role total|roles total',
                ],
            ],
            'users' => [
                'active'              => 'Active Users',
                'all_permissions'     => 'All Permissions',
                'change_password'     => 'Change Password',
                'change_password_for' => 'Change Password for :user',
                'create'              => 'Create User',
                'deactivated'         => 'Deactivated Users',
                'deleted'             => 'Deleted Users',
                'edit'                => 'Edit User',
                'management'          => 'User Management',
                'no_permissions'      => 'No Permissions',
                'no_roles'            => 'No Roles to set.',
                'permissions'         => 'Permissions',
                'table' => [
                    'confirmed'      => 'Confirmed',
                    'created'        => 'Created',
                    'email'          => 'E-mail',
                    'id'             => 'ID',
                    'last_updated'   => 'Last Updated',
                    'name'           => 'Name',
                    'first_name'     => 'First Name',
                    'last_name'      => 'Last Name',
                    'no_deactivated' => 'No Deactivated Users',
                    'no_deleted'     => 'No Deleted Users',
                    'other_permissions' => 'Other Permissions',
                    'permissions' => 'Permissions',
                    'roles'          => 'Roles',
                    'social' => 'Social',
                    'total'          => 'user total|users total',
                ],
                'tabs' => [
                    'titles' => [
                        'overview' => 'Overview',
                        'history'  => 'History',
                    ],
                    'content' => [
                        'overview' => [
                            'avatar'       => 'Avatar',
                            'confirmed'    => 'Confirmed',
                            'created_at'   => 'Created At',
                            'deleted_at'   => 'Deleted At',
                            'email'        => 'E-mail',
                            'last_updated' => 'Last Updated',
                            'name'         => 'Name',
                            'first_name'   => 'First Name',
                            'last_name'    => 'Last Name',
                            'status'       => 'Status',
                        ],
                    ],
                ],
                'view' => 'View User',
            ],
        ],
        
            'gems' => [
            'management' => 'Gems Management',
            'create'     => 'Create Gem',
            'view' => 'View Gem',
            'edit'       => 'Edit Gem',

            'table' => [
                    'name' => "Name", 
                    'create_at' => "Create At", 
                    'updated_at' => "Updated At", 
                    'description' => "Description", 
                    'is_deleted' => "Is Deleted", 
                    'radius' => "Radius", 
                    'sort'  => 'Sort',
                    'total' => 'gems total|gems total',
            ],


            'content' => [
                    'created_at'    => 'Created At',
                     'deleted_at'    => 'Deleted At',
                    'last_updated'  => 'Last Update',      


            ]
            ],


            
            'levels' => [
            'management' => 'Levels Management',
            'create'     => 'Create Level',
            'view' => 'View Level',
            'edit'       => 'Edit Level',

            'table' => [
                    'name' => "Name", 
                    'order' => "Order", 
                    'create_at' => "Create At", 
                    'updated_at' => "Updated At", 
                    'deleted_at' => "Deleted At", 
                    'description' => "Description", 
                    'is_deleted' => "Is Deleted", 
                    'visible_radius' => "Visible Radius", 
                    'sort'  => 'Sort',
                    'total' => 'levels total|levels total',
            ],


            'content' => [
                    'created_at'    => 'Created At',
                     'deleted_at'    => 'Deleted At',
                    'last_updated'  => 'Last Update',        


            ]
            ],


            
            'players' => [
            'management' => 'Players Management',
            'create'     => 'Create Player',
            'view' => 'View Player',
            'edit'       => 'Edit Player',

            'table' => [
                    'name' => "Full Name", 
                    'token' => "Token", 
                    'type' => "Type", 
                    'birth_date' => "Birth Date", 
                    'sort'  => 'Sort',
                    'total' => 'players total|players total',
            ],


            'content' => [
                    'created_at'    => 'Created At',
                     'deleted_at'    => 'Deleted At',
                    'last_updated'  => 'Last Update',    


            ]
            ],


            
            'gem_sightings' => [
            'management' => 'GemSightings Management',
            'create'     => 'Create GemSighting',
            'view' => 'View GemSighting',
            'edit'       => 'Edit GemSighting',

            'table' => [
                    'gem_id' => "Gem Name", 
                    'player_id' => "Player Name", 
                    'founded_at' => "Founded At", 
                    'lat' => "Lat", 
                    'lng' => "Lng", 
                    'create_at' => "Create At", 
                    'updated_at' => "Updated At", 
                    'deleted_at' => "Deleted At", 
                    'sort'  => 'Sort',
                    'total' => 'gem_sightings total|gem_sightings total',
            ],


            'content' => [
                    'created_at'    => 'Created At',
                     'deleted_at'    => 'Deleted At',
                    'last_updated'  => 'Last Update',        


            ]
            ],


            
            'level_gems' => [
            'management' => 'LevelGems Management',
            'create'     => 'Create LevelGem',
            'view' => 'View LevelGem',
            'edit'       => 'Edit LevelGem',

            'table' => [
                    'gem_id' => "Gem Name", 
                    'level_id' => "Level Name", 
                    'create_at' => "Create At", 
                    'updated_at' => "Updated At", 
                    'deleted_at' => "Deleted At", 
                    'sort'  => 'Sort',
                    'total' => 'level_gems total|level_gems total',
            ],


            'content' => [
                    'created_at'    => 'Created At',
                     'deleted_at'    => 'Deleted At',
                    'last_updated'  => 'Last Update',     


            ]
            ],


            
            'boxes' => [
            'management' => 'Boxes Management',
            'create'     => 'Create Box',
            'view' => 'View Box',
            'edit'       => 'Edit Box',

            'table' => [
                    'name' => "Name", 
                    'description' => "Description", 
                    'clickable_radius' => "Clickable Radius", 
                    'create_at' => "Create At", 
                    'updated_at' => "Updated At", 
                    'deleted_at' => "Deleted At", 
                    'sort'  => 'Sort',
                    'total' => 'boxes total|boxes total',
            ],


            'content' => [
                    'created_at'    => 'Created At',
                     'deleted_at'    => 'Deleted At',
                    'last_updated'  => 'Last Update',      


            ]
            ],


            
            'box_gems' => [
            'management' => 'BoxGems Management',
            'create'     => 'Create BoxGem',
            'view' => 'View BoxGem',
            'edit'       => 'Edit BoxGem',

            'table' => [
                    'gem_id' => "Gem Name", 
                    'box_id' => "Box Name", 
                    'create_at' => "Create At", 
                    'updated_at' => "Updated At", 
                    'deleted_at' => "Deleted At", 
                    'sort'  => 'Sort',
                    'total' => 'box_gems total|box_gems total',
            ],


            'content' => [
                    'created_at'    => 'Created At',
                     'deleted_at'    => 'Deleted At',
                    'last_updated'  => 'Last Update',     


            ]
            ],


            
            'box_sightings' => [
            'management' => 'BoxSightings Management',
            'create'     => 'Create BoxSighting',
            'view' => 'View BoxSighting',
            'edit'       => 'Edit BoxSighting',

            'table' => [
                    'player_id' => "Player Name", 
                    'box_id' => "Box Name", 
                    'lat' => "Lat", 
                    'lng' => "Lng", 
                    'create_at' => "Create At", 
                    'updated_at' => "Updated At", 
                    'deleted_at' => "Deleted At", 
                    'sort'  => 'Sort',
                    'total' => 'box_sightings total|box_sightings total',
            ],


            'content' => [
                    'created_at'    => 'Created At',
                     'deleted_at'    => 'Deleted At',
                    'last_updated'  => 'Last Update',       


            ]
            ],


            
            'items' => [
            'management' => 'Items Management',
            'create'     => 'Create Item',
            'view' => 'View Item',
            'edit'       => 'Edit Item',

            'table' => [
                    'name' => "Name", 
                    'description' => "Description", 
                    'clickable_radius' => "Clickable Radius", 
                    'create_at' => "Create At", 
                    'updated_at' => "Updated At", 
                    'deleted_at' => "Deleted At", 
                    'sort'  => 'Sort',
                    'total' => 'items total|items total',
            ],


            'content' => [
                    'created_at'    => 'Created At',
                     'deleted_at'    => 'Deleted At',
                    'last_updated'  => 'Last Update',      


            ]
            ],


            
            'box_items' => [
            'management' => 'BoxItems Management',
            'create'     => 'Create BoxItem',
            'view' => 'View BoxItem',
            'edit'       => 'Edit BoxItem',

            'table' => [
                    'item_id' => "Item Name", 
                    'box_id' => "Box Name", 
                    'create_at' => "Create At", 
                    'updated_at' => "Updated At", 
                    'deleted_at' => "Deleted At", 
                    'sort'  => 'Sort',
                    'total' => 'box_items total|box_items total',
            ],


            'content' => [
                    'created_at'    => 'Created At',
                     'deleted_at'    => 'Deleted At',
                    'last_updated'  => 'Last Update',     


            ]
            ],


            // Do not delete me :) I'm used for auto-generation
    ],
    'frontend' => [
        'auth' => [
            'login_box_title'    => 'Login',
            'login_button'       => 'Login',
            'login_with'         => 'Login with :social_media',
            'register_box_title' => 'Register',
            'register_button'    => 'Register',
            'remember_me'        => 'Remember Me',
        ],
        'contact' => [
            'box_title' => 'Contact Us',
            'button' => 'Send Information',
        ],
        'passwords' => [
            'expired_password_box_title' => 'Your password has expired.',
            'forgot_password'                 => 'Forgot Your Password?',
            'reset_password_box_title'        => 'Reset Password',
            'reset_password_button'           => 'Reset Password',
            'update_password_button'           => 'Update Password',
            'send_password_reset_link_button' => 'Send Password Reset Link',
        ],
        'user' => [
            'passwords' => [
                'change' => 'Change Password',
            ],
            'profile' => [
                'avatar'             => 'Avatar',
                'created_at'         => 'Created At',
                'edit_information'   => 'Edit Information',
                'email'              => 'E-mail',
                'last_updated'       => 'Last Updated',
                'name'               => 'Name',
                'first_name'         => 'First Name',
                'last_name'          => 'Last Name',
                'update_information' => 'Update Information',
            ],
        ],
    ],
];