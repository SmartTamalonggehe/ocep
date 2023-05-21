@extends('user.layouts.default')

@section('content')
    <div class="mx-2 mt-3">
        <h1 class="text-2xl font-bold underline text-center mb-5">
            Kamus Indonesia-Waropen
        </h1>
        <div class="flex justify-center">
            <div>Indonesia</div>
            <div class="mx-2" id="tukar">
                <i data-feather="repeat"></i>
            </div>
            <div>Inggris</div>
        </div>
        <div>
            <input type="text" id="bahasa" class="border-gray-300">
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ mix('js/user.js') }}"></script>
@endsection
