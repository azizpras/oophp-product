<?php
class Monyet
{
    public function berjalan()
    {
        echo "Monyet dapat berjalan dengan kaki";
    }

    public function makan()
    {
        echo "Monyet sedang makan pisang";
    }

    public function bersuara()
    {
        echo "Monyet dapat bersuara";
    }
}

class MonyetTerlatih extends Monyet
{
    public function berkendara()
    {
        echo "Monyet dapat berkendara sepeda";
    }
}
