<div class="content-wrapper" style="min-height: 226px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Input Data Jemaat</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('data-jemaat') }}">Data Jemaat</a></li>
                        <li class="breadcrumb-item active">Input</li>
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
                  <form wire:submit.prevent="store">
                    <div class="card">
                        <div class="card-body">
                          <div class="form-row">
                            <div class="form-group col-md-12">
                              <label for="nama_lengkap">Nama Lengkap</label>
                              <input wire:model.defer="state.nama_lengkap" type="string"
                                  class="form-control @error('nama_lengkap') is-invalid @enderror" id="nama_lengkap">
                              @error('nama_lengkap')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                              @enderror
                            </div>
                            <div class="form-group col-md-4">
                              <label for="kelamin">Jenis Kelamin</label>
                              <div>
                                <div class="form-check form-check-inline">
                                  <input wire:model.defer="state.kelamin" type="radio"
                                      name="kelamin"
                                      value="0"
                                      class="form-check-input @error('kelamin') is-invalid @enderror"
                                      id="kelamin">
                                  <label class="form-check-label">Pria</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input wire:model.defer="state.kelamin" type="radio"
                                      name="kelamin"
                                      value="1"
                                      class="form-check-input @error('kelamin') is-invalid @enderror"
                                      id="kelamin">
                                  <label class="form-check-label">Wanita</label>
                                </div>
                              </div>
                              @error('kelamin')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                              @enderror
                            </div>
                            <div class="form-group col-md-4">
                              <label for="status_pernikahan">Status Perkawinan</label>
                              <div>
                                <div class="form-check form-check-inline">
                                  <input wire:model.defer="state.status_pernikahan" type="radio"
                                      name="status_pernikahan"
                                      value="false"
                                      class="form-check-input @error('status_pernikahan') is-invalid @enderror"
                                      id="status_pernikahan">
                                  <label class="form-check-label">Belum Menikah</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input wire:model.defer="state.status_pernikahan" type="radio"
                                      name="status_pernikahan"
                                      value="true"
                                      class="form-check-input @error('status_pernikahan') is-invalid @enderror"
                                      id="status_pernikahan">
                                  <label class="form-check-label">Sudah Menikah</label>
                                </div>
                              </div>
                              @error('status_pernikahan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                              @enderror
                            </div>
                            <div class="form-group col-md-4">
                              <label for="status_jemaat">Status Jemaat</label>
                              <div>
                                <div class="form-check form-check-inline">
                                  <input wire:model.defer="state.status_jemaat" type="radio"
                                      name="status_jemaat"
                                      value="ANGGOTA"
                                      class="form-check-input @error('status_jemaat') is-invalid @enderror"
                                      id="status_jemaat">
                                  <label class="form-check-label">Anggota</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input wire:model.defer="state.status_jemaat" type="radio"
                                      name="status_jemaat"
                                      value="SIMPATISAN"
                                      class="form-check-input @error('status_jemaat') is-invalid @enderror"
                                      id="status_jemaat">
                                  <label class="form-check-label">Simpatisan</label>
                                </div>
                              </div>
                              @error('status_jemaat')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                              @enderror
                            </div>
                            <div class="form-group col-md-6">
                              <label for="tempat_lahir">Tempat Lahir</label>
                              <input wire:model.defer="state.tempat_lahir" type="string"
                                  class="form-control @error('tempat_lahir') is-invalid @enderror" id="tempat_lahir">
                              @error('tempat_lahir')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                              @enderror
                            </div>
                            <div class="form-group col-md-6">
                              <label for="tgl_lahir">Tanggal Lahir</label>
                              <input wire:model.defer="state.tgl_lahir" type="string"
                                  class="form-control @error('tgl_lahir') is-invalid @enderror" id="tgl_lahir">
                              @error('tgl_lahir')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                              @enderror
                            </div>
                            <div class="form-group col-md-12">
                              <label for="alamat">Alamat</label>
                              <input wire:model.defer="state.alamat" type="string"
                                  class="form-control @error('alamat') is-invalid @enderror" id="alamat">
                              @error('alamat')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                              @enderror
                            </div>
                            <div class="form-group col-md-6">
                              <label for="kab_kota">Kab.Kota</label>
                              <input wire:model.defer="state.kab_kota" type="string"
                                  class="form-control @error('kab_kota') is-invalid @enderror" id="kab_kota">
                              @error('kab_kota')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                              @enderror
                            </div>
                            <div class="form-group col-md-6">
                              <label for="provinsi">Provinsi</label>
                              <input wire:model.defer="state.provinsi" type="string"
                                  class="form-control @error('provinsi') is-invalid @enderror" id="provinsi">
                              @error('provinsi')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                              @enderror
                            </div>
                            <div class="form-group col-md-4">
                              <label for="mobile_phone">Handphone</label>
                              <input wire:model.defer="state.mobile_phone" type="string"
                                  class="form-control @error('mobile_phone') is-invalid @enderror" id="mobile_phone">
                              @error('mobile_phone')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                              @enderror
                            </div>
                            <div class="form-group col-md-4">
                              <label for="wa">Whatsapp</label>
                              <input wire:model.defer="state.wa" type="string"
                                  class="form-control @error('wa') is-invalid @enderror" id="wa">
                              @error('wa')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                              @enderror
                            </div>
                            <div class="form-group col-md-4">
                              <label for="fb">Facebook</label>
                              <input wire:model.defer="state.fb" type="string"
                                  class="form-control @error('fb') is-invalid @enderror" id="fb">
                              @error('fb')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                              @enderror
                            </div>
                            <div class="form-group col-md-4">
                              <label for="instagram">Instagram</label>
                              <input wire:model.defer="state.instagram" type="string"
                                  class="form-control @error('instagram') is-invalid @enderror" id="instagram">
                              @error('instagram')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                              @enderror
                            </div>
                            <div class="form-group col-md-4">
                              <label for="fb">Line</label>
                              <input wire:model.defer="state.line" type="string"
                                  class="form-control @error('line') is-invalid @enderror" id="line">
                              @error('line')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                              @enderror
                            </div>
                            <div class="form-group col-md-6">
                              <label for="pekerjaan">Pekerjaan</label>
                              <input wire:model.defer="state.pekerjaan" type="string"
                                  class="form-control @error('pekerjaan') is-invalid @enderror" id="pekerjaan">
                              @error('pekerjaan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                              @enderror
                            </div>
                            <div class="form-group col-md-6">
                              <label for="pendidikan">Pendidikan</label>
                              <input wire:model.defer="state.pendidikan" type="string"
                                  class="form-control @error('pendidikan') is-invalid @enderror" id="pendidikan">
                              @error('pendidikan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                              @enderror
                            </div>
                          </div>
                        </div>
                        <div class="card-footer">
                          <button type="button" wire:click="clear" class="btn btn-default">Clear</button>
                          <button type="submit" class="btn btn-primary">{{ $isEdit ? 'Update' : 'Simpan' }}</button>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </form>
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
