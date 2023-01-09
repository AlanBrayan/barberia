<?php

use App\EmpleadosModel;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', function () {
    return view('layouts.index');
});

Route::get('/index', function () {
    return view('templates.index');
});

Route::name('login')->get('login/', 'SistemController@login');

Route::name('iniciar_sesion')->get('iniciar_sesion/', 'SistemController@iniciar_sesion');

Route::name('home')->get('home/', 'SistemController@home');

Route::name('elements')->get('elements/', 'SistemController@elements');

Route::name('catalogo')->get('catalogo/', 'SistemController@catalogo');
Route::name('catalogo1')->get('catalogo1/', 'SistemController@catalogo1');

Route::name('validar')->post('validar/', 'LoginController@validar');

Route::name('logout')->get('logout/', 'LoginController@logout');

//Route::name('paywithpaypal')->get('paywithpaypal/', 'PaymentController@paywithpaypal');


Route::get('/paypal/pay', 'PaymentController@payWithPayPal');
Route::get('/paypal/status', 'PaymentController@payPalStatus');

// route for processing payment
//Route::post('paypal', 'PaymentController@payWithpaypal');

// route for check status of the payment
//Route::get('status', 'PaymentController@getPaymentStatus');

//-------------------------------------------Usuarios--------------------------------------------------------------

Route::name('usuarios')->get('usuarios/', 'SistemController@usuarios');

Route::name('guardar')->post('guardar/', 'SistemController@guardar');

Route::name('registrarse')->get('registrarse/', 'SistemController@registrarse');

Route::name('modificar')->get('modificar/{id}', 'SistemController@modificar');

Route::name('salvar')->put('salvar/{id}', 'SistemController@salvar');

Route::name('borrar')->get('borrar/{id}', 'SistemController@borrar');


//-------------------------------------------Productos--------------------------------------------------------------

Route::name('productos')->get('productos/{buscar?}', 'SistemController@productos');


Route::name('guardarProductos')->post('guardarProductos/', 'SistemController@guardarProductos');

Route::name('registrarProductos')->get('registrarProductos/', 'SistemController@registrarProductos');

Route::name('modificarProductos')->get('modificarProductos/{id}', 'SistemController@modificarProductos');

Route::name('salvarProductos')->put('salvarProductos/{id}', 'SistemController@salvarProductos');

Route::name('borrarProducto')->get('borrarProducto/{id}', 'SistemController@borrarProducto');


//-------------------------------------------Servicios--------------------------------------------------------------

Route::name('servicios')->get('servicios/{buscar?}', 'SistemController@servicios');

Route::name('guardarServicios')->post('guardarServicios/', 'SistemController@guardarServicios');

Route::name('registrarServicios')->get('registrarServicios/', 'SistemController@registrarServicios');

Route::name('modificarServicios')->get('modificarServicios/{id}', 'SistemController@modificarServicios');

Route::name('salvarServicios')->put('salvarServicios/{id}', 'SistemController@salvarServicios');

Route::name('borrarServicio')->get('borrarServicio/{id}', 'SistemController@borrarServicio');

//-------------------------------------------Empleados--------------------------------------------------------------

Route::name('empleados')->get('empleados/{buscar?}', 'SistemController@empleados');

Route::name('guardarEmpleados')->post('guardarEmpleados/', 'SistemController@guardarEmpleados');

Route::name('registrarEmpleados')->get('registrarEmpleados/', 'SistemController@registrarEmpleados');

Route::name('modificarEmpleados')->get('modificarEmpleados/{id}', 'SistemController@modificarEmpleados');

Route::name('salvarEmpleados')->put('salvarEmpleados/{id}', 'SistemController@salvarEmpleados');

Route::name('borrarEmpleado')->get('borrarEmpleado/{id}', 'SistemController@borrarEmpleado');


//-------------------------------------------Ventas--------------------------------------------------------------
Route::name('ventas')->get('ventas/', 'SistemController@ventas');


