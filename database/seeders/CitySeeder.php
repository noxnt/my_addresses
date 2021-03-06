<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        City::insert([
            ['name' => 'Cherkasy', 'area_id' => 1],
            ['name' => 'Uman', 'area_id' => 1],
            ['name' => 'Smila', 'area_id' => 1],
            ['name' => 'Zolotonosha', 'area_id' => 1],
            ['name' => 'Kaniv', 'area_id' => 1],
            ['name' => 'Vatutine', 'area_id' => 1],
            ['name' => 'Zvenyhorodka', 'area_id' => 1],
            ['name' => 'Shpola', 'area_id' => 1],
            ['name' => 'Korsun-Shevchenkivskyi', 'area_id' => 1],
            ['name' => 'Talne', 'area_id' => 1],
            ['name' => 'Zhashkiv', 'area_id' => 1],
            ['name' => 'Horodysche', 'area_id' => 1],
            ['name' => 'Kamianka', 'area_id' => 1],
            ['name' => 'Chyhyryn', 'area_id' => 1],
            ['name' => 'Khrystynivka', 'area_id' => 1],
            ['name' => 'Monastyrysche', 'area_id' => 1],
            ['name' => 'Maydanets', 'area_id' => 1],
            ['name' => 'Chernihiv', 'area_id' => 2],
            ['name' => 'Nizhyn', 'area_id' => 2],
            ['name' => 'Pryluky', 'area_id' => 2],
            ['name' => 'Bakhmach', 'area_id' => 2],
            ['name' => 'Nosivka', 'area_id' => 2],
            ['name' => 'Novhorod-Siverskyi', 'area_id' => 2],
            ['name' => 'Koriukivka', 'area_id' => 2],
            ['name' => 'Horodnia', 'area_id' => 2],
            ['name' => 'Mena', 'area_id' => 2],
            ['name' => 'Ichnia', 'area_id' => 2],
            ['name' => 'Snovsk', 'area_id' => 2],
            ['name' => 'Bobrovytsia', 'area_id' => 2],
            ['name' => 'Borzna', 'area_id' => 2],
            ['name' => 'Semenivka', 'area_id' => 2],
            ['name' => 'Oster', 'area_id' => 2],
            ['name' => 'Baturyn', 'area_id' => 2],
            ['name' => 'Chernivtsi', 'area_id' => 3],
            ['name' => 'Storozhynets', 'area_id' => 3],
            ['name' => 'Khotyn', 'area_id' => 3],
            ['name' => 'Novodnistrovsk', 'area_id' => 3],
            ['name' => 'Sokyriany', 'area_id' => 3],
            ['name' => 'Zastavna', 'area_id' => 3],
            ['name' => 'Novoselytsia', 'area_id' => 3],
            ['name' => 'Kitsman', 'area_id' => 3],
            ['name' => 'Vashkivtsi', 'area_id' => 3],
            ['name' => 'Vyzhnytsia', 'area_id' => 3],
            ['name' => 'Hertsa', 'area_id' => 3],
            ['name' => 'Simferopol', 'area_id' => 4],
            ['name' => 'Kerch', 'area_id' => 4],
            ['name' => 'Yevpatoria', 'area_id' => 4],
            ['name' => 'Yalta', 'area_id' => 4],
            ['name' => 'Feodosiya', 'area_id' => 4],
            ['name' => 'Dzhankoy', 'area_id' => 4],
            ['name' => 'Alushta', 'area_id' => 4],
            ['name' => 'Bakhchisaray', 'area_id' => 4],
            ['name' => 'Krasnoperekopsk', 'area_id' => 4],
            ['name' => 'Saky', 'area_id' => 4],
            ['name' => 'Armiansk', 'area_id' => 4],
            ['name' => 'Bilohirsk', 'area_id' => 4],
            ['name' => 'Sudak', 'area_id' => 4],
            ['name' => 'Shcholkine', 'area_id' => 4],
            ['name' => 'Staryi Krym', 'area_id' => 4],
            ['name' => 'Alupka', 'area_id' => 4],
            ['name' => 'Dnipro', 'area_id' => 5],
            ['name' => 'Kryvyi Rih', 'area_id' => 5],
            ['name' => 'Kamianske', 'area_id' => 5],
            ['name' => 'Nikopol', 'area_id' => 5],
            ['name' => 'Pavlohrad', 'area_id' => 5],
            ['name' => 'Novomoskovsk', 'area_id' => 5],
            ['name' => 'Marhanets', 'area_id' => 5],
            ['name' => 'Zhovti Vody', 'area_id' => 5],
            ['name' => 'Pokrov', 'area_id' => 5],
            ['name' => 'Synelnykove', 'area_id' => 5],
            ['name' => 'Pershotravensk', 'area_id' => 5],
            ['name' => 'Ternivka', 'area_id' => 5],
            ['name' => 'Vilnohirsk', 'area_id' => 5],
            ['name' => 'Piatykhatky', 'area_id' => 5],
            ['name' => 'Pidhorodne', 'area_id' => 5],
            ['name' => 'Verkhniodniprovsk', 'area_id' => 5],
            ['name' => 'Apostolove', 'area_id' => 5],
            ['name' => 'Zelenodolsk', 'area_id' => 5],
            ['name' => 'Verkhivtseve', 'area_id' => 5],
            ['name' => 'Pereschepyne', 'area_id' => 5],
            ['name' => 'Donetsk', 'area_id' => 6],
            ['name' => 'Mariupol', 'area_id' => 6],
            ['name' => 'Makiivka', 'area_id' => 6],
            ['name' => 'Horlivka', 'area_id' => 6],
            ['name' => 'Kramatorsk', 'area_id' => 6],
            ['name' => 'Sloviansk', 'area_id' => 6],
            ['name' => 'Yenakiieve', 'area_id' => 6],
            ['name' => 'Bakhmut', 'area_id' => 6],
            ['name' => 'Kostiantynivka', 'area_id' => 6],
            ['name' => 'Pokrovsk', 'area_id' => 6],
            ['name' => 'Khartsyzk', 'area_id' => 6],
            ['name' => 'Druzhkivka', 'area_id' => 6],
            ['name' => 'Chystiakove', 'area_id' => 6],
            ['name' => 'Shakhtarsk', 'area_id' => 6],
            ['name' => 'Myrnohrad', 'area_id' => 6],
            ['name' => 'Snizhne', 'area_id' => 6],
            ['name' => 'Yasynuvata', 'area_id' => 6],
            ['name' => 'Avdiivka', 'area_id' => 6],
            ['name' => 'Toretsk', 'area_id' => 6],
            ['name' => 'Dobropillia', 'area_id' => 6],
            ['name' => 'Khrestivka', 'area_id' => 6],
            ['name' => 'Debaltseve', 'area_id' => 6],
            ['name' => 'Lyman', 'area_id' => 6],
            ['name' => 'Selydove', 'area_id' => 6],
            ['name' => 'Volnovakha', 'area_id' => 6],
            ['name' => 'Dokuchaievsk', 'area_id' => 6],
            ['name' => 'Amvrosiivka', 'area_id' => 6],
            ['name' => 'Kurakhove', 'area_id' => 6],
            ['name' => 'Zuhres', 'area_id' => 6],
            ['name' => 'Bilozerske', 'area_id' => 6],
            ['name' => 'Yunokomunarivsk', 'area_id' => 6],
            ['name' => 'Ilovaisk', 'area_id' => 6],
            ['name' => 'Novohrodivka', 'area_id' => 6],
            ['name' => 'Vuhledar', 'area_id' => 6],
            ['name' => 'Krasnohorivka', 'area_id' => 6],
            ['name' => 'Mykolaivka', 'area_id' => 6],
            ['name' => 'Chasiv Yar', 'area_id' => 6],
            ['name' => 'Siversk', 'area_id' => 6],
            ['name' => 'Hirnyk', 'area_id' => 6],
            ['name' => 'Zhdanivka', 'area_id' => 6],
            ['name' => 'Ukrainsk', 'area_id' => 6],
            ['name' => 'Svitlodarsk', 'area_id' => 6],
            ['name' => 'Soledar', 'area_id' => 6],
            ['name' => 'Komsomolske', 'area_id' => 6],
            ['name' => 'Novoazovsk', 'area_id' => 6],
            ['name' => 'Rodynske', 'area_id' => 6],
            ['name' => 'Mospyne', 'area_id' => 6],
            ['name' => 'Maryinka', 'area_id' => 6],
            ['name' => 'Vuhlehirsk', 'area_id' => 6],
            ['name' => 'Bilytske', 'area_id' => 6],
            ['name' => 'Artemove', 'area_id' => 6],
            ['name' => 'Sviatohirsk', 'area_id' => 6],
            ['name' => 'Ivano-Frankivsk', 'area_id' => 7],
            ['name' => 'Kalush', 'area_id' => 7],
            ['name' => 'Kolomyia', 'area_id' => 7],
            ['name' => 'Nadvirna', 'area_id' => 7],
            ['name' => 'Dolyna', 'area_id' => 7],
            ['name' => 'Burshtyn', 'area_id' => 7],
            ['name' => 'Bolekhiv', 'area_id' => 7],
            ['name' => 'Sniatyn', 'area_id' => 7],
            ['name' => 'Horodenka', 'area_id' => 7],
            ['name' => 'Tysmenytsia', 'area_id' => 7],
            ['name' => 'Tlumach', 'area_id' => 7],
            ['name' => 'Rohatyn', 'area_id' => 7],
            ['name' => 'Kosiv', 'area_id' => 7],
            ['name' => 'Yaremcha', 'area_id' => 7],
            ['name' => 'Halych', 'area_id' => 7],
            ['name' => 'Broshniv-Osada', 'area_id' => 7],
            ['name' => 'Svarychiv', 'area_id' => 7],
            ['name' => 'Kharkiv', 'area_id' => 8],
            ['name' => 'Lozova', 'area_id' => 8],
            ['name' => 'Izium', 'area_id' => 8],
            ['name' => 'Chuhuiv', 'area_id' => 8],
            ['name' => 'Pervomaiskyi', 'area_id' => 8],
            ['name' => 'Kupiansk', 'area_id' => 8],
            ['name' => 'Balakliia', 'area_id' => 8],
            ['name' => 'Merefa', 'area_id' => 8],
            ['name' => 'Liubotyn', 'area_id' => 8],
            ['name' => 'Krasnohrad', 'area_id' => 8],
            ['name' => 'Vovchansk', 'area_id' => 8],
            ['name' => 'Derhachi', 'area_id' => 8],
            ['name' => 'Bohodukhiv', 'area_id' => 8],
            ['name' => 'Zmiiv', 'area_id' => 8],
            ['name' => 'Barvinkove', 'area_id' => 8],
            ['name' => 'Valky', 'area_id' => 8],
            ['name' => 'Pivdenne', 'area_id' => 8],
            ['name' => 'Kherson', 'area_id' => 9],
            ['name' => 'Nova Kakhovka', 'area_id' => 9],
            ['name' => 'Kakhovka', 'area_id' => 9],
            ['name' => 'Oleshky', 'area_id' => 9],
            ['name' => 'Henichesk', 'area_id' => 9],
            ['name' => 'Skadovsk', 'area_id' => 9],
            ['name' => 'Hola Prystan', 'area_id' => 9],
            ['name' => 'Beryslav', 'area_id' => 9],
            ['name' => 'Tavriysk', 'area_id' => 9],
            ['name' => 'Khmelnytskyi', 'area_id' => 10],
            ['name' => 'Kamianets-Podilskyi', 'area_id' => 10],
            ['name' => 'Shepetivka', 'area_id' => 10],
            ['name' => 'Netishyn', 'area_id' => 10],
            ['name' => 'Slavuta', 'area_id' => 10],
            ['name' => 'Starokostiantyniv', 'area_id' => 10],
            ['name' => 'Polonne', 'area_id' => 10],
            ['name' => 'Volochysk', 'area_id' => 10],
            ['name' => 'Krasyliv', 'area_id' => 10],
            ['name' => 'Iziaslav', 'area_id' => 10],
            ['name' => 'Horodok', 'area_id' => 10],
            ['name' => 'Dunaivtsi', 'area_id' => 10],
            ['name' => 'Derazhnia', 'area_id' => 10],
            ['name' => 'Kropyvnytskyi', 'area_id' => 11],
            ['name' => 'Oleksandriia', 'area_id' => 11],
            ['name' => 'Svitlovodsk', 'area_id' => 11],
            ['name' => 'Znamianka', 'area_id' => 11],
            ['name' => 'Novoukrainka', 'area_id' => 11],
            ['name' => 'Dolynska', 'area_id' => 11],
            ['name' => 'Haivoron', 'area_id' => 11],
            ['name' => 'Novomyrhorod', 'area_id' => 11],
            ['name' => 'Mala Vyska', 'area_id' => 11],
            ['name' => 'Bobrynets', 'area_id' => 11],
            ['name' => 'Pomichna', 'area_id' => 11],
            ['name' => 'Blahovishchenske', 'area_id' => 11],
            ['name' => 'Kyiv', 'area_id' => 12],
            ['name' => 'Bila Tserkva', 'area_id' => 13],
            ['name' => 'Brovary', 'area_id' => 13],
            ['name' => 'Boryspil', 'area_id' => 13],
            ['name' => 'Irpin', 'area_id' => 13],
            ['name' => 'Fastiv', 'area_id' => 13],
            ['name' => 'Vyshneve', 'area_id' => 13],
            ['name' => 'Vasylkiv', 'area_id' => 13],
            ['name' => 'Boiarka', 'area_id' => 13],
            ['name' => 'Bucha', 'area_id' => 13],
            ['name' => 'Obukhiv', 'area_id' => 13],
            ['name' => 'Vyshhorod', 'area_id' => 13],
            ['name' => 'Pereiaslav', 'area_id' => 13],
            ['name' => 'Slavutych', 'area_id' => 13],
            ['name' => 'Yahotyn', 'area_id' => 13],
            ['name' => 'Skvyra', 'area_id' => 13],
            ['name' => 'Berezan', 'area_id' => 13],
            ['name' => 'Bohuslav', 'area_id' => 13],
            ['name' => 'Tetiiv', 'area_id' => 13],
            ['name' => 'Ukrainka', 'area_id' => 13],
            ['name' => 'Kaharlyk', 'area_id' => 13],
            ['name' => 'Tarascha', 'area_id' => 13],
            ['name' => 'Myronivka', 'area_id' => 13],
            ['name' => 'Uzyn', 'area_id' => 13],
            ['name' => 'Rzhyschiv', 'area_id' => 13],
            ['name' => 'Chernobyl', 'area_id' => 13],
            ['name' => 'Prypiat', 'area_id' => 13],
            ['name' => 'Luhansk', 'area_id' => 14],
            ['name' => 'Alchevsk', 'area_id' => 14],
            ['name' => 'Sieverodonetsk', 'area_id' => 14],
            ['name' => 'Lysychansk', 'area_id' => 14],
            ['name' => 'Khrustalnyi', 'area_id' => 14],
            ['name' => 'Kadiyivka', 'area_id' => 14],
            ['name' => 'Dovzhansk', 'area_id' => 14],
            ['name' => 'Rubizhne', 'area_id' => 14],
            ['name' => 'Antratsyt', 'area_id' => 14],
            ['name' => 'Rovenky', 'area_id' => 14],
            ['name' => 'Brianka', 'area_id' => 14],
            ['name' => 'Sorokyne', 'area_id' => 14],
            ['name' => 'Pervomaisk', 'area_id' => 14],
            ['name' => 'Holubivka', 'area_id' => 14],
            ['name' => 'Perevalsk', 'area_id' => 14],
            ['name' => 'Popasna', 'area_id' => 14],
            ['name' => 'Molodohvardiysk', 'area_id' => 14],
            ['name' => 'Kreminna', 'area_id' => 14],
            ['name' => 'Sukhodilsk', 'area_id' => 14],
            ['name' => 'Starobilsk', 'area_id' => 14],
            ['name' => 'Svatove', 'area_id' => 14],
            ['name' => 'Lutuhyne', 'area_id' => 14],
            ['name' => 'Zolote', 'area_id' => 14],
            ['name' => 'Chervonopartyzansk', 'area_id' => 14],
            ['name' => 'Petrovske', 'area_id' => 14],
            ['name' => 'Vakhrusheve', 'area_id' => 14],
            ['name' => 'Shchastia', 'area_id' => 14],
            ['name' => 'Teplohirsk', 'area_id' => 14],
            ['name' => 'Hirske', 'area_id' => 14],
            ['name' => 'Zymohiria', 'area_id' => 14],
            ['name' => 'Artemivsk', 'area_id' => 14],
            ['name' => 'Novodruzhesk', 'area_id' => 14],
            ['name' => 'Pryvillia', 'area_id' => 14],
            ['name' => 'Zorynsk', 'area_id' => 14],
            ['name' => 'Oleksandrivsk', 'area_id' => 14],
            ['name' => 'Miusynsk', 'area_id' => 14],
            ['name' => 'Almazna', 'area_id' => 14],
            ['name' => 'Lviv', 'area_id' => 15],
            ['name' => 'Drohobych', 'area_id' => 15],
            ['name' => 'Chervonohrad', 'area_id' => 15],
            ['name' => 'Stryi', 'area_id' => 15],
            ['name' => 'Sambir', 'area_id' => 15],
            ['name' => 'Boryslav', 'area_id' => 15],
            ['name' => 'Novoiavorivsk', 'area_id' => 15],
            ['name' => 'Truskavets', 'area_id' => 15],
            ['name' => 'Novyi Rozdil', 'area_id' => 15],
            ['name' => 'Zolochiv', 'area_id' => 15],
            ['name' => 'Brody', 'area_id' => 15],
            ['name' => 'Sokal', 'area_id' => 15],
            ['name' => 'Stebnyk', 'area_id' => 15],
            ['name' => 'Horodok', 'area_id' => 15],
            ['name' => 'Mykolaiv', 'area_id' => 15],
            ['name' => 'Vynnyky', 'area_id' => 15],
            ['name' => 'Yavoriv', 'area_id' => 15],
            ['name' => 'Zhovkva', 'area_id' => 15],
            ['name' => 'Sosnivka', 'area_id' => 15],
            ['name' => 'Zhydachiv', 'area_id' => 15],
            ['name' => 'Kamianka-Buzka', 'area_id' => 15],
            ['name' => 'Khodoriv', 'area_id' => 15],
            ['name' => 'Pustomyty', 'area_id' => 15],
            ['name' => 'Radekhiv', 'area_id' => 15],
            ['name' => 'Mostyska', 'area_id' => 15],
            ['name' => 'Busk', 'area_id' => 15],
            ['name' => 'Dubliany', 'area_id' => 15],
            ['name' => 'Rava-Ruska', 'area_id' => 15],
            ['name' => 'Turka', 'area_id' => 15],
            ['name' => 'Peremyshliany', 'area_id' => 15],
            ['name' => 'Skole', 'area_id' => 15],
            ['name' => 'Sudova Vyshnia', 'area_id' => 15],
            ['name' => 'Morshyn', 'area_id' => 15],
            ['name' => 'Velyki Mosty', 'area_id' => 15],
            ['name' => 'Staryi Sambir', 'area_id' => 15],
            ['name' => 'Dobromyl', 'area_id' => 15],
            ['name' => 'Rudky', 'area_id' => 15],
            ['name' => 'Khyriv', 'area_id' => 15],
            ['name' => 'Komarno', 'area_id' => 15],
            ['name' => 'Bibrka', 'area_id' => 15],
            ['name' => 'Novyi Kalyniv', 'area_id' => 15],
            ['name' => 'Hlyniany', 'area_id' => 15],
            ['name' => 'Belz', 'area_id' => 15],
            ['name' => 'Uhniv', 'area_id' => 15],
            ['name' => 'Mykolaiv', 'area_id' => 16],
            ['name' => 'Pervomaisk', 'area_id' => 16],
            ['name' => 'Yuzhnoukrainsk', 'area_id' => 16],
            ['name' => 'Voznesensk', 'area_id' => 16],
            ['name' => 'Ochakiv', 'area_id' => 16],
            ['name' => 'Novyi Buh', 'area_id' => 16],
            ['name' => 'Snihurivka', 'area_id' => 16],
            ['name' => 'Nova Odesa', 'area_id' => 16],
            ['name' => 'Bashtanka', 'area_id' => 16],
            ['name' => 'Odesa', 'area_id' => 17],
            ['name' => 'Izmail', 'area_id' => 17],
            ['name' => 'Chornomorsk', 'area_id' => 17],
            ['name' => 'Bilhorod-Dnistrovskyi', 'area_id' => 17],
            ['name' => 'Podilsk', 'area_id' => 17],
            ['name' => 'Yuzhne', 'area_id' => 17],
            ['name' => 'Kilia', 'area_id' => 17],
            ['name' => 'Reni', 'area_id' => 17],
            ['name' => 'Balta', 'area_id' => 17],
            ['name' => 'Rozdilna', 'area_id' => 17],
            ['name' => 'Bolhrad', 'area_id' => 17],
            ['name' => 'Artsyz', 'area_id' => 17],
            ['name' => 'Biliaivka', 'area_id' => 17],
            ['name' => 'Tatarbunary', 'area_id' => 17],
            ['name' => 'Kodyma', 'area_id' => 17],
            ['name' => 'Berezivka', 'area_id' => 17],
            ['name' => 'Ananiv', 'area_id' => 17],
            ['name' => 'Vylkove', 'area_id' => 17],
            ['name' => 'Teplodar', 'area_id' => 17],
            ['name' => 'Poltava', 'area_id' => 18],
            ['name' => 'Kremenchuk', 'area_id' => 18],
            ['name' => 'Horishni Plavni', 'area_id' => 18],
            ['name' => 'Lubny', 'area_id' => 18],
            ['name' => 'Myrhorod', 'area_id' => 18],
            ['name' => 'Hadiach', 'area_id' => 18],
            ['name' => 'Karlivka', 'area_id' => 18],
            ['name' => 'Pyriatyn', 'area_id' => 18],
            ['name' => 'Khorol', 'area_id' => 18],
            ['name' => 'Hlobyne', 'area_id' => 18],
            ['name' => 'Lokhvytsia', 'area_id' => 18],
            ['name' => 'Kobeliaky', 'area_id' => 18],
            ['name' => 'Hrebinka', 'area_id' => 18],
            ['name' => 'Zinkiv', 'area_id' => 18],
            ['name' => 'Zavodske', 'area_id' => 18],
            ['name' => 'Rivne', 'area_id' => 19],
            ['name' => 'Varash', 'area_id' => 19],
            ['name' => 'Dubno', 'area_id' => 19],
            ['name' => 'Kostopil', 'area_id' => 19],
            ['name' => 'Sarny', 'area_id' => 19],
            ['name' => 'Zdolbuniv', 'area_id' => 19],
            ['name' => 'Ostroh', 'area_id' => 19],
            ['name' => 'Berezne', 'area_id' => 19],
            ['name' => 'Radyvyliv', 'area_id' => 19],
            ['name' => 'Dubrovytsia', 'area_id' => 19],
            ['name' => 'Korets', 'area_id' => 19],
            ['name' => 'Sevastopol', 'area_id' => 20],
            ['name' => 'Inkerman', 'area_id' => 20],
            ['name' => 'Sumy', 'area_id' => 21],
            ['name' => 'Konotop', 'area_id' => 21],
            ['name' => 'Shostka', 'area_id' => 21],
            ['name' => 'Okhtyrka', 'area_id' => 21],
            ['name' => 'Romny', 'area_id' => 21],
            ['name' => 'Hlukhiv', 'area_id' => 21],
            ['name' => 'Lebedyn', 'area_id' => 21],
            ['name' => 'Krolevets', 'area_id' => 21],
            ['name' => 'Trostianets', 'area_id' => 21],
            ['name' => 'Bilopillia', 'area_id' => 21],
            ['name' => 'Putyvl', 'area_id' => 21],
            ['name' => 'Buryn', 'area_id' => 21],
            ['name' => 'Vorozhba', 'area_id' => 21],
            ['name' => 'Seredyna-Buda', 'area_id' => 21],
            ['name' => 'Druzhba', 'area_id' => 21],
            ['name' => 'Ternopil', 'area_id' => 22],
            ['name' => 'Chortkiv', 'area_id' => 22],
            ['name' => 'Kremenets', 'area_id' => 22],
            ['name' => 'Berezhany', 'area_id' => 22],
            ['name' => 'Terebovlia', 'area_id' => 22],
            ['name' => 'Zbarazh', 'area_id' => 22],
            ['name' => 'Buchach', 'area_id' => 22],
            ['name' => 'Borschiv', 'area_id' => 22],
            ['name' => 'Zalischyky', 'area_id' => 22],
            ['name' => 'Lanivtsi', 'area_id' => 22],
            ['name' => 'Pochaiv', 'area_id' => 22],
            ['name' => 'Zboriv', 'area_id' => 22],
            ['name' => 'Khorostkiv', 'area_id' => 22],
            ['name' => 'Kopychyntsi', 'area_id' => 22],
            ['name' => 'Monastyryska', 'area_id' => 22],
            ['name' => 'Shumsk', 'area_id' => 22],
            ['name' => 'Skalat', 'area_id' => 22],
            ['name' => 'Pidhaitsi', 'area_id' => 22],
            ['name' => 'Vinnytsia', 'area_id' => 23],
            ['name' => 'Zhmerynka', 'area_id' => 23],
            ['name' => 'Mohyliv-Podilskyi', 'area_id' => 23],
            ['name' => 'Khmilnyk', 'area_id' => 23],
            ['name' => 'Haisyn', 'area_id' => 23],
            ['name' => 'Koziatyn', 'area_id' => 23],
            ['name' => 'Ladyzhyn', 'area_id' => 23],
            ['name' => 'Kalynivka', 'area_id' => 23],
            ['name' => 'Bar', 'area_id' => 23],
            ['name' => 'Tulchyn', 'area_id' => 23],
            ['name' => 'Bershad', 'area_id' => 23],
            ['name' => 'Hnivan', 'area_id' => 23],
            ['name' => 'Nemyriv', 'area_id' => 23],
            ['name' => 'Yampil', 'area_id' => 23],
            ['name' => 'Illintsi', 'area_id' => 23],
            ['name' => 'Pohrebysche', 'area_id' => 23],
            ['name' => 'Lypovets', 'area_id' => 23],
            ['name' => 'Sharhorod', 'area_id' => 23],
            ['name' => 'Lutsk', 'area_id' => 24],
            ['name' => 'Kovel', 'area_id' => 24],
            ['name' => 'Novovolynsk', 'area_id' => 24],
            ['name' => 'Volodymyr-Volynskyi', 'area_id' => 24],
            ['name' => 'Kivertsi', 'area_id' => 24],
            ['name' => 'Rozhysche', 'area_id' => 24],
            ['name' => 'Kamin-Kashyrskyi', 'area_id' => 24],
            ['name' => 'Liuboml', 'area_id' => 24],
            ['name' => 'Horokhiv', 'area_id' => 24],
            ['name' => 'Ustyluh', 'area_id' => 24],
            ['name' => 'Berestechko', 'area_id' => 24],
            ['name' => 'Uzhhorod', 'area_id' => 25],
            ['name' => 'Mukachevo', 'area_id' => 25],
            ['name' => 'Khust', 'area_id' => 25],
            ['name' => 'Vynohradiv', 'area_id' => 25],
            ['name' => 'Berehove', 'area_id' => 25],
            ['name' => 'Svaliava', 'area_id' => 25],
            ['name' => 'Rakhiv', 'area_id' => 25],
            ['name' => 'Tiachiv', 'area_id' => 25],
            ['name' => 'Irshava', 'area_id' => 25],
            ['name' => 'Chop', 'area_id' => 25],
            ['name' => 'Perechyn', 'area_id' => 25],
            ['name' => 'Zaporizhzhia', 'area_id' => 26],
            ['name' => 'Melitopol', 'area_id' => 26],
            ['name' => 'Berdiansk', 'area_id' => 26],
            ['name' => 'Enerhodar', 'area_id' => 26],
            ['name' => 'Tokmak', 'area_id' => 26],
            ['name' => 'Polohy', 'area_id' => 26],
            ['name' => 'Dniprorudne', 'area_id' => 26],
            ['name' => 'Orikhiv', 'area_id' => 26],
            ['name' => 'Huliaipole', 'area_id' => 26],
            ['name' => 'Vilniansk', 'area_id' => 26],
            ['name' => 'Vasylivka', 'area_id' => 26],
            ['name' => 'Kamianka-Dniprovska', 'area_id' => 26],
            ['name' => 'Prymorsk', 'area_id' => 26],
            ['name' => 'Molochansk', 'area_id' => 26],
            ['name' => 'Zhytomyr', 'area_id' => 27],
            ['name' => 'Berdychiv', 'area_id' => 27],
            ['name' => 'Korosten', 'area_id' => 27],
            ['name' => 'Novohrad-Volynskyi', 'area_id' => 27],
            ['name' => 'Malyn', 'area_id' => 27],
            ['name' => 'Korostyshiv', 'area_id' => 27],
            ['name' => 'Ovruch', 'area_id' => 27],
            ['name' => 'Radomyshl', 'area_id' => 27],
            ['name' => 'Baranivka', 'area_id' => 27],
            ['name' => 'Olevsk', 'area_id' => 27],
            ['name' => 'Andrushivka', 'area_id' => 27],
        ]);
    }
}
