@extends('layouts.app')
@section('content')

  <div class="panel panel-default">
    <div class="panel-heading">
      <h2>Cari Makanan</h2>
          </div>
    <div class="panel-body">
      <div class="row">
        <div class="col-md-10">
          <form class="form-horizontal" action="{{ action('SearchController@find') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}


            <div class="form-group">
              <label class="col-md-4 control-label">Perincian Makanan</label>
              <div class="col-md-8">
                <div class="form-group">
                  <input class="form-control" type="text" name="nama_makanan" placeholder="Nama Makanan">
                </div>
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-4 control-label">Saiz Makanan</label>
              <div class="col-md-8">
                <div class="form-group">
                  <input class="form-control" type="text" name="saiz_hidangan" placeholder="Saiz Hidangan">
                </div>
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-4 control-label">Negeri</label>
              <div class="col-md-8">
                <div class="form-group">
                  <select>
                  @foreach($states as $state )
                  <option class="col-md-4 control-label" value="{{ $state->id }}">{{ $state->name }}</option>
                  @endforeach
                  </select>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-4 control-label"></label>
              <div class="col-md-8">
                <div class="form-group">
                  <select>
                  @foreach($districts as $district )
                  <option class="col-md-4 control-label" value="{{ $district->id }}">{{ $district->name }}</option>
                  @endforeach
                  </select>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-11">

              <button type="submit" class="btn btn-success">Search</button>

              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  @endsection
