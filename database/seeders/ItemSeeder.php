<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            'Nama_Barang' => 'Iphone 20 Pro Max ',
            'Details' => 'NETWORK	Technology	
                GSM / HSPA / LTE
                LAUNCH	Announced	2020, July 28
                Status	Available. Released 2020, July 28
                BODY	Dimensions	164.5 x 75.9 x 9.8 mm (6.48 x 2.99 x 0.39 in)
                Weight	209 g (7.37 oz)
                Build	Glass front, plastic frame, plastic back
                SIM	Dual SIM (Nano-SIM, dual stand-by)
                DISPLAY	Type	IPS LCD
                Size	6.5 inches, 102.0 cm2 (~81.7% screen-to-body ratio)
                Resolution	720 x 1600 pixels, 20:9 ratio (~270 ppi density)
                Protection	Corning Gorilla Glass
                PLATFORM	OS	Android 10, Realme UI
                Chipset	MediaTek MT6765G Helio G35 (12 nm)
                CPU	Octa-core (4x2.3 GHz Cortex-A53 & 4x1.8 GHz Cortex-A53)
                GPU	PowerVR GE8320
                MEMORY	Card slot	microSDXC (dedicated slot)
                Internal	32GB 3GB RAM, 64GB 3GB RAM, 64GB 4GB RAM, 128GB 4GB RAM               
                ',
            'Harga'    => 'RP. 19.000.000,00',
            'Stok'     => '99',
            'Terjual'  => '23',

        ]);
    }
}
