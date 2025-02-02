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
                                            <th> Semester </th>
                                            <th> Status </th>
                                            <th> Opsi </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Semester 1</td>
                                            <td>
                                                <span class="badge badge-success badge-sm rounded-pill">Aktif</span>
                                            </td>
                                            <td>
                                                <form action="" style="display:inline;">
                                                    @csrf
                                                    @method("put")
                                                    <input type="hidden" value="0||1">
                                                    <button type="submit" class="btn btn-danger btn-sm">
                                                        <span class="mdi mdi-close"></span> Nonaktif</button>
                                                </form>
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
                                            <td>Semester 2</td>
                                            <td>
                                                <span class="badge badge-danger badge-sm rounded-pill">Tidak Aktif</span>
                                            </td>
                                            <td>
                                                <form action="" style="display:inline;">
                                                    @csrf
                                                    @method("put")
                                                    <input type="hidden" value="0||1">
                                                    <button type="submit" class="btn btn-success btn-sm">
                                                        <span class="mdi mdi-check"></span> Aktifkan</button>
                                                </form>
                                                <a href="" class="btn btn-primary btn-sm"><span
                                                        class="mdi mdi-pencil"></span> Edit</a>
                                                <form style="display:inline;">
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
                                            <td>Semester 3</td>
                                            <td>
                                                <span class="badge badge-success badge-sm rounded-pill">Aktf</span>
                                            </td>
                                            <td>
                                                <form action="" style="display:inline;">
                                                    @csrf
                                                    @method("put")
                                                    <input type="hidden" value="0||1">
                                                    <button type="submit" class="btn btn-danger btn-sm">
                                                        <span class="mdi mdi-close"></span> Nonaktif</button>
                                                </form>
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
                        <h5 class="modal-title" id="tambahModalLabel">Tambah Semester</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="tambahForm">
                            @csrf
                            <div class="mb-3">
                                <label for="namaSemester" class="form-label">Semester</label>
                                <input type="text" class="form-control" id="namaSemester" name="nama" required placeholder="Semester">
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm">
                                <span class="mdi mdi-content-save"></span> Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
