<div>
    <input type="checkbox" id="my_modal_6" class="modal-toggle" @checked($show) />
    <div class="modal" role="dialog">
        <form class="modal-box" wire:submit="simpan">
            <h3 class="text-lg font-bold">Form Input Customer</h3>
            <div class="py-4 space-y-2">
                {{-- Input Nama Customer --}}
                <label class="form-control ">
                    <div class="label">
                        <span class="label-text">Nama Customer</span>
                    </div>
                    <input wire:model="form.name" type="text" placeholder="Silahkan isi nama customer"
                        @class([
                            'input input-bordered',
                            'input-error' => $errors->first('form.name'),
                        ]) />
                </label>
                {{-- Input Contact Customer --}}
                <label class="form-control ">
                    <div class="label">
                        <span class="label-text">Kontak</span>
                    </div>
                    <input wire:model="form.contact" type="text" placeholder="Silahkan isi kontak customer"
                        @class([
                            'input input-bordered',
                            'input-error' => $errors->first('form.contact'),
                        ]) />
                </label>
                {{-- Input Keterangan Customer --}}
                <label class="form-control ">
                    <div class="label">
                        <span class="label-text">Keterangan</span>
                    </div>
                    <textarea wire:model="form.desc" placeholder="Silahkan tulis keterangan customer di sini" @class([
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
