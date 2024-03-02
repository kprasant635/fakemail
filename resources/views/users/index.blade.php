{{-- @extends('layouts.app')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Users Management</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('users.create') }}"> Create New User</a>
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
   <th>Email</th>
   <th>Roles</th>
   <th width="280px">Action</th>
 </tr>
 @foreach ($data as $key => $user)
  <tr>
    <td>{{ ++$i }}</td>
    <td>{{ $user->name }}</td>
    <td>{{ $user->email }}</td>
    <td>
      @if(!empty($user->getRoleNames()))
        @foreach($user->getRoleNames() as $v)
           <label class="badge badge-success">{{ $v }}</label>
        @endforeach
      @endif
    </td>
    <td>
       <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Show</a>
       <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>
        {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
    </td>
  </tr>
 @endforeach
</table>


{!! $data->render() !!}


<p class="text-center text-primary"><small>Tutorial by ItSolutionStuff.com</small></p>
@endsection --}}


@extends('layouts.apps')
@section('content')
    <main id="js-page-content" role="main" class="page-content">
        <ol class="breadcrumb page-breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0);">Esi</a></li>
            <li class="breadcrumb-item active">Role Permission </li>
            <!-- <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date">Tuesday, July 20, 2021</span></li> -->
        </ol>
        <div class="row">
            <div class="col-xl-12">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2><span class="fw-300"><i>User</i> Management</span>  </h2>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="card-actions float-end" style="float: right; margin-bottom:5px;">
                                @can('user-create')
                                    <a class="btn btn-primary btn-sm" href="{{ route('users.create') }}"> <i
                                            class="fal fa-plus"></i>
                                        Create New User</a>
                                @endcan
                            </div>
                            <div>&nbsp;</div>
                            <div class="table-responsive">
                                <table class="text-fade table table-bordered display no-footer datatable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            {{-- <th>Username</th> --}}
                                            <th>Email</th>
                                            
                                            <th>Roles</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $key => $user)
                                            <tr>
                                                <td>{{ ++$key }}</td>
                                                <td>{{ $user->name }}</td>
                                                {{-- <td>{{ $user->user_name }}</td> --}}
                                                <td>{{ $user->email }}</td>
                                                
                                                <td>
                                                    @if (!empty($user->getRoleNames()))
                                                        @foreach ($user->getRoleNames() as $v)
                                                            <label>{{ $v }}</label>
                                                        @endforeach
                                                    @endif
                                                </td>
                                                <td>
                                                    @can('user-list')
                                                        <a class="waves-effect waves-light btn btn-sm btn-success"
                                                            href="{{ route('users.show', $user->id) }}"><i
                                                                class="fal fa-eye"></i></a>
                                                    @endcan

                                                    @can('user-edit')
                                                        <a class="waves-effect waves-light btn btn-sm btn-info"
                                                            href="{{ route('users.edit', $user->id) }}"><i
                                                                class="fal fa-edit"></i></a>
                                                    @endcan
                                                    @can('user-delete')
                                                        {!! Form::open(['method' => 'DELETE', 'route' => ['users.destroy', $user->id], 'style' => 'display:inline']) !!}
                                                        {!! Form::button('<i class="fal fa-trash"></i>', [
                                                            'type' => 'submit',
                                                            'class' => 'waves-effect waves-light btn btn-sm btn-danger',
                                                            'id' => 'deleteThis',
                                                        ]) !!}
                                                        {!! Form::close() !!}
                                                    @endcan
                                                    {{-- @can('user-edit')
                                                <a class="waves-effect waves-light btn btn-sm btn-info" href="{{ route('users.password', $user->id) }}"><i class="fal fa-edit"></i></a>
                                                @endcan --}}
                                                    <a href="javascript:void(0);" id="editCompany"
                                                        class="waves-effect waves-light btn btn-sm btn-primary"
                                                        data-toggle="modal"
                                                        data-target="#exampleModalCenter{{ $user->id }}"
                                                        data_id="{{ $user->id }}" title="Edit Unit"><i
                                                            class="fal fa-key"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            @foreach ($data as $key => $user)
                                <div class="modal fade" id="exampleModalCenter{{ $user->id }}" tabindex="-1"
                                    role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Change Password</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            {{-- {!! Form::model($user, ['method' => 'POST', 'route' => ['users.update', $user->id]]) !!}
                                        {{ method_field('PUT') }} --}}
                                            <form action="{{ url('password/') }}" method="post" class="needs-validation"
                                                id="" role="form">

                                                @csrf
                                                <input type="hidden" id="hid" name="hid"
                                                    value="{{ $user->id }}">
                                                <div class="row d-flex justify-content-center">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="form-label">Password:</label>
                                                            <input id="new-password" type="password"
                                                                class="form-control chk_blank chk_alpha" name="password"
                                                                placeholder="********" required>
                                                            {{-- {!! Form::password('password', [
                                                        'name' => 'passwod',
                                                        'placeholder' => 'Password',
                                                        'class' => 'form-control',
                                                        'required' => 'required',
                                                    ]) !!} --}}
                                                            @if ($errors->has('password'))
                                                                <span
                                                                    class="text-danger">{{ $errors->first('password') }}</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="form-label">Confirm Password:</label>
                                                            <input id="new-password-confirm" type="password"
                                                                class="form-control chk_blank chk_alpha"
                                                                name="password_confirm" placeholder="Confirm Password"
                                                                required>
                                                            {{-- {!! Form::password('confirm-password', [
                                                        'name' => 'password_confirmation,
                                                        'placeholder' => 'Confirm Password',
                                                        'class' => 'form-control',
                                                        'required' => 'required',
                                                    ]) !!} --}}
                                                            @if ($errors->has('password'))
                                                                <span
                                                                    class="text-danger">{{ $errors->first('password') }}</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-4">
                                                    <div class="col-md-12 text-center" style="padding-top:10px;">
                                                        <a class="btn btn-primary" style="margin-right: 5px;"
                                                            href="{{ route('users.index') }}"> Back</a><button
                                                            type="submit" class="btn btn-primary">Change Password </button>
                                                    </div>
                                                </div>
                                            </form>
                                            {{-- {!! Form::close() !!} --}}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection


@section('js')
    <script>
        $("body").on("click", "#editCompany ", function() {
            e.preventDefault();
            var id = $(this).attr("data_id");
            $.ajax({
                type: 'GET',
                url: "{{ url('users') }}",
                data: {
                    "_token": "{{ csrf_token() }}",
                    "id": id
                },
                dataType: 'json',
                success: function(data) {
                    $('#exampleModaledit').modal('show');
                    // $('#company_id').val(data.html.id);
                    // $('#ecompany_name').val(data.html.company_name);
                    // $('#email').val(data.html.email);
                    // $('#phone').val(data.html.phone);
                    // $('#fax').val(data.html.fax);
                    // $('#address').val(data.html.address);
                    // $('#username').val(data.html.username);
                    $('#password').val('12345678');
                }
            });
        });
        @if (count($errors->compPswrd) > 0)
            <
            script >
                $(document).ready(function() {
                    $('#exampleModalCenter').modal('show');
                });
    </script>
    @endif
@endsection
