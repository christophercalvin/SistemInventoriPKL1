@extends('items.home')
@section('content')
<br>
<br>
<br>
<br>
<br>
<br>

<div class="row">
    <div class="col-md-12">
        <div class="col-md-12">
            <div class="col-md-12">
                 <h4>{{ $title }}</h4>
                <div class="box box-warning">
                    <div class="box-header">
                    <p>
                        <a href="{{url('produk/detail/'.$data->id)}}" class="btn btn-sm btn-flat btn-warning btn-refresh"><i class="fa fa-refresh"></i> Refresh</a>
                        <a href="{{url('produk/')}}" class="btn btn-sm btn-flat btn-primary btn-backward"><i class="fa fa-backward"></i> Kembali</a>
                    </p>
                 </div>
                <div class="box-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tbody>
                                 <tr>
                                    <th>Barcode</th>
                                    <td>:</td>
                                    <td>{!! \DNS1D::getBarcodeHTML($data->kode, "I25+")!!}</td>

                                    <th></th>
                                    <td></td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <th>Supplier</th>
                                    <td>:</td>
                                    <td>{{$data->supplier_r->nama}}</td>

                                    <th>Nama Produk</th>
                                    <td>:</td>
                                    <td>{{$data->nama}}</td>
                                </tr>

                                <tr>
                                    <th>Stock Saat Ini</th>
                                    <td>:</td>
                                    <td>{{$data->stock}}</td>

                                    <th>Stock Minimal</th>
                                    <td>:</td>
                                    <td>{{$data->minimal_stock}}</td>
                                </tr>

                                <tr>
                                    <th>Kode Produk</th>
                                    <td>:</td>
                                    <td>{{$data->kode}}</td>

                                    <th>Harga</th>
                                    <td>:</td>
                                    <td>Rp. {{$data->harga}}</td>
                                </tr>

                                <tr>
                                    <th>Dibuat Tanggal</th>
                                    <td>:</td>
                                    <td>{{$data->created_at}}</td>

                                    <th>Perubahan terakhir</th>
                                    <td>:</td>
                                    <td>{{$data->updated_at}}</td>
                                </tr>
                            </tbody>
                        </table>

                    </div>

                </div>
            </div>
         </div>
        </div>
    </div>
</div>
@endsection
 
@section('scripts')
 
<script type="text/javascript">
    $(document).ready(function(){
 
        // btn refresh
        $('.btn-refresh').click(function(e){
            e.preventDefault();
            $('.preloader').fadeIn();
            location.reload();
        })
 
    })
</script>
 
@endsection