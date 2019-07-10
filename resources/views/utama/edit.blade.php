@extends('layouts.master')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-6">
                    <div class="panel">
                    <div class="panel-body">
                    <h3>Edit Data Tadarus Santri</h3>
                    <br>
                    <form action="/santri/{{$santri->id}}/update/" method="POST">
                        {{csrf_field()}}
                        <div class="form-group">
                            <input type="hidden" name="tanggal" value="<?php echo date('Y-m-d') ?>" class="form-control" placeholder="Enter email">
                            <label for="waktu">Waktu</label>
                            <select name="waktu" class="form-control" id="waktu">
                                <option value="subuh" @if($santri->waktu == "subuh")selected @endif>Subuh</option>
                                <option value="dzuhur" @if($santri->waktu == "dzuhur")selected @endif>Dzuhur</option>
                                <option value="ashar" @if($santri->waktu == "ashar")selected @endif>Ashar</option>
                                <option value="maghrib" @if($santri->waktu == "maghrib")selected @endif>Maghrib</option>
                                <option value="isya" @if($santri->waktu == "isya")selected @endif>Isya</option>
                            </select>
                        </div>
                        <div class="form-group">
                        <label for="surah">Surah</label>
                        <input name="surah" type="text" class="form-control" id="surah" value="{{$santri->surah}}" placeholder="Surah">
                        </div>
                        <div class="form-group">
                        <label for="start_ayat">Start Ayat</label>
                        <input name="start_ayat" type="number" value="{{$santri->start_ayat}}" class="form-control" id="start_ayat" placeholder="Start Ayat">
                        </div>
                        <div class="form-group">
                        <label for="end_ayat">End Ayat</label>
                        <input name="end_ayat" type="number" value="{{$santri->end_ayat}}" class="form-control" id="end_ayat" placeholder="End Ayat">
                        </div>
                        <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <textarea name="keterangan" class="form-control" id="keterangan" rows="3">{{$santri->keterangan}}</textarea>
                        </div>
                        <button type="submit" name="update" class="btn btn-warning">Update</button>
                    </form>
                </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection