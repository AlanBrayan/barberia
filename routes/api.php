<?php



use Illuminate\Http\Request;


Route::post('/altaProducto' , 'ProductosController@altaProducto');


Route::get('/consultaProducto' , 'ProductosController@consultaProducto');



Route::get('/buscaProducto/{id}' , 'ProductosController@buscaProducto');


Route::delete('/eliminaProducto/{id}' , 'ProductosController@eliminaProducto');


Route::put('/eliminaProducto/{id}' , 'ProductosController@eliminaProducto');


Route::put('/modificarProducto' , 'ProductosController@modificarProducto');



//-------------------- Servicios ----------------------------------------------

Route::post('/altaServicio' , 'ServiciosController@altaServicio');


Route::get('/consultaServicio' , 'ServiciosController@consultaServicio');


Route::get('/buscaServicio/{id}' , 'ServiciosController@buscaServicio');


Route::delete('/eliminaServicio/{id}' , 'ServiciosController@eliminaServicio');


Route::put('/modificarServicio' , 'ServiciosController@modificarServicio');






