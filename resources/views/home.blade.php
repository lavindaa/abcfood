@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 mb-5">
            <img src="{{url ('images\logo.jpeg') }}" width="400" class="rounded mx-auto d-block" alt="">
        </div>
        @foreach($barangs as $barang)
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{url ('upload') }}/{{($barang->gambar)}}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">{{$barang->nama_barang}}</h5>
                    <p class="card-text">
                        <strong>Harga :</strong> Rp. {{number_format ($barang->harga)}} <br><strong>Stok :</strong> {{$barang->stok}} <br>
                        <hr>
                        <strong>Keterangan :</strong> <br>
                        {{$barang->keterangan}}
                    </p>
                    <a href="{{ url('pesan') }}/{{ $barang->id}}" class="btn btn-primary"><i class="fas fa-shopping-cart"></i> Pesan</a>
                  </div>
            </div>  
        </div>
        @endforeach
    </div>
</div>
@endsection
