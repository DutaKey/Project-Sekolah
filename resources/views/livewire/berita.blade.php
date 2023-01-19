<div class="container">
    <div class="row">
        <div class="col-3">
            <div class="card">
                <div class="card-header bg-primary">
                    <b class="text-white">Status</b>
                </div>
                <div class="card-body">
                    Komentar <br>
                    <input type="text" class="form-control" wire:model='txtkomentar'>
                    <br>
                    <input type="submit" class="btn btn-primary" value="KIRIM" wire:click='simpan'>
                </div>
            </div>
        </div>
        <div class="col-9">
            <div class="card mb-3" style="min-height: 900px !important">
                <div class="card-header bg-primary">
                    <b class="text-white">Kirim Saya</b>
                </div>
                <div class="card-body">
                    Saya: <br>
                    <p>
                        <i>
                            {{ $txtkomentar }}
                        </i>
                    </p>
                    <hr>
                    @foreach ($isi_komentar as $item)
                        Saya Pada {{ Carbon\Carbon::parse($item->created_at)->isoformat('dddd, D MMMM Y') }}
                        Menulis: <br>
                        <p>
                            <i>
                                {{ $item->isi_komentar }}
                            </i>
                            <button class="float-end btn btn-danger" wire:click="hapus('{{ $item->id }}')">
                                HAPUS
                            </button>
                        </p>
                        <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
