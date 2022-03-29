<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <!DOCTYPE html>
    <html>
    <head>
        <title>Laravel 8 Form Example Tutorial</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
    <body>
      <div class="container mt-4">
      @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
      @endif
      <div class="card">
        <div class="card-header text-center font-weight-bold">
          Tambahkan riwayat
        </div>
        <div class="card-body">
          <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('store-form')}}">
           @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">Nama Pasien</label>
              <select name="Nama Pasien" id="Nama-pasiens">
                @foreach ($Pasiens as $item)
                <option value="{{ $item->nama }}">{{ $item->nama }}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Nama Dokter</label>
                <select name="nama Dokter" id="Nama-dokter">
                    @foreach ($Dokters as $item)
                    <option value="{{ $item->nama }}">{{ $item->nama }}</option>
                    @endforeach
                </select>
              </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Kondisi Kesehatan</label>
              <textarea name="kondisiKesehatan" class="form-control" required=""></textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Suhu Tubuh</label>
                <input type="text" id="idPasien" name="idPasien" class="form-control" required="">
              </div>
              <div class="form-group">
                <label for="gambar">upload gambarmu!</label>
                <input class="form-control-file" type="file"  name="gambar">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>  
    </body>
    </html>
</x-app-layout>
