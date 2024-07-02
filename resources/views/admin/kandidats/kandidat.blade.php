@extends('admin.layouts.app')


@section('content')
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h4 class="card-title">Profile Datatable</h4>
                <a href="/kandidat/create" class="btn btn-primary">Tambah Kandidat</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example3" class="display min-w850">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Fakultas</th>
                                <th>Prodi</th>
                                <th>Jenis Kelamin</th>
                                <th>Foto</th>
                                <th>Email</th>
                                <th>Waktu</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kandidats as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->fakultas }}</td>
                                    <td>{{ $item->prodi }}</td>
                                    @if ($item->jenis_kelamin == 0)
                                        <td>Perempuan</td>
                                    @elseif ($item->jenis_kelamin == 1)
                                        <td>Laki-Laki</td>
                                    @endif
                                    <td><img src="{{ asset('foto_kandidats') }}/{{ $item->gambar }}" width="50"
                                            alt=""></td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->created_at }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="/kandidat/{{ $item->id }}/update"
                                                class="btn btn-primary shadow btn-xs sharp me-1"><i
                                                    class="fa fa-pencil"></i></a>
                                            <button type="button" data-bs-toggle="modal"
                                                data-bs-target="#exampleModalCenter{{ $item->id }}"
                                                class="btn btn-danger shadow btn-xs sharp"><i
                                                    class="fa fa-trash"></i></button>
                                        </div>
                                        <div class="modal fade" id="exampleModalCenter{{ $item->id }}">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Modal title</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal">
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Cras mattis consectetur purus sit amet fermentum. Cras justo
                                                            odio, dapibus ac facilisis in, egestas eget quam. Morbi leo
                                                            risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger light"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <a href="/kandidat/{{ $item->id }}/delete"
                                                            class="btn btn-primary">Hapus</a>
                                                    </div>
                                                </div>
                                            </div>
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
