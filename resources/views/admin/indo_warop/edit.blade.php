@extends('admin.layouts.default')

@section('judul', 'Bahasa Indonesia')

@section('main')


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="container-full">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="d-flex align-items-center">
                    <div class="me-auto">
                        <h3 class="page-title">BAHASA INDONESIA</h3>
                        <div class="d-inline-block align-items-center">

                        </div>
                    </div>

                </div>
            </div>


            @if (session('berhasil'))
                <div class="box-body pad res-tb-block">
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        {{ session('berhasil') }}
                    </div>
                </div>
            @endif

            <section class="content">
                <div class="row">
                    <div class="col-lg-12 col-12">
                        <!-- Basic Forms -->
                        <div class="box">
                            <div class="box-header with-border">
                                <h4 class="box-title">Form Edit Data Bahasa Indonesia</h4>
                            </div>
                            <!-- /.box-header -->
                            <form action="{{ route('indo_warop.update', $kamus->id) }}" method="post">
                                @csrf
                                @method('PUT')
                                <div class="box-body">
                                    <h4 class="mt-0 mb-20"></h4>
                                    <div class="row">
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <h5>Indonesia <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <select name="indonesia_id" id="indonesia_id"
                                                        class="select2_basic form-control" required>
                                                        @php
                                                            $selected = '';
                                                        @endphp
                                                        @foreach ($indonesia as $indo)
                                                            @if ($indo->id == $kamus->indonesia_id)
                                                                @php
                                                                    $selected = 'selected';
                                                                @endphp
                                                            @endif
                                                            <option {{ $selected }} value="{{ $indo->id }}">
                                                                {{ $indo->bhs_indonesia }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-control-feedback"></div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <h5>Waropen <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <select name="waropen_id" id="waropen_id"
                                                        class="select2_basic form-control" required>
                                                        @php
                                                            $selected = '';
                                                        @endphp
                                                        @foreach ($waropen as $warop)
                                                            @if ($warop->id == $kamus->waropen_id)
                                                                @php
                                                                    $selected = 'selected';
                                                                @endphp
                                                            @endif
                                                            <option {{ $selected }} value="{{ $warop->id }}">
                                                                {{ $warop->bhs_waropen }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-control-feedback"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer">
                                    {{-- <button type="submit" class="btn btn-danger">Batal</button> --}}
                                    <button type="submit" class="btn btn-success pull-right">Simpan</button>
                                </div>
                                <!-- /.box -->
                            </form>
                        </div>

                    </div>
                </div>

            </section>



        </div>
        <!-- /.content-wrapper -->


    @endsection
