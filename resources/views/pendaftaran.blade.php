@extends('layouts.main')

@section('container')

<section>    
    <link rel="stylesheet" href="assets/css/styles1.css">
    <style>
      html, body {
      min-height: 100%;
      }
      body, form, input, select { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: 'Roboto', sans-serif;
      font-weight: normal;
      color: #eee;
      }
      body {
      background: url("/uploads/media/default/0001/01/b5edc1bad4dc8c20291c8394527cb2c5b43ee13c.jpeg") no-repeat center;
      background-size: device-width;
      }
      h1, h2 {
      text-transform: uppercase;
      font-weight: 400;
      }
      h2 {
      margin: 0 0 0 8px;
      }
      .main-block {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      height: 120%;
      padding: 30px;
      background: rgba(0, 0, 0, 0.5); 
      }
      .left-part, form {
      padding: 7px;
      }
      .left-part {
      text-align: center;
      }
      .fa-graduation-cap {
      font-size: 0px;
      }
      form {
      background: rgba(0, 0, 0, 0.7); 
      }
      .title {
      display: flex;
      align-items: center;
      margin-bottom: 20px;
      }
      .info {
      display: flex;
      flex-direction: column;
      }
      input, select {
      padding: 5px;
      margin-bottom: 30px;
      background: transparent;
      border: none;
      border-bottom: 1px solid #eee;
      }
      input::placeholder {
      color: #eee;
      }
      option:focus {
      border: none;
      }
      option {
      background: black; 
      border: none;
      }
      .checkbox input {
      margin: 0 10px 0 0;
      vertical-align: middle;
      }
      .checkbox a {
      color: #26a9e0;
      }
      .checkbox a:hover {
      color: #85d6de;
      }
      .btn-item, button {
      padding: 10px 5px;
      margin-top: 20px;
      border-radius: 5px; 
      border: none;
      background: #26a9e0; 
      text-decoration: none;
      font-size: 15px;
      font-weight: 400;
      color: #fff;
      }
      .btn-item {
      display: inline-block;
      margin: 20px 5px 0;
      }
      button {
      width: 100%;
      }
      button:hover, .btn-item:hover {
      background: #85d6de;
      }
      @media (min-width: 568px) {
      html, body {
      height: 100%;
      }
      .main-block {
      flex-direction: row;
      height: calc(100% - 50px);
      }
      .left-part, form {
      flex: 1;
      height: auto;
      }
      }
    </style>
  
  <body>
    <div class="main-block">
      <div class="left-part">
        <i class="fas fa-graduation-cap"></i>
        <h1>PENDAFTARAN TPQ BANYU URIP</h1>
        <h3>
        bagi siswa dan siswi yang ingin mendafatr di TPQ BANYU URIP 
        mengisi yang ada di bawah ini 
        </h3>
      <form action="/">
        <div class="title">
          <i class="fas fa-pencil-alt"></i> 
          <h2>Daftar Disini</h2>
        </div>
        <div class="info">
          <input class="fname" type="text" name="nama" placeholder="Nama Lengkap">
          <select>
            <option value="course-type" selected>Jenis Kelamin*</option>
            <option value="short-courses">Perempuan</option>
            <option value="short-courses">Laki-Laki</option>
          </select>
          <input type=date  name="tanggal lahir" placeholder="tanggal lahir">
          <input type="password" name="kota lahir" placeholder="kota lahir">
          <input type="password" name="nama ortu" placeholder="Nama Ortu">
          <input type="password" name="alamat ortu" placeholder="Alamat Ortu">
          <input type="password" name="Nomor HP" placeholder="Nomor Telepon">

        </div>
        <div class="checkbox">
          <input type="checkbox" name="checkbox"><span>I agree to the <a href="https://www.w3docs.com/privacy-policy">Privacy Policy for TPQ Banyu Urip.</a></span>
        </div>
        <button type="submit" href="/">Submit</button>
      </form>
    </div>
  </body>
</section>
  @endsection