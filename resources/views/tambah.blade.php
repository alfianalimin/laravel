@extends('layouts.master')
@section('title', 'Laravel')
@section('content')
    <div class="page-content-wrap">

        <div class="row">
            <div class="col-md-12">

                <form  action="{{ route('cr.s') }}" method="POST" class="form-horizontal">
                    @csrf
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><strong>One Column</strong> Layout</h3>
                            <ul class="panel-controls">
                                <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                            </ul>
                        </div>


                        <div class="panel-body">


                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label">Nama</label>
                                <div class="col-md-6 col-xs-12">
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                        <input type="text" name="nama" class="form-control" />
                                    </div>
                                    <span class="help-block">This is sample of text field</span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label">NIM</label>
                                <div class="col-md-6 col-xs-12">
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                        <input type="text" name="nim" class="form-control" />
                                    </div>
                                    <span class="help-block">Password field sample</span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label">Alamat</label>
                                <div class="col-md-6 col-xs-12">
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                        <input type="text" name="alamat" class="form-control" />
                                    </div>
                                    <span class="help-block">Password field sample</span>
                                </div>
                            </div>

                        </div>
                        <div class="panel-footer">
                            <button class="btn btn-default" type="reset">Clear Form</button>
                            <button class="btn btn-primary pull-right" type="submit">Submit</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>

    </div>

@endsection
@push('page-script')

@endpush
