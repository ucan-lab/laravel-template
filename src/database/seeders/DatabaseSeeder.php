<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Testing\DatabaseTruncation;

final class DatabaseSeeder extends Seeder
{
    use DatabaseTruncation;

    public function __construct(protected readonly Application $app)
    {
    }

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->truncateTablesForAllConnections();
        User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
