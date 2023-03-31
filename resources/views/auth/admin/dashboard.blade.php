@extends('layouts.sidebar')
@section('title','Dashboard')

@section('content')
    <div class="home-container">
        <div class="text">Dashboard Peta</div>

        <!-- Trigger/Open The Modal -->
        <button id="myBtn">Tambah Data</button>

        <!-- The Modal -->
        <div id="myModal" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
                <span class="close">&times;</span>
                <p >Tambahkan penanda pada Peta</p>

                <form  action="{{ route('dashboardAdmin') }}" method="post">
                    @csrf
                    <table  >
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td><input type="text" name="nama" id="nama" required></td>
                        </tr>
                        <tr>
                            <td>Latitude</td>
                            <td>:</td>
                            <td><input type="text" name="latitude" required></td>
                        </tr>
                        <tr>
                            <td>Longitude</td>
                            <td>:</td>
                            <td><input type="text" name="longitude" required></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td></td>
                            <td><input type="submit" value="Tambah"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>

        <!--menampilkan marker yang sudah-->
        <div style="overflow-x:auto;" class="box-container">
            <table id="customers">
                <tr>
                    <th>Nama</th>
                    <th>Latitude</th>
                    <th>Longitude</th>
                    <th>Dibuat pada</th>
                    <th>Diperbarui pada</th>
                    <th>Aksi</th>
                </tr>
                @foreach ($data as $item)
                    <tr>
                        <td>{{$item->nama}}</td>
                        <td>{{$item->latitude}}</td>
                        <td>{{$item->longitude}}</td>
                        <td>{{$item->created_at}}</td>
                        <td>{{$item->updated_at}}</td>
                        <td>
                            <form action="{{ route('geospasial.destroy', $item->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" 
                                    type="submit" 
                                    onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')"
                                    style="background:none; border:none; cursor: pointer;"
                                >
                                    <i class='bx bx-trash bx-md' ></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    
    

@endsection