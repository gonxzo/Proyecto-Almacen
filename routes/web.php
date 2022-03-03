<?php

use App\Municipio;
use Illuminate\Support\Facades\Route;

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
    return view('auth.login');
});


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/volver', 'HomeController@volver')->name('volver');
Route::get('material-cantidad', 'MaterialController@upCantidad')->name('materials.ingresos');
Route::post('hyerramienta-cantidad', 'HerramientaController@upCantidad')->name('Herramientas.ingresos');
//Routes
Route::middleware(['auth'])->group(function () {
    Route::post('roles/store', 'RoleController@store')->name('roles.store')->middleware('can:roles.store');
    Route::get('roles', 'RoleController@index')->name('roles.index')->middleware('can:roles.index');
    Route::get('roles/create', 'RoleController@create')->name('roles.create')->middleware('can:roles.create');
    Route::put('roles/{role}', 'RoleController@update')->name('roles.update')->middleware('can:roles.edit');
    Route::get('roles/{role}', 'RoleController@show')->name('roles.show')->middleware('can:roles.show');
    Route::delete('roles/{role}', 'RoleController@destroy')->name('roles.destroy')->middleware('can:roles.destroy');
    Route::get('roles/{role}/edit', 'RoleController@edit')->name('roles.edit')->middleware('can:roles.edit');

    //Usuarios
    Route::get('users', 'UserController@index')->name('users.index')->middleware('can:users.index');
    Route::put('users/{user}', 'UserController@update')->name('users.update')->middleware('can:users.edit');
    Route::get('users/{user}', 'UserController@show')->name('users.show')->middleware('can:users.show');
    Route::delete('users/{user}', 'UserController@destroy')->name('users.destroy')->middleware('can:users.destroy');
    Route::get('users/{user}/edit', 'UserController@edit')->name('users.edit')->middleware('can:users.edit');
    Route::get('users.buscar', 'UserController@buscar')->name('users');
    
    //PROYECTOS
    Route::post('proyectos/store', 'ProyectoController@store')->name('proyectos.store')->middleware('can:proyectos.store');
    Route::get('proyectos/', 'ProyectoController@index')->name('proyectos.index')->middleware('can:proyectos.index');
    Route::get('proyectos/create', 'ProyectoController@create')->name('proyectos.create')->middleware('can:proyectos.create');
    Route::put('proyectos/{proyecto}', 'ProyectoController@update')->name('proyectos.update')->middleware('can:proyectos.edit');
    Route::get('proyectos/{proyecto}', 'ProyectoController@show')->name('proyectos.show')->middleware('can:proyectos.show');
    Route::delete('proyectos/{proyecto}', 'ProyectoController@destroy')->name('proyectos.destroy')->middleware('can:proyectos.destroy');
    Route::get('proyectos/{proyecto}/edit', 'ProyectoController@edit')->name('proyectos.edit')->middleware('can:proyectos.edit');
    
    //MATERIALES
    Route::post('materials/store', 'MaterialController@store')->name('materials.store')->middleware('can:materials.store');
    Route::get('materials', 'MaterialController@index')->name('materials.index')->middleware('can:materials.index');
    Route::get('materials/create', 'MaterialController@create')->name('materials.create')->middleware('can:materials.create');
    Route::put('materials/{material}', 'MaterialController@update')->name('materials.update')->middleware('can:materials.edit');
    Route::get('materials/{material}', 'MaterialController@show')->name('materials.show')->middleware('can:materials.show');
    Route::delete('materials/{material}', 'MaterialController@destroy')->name('materials.destroy')->middleware('can:materials.destroy');
    Route::get('materials/{material}/edit', 'MaterialController@edit')->name('materials.edit')->middleware('can:materials.edit');
    Route::get('material-reporte', 'MaterialController@reportes')->name('materials.reportes');

    //REPORTES
    Route::get('reporte-total', 'ReporteController@index')->name('reportes.index');
    Route::get('reporte-pdf', 'ReporteController@index')->name('reportes.index');

    //HERRAMIENTAS    
    Route::post('herramientas/store', 'HerramientaController@store')->name('herramientas.store')->middleware('can:herramientas.store');
    Route::get('herramientas', 'HerramientaController@index')->name('herramientas.index')->middleware('can:herramientas.index');
    Route::get('herramientas/create', 'HerramientaController@create')->name('herramientas.create')->middleware('can:herramientas.create');
    Route::put('herramientas/{herramienta}', 'HerramientaController@update')->name('herramientas.update')->middleware('can:herramientas.edit');
    Route::get('herramientas/{herramienta}', 'HerramientaController@show')->name('herramientas.show')->middleware('can:herramientas.show');
    Route::delete('herramientas/{herramienta}', 'HerramientaController@destroy')->name('herramientas.destroy')->middleware('can:herramientas.destroy');
    Route::get('herramientas/{herramienta}/edit', 'HerramientaController@edit')->name('herramientas.edit')->middleware('can:herramientas.edit');
    Route::get('herramienta', 'HerramientaController@upCantidad')->name('herramientas.ingresos');
      //CLASIFICACION DE LAS HERRAMIENTAS    
      Route::post('clasherramientas/store', 'ClasherramientaController@store')->name('clasherramientas.store')->middleware('can:clasherramientas.store');
      Route::get('clasherramientas', 'ClasherramientaController@index')->name('clasherramientas.index')->middleware('can:clasherramientas.index');
      Route::get('clasherramientas/create', 'ClasherramientaController@create')->name('clasherramientas.create')->middleware('can:clasherramientas.create');
      Route::put('clasherramientas/{clasherramienta}', 'ClasherramientaController@update')->name('clasherramientas.update')->middleware('can:clasherramientas.edit');
      Route::get('clasherramientas/{clasherramienta}', 'ClasherramientaController@show')->name('clasherramientas.show')->middleware('can:clasherramientas.show');
      Route::delete('clasherramientas/{clasherramienta}', 'ClasherramientaController@destroy')->name('clasherramientas.destroy')->middleware('can:clasherramientas.destroy');
      Route::get('clasherramientas/{clasherramienta}/edit', 'ClasherramientaController@edit')->name('clasherramientas.edit')->middleware('can:clasherramientas.edit');
      //Pedidos completos
      Route::post('pedidocoms/store', 'PedidocomController@store')->name('pedidocoms.store')->middleware('can:pedidocoms.store');
      Route::get('pedidocoms', 'PedidocomController@index')->name('pedidocoms.index')->middleware('can:pedidocoms.index');
      Route::get('pedidocoms/create', 'PedidocomController@create')->name('pedidocoms.create')->middleware('can:pedidocoms.create');
      Route::put('pedidocoms/{pedidocom}', 'PedidocomController@update')->name('pedidocoms.update')->middleware('can:pedidocoms.edit');
      Route::get('pedidocoms/{pedidocom}', 'PedidocomController@show')->name('pedidocoms.show')->middleware('can:pedidocoms.show');
      Route::delete('pedidocoms/{pedidocom}', 'PedidocomController@destroy')->name('pedidocoms.destroy')->middleware('can:pedidocoms.destroy');
      Route::get('pedidocoms/{pedidocom}/edit', 'PedidocomController@edit')->name('pedidocoms.edit')->middleware('can:pedidocoms.edit');
      Route::get('pedidocoms/{pedidocom}','PedidocomController@generaPDF')->name('pedidocoms.pdf')->middleware('can:pedidocoms.edit');
      Route::get('reportesmaterial','PedidocomController@reportetotal')->name('pedidocoms.reportespdf')->middleware('can:pedidocoms.edit');
      Route::get('reporte','PedidocomController@reporte')->name('pedidocoms.reporte');
      Route::get('reportefechas','PedidocomController@reportefechas')->name('pedidocoms.reportefechas')->middleware('can:pedidocoms.reportefechas');
      Route::post('reportefecha','PedidocomController@reporte_fecha')->name('reporte');

      //Pedidos HERRAMIENTAS
        Route::post('pedidohs/store', 'PedidohController@store')->name('pedidohs.store')->middleware('can:pedidohs.store');
        Route::get('pedidohs', 'PedidohController@index')->name('pedidohs.index')->middleware('can:pedidohs.index');
        Route::get('pedidohs/create', 'PedidohController@create')->name('pedidohs.create')->middleware('can:pedidohs.create');
        Route::put('pedidohs/{pedidoh}', 'PedidohController@update')->name('pedidohs.update')->middleware('can:pedidohs.edit');
        Route::get('pedidohs/{pedidoh}', 'PedidohController@show')->name('pedidohs.show')->middleware('can:pedidohs.show');
        Route::delete('pedidohs/{pedidoh}', 'PedidohController@destroy')->name('pedidohs.destroy')->middleware('can:pedidohs.destroy');
        Route::get('pedidohs/{pedidoh}/edit', 'PedidohController@edit')->name('pedidohs.edit')->middleware('can:pedidohs.edit');
        Route::get('pedidohs/{pedidoh}','PedidohController@generaPDF')->name('pedidohs.pdf')->middleware('can:pedidohs.pdf'); 
        Route::get('reportesherramienta','PedidohController@reportetotal')->name('pedidohs.reportespdf');
        Route::get('reportes-herramienta','PedidohController@reportefechas')->name('pedidohs.reportefechas')->middleware('can:pedidohs.reportefechas');
        //Pedidos TRABAJADORES
       Route::post('trabajadors/store', 'TrabajadorController@store')->name('trabajadors.store')->middleware('can:trabajadors.store');
       Route::get('trabajadors', 'TrabajadorController@index')->name('trabajadors.index')->middleware('can:trabajadors.index');
       Route::get('trabajadors/create', 'TrabajadorController@create')->name('trabajadors.create')->middleware('can:trabajadors.create');
       Route::put('trabajadors/{trabajador}', 'TrabajadorController@update')->name('trabajadors.update')->middleware('can:trabajadors.edit');
       Route::get('trabajadors/{trabajador}', 'TrabajadorController@show')->name('trabajadors.show')->middleware('can:trabajadors.show');
       Route::delete('trabajadors/{trabajador}', 'TrabajadorController@destroy')->name('trabajadors.destroy')->middleware('can:trabajadors.destroy');
       Route::get('trabajadors/{trabajador}/edit', 'TrabajadorController@edit')->name('trabajadors.edit')->middleware('can:trabajadors.edit');

       //PEDIDIOS MATERIAL
        Route::post('pedidos/store', 'PedidoController@store')->name('pedidos.store')->middleware('can:pedidos.store');
        Route::get('pedidos', 'PedidoController@index')->name('pedidos.index')->middleware('can:pedidos.index');
        Route::get('pedidos/create', 'PedidoController@create')->name('pedidos.create')->middleware('can:pedidos.create');
        Route::put('pedidos/{pedido}', 'PedidoController@update')->name('pedidos.update')->middleware('can:pedidos.edit');
        Route::get('pedidos/{pedido}', 'PedidoController@show')->name('pedidos.show')->middleware('can:pedidos.show');
        Route::delete('pedidos/{pedido}', 'PedidoController@destroy')->name('pedidos.destroy')->middleware('can:pedidos.destroy');
        Route::get('pedidos/{pedido}/edit', 'PedidoController@edit')->name('pedidos.edit')->middleware('can:pedidos.edit');

          //PEDIDIOS HERRAMIENTAS
          Route::post('pedidoherras/store', 'PedidoherraController@store')->name('pedidoherras.store')->middleware('can:pedidoherras.store');
          Route::get('pedidoherras', 'PedidoherraController@index')->name('pedidoherras.index')->middleware('can:pedidoherras.index');
          Route::get('pedidoherras/create', 'PedidoherraController@create')->name('pedidoherras.create')->middleware('can:pedidoherras.create');
          Route::put('pedidoherras/{pedidoherra}', 'PedidoherraController@update')->name('pedidoherras.update')->middleware('can:pedidoherras.edit');
          Route::get('pedidoherras/{pedidoherra}', 'PedidoherraController@show')->name('pedidoherras.show')->middleware('can:pedidoherras.show');
          Route::delete('pedidoherras/{pedidoherra}', 'PedidoherraController@destroy')->name('pedidoherras.destroy')->middleware('can:pedidoherras.destroy');
          Route::get('pedidoherras/{pedidoherra}/edit', 'PedidoherraController@edit')->name('pedidoherras.edit')->middleware('can:pedidoherras.edit');
     
    //CLEAR
    Route::get('storage-link',function(){
        return Artisan::call('storage:link');
    });
    Route::get('/clear', function() {
        Artisan::call('view:clear');
        Artisan::call('route:clear');
        Artisan::call('config:clear');
        Artisan::call('cache:clear');
        Artisan::call('config:cache');
    });
});
