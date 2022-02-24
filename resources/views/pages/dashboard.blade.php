@extends('master')

@section('title', 'BiodataKu - Menu Utama')

@section('halaman', 'Biodata')
    
@endsection

@section('body')
    <!-- Data biodata -->
@endsection

@section('content')

    @include('essentials.navbar')
    @include('essentials.sidebar')

    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                @yield('halaman')
            </div>

            @yield('body')

        </section>
    </div>

@endsection
