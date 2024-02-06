@extends('base')
@section('cart')
@section('title', 'Dashboard')
<div class="panel-header bg-primary-gradient">
    <div class="page-inner py-5">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
            <div>
                <h2 class="text-white pb-2 fw-bold">Cart Produk</h2>
                <h5 class="text-white op-7 mb-2">Produk</h5>
            </div>
            <div class="ml-md-auto py-2 py-md-0">
                {{-- <a href="#" class="btn btn-white btn-border btn-round mr-2">Manage</a> --}}
                <a href="{{route('admin.home')}}" class="btn btn-secondary btn-round">Produk</a>
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
                @if (empty($cart) || count($cart) == 0)
                Tidak ada Produk di cart
            </div>


            @else
            <table class="table mt-3">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Diskon (%)</th>
                        <th scope="col">Diskon</th>
                        <th scope="col">Harga Setelah Diskon</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php $grandTotal = 0; ?>

                    @foreach ($cart as $ct => $val )
                        <?php
                            $harga = $val['price']; // Harga barang
                            $jumlah = $val['jumlah']; // Jumlah barang
                            $discount = isset($val['discount']) && is_numeric($val['discount']) ? $val['discount'] / 100 : 0; // Ubah diskon menjadi desimal (misalnya, 0.04 untuk 4%)
                            $diskon = $discount * $harga * $jumlah; // Jumlah diskon
                            $subtotal = ($harga * $jumlah) - $diskon; // Subtotal setelah diskon

                            // Menambahkan subtotal setelah diskon ke grand total
                            $grandTotal += $subtotal;
                        ?>

                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$val['product_name']}}</td>
                            <td>{{$harga}}</td>
                            <td>{{$val['discount']}} %</td>
                            <td>{{$diskon}}</td> <!-- Menampilkan jumlah diskon -->
                            <td>{{$subtotal}}</td><!-- Menampilkan subtotal setelah diskon -->
                            <td><a href="{{url('/cart/hapus/'.$ct)}}" class="btn btn-primary">Batal</a></td><!-- Menampilkan subtotal setelah diskon -->
                        </tr>
                    @endforeach

                    <tr>
                        <th colspan="5">Grand total</th>
                        <th>{{$grandTotal}}</th>
                    </tr>

                    <tr>
                        <div class="card-action">
                            <td colspan="6"><button class="btn btn-primary">Checkout</button></td>
                        </div>

                    </tr>
                </tbody>

            </table>

            @endif



        </div>
    </div>
</div>



    {{-- <div class="row">

    </div> --}}
@endsection


