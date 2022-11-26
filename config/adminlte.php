<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    |
    | Here you can change the default title of your admin panel.
    |
    | For detailed instructions you can look the title section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'title' => 'AdminLTE 3',
    'title_prefix' => '',
    'title_postfix' => '',

    /*
    |--------------------------------------------------------------------------
    | Favicon
    |--------------------------------------------------------------------------
    |
    | Here you can activate the favicon.
    |
    | For detailed instructions you can look the favicon section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'use_ico_only' => false,
    'use_full_favicon' => false,

    /*
    |--------------------------------------------------------------------------
    | Logo
    |--------------------------------------------------------------------------
    |
    | Here you can change the logo of your admin panel.
    |
    | For detailed instructions you can look the logo section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    /*'logo' => '<b>Admin</b>LTE',*/
    'logo' => 'Esc. Velez Sarsfield',
    /*'logo_img' => 'vendor/adminlte/dist/img/AdminLTELogo.png',*/
    'logo_img' => '/img/logo.png',
    /*'logo_img_class' => 'brand-image img-circle elevation-3',*/
    'logo_img_class' => 'brand-image elevation-3',
    'logo_img_xl' => null,
    'logo_img_xl_class' => 'brand-image-xs',
    'logo_img_alt' => 'AdminLTE',

    /*
    |--------------------------------------------------------------------------
    | User Menu
    |--------------------------------------------------------------------------
    |
    | Here you can activate and change the user menu.
    |
    | For detailed instructions you can look the user menu section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'usermenu_enabled' => true,
    'usermenu_header' => true,
    'usermenu_header_class' => 'bg-primary',
    'usermenu_image' => false,
    'usermenu_desc' => false,
    'usermenu_profile_url' => false,

    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    |
    | Here we change the layout of your admin panel.
    |
    | For detailed instructions you can look the layout section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'layout_topnav' => null,
    'layout_boxed' => null,
    'layout_fixed_sidebar' => null,
    'layout_fixed_navbar' => null,
    'layout_fixed_footer' => null,
    'layout_dark_mode' => null,

    /*
    |--------------------------------------------------------------------------
    | Authentication Views Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the authentication views.
    |
    | For detailed instructions you can look the auth classes section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'classes_auth_card' => 'card-outline card-primary',
    'classes_auth_header' => '',
    'classes_auth_body' => '',
    'classes_auth_footer' => '',
    'classes_auth_icon' => '',
    'classes_auth_btn' => 'btn-flat btn-primary',

    /*
    |--------------------------------------------------------------------------
    | Admin Panel Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the admin panel.
    |
    | For detailed instructions you can look the admin panel classes here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'classes_body' => '',
    'classes_brand' => '',
    'classes_brand_text' => '',
    'classes_content_wrapper' => '',
    'classes_content_header' => '',
    'classes_content' => '',
    'classes_sidebar' => 'sidebar-dark-primary elevation-4',
    'classes_sidebar_nav' => '',
    'classes_topnav' => 'navbar-white navbar-light',
    'classes_topnav_nav' => 'navbar-expand',
    'classes_topnav_container' => 'container',

    /*
    |--------------------------------------------------------------------------
    | Sidebar
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar of the admin panel.
    |
    | For detailed instructions you can look the sidebar section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'sidebar_mini' => 'lg',
    'sidebar_collapse' => false,
    'sidebar_collapse_auto_size' => false,
    'sidebar_collapse_remember' => false,
    'sidebar_collapse_remember_no_transition' => true,
    'sidebar_scrollbar_theme' => 'os-theme-light',
    'sidebar_scrollbar_auto_hide' => 'l',
    'sidebar_nav_accordion' => true,
    'sidebar_nav_animation_speed' => 300,

    /*
    |--------------------------------------------------------------------------
    | Control Sidebar (Right Sidebar)
    |--------------------------------------------------------------------------
    |
    | Here we can modify the right sidebar aka control sidebar of the admin panel.
    |
    | For detailed instructions you can look the right sidebar section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'right_sidebar' => false,
    'right_sidebar_icon' => 'fas fa-cogs',
    'right_sidebar_theme' => 'dark',
    'right_sidebar_slide' => true,
    'right_sidebar_push' => true,
    'right_sidebar_scrollbar_theme' => 'os-theme-light',
    'right_sidebar_scrollbar_auto_hide' => 'l',

    /*
    |--------------------------------------------------------------------------
    | URLs
    |--------------------------------------------------------------------------
    |
    | Here we can modify the url settings of the admin panel.
    |
    | For detailed instructions you can look the urls section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'use_route_url' => false,
    'dashboard_url' => 'admin',
    'logout_url' => 'logout',
    'login_url' => 'login',
    'register_url' => 'register',
    'password_reset_url' => 'password/reset',
    'password_email_url' => 'password/email',
    'profile_url' => false,

    /*
    |--------------------------------------------------------------------------
    | Laravel Mix
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Laravel Mix option for the admin panel.
    |
    | For detailed instructions you can look the laravel mix section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Other-Configuration
    |
    */

    'enabled_laravel_mix' => false,
    'laravel_mix_css_path' => 'css/app.css',
    'laravel_mix_js_path' => 'js/app.js',

    /*
    |--------------------------------------------------------------------------
    | Menu Items
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar/top navigation of the admin panel.
    |
    | For detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Menu-Configuration
    |
    */

    'menu' => [
        // Navbar items:
        [
            'type'         => 'navbar-search',
            'text'         => 'search',
            'topnav_right' => true,
        ],
        [
            'type'         => 'fullscreen-widget',
            'topnav_right' => true,
        ],

        // Sidebar items:
        [
            'type' => 'sidebar-menu-search',
            'text' => 'search',
        ],
        [
            'text' => 'blog',
            'url'  => 'admin/blog',
            'can'  => 'manage-blog',
        ],
        [
            'text'        => 'Editar usuarios',
            'url'         => '/admin/usuarios',
            'icon'        => 'far fa-users fa-fw ',
            'can'        => 'listarUsuarios',
        ],
        [
            'text'        => 'Editar roles',
            'route'         => 'admin.users.index',
            'icon'        => 'far fa-users fa-fw ',
            'can'        => 'listarRoles',
        ],
        [
            'text'        => 'Editar permisos',
            'route'         => 'admin.roles.index',
            'icon'        => 'far fa-users fa-fw ',
            'can'        => 'listarUsuarios',
        ],
        [
            'text'        => 'Editar alumnos',
            'route'         => 'admin.alumnos.index',
            'icon'        => 'far fa-users fa-fw ',
            'can'        => 'listarUsuarios',
        ],
        [
            'text'        => 'Cargar notas',
            'route'         => 'admin.cargarNotas.index',
            'icon'        => 'far fa-users fa-fw ',
            'can'        => 'listarUsuarios',
        ],
        [
            'url'         => '/admin/verNotas',
        ],
        /* [
            'text'        => 'pages',
            'url'         => 'admin/pages',
            'icon'        => 'far fa-fw fa-file',
            'label'       => 4,
            'label_color' => 'success',
        ], */

        ['header' => 'account_settings'],
        /* [
            'text' => 'profile',
            'url'  => 'admin/settings',
            'icon' => 'fas fa-fw fa-user',
        ], */
        /* [
            'text' => 'change_password',
            'url'  => 'admin/settings',
            'icon' => 'fas fa-fw fa-lock',
        ], */
        [
            'text'    => 'multilevel',
            'icon'    => 'fas fa-fw fa-share',
            'submenu' => [
                [
                    'text'    => 'Usuarios',
                    'url'     => '#',
                    'submenu' => [
                        [
                            'text' => 'Listar',
                            'route'  => 'admin.user.list',
                        ],
                        [
                            'text' => 'Registrar',
                            'route'  => 'admin.user.new',
                        ],
                    ],
                ],
                [
                    'text'    => 'Mensajeria',
                    'url'     => '#',
                    'submenu' => [
                        [
                            'text' => 'Bandeja de Entrada',
                            'route'  => 'admin.mail.list.inbox',
                        ],
                        [
                            'text' => 'Bandeja de Salida',
                            'route'  => 'admin.mail.list.sent',
                        ],
                        [
                            'text' => 'Borradores',
                            'route'  => 'admin.mail.list.drafts',
                        ],
                        [
                            'text' => 'Borrados',
                            'route'  => 'admin.mail.list.trash',
                        ],
                        [
                            'text' => 'Nuevo',
                            'route'  => 'admin.mail.new',
                        ],
                    ],
                ],
            ],
        ],
        ['header' => 'DATOS', 'key' => 'datos',    ],/*
        [
            'text'       => 'important',
            'icon_color' => 'red',
            'url'        => '#',
        ],
        [
            'text'       => 'warning',
            'icon_color' => 'yellow',
            'url'        => '#',
        ],*/
        [
            'text'       => 'Usuarios Conectados(1)',
            'icon_color' => 'success',
            'url'        => '#',
        ],
        ['header' => 'HERRAMIENTAS'],
        [
            'text'       => 'Log',
            'icon_color' => 'navy',
            'url'        => 'admin/log-viewer',
        ],
        [
            'text'       => 'PHPMyAdmin',
            'icon_color' => 'navy',
            'url'        => 'phpmyadmin/index.php',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Menu Filters
    |--------------------------------------------------------------------------
    |
    | Here we can modify the menu filters of the admin panel.
    |
    | For detailed instructions you can look the menu filters section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Menu-Configuration
    |
    */

    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SearchFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\LangFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\DataFilter::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Plugins Initialization
    |--------------------------------------------------------------------------
    |
    | Here we can modify the plugins used inside the admin panel.
    |
    | For detailed instructions you can look the plugins section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Plugins-Configuration
    |
    */

    'plugins' => [
        'Datatables' => [
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => '/js/datatable/jquery.dataTables.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => '/js/datatable/dataTables.bootstrap5.min.jS',
                ],
                //<!-- v--Extension Responsive--v -->//
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => '/js/datatable/dataTables.responsive.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => '/js/datatable/responsive.bootstrap5.min.js',
                ],
                //<!-- ^--Extension Responsive--^ -->//
                //<!-- v--Extension Impresiones--v -->//
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => '/js/datatable/dataTables.buttons.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => '/js/datatable/buttons.bootstrap5.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => '/js/datatable/jszip.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => '/js/datatable/pdfmake.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => '/js/datatable/vfs_fonts.js',
                ],
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => '/js/datatable/buttons.html5.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => '/js/datatable/buttons.print.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => '/js/datatable/buttons.colVis.min.js',
                ],
                //<!-- ^--Extension Impresiones--^ -->//
                //<!-- v--Extension Condiciones--v -->//
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => '/js/datatable/dataTables.searchBuilder.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => '/js/datatable/searchBuilder.bootstrap5.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => '/js/datatable/dataTables.dateTime.min.js',
                ],
                //<!-- ^--Extension Condiciones--^ -->//
                //<!-- v--Extension CheckBoxes--v -->
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => '/js/datatable/dataTables.checkboxes.min.js',
                ],
                //<!-- ^--Extension CheckBoxes--^ -->//
                //--------------------CSS--------------------//
                [
                    'type' => 'css',
                    'asset' => true,
                    'location' => '/css/datatable/dataTables.bootstrap5.min.css',
                ],
                //<!-- v--Extension Responsive--v -->//
                [
                    'type' => 'css',
                    'asset' => true,
                    'location' => '/css/datatable/responsive.bootstrap5.min.css',
                ],
                //<!-- ^--Extension Responsive--^ -->//
                //<!-- v--Extension Impresiones--v -->
                [
                    'type' => 'css',
                    'asset' => true,
                    'location' => '/css/datatable/buttons.bootstrap5.min.css',
                ],
                //<!-- ^--Extension Impresiones--^ -->//
                //<!-- v--Extension Condiciones--v -->//
                [
                    'type' => 'css',
                    'asset' => true,
                    'location' => '/css/datatable/searchBuilder.bootstrap5.min.css',
                ],
                [
                    'type' => 'css',
                    'asset' => true,
                    'location' => '/css/datatable/dataTables.dateTime.min.css',
                ],
                //<!-- ^--Extension Condiciones--^ -->//
                //<!-- v--Extension CheckBoxes--v -->
                [
                    'type' => 'css',
                    'asset' => true,
                    'location' => '/css/datatable/dataTables.checkboxes.css',
                ],
                //<!-- ^--Extension CheckBoxes--^ -->//
            ],
        ],
        'Select2' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.css',
                ],
            ],
        ],
        'Chartjs' => [
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.min.js',
                ],
            ],
        ],
        'Sweetalert2' => [
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.jsdelivr.net/npm/sweetalert2@8',
                ],
            ],
        ],
        'Pace' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/themes/blue/pace-theme-center-radar.min.css',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js',
                ],
            ],
        ],
        'BootstrapSelect' => [
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => '/js/select2/select2.js',
                ],
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => '/js/select2/i18n/es.js',
                ],
                [
                    'type' => 'css',
                    'asset' => true,
                    'location' => '/css/select2/select2-bootstrap-5-theme.css',
                ],
                [
                    'type' => 'css',
                    'asset' => true,
                    'location' => '/css/select2/select2.css',
                ],
            ],
        ],
        'Summernote' => [
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => '/js/summernote/summernote-bs5.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => '/js/summernote/lang/summernote-es-ES.js',
                ],
                [
                    'type' => 'css',
                    'asset' => true,
                    'location' => '/css/summernote/summernote-bs5.min.css',
                ],
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | IFrame
    |--------------------------------------------------------------------------
    |
    | Here we change the IFrame mode configuration. Note these changes will
    | only apply to the view that extends and enable the IFrame mode.
    |
    | For detailed instructions you can look the iframe mode section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/IFrame-Mode-Configuration
    |
    */

    'iframe' => [
        'default_tab' => [
            'url' => null,
            'title' => null,
        ],
        'buttons' => [
            'close' => true,
            'close_all' => true,
            'close_all_other' => true,
            'scroll_left' => true,
            'scroll_right' => true,
            'fullscreen' => true,
        ],
        'options' => [
            'loading_screen' => 1000,
            'auto_show_new_tab' => true,
            'use_navbar_items' => true,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Livewire
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Livewire support.
    |
    | For detailed instructions you can look the livewire here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Other-Configuration
    |
    */

    'livewire' => true,
];
