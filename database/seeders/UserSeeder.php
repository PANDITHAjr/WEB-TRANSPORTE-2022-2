<?php

namespace Database\Seeders;

use App\Models\Cliente;
use App\Models\Conductor;
use App\Models\DetalleSalida;
use App\Models\Personal;
use App\Models\Salida;
use App\Models\TipoPersonal;
use App\Models\User;
use App\Models\Sindicato;
use App\Models\Vehiculo;
use App\Models\VentaBoleto;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        /////////usuario SANTIAGO

        $tipo_personal = new TipoPersonal();
        $tipo_personal->descripcion = 'Administrador';
        $tipo_personal->save();

        $tipo_personal = new TipoPersonal();
        $tipo_personal->descripcion = 'Secretaria';
        $tipo_personal->save();

        $tipo_personal = new TipoPersonal();
        $tipo_personal->descripcion = 'Chofer';
        $tipo_personal->save();

        $sindicato = new Sindicato();
        $sindicato->nombre = 'Sindicato 1';
        $sindicato->save();


        ////USUARIO BRAYAN

        $personal = new Personal();
        $personal->ci = '12345678';
        $personal->nombre = 'Weimar';
        $personal->apellido = 'Ustarez Rivera';
        $personal->edad = '27';
        $personal->telefono = '74668051';
        $personal->direccion = 'camiri';
        $personal->id_sindicato = '1';
        $personal->id_tipopersonal = '1';
        $personal->save();

        $user = new User();
        $user->name = 'weimar';
        $user->email = 'weimar.ustarezrivera@gmail.com';
        $user->password = bcrypt('weimar');
        $user->id_personal = '1';
        $user->save();

        ////USUARIO BRAYAN

        $personal = new Personal();
        $personal->ci = '12345678';
        $personal->nombre = 'Ayelen';
        $personal->apellido = 'Esteves Segovia';
        $personal->edad = '22';
        $personal->telefono = '76565234';
        $personal->direccion = 'camiri';
        $personal->id_sindicato = '1';
        $personal->id_tipopersonal = '1';
        $personal->save();

        $user = new User();
        $user->name = 'ayelen';
        $user->email = 'ayelen@gmail.com';
        $user->password = bcrypt('ayelen');
        $user->id_personal = '2';
        $user->save();


        /////////// USUARIO PANDA

        $personal = new Personal();
        $personal->ci = '12345678';
        $personal->nombre = 'Carlos Alfredo';
        $personal->apellido = 'Ramos Carballo';
        $personal->edad = '22';
        $personal->telefono = '67671718';
        $personal->direccion = 'camiri';
        $personal->id_sindicato = '1';
        $personal->id_tipopersonal = '1';
        $personal->save();

        $user = new User();
        $user->name = 'Carlos';
        $user->email = 'rcarballo.carlos@gmail.com';
        $user->password = bcrypt('2000');
        $user->id_personal = '3';
        $user->save();

    }
}
