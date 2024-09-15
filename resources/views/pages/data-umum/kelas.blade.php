@extends('layouts.main')

@section('container')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#tambahModal">
                                <span class="mdi mdi-plus"></span> Tambah
                            </button>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th> # </th>
                                            <th> Kode Kelas </th>
                                            <th> Nama Kelas </th>
                                            <th> Opsi </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>KL-1718803165</td>
                                            <td>TI A</td>
                                            <td>
                                                <a href="" class="btn btn-primary btn-sm"><span
                                                        class="mdi mdi-pencil"></span> Edit</a>
                                                <form action="/delete/1" method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"
                                                        onclick="return confirm('Apakah Anda yakin ingin menghapus item ini?')">
                                                        <span class="mdi mdi-delete"></span> Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>KL-1718803165</td>
                                            <td>TI B</td>
                                            <td>
                                                <a href="" class="btn btn-primary btn-sm"><span
                                                        class="mdi mdi-pencil"></span> Edit</a>
                                                <form action="/delete/1" method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"
                                                        onclick="return confirm('Apakah Anda yakin ingin menghapus item ini?')">
                                                        <span class="mdi mdi-delete"></span> Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>KL-1718803165</td>
                                            <td>AK A</td>
                                            <td>
                                                <a href="" class="btn btn-primary btn-sm"><span
                                                        class="mdi mdi-pencil"></span> Edit</a>
                                                <form action="/delete/1" method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"
                                                        onclick="return confirm('Apakah Anda yakin ingin menghapus item ini?')">
                                                        <span class="mdi mdi-delete"></span> Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>KL-1718803165</td>
                                            <td>AK B</td>
                                            <td>
                                                <a href="" class="btn btn-primary btn-sm"><span
                                                        class="mdi mdi-pencil"></span> Edit</a>
                                                <form action="/delete/1" method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"
                                                        onclick="return confirm('Apakah Anda yakin ingin menghapus item ini?')">
                                                        <span class="mdi mdi-delete"></span> Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>KL-1718803165</td>
                                            <td>AB A</td>
                                            <td>
                                                <a href="" class="btn btn-primary btn-sm"><span
                                                        class="mdi mdi-pencil"></span> Edit</a>
                                                <form action="/delete/1" method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"
                                                        onclick="return confirm('Apakah Anda yakin ingin menghapus item ini?')">
                                                        <span class="mdi mdi-delete"></span> Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>KL-1718803165</td>
                                            <td>AB B</td>
                                            <td>
                                                <a href="" class="btn btn-primary btn-sm"><span
                                                        class="mdi mdi-pencil"></span> Edit</a>
                                                <form action="/delete/1" method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"
                                                        onclick="return confirm('Apakah Anda yakin ingin menghapus item ini?')">
                                                        <span class="mdi mdi-delete"></span> Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Bootstrap untuk Tambah Data -->
        <div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="tambahModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="tambahModalLabel">Tambah Data Kelas</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="tambahForm" action="/tambah-kelas" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="kodeKelas" class="form-label">Kode Kelas</label>
                                <input type="text" class="form-control" id="kodeKelas" name="kode" required placeholder="Kode kelas">
                            </div>
                            <div class="mb-3">
                                <label for="namaKelas" class="form-label">Nama Kelas</label>
                                <input type="text" class="form-control" id="namaKelas" name="nama" required placeholder="Nama kelas">
                            </div>
                            <button type="submit" class="btn btn-primary">
                                <span class="mdi mdi-content-save"></span> Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
