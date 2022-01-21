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
                                <div class="row">
                                    <label for="selectedWilayah" class="col-form-label ">Wilayah/Rayon</label>
                                    <div class="col">
                                    </div>

                                    <label for="selectedNamaJemaat" class="col-form-label ">Nama Jemaat</label>
                                    <div class="col">
                                    </div>

                                </div>
                            </div>

                            <div class="card-tools">
                                <a href="{{ route('home') }}" class="btn btn-primary">Tambah
                                    Data</a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                        </div>

                        <div class="card-footer">
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
