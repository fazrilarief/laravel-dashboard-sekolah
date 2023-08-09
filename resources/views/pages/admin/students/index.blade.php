@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Siswa</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-download fa-sm text-white-50"></i>Tambah Data Siswa</a>
        </div>

        <div class="row-12">
            <div class="card-shadow">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered text-center">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>ID</th>
                                    <th>Nama</th>
                                    <th>NIS</th>
                                    <th>Email</th>
                                    <th>Tempat Lahir</th>
                                    <th>Taggal Lahir</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Angkatan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($students as $student)
                                    <tr>
                                        <td>{{ $loop->first }}</td>
                                        <td>{{ $student->id }}</td>
                                        <td>{{ $student->nama }}</td>
                                        <td>{{ $student->nis }}</td>
                                        <td>{{ $student->email }}</td>
                                        <td>{{ $student->tempat_lahir }}</td>
                                        <td>{{ $student->tanggal_lahir }}</td>
                                        <td>{{ $student->jenis_kelamin }}</td>
                                        <td>{{ $student->angkatan }}</td>
                                        <td>
                                            <div class="row m-2">
                                                <a href="#" class="btn btn-info mr-2">
                                                    Edit
                                                </a>
                                                <form action="#">
                                                    @csrf
                                                    <a href="#" class="btn btn-danger">
                                                        Hapus
                                                    </a>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection
