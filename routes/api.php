<?php

use Illuminate\Http\Request;

Route::get('/chamados', 'api\ChamadoController@listarTodos')->middleware('bindings');



