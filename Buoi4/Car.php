<?php
class Car extends vehcle
{

    public function __construct($name, $speed, $status)
    {
        $this->name = $name;
        $this->speed = $speed;
        $this->status = $status;
    }
    public function Movable()
    {
        return " Ko thể di chuyển";
    }
    public function Chargeable()
    {
        return "Sạc Pin";
    }
    public function Coi()
    {
        return "Vroom Vroom";
    }
    public function getDetal()
    {
        echo $this->name . $this->status . $this->Movable() . ', ' . $this->Chargeable() . ', có âm thanh ' . $this->Coi() . '</br>';
    }
}
