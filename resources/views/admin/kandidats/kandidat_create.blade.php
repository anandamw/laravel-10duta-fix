@extends('admin.layouts.app')



@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Form Validation</h4>
                </div>

                <div class="card-body">
                    <div class="form-validation">
                        <form class="needs-validation" method="POST" action="/kandidat/create" enctype="multipart/form-data"
                            novalidate>
                            @csrf
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="mb-3 row">
                                        <label class="col-lg-4 col-form-label" for="validationCustom01">Name
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input placeholder="............................." type="text"
                                                class="form-control" id="validationCustom01" name="nama" required>
                                            <div class="invalid-feedback">
                                                Please enter a Name.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-lg-4 col-form-label" for="validationCustom02">Fakultas <span
                                                class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input placeholder="............................." type="text"
                                                class="form-control" id="validationCustom02" name="fakultas" required>
                                            <div class="invalid-feedback">
                                                Please enter a Fakultas.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-lg-4 col-form-label" for="validationCustom03">Prodi
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input placeholder="............................." type="Prodi"
                                                class="form-control" id="validationCustom03" name="prodi" required>
                                            <div class="invalid-feedback">
                                                Please enter a Prodi.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-lg-4 col-form-label" for="validationCustom03">Domisili
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input placeholder="............................." type="Domisili"
                                                class="form-control" id="validationCustom03" name="domisili" required>
                                            <div class="invalid-feedback">
                                                Please enter a Domisili.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-lg-4 col-form-label" for="validationCustom03">Umur
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input placeholder="............................." type="Umur"
                                                class="form-control" name="umur" id="validationCustom03" required>
                                            <div class="invalid-feedback">
                                                Please enter a Umur.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-lg-4 col-form-label" for="validationCustom05">Jenis Kelamin
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <select name="jenis_kelamin" class="default-select wide form-control"
                                                id="validationCustom05">
                                                <option selected>Please select</option>
                                                <option value="0">Perempuan</option>
                                                <option value="1">Laki-Laki</option>
                                            </select>
                                            <div class="invalid-feedback">
                                                Please select a one.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-lg-4 col-form-label" for="validationCustom05">Angkatan
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <select name="angkatan" class="default-select wide form-control"
                                                id="validationCustom05">
                                                <option selected>Please select</option>
                                                <option value="2020">2020</option>
                                                <option value="2021">2021</option>
                                                <option value="2022">2022</option>
                                                <option value="2023">2023</option>
                                                <option value="2024">2024</option>
                                            </select>
                                            <div class="invalid-feedback">
                                                Please select a one.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label class="col-lg-4 col-form-label" for="validationCustom03">Berkas
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input placeholder="............................." type="file"
                                                class="form-control" name="berkas" id="validationCustom03" required>
                                            <div class="invalid-feedback">
                                                Please enter a Berkas.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-lg-4 col-form-label" for="validationCustom03">Gambar
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input placeholder="............................." type="file"
                                                name="gambar" class="form-control" id="validationCustom03" required>
                                            <div class="invalid-feedback">
                                                Please enter a Gambar.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="mb-3 row">
                                        <label class="col-lg-4 col-form-label" for="validationCustom06">No Whatsapp
                                            <span class="text-danger">*</span>
                                        </label>

                                        <div class="col-lg-6">
                                            <input placeholder="............................." type="text"
                                                name="no_whatsapp" class="form-control" required>
                                            <div class="invalid-feedback">
                                                Please enter a No Whatsapp.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label class="col-lg-4 col-form-label" for="validationCustom06">Email
                                            <span class="text-danger">*</span>
                                        </label>

                                        <div class="col-lg-6">
                                            <input placeholder="............................." type="email"
                                                name="email" class="form-control" id="validationCustom06" required>
                                            <div class="invalid-feedback">
                                                Please enter a Email.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label class="col-lg-4 col-form-label" for="validationCustom04">Visi <span
                                                class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <textarea class="form-control" placeholder="............................." name="visi" id="validationCustom04"
                                                rows="5" required></textarea>
                                            <div class="invalid-feedback">
                                                Please enter a Visi.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label class="col-lg-4 col-form-label" for="validationCustom04">Misi <span
                                                class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <textarea class="form-control" placeholder="............................." name="misi" id="validationCustom04"
                                                rows="5" required></textarea>
                                            <div class="invalid-feedback">
                                                Please enter a Misi.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label class="col-lg-4 col-form-label" for="validationCustom10">Tinggi Badan <span
                                                class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input placeholder="............................." type="text"
                                                name="tinggi_badan" class="form-control" id="validationCustom10"
                                                required>
                                            <div class="invalid-feedback">
                                                Please enter a tinggi badan.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label class="col-lg-4 col-form-label" for="validationCustom10">Berat Badan <span
                                                class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input placeholder="............................." type="text"
                                                class="form-control" name="berat_badan" id="validationCustom10" required>
                                            <div class="invalid-feedback">
                                                Please enter a Berat badan.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <div class="col-lg-8 ms-auto">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
