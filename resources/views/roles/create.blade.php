{{-- @extends('layouts.app')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Create New Role</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('roles.index') }}"> Back</a>
        </div>
    </div>
</div>


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


{!! Form::open(array('route' => 'roles.store','method'=>'POST')) !!}
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Permission:</strong>
            <br/>
            @foreach($permission as $value)
                <label>{{ Form::checkbox('permission[]', $value->id, false, array('class' => 'name')) }}
                {{ $value->name }}</label>
            <br/>
            @endforeach
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
{!! Form::close() !!}


<p class="text-center text-primary"><small>Tutorial by ItSolutionStuff.com</small></p>
@endsection --}}

@extends('layouts.apps')
@section('content')
<main id="js-page-content" role="main" class="page-content">
    <ol class="breadcrumb page-breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0);">Esi</a></li>
        <li class="breadcrumb-item active">Manage Users</li>
        <!-- <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date">Tuesday, July 20, 2021</span></li> -->
    </ol>
    <div class="row">
        <div class="col-xl-12">
            <div id="panel-1" class="panel">
                <div class="panel-hdr">
                    <h2><i class="fal fa-user-plus"></i>Add <span class="fw-300"><i>Role</i></span></h2>
                </div>
                <div class="panel-container show">
                    <div class="panel-content">
                        <form action="{{ route('roles.store') }}" method="post" class="comm_frm">
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
                                        <input type="text" id="exampleInputUsername" onkeypress="return /[a-z A-Z]/i.test(event.key)" class="form-control"
                                            name="role_title" placeholder="Role Title">
                                        @if ($errors->has('role_title'))
                                            <span class="text-danger">{{ $errors->first('role_title') }}</span>
                                        @endif
                                    </div>
                                </div>

                                {{-- <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Role Description:</label>
                                        <input type="text" id="role_description" class="form-control" name="role_description" placeholder="Role Description">
                                        @if ($errors->has('role_description'))
                                            <span class="text-danger">{{ $errors->first('role_description') }}</span>
                                        @endif
                                    </div>
                                </div> --}}

                                {{-- <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Status:</label>
                                        <select name="role_status" class="form-control">
                                            <option value="">Please select status</option>
                                            <option value="1">Active</option>
                                            <option value="0">Inactive</option>            
                                        </select>
                                        @if ($errors->has('role_status'))
                                            <span class="text-danger">{{ $errors->first('role_status') }}</span>
                                        @endif
                                    </div>
                                </div>    --}}
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-success waves-effect waves-themed">ADD ROLE</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>   
</main>
@endsection
