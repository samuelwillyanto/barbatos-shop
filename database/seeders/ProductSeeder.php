<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name'=>'Azarine Cosmetic Facial Wash',
            'category_id'=>1,
            'detail'=>'Azarine untuk mencarahkan wajah wanita. Bisa menghilangkan bekas jerawat dan lainnya.',
            'price'=>59000,
            'photo'=>'azarine.jpg_1670826446.jpg'
        ]);

        DB::table('products')->insert([
            'name'=>'CANON EOS 250D KIT 18-55mm III',
            'category_id'=>2,
            'detail'=>'Spesifikasi:
                - 24.1 Megapixel CMOS APS-C sensor - Superb images, packed with detail
                - Dual Pixel CMOS AF - Fast confident focusing with Live View
                Kamera terbaru 2022.',
            'price'=>8900000,
            'photo'=>'canon-eos.jpg_1670830390.jpg'
        ]);

        DB::table('products')->insert([
            'name'=>'BUKU MOTIVASI SAYANGI DIRIMU BERHENTILAH MENYENANGKAN SEMUA ORANG',
            'category_id'=>3,
            'detail'=>'Buku Motivasi Viral FYP Tiktok
            Sayangi Dirimu Berhentilah Menyenangkan Semua Orang terbitan Syalmahat Publishing.',
            'price'=>35000,
            'photo'=>'buku.jpg_1670839042.jpg'
        ]);

        DB::table('products')->insert([
            'name'=>'Azarine Brightening Facial Cleanser 60 Ml',
            'category_id'=>1,
            'detail'=>'Pembersih wajah yang kaya akan vitamin C untuk MENCERAHKAN dan MEMBERSIHKAN kulit dari kotoran dan sisa make up. kandungan Natural AHA dan BHA membantu mengangkat kotoran serta melembabkan kulit.',
            'price'=>35000,
            'photo'=>'azarinewhite.jpg_1670839909.jpg'
        ]);

        DB::table('products')->insert([
            'name'=>'SOMETHINC Holyshield! UV Watery Sunscreen Gel SPF 50+ PA++',
            'category_id'=>1,
            'detail'=>'5-in-1 Cooling Aqua Protection
            Sunscreen Gel dengan SPF 50+ PA++++ & teknologi Encapsulated UV Filter yang memberikan proteksi lebih maksimal dari sinar UVA & UVB.',
            'price'=>49000,
            'photo'=>'somethinc.jpg_1670850225.jpg'
        ]);

        DB::table('products')->insert([
            'name'=>'NIVEA Luminous Anti-Dark Spot Face Sunscreen SPF 50 PA+++',
            'category_id'=>1,
            'detail'=>'NIVEA Luminous Anti-Dark Spot Face Sunscreen SPF 50 PA+++ 40ml | Sunscreen Pencegah Flek Hitam & Melasma dengan 2X Hyaluronic Acid & Vitamin E',
            'price'=>230000,
            'photo'=>'nivea.jpg_1670850329.jpg'
        ]);

        DB::table('products')->insert([
            'name'=>'NIVEA Sun Face Serum Oil Control',
            'category_id'=>1,
            'detail'=>'Serum perlindungan untuk kulit wajah dari sinar Matahari yang memiliki formula campuran spesial. Efektif untuk mengurangi minyak hingga 86% sepanjang hari dan melindungi kulit dari sinar UVB/UVA2 dan UVA1 yang dapat merusak kulit.',
            'price'=>60000,
            'photo'=>'nivea2.jpg_1670850389.jpg'
        ]);

        DB::table('products')->insert([
            'name'=>'Azarine Hydrasoothe Sunscreen Mist SPF50 PA++++ Sun Screen Face Spray',
            'category_id'=>1,
            'detail'=>'Tabir surya spray yang praktis. Di formulasikan “water based” dengan gabungan bahan aktif Hyaluronic Acid, Ceramide dan CICA pada kulit serta melembabkan agar kulit kenyal dan halus sehingga mudah diserap & tidak meninggalkan whitecast pada wajah.',
            'price'=>59000,
            'photo'=>'azarinehydra.jpg_1670850557.jpg'
        ]);

        DB::table('products')->insert([
            'name'=>'Biore UV Aqua Rich Watery Essence Spf50 15Gr 2022',
            'category_id'=>1,
            'detail'=>'Biore UV Aqua Rich Watery Essence Sunscreen Skin Care SPF 50 PA++++ merupakan salah satu varian Biore UV Series dengan Formula Micro Defense yang memberikan perlindungan UVA UVB secara maksimal.',
            'price'=>40000,
            'photo'=>'biore.jpg_1670850607.jpg'
        ]);

        DB::table('products')->insert([
            'name'=>'CANON 4000D KIT 18-55MM III / EOS 4000D KIT',
            'category_id'=>2,
            'detail'=>'18-megapixel APS-C-size CMOS sensor & DIGIC 4+ image processor, 9-point AF with 1 centre cross-type AF point',
            'price'=>3300000,
            'photo'=>'canoneos400d.jpg_1670850812.jpg'
        ]);

        DB::table('products')->insert([
            'name'=>'Canon EOS 90D KIT 18-55MM IS',
            'category_id'=>2,
            'detail'=>'32.5MP APS-C CMOS Sensor
            DIGIC 8 Image Processor
            UHD 4K30p & Full HD 120p Video Recording
            3" 1.04m-Dot Vari-Angle Touchscreen LCD',
            'price'=>19900000,
            'photo'=>'kamera3.jpg_1670851272.jpg'
        ]);

        DB::table('products')->insert([
            'name'=>'Buku How to Read a Person Like a Book',
            'category_id'=>3,
            'detail'=>'- Size : A5
            - Jilid : Softcover/Paperback
            - language : English
            - laminasi : Doff
            - Paper : Bookpaper Cream Premium',
            'price'=>40000,
            'photo'=>'buku2.jpg_1670851091.jpg'
        ]);

        DB::table('products')->insert([
            'name'=>'Rich Dad Poor Dad (Edisi Revisi)',
            'category_id'=>3,
            'detail'=>'Rich Dad Poor Dad akan. Menghancurkan mitos Anda perlu memiliki penghasilan tinggi agar bisa kaya Menantang keyakinan bahwa rumah Anda adalah aset',
            'price'=>68000,
            'photo'=>'buku4.jpg_1670851147.jpg'
        ]);

        DB::table('products')->insert([
            'name'=>'Canon EOS 3000D Kit 18-55mm III - Camera DSLR Canon EOS 3000D Kit Lens',
            'category_id'=>2,
            'detail'=>'Canon EOS 3000D Kit EF-S 18-55mm f/3.5-5.6 III menawarkan pengalaman DSLR klasik bagi para pengguna kamera DSLR yang baru. Canon EOS 3000D Kit 18-55mm dibekali dengan Sensor CMOS ukuran APS-C 18 megapiksel',
            'price'=>3400000,
            'photo'=>'kamera2.jpg_1670851216.jpg'
        ]);
    }
}
