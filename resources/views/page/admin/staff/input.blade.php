<div class="card rounded-0 bgi-no-repeat bgi-position-x-end bgi-size-cover" style="background-color: #3C8DBC;background-size: auto 100%; background-image: url({{asset('keenthemes/media/misc/taieri.svg')}})">
    <!--begin::body-->
    <div class="card-body container pt-10 pb-8">
        <!--begin::Title-->
        <ol class="breadcrumb text-muted fs-6 fw-bold">
            <li class="breadcrumb-item pe-3 text-white">Data Staff</li>
            <li class="breadcrumb-item px-3 text-white">
                @if ($staff->id)
                    Update Data
                @else
                    Tambah Data
                @endif
            </li>
            <li class="breadcrumb-item pe-3 "><a href="javascript:;" onclick="load_list(1);" class="pe-3 text-white">Kembali</a></li>
        </ol>
        <!--end::Title-->
    </div>
    <!--end::body-->
</div>
<!--end::Search form-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Container-->
    <div class="container" id="kt_content_container">
        <!--begin::details View-->
        <div class="card mb-5 mb-xl-10">
            <!--begin::Card body-->
            <div class="card-body p-9">
                <!--begin::Row-->
                <form id="form_input">
                    <div class="row mb-7">
                        <!--begin::Label-->
                        <div class="col-sm-12 col-md-6">
                            <div class="mb-10">
                                <label for="nip" class="required form-label">No Pegawai</label>
                                <input type="text" name="nidn" id="nidn" class="form-control form-control-solid" placeholder="Nomor Pegawai" value="{{$staff->nidn}}" />
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="mb-10">
                                <label for="name" class="required form-label">Nama</label>
                                <input type="text" name="name" id="nama" class="form-control form-control-solid" placeholder="Nama" value="{{$staff->name}}" />
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="mb-10">
                                <label for="phone" class="required form-label">No HP</label>
                                <input type="text" name="phone" id="phone" class="form-control form-control-solid" placeholder="No HP" value="{{$staff->phone}}"/>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="mb-10">
                                <label for="email" class="required form-label">Email</label>
                                <input type="email" name="email" id="email" class="form-control form-control-solid" placeholder="Email" value="{{$staff->email}}"/>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="mb-10">
                                <label for="date_birth" class="required form-label">Tanggal Lahir</label>
                                <input type="text" id="date_birth" name="date_birth" class="form-control form-control-solid" placeholder="Tanggal Lahir" value="{{$staff->date_birth}}"/>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="mb-10">
                                <label for="place_birth" class="required form-label">Tempat Lahir</label>
                                <input type="text" name="place_birth" class="form-control form-control-solid" placeholder="Tempat Lahir" value="{{$staff->place_birth}}"/>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="mb-10">
                                <label for="religion" class="required form-label">Agama</label>
                                <select class="form-select" name="religion">
                                    <option SELECTED DISABLED>Pilih Agama</option>
                                    <option value="islam" {{$staff->religion == "islam" ? 'selected' : ''}}>Islam</option>
                                    <option value="katolik" {{$staff->religion == "katolik" ? 'selected' : ''}}>Katolik</option>
                                    <option value="protestan" {{$staff->religion == "protestan" ? 'selected' : ''}}>Protestan</option>
                                    <option value="buddha" {{$staff->religion == "buddha" ? 'selected' : ''}}>Buddha</option>
                                    <option value="hindu" {{$staff->religion == "hindu" ? 'selected' : ''}}>Hindu</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="mb-10">
                                <label for="address" class="required form-label">Alamat</label>
                                <textarea class="form-control" name="address">{{$staff->address}}</textarea>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="mb-10">
                                <label for="email" class="required form-label">Jenis Kelamin</label>
                                <select name="gender" class="form-select">
                                    <option SELECTED DISABLED>Pilih Jenis Kelamin</option>
                                    <option value="l" {{$staff->gender == "l" ? 'selected' : ''}}>Laki-Laki</option>
                                    <option value="p" {{$staff->gender == "p" ? 'selected' : ''}}>Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="mb-10">
                                <label for="password" class="required form-label">Password</label>
                                <input type="password" name="password" class="form-control form-control-solid" placeholder="Password"/>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="mb-10">
                                <label for="religion" class="required form-label">Jabatan</label>
                                <select class="form-select" name="jabatan">
                                    <option SELECTED DISABLED>Pilih Jabatan</option>
                                    <option value="REKTOR" {{$staff->jabatan == "REKTOR" ? 'selected' : ''}}>Rektor</option>
                                    <option value="WAKIL_REKTOR" {{$staff->jabatan == "WAKIL_REKTOR" ? 'selected' : ''}}>Wakil Rektor</option>
                                    <option value="HRD" {{$staff->jabatan == "HRD" ? 'selected' : ''}}>Hrd</option>
                                    <option value="DEKAN" {{$staff->jabatan == "DEKAN" ? 'selected' : ''}}>Dekan</option>
                                    <option value="KAPRODI" {{$staff->jabatan == "KAPRODI" ? 'selected' : ''}}>Kaprodi</option>
                                    <option value="DOSEN" {{$staff->jabatan == "DOSEN" ? 'selected' : ''}}>Dosen</option>
                                    <option value="STAFF" {{$staff->jabatan == "STAFF" ? 'selected' : ''}}>Staff</option>
                                    <option value="PEGAWAI" {{$staff->jabatan == "PEGAWAI" ? 'selected' : ''}}>Pegawai</option>
                                </select>
                            </div>
                        </div>
                        <div class="min-w-150px text-end">
                            @if ($staff->id)
                            <button id="tombol_simpan" onclick="handle_upload('#tombol_simpan','#form_input','{{route('admin.staff.update',$staff->id)}}','PATCH','Simpan');" class="btn btn-primary">Simpan</button>
                            @else
                            <button id="tombol_simpan" onclick="handle_upload('#tombol_simpan','#form_input','{{route('admin.staff.store')}}','POST','Simpan');" class="btn btn-primary">Simpan</button>
                            @endif
                        </div>
                        <!--end::Col-->
                    </div>
                </form>
                <!--end::Row-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Row-->
    </div>
    <!--end::Container-->
</div>
<script type="text/javascript">
    obj_datepicker('#date_birth');
    number_only('nidn');
    text_only('nama');
    number_only('phone');
    format_email('email');
</script>