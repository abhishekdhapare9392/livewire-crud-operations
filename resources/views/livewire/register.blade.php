<div class="card offset-3 col-6">
    <div class="card-header">
        Register User
    </div>
    <div class="card-body">
        <form wire:submit='registerUser'>
            <div class="mb-3">
                <label for="exampleInputName1" class="form-label">Name</label>
                <input wire:model="name" type="text" class="form-control" id="exampleInputName1"
                    aria-describedby="nameHelp">
                @error('name')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input wire:model="email" type="email" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
                @error('email')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input wire:model="password" type="password" class="form-control" id="exampleInputPassword1">
                @error('password')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
            <div>
                Already have account? Please <a wire:navigate href="/login">Login</a>
            </div>
        </form>
    </div>
</div>