@extends('layout.main')
@section('title','KELAS')

@section('container')

<h1 class="h3 mb-2 text-gray-800">Data Kelas</h1>
<p class="mb-4">Berikut ini daftar kelas yang sudah tersimpan dalam Database.</p>

@if (session()->has('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<p>
    <a href="/kelas/create" class="btn btn-success btn-sm"><i class="fas fa-plus-circle"></i> Tambah Kelas</a>
</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-success">Daftar Kelas</h6>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hovered" id="dataTable" width="100%" cellspacing="0">
                <thead class="text-center">
                    <tr>
                        <th>No.</th>
                        <th>Nama Kelas</th>
                        <th>Kompetensi Keahlian</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    @foreach ($data as $item)
                    <tr>
                        <td>{{ $loop->iteration }}.</td>
                        <td>{{ $item->nama_kelas }}</td>
                        <td>{{ $item->jurusan }}</td>
                        <td>
                            <a href="/kelas/{{ $item->nama_kelas }}/edit" class="btn btn-info btn-sm mr-1"><i class="fas fa-edit"></i></a>
                            <a href="" class="btn btn-danger btn-sm" data-confirm="Anda yakin akan menghapus data ?"><i
                                    class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection
