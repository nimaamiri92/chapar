<?php

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Route;

Route::get('test',function(){
        dd(\Arc92\Chapar\ChaparFacade::accountInfo());

});


