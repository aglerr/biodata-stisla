@extends('master')

@section('title', 'BiodataKu - Menu Utama')

@section('content')

    @include('essentials.navbar')
    @include('essentials.sidebar')

    @php
    $name = $data->name ?: 'Belum di set';
    $email = $data->email ?: 'Belum di set';
    @endphp

    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Menu Utama</h1>
            </div>

            <div class="card card-info">
                <div class="card-header">
                    <h4>Biodata</h4>
                    <div class="card-header-action">
                        <a href="/dashboard/update" class="btn btn-primary">
                            Update Biodata
                        </a>
                    </div>
                </div>
                <div class="card-body">

                    <div class="ml-12">
                        <p>
                            <b>Nama:</b> {{ $data->name }}<br>
                            <b>Email:</b> {{ $data->email }}<br>

                            <!-- Data Jenis Kelamin -->
                            <b>Jenis Kelamin:</b>
                            @if (is_null($data->jenis_kelamin))
                                <a href="/dashboard/update">[Belum di set!]</a>
                            @else
                                {{ $data->jenis_kelamin }}
                            @endif<br>
                            <!-- End of Data Jenis Kelamin -->

                            <!-- Data Tempat dan Tanggal Lahir -->
                            <b>Tempat dan Tanggal Lahir:</b>
                            @if (is_null($data->tempat_lahir) || is_null($data->tanggal_lahir))
                                {{ $data->tempat_lahir }}, {{ $data->tanggal_lahir }}
                                <a href="/dashboard/update">[Belum di set!]</a>
                            @else
                                {{ $data->tempat_lahir }}, {{ $data->tanggal_lahir }}
                            @endif<br>
                            <!-- End of Data Tempat dan Tanggal Lahir -->

                            <!-- Data Alamat -->
                            <b>Alamat:</b>
                            @if (is_null($data->alamat))
                                <a href="/dashboard/update">[Belum di set!]</a>
                            @else
                                {{ $data->alamat }}
                            @endif<br>
                            <!-- End of Data Alamat -->

                            <!-- Data Golongan Darah -->
                            <b>Golongan Darah:</b>
                            @if (is_null($data->golongan_darah))
                                <a href="/dashboard/update">[Belum di set!]</a>
                            @else
                                {{ $data->golongan_darah }}
                            @endif<br>
                            <!-- End of Data Golongan Darah -->

                            <!-- Data No Hp -->
                            <b>No HP:</b>
                            @if (is_null($data->no_hp))
                                <a href="/dashboard/update">[Belum di set!]</a>
                            @else
                                {{ $data->no_hp }}
                            @endif<br>
                            <!-- End of Data No Hp -->

                        </p>
                    </div>

                </div>
            </div>

        </section>
    </div>
@endsection
