@extends('layouts.main')

@section('container')

    <header id="head" class="secondary"></header>

    <!-- container -->
    <div class="container">
        <div class="row">

            <!-- main content -->
            <section class="col-sm-10 maincontent">
                <header class="page-header">
                    <h1 class="page-title">Login</h1>
                </header>
                <h3>Silahkan login untuk mengakses akun kamu</h3>
				<div class="form">
					<p><label for="email">Email</label>
						<input type="email" id="email">
					</p>
					<p><label for="password">Password</label>
						<input type="password" id="password">
					</p>
					<p><a href='/'> <input type="submit" id="submit" value="Submit"> </a></p>
				  </div>
				
				<header class="page-header">
                    <h1 class="page-title">Register</h1>
                </header>
                <h3>Belum punya akun? segera daftar untuk bergabung dengan TPQ Banyu Urip!</h3>
				<div class="form">
					<p><label for="nama">Nama</label>
						<input type="nama" id="nama">
					</p>
					<p><label for="notelp">Nomor Telepon</label>
						<input type="notelp" id="notelp">
					</p>
					<p><label for="email">Email</label>
						<input type="email" id="email">
					</p>
					<p><label for="password">Password</label>
						<input type="password" id="password">
					</p>
						<p><a href='/'> <input type="submit" id="submit" value="Submit"> </a></p>
				  </div>             
            </section>
            <!-- /main -->

        </div>
    </div>
    
@endsection