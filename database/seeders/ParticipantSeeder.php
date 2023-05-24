<?php

namespace Database\Seeders;

use App\Models\Schema;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ParticipantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        try {
            DB::beginTransaction();

            print('Getting all schemas.') . PHP_EOL;
            $schemas = Schema::all();

            print('Found ' . $schemas->count() . ' schemas.') . PHP_EOL;
            print('Seeding participants for each schema.') . PHP_EOL;

            foreach($schemas as $schema)
            {
                for ($i = 0; $i < $schema->jumlah_unit; $i++) {
                    $user = User::factory()->create();
                    $user->participants()->create([
                        'kode_skema' => $schema->kode,
                        'nama_peserta' => $user->name,
                        'jenis_kelamin' => $user->gender,
                        'alamat' => $user->address,
                        'no_hp' => $user->phone,
                    ]);
                }
            }
        } catch (\Throwable $th) {
            DB::rollBack();

            print('An error occured: ' . $th->getMessage()) . PHP_EOL;
        }

        print('No errors occured. Comitting...') . PHP_EOL;

        DB::commit();

        print('Seeding completed.') . PHP_EOL;
    }
}
