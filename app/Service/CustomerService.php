<?php


namespace App\Service;

use App\Repositories\EloquentRepositoryCustomer;
use App\Customer;
use DemeterChain\C;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class CustomerService implements ServiceInterface
{
    public $customerRepository;

    public function __construct(EloquentRepositoryCustomer $customerRepository)
    {
        $this->customerRepository = $customerRepository;
    }

    public function getAll()
    {
        $customers = $this->customerRepository->getAll();
        return $customers;
    }

    public function delete($id)
    {
        $this->customerRepository->delete($id);
    }

    public function getCustomer($id)
    {
        return $this->customerRepository->getById($id);
    }

    public function store($object)
    {
        $newCustomer = new Customer();
        $newCustomer->name = $object['name'];
        if (isset($object['avatar'])) {
            $avatar = $object['avatar'];
            $path = $avatar->store('images', 'public');
            $newCustomer->avatar = $path;
        }else{
            echo "Chon file loi";
        }
        $newCustomer->age = $object['age'];
        $newCustomer->email = $object['email'];
        $newCustomer->address = $object['address'];
        $this->customerRepository->create($newCustomer);
    }

   public function upgrade($object, $id)
   {
       $customer=$this->getCustomer($id);
       $checkexist=Storage::exists('/public/'.$customer->avatar);
       if($checkexist){
           Storage::delete('/public/'.$customer->avatar);
       }
       $customer->name = $object['name'];
       if (isset($object['avatar'])) {
           $avatar = $object['avatar'];
           $path = $avatar->store('images', 'public');
           $customer->avatar = $path;
       }else{
           echo "Chon file loi";
       }
       $customer->age = $object['age'];
       $customer->email = $object['email'];
       $customer->address = $object['address'];
       $this->customerRepository->create($customer);
   }
}
