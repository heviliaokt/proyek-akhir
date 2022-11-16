@extends('layouts.main')

@section('first-content')
    {{-- Menampilkan Error Inputan --}}

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                {{-- Menampilkan Pesan --}}
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <br>
            <form action="{{ route('person.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Nama Pembeli</label>
                    <input type="text" name="name" placeholder="Input Nama Pembeli" class="form-control">
                </div>
                <div class="form-group">
                    <label for="code">Kode Barang</label>
                    <input type="text" name="code" class="form-control" placeholder="Input Kode Barang">
                </div>
                <div class="form-group">
                    <label for="code">Jumlah Beli</label>
                    <input type="number" name="jumlah" class="form-control" placeholder="Jumlah Barang Beli">
                </div><br>
                <div class="form-group">
                    <input type="submit" value="Simpan" class="btn btn-success">
                </div>
            </form>
@endsection