<?php


namespace App\Service;


Interface ServiceInterface
{
    public function getAll();
    public function getCustomer($id);
    public function delete($id);
    public function store($object);
    public function upgrade($object,$id);
}
