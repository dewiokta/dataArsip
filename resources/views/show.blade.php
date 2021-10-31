@extends('layouts.app')
@section('content')
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Detail</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">Surat</a></li>
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
                                <a class="btn btn-success" href="{{ route('arsip.index') }}">Back</a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <!-- Light table -->
                            <div class="table-responsive">
                                <div class="form-group">
                                    <strong>Nomor Surat : </strong>
                                    {{$arsip -> nomor_surat}}
                                </div>
                                <div class="form-group">
                                    <strong>Kategori Surat : </strong>
                                    {{$arsip -> kategori}}
                                </div>
                                <div class="form-group">
                                    <strong>Judul : </strong>
                                    {{$arsip -> judul}}
                                </div>
                                <div class="form-group">
                                    <strong>Tanggal Pengarsipan : </strong>
                                    {{$arsip -> tanggal_arsip}}
                                </div>
                                <div class="form-group">
                                    <strong>File : </strong><br>
                                    <iframe src="{{}}"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection