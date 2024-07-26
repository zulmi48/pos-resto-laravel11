<div>
    <input type="checkbox" id="my_modal_6" class="modal-toggle" @checked($show) />
    <div class="modal" role="dialog">
        <form class="modal-box" wire:submit="simpan">
            <h3 class="text-lg font-bold">Form Input Menu</h3>
            <div class="py-4 space-y-2">
                {{-- Input Gambar --}}
                <div class="flex justify-center">
                    <label for="pick-photo" class="avatar">
                        <div class="w-32 rounded-xl">
                            <img src="{{ $photo ? $photo->temporaryUrl() : url('images/noimage.jpg') }}" />
                        </div>
                    </label>
                </div>
                <input wire:model="photo" type="file" id="pick-photo" hidden>
                {{-- Input Nama Menu --}}
                <label class="form-control ">
                    <div class="label">
                        <span class="label-text">Nama menu</span>
                    </div>
                    <input wire:model="form.name" type="text" placeholder="Silahkan isi nama menu"
                        @class([
                            'input input-bordered',
                            'input-error' => $errors->first('form.name'),
                        ]) />
                </label>
                {{-- Input Harga Menu --}}
                <label class="form-control ">
                    <div class="label">
                        <span class="label-text">Harga</span>
                    </div>
                    <input wire:model="form.price" type="number" placeholder="Silahkan isi harga"
                        @class([
                            'input input-bordered',
                            'input-error' => $errors->first('form.price'),
                        ]) />
                </label>
                {{-- Input Tipe Menu --}}
                <label class="form-control ">
                    <div class="label">
                        <span class="label-text">Tipe Menu</span>
                    </div>
                    <select wire:model="form.type" @class([
                        'select select-bordered',
                        'select-error' => $errors->first('form.type'),
                    ])>
                        @foreach ($types as $tipe)
                            <option value="{{ $tipe }}">{{ $tipe }}</option>
                        @endforeach
                    </select>
                </label>
                {{-- Input Keterangan Menu --}}
                <label class="form-control ">
                    <div class="label">
                        <span class="label-text">Keterangan</span>
                    </div>
                    <textarea wire:model="form.desc" placeholder="Silahkan tulis keterangan menu di sini" @class([
                        'textarea textarea-bordered',
                        'textarea-error' => $errors->first('form.desc'),
                    ])></textarea>
                </label>
            </div>
            <div class="modal-action justify-between">
                <button type="button" class="btn btn-ghost" wire:click="closeModal">Close</button>
                <button class="btn btn-primary">
                    <x-tabler-check class="size-5" />
                    <span>Simpan</span>
                </button>
            </div>
        </form>
    </div>
</div>
