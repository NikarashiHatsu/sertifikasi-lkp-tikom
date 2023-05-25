<?php

namespace Database\Seeders;

use App\Models\Participant;
use App\Models\Schema;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DummyParticipantDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        try {
            $years = range(2020, now('Y')->isoFormat('YYYY'));
            $months = range(1, 12);

            DB::beginTransaction();

            print('Memulai seeding...') . PHP_EOL;

            foreach($years as $year)
            {
                foreach($months as $month)
                {
                    $total = rand(1, 100);
                    $created_at = "{$year}-{$month}-01 00:00:00";
                    $schema = Schema::inRandomOrder()->first();
                    $user = User::factory()->create();

                    for ($i = 0; $i < $total; $i++) {
                        Participant::create([
                            'user_id' => $user->id,
                            'kode_skema' => $schema->kode,
                            'nama_peserta' => $user->name,
                            'jenis_kelamin' => $user->gender,
                            'alamat' => $user->address,
                            'no_hp' => $user->phone,
                            'created_at' => $created_at,
                            'updated_at' => $created_at,
                        ]);
                    }
                }
            }
        } catch (\Throwable $th) {
            DB::rollBack();

            print('Seeding gagal: ' . $th->getMessage()) . PHP_EOL;
            return;
        }

        DB::commit();

        print('Seeding berhasil') . PHP_EOL;
    }
}
