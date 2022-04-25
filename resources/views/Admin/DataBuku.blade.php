@extends('layouts.app')
@section('Main')
<div class="container-fluid px-4">
    <h1 class="mt-4">Data Buku</h1>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Data Buku
        </div>
        <div class="card-body">
            <div class="MenuTambahan">
                <form action="" id="search">
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit" ><i class="fa fa-search"></i></button>
                </form>
                <button type="button" class="btn-sm btn-success BtnAdd"><i class="bi-plus"></i>Tambah Buku</button>
            </div>
            
            <table class="table table-bordered table-sm text-center ">
                <thead>
                    <tr class="align-middle">
                        <th>Tanggal Masuk Pepus</th>
                        <th>No Urut Buku</th>
                        <th>NO Induk Buku</th>
                        <th>Pengarang</th>
                        <th>Judul Buku</th>
                        <th>Penerbit</th>
                        <th>Tahun Terbit</th>
                        <th>Harga</th>
                        <th>Sumber Perolehan</th>
                        <th>Golongan/Kode</th>
                        <th>Eksemplar</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>30/05/2018</td>
                        <td>014</td>
                        <td>066-070</td>
                        <td>Rahmat Abdullah M.Pd</td>
                        <td>Benarkah Matahari Mengelilingi Bumi</td>
                        <td> Emir Cakrawala Islam</td>
                        <td>2015</td>
                        <td>650,000</td>
                        <td>pembelian bos pusat</td>
                        <td>297,05</td>
                        <td>5</td>
                        <td>tanpa keterangan</td>
                    </tr>
                    <tr>
                        <td>30/05/2018</td>
                        <td>014</td>
                        <td>066-070</td>
                        <td>Rahmat Abdullah M.Pd</td>
                        <td>Benarkah Matahari Mengelilingi Bumi</td>
                        <td> Emir Cakrawala Islam</td>
                        <td>2015</td>
                        <td>650,000</td>
                        <td>pembelian bos pusat</td>
                        <td>297,05</td>
                        <td>5</td>
                        <td>tanpa keterangan</td>
                    </tr>
                    <tr>
                        <td>30/05/2018</td>
                        <td>014</td>
                        <td>066-070</td>
                        <td>Rahmat Abdullah M.Pd</td>
                        <td>Benarkah Matahari Mengelilingi Bumi</td>
                        <td> Emir Cakrawala Islam</td>
                        <td>2015</td>
                        <td>650,000</td>
                        <td>pembelian bos pusat</td>
                        <td>297,05</td>
                        <td>5</td>
                        <td>tanpa keterangan</td>
                    </tr>
                    <tr>
                        <td>30/05/2018</td>
                        <td>014</td>
                        <td>066-070</td>
                        <td>Rahmat Abdullah M.Pd</td>
                        <td>Benarkah Matahari Mengelilingi Bumi</td>
                        <td> Emir Cakrawala Islam</td>
                        <td>2015</td>
                        <td>650,000</td>
                        <td>pembelian bos pusat</td>
                        <td>297,05</td>
                        <td>5</td>
                        <td>tanpa keterangan</td>
                    </tr>
                    <tr>
                        <td>30/05/2018</td>
                        <td>014</td>
                        <td>066-070</td>
                        <td>Rahmat Abdullah M.Pd</td>
                        <td>Benarkah Matahari Mengelilingi Bumi</td>
                        <td> Emir Cakrawala Islam</td>
                        <td>2015</td>
                        <td>650,000</td>
                        <td>pembelian bos pusat</td>
                        <td>297,05</td>
                        <td>5</td>
                        <td>tanpa keterangan</td>
                    </tr>
                    <tr>
                        <td>30/05/2018</td>
                        <td>014</td>
                        <td>066-070</td>
                        <td>Rahmat Abdullah M.Pd</td>
                        <td>Benarkah Matahari Mengelilingi Bumi</td>
                        <td> Emir Cakrawala Islam</td>
                        <td>2015</td>
                        <td>650,000</td>
                        <td>pembelian bos pusat</td>
                        <td>297,05</td>
                        <td>5</td>
                        <td>tanpa keterangan</td>
                    </tr>
                    <tr>
                        <td>30/05/2018</td>
                        <td>014</td>
                        <td>066-070</td>
                        <td>Rahmat Abdullah M.Pd</td>
                        <td>Benarkah Matahari Mengelilingi Bumi</td>
                        <td> Emir Cakrawala Islam</td>
                        <td>2015</td>
                        <td>650,000</td>
                        <td>pembelian bos pusat</td>
                        <td>297,05</td>
                        <td>5</td>
                        <td>tanpa keterangan</td>
                    </tr>
                    <tr>
                        <td>30/05/2018</td>
                        <td>014</td>
                        <td>066-070</td>
                        <td>Rahmat Abdullah M.Pd</td>
                        <td>Benarkah Matahari Mengelilingi Bumi</td>
                        <td> Emir Cakrawala Islam</td>
                        <td>2015</td>
                        <td>650,000</td>
                        <td>pembelian bos pusat</td>
                        <td>297,05</td>
                        <td>5</td>
                        <td>tanpa keterangan</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
                