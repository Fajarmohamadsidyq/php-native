<?php

class komputer
{
    private $jenisProcesor = "Intel Core i7";

    public function tampilkanJenis()
    {
        return $this->jenisProcesor;
    }
}

class laptop extends komputer
{
    public function getProcesor()
    {
        return $this->jenisProcesor;
    }
}

$komputer = new komputer();
$laptop = new laptop();

echo $komputer->tampilkanJenis();
echo $laptop->getProcesor();
