<?php

namespace Database\Seeders;

use App\Models\Cliente;
use App\Models\Conductor;
use App\Models\DetalleSalida;
use App\Models\Personal;
use App\Models\Salida;
use App\Models\TipoPersonal;
use App\Models\User;
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

        $personal = new Personal();
        $personal->nombre = 'santiago';
        $personal->apellido = 'gonzales quiucha';
        $personal->edad = '22';
        $personal->telefono = '63599363';
        $personal->direccion = 'por la calle';
        $personal->id_tipo_personal = '1';
        $personal->save();

        $user = new User();
        $user->name = 'santhigon';
        $user->email = 'tugatitosalvaje@gmail.com';
        $user->password = bcrypt('santiago');
        $user->id_personal = '1';
        $user->save();

        ////USUARIO BRAYAN

        $personal = new Personal();
        $personal->nombre = 'Brayan';
        $personal->apellido = 'Ferrufino Corales';
        $personal->edad = '222';
        $personal->telefono = '73352573';
        $personal->direccion = 'camiri';
        $personal->id_tipo_personal = '1';
        $personal->save();

        $user = new User();
        $user->name = 'brayan';
        $user->email = 'brayan@gmail.com';
        $user->password = bcrypt('brayan');
        $user->id_personal = '1';
        $user->save();


        /////////// USUARIO PANDA


        $personal = new Personal();
        $personal->nombre = 'Carlos Alfredo';
        $personal->apellido = 'Ramos Carballo';
        $personal->edad = '22';
        $personal->telefono = '67671718';
        $personal->direccion = 'camiri';
        $personal->id_tipo_personal = '1';
        $personal->save();

        $user = new User();
        $user->name = 'Carlos';
        $user->email = 'rcarballo.carlos@gmail.com';
        $user->password = bcrypt('2000');
        $user->id_personal = '1';
        $user->save();

        /////////////// insertar CLIENTES

        $cliente = new Cliente();
        $cliente->ci_cliente = '121212';
        $cliente->nombre = 'Armando';
        $cliente->apellido = 'Varreda Flores';
        $cliente->telefono = '88765544';
        $cliente->save();

        $cliente = new Cliente();
        $cliente->ci_cliente = '332323';
        $cliente->nombre = 'Edgar';
        $cliente->apellido = 'Vivar Murillo';
        $cliente->telefono = '77655456';
        $cliente->save();

        $cliente = new Cliente();
        $cliente->ci_cliente = '434343';
        $cliente->nombre = 'Roberto';
        $cliente->apellido = 'Gutierrez Peña';
        $cliente->telefono = '77755512';
        $cliente->save();

        $cliente = new Cliente();
        $cliente->ci_cliente = '644465';
        $cliente->nombre = 'George';
        $cliente->apellido = 'De la Selva';
        $cliente->telefono = '99112233';
        $cliente->save();

        $cliente = new Cliente();
        $cliente->ci_cliente = '546333';
        $cliente->nombre = 'Hugo';
        $cliente->apellido = 'Merlos Mandela';
        $cliente->telefono = '66333332';
        $cliente->save();

        $cliente = new Cliente();
        $cliente->ci_cliente = '545454';
        $cliente->nombre = 'Vicente';
        $cliente->apellido = 'Perales Kolkiri';
        $cliente->telefono = '66126549';
        $cliente->save();

        $cliente = new Cliente();
        $cliente->ci_cliente = '5545412';
        $cliente->nombre = 'Sergio';
        $cliente->apellido = 'Galindo Peña';
        $cliente->telefono = '74586956';
        $cliente->save();

        $cliente = new Cliente();
        $cliente->ci_cliente = '4569741';
        $cliente->nombre = 'Maria';
        $cliente->apellido = 'Escobar';
        $cliente->telefono = '74589658';
        $cliente->save();

        $cliente = new Cliente();
        $cliente->ci_cliente = '78546554';
        $cliente->nombre = 'Victor';
        $cliente->apellido = 'Mendieta';
        $cliente->telefono = '78548965';
        $cliente->save();

        $cliente = new Cliente();
        $cliente->ci_cliente = '6549646';
        $cliente->nombre = 'Leny';
        $cliente->apellido = 'Quispe';
        $cliente->telefono = '69875485';
        $cliente->save();

        ///// insertar VEHICULO

        $vehiculo = new Vehiculo();
        $vehiculo->placa = '144-FPS';
        $vehiculo->modelo = 'TOTOYA';
        $vehiculo->descripcion = 'ROJO';
        $vehiculo->save();

        $vehiculo = new Vehiculo();
        $vehiculo->placa = '240-HZ';
        $vehiculo->modelo = 'NOHA';
        $vehiculo->descripcion = 'VERDE';
        $vehiculo->save();

        $vehiculo = new Vehiculo();
        $vehiculo->placa = '4578-ADS';
        $vehiculo->modelo = 'IPSUM';
        $vehiculo->descripcion = 'CAFE';
        $vehiculo->save();

        $vehiculo = new Vehiculo();
        $vehiculo->placa = '2408-OPE';
        $vehiculo->modelo = 'NOHA';
        $vehiculo->descripcion = 'VERDE';
        $vehiculo->save();

        $vehiculo = new Vehiculo();
        $vehiculo->placa = '7893-ADS';
        $vehiculo->modelo = 'IPSUM';
        $vehiculo->descripcion = 'VERDE';
        $vehiculo->save();

        $vehiculo = new Vehiculo();
        $vehiculo->placa = '1234-FER';
        $vehiculo->modelo = 'NOHA';
        $vehiculo->descripcion = 'AZUL';
        $vehiculo->save();

        $vehiculo = new Vehiculo();
        $vehiculo->placa = '4521-ATS';
        $vehiculo->modelo = 'IPSUM';
        $vehiculo->descripcion = 'PLOMO';
        $vehiculo->save();

        $vehiculo = new Vehiculo();
        $vehiculo->placa = '240-HZ';
        $vehiculo->modelo = 'NOHA';
        $vehiculo->descripcion = 'verdecito';
        $vehiculo->save();

        $vehiculo = new Vehiculo();
        $vehiculo->placa = '5469-DTR';
        $vehiculo->modelo = 'IPSUM';
        $vehiculo->descripcion = 'BLANCO';
        $vehiculo->save();

        $vehiculo = new Vehiculo();
        $vehiculo->placa = '2058';
        $vehiculo->modelo = 'NOHA';
        $vehiculo->descripcion = 'BLANCO';
        $vehiculo->save();

        //------ SI QUIERES LE AUMENTAS MA CLIENTES A ESTA WEA


        ////////////// insertar CONDUCTOR

        $conductor = new Conductor();
        $conductor->ci = '777777';
        $conductor->nombre = 'Mario';
        $conductor->apellido = 'Morales Mendoza';
        $conductor->edad = '45';
        $conductor->telefono = '67891111';
        $conductor->direccion = 'Villa Montes';
        $conductor->save();
        ////////aumentar seed para SALIDA

        /////// aumentar seeder para VENTA_BOLETO

        ///////aumentar seed para DETALLE_SALIDA

        ////mensaje para ramita_santiago


        $conductor = new Conductor();
        $conductor->ci = '6496544';
        $conductor->nombre = 'Hugo';
        $conductor->apellido = 'Quiucha';
        $conductor->edad = '25';
        $conductor->telefono = '475896585';
        $conductor->direccion = 'Vella Vista';
        $conductor->save();

        $conductor = new Conductor();
        $conductor->ci = '4587584';
        $conductor->nombre = 'Camilo';
        $conductor->apellido = 'Guzman';
        $conductor->edad = '46';
        $conductor->telefono = '45785487';
        $conductor->direccion = 'Camiri';
        $conductor->save();

        $conductor = new Conductor();
        $conductor->ci = '47859878';
        $conductor->nombre = 'Gabriel';
        $conductor->apellido = 'Choque';
        $conductor->edad = '36';
        $conductor->telefono = '54646446';
        $conductor->direccion = 'Camiri';
        $conductor->save();

        $conductor = new Conductor();
        $conductor->ci = '7458554';
        $conductor->nombre = 'Juan';
        $conductor->apellido = 'Jimenez Peña';
        $conductor->edad = '46';
        $conductor->telefono = '74589854';
        $conductor->direccion = 'Cuevo';
        $conductor->save();

        $conductor = new Conductor();
        $conductor->ci = '4584785';
        $conductor->nombre = 'Sebastian';
        $conductor->apellido = 'Yatra';
        $conductor->edad = '29';
        $conductor->telefono = '74589587';
        $conductor->direccion = 'Cuevo';
        $conductor->save();

        $conductor = new Conductor();
        $conductor->ci = '758458';
        $conductor->nombre = 'Benito';
        $conductor->apellido = 'Bunny';
        $conductor->edad = '45';
        $conductor->telefono = '74586958';
        $conductor->direccion = 'Camiri';
        $conductor->save();


        $conductor = new Conductor();
        $conductor->ci = '6546464';
        $conductor->nombre = 'Oscar';
        $conductor->apellido = 'Correa';
        $conductor->edad = '55';
        $conductor->telefono = '74585558';
        $conductor->direccion = 'Camiri';
        $conductor->save();


        $conductor = new Conductor();
        $conductor->ci = '7548568';
        $conductor->nombre = 'Jose Maria';
        $conductor->apellido = 'Camacho';
        $conductor->edad = '35';
        $conductor->telefono = '74586958';
        $conductor->direccion = 'Cuevo';
        $conductor->save();


        $conductor = new Conductor();
        $conductor->ci = '8547856';
        $conductor->nombre = 'Rafael';
        $conductor->apellido = 'Borda';
        $conductor->edad = '39';
        $conductor->telefono = '74584545';
        $conductor->direccion = 'Cuevo';
        $conductor->save();



        /////////SALIDASSSSSS

        $salida = new Salida();
        $salida->hora = '09:50';
        $salida->fecha_salida = '2022/05/02';
        $salida->destinos = 'Villa Montes';
        $salida->id_conductor = '1';
        $salida->save();


        $salida = new Salida();
        $salida->hora = '12:30';
        $salida->fecha_salida = '2022/07/20';
        $salida->destinos = 'Camiri';
        $salida->id_conductor = '2';
        $salida->save();

        $salida = new Salida();
        $salida->hora = '08:00';
        $salida->fecha_salida = '2022/07/21';
        $salida->destinos = 'Villa Montes';
        $salida->id_conductor = '3';
        $salida->save();


        $salida = new Salida();
        $salida->hora = '11:30';
        $salida->fecha_salida = '2022/07/21';
        $salida->destinos = 'Camiri';
        $salida->id_conductor = '4';
        $salida->save();


        $salida = new Salida();
        $salida->hora = '15:00';
        $salida->fecha_salida = '2022/07/21';
        $salida->destinos = 'Villa Montes';
        $salida->id_conductor = '5';
        $salida->save();



        $salida = new Salida();
        $salida->hora = '18:00';
        $salida->fecha_salida = '2022/07/21';
        $salida->destinos = 'Camiri';
        $salida->id_conductor = '6';
        $salida->save();


        $salida = new Salida();
        $salida->hora = '08:00';
        $salida->fecha_salida = '2022/07/26';
        $salida->destinos = 'Villa Montes';
        $salida->id_conductor = '7';
        $salida->save();


        $salida = new Salida();
        $salida->hora = '10:00';
        $salida->fecha_salida = '2022/07/26';
        $salida->destinos = 'Camiri';
        $salida->id_conductor = '8';
        $salida->save();


        $salida = new Salida();
        $salida->hora = '12:00';
        $salida->fecha_salida = '2022/07/26';
        $salida->destinos = 'Villa Montes';
        $salida->id_conductor = '9';
        $salida->save();


        $salida = new Salida();
        $salida->hora = '14:00';
        $salida->fecha_salida = '2022/07/26';
        $salida->destinos = 'Camiri';
        $salida->id_conductor = '10';
        $salida->save();


        $salida = new Salida();
        $salida->hora = '14:00';
        $salida->fecha_salida = '2022/07/26';
        $salida->destinos = 'Villa Montes';
        $salida->id_conductor = '1';
        $salida->save();



        ///////////VENTA BOLETO//////////////////////////////////
        $venta_boleto = new VentaBoleto();
        $venta_boleto->numero_asiento = '4';
        $venta_boleto->precio = '30';
        $venta_boleto->fecha = '2022/07/25';
        $venta_boleto->id_vehiculo = '1';
        $venta_boleto->id_cliente = '1';
        $venta_boleto->id_personal = '1';
        $venta_boleto->save();


        $venta_boleto = new VentaBoleto();
        $venta_boleto->numero_asiento = '2';
        $venta_boleto->precio = '30';
        $venta_boleto->fecha = '2022/07/25';
        $venta_boleto->id_vehiculo = '1';
        $venta_boleto->id_cliente = '2';
        $venta_boleto->id_personal = '2';
        $venta_boleto->save();


        $venta_boleto = new VentaBoleto();
        $venta_boleto->numero_asiento = '1';
        $venta_boleto->precio = '30';
        $venta_boleto->fecha = '2022/07/25';
        $venta_boleto->id_vehiculo = '1';
        $venta_boleto->id_cliente = '3';
        $venta_boleto->id_personal = '3';
        $venta_boleto->save();


        $venta_boleto = new VentaBoleto();
        $venta_boleto->numero_asiento = '3';
        $venta_boleto->precio = '30';
        $venta_boleto->fecha = '2022/07/25';
        $venta_boleto->id_vehiculo = '1';
        $venta_boleto->id_cliente = '4';
        $venta_boleto->id_personal = '1';
        $venta_boleto->save();


        $venta_boleto = new VentaBoleto();
        $venta_boleto->numero_asiento = '5';
        $venta_boleto->precio = '30';
        $venta_boleto->fecha = '2022/07/25';
        $venta_boleto->id_vehiculo = '1';
        $venta_boleto->id_cliente = '5';
        $venta_boleto->id_personal = '2';
        $venta_boleto->save();


        $venta_boleto = new VentaBoleto();
        $venta_boleto->numero_asiento = '6';
        $venta_boleto->precio = '30';
        $venta_boleto->fecha = '2022/07/25';
        $venta_boleto->id_vehiculo = '1';
        $venta_boleto->id_cliente = '6';
        $venta_boleto->id_personal = '3';
        $venta_boleto->save();


        $venta_boleto = new VentaBoleto();
        $venta_boleto->numero_asiento = '7';
        $venta_boleto->precio = '30';
        $venta_boleto->fecha = '2022/07/25';
        $venta_boleto->id_vehiculo = '1';
        $venta_boleto->id_cliente = '7';
        $venta_boleto->id_personal = '1';
        $venta_boleto->save();


        $venta_boleto = new VentaBoleto();
        $venta_boleto->numero_asiento = '5';
        $venta_boleto->precio = '30';
        $venta_boleto->fecha = '2022/07/26';
        $venta_boleto->id_vehiculo = '4';
        $venta_boleto->id_cliente = '1';
        $venta_boleto->id_personal = '1';
        $venta_boleto->save();


        $venta_boleto = new VentaBoleto();
        $venta_boleto->numero_asiento = '4';
        $venta_boleto->precio = '30';
        $venta_boleto->fecha = '2022/07/26';
        $venta_boleto->id_vehiculo = '4';
        $venta_boleto->id_cliente = '2';
        $venta_boleto->id_personal = '2';
        $venta_boleto->save();


        $venta_boleto = new VentaBoleto();
        $venta_boleto->numero_asiento = '7';
        $venta_boleto->precio = '30';
        $venta_boleto->fecha = '2022/07/26';
        $venta_boleto->id_vehiculo = '4';
        $venta_boleto->id_cliente = '3';
        $venta_boleto->id_personal = '3';
        $venta_boleto->save();


        $venta_boleto = new VentaBoleto();
        $venta_boleto->numero_asiento = '1';
        $venta_boleto->precio = '30';
        $venta_boleto->fecha = '2022/07/26';
        $venta_boleto->id_vehiculo = '4';
        $venta_boleto->id_cliente = '8';
        $venta_boleto->id_personal = '3';
        $venta_boleto->save();

        $venta_boleto = new VentaBoleto();
        $venta_boleto->numero_asiento = '2';
        $venta_boleto->precio = '30';
        $venta_boleto->fecha = '2022/07/26';
        $venta_boleto->id_vehiculo = '4';
        $venta_boleto->id_cliente = '6';
        $venta_boleto->id_personal = '3';
        $venta_boleto->save();



        $detalle_salida = new DetalleSalida();
        $detalle_salida->id_salida = '1';
        $detalle_salida->id_venta_boleto = '2';
        $detalle_salida->save();


        $detalle_salida = new DetalleSalida();
        $detalle_salida->id_salida = '1';
        $detalle_salida->id_venta_boleto = '6';
        $detalle_salida->save();


        $detalle_salida = new DetalleSalida();
        $detalle_salida->id_salida = '2';
        $detalle_salida->id_venta_boleto = '1';
        $detalle_salida->save();


        $detalle_salida = new DetalleSalida();
        $detalle_salida->id_salida = '1';
        $detalle_salida->id_venta_boleto = '5';
        $detalle_salida->save();


        $detalle_salida = new DetalleSalida();
        $detalle_salida->id_salida = '1';
        $detalle_salida->id_venta_boleto = '4';
        $detalle_salida->save();


        $detalle_salida = new DetalleSalida();
        $detalle_salida->id_salida = '1';
        $detalle_salida->id_venta_boleto = '7';
        $detalle_salida->save();


        $detalle_salida = new DetalleSalida();
        $detalle_salida->id_salida = '2';
        $detalle_salida->id_venta_boleto = '7';
        $detalle_salida->save();

        $detalle_salida = new DetalleSalida();
        $detalle_salida->id_salida = '2';
        $detalle_salida->id_venta_boleto = '4';
        $detalle_salida->save();


        $detalle_salida = new DetalleSalida();
        $detalle_salida->id_salida = '2';
        $detalle_salida->id_venta_boleto = '3';
        $detalle_salida->save();


        $detalle_salida = new DetalleSalida();
        $detalle_salida->id_salida = '2';
        $detalle_salida->id_venta_boleto = '6';
        $detalle_salida->save();
    }
}
