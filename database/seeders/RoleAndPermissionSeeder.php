<?php

namespace Database\Seeders;

use App\Models\Permision;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // permissions
        $createRequest = 'create request';
        $deleteRequest = 'delete request';
        $rejectRequest = 'reject request';
        $approveRequest= 'approve request';

        $createProduct = 'create product';
        $updateProduct = 'update product';
        $editProduct = 'edit product';
        $deleteProduct = 'delete product';

        Permission::create(['name' => $approveRequest]);
        Permission::create(['name' => $rejectRequest]);
        Permission::create(['name' => $deleteRequest]);
        Permission::create(['name' => $createRequest]);
      
        Permission::create(['name' => $createProduct]);
        Permission::create(['name' => $updateProduct]);
        Permission::create(['name' => $editProduct]);
        Permission::create(['name' => $deleteProduct]);


        // roles
        $superAdmin='super-admin';
        $Manager='Manager';
        $client='client';
        Role::create(['name'=>$superAdmin])->givePermissionTo(Permission::all());
        Role::create(['name'=>$Manager]) -> givePermissionTo([
            $createProduct,
            $editProduct,
            $deleteProduct,
            $updateProduct
        ]);
        // Role::create(['name'=>$client])->givePermissionTo([
        //     $createProduct,
        //     $editProduct,
        //     $deleteProduct,
        //     $updateProduct
        // ]);
        
    }
}