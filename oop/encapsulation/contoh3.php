<?php

class komputer
{
    protected $jenisProcesor = "Intel Core i7";

    protected function tampilkanJenis()
    {
        return $this->jenisProcesor;
    }
}

class laptop extends komputer
{
    public function getProcesor()
    {
        return $this->tampilkanJenis();
    }
}

$laptop = new laptop();
echo $laptop->getProcesor();
