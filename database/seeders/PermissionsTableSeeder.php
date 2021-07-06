<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\Users;
use App\Models\User;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Lista de permisos
		$permission = Permission::create(['name' => 'emails_listar']);
		$permission = Permission::create(['name' => 'emails_crear']);
		$permission = Permission::create(['name' => 'emails_editar']);
		$permission = Permission::create(['name' => 'emails_actualizar']);
		$permission = Permission::create(['name' => 'emails_eliminar']);

		$permission = Permission::create(['name' => 'users_listar']);
		$permission = Permission::create(['name' => 'users_crear']);
		$permission = Permission::create(['name' => 'users_editar']);
		$permission = Permission::create(['name' => 'users_actualizar']);
		$permission = Permission::create(['name' => 'users_eliminar']);

		// Lista de roles
		$Administrator = Role::create(['name' => 'Administrator']);
		$User = Role::create(['name' => 'User']);

		// Se asigna los permisos al rol
		$Administrator->givePermissionTo([
			'users_listar',
			'users_crear',
			'users_editar',
			'users_actualizar',
			'users_eliminar',
		]);

		$User->givePermissionTo([
			'emails_listar',
			'emails_crear',
			'emails_editar',
			'emails_actualizar',
			'emails_eliminar',
		]);

		// Asignamos roles a los usuarios
		$user=new Users;
        $user->email='admin@admin';
        $user->password=bcrypt('admin123');
        $user->name='Admin';
        $user->celular='911';
        $user->cedula='99999999';
        $user->nacimiento='2000-01-01';
        $user->remember_token='';
        $user->save();
        $user = User::find(1);
		$user->assignRole('Administrator');

    }
}
