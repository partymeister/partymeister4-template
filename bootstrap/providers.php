<?php

return [
    App\Providers\AppServiceProvider::class,
    App\Providers\FortifyServiceProvider::class,


    Motor\Core\Providers\MotorServiceProvider::class,
    Motor\Backend\Providers\MotorServiceProvider::class,
    Motor\Media\Providers\MotorServiceProvider::class,
    Motor\Revision\Providers\MotorServiceProvider::class,

    Partymeister\Core\Providers\PartymeisterServiceProvider::class,
    Partymeister\Accounting\Providers\PartymeisterServiceProvider::class,
    Partymeister\Competitions\Providers\PartymeisterServiceProvider::class,
    Partymeister\Slides\Providers\PartymeisterServiceProvider::class,
    Partymeister\Competitions\Providers\EventServiceProvider::class,
    Partymeister\Slides\Providers\EventServiceProvider::class,
];
