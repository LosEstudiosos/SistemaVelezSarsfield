<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;
use JeroenNoten\LaravelAdminLte\Events\BuildingMenu;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        Event::listen(BuildingMenu::class,  function (BuildingMenu $event) {
            $val = User::all()->count();
            $event->menu->addAfter('datos', [
                'text'          => 'Usuarios Registrados('. $val .')',
                'icon_color'    => 'cyan',
                'url'           => '#',
                'icon'          => 'fas fa-sort-amount-up-alt',
                'key'           => 'userCount',
            ]);
        });;
    }
}
