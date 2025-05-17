<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Category;
use App\Models\Customer;
use App\Models\Report;
use App\Models\Employee;
use App\Models\Supplier;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Optionally delete existing users
        \App\Models\User::truncate(); // This will delete all existing users

        // Create admin and user
        $admin = \App\Models\User::factory()->create([
            'name' => 'Admin',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin123')
        ]);

        $user = \App\Models\User::factory()->create([
            'name' => 'User',
            'username' => 'user',
            'email' => 'user@gmail.com',
            'password' => Hash::make('user123')
        ]);

        // Create employees, customers, and suppliers
        Employee::factory(5)->create();
        Customer::factory(25)->create();
        Supplier::factory(10)->create();

        // Create products with unique product codes
        for ($i = 0; $i < 10; $i++) {
            Product::factory()->create([
                'product_code' => IdGenerator::generate([
                    'table' => 'products',
                    'field' => 'product_code',
                    'length' => 4,
                    'prefix' => 'PC'
                ])
            ]);
        }

        // Seed categories
        $this->seedCategories();

        // Create permissions
        $this->seedPermissions();

        // Create roles and assign permissions
        $this->seedRoles($admin, $user);

        // Create reports 
        Report::factory(10)->create(); // Create 10 reports
    }

    private function seedCategories()
    {
        $categories = [
            ['name' => 'Category 1', 'slug' => 'category-1'],
            ['name' => 'Category 2', 'slug' => 'category-2'],
            ['name' => 'Category 3', 'slug' => 'category-3'],
            ['name' => 'Category 4', 'slug' => 'category-4'],
            ['name' => 'Category 5', 'slug' => 'category-5'],
        ];

        foreach ($categories as $category) {
            Category::updateOrCreate(
                ['slug' => $category['slug']], // Check for existing slug
                ['name' => $category['name']]  // Create or update
            );
        }
    }

    private function seedPermissions()
    {
        $permissions = [
            'pos.menu',
            'employee.menu',
            'customer.menu',
            'supplier.menu',
            'reports.menu',
            'salary.menu',
            'attendence.menu',
            'category.menu',
            'product.menu',
            'orders.menu',
            'stock.menu',
            'roles.menu',
            'user.menu',
            'database.menu'
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission, 'group_name' => explode('.', $permission)[0]]);
        }
    }

    private function seedRoles($admin, $user)
    {
        $superAdminRole = Role::create(['name' => 'SuperAdmin']);
        $adminRole = Role::create(['name' => 'Admin']);
        $accountRole = Role::create(['name' => 'Account']);
        $managerRole = Role::create(['name' => 'Manager']);

        // Assign permissions to roles
        $superAdminRole->givePermissionTo(Permission::all());
        $adminRole->givePermissionTo(['customer.menu', 'user.menu', 'supplier.menu']);
        $accountRole->givePermissionTo(['customer.menu', 'user.menu', 'supplier.menu']);
        $managerRole->givePermissionTo(['stock.menu', 'orders.menu', 'product.menu', 'salary.menu', 'employee.menu']);

        // Assign roles to users
        $admin->assignRole('SuperAdmin');
        $user->assignRole('Account');
    }
}
