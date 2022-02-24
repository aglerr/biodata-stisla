@extends('master')

@section('title', 'BiodataKu - Update Biodata')

@section('content')

    @include('essentials.navbar')
    @include('essentials.sidebar')

    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Update Biodata</h1>
            </div>

            @php
                $email0 = explode('@', $data->email)[0];
                $email1 = explode('@', $data->email)[1];
            @endphp

            <div class="card">
                <div class="card-body">
                    <form method="POST" action="/save-biodata" id="biodata-update">
                        @csrf

                        <div class="form-row">
                            
                            <!-- Nama Lengkap -->
                            <div class="form-group col-md-6">
                                <label for="name">Nama Lengkap</label>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fas fa-user"></i>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control" id="inlineFormInputGroup" name="name"
                                        readonly="" value="{{ $data->name }}">
                                </div>
                            </div>
                            <!-- End of Nama Lengkap -->

                            <!-- Email -->
                            <div class="form-group col-md-6">
                                <label for="email">Email</label>
                                <div class="input-group mb-2">
                                    <input type="text" class="form-control text-right" id="inlineFormInputGroup2"
                                        readonly="" name="email" value="{{ $email0 }}">
                                    <div class="input-group-append">
                                        <div class="input-group-text">@php
                                            echo '@' . $email1;
                                        @endphp</div>
                                    </div>
                                </div>
                            </div>
                            <!-- End of Email -->

                            <!-- Tempat Lahir -->
                            <div class="form-group col-md-6">
                                <label for="tempat_lahir">Tempat Lahir</label>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fas fa-map-marker-alt"></i>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control" name="tempat_lahir"
                                        value="{{ $data->tempat_lahir }}">
                                </div>
                            </div>
                            <!-- End of Tempat Lahir -->

                            <!-- Tanggal Lahir -->
                            <div class="form-group col-md-6">
                                <label for="tanggal_lahir">Tanggal Lahir</label>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="far fa-calendar-alt"></i>
                                        </div>
                                    </div>
                                    <input type="date" class="form-control" name="tanggal_lahir"
                                        value="{{ $data->tanggal_lahir }}">
                                </div>
                            </div>
                            <!-- End of Tanggal Lahir -->

                            <!-- Jenis Kelamin -->
                            <div class="form-group col-md-6">
                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fal fa-mars"></i>
                                        </div>
                                    </div>
                                    <select class="form-control" name="jenis_kelamin" form="biodata-update"
                                        value="{{ $data->jenis_kelamin }}">
                                        <option value="Laki Laki">Laki Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <!-- End of Jenis Kelamin -->

                            <!-- Golongan Darah -->
                            <div class="form-group col-md-6">
                                <label for="golongan_darah">Golongan Darah</label>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fas fa-tint"></i>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control" id="inlineFormInputGroup"
                                        name="golongan_darah" value="{{ $data->golongan_darah }}">
                                </div>
                            </div>
                            <!-- End of Golongan Darah -->

                            <!-- Alamat -->
                            <div class="form-group col-md-6">
                                <label for="alamat">Alamat</label>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fas fa-home"></i>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control" id="inlineFormInputGroup" name="alamat"
                                        value="{{ $data->alamat }}">
                                </div>
                            </div>
                            <!-- End of Alamat -->

                            <!-- No HP -->
                            <div class="form-group col-md-6">
                                <label for="no_hp">No Handphone</label>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fas fa-phone"></i>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control" id="inlineFormInputGroup" name="no_hp"
                                        value="{{ $data->no_hp }}">
                                </div>
                            </div>
                            <!-- End of No HP -->
                        
                        </div>
                        <!-- End of Form Row -->

                        <button class="btn btn-success btn-lg col-12" type="submit">Update Biodata</button>

                    </form>
                </div>



            </div>

        </section>
    </div>


@endsection
