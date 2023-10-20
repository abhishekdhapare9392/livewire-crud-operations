<div class="card offset-3 col-6">
    <div class="card-header">
        Login
    </div>
    <div class="card-body">
        <form wire:submit='loginUser'>
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
            <button type="submit" class="btn btn-primary">Login</button>
            <div>
                New User? Please <a wire:navigate href="/register">Register</a>
            </div>
        </form>
    </div>
</div>