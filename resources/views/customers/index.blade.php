@extends('layouts.backend')

@section('content')

<!-- Breadcomb area Start-->
<div class="breadcomb-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="breadcomb-list">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="breadcomb-wp">
									<div class="breadcomb-icon">
										<i class="notika-icon notika-windows"></i>
									</div>
									<div class="breadcomb-ctn">
										<h2>Manajemen Data Pelanggan</h2>
										<p><span class="bread-ntd"></span></p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
								<div class="breadcomb-report">
									<button data-toggle="tooltip" data-placement="left" title="Download Report" class="btn"><i class="notika-icon notika-sent"></i></button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    <!-- Breadcomb area End-->
    
    <!-- Data Table area Start-->
    <div class="data-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list">
                        <div class="basic-tb-hd">
                            <h2>Basic Example</h2>
                            <p>It's just that simple. Turn your simple table into a sophisticated data table and offer your users a nice experience and great features without any effort.</p>
                        </div>
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Nama Lengkap</th>
                                        <th>No Telp</th>
                                        <th>Alamat</th>
                                        <th>Email</th>
                                        <th>Aksi</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($customers as $customer)
                                    <tr>
                                        <td>{{ $customer->name }}</td>
                                        <td>{{ $customer->phone }}</td>
                                        <td>{{ str_limit($customer->address, 50) }}</td>
                                        <td><a href="mailto:{{ $customer->email }}">{{ $customer->email }}</a></td>
                                        <td>
                                            <form action="{{ url('/customer/' . $customer->id) }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="_method" value="DELETE" class="form-control">
                                                <a href="{{ url('/customer/' . $customer->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                                <button class="btn btn-danger btn-sm">Hapus</button>
                                            </form>
                                        </td>
                                        <td>
                                            <form action="{{ route('invoice.save') }}" method="post">
                                                @csrf
                                                <input type="hidden" name="customer_id" value="{{ $customer->id }}" class="form-control">
                                                <button class="btn btn-primary btn-sm">Buat Invoice</button>
                                            </form>
                                        </td>
                                       
                                    </tr>
                                    @empty
                                    <tr>
                                        <td class="text-center" colspan="5">Tidak ada data</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Nama Lengkap</th>
                                        <th>No Telp</th>
                                        <th>Alamat</th>
                                        <th>Email</th>
                                        <th>Aksi</th>
                                        <th></th>
                                        
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- Data Table area End-->
@endsection
