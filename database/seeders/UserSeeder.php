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
        /////////TIPO PERSONAL

        $tipo_personal = new TipoPersonal();
        $tipo_personal->descripcion = 'Administrador';
        $tipo_personal->save();

        $tipo_personal = new TipoPersonal();
        $tipo_personal->descripcion = 'Secretaria';
        $tipo_personal->save();

        $tipo_personal = new TipoPersonal();
        $tipo_personal->descripcion = 'Chofer';
        $tipo_personal->save();

        $tipo_personal = new TipoPersonal();
        $tipo_personal->descripcion = 'Cliente';
        $tipo_personal->save();


        /////////SINDICATOS

        $sindicato = new Sindicato();
        $sindicato->nombre = '27 de Diciembre';
        $sindicato->save();

        $sindicato = new Sindicato();
        $sindicato->nombre = 'Nuevo Horionte';
        $sindicato->save();

        $sindicato = new Sindicato();
        $sindicato->nombre = 'Ivoca';
        $sindicato->save();

        $sindicato = new Sindicato();
        $sindicato->nombre = 'Ninguno';
        $sindicato->save();


        ////USUARIO WEIMAR

        $personal = new Personal();
        $personal->ci = '12345678';
        $personal->nombre = 'Weimar';
        $personal->apellido = 'Ustarez Rivera';
        $personal->edad = '27';
        $personal->telefono = '74668051';
        $personal->direccion = 'camiri';
        $personal->cat_lic = 'P';
        $personal->id_sindicato = '1';
        $personal->id_tipopersonal = '1';
        $personal->save();

        $user = new User();
        $user->name = 'weimar';
        $user->email = 'weimar.ustarezrivera@gmail.com';
        $user->password = bcrypt('weimar');
        $user->id_personal = '1';
        $user->save();

        ////USUARIO AYELEN

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
        $personal->ci = '7114326';
        $personal->nombre = 'Carlos Alfredo';
        $personal->apellido = 'Ramos Carballo';
        $personal->edad = '22';
        $personal->telefono = '67671718';
        $personal->direccion = 'Camiri';
        $personal->cat_lic = 'C';
        $personal->id_sindicato = '1';
        $personal->id_tipopersonal = '1';
        $personal->save();

        $user = new User();
        $user->name = 'Carlos';
        $user->email = 'rcarballo.carlos@gmail.com';
        $user->password = bcrypt('2000');
        $user->id_personal = '3';
        $user->save();


        /////////// USUARIO EVANS

        $personal = new Personal();
        $personal->ci = '12345678';
        $personal->nombre = 'Evans';
        $personal->apellido = 'Balcazar';
        $personal->edad = '30';
        $personal->telefono = '6473833';
        $personal->direccion = 'SC';
        $personal->id_sindicato = '1';
        $personal->id_tipopersonal = '4';
        $personal->save();

        $user = new User();
        $user->name = 'Evans';
        $user->email = 'evans@gmail.com';
        $user->password = bcrypt('2000');
        $user->id_personal = '4';
        $user->save();

        /////////// CHOFERES
        $personal = new Personal();
        $personal->ci = '67833511';
        $personal->nombre = 'Marcos';
        $personal->apellido = 'Barrera';
        $personal->edad = '30';
        $personal->telefono = '78123288';
        $personal->direccion = 'Villa Monte';
        $personal->cat_lic = 'C';
        $personal->id_sindicato = '3';
        $personal->id_tipopersonal = '3';
        $personal->save();

        $personal = new Personal();
        $personal->ci = '1125777';
        $personal->nombre = 'Rodrigo';
        $personal->apellido = 'Peña';
        $personal->edad = '34';
        $personal->telefono = '64738313';
        $personal->direccion = 'Camiri';
        $personal->cat_lic = 'A';
        $personal->id_sindicato = '2';
        $personal->id_tipopersonal = '3';
        $personal->save();

        $user = new User();
        $user->name = 'Rodrigo';
        $user->email = 'rodrigo@gmail.com';
        $user->password = bcrypt('1000');
        $user->id_personal = '6';
        $user->save();


        /////////VEHICULOS
        $vehiculo = new Vehiculo();
        $vehiculo->linea = '1';
        $vehiculo->placa = 'ABC123';
        $vehiculo->marca = 'Toyota';
        $vehiculo->modelo = 'Noah';
        $vehiculo->id_personal = '5';
        $vehiculo->id_sindicato = '3';
        $vehiculo->save();

        $vehiculo = new Vehiculo();
        $vehiculo->linea = '23';
        $vehiculo->placa = 'FTG123';
        $vehiculo->marca = 'Thunderbird';
        $vehiculo->modelo = 'LingT50';
        $vehiculo->id_personal = '6';
        $vehiculo->id_sindicato = '2';
        $vehiculo->save();
    }
}
