<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('projects')->delete();

        \DB::table('projects')->insert(array (
            0 =>
            array (
                'id' => 1,
                'title' => 'BMC - Budapest Music Center Site',
                'short_description' => 'Laravel alapú, SPA-jellegű információs website automatikus esemény szinkronizációval, "multi-tenant" alapon.',
                'long_description' => NULL,
                'seo_name' => 'bmc',
                'cover' => 'projects/5c8378e670ddd36e23e4367c46932cf3.jpg',
                'year' => 2019,
                'sequence' => 1,
                'created_at' => '2022-04-09 15:24:06',
                'updated_at' => '2022-04-09 16:35:48',
            ),
            1 =>
            array (
                'id' => 2,
                'title' => 'BMC Records - Lemezkiadó',
                'short_description' => 'Lemezkiadó információs és nyilvántartó oldala webáruház funkciókkal, Laravel alapon.',
                'long_description' => NULL,
                'seo_name' => 'bmc-records',
                'cover' => 'projects/22ec00b4a48b81ec36892cc9e76b338c.jpg',
                'year' => 2019,
                'sequence' => 2,
                'created_at' => '2022-04-09 15:26:07',
                'updated_at' => '2022-04-09 16:36:10',
            ),
            2 =>
            array (
                'id' => 3,
                'title' => 'reviCOLLECT',
                'short_description' => 'Auditokat kezelő Windows applikációt támogató online API, form builder és adattitkosító rendszer fejlesztés Laravel alapon.',
                'long_description' => NULL,
                'seo_name' => 'revicollect',
                'cover' => 'projects/b4a07af527e4797d35dc7bd73e2a6e4b.jpg',
                'year' => 2021,
                'sequence' => 3,
                'created_at' => '2022-04-09 15:26:38',
                'updated_at' => '2022-04-09 16:36:15',
            ),
            3 =>
            array (
                'id' => 4,
                'title' => 'Medicontur oldalcsoport',
                'short_description' => 'Termékismertető oldalak partner portállal, változatos jogosultságkezelést igénylő feladatokkal és sokrétű felhasználói funkció fejlesztésekkel.',
                'long_description' => NULL,
                'seo_name' => 'medicontur',
                'cover' => 'projects/eb0ddc5966144edb55e5cbbb86d318cf.jpg',
                'year' => 2021,
                'sequence' => 4,
                'created_at' => '2022-04-09 15:28:23',
                'updated_at' => '2022-04-09 16:36:24',
            ),
            4 =>
            array (
                'id' => 5,
                'title' => 'MOL Oldalcsoport',
                'short_description' => 'Joomla alapú legacy rendszerek karbantartási feladatai.',
                'long_description' => NULL,
                'seo_name' => 'mol',
                'cover' => 'projects/b05895437747e9ac99f7f00d72299156.jpg',
                'year' => 2021,
                'sequence' => 5,
                'created_at' => '2022-04-09 15:29:10',
                'updated_at' => '2022-04-09 16:36:33',
            ),
            5 =>
            array (
                'id' => 6,
                'title' => 'Hol vagy Kajla?',
                'short_description' => 'Információs oldal partner portál kiegészítésekkel, számos adminisztratív háttéfunkcióval.',
                'long_description' => NULL,
                'seo_name' => 'kajla',
                'cover' => 'projects/5a29df37feecb03ce92ef5f957d1f8e0.jpg',
                'year' => 2020,
                'sequence' => 6,
                'created_at' => '2022-04-09 15:30:36',
                'updated_at' => '2022-04-09 16:36:39',
            ),
            6 =>
            array (
                'id' => 7,
                'title' => 'SOFA Media',
            'short_description' => 'WordPress alapú tartalmi leíró oldal a rendszer kiegészítésével ügyfél igények alapján (pl. extra block builder funkciók, form kezelés háttérfolyamatok).',
                'long_description' => NULL,
                'seo_name' => 'sofa-media',
                'cover' => 'projects/e1fd8d38c7b0b34682808db80ca444af.jpg',
                'year' => 2022,
                'sequence' => 7,
                'created_at' => '2022-04-09 15:31:35',
                'updated_at' => '2022-04-09 16:36:46',
            ),
            7 =>
            array (
                'id' => 8,
                'title' => 'GreenLight - Greenroom CMS',
                'short_description' => 'Laravel csomag alapon fejlesztett CMS a Greenroom részére. A cég 2019 óta tucatnyi projektjét fekteti erre az alapra, így biztosítva, hogy mindig olyan funkciókkal bővüljön, amikre valóban szükségük van.',
                'long_description' => NULL,
                'seo_name' => 'greenlight',
                'cover' => 'projects/ea98457de5ee73ab4e5ed6088447b8d5.jpg',
                'year' => 2019,
                'sequence' => 8,
                'created_at' => '2022-04-09 15:32:45',
                'updated_at' => '2022-04-09 16:36:55',
            ),
            8 =>
            array (
                'id' => 9,
                'title' => 'GreenDusk - Böngésző alapú tesztrendszer & monitoring',
                'short_description' => 'A GreenLight és a Laravel Dusk találkozása, aminek eredménye egy könnyen adminisztrálható tesztrendszer, ami előre definiált teszteseteket megadott időközönként futtat és értékel ki.',
                'long_description' => NULL,
                'seo_name' => 'greendusk',
                'cover' => 'projects/e132827a97a4ee4d3c1a32452f23eb62.jpg',
                'year' => 2022,
                'sequence' => 9,
                'created_at' => '2022-04-09 15:34:04',
                'updated_at' => '2022-04-09 16:37:00',
            ),
            9 =>
            array (
                'id' => 10,
                'title' => 'Hol vagy Kajla? - Játék portál',
                'short_description' => 'Játék portál Laravel alapon, illetve a játékok működését segítő API kapcsolatok fejlesztése. Külön kihívás volt a meglévő CMS felkészítése ügyfél kérésre, hogy az eredetileg egy jogkörű adminisztrációs felületet látogatók is használhassák saját játékaik létrehozására és megosztására.',
                'long_description' => NULL,
                'seo_name' => 'kajla-suli',
                'cover' => 'projects/6e397fac22f71649c75a089aa80273a3.jpg',
                'year' => 2020,
                'sequence' => 10,
                'created_at' => '2022-04-09 15:35:27',
                'updated_at' => '2022-04-09 16:37:08',
            ),
            10 =>
            array (
                'id' => 11,
                'title' => 'Kürt Akadémia - WordPress website',
            'short_description' => 'Tartalmi leíró oldalak és jegyvásárló rendszer (WooCommerce) egyedi funkciókkal, Kulcs-Soft, SimplePay és Microsoft Dynamics 365 (CRM) integrációval.',
                'long_description' => NULL,
                'seo_name' => 'kurt-akademia',
                'cover' => 'projects/a352242bb8f1bf443de0a61f468ea5ee.jpg',
                'year' => 2020,
                'sequence' => 11,
                'created_at' => '2022-04-09 15:37:24',
                'updated_at' => '2022-04-09 16:37:14',
            ),
            11 =>
            array (
                'id' => 12,
                'title' => 'OJV - Országos Jótékonysági Vadászat',
                'short_description' => 'Információs és eseményregisztrációs weboldal Laravel alapon, számos adminisztratív és automatikus riport kiegészítő funkcióval.',
                'long_description' => NULL,
                'seo_name' => 'ojv',
                'cover' => 'projects/cd484f5fdf62a04175cc00da2c844e5e.jpg',
                'year' => 2018,
                'sequence' => 12,
                'created_at' => '2022-04-09 15:37:54',
                'updated_at' => '2022-04-09 16:37:21',
            ),
        ));


    }
}
