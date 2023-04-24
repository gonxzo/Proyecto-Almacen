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
Route::post('pedidoherramientas/store', 'PedidoherramientaController@store')->name('pedidoherramientas.store');
Route::post('materials/store', 'MaterialController@store')->name('materials.store');
Route::post('regpedidomaterials/store', 'RegpedidomaterialController@store')->name('regpedidomaterials.store');
Route::post('regpedidoherramientas/store', 'RegpedidoherramientaController@store')->name('regpedidoherramientas.store');
Route::post('pedidomaterials/store', 'PedidomaterialController@store')->name('pedidomaterials.store');
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
     
      Route::get('regpedidomaterials', 'RegpedidomaterialController@index')->name('regpedidomaterials.index')->middleware('can:regpedidomaterials.index');
      Route::get('regpedidomaterials/create', 'RegpedidomaterialController@create')->name('regpedidomaterials.create')->middleware('can:regpedidomaterials.create');
      Route::put('regpedidomaterials/{regpedidomaterial}', 'RegpedidomaterialController@update')->name('regpedidomaterials.update')->middleware('can:regpedidomaterials.edit');
      Route::get('regpedidomaterials/{regpedidomaterial}', 'RegpedidomaterialController@show')->name('regpedidomaterials.show')->middleware('can:regpedidomaterials.show');
      Route::delete('regpedidomaterials/{regpedidomaterial}', 'RegpedidomaterialController@destroy')->name('regpedidomaterials.destroy')->middleware('can:regpedidomaterials.destroy');
      Route::get('regpedidomaterials/{regpedidomaterial}/edit', 'RegpedidomaterialController@edit')->name('regpedidomaterials.edit')->middleware('can:regpedidomaterials.edit');
      Route::get('regpedidomaterials/{regpedidomaterial}','RegpedidomaterialController@generaPDF')->name('regpedidomaterials.pdf')->middleware('can:regpedidomaterials.pdf');
      Route::get('reportesmaterial','RegpedidomaterialController@reportetotal')->name('regpedidomaterials.reportespdf')->middleware('can:regpedidomaterials.reportespdf');
      Route::get('reporte','RegpedidomaterialController@reporte')->name('regpedidomaterials.reporte');
      Route::get('reportefechas','RegpedidomaterialController@reportefechas')->name('regpedidomaterials.reportefechas')->middleware('can:regpedidomaterials.reportefechas');
      Route::post('reportefecha','RegpedidomaterialController@reporte_fecha')->name('reporte');
      Route::get('reportes-herramienta','RegpedidoherramientaController@reportefechas1')->name('regpedidoherramientas.reportefechas')->middleware('can:regpedidoherramientas.reportefechas');
      Route::post('reportefechaherramienta','RegpedidomaterialController@reporte_fecha1')->name('reporteherras');
      Route::get('reportesmaterial','RegpedidomaterialController@reportetotal')->name('regpedidomaterials.reportespdf'); 

      //Pedidos HERRAMIENTAS
      
        Route::get('regpedidoherramientas', 'RegpedidoherramientaController@index')->name('regpedidoherramientas.index')->middleware('can:regpedidoherramientas.index');
        Route::get('regpedidoherramientas/create', 'RegpedidoherramientaController@create')->name('regpedidoherramientas.create')->middleware('can:regpedidoherramientas.create');
        Route::put('regpedidoherramientas/{regpedidoherramienta}', 'RegpedidoherramientaController@update')->name('regpedidoherramientas.update')->middleware('can:regpedidoherramientas.edit');
        Route::get('regpedidoherramientas/{regpedidoherramienta}', 'RegpedidoherramientaController@show')->name('regpedidoherramientas.show')->middleware('can:regpedidoherramientas.show');
        Route::delete('regpedidoherramientas/{regpedidoherramienta}', 'RegpedidoherramientaController@destroy')->name('regpedidoherramientas.destroy')->middleware('can:regpedidoherramientas.destroy');
        Route::get('regpedidoherramientas/{regpedidoherramienta}/edit', 'RegpedidoherramientaController@edit')->name('regpedidoherramientas.edit')->middleware('can:regpedidoherramientas.edit');
        Route::get('regpedidoherramientas/{regpedidoherramienta}','RegpedidoherramientaController@generaPDF')->name('regpedidoherramientas.pdf')->middleware('can:regpedidoherramientas.pdf'); 
        Route::get('reportesherramienta','RegpedidoherramientaController@reportetotal')->name('regpedidoherramientas.reportespdf');

      
        //Pedidos TRABAJADORES
       Route::post('trabajadors/store', 'TrabajadorController@store')->name('trabajadors.store')->middleware('can:trabajadors.store');
       Route::get('trabajadors', 'TrabajadorController@index')->name('trabajadors.index')->middleware('can:trabajadors.index');
       Route::get('trabajadors/create', 'TrabajadorController@create')->name('trabajadors.create')->middleware('can:trabajadors.create');
       Route::put('trabajadors/{trabajador}', 'TrabajadorController@update')->name('trabajadors.update')->middleware('can:trabajadors.edit');
       Route::get('trabajadors/{trabajador}', 'TrabajadorController@show')->name('trabajadors.show')->middleware('can:trabajadors.show');
       Route::delete('trabajadors/{trabajador}', 'TrabajadorController@destroy')->name('trabajadors.destroy')->middleware('can:trabajadors.destroy');
       Route::get('trabajadors/{trabajador}/edit', 'TrabajadorController@edit')->name('trabajadors.edit')->middleware('can:trabajadors.edit');

       //PEDIDIOS MATERIAL
      
        Route::get('pedidomaterials', 'PedidomaterialController@index')->name('pedidomaterials.index')->middleware('can:pedidomaterials.index');
        Route::get('pedidomaterials/create', 'PedidomaterialController@create')->name('pedidomaterials.create')->middleware('can:pedidomaterials.create');
        Route::put('pedidomaterials/{pedidomaterial}', 'PedidomaterialController@update')->name('pedidomaterials.update')->middleware('can:pedidomaterials.edit');
        Route::get('pedidomaterials/{pedidomaterial}', 'PedidomaterialController@show')->name('pedidomaterials.show')->middleware('can:pedidomaterials.show');
        Route::delete('pedidomaterials/{pedidomaterial}', 'PedidomaterialController@destroy')->name('pedidomaterials.destroy')->middleware('can:pedidomaterials.destroy');
        Route::get('pedidomaterials/{pedidomaterial}/edit', 'PedidomaterialController@edit')->name('pedidomaterials.edit')->middleware('can:pedidomaterials.edit');

          //PEDIDIOS HERRAMIENTAS
         
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
