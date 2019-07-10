@extends('layouts.master')

@section('content')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="col-12">
                    @if(session('sukses'))
                    <div class="alert alert-success" role="alert">
                        {{session('sukses')}}
                    </div>
                    @endif
                    <!-- TABLE HOVER -->
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="page-title">Data Tadarus Santri</h3>
                            <div class="right">
                                <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i class="lnr lnr-plus-circle"></i></button>
                            </div>
                        </div>
                        <div class="panel-body">
                        </div>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Tanggal</th>
                                        <th>Waktu</th>
                                        <th>Surah</th>
                                        <th>Start Ayat</th>
                                        <th>End Ayat</th>
                                        <th>Keterangan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data_santri as $santri)
                                        <tr>
                                            <td><span class="label label-info">{{$santri->tanggal}}</span></td>
                                            <td><span class="label label-info">{{$santri->waktu}}</span></td>
                                            <td>{{$santri->surah}}</td>
                                            <td>{{$santri->start_ayat}}</td>
                                            <td>{{$santri->end_ayat}}</td>
                                            <td>{{$santri->keterangan}}</td>
                                            <td><a href="/santri/{{$santri->id}}/edit" class="btn btn-warning">Edit</a>
                                                <a href="/santri/{{$santri->id}}/delete" class="btn btn-danger" onclick="return confirm('Yakin Ingin Dihapus')">Delete</a></td>
                                        </tr>   
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END TABLE HOVER -->
                </div>
            </div>
        </div>
    </div>
@endsection