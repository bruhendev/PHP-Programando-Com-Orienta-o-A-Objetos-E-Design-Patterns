<?php
class Produto
{
    private $data;

    public function __get($prop)
    {
        return $this->data[$prop];
    }

    public function __set($prop, $value)
    {
        $this->data[$prop] = $value;
    }

    public function find($id)
    {
        # code...
    }

    public function all($filter = false)
    {
        # code...
    }

    public function delete()
    {
        # code...
    }

    public function save()
    {
        # code...
    }

    public function getMargemLucro()
    {
        # code...
    }

    public function registraCompra()
    {
        # code...
    }

}