//Route::post('guardarVentas', [SistemController::class, 'guardarVentas'])->name('guardarVentas');

Route::name('guardarVentas')->post('guardarVentas/', 'SistemController@guardarVentas');

Route::name('registrarVentas')->get('registrarVentas/', 'SistemController@registrarVentas');
Route::name('registrarVentasUsuario')->get('registrarVentasUsuario/', 'SistemController@registrarVentasUsuario');


Route::name('modificarVentas')->get('modificarVentas/{id}', 'SistemController@modificarVentas');

Route::name('salvarVentas')->put('salvarVentas/{id}', 'SistemController@salvarVentas');

Route::name('borrarVenta')->get('borrarVenta/{id}', 'SistemController@borrarVenta');




//-------------------------------------------Materiales--------------------------------------------------------------
Route::name('materiales')->get('materiales/', 'CRUDController@materiales');

Route::name('guardarMateriales')->post('guardarMateriales/', 'CRUDController@guardarMateriales');

Route::name('registrarMateriales')->get('registrarMateriales/', 'CRUDController@registrarMateriales');

Route::name('modificarMateriales')->get('modificarMateriales/{id}', 'CRUDController@modificarMateriales');

Route::name('salvarMateriales')->put('salvarMateriales/{id}', 'CRUDController@salvarMateriales');

Route::name('borrarMaterial')->get('borrarMaterial/{id}', 'CRUDController@borrarMaterial');

Route::name('addCarrito')->get('addCarrito/{id?}', 'SistemController@addCarrito');

Route::name('detalleProducto')->get('detalleProducto/{id?}', 'SistemController@detalleProducto');

Route::name('detalleServicio')->get('detalleServicio/{id?}', 'SistemController@detalleServicio');


Route::name('buscar')->get('buscar/', 'SistemController@buscar');
Route::name('buscar2')->get('buscar2/', 'SistemController@buscar2');

Route::name('carrito')->get('carrito/', 'SistemController@carrito');

Route::post('/cart-add',    'CartController@add')->name('cart.add');




Route::get('/cart-checkout','CartController@cart')->name('cart.checkout');

Route::post('/cart-clear',  'CartController@clear')->name('cart.clear');

Route::post('/cart-removeitem',  'CartController@removeitem')->name('cart.removeitem');




//------------------------------------------Direcciones--------------------------------------------------------------

Route::name('Direcciones2')->get('Direcciones2/', 'CRUDController@Direcciones2');

Route::name('guardarDirecciones2')->post('guardarDirecciones2/', 'CRUDController@guardarDirecciones2');

Route::name('registrarDirecciones2')->get('registrarDirecciones2/', 'CRUDController@registrarDirecciones2');

Route::name('modificarDirecciones2')->get('modificarDirecciones2/{id}', 'CRUDController@modificarDirecciones2');

// Route::name('salvarDirecciones')->put('salvarDirecciones/{id}', 'CRUDController@salvarDirecciones');

// Route::name('borrarDireccion')->get('borrarDireccion/{id}', 'CRUDController@borrarDireccion');

//------------------------------------------ MIO --------------------------------------------------------------

Route::name('guardarVentas')->get('guardarVentas/{id?}', 'CRUDController@guardarVentas');

Route::name('detalleUsuario')->get('detalleUsuario/', 'SistemController@detalleUsuario');

// Route::name('registrarDireccion')->get('registrarDireccion/{id?}/{cantidad?}', 'SistemController@registrarDireccion');


// Route::name('direcciones')->get('direcciones/', 'CrudController@direcciones');



//-------------------------------------------Citas--------------------------------------------------------------
Route::name('citas')->get('citas/', 'CRUDController@citas');

Route::name('citasEmpleado')->get('citasEmpleado/', 'CRUDController@citasEmpleado');

Route::name('guardarCitas')->post('guardarCitas/', 'CRUDController@guardarCitas');

