<?php

/*Route::get('calculator', function(){
    echo 'Hello from the calculator package!';
});*/


Route::get('timezone/{timezone?}',
    'irabbi\timezone\TimezonesController@index');
