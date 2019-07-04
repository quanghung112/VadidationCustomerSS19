<?php


namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateCustomerRequest;
use App\Http\Requests\UpgradeCustomerRequest;
use App\Service\CustomerService;
use App\Customer;
use Illuminate\Http\Request;


class CustomerController extends Controller
{
    protected $customerService;

    public function __construct(CustomerService $customerService)
    {
        $this->customerService = $customerService;
    }

    public function index()
    {
        return view('index');
    }

    public function showList()
    {
        $customers = $this->customerService->getAll();
        return view('customers.list', compact('customers'));
    }

    public function create()
    {
        return view('customers.create');
    }

    public function store(CreateCustomerRequest $request)
    {
        $customer = $request->all();
//        dd($customer);
        $this->customerService->store($customer);
        return redirect()->route('Customer.list');
    }

    public function delete($id)
    {
        $this->customerService->delete($id);
        return redirect()->route('Customer.list');
    }

    public function detail($id)
    {
        $customer = $this->customerService->getCustomer($id);
        return view('customers.detail', compact('customer'));
    }

    public function edit($id)
    {
        $customer = $this->customerService->getCustomer($id);
        return view("customers.edit", compact('customer'));
    }

    public function upgrade(UpgradeCustomerRequest $request, $id)
    {
        $customer = $request->all();
        $this->customerService->upgrade($customer,$id);
        return redirect()->route('Customer.list');
    }
}
