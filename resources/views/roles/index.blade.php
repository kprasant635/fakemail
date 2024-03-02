{{-- @extends('layouts.app')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Role Management</h2>
        </div>
        <div class="pull-right">
        @can('role-create')
            <a class="btn btn-success" href="{{ route('roles.create') }}"> Create New Role</a>
            @endcan
        </div>
    </div>
</div>


@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif


<table class="table table-bordered">
  <tr>
     <th>No</th>
     <th>Name</th>
     <th width="280px">Action</th>
  </tr>
    @foreach ($roles as $key => $role)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $role->name }}</td>
        <td>
            <a class="btn btn-info" href="{{ route('roles.show',$role->id) }}">Show</a>
            @can('role-edit')
                <a class="btn btn-primary" href="{{ route('roles.edit',$role->id) }}">Edit</a>
            @endcan
            @can('role-delete')
                {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
            @endcan
        </td>
    </tr>
    @endforeach
</table>


{!! $roles->render() !!}


<p class="text-center text-primary"><small>Tutorial by ItSolutionStuff.com</small></p>
@endsection --}}


@extends('layouts.apps')
@section('content')
<main id="js-page-content" role="main" class="page-content">
    <ol class="breadcrumb page-breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0);">admin</a></li>
        <li class="breadcrumb-item active">Manage Users</li>
        <!-- <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date">Tuesday, July 20, 2021</span></li> -->
    </ol>
    <div class="row">
        <div class="col-xl-12">

            @if (session()->has('message'))
                <div class="alert border-success bg-transparent text-success message" role="alert">
                    <!-- <div class="alert alert-success"> -->
                    <pre>
       {{ session()->get('message') }}
       </pre>
                </div>
            @endif

            <div id="panel-1" class="panel">
                <div class="panel-hdr">
                    <h2><i class="fal fa-user-plus"></i>Role <span class="fw-300"><i>List</i></span></h2>
                </div>
                <div class="panel-container show">
                    <div class="panel-content">
                        <!-- <div class="panel-tag">
                        Be sure to use an appropriate type attribute on all inputs (e.g., code <code>email</code> for email address or <code>number</code> for numerical information) to take advantage of newer input controls like email verification, number selection, and more.
                    </div> -->


                        <div class="row">
                            <div class="col-xl-12">
                                <div id="panel-2" class="pane2">
                                    <div class="panel-hdr">
                                        <h2>
                                            Role List
                                        </h2>


                                        <a class="btn btn-success waves-effect waves-themed" href="{{ route('roles.create') }}">ADD ROLE</a>
                                    </div>
                                    <div class="panel-container show">
                                        <div class="panel-content">
                                            <!-- <div class="panel-tag">
                        This example shows DataTables and the Responsive extension being used with the Bootstrap framework providing the styling. The DataTables / Bootstrap integration provides seamless integration for DataTables to be used in a Bootstrap page. <strong>Note</strong> that the <code>.dt-responsive</code> class is used to indicate to the extension that it should be enabled on this page, as responsive has special meaning in Bootstrap. The responsive option could also be used if required
                    </div> -->
                                            <table id="dt-basic-example-user"
                                                class="table table-bordered table-hover table-striped w-100">
                                                <thead>
                                                    <tr>
                                                        <th>Sl No.</th>
                                                        <th>Role Title</th>
                                                        {{-- <th>Role ID</th>
                                                        <th>Status</th> --}}
                                                        <th>Admin Controls</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($roles as $key => $item)
                                                    <tr>
                                                        <td>{{$key+1}}</td>
                                                        <td>{{$item->name}}</td>

                                                        {{-- <td>
                                                            @if ($item->active == 1)
                                                            <span class="badge badge-success badge-pill">Active</span>
                                                            @else
                                                            <span class="badge badge-danger badge-pill">Inactive</span>
                                                            @endif
                                                        </td> --}}
                                                        <td>
                                                            <div class="d-flex demo">
                                                                <a href="javascript:void(0);" id="deleteRole"
                                                                    data-id="{{ $item->id }}"
                                                                    class="btn btn-sm btn-outline-danger btn-icon btn-inline-block mr-1"
                                                                    title="Delete Record"><i
                                                                        class="fal fa-times"></i></a>
                                                                <a href="{{ route('roles.edit',[$item->id]) }}"
                                                                    class="btn btn-sm btn-outline-primary btn-icon btn-inline-block mr-1 edit"
                                                                     title="Edit"><i
                                                                        class="fal fa-edit"></i></a>
                                                                {{-- <div class="dropdown d-inline-block"> <a
                                                                        href="javascript:void(0);"
                                                                        class="btn btn-sm btn-outline-primary btn-icon"
                                                                        data-toggle="dropdown" aria-expanded="true"
                                                                        title="More options"><i
                                                                            class="fal fa-plus"></i></a>

                                                                    <div class="dropdown-menu"> <a
                                                                            class="dropdown-item"
                                                                            href="{{ route('role_create') }}"
                                                                            data-id="{{ $item->id }}">Assign Permission</a>
                                                                    </div>

                                                                </div> --}}
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Edit Role</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ url('updateRole') }}" method="post" class="comm_frm">
                    <div class="modal-body">

                        @csrf
                        {{-- error --}}
                        @if (\Session::has('error'))
                            <div id="error" class="text-danger">
                                {!! \Session::get('error') !!}
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Role Title:</label>
                                    <input type="text" id="role_titles" onkeypress="return /[a-z A-Z]/i.test(event.key)" class="form-control" name="erole_title"
                                        placeholder="Role title" required="required">
                                    <input type="hidden" id="user_id" name="user_id" value="">
                                    @if ($errors->has('erole_title'))
                                        <span class="text-danger">{{ $errors->first('erole_title') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Status:</label>
                                    <select name="erole_status" id="role_status" class="form-control" required="required">
                                        <option value="">Please select status</option>
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                    @if ($errors->has('erole_status'))
                                        <span class="text-danger">{{ $errors->first('erole_status') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Edit Role</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>




@endsection
