<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Customer;

class Customers extends Component
{
    public $customers = array();
    public $search = "";

    // public function mount(){
    //     $this->customers = Customer::all();
    // }

    public function render()
    {
        if(! $this->search){
            $this->customers = Customer::all();
        } else {
            $this->customers = Customer::where('name', 'like', "%".$this->search."%")->get();
        }
        return view('livewire.customers');
    }

    public function deleteCustomer(Customer $customer){
        $customer->delete();

        session()->flash('success', 'Customer Deleted successfully!');
        return $this->redirect('/customers', navigate:true);
    }
}
