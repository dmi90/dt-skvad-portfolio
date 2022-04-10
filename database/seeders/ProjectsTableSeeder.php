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
            'long_description' => '<p>Tönnyelvű, Laravel alapú website CMS és esemény szinkronizációs funkciókkal.</p><p><span style="font-weight: bolder;">A projektről:</span></p><ul><li>rendszer- és adatbázis tervezés</li><li>Laravel backend</li><li>multitenancy, egy kód és egy közös adatbázis szolgálja ki a bmc.hu és az opusjazzclub.hu tartalmát, eltérő működéssel</li><li>SPA-jellegű működés (kezdetleges, teljes blade rendert átadva)</li><li>automatikus esemény szinkronizáció (Kelesys, cron)</li><li><span style="font-size: 1rem;">részletes statisztikai oldalak az ügyfél számára</span><br></li><li>alapvető CMS funkciók backend fejlesztései</li></ul><p>Az oldal elérhető itt:&nbsp;<a href="https://bmc.hu/" target="_blank">bmc.hu</a>, <a href="https://opusjazzclub.hu" target="_blank">opusjazzclub.hu</a></p>',
                'seo_name' => 'bmc',
                'cover' => 'projects/5c8378e670ddd36e23e4367c46932cf3.jpg',
                'year' => 2019,
                'sequence' => 1,
                'created_at' => '2022-04-09 15:24:06',
                'updated_at' => '2022-04-09 20:57:21',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'BMC Records - Lemezkiadó',
                'short_description' => 'Lemezkiadó információs és nyilvántartó oldala webáruház funkciókkal, Laravel alapon.',
            'long_description' => '<p>Tönnyelvű, Laravel alapú lemezkiadó website CMS és webáruház funkciókkal, CRM integrációval.</p><p><span style="font-weight: bolder;">A projektről:</span></p><ul><li>rendszer- és adatbázis tervezés</li><li>Laravel backend</li><li>SPA-jellegű működés (kezdetleges, teljes blade rendert átadva)</li><li>webshop fejlesztések</li><li>SimplePay integráció</li><li><span style="font-size: 1rem;">CRM integráció (WinNER)</span></li><li><span style="font-size: 1rem;">részletes statisztikai oldalak az ügyfél számára</span><br></li><li>alapvető CMS funkciók backend fejlesztései</li></ul><p>Az oldal elérhető itt:&nbsp;<a href="https://bmcrecords.hu" target="_blank">bmcrecords.hu</a></p>',
                'seo_name' => 'bmc-records',
                'cover' => 'projects/22ec00b4a48b81ec36892cc9e76b338c.jpg',
                'year' => 2020,
                'sequence' => 2,
                'created_at' => '2022-04-09 15:26:07',
                'updated_at' => '2022-04-09 21:00:40',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'reviCOLLECT',
                'short_description' => 'Auditokat kezelő Windows applikációt támogató online API, form builder és adattitkosító rendszer fejlesztés Laravel alapon.',
            'long_description' => '<p>A projekt során egy vékony webes form megjelenítő applikációt és az ezt felépítő REST API-t fejlesztettünk. A projekt 80%-ban backend irányú fejlesztéseket igényelt, főképp a biztonságra és a terhelhetőségre fókuszálva.</p><p><b>A projektről:</b></p><ul><li>rendszer- és adatbázis tervezés</li><li>Laravel alap</li><li>erősen titkosítás-orientált RESTful API (AES, RSA, base64)</li><li>JWT authentikáció</li><li>IndexedDB fejlesztések</li><li>SPF check alapú levélküldő funkciók</li><li>Form felépítés és kezelés API adatok alapján</li></ul>',
                'seo_name' => 'revicollect',
                'cover' => 'projects/b4a07af527e4797d35dc7bd73e2a6e4b.jpg',
                'year' => 2021,
                'sequence' => 3,
                'created_at' => '2022-04-09 15:26:38',
                'updated_at' => '2022-04-09 20:42:56',
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'Medicontur oldalcsoport',
                'short_description' => 'Termékismertető oldalak partner portállal, változatos jogosultságkezelést igénylő feladatokkal és sokrétű felhasználói funkció fejlesztésekkel.',
            'long_description' => '<p>Többnyelvű Laravel site, multitenancy fejlesztésekkel. Főbb jellemzők:</p><ul><li>rendszer- és adatbázis tervezés</li><li>tartalmi oldalak kiszolgálása, CMS backend fejlesztések</li><li>multitenancy megoldások fejlesztése</li><li>eseménykezelő rendszer</li><li>jogosultságrendszer fejlesztések</li><li>SPA jellegű disztribútor portál backend fejlesztése (REST API-k, ACL)</li></ul><p>Az induló oldala a projektnek elérhető itt: <a href="https://medicontur.com" target="_blank">medicontur.com</a></p>',
                'seo_name' => 'medicontur',
                'cover' => 'projects/eb0ddc5966144edb55e5cbbb86d318cf.jpg',
                'year' => 2021,
                'sequence' => 4,
                'created_at' => '2022-04-09 15:28:23',
                'updated_at' => '2022-04-10 09:01:38',
            ),
            4 => 
            array (
                'id' => 5,
                'title' => 'MOL Oldalcsoport',
                'short_description' => 'Joomla alapú legacy rendszerek karbantartási feladatai.',
            'long_description' => '<p>A fő kihívást a meglévő tartalmak új rendszerekre történő migrálása, a régi, legacy rendszerek karbantartása és biztonságossá tétele jelentette.</p><ul><li>Joomla, legacy Laravel és natív PHP alapú fejlesztések</li><li>legacy kódok karbantartása, rendszeres refaktorálás</li><li>sokszor esetben normalizálatlan adatok kezelése, migrálása</li><li>teljes projektek áthelyezése Laravel alapra</li><li>performance irányú fejlesztések (futási időre / hardware igényre vonatkozóan)</li><li>új tartalmi oldalak, kiegészítő fejlesztések, API-k integrációja</li></ul>',
                'seo_name' => 'mol',
                'cover' => 'projects/b05895437747e9ac99f7f00d72299156.jpg',
                'year' => 2021,
                'sequence' => 5,
                'created_at' => '2022-04-09 15:29:10',
                'updated_at' => '2022-04-09 19:47:34',
            ),
            5 => 
            array (
                'id' => 6,
                'title' => 'Hol vagy Kajla?',
                'short_description' => 'Információs oldal partner portál kiegészítésekkel, számos adminisztratív háttéfunkcióval.',
            'long_description' => '<p>Laravel alapú, főképp tartalmi leíró oldal, amit egy partner portál egészít ki. A CMS-ben kezelt adatok szorosan kapcsolódnak egymáshoz, az évek során folyamatosan épültek egymásra azok a backend fejlesztések, amik alapján a látogatók tájékozódhatnak a projekt világáról.</p><p><b>A projekt fejlesztéséről:</b></p><ul><li>rendszer- és adatbázis tervezés</li><li>Laravel backend</li><li>rendszeres és gyakran változó kampányok menedzselése (sok esetben egyszerű formokról van szó)</li><li>ACL fejlesztések</li><li>API fejlesztések</li><li>részletes statisztikai oldalak az ügyfél számára</li><li>alapvető CMS funkciók</li></ul><p>Az oldal elérhető itt: <a href="https://kajla.hu" target="_blank">kajla.hu</a></p>',
                'seo_name' => 'kajla',
                'cover' => 'projects/5a29df37feecb03ce92ef5f957d1f8e0.jpg',
                'year' => 2019,
                'sequence' => 6,
                'created_at' => '2022-04-09 15:30:36',
                'updated_at' => '2022-04-10 09:02:01',
            ),
            6 => 
            array (
                'id' => 7,
                'title' => 'Sofa Media',
            'short_description' => 'WordPress alapú tartalmi leíró oldal a rendszer kiegészítésével ügyfél igények alapján (pl. extra block builder funkciók, form kezelés háttérfolyamatok).',
            'long_description' => '<p>Egy egyszerűbb WordPress oldal fejlesztése is hozhat olyan ügyfél igényeket, amik emlékezetesek lehetnek. Csak pár szóban:</p><ul><li>form adatainak transzformációja ügyfél igényeknek megfelelően</li><li>automata riportok plugin nélkül</li><li>meglévő block builderen túlmutató, ám extra csomagot (pl. elementor) nem használó fejlesztések</li></ul>',
                'seo_name' => 'sofa-media',
                'cover' => 'projects/e1fd8d38c7b0b34682808db80ca444af.jpg',
                'year' => 2022,
                'sequence' => 9,
                'created_at' => '2022-04-09 15:31:35',
                'updated_at' => '2022-04-09 20:59:12',
            ),
            7 => 
            array (
                'id' => 8,
                'title' => 'GreenLight - Greenroom CMS',
                'short_description' => 'Laravel csomag alapon fejlesztett CMS a Greenroom részére. A cég 2019 óta tucatnyi projektjét fekteti erre az alapra, így biztosítva, hogy mindig olyan funkciókkal bővüljön, amikre valóban szükségük van.',
            'long_description' => '<p>A projekt során többségében a backend fejlesztéseken dolgoztam, ám ezúttal sok esetben a feladatok összefüggései miatt (pl. form builder) frontend-jellegű módosításokban is részt vettem.</p><p>Számos jó Laravel admin panel / CRUD generátor volt már 2019-ben is elérhető, amikor a projekt körvonalazódott és bár sok esetben jobb döntés egy meglévő open-source csomag átalakítása az igényeknek megfelelően, a Greenroom esetében a döntés egy saját Laravel csomag fejlesztése felé billent.</p><p>A fejlesztett megoldás kifejezetten ügyel azokra a pontokra, amikben úgy érezték, többet kell nyújtani:</p><ul><li>vékony, csak szükséges kód</li><li>migrációs fájlok, modellek, seed-ek, kontrollerek generálása tisztább kóddal, mint más csomagoknál tapasztalhatóan</li><li>jól kezelhető admin interfész</li><li>yaml alapú form builder</li><li>1:n kapcsolatok subformokkal történő kezelése</li><li>helperek biztosítása a cég számára</li><li>megfelelő 3rd party függőségek kezelése</li><li>"Developer Kit" felállítása a cég fejlesztői számára, hogy gördülékenyen ki tudják egészíteni a csomag kódját, ha szükséges</li><li>Semver</li><li>dokumentáció</li></ul><p>A jelenleg stable release-ek dokumentációja <a href="https://cms.greenroom.hu/" target="_blank">itt érhető el</a>, a csomag privát és a Greenroom tulajdona. Jelenleg fejlesztés alatt áll a projekt 2022-es változata, ami sok szempontból eltér a tradicionális Blade / jQuery alapú és API-t viszonylag keveset használó mostani megoldástól és inkább egy leválasztott API-orientált, Vue.js alapú csomag lesz.</p>',
                'seo_name' => 'greenlight',
                'cover' => 'projects/ea98457de5ee73ab4e5ed6088447b8d5.jpg',
                'year' => 2019,
                'sequence' => 8,
                'created_at' => '2022-04-09 15:32:45',
                'updated_at' => '2022-04-09 19:26:03',
            ),
            8 => 
            array (
                'id' => 9,
                'title' => 'GreenDusk - Böngésző alapú tesztrendszer & monitoring',
                'short_description' => 'A GreenLight és a Laravel Dusk találkozása, aminek eredménye egy könnyen adminisztrálható tesztrendszer, ami előre definiált teszteseteket megadott időközönként futtat és értékel ki.',
            'long_description' => '<p>A projekt során kihívás volt, hogy a Dusk kódbázisa alapvetően a Laravel artisan keretére fekszik rá, programatikus hívásokkal rengeteg hibába vagy fals visszajelzésbe ütköztünk. Végeredményképp egy olyan teszt- és monitoring rendszer született, aminek segítségével átlag felhasználó is létre tud olyan teszteseteket hozni (és azokat később is elérni, illetve automatikusan futtatni periodikusan), ami kész webes projektjeinek bizonyos funkcióit vizsgálja.</p><p><b>A rendszerről:</b></p><ul><li>Laravel backend</li><li>GreenLight CMS csomag kiegészítő fejlesztések</li><li>grafikus teszteset generátor rendszer fejlesztése</li><li>ütemezhető tesztesetek</li><li>Chromium alapú tesztrendszer (Laravel Dusk kiegészítő funkciók)</li><li>Slack integráció</li><li>Email értesítések</li></ul><p>A projekt jelenleg kizárólag a Greenroom saját felületén érhető el.</p>',
                'seo_name' => 'greendusk',
                'cover' => 'projects/e132827a97a4ee4d3c1a32452f23eb62.jpg',
                'year' => 2022,
                'sequence' => 7,
                'created_at' => '2022-04-09 15:34:04',
                'updated_at' => '2022-04-09 20:59:22',
            ),
            9 => 
            array (
                'id' => 10,
                'title' => 'Hol vagy Kajla? - Játék portál',
                'short_description' => 'Játék portál Laravel alapon, illetve a játékok működését segítő API kapcsolatok fejlesztése. Külön kihívás volt a meglévő CMS felkészítése ügyfél kérésre, hogy az eredetileg egy jogkörű adminisztrációs felületet látogatók is használhassák saját játékaik létrehozására és megosztására.',
            'long_description' => '<p>A projekt több szempontból is érdekes, tervezést igénylő feladatokat hozott magával:</p><ul><li>a meglévő CMS rendszert fel kellett készíteni, hogy ne csak "Superadmin" jellegű feladatok kezelésére legyen kész, az eddigi funkcióit védve pedig meg kellett nyitni a nagyközönség felé, hogy a tanárok ugyanazon a felületen menedzselhessék saját játékaikat, mint ahol korábban az oldal tartalmait kezelte az ügyfél</li><li>a már meglévő, illetve az akár még csak tervben lévő játékok számára biztosítani kellett egy olyan API-t, ami rugalmas lesz a változásokra és új játékmódokra különösebb extra programozási feladat nélkül is</li><li>mindemellett szempont volt a gyorsaság és a kódbázis egy helyen tartása</li></ul><p><b>Az így született iskolásoknak és tanároknak szánt játék portál jellemzői:</b></p><ul><li>rendszer- és adatbázis tervezés</li><li>Laravel backend</li><li>egyszerű API kommunikáció a játék frontendjével (nem REST)</li><li>szeparált funkciók, de közös backend diákok, tanárok és az ügyfél számára</li><li>részletes statisztikai oldalak az ügyfél számára</li><li>alapvető CMS funkciók</li></ul><p>Az oldal elérhető itt: <a href="https://suli.kajla.hu" target="_blank">suli.kajla.hu</a><br></p>',
                'seo_name' => 'kajla-suli',
                'cover' => 'projects/6e397fac22f71649c75a089aa80273a3.jpg',
                'year' => 2020,
                'sequence' => 10,
                'created_at' => '2022-04-09 15:35:27',
                'updated_at' => '2022-04-10 09:02:16',
            ),
            10 => 
            array (
                'id' => 11,
                'title' => 'Kürt Akadémia - WordPress website',
            'short_description' => 'Tartalmi leíró oldalak és jegyvásárló rendszer (WooCommerce) egyedi funkciókkal, Kulcs-Soft, SimplePay és Microsoft Dynamics 365 (CRM) integrációval.',
            'long_description' => '<div>A projekt során fontos szempont volt a WordPress által sokszor élesen nem határolt frontend-backend feladatok szeparálása, illetve egyes fejlesztések leválasztása ésszerűnek tűnt a gyorsaság és az egyszerű karbantarthatóság érdekében.&nbsp;</div><div><br></div><div>A fejlesztés során a frontend fejlesztők által megálmodott sablon feltöltése megfelelő adatokkal, illetve külső kódok implementációja volt a fő feladat, utóbbiak felelnek a külső rendszerekhez való kapcsolódásért.</div><div><br></div><ul><li>WordPress alap, kiegészítő sablon- és plugin fejlesztések</li><li>WooCommerce kiegészítő fejlesztések, felülbírált kódok (hook-ok többségében)</li><li>Kulcs-Soft integráció (XML)</li><li>Dynamics 365 CRM integráció (+szinkron monitoring)</li><li>SimplePay integráció</li><li>Jegy- és kupongeneráló rendszer fejlesztése</li></ul><p>Az oldal elérhető itt:&nbsp;<a href="https://kurtakademia.hu/" target="_blank">kurtakademia.hu</a></p>',
                'seo_name' => 'kurt-akademia',
                'cover' => 'projects/a352242bb8f1bf443de0a61f468ea5ee.jpg',
                'year' => 2020,
                'sequence' => 11,
                'created_at' => '2022-04-09 15:37:24',
                'updated_at' => '2022-04-09 18:35:45',
            ),
            11 => 
            array (
                'id' => 12,
                'title' => 'OJV - Országos Jótékonysági Vadászat',
                'short_description' => 'Információs és eseményregisztrációs weboldal Laravel alapon, számos adminisztratív és automatikus riport kiegészítő funkcióval.',
            'long_description' => '<div>Főképp backend fejlesztési feladatok egy információs site létrehozásakor illetve karbantartásakor. A projekt részét képezte a frontend fejlesztők számára előállított natív Bootstrap-szintű, már működő prototípus is.</div><div><br></div><ul><li>rendszer- és adatbázis tervezés</li><li>Laravel backend</li><li>multitenancy (egy időben felelt más regionális site-ok eltérő tartalmának megjelenítéséért, ugyanazzal a kódbázissal dolgozva)</li><li>többnyelvű site, tükörfordítással</li><li>szofisztikált regisztrációs rendszer, díjak, szezonok kezelése</li><li>Barion integráció</li><li>MailChimp integráció</li><li>automatikus .xls riportok (scheduled tasks, PHPSpreadsheet)</li><li>adatok archiválására irányuló fejlesztések</li></ul><p>Az oldal elérhető itt: <a href="https://ojv.hu" target="_blank">ojv.hu</a></p>',
                'seo_name' => 'ojv',
                'cover' => 'projects/cd484f5fdf62a04175cc00da2c844e5e.jpg',
                'year' => 2019,
                'sequence' => 12,
                'created_at' => '2022-04-09 15:37:54',
                'updated_at' => '2022-04-10 09:02:36',
            ),
        ));
        
        
    }
}