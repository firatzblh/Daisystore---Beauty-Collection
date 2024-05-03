@extends('layouts.app')
@section('content')
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-white"" style="background-color: rgb(255, 193, 203);" >
                    <h4 class="card-title">My Profile</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 mb-3 mb-md-0">
                            <div class="text-center">
                                <img src="{{ Vite::asset('resources/images/profile.jpg') }}" class="rounded img-fluid" alt="Profile Picture"  style="width: 200px; height: 250px; object-fit: cover;">
                                <h5 class="mt-3">FIRA</h5>
                                <p class="text-muted">Mahasiswa Sistem Informasi 22'</p>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">About Me</h5>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">Name: <br><i class="bi bi-person"></i> Shafira Daffa Tzabillah</li>
                                        <li class="list-group-item">NIM: <br><i class="bi bi-card-text"></i> 1204220130</li>
                                        <li class="list-group-item">Email: <br><i class="bi bi-envelope"></i> firatzblh.03@gmail.com</li>
                                        <li class="list-group-item">Domisili: <br><i class="bi bi-geo-alt"></i> Surabaya</li>
                                        <li class="list-group-item">Institut: <br><i class="bi bi-building"></i> University Telkom Surabaya</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
