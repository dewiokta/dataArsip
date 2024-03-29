@extends('layouts.app')
@section('content')
<div class="container">
    <div class="section-body">
        <h2 class="section-title">Tambah Data Arsip</h2>

        <div class="card">
            <form action="{{ route('arsip.store') }}" method="POST">
                <div class="card-body">
                    @csrf
                    <div class="form-group">
                        <label for="nomor">Nomor Surat</label>
                        <input type="text" class="form-control"  name="nomor_surat">
                        @error('nomor_surat')
                        <div class="invalid-feedback">
                        {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="sel1">Kategori</label>
                        <select class="form-control" id="sel1" name="kategori">
                            <option value="Undangan">Undangan</option>
                            <option value="Pengumuman">Pengumuman</option>
                            <option value="Nota Dinas">Nota Dinas</option>
                            <option value="Pemberitahuan">Pemberitahuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" class="form-control"  name="judul">
                        @error('judul')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="tanggal">Tanggal Arsip</label>
                        <input type="date" class="form-control"  name="tanggal_arsip">
                        @error('tanggal_arsip')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="surat">Surat</label>
                        <div class="custom-file">
                            <input type="file" name="surat" accept="application/pdf" class="custom-file-input" >
                        </div>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a class="btn btn-secondary" href="{{ route('arsip.index') }}">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection