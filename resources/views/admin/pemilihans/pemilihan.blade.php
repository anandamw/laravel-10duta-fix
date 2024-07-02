@extends('admin.layouts.app')


@section('content')
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h4 class="card-title">Profile Datatable</h4>
                <a href="/pemilihan/create" class="btn btn-primary">Tambah Pemilihan</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example3" class="display min-w850">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Kandidat Yang Dipilih</th>
                                <th>Waktu</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pemilihans as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->nama_depan }} {{ $item->nama_belakang }}</td>
                                    <td>
                                        <div>
                                            <img src="{{ asset('gambar') }}/{{ $item->gambar }}" alt="">
                                            <div>{{ $item->nama }} </div>
                                        </div>
                                    </td>
                                    <td>{{ $item->created_at }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i
                                                    class="fa fa-pencil"></i></a>
                                            <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                    class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
