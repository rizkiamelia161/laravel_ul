@extends('master')
@section('nav-md')
@section('konten')
        <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Users</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Data Guru</h2>
                    <ul class="nav navbar-right panel_toolbox">
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <div class="dataTables_length" id="datatable_length">
                    <label>Show <select name="datatable_length" aria-controls="datatable" class="form-control input-sm">
                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select> entries</label>
                 </div>
                  <div id="datatable_filter" class="dataTables_filter">
                    <label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="datatable"></label></div></div>
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Id</th>
                          <th>Nama</th>
                          <th>Alamat</th>
                          <th>Mapel</th>
                          <th>Jenis Kelamin</th>
                          <th>No Telp</th>
                          <th>Email</th>
                          <th>Action</th>
                        </tr>
                      </thead>


                      <tbody>
                        @foreach ($guru as $gr)
                        <tr>
                          <td>{{ $gr->id }}</td>
                          <td>{{ $gr->nama }}</td>
                          <td>{{ $gr->alamat }}</td>
                          <td>{{ $gr->mapel }}</td>
                          <td>{{ $gr->jenis_kelamin }}</td>
                          <td>{{ $gr->no_telp }}</td>
                          <td>{{ $gr->email }}</td>
                          <td>
                            {{-- <button class="btn btn-sm btn-info">Ubah</button> --}}
                            <button class="btn btn-sm btn-danger">Hapus</button>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection