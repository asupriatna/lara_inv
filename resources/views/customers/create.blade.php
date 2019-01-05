@extends('layouts.backend')
@section('content')

    <div class="form-element-area"> 
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        <div class="container">
            <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-element-list mg-t-30">
                            <div class="cmp-tb-hd">
                                <h2>Tambah Data Pelanggan</h2>
                                <p></p>
                            </div>

                            <form action="{{ url('/customer') }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="form-group ic-cmp-int float-lb floating-lb">
                                            <div class="form-ic-cmp">
                                                <i class="notika-icon notika-support"></i>
                                            </div>
                                            <div class="nk-int-st">
                                                <input type="text" name="name" class="form-control {{ $errors->has('name') ? 'is-invalid':'' }}">
                                                <label class="nk-label">Nama Lengkap
                                                    <i class="text-danger">{{ $errors->first('name') }}</i>
                                                </label>    
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="form-group ic-cmp-int float-lb floating-lb">
                                            <div class="form-ic-cmp">
                                                <i class="notika-icon notika-mail"></i>
                                            </div>
                                            <div class="nk-int-st">
                                                <input type="text" name="email" class="form-control {{ $errors->has('email') ? 'is-invalid':'' }}">
                                                <label class="nk-label">Email
                                                    <i class="text-danger">{{ $errors->first('email') }}</i>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="form-group ic-cmp-int float-lb floating-lb">
                                            <div class="form-ic-cmp">
                                                <i class="notika-icon notika-phone"></i>
                                            </div>
                                            <div class="nk-int-st">
                                                <input type="text" name="phone" class="form-control {{ $errors->has('phone') ? 'is-invalid':'' }}">
                                                <label class="nk-label">Telepon
                                                    <i class="text-danger">{{ $errors->first('phone') }}</i> 
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">                                
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="form-group ic-cmp-int form-elet-mg">
                                            <div class="form-ic-cmp">
                                                <i class="notika-icon notika-house"></i>
                                            </div>
                                            <div class="nk-int-st">
                                                <label class="nk-label">Alamat
                                                <i class="text-danger">{{ $errors->first('address') }}</i>   
                                                </label>                                                
                                                <textarea name="address" cols="5" rows="5" class="form-control {{ $errors->has('address') ? 'is-invalid':'' }}"></textarea>
                                            </div>
                                            
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="form-group ic-cmp-int form-elet-mg">
                                            <div class="form-ic-cmp">
                                                <i class="notika-icon notika-edit"></i>
                                            </div>
                                            <div class="nk-int-st">
                                                <label class="nk-label">Layer</label>
                                                <input type="text" class="form-control">
                                                
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="row">                                
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <div class="form-group ic-cmp-int float-lb form-elet-mg">
                                                    <button class="btn btn-success notika-btn-success waves-effect">Simpan</button>
                                            </div>
                                        </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

        </div>
    </div>    
@endsection