<div class="content-wrapper" style="min-height: 226px;">
  <section class="content-header">
      <div class="container-fluid">
          <div class="row mb-2">
              <div class="col-sm-6">
                  <h1>Dashboard</h1>
              </div>
              <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                      <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                      <li class="breadcrumb-item active">Dashboard</li>
                  </ol>
              </div>
          </div>
      </div><!-- /.container-fluid -->
  </section>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-4">
          <div class="small-box bg-warning">
            <div class="inner">
              <h3> 
                @if ($birthdayToday !== null) 
                  {{ count($birthdayToday) }}
                @else
                  0
                @endif
                jemaat</h3>
              <p>Ulang tahun hari ini</p>
            </div>
            <div class="icon">
              <i class="fas fa-users"></i>
            </div>
            <a href="#" class="small-box-footer">Lebih lanjut <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- <div class="col-4">
          <div class="small-box bg-info">
            <div class="inner">
              <h3>150 jemaat</h3>
              <p>Ulang tahun minggu ini</p>
            </div>
            <div class="icon">
              <i class="fas fa-users"></i>
            </div>
            <a href="#" class="small-box-footer">Lebih lanjut <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div> -->
        <div class="col-4">
        <div class="small-box bg-success">
          <div class="inner">
              <h3>
                @if ($birthdayMonth !== null) 
                  {{ count($birthdayMonth) }}
                @else
                  0
                @endif
                jemaat
              </h3>
              <p>Ulang tahun bulan ini</p>
            </div>
            <div class="icon">
              <i class="fas fa-users"></i>
            </div>
            <a href="#" class="small-box-footer">Lebih lanjut <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Jemaat Berulang Tahun Hari Ini</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
              <table class="table table-hover text-nowrap">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Nama Lengkap</th>
                    <th>Kelamin</th>
                    <th>Tgl.Lahir</th>
                    <th>Alamat</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($birthdayToday as $row)
                    <tr>
                      <td>
                        {{ $row->id }}
                      </td>
                      <td>
                        {{ $row->nama_lengkap }}
                      </td>
                      <td>
                        @if ($row->kelamin == 1)
                          Pria
                        @else
                          Wanita
                        @endif
                      </td>
                      <td>
                        {{ $row->tgl_lahir }}
                      </td>
                      <td>
                        {{ $row->alamat }}
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Jemaat Berulang Tahun Bulan Ini</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
              <table class="table table-hover text-nowrap">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Nama Lengkap</th>
                    <th>Kelamin</th>
                    <th>Tgl.Lahir</th>
                    <th>Alamat</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($birthdayMonth as $row)
                    <tr>
                      <td>
                        {{ $row->id }}
                      </td>
                      <td>
                        {{ $row->nama_lengkap }}
                      </td>
                      <td>
                        @if ($row->kelamin == 1)
                          Pria
                        @else
                          Wanita
                        @endif
                      </td>
                      <td>
                        {{ $row->tgl_lahir }}
                      </td>
                      <td>
                        {{ $row->alamat }}
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
    </div>
  </section>
</div>
