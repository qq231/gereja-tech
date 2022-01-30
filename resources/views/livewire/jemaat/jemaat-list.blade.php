<div class="content-wrapper" style="min-height: 226px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Pengaturan Data Jemaat</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active">Data Jemaat</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">
                              <div class="dropdown">
                                <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                  <i class="fa fa-filter"></i>&nbsp; Filter
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                  <li><a class="dropdown-item" href="#">Action</a></li>
                                  <li><a class="dropdown-item" href="#">Another action</a></li>
                                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                              </div>
                            </div>

                            <div class="card-tools">
                                <a href="{{ route('data-jemaat.create') }}" class="btn btn-light">
                                  Tambah</a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                          <table class="table table-hover text-nowrap">
                            <thead>
                              <tr>
                                <th>Nama Lengkap</th>
                                <th>Kelamin</th>
                                <th>Handphone</th>
                                <th>Lahir</th>
                                <th>Tgl.Lahir</th>
                                <th>Alamat</th>
                              </tr>
                            </thead>
                            <tbody>
                              @forelse ($jemaat as $val)
                                <tr>
                                  <td>
                                    <a href="{{ url('data-jemaat/'.$val->id.'/edit') }}">
                                      {{ $val->nama_lengkap }}
                                    </a>
                                  </td>
                                  <td>{{ $val->kelamin === 0 ? 'Pria' : 'Wanita' }}</td>
                                  <td>{{ $val->mobile_phone }}</td>
                                  <td>{{ $val->tempat_lahir }}</td>
                                  <td>{{ $val->tgl_lahir }}</td>
                                  <td>{{ $val->alamat }}</td>
                                </tr>
                              @empty
                                  <tr>
                                    <td colspan="6" class="text-center">Data not found</td>
                                  </tr>
                              @endforelse
                            </tbody>
                          </table>
                        </div>

                        <div class="card-footer clearfix">
                          {{ $jemaat->links() }}
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

@push('js')
    <script>
    </script>
@endpush
