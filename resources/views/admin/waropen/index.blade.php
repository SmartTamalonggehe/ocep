@extends('admin.layouts.default')

@section('judul', 'Indonesia Waropen')

@section('main')


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="container-full">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="d-flex align-items-center">
                    <div class="me-auto">
                        <h3 class="page-title">BAHASA INDONESIA WAROPEN</h3>
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
                                <h4 class="box-title">Form Tambah Data</h4>
                            </div>
                            <!-- /.box-header -->
                            <form action="{{ route('waropen.store') }}" enctype="multipart/form-data" method="post">
                                @csrf
                                <div class="box-body">
                                    <h4 class="mt-0 mb-20"></h4>
                                    <div class="form-group">
                                        <h5>Bahasa Waropen <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="bhs_waropen" id="bhs_waropen" class="form-control"
                                                required data-validation-required-message="This field is required">
                                        </div>
                                        <div class="form-control-feedback"></div>
                                    </div>

                                    <h4 class="mt-0 mb-20"></h4>
                                    <div class="form-group">
                                        <h5>Audio<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="file" accept="audio/*" name="audio" id="audio"
                                                class="form-control" required>
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

                <div class="col-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Data Bahasa waropen</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Bahasa waropen</th>
                                            <th>Audio</th>
                                            <th>Opsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($waropen as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->bhs_waropen }}</td>
                                                <td>
                                                    <audio controls>
                                                        <source src="{{ asset('storage/audio/' . $item->audio) }}"
                                                            type="audio/mpeg">
                                                    </audio>
                                                </td>
                                                <td align="center">
                                                    <a href="{{ route('waropen.edit', $item->id) }}"><button type="submit"
                                                            class="btn btn-success">Edit</button></a>
                                                    <a href="{{ route('waropen.destroy', $item->id) }}"
                                                        class="btn btn-danger btn-hapus">Hapus</a>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Bahasa Waropen</th>
                                            <th>Audio</th>
                                            <th>Opsi</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>

        </div>
        </section>



    </div>
    <!-- /.content-wrapper -->

    <form action="" method="post" id="formHapus">
        @csrf
        @method('DELETE')
    </form>
@endsection

@section('script')
    <script src="{{ mix('js/crud.js') }}"></script>
@endsection
