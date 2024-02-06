@extends('base')
@section('dashboard')
@section('title', 'Dashboard')
<div class="panel-header bg-primary-gradient">
    <div class="page-inner py-5">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
            <div>
                <h2 class="text-white pb-2 fw-bold">List Produk</h2>
                <h5 class="text-white op-7 mb-2">Produk</h5>
            </div>
            <div class="ml-md-auto py-2 py-md-0">
                {{-- <a href="#" class="btn btn-white btn-border btn-round mr-2">Manage</a> --}}
                <a href="{{url('/cart')}}" class="btn btn-secondary btn-round">Keranjang</a>
            </div>
        </div>
    </div>
</div>

<div class="page-inner mt--5">
    <div class="row mt--2">
        <div class="col-md-12">
            <div class="card full-height">
                <div class="card-body">
                    <div class="card-title">List Produk</div>
                </div>
            </div>
        </div>
    </div>
    <div class="card">

        <div class="card-body">
            <div class="card-sub">
                This is the basic table view of the ready dashboard :
            </div>

            <table class="table mt-3">
                <thead>

                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Image</th>
                        <th scope="col">Product</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Discount</th>
                        <th scope="col">Action</th>
                    </tr>
                    <?php $no=1; ?>

                </thead>
                @foreach ($product as $p )
                <tbody>
                    <tr>
                        <td>{{$no++}}</td>
                        <td>
                            <img src="{{ asset($p->foto) }}" alt="Foto" style="max-width: 50px; max-height: 100px;">
                        </td>
                        <td>{{$p->product_name}}</td>
                        <td>Rp.{{$p->price}}</td>
                        <td>{{$p->discount}}%</td>
                        <td><a class="btn btn-primary" href="{{url('/cart/tambah/'.$p->id)}}">Beli</a></td>
                    </tr>
                </tbody>
                @endforeach
            </table>

        </div>
    </div>
</div>



    {{-- <div class="row">

    </div> --}}
@endsection


