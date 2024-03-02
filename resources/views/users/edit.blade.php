{{-- @extends('layouts.apps')


@section('content')

    <main id="js-page-content" role="main" class="page-content">
        <ol class="breadcrumb page-breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0);">Admin</a></li>
            <li class="breadcrumb-item active">Role Permission </li>
            <!-- <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date">Tuesday, July 20, 2021</span></li> -->
        </ol>
        <div class="row">
            <div class="col-xl-12">

                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2><i class="fal fa-user-plus"></i>User <span class="fw-300"><i>Management</i></span></h2>
                    </div>
                    <div class="container">
                        <div class="panel-container show">
                            {!! Form::model($user, ['method' => 'PATCH', 'route' => ['users.update', $user->id]]) !!}
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Name:</strong>
                                        {!! Form::text('name', null, ['placeholder' => 'Name', 'class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Email:</strong>
                                        {!! Form::text('email', null, ['placeholder' => 'Email', 'class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Password:</strong>
                                        {!! Form::password('password', ['placeholder' => 'Password', 'class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Confirm Password:</strong>
                                        {!! Form::password('confirm-password', ['placeholder' => 'Confirm Password', 'class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <select name="role" id="cars" class="form-control" required="required">
                                            <option value="">Please select Role</option>
                                            @foreach ($roles as $role)
                                                <option value="{{ $role->id }}" {{ $role->id == $user->role ? 'selected' : '' }}>{{ $role->name }}</option>
                                            @endforeach
    
                                        </select>
                                        {{-- <strong>Role:</strong>
                                        {!! Form::select('roles[]', $roles, $userRole, ['class' => 'form-control', 'multiple']) !!} --}}
{{-- </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}


</main>
{{-- <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit New User</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
            </div>
        </div>
    </div>
@endsection  --}}

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
                        <h2><span class="fw-300">Edit User</h2>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            @if (count($errors) > 0)
                                <div class="alert alert-danger">

                                    <strong>Whoops!</strong> There were some problems with your input.<br><br>

                                    <ul>

                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach

                                    </ul>

                                </div>
                            @endif


                            {!! Form::model($user, ['method' => 'POST', 'route' => ['users.update', $user->id]]) !!}
                            {{ method_field('PUT') }}
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">First Name:</label>
                                        <input type="text" id="exampleInputUsername" class="form-control"
                                            name="first_name" placeholder="First Name" value="{{ $user->name }}"
                                            required="required">
                                        @if ($errors->has('first_name'))
                                            <span class="text-danger">{{ $errors->first('first_name') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">E-Mail Id:</label>
                                        {!! Form::text('email', null, ['placeholder' => 'Email', 'class' => 'form-control', 'required' => 'required']) !!}
                                        @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Role:</label>
                                        <select name="role" id="cars" class="form-control" required="required">
                                            <option value="">Please select Role</option>
                                            @foreach ($roles as $role)
                                                <option value="{{ $role->id }}"
                                                    {{ $role->id == $role_id->role_id ? 'selected' : '' }}>
                                                    {{ $role->name }}</option>
                                            @endforeach

                                        </select>
                                        @if ($errors->has('role'))
                                            <span class="text-danger">{{ $errors->first('role') }}</span>
                                        @endif
                                    </div>
                                </div>
                                {{-- <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Last Name:</label>
                                    <input type="text" id="exampleInputPassword" class="form-control"
                                        name="last_name" placeholder="Last Name" value="{{$user->last_name}}" required="required">
                                    @if ($errors->has('last_name'))
                                        <span class="text-danger">{{ $errors->first('last_name') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">User Name:</label>
                                    <input type="text" id="exampleInputPassword" class="form-control"
                                        name="user_name" placeholder="User Name" value="{{$user->user_name}}" required="required">
                                    @if ($errors->has('user_name'))
                                        <span class="text-danger">{{ $errors->first('user_name') }}</span>
                                    @endif
                                </div>
                            </div> --}}
                            </div>
                            <div class="row">

                            </div>

                            {{-- <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Password:</label>
                                    {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control', 'required' => 'required')) !!}
                                    @if ($errors->has('password'))
                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Password:</label>
                                    {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control', 'required' => 'required'))!!}
                                    @if ($errors->has('password'))
                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div> --}}
                            <div class="row">
                                <div class="col-md-12 text-center" style="padding-top:10px;">
                                    <a class="btn btn-primary" style="margin-right: 5px;" href="{{ route('users.index') }}">
                                        Back</a><button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>

                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>



@endsection
