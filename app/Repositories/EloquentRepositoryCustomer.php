<?php


namespace App\Repositories;

use App\Customer;
use App\Repositories\RepositoryCustomerInterface;
use Illuminate\Support\Facades\Storage;


class EloquentRepositoryCustomer implements RepositoryCustomerInterface
{
    public $customer;

    public function __construct(Customer $customer)
    {
        $this->customer = $customer;
    }

    public function getAll()
    {
        return $this->customer::paginate(5);
    }

    public function create($object)
    {
        $this->customer=$object;
        $this->customer->save();
    }

    public function delete($id)
    {
        $customer = $this->getById($id);
        $customer->delete();
    }

    public function getById($id)
    {
        return $this->customer::FindOrFail($id);
    }
    public function update($object)
    {
        $this->customer=$object;
        $this->customer->save();
    }
}
