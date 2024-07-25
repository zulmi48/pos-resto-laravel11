<div class="page-wrapper">
    <div class="card max-w-lg mx-auto">
        <form class="card-body" wire:submit="updateProfile">
            <h3 class="card-title">Edit Profile</h3>
            <div class="py-4 space-y-2">
                <label class="form-control ">
                    <div class="label">
                        <span class="label-text">Nama lengkap</span>
                    </div>
                    <input wire:model="name" type="text" @class([
                        'input input-bordered',
                        'input-error' => $errors->first('name'),
                    ]) />
                </label>
                <label class="form-control ">
                    <div class="label">
                        <span class="label-text">Email</span>
                    </div>
                    <input wire:model="email" type="email" @class([
                        'input input-bordered',
                        'input-error' => $errors->first('email'),
                    ]) />
                </label>
                <label class="form-control ">
                    <div class="label">
                        <span class="label-text">Password</span>
                    </div>
                    <input wire:model="password" type="password" placeholder="Isi apabila ingin mengubah"
                        @class([
                            'input input-bordered',
                            'input-error' => $errors->first('password'),
                        ]) />
                </label>
            </div>
            <div class="card-actions">
                <button class="btn btn-primary">
                    <x-tabler-check class="size-5" />
                    <span>Simpan</span>
                </button>
            </div>
        </form>
    </div>

</div>
