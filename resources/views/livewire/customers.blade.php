<div class="py-2">
    <div class="row mb-2">
        <div class="col-auto me-auto">
            <input type="text" class="form-control" wire:model.live.debounce.150ms='search'
                placeholder="Search Customers" />
        </div>
        <div class="col-auto ms-auto">
            <button wire:navigate href="/customers/create" class="btn btn-success btn-sm">Create</button>
        </div>
    </div>
    <livewire:flash-messages />
    <div class="card shadow">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($customers as $customer)
                    <tr>
                        <th scope="row">{{ $customer->id }}</th>
                        <td>{{ $customer->name }}</td>
                        <td>{{ $customer->email }}</td>
                        <td>{{ $customer->phone }}</td>
                        <td>
                            <button wire:navigate href="/customers/{{ $customer->id }}"
                                class="btn btn-primary btn-sm">View</button>
                            <button class="btn btn-warning btn-sm" wire:navigate
                                href="/customers/{{ $customer->id }}/edit">Edit</button>
                            <button class="btn btn-danger btn-sm"
                                wire:click="deleteCustomer({{ $customer->id }})">Delete</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>