Route::name('registrarCitas')->get('registrarCitas/', 'CRUDController@registrarCitas');

Route::name('registrarCitasUsuario')->get('registrarCitasUsuario/', 'CRUDController@registrarCitasUsuario');
//
//Route::name('modificarCitas')->get('modificarCitas/{id}', 'CRUDController@modificarCitas');
//
//Route::name('salvarCitas')->put('salvarCitas/{id}', 'CRUDController@salvarCitas');
//
Route::name('borrarCita')->get('borrarCita/{id}', 'CRUDController@borrarCita');



//--------------------------------- Mapas google------------------------------------------
Route::name('mapa')->get('mapa/', 'SistemController@mapa');

//paypal

Route::name('paypal')->get('paypal/', 'SistemController@paypal');

//------------------------------------  Correos con gmail -------------------------



Route::name('emailform')->get('emailform/', 'emailController@emailform');
Route::name('emailsend')->get('emailsend/', 'emailController@emailsend');
Route::name('email_eliminar_usuario')->get('email_eliminar_usuario/', 'emailController@email_eliminar_usuario');
//Route::name('borrarUsuario')->get('borrarUsuario/{id}', 'emailController@borrarUsuario');




Route::get('send-mail', function () {
    $details = [
        'title' => 'Prueba de Correo UTVT 2022',
        'body' => 'En este apartado se colocara el contenido del Correo !!!'
    ];
    \Mail::to('avillavicencio678@yahoo.com')->send(new \App\Mail\PruebaCorreo($details));
    dd("Email Enviado.");
});



////////////////////////////////////////////////////////////////////////////////////////


/////////////////////////////////////////Reportes////////////////////////////////////////////////////////////////////

Route::name('reporteVenta')->get('reporteVenta/', 'ReporteController@reporteVenta');
Route::get('ventas-list-excel', 'ReporteController@exportExcel_Ventas')->name('ventas.excel');
Route::get('ventas-list-pdf', 'ReporteController@exportPdf_Ventas')->name('ventas.pdf');

Route::name('reporteProducto')->get('reporteProducto/', 'ReporteController@reporteProducto');
Route::get('productos-list-excel', 'ReporteController@exportExcel_Productos')->name('productos.excel');
Route::get('productos-list-pdf', 'ReporteController@exportPdf_Productos')->name('productos.pdf');

Route::name('reporteServicio')->get('reporteServicio/', 'ReporteController@reporteServicio');
Route::get('servicios-list-excel', 'ReporteController@exportExcel_Servicios')->name('servicios.excel');
Route::get('servicios-list-pdf', 'ReporteController@exportPdf_Servicios')->name('servicios.pdf');

Route::name('reporteEmpleado')->get('reporteEmpleado/', 'ReporteController@reporteEmpleado');
Route::get('empleados-list-excel', 'ReporteController@exportExcel_Empleados')->name('empleados.excel');
Route::get('empleados-list-pdf', 'ReporteController@exportPdf_Empleados')->name('empleados.pdf');

Route::name('reporteUsuario')->get('reporteUsuario/', 'ReporteController@reporteUsuario');
Route::get('usuarios-list-excel', 'ReporteController@exportExcel_Usuarios')->name('usuarios.excel');
Route::get('usuarios-list-pdf', 'ReporteController@exportPdf_Usuarios')->name('usuarios.pdf');

//Route::name('reporteCita')->get('reporteCita/', 'ReporteController@reporteCita');
//Route::get('usuarios-list-excel', 'ReporteController@exportExcel_Usuarios')->name('usuarios.excel');
//Route::get('usuarios-list-pdf', 'ReporteController@exportPdf_Usuarios')->name('usuarios.pdf');
























Route::get('confirmar_pago', 'PaymentController@confirmar_pago');

Route::name('informacion')->get('informacion/', 'SistemController@informacion');

