<?php

namespace App\Commands;

use App\Models\Vehiculo;

class UpdateVehiculoCommand
{
    private $id;
    private $data;

    public function __construct($id, $data)
    {
        $this->id = $id;
        $this->data = $data;
    }

    public function handle()
    {
        $vehiculo = Vehiculo::findOrFail($this->id);
        $vehiculo->fill($this->data);
        $vehiculo->save();
    }
}
