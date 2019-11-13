<?php

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Route;

Route::get('test',function(){
        dd(\Arc92\Chapar\Https\Controllers\ChaparFacade::send('10004346',['09363223600'],'test'));

});


