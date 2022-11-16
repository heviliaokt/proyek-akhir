@extends('layouts.main')

@section('first-content')
    <br>
    <button type="button" class="btn btn-success" href="{{ route('person.create') }}">Tambah Transaksi</button><br>
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Kode Barang</th>
            <th scope="col">Nama Barang</th>
            <th scope="col">Harga</th>
            <th scope="col">Stok</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>B001</td>
            <td>Buku</td>
            <td>2000</td>
            <td>100</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>B002</td>
            <td>Pulpen</td>
            <td>1500</td>
            <td>100</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>B003</td>
            <td>Pensil</td>
            <td>1000</td>
            <td>100</td>
        </tr>
        <tr>
            <th scope="row">4</th>
            <td>B004</td>
            <td>Penghapus</td>
            <td>500</td>
            <td>100</td>
        </tr>
        <tr>
            <th scope="row">5</th>
            <td>B005</td>
            <td>Penggaris</td>
            <td>1300</td>
            <td>100</td>
        </tr>
        </tbody>
    </table>
@endsection