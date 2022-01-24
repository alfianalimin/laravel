@extends('layouts.master')
@section('title', 'Laravel')
@section('content')
    <div class="content">
        <div class="">
            <a href="{{ Route('cr.t') }}" class=" fa fa-plus btn btn-info pull-right"> Tambah</a>
        </div>
    </div>
    </div>

    <div class="panel-body panel-body-table ">
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-actions">
                <thead>
                    <tr>
                        <th width="50">No</th>
                        <th>Nama</th>
                        <th width="100">Nim</th>
                        <th width="100">Alamat</th>
                        <th width="100">Actions</th>
                    </tr>


                </thead>
                <tbody>
                    @foreach ($user as $no => $usr)
                        <tr>

                            <td>{{ $user->firstitem() + $no }}</td>
                            <td>{{ $usr->nama }}</td>
                            <td>{{ $usr->nim }}</td>
                            <td>{{ $usr->alamat }}</td>

                            <td>
                                <button class="btn btn-default btn-rounded btn-sm"><span
                                        class="fa fa-pencil"></span></button>
                                <button class="btn btn-danger btn-rounded btn-sm" onclick="notyConfirm();"><span
                                        class="fa fa-times"></span></button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $user->links() }}
        </div>


    </div>

    </div>



@endsection
@push('page-script')

    <script type='text/javascript' src="{{ asset('js/plugins/noty/jquery.noty.js') }}""></script>
    <script type='text/javascript' src="{{ asset('js/plugins/noty/themes/default.js') }}"></script>
    <script type="text/javascript">
        function notyConfirm() {
            noty({
                text: 'Do you want to continue?',
                layout: 'topRight',
                buttons: [{
                        addClass: 'btn btn-success btn-clean',
                        text: 'Ok',
                        onClick: function($noty) {
                            $noty.close();
                            noty({
                                text: 'You clicked "Ok" button',
                                layout: 'topRight',
                                type: 'success'
                            });
                        }
                    },
                    {
                        addClass: 'btn btn-danger btn-clean',
                        text: 'Cancel',
                        onClick: function($noty) {
                            $noty.close();
                            noty({
                                text: 'You clicked "Cancel" button',
                                layout: 'topRight',
                                type: 'error'
                            });
                        }
                    }
                ]
            })
        }
    </script>
@endpush
