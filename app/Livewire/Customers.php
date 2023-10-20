<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Customer;
use Livewire\WithPagination;

class Customers extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    
    public $search = "";

    // public function mount(){
    //     $this->customers = Customer::all();
    // }

    public function render()
    {
        if(! $this->search){
            $customers = Customer::paginate(5);
        } else {
            $customers = Customer::where('name', 'like', "%".$this->search."%")->paginate(5);
        }
        return view('livewire.customers', [
            'customers' => $customers
        ]);
    }

    public function deleteCustomer(Customer $customer){
        $customer->delete();

        session()->flash('success', 'Customer Deleted successfully!');
        return $this->redirect('/customers', navigate:true);
    }
}
