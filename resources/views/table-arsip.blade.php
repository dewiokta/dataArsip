@extends('layouts.app')
@section('content')
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Tables</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">Tables</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Tables</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid mt--6">
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="col-lg-12 margin-tb">
                            <div class="pull-right mb-2">
                                <a class="btn btn-success" href="{{ route('arsip.create') }}"> Create New Arsip</a>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <!-- Light table -->
                            <div class="table-responsive">
                                <table id="myTable" class="table table-stripped">
                                    <thead>
                                        <tr>
                                            <th>Nomor Surat</th>
                                            <th>Kategori</th>
                                            <th>Judul</th>
                                            <th>Waktu Pengarsipan</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="list">
                                        @foreach ($arsips as $arsips)
                                        <tr>
                                            <td>{{ $arsips->nomor_surat }}</td>
                                            <td>{{ $arsips->kategori }}</td>
                                            <td>{{ $arsips->judul }}</td>
                                            <td>{{ $arsips->tanggal_arsip->format('d/m/Y') }}</td>
                                            <td class="d-flex align-items-center">
                                                <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="See" href=""><i class="far fa-eye"></i></a>
                                                <a class="btn btn-primary btn-action " data-toggle="tooltip" title="download" href=""><i class="fas fa-download"></i></a>
                                                <form class="delete-user ml-2" action="{{route('arsip.destroy',$arsips)}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a class=" btn btn-primary btn-action swal-6" data-toggle="tooltip" data-id="" title="Delete" onClick="return false"><i class="fas fa-trash"></i></a>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- Card footer -->
                    <div class="card-footer py-4">
                        <nav aria-label="...">
                            <ul class="pagination justify-content-end mb-0">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1">
                                        <i class="fas fa-angle-left"></i>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>
                                <li class="page-item active">
                                    <a class="page-link" href="#">1</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">
                                        <i class="fas fa-angle-right"></i>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection