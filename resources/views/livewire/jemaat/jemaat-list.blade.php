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
                            <!-- <div class="card-title">
                              Daftar Jemaat
                            </div> -->

                            <div class="card-tools">
                                <a href="{{ route('data-jemaat.create') }}" class="btn btn-light btn-sm">
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
                                  <td>{{ $val->nama_lengkap }}</td>
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
