<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class roomfacilities extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $facilities = [];

        // Ruangan 1-4 : Laboratorium Komputer, Jaringan, Multimedia
        for ($roomId = 1; $roomId <= 4; $roomId++) {
            $facilities = array_merge($facilities, [
                [
                    'room_id' => $roomId,
                    'name' => 'Komputer',
                    'quantity' => 30,
                    'condition' => 'baik',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'room_id' => $roomId,
                    'name' => 'Proyektor',
                    'quantity' => 1,
                    'condition' => 'baik',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'room_id' => $roomId,
                    'name' => 'AC',
                    'quantity' => 2,
                    'condition' => 'baik',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ]);
        }

        // Lab Kimia
        $facilities = array_merge($facilities, [
            [
                'room_id' => 5,
                'name' => 'Meja Praktikum',
                'quantity' => 15,
                'condition' => 'baik',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'room_id' => 5,
                'name' => 'Lemari Bahan Kimia',
                'quantity' => 2,
                'condition' => 'baik',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'room_id' => 5,
                'name' => 'Proyektor',
                'quantity' => 1,
                'condition' => 'baik',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // Lab Biologi
        $facilities = array_merge($facilities, [
            [
                'room_id' => 6,
                'name' => 'Mikroskop',
                'quantity' => 20,
                'condition' => 'baik',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'room_id' => 6,
                'name' => 'Meja Praktikum',
                'quantity' => 10,
                'condition' => 'baik',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // Ruang Meeting (7-9)
        for ($roomId = 7; $roomId <= 9; $roomId++) {
            $facilities = array_merge($facilities, [
                [
                    'room_id' => $roomId,
                    'name' => 'Meja Meeting',
                    'quantity' => 1,
                    'condition' => 'baik',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'room_id' => $roomId,
                    'name' => 'Kursi',
                    'quantity' => 20,
                    'condition' => 'baik',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'room_id' => $roomId,
                    'name' => 'Proyektor',
                    'quantity' => 1,
                    'condition' => 'baik',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'room_id' => $roomId,
                    'name' => 'AC',
                    'quantity' => 2,
                    'condition' => 'baik',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ]);
        }

        // Aula Utama
        $facilities = array_merge($facilities, [
            [
                'room_id' => 10,
                'name' => 'Kursi',
                'quantity' => 300,
                'condition' => 'baik',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'room_id' => 10,
                'name' => 'Sound System',
                'quantity' => 1,
                'condition' => 'baik',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'room_id' => 10,
                'name' => 'Proyektor',
                'quantity' => 2,
                'condition' => 'baik',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // Ruang Kelas (11-13)
        for ($roomId = 11; $roomId <= 13; $roomId++) {
            $facilities = array_merge($facilities, [
                [
                    'room_id' => $roomId,
                    'name' => 'Meja Mahasiswa',
                    'quantity' => 30,
                    'condition' => 'baik',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'room_id' => $roomId,
                    'name' => 'Kursi',
                    'quantity' => 30,
                    'condition' => 'baik',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'room_id' => $roomId,
                    'name' => 'Proyektor',
                    'quantity' => 1,
                    'condition' => 'baik',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'room_id' => $roomId,
                    'name' => 'AC',
                    'quantity' => 1,
                    'condition' => 'baik',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ]);
        }

        // Studio Rekaman
        $facilities = array_merge($facilities, [
            [
                'room_id' => 14,
                'name' => 'Mikrofon',
                'quantity' => 4,
                'condition' => 'baik',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'room_id' => 14,
                'name' => 'Mixer Audio',
                'quantity' => 1,
                'condition' => 'baik',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'room_id' => 14,
                'name' => 'Speaker Monitor',
                'quantity' => 2,
                'condition' => 'baik',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // Studio Foto & Video
        $facilities = array_merge($facilities, [
            [
                'room_id' => 15,
                'name' => 'Kamera DSLR',
                'quantity' => 5,
                'condition' => 'baik',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'room_id' => 15,
                'name' => 'Lampu Studio',
                'quantity' => 6,
                'condition' => 'baik',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'room_id' => 15,
                'name' => 'Tripod',
                'quantity' => 5,
                'condition' => 'baik',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        DB::table('room_facilities')->insert($facilities);
    }
}
