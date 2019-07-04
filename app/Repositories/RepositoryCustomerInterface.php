<?php


namespace App\Repositories;


interface RepositoryCustomerInterface
{
    public function getAll();
    public function create($object);
    public function update($object);
    public function delete($id);
    public function getById($id);
}
