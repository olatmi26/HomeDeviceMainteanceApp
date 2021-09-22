<?php

namespace Database\Seeders;

use App\Models\Car;
use App\Models\CarModel;
use Illuminate\Database\Seeder;

class CarModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $MarutiSuzuki=Car::where('name', 'Maruti Suzuki')->first();
        $Hyundai=Car::where('name', 'Hyundai')->first();
        $Honda=Car::where('name', 'Honda')->first();
        $Tata=Car::where('name', 'Tata')->first();
        $nissan=Car::where('name', 'Nissan')->first();
        $Renault=Car::where('name', 'Renault')->first();
        $Chevrolet=Car::where('name', 'Chevrolet')->first();
        $Toyota=Car::where('name', 'Toyota')->first();
        $Mahindra=Car::where('name', 'Mahindra')->first();
        $Ford=Car::where('name', 'Ford')->first();
        $Volkswagen=Car::where('name', 'Volkswagen')->first();
        
        $maruti_Suzukis= [
            'WagonR',
            'Ritz',
            'Swift',
            'Maruti 800',
            'alto',
            'Zen estilo',
            'Celerio',
            'Astar',
            'Alto K10',
            'Baleno',
            'Stingray',
            'Sx4',
            'Swift dzire',
            'Esteem',
            'Scross',
            'Ciaz',
            'Kizashi',
            'Eeco',
            'Vitara brezza',
            'Ertiga',
        ];
        foreach ($maruti_Suzukis as $key => $model) {
            CarModel::create([
                'card_id'   =>$MarutiSuzuki->id,
                'CarModel'  =>$model
            ]);
        }
        
        $hyundais= [
            'Eon',
            'Getz',
            'Santro',
            'i10',
            'Grand i10',
            'i20',
            'i20 active',
            'Accent',
            'Xcent',
            'Verna',
            'Elantra',
            'Creta',
            'Tuscon',
            'Santafe',

        ];
        foreach ($hyundais as $key => $model) {
            CarModel::create([
                'card_id'   =>$Hyundai->id,
                'CarModel'  =>$model
            ]);
        }
        
        $hondas= [
            'Brio',
            'jazz',
            'Amaze',
            'City',
            'Accord',
            'Civic',
            'WRV',
            'CRV',
            'BRV',
            'Mobilio',

        ];
        foreach ($hondas as $key => $model) {
            CarModel::create([
                'card_id'   =>$Honda->id,
                'CarModel'  =>$model
            ]);
        }
        
        $tatas= [
            'Indica vista',
            'Indica ev2',
            'Nano',
            'Zest',
            'Bolt',
            'Tiago',
           ' Manza',
            'Tigor',
            'Indigo',
            'Nexon',
            'Safari',
            'safari storm',
            'Aria',
        ];
        foreach ($tatas as $key => $model) {
            CarModel::create([
                'card_id'   =>$Tata->id,
                'CarModel'  =>$model
            ]);
        }
        $nissans= [
            'Micra',
            'Sunny',
            'Terrano',
            'Evalia',
        ];
        foreach ($nissans as $key => $model) {
            CarModel::create([
                'card_id'   =>$nissan->id,
                'CarModel'  =>$model
            ]);
        }
        
        $renaults= [
            'Kwid',
            'Pulse',
            'Logan',
            'Scala',
            'Fluence',
            'Duster',
            'Lodgy',
            'Koleos',

        ];
        foreach ($renaults as $key => $model) {
            CarModel::create([
                'card_id'   =>$Renault->id,
                'CarModel'  =>$model
            ]);
        }
        
        $chevrolets= [
            'Beat',
            'Spark',
            'Aveo',
            'U-va',
            'Sail',
            'Optra',
            'Cruze',
            'Enjoy',
            'Tavera',
            'Captiva',
            'Traiblazer',

        ];
        foreach ($chevrolets as $key => $model) {
            CarModel::create([
                'card_id'   =>$Chevrolet->id,
                'CarModel'  =>$model
            ]);
        }
        
        $toyotas= [
            'Etios liva',
            'Etios cross',
            'Etios',
            'Corolla',
            'Corolla Altis',
            'Camry',
            'Innova',
            'Foetuner',
            'Qualis',
        ];
        foreach ($toyotas as $key => $model) {
            CarModel::create([
                'card_id'   =>$Toyota->id,
                'CarModel'  =>$model
            ]);
        }
        
        $mahindras= [
            'Verito vibe',
            'KUV 100',
            'Quanto',
            'TUV 300',
            'XUV 500',
            'Scorpio',
            'Xylo',
            'Bolero',
            'Thar',
        ];
        foreach ($mahindras as $key => $model) {
            CarModel::create([
                'card_id'   =>$Mahindra->id,
                'CarModel'  =>$model
            ]);
        }
        
        $fords= [
            'figo',
            'Fiesta',
            'Figo aspire',
            'Ikon',
            'Ecosport',
            'Endeavour',
        ];
        foreach ($fords as $key => $model) {
            CarModel::create([
                'card_id'   =>$Ford->id,
                'CarModel'  =>$model
            ]);
        }
        
        $volkswagens= [
            'Polo',
            'Polo cross',
            'Vento',
            'Jetta',
            'Passat',
        ];
        foreach ($volkswagens as $key => $model) {
            CarModel::create([
                'card_id'   =>$Volkswagen->id,
                'CarModel'  =>$model
            ]);
        }
        
    }
}
