<div class="card offset-3 col-6 shadow">
    <div class="card-header">
      Customer Details
    </div>
    <div class="card-body">
      <h5 class="card-title">{{ $customer->name  }}</h5>
      <p class="card-text">{{ $customer->email }}</p>
      <p class="card-text">{{ $customer->phone }}</p>
      <button class="btn btn-warning btn-sm" wire:navigate href="/customers">Back</button>
    </div>
  </div>