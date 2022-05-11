@extends('admin.layouts.default')

@section('judul', 'Bahasa Waropen')

@section('main')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="container-full">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="d-flex align-items-center">
                    <div class="me-auto">
                        <h3 class="page-title">BAHASA WAROPEN</h3>
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
                                <h4 class="box-title">Form Edit Data Bahasa Waropen</h4>
                            </div>
                            <!-- /.box-header -->
                            <form action="{{ route('waropen.update', $waropen->id) }}" enctype="multipart/form-data"
                                method="post">
                                @csrf
                                @method('PUT')
                                <div class="box-body">
                                    <h4 class="mt-0 mb-20"></h4>
                                    <div class="form-group">
                                        <h5>Bahasa Waropen <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" value="{{ $waropen->bhs_waropen }}" name="bhs_waropen"
                                                id="bhs_waropen" class="form-control" required
                                                data-validation-required-message="This field is required">
                                        </div>
                                        <div class="form-control-feedback"></div>
                                    </div>
                                    <div class="form-group">
                                        <h5>Audio Lama<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <audio controls>
                                                <source src="{{ asset('storage/audio/' . $waropen->audio) }}"
                                                    type="audio/mpeg">
                                            </audio>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h5>Audio<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="file" value="{{ $waropen->audio }}" name="audio" id="audio"
                                                class="form-control">
                                        </div>
                                    </div>

                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-success pull-right">Simpan</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.box -->
                    </div>
                </div>

            </section>


        @endsection
