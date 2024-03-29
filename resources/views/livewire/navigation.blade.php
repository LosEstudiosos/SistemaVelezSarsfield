<div>
    @php
    $nav_links = [
        [
            'name' => 'Propuesta Academica',
            'route' => route('propuesta'),
            'active' => request()->routeIs('propuesta'),
        ],
        
        [
            'name' => 'Contacto',
            'route' => route('contacto'),
            'active' => request()->routeIs('contacto'),
        ],
    ];
    @endphp
    <!-- This example requires Tailwind CSS v2.0+ -->
    <nav class="bg-gray-800" x-data="{ open: false }">
        <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
            <div class="relative flex items-center justify-between h-16">
                <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                    <!-- Mobile menu button-->
                    <button x-on:click="open = true" type="button"
                        class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                        aria-controls="mobile-menu" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <!--
                Icon when menu is closed.
    
                Heroicon name: outline/menu
    
                Menu open: "hidden", Menu closed: "block"
                -->
                        <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <!--
                Icon when menu is open.
    
                Heroicon name: outline/x
    
                Menu open: "block", Menu closed: "hidden"
                -->
                        <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
                    <a href="/" class="flex-shrink-0 flex items-center">
                        <img class="block rounded-md lg:hidden h-12 w-auto" src="{{asset('img/logo.png')}}" alt="">
                        <img class="hidden rounded-md lg:block h-12 w-auto" src="{{asset('img/logo.png')}}" alt="">
                        <p class="font-sans text-white ml-4 text-center hidden lg:block">Velez Sarsfield</p>
                    </a>
                    <div class="hidden sm:block sm:ml-6">
                        <div class="flex space-x-4 py-5">
                            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                            {{-- <a href="#" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium"
                                aria-current="page">Dashboard</a> --}}

                            @foreach ($nav_links as $nav_link)
                            <x-jet-responsive-nav-link href="{{ $nav_link['route'] }}" :active="$nav_link['active']">
                                {{ $nav_link['name'] }}
                            </x-jet-responsive-nav-link>
                            @endforeach

                            {{-- <a href="#"
                                class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Team</a>

                            <a href="#"
                                class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Projects</a>

                            <a href="#"
                                class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Calendar</a>
                            --}}
                        </div>
                    </div>
                </div>

                @auth
                <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                    @can('cargaNotas')
                    <button type="button"
                        class="bg-gray-800 p-1 rounded-full text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
                        <span class="sr-only">View notifications</span>
                        <!-- Heroicon name: outline/bell -->
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                        </svg>
                    </button>
                    @endcan


                    <!-- Profile dropdown -->
                    <div class="ml-3 relative" x-data="{ open: false }" id="userData">
                        <div>
                            <button x-on:click="open = true" type="button"
                                class="bg-gray-800 flex text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white"
                                id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                <span class="sr-only">Open user menu</span>
                                <img class="h-8 w-8 rounded-full" src="{{ auth()->user()->profile_photo_url }}" alt="">
                            </button>
                        </div>

                        <!--
                                                    Dropdown menu, show/hide based on menu state.
                                        
                                                    Entering: "transition ease-out duration-100"
                                                        From: "transform opacity-0 scale-95"
                                                        To: "transform opacity-100 scale-100"
                                                    Leaving: "transition ease-in duration-75"
                                                        From: "transform opacity-100 scale-100"
                                                        To: "transform opacity-0 scale-95"
                                                    -->
                        <div x-show="open" x-on:click.away="open = false"
                            class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
                            role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                            <!-- Active: "bg-gray-100", Not Active: "" -->
                            <a href="{{ route('profile.show') }}" class="block px-4 py-2 text-sm text-gray-700"
                                role="menuitem" tabindex="-1" id="user-menu-item-0">Editar perfil</a>
                            <!--
                            @hasanyrole('Admin|Directivo')
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"
                                id="user-menu-item-1">Área personal</a>
                            @endhasanyrole
                            -->
                            @hasrole('Admin')
                            <a href="{{ route('admin.user.list') }}" class="block px-4 py-2 text-sm text-gray-700"
                                role="menuitem" tabindex="-1" id="user-menu-item-1">Usuarios</a>
                            @endhasrole

                            @hasrole('Admin')
                            <a href="{{ route('admin.users.index') }}" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"
                                id="user-menu-item-1">Roles</a>
                            @endhasrole

                            @hasrole('Admin')
                            <a href="{{ route('admin.roles.index') }}" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"
                                id="user-menu-item-1">Permisos</a>
                            @endhasrole

                            @hasrole('Admin')
                            <a href="{{ route('admin.cargarNotas.index') }}"  class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"
                                id="user-menu-item-1">Cargar notas</a>
                            @endhasrole

                            <a href="{{ route('admin.calendarios') }}" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"
                                id="user-menu-item-1">Calendario</a>

                            <a href="{{ route('admin.mail.list.inbox') }}" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"
                                id="user-menu-item-1">Mensajeria</a>

                            @hasrole('Alumno')
                            <a href="{{ route('admin.libreta') }}" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"
                                id="user-menu-item-1">Libreta</a>
                            @endhasrole

                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf

                                <a href="{{ route('logout') }}" class="block px-4 py-2 text-sm text-gray-700"
                                    role="menuitem" tabindex="-1" id="user-menu-item-2"
                                    @click.prevent="$root.submit();">Cerrar sesion</a>
                            </form>

                        </div>
                    </div>
                </div>
                @else
                <div>
                    <a href="{{ route('login') }}"
                        class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Iniciar sesion</a>
                    <a href="{{ route('register') }}"
                        class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Registrarse</a>
                </div>

                @endauth

            </div>
        </div>

        <!-- Mobile menu, show/hide based on menu state. -->
        <div class="sm:hidden" id="mobile-menu" x-show="open" x-on:click.away="open = false">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                {{-- <a href="#" class="bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium"
                    aria-current="page">Dashboard</a> --}}

                @foreach ($nav_links as $nav_link)
                <x-jet-responsive-nav-link href="{{ $nav_link['route'] }}" :active="$nav_link['active']">
                    {{ $nav_link['name'] }}
                </x-jet-responsive-nav-link>
                @endforeach
                {{-- <a href="#"
                    class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Team</a>

                <a href="#"
                    class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Projects</a>

                <a href="#"
                    class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Calendar</a>
                --}}
            </div>
        </div>
    </nav>

</div>