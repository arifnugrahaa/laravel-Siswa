@extends('layout.main')
@section('title','KELAS')

@section('container')

<h1 class="h3 mb-2 text-gray-800">Penambahan Data Kelas</h1>
<p class="mb-4">Silahkan gunakan form dibawah ini untuk menambahkan data kelas.</p>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-danger">Isi Data Dengan Benar</h6>
    </div>
    <div class="card-body">
        <form method="POST" action="/kelas">
            @csrf
            <div class="form-group">
                <label class="font-weight-bold">Nama Kelas</label>
                <input type="text" name="nama_kelas" maxlength="10" onKeyUp="this.value=this.value.toUpperCase()"
                    class="form-control text-capitalize " placeholder="Masukkan Nama Kelas, Misal : X RPL-1"
                    autocomplete="off" value="{{ old('nama_kelas') }}" autofocus required />
                @error('nama_kelas')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label class="font-weight-bold">Kompetensi Keahlian</label>
                <input type="text" maxlength="50" onkeypress="return event.charCode < 48 || event.charCode >57"
                    onKeyUp="this.value=this.value.toUpperCase()" value="{{ old('jurusan') }}"  name="jurusan"
                    class="form-control text-capitalize"
                    placeholder="Masukkan Nama Kompetensi Keahlian, Misal : Rekayasa Perangkat Lunak" autocomplete="off"
                    required />
            </div>

            <div class="form-group">
                <button class="btn btn-success" type="submit"><i class="fas fa-save"></i> Simpan Kelas</button>
            </div>

        </form>
    </div>
</div>
@endsection
