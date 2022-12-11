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
                    <h2>Data Siswa 
                      <a href="{{ route('admin.siswa.createview') }}" class="btn btn-sm btn-primary">+ Tambah Siswa</a>
                    </h2>
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
                          <th>Kelas</th>
                          <th>Jurusan</th>
                          <th>NISN</th>
                          <th>Jenis_kelamin</th>
                          <th>alamat</th>
                          <th>No.Telp</th>
                          <th>Email</th>
                          <th>Wali Kelas</th>
                          <th>Action</th>
                        </tr>
                      </thead>


                      <tbody>
                        @foreach ($siswa as $sw)
                        <tr>
                          <td>{{ $sw->id }}</td>
                          <td>{{ $sw->nama }}</td>
                          <td>{{ $sw->kelas }}</td>
                          <td>{{ $sw->jurusan }}</td>
                          <td>{{ $sw->nisn }}</td>
                          <td>{{ $sw->jenis_kelamin }}</td>
                          <td>{{ $sw->alamat }}</td>
                          <td>{{ $sw->no_telp }}</td>
                          <td>{{ $sw->email }}</td>
                          <td>
                            {{ @$sw->dataguru->nama }}
                          </td>
                          <td>
                            {{-- <button class="btn btn-sm btn-info">Ubah</button> --}}
                            <form action="{{ route('admin.siswa.hapussiswa', $sw->id) }}" method="post">
                              @method('delete')
                              @csrf
                            <button class="btn btn-sm btn-danger" type="submit">Hapus</button>
                            </form>
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