@extends('layouts.admin.default')



@section('styles')

    <link href="{{ asset('adminto/assets/libs/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('adminto/assets/libs/datatables/responsive.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('adminto/assets/libs/datatables/buttons.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('adminto/assets/libs/datatables/select.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<div class="container-fluid mt-3">
    <div class="row">



        <div class="col-xl-4">
            <div class="card-box">
                <div class="dropdown float-right">
                    <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                        <i class="mdi mdi-dots-vertical"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Action</a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                    </div>
                </div>
                <h4 class="header-title mb-3">Créer un compte</h4>
                {!! Form::open(['method' => 'POST', 'route' => ['accounts.update',$account], 'class' => 'form-horizontal']) !!}
                @method('PATCH')
                 @include('admin.account.field')

                <div class="btn-group pull-right">
                {!! Form::reset("Annuler", ['class' => 'btn btn-warning']) !!}
                {!! Form::submit('Modifier', ['class' => 'btn btn-success']) !!}
                </div>
                {!! Form::close() !!}

            </div>
        </div><!-- end col -->
        <div class="col-xl-8">
            <div class="card-box">
                <div class="dropdown float-right">
                    <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                        <i class="mdi mdi-dots-vertical"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Action</a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                    </div>
                </div>

                <h4 class="header-title mt-0 mb-3">Latest Projects</h4>

                <div class="table-responsive">
                    <table id="datatable" class="table   table-hover mb-0">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Nom </th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>{{$account->id}}</td>
                                <td>{{$account->name}}</td>
                                <td>{{$account->email}}</td>
                                <td>{{$account->role->name ?? 'N/A'}}</td>
                                <td><span class="badge badge-{{ $account->active == 1 ? 'success' : 'danger' }}">{{ $account->active == 1 ? 'Actif' : 'Inactif' }}</span></td>
                                <td>
                                    {{$account->created_at}}
                                    {{-- <a href=""> <i class="mdi mdi-account-edit"></i></a>
                                    <a href=""> <i class="mdi mdi-account-edit"></i></a>
                                    <a href=""> <i class="mdi mdi-account-remove"></i></a> --}}
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div><!-- end col -->




    </div>
</div>
<!-- end row -->
@endsection


@section('scripts')
    <script src="{{ asset('adminto/assets/libs/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('adminto/assets/libs/datatables/dataTables.bootstrap4.js') }}"></script>
    <script src="{{ asset('adminto/assets/libs/datatables/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('adminto/assets/libs/datatables/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('adminto/assets/libs/datatables/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('adminto/assets/libs/datatables/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('adminto/assets/libs/datatables/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('adminto/assets/libs/datatables/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('adminto/assets/libs/datatables/buttons.print.min.js') }}"></script>
    <script src="{{ asset('adminto/assets/libs/datatables/dataTables.keyTable.min.js') }}"></script>
    <script src="{{ asset('adminto/assets/libs/datatables/dataTables.select.min.js') }}"></script>
    <script src="{{ asset('adminto/assets/libs/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('adminto/assets/libs/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('adminto/assets/js/pages/datatables.init.js') }}"></script>
@endsection
