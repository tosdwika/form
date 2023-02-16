@extends('ui.dashboard')
@section('title','Update Pendidikan')
@section('content')
<form action="/biodata/updatependidikan/{{ $biodata->id_pendidikan }}" method="POST" enctype="multipart/form-data">
@csrf

<div class="content">
    <div class="row">
        <div class="col-sm-14">            
            <div class="form-group">
                <label>Pendidikan</label>
            </div>
            <div class="form-group">
                <table class="table table-bordered">
                    <thead>
                        <th class="col-sm-2">
                            <label>Jenjang Pendidikan</label>                            
                        </th>
                        <th class="col-sm-3">
                            <label>Nama Sekolah</label>                            
                        </th>
                        <th class="col-sm-3">
                            <label>Jurusan</label>                            
                        </th>
                        <th class="col-sm-1">
                            <label>Tahun Lulus</label>                            
                        </th>
                        <th class="col-sm-1">
                            <label>IPK</label>                            
                        </th>
                    </thead>
                    <tbody>
                        <th class="col-sm-2">
                            <input name="jenjang_pendidikan" class="form-control" value="{{ $biodata->jenjang_pendidikan }}">
                        </th>
                        <th class="col-sm-3">
                            <input name="nama_sekolah" class="form-control" value="{{ $biodata->nama_sekolah }}">
                        </th>
                        <th class="col-sm-3">
                            <input name="jurusan" class="form-control" value="{{ $biodata->jurusan }}">
                        </th>
                        <th class="col-sm-1">
                            <input name="tahun_lulus" class="form-control" value="{{ $biodata->tahun_lulus }}">
                        </th>
                        <th class="col-sm-1">
                            <input name="ipk" class="form-control" value="{{ $biodata->ipk }}">
                        </th>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                <button class="btn btn-sm btn-primary" type="submit">Simpan</button>
            </div>
        </div>
    </div>
</div>
</form>
@endsection