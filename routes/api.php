<?php

Route::get('/ok', function (){
    return ['status'=>true];
});

Route::get('/chamados', 'api\ChamadoController@listarTodos');
