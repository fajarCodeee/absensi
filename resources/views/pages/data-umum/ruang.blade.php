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
                                            <th> Kode Ruangan </th>
                                            <th> Nama Ruangan </th>
                                            <th> Opsi </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>2</td>
                                            <td>A.1.1</td>
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
                                            <td>3</td>
                                            <td>A.1.2</td>
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
                                            <td>5</td>
                                            <td>Mawar</td>
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
    </div>

        <!-- Modal Bootstrap untuk Tambah Data -->
        <div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="tambahModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="tambahModalLabel">Tambah Data Prodi</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="tambahForm">
                            @csrf
                            <div class="mb-3">
                                <label for="kodeRuang" class="form-label">Kode Kelas</label>
                                <input type="text" class="form-control" id="kodeRuang" name="kodeRuang" required placeholder="Kode ruang kelas">
                            </div>
                            <div class="mb-3">
                                <label for="namaRuang" class="form-label">Nama Kelas</label>
                                <input type="text" class="form-control" id="namaRuang" name="namaRuang" required placeholder="Nama ruang kelas">
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm">
                                <span class="mdi mdi-content-save"></span> Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
