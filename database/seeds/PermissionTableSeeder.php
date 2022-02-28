<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;
class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     //usuarios
        Permission::create([
            'name'=>'USUARIO',
            'slug'=>'users.index',
            'description'=>'NAVEGA LA TABLA USUARIOS',
        ]);
        Permission::create([
            'name'=>'USUARIO',
            'slug'=>'users.show',
            'description'=>'VISUALIZA A UN USUARIO EN ESPECIFICO',
        ]);
        Permission::create([
            'name'=>'USUARIO',
            'slug'=>'users.edit',
            'description'=>'EDITA A UN USUARIO EN ESPECIFICO',
        ]);
        Permission::create([
            'name'=>'USUARIO',
            'slug'=>'users.destroy',
            'description'=>'ELIMINA UN USUARIO EN ESPECIFICO',
        ]);

        //roles
        Permission::create([
            'name'=>'ROLES',
            'slug'=>'roles.index',
            'description'=>'NAVEGA LA TABLA USUARIOS',
        ]);
        Permission::create([
            'name'=>'ROLES',
            'slug'=>'roles.show',
            'description'=>'VISUALIZA A UN ROL EN ESPECIFICO',
        ]);
        Permission::create([
            'name'=>'ROLES',
            'slug'=>'roles.create',
            'description'=>'CREA UN NUEVO ROL EN EL SISTEMA',
        ]);
        Permission::create([
            'name'=>'ROLES',
            'slug'=>'roles.edit',
            'description'=>'EDITA UN ROL EN ESPECIFICO',
        ]);
        Permission::create([
            'name'=>'ROLES',
            'slug'=>'roles.destroy',
            'description'=>'ELIMINA UN ROL EN ESPECIFICO',
        ]);

        //PROYECTOS
        Permission::create([
            'name'=>'PROYECTOS',
            'slug'=>'proyectos.index',
            'description'=>'NAVEGA LA TABLA PROYECTOS',
        ]);
        Permission::create([
            'name'=>'PROYECTOS',
            'slug'=>'proyectos.show',
            'description'=>'VISUALIZA A UN PROYECTO EN ESPECIFICO',
        ]);
        Permission::create([
            'name'=>'PROYECTOS',
            'slug'=>'proyectos.create',
            'description'=>'CREA UN NUEVO PROYECTO EN EL SISTEMA',
        ]);
        Permission::create([
            'name'=>'PROYECTOS',
            'slug'=>'proyectos.edit',
            'description'=>'EDITA UN PROYECTO EN ESPECIFICO',
        ]);
        Permission::create([
            'name'=>'PROYECTOS',
            'slug'=>'proyectos.destroy',
            'description'=>'ELIMINA UN PROYECTO EN ESPECIFICO',
        ]);

         //MATERIALES
         Permission::create([
            'name'=>'MATERIAL',
            'slug'=>'materials.index',
            'description'=>'NAVEGA LA TABLA MATERIAL',
        ]);
        Permission::create([
            'name'=>'MATERIAL',
            'slug'=>'materials.show',
            'description'=>'VISUALIZA A UN MATERIAL EN ESPECIFICO',
        ]);
        Permission::create([
            'name'=>'MATERIAL',
            'slug'=>'materials.create',
            'description'=>'CREA UN NUEVO MATERIAL EN EL SISTEMA',
        ]);
        Permission::create([
            'name'=>'MATERIAL',
            'slug'=>'materials.edit',
            'description'=>'EDITA UN MATERIAL EN ESPECIFICO',
        ]);
        Permission::create([
            'name'=>'MATERIAL',
            'slug'=>'materials.destroy',
            'description'=>'ELIMINA UN MATERIAL EN ESPECIFICO',
        ]);

        //HERRAMIENTAS
        Permission::create([
            'name'=>'HERRAIENTAS',
            'slug'=>'herramientas.index',
            'description'=>'NAVEGA LA TABLA HERRAIENTAS',
        ]);
        Permission::create([
            'name'=>'HERRAIENTAS',
            'slug'=>'herramientas.show',
            'description'=>'VISUALIZA A UN HERRAIENTA EN ESPECIFICO',
        ]);
        Permission::create([
            'name'=>'HERRAIENTAS',
            'slug'=>'herramientas.create',
            'description'=>'CREA UN NUEVO HERRAIENTA EN EL SISTEMA',
        ]);
        Permission::create([
            'name'=>'HERRAIENTAS',
            'slug'=>'herramientas.edit',
            'description'=>'EDITA UN HERRAIENTA EN ESPECIFICO',
        ]);
        Permission::create([
            'name'=>'HERRAIENTAS',
            'slug'=>'herramientas.destroy',
            'description'=>'ELIMINA UN HERRAIENTA EN ESPECIFICO',
        ]);

        //CLASIFICACION HERRAMIENTAS
        Permission::create([
            'name'=>'CLASHERRAMIENTA',
            'slug'=>'clasherramientas.index',
            'description'=>'NAVEGA LA TABLA CLASHERRAMIENTA',
        ]);
        Permission::create([
            'name'=>'CLASHERRAMIENTA',
            'slug'=>'clasherramientas.show',
            'description'=>'VISUALIZA A UN CLASHERRAMIENTA EN ESPECIFICO',
        ]);
        Permission::create([
            'name'=>'CLASHERRAMIENTA',
            'slug'=>'clasherramientas.create',
            'description'=>'CREA UN NUEVO CLASHERRAMIENTA EN EL SISTEMA',
        ]);
        Permission::create([
            'name'=>'CLASHERRAMIENTA',
            'slug'=>'clasherramientas.edit',
            'description'=>'EDITA UN CLASHERRAMIENTA EN ESPECIFICO',
        ]);
        Permission::create([
            'name'=>'CLASHERRAMIENTA',
            'slug'=>'clasherramientas.destroy',
            'description'=>'ELIMINA UN CLASHERRAMIENTA EN ESPECIFICO',
        ]);

        //LAMACEN MATERIAL
        Permission::create([
            'name'=>'ALMACEN MATERIAL',
            'slug'=>'pedidocoms.index',
            'description'=>'NAVEGA LA TABLA ALMACEN MATERIAL',
        ]);
        Permission::create([
            'name'=>'ALMACEN MATERIAL',
            'slug'=>'pedidocoms.show',
            'description'=>'VISUALIZA A UN ALMACEN MATERIAL EN ESPECIFICO',
        ]);
        Permission::create([
            'name'=>'ALMACEN MATERIAL',
            'slug'=>'pedidocoms.create',
            'description'=>'CREA UN NUEVO ALMACEN MATERIAL EN EL SISTEMA',
        ]);
        Permission::create([
            'name'=>'ALMACEN MATERIAL',
            'slug'=>'pedidocoms.edit',
            'description'=>'EDITA UN ALMACEN MATERIAL EN ESPECIFICO',
        ]);
        Permission::create([
            'name'=>'ALMACEN MATERIAL',
            'slug'=>'pedidocoms.destroy',
            'description'=>'ELIMINA UN ALMACEN MATERIAL EN ESPECIFICO',
        ]);
        Permission::create([
            'name'=>'ALMACEN MATERIAL',
            'slug'=>'pedidocoms.reporte',
            'description'=>'EDITA UN REPORTE GENERAL EN ESPECIFICO',
        ]);
        Permission::create([
            'name'=>'ALMACEN MATERIAL',
            'slug'=>'pedidocoms.reportefechas',
            'description'=>'ELIMINA UN REPORTE POR FECHAS EN ESPECIFICO',
        ]);

         //ALMACEN HERRAMIENTAS
         Permission::create([
            'name'=>'ALMACEN HERRAMIENTAS',
            'slug'=>'pedidohs.index',
            'description'=>'NAVEGA LA TABLA ALMACEN MATERIAL',
        ]);
        Permission::create([
            'name'=>'ALMACEN HERRAMIENTAS',
            'slug'=>'pedidohs.show',
            'description'=>'VISUALIZA A UN ALMACEN MATERIAL EN ESPECIFICO',
        ]);
        Permission::create([
            'name'=>'ALMACEN HERRAMIENTAS',
            'slug'=>'pedidohs.create',
            'description'=>'CREA UN NUEVO ALMACEN HERRAMIENTAS EN EL SISTEMA',
        ]);
        Permission::create([
            'name'=>'ALMACEN HERRAMIENTAS',
            'slug'=>'pedidohs.edit',
            'description'=>'EDITA UN ALMACEN HERRAMIENTAS EN ESPECIFICO',
        ]);
        Permission::create([
            'name'=>'ALMACEN HERRAMIENTAS',
            'slug'=>'pedidohs.destroy',
            'description'=>'ELIMINA UN ALMACEN HERRAMIENTAS EN ESPECIFICO',
        ]);
        Permission::create([
            'name'=>'ALMACEN HERRAMIENTAS',
            'slug'=>'pedidohs.pdf',
            'description'=>'EDITA UN REPORTE HERRAMIENTAS EN ESPECIFICO',
        ]);
        Permission::create([
            'name'=>'ALMACEN HERRAMIENTAS',
            'slug'=>'pedidohs.reportefechas',
            'description'=>'ELIMINA UN REPORTE POR FECHAS EN ESPECIFICO',
        ]);

        
        //PEDIDO MATERIAL
        Permission::create([
            'name'=>'PEDIDO MATERIAL',
            'slug'=>'pedidos.index',
            'description'=>'NAVEGA LA TABLA PEDIDO MATERIAL',
        ]);
        Permission::create([
            'name'=>'PEDIDO MATERIAL',
            'slug'=>'pedidos.show',
            'description'=>'VISUALIZA A UN PEDIDO MATERIAL EN ESPECIFICO',
        ]);
      
        
        Permission::create([
            'name'=>'PEDIDO MATERIAL',
            'slug'=>'pedidos.destroy',
            'description'=>'ELIMINA UN PEDIDO MATERIAL EN ESPECIFICO',
        ]);

         //PEDIDO herrmaientas
         Permission::create([
            'name'=>'PEDIDO HERRAMIENTA',
            'slug'=>'pedidoherras.index',
            'description'=>'NAVEGA LA TABLA PEDIDO HERRAMIENTA',
        ]);
        Permission::create([
            'name'=>'PEDIDO HERRAMIENTA',
            'slug'=>'pedidoherras.show',
            'description'=>'VISUALIZA A UN PEDIDO HERRAMIENTA EN ESPECIFICO',
        ]);
      
        
        Permission::create([
            'name'=>'PEDIDO HERRAMIENTA',
            'slug'=>'pedidoherras.destroy',
            'description'=>'ELIMINA UN PEDIDO HERRAMIENTA EN ESPECIFICO',
        ]);
        
    }
}
