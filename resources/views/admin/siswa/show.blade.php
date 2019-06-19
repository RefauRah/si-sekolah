@extends('admin.template.base')

@section('content')
<section class="content-header">
    <?php foreach ($users as $key): ?>
      <h1>Profil Siswa {{$key->nama}}</h1>
      <p>{{$key->alamat}}</p>
    <?php endforeach; ?>
@if(Session::has('flash_message'))
    <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('flash_message') !!}</em></div>
@endif
<section class="content-header">
      <h1>
        Lihat
        <small>data siswa</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="">Siswa</li>
        <li class="active">Profil</li>
      </ol>
</section>
<section class="content">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Profil Siswa PSDI</h3>
            </div>
<!-- /.box-header ALTER TABLE `siswa` AUTO_INCREMENT = 0;-->
            <div class="box-body">
                
                <table class="table table-bordered table-striped">
                <thead>
                </thead>
                <tbody>

                <tr>
                    <th>NIS</th>
                    <td>{{$key->nik}}</td>
                </tr>
                
                <tr>
                    <th>Nama</th>
                    <td>{{$key->nama}}</td>
                </tr>

                <tr>
                    <th>Kelas</th>
                    <td>#</td>
                </tr>

                <tr>
                    <th>Jenis Kelamin</th>
                    <td>{{$key->jk}}</td>
                </tr>

                <tr>
                    <th>Alamat</th>
                    <td>{{$key->alamat}}</td>
                </tr>
                
                <tr>
                    <th>Tempat Lahir</th>
                    <td>{{$key->tmpt_lahir}}</td>
                </tr>

                <tr>
                    <th>Tanggal Lahir</th>
                    <td>{{$key->tgl_lahir}}</td>
                </tr>

                </tbody>
                <tfoot>
                <tr>
                </tfoot>
                </table>
                <div class="col-md-4" style="padding-top:20px">
                        @if($key->image == 'default.png')
                            <img src="{{ url('images/default.png') }}" alt="Profile" class="img-thumbnail">
                        @else
                            <img src="{{ Storage::url($key->image) }}" alt="Profile" class="img-thumbnail">
                        @endif
                    </div>
            </div>
<!-- /.box-body -->
<div class="button" style="margin-left:10px;margin-right:10px;padding-bottom:10px;">
            <a href="#" class="btn btn-success pull-right">Edit</a>
            <a href="#" class="btn btn-primary">Kembali</a>
</div>
        </div>
    </div>
</section>
@endsection