<?php

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Route;

Route::get('test',function(){
        dd(\Arc92\Chapar\ChaparFacade::send('300002525','09363223600','nima'));
});


