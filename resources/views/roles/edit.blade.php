{{-- @extends('layouts.app')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Role</h2>
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


{!! Form::model($role, ['method' => 'PATCH','route' => ['roles.update', $role->id]]) !!}
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
            @foreach ($permission as $value)
                <label>{{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
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


@endsection
<p class="text-center text-primary"><small>Tutorial by ItSolutionStuff.com</small></p> --}}
@extends('layouts.apps')
@section('content')
    <main id="js-page-content" role="main" class="page-content">
        <ol class="breadcrumb page-breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0);">Admin</a></li>
            <li class="breadcrumb-item active">Role Permission </li>
            <!-- <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date">Tuesday, July 20, 2021</span></li> -->
        </ol>
        <div class="row">
            <div class="col-xl-12">



                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2><i class="fal fa-user-plus"></i>Role <span class="fw-300"><i>Permission</i></span></h2>
                    </div>
                    <div class="panel-container show">
                        <form action="{{ route('roles.update', [$role->id]) }}" method="post">
                            {{ method_field('PUT') }}
                            @csrf
                            <div class="panel-content">


                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Role Title:</label>
                                        <input type="text" class="form-control" name="role_title"
                                            placeholder="Role Title" value="{{ $role->name }}">
                                        @if ($errors->has('role_title'))
                                            <span class="text-danger">{{ $errors->first('role_title') }}</span>
                                        @endif
                                    </div>
                                </div>




                                <div class="row">
                                    <div class="col-xl-12">
                                        <div id="panel-2" class="pane2">
                                            <div class="panel-hdr">
                                                <h2>
                                                    Role Permission
                                                </h2>
                                            </div>
                                            <div class="panel-container show">
                                                <div class="panel-content">
                                                    <table class="table table-bordered table-hover table-striped w-100">
                                                        <thead>
                                                            <tr>

                                                                <th>{{ __('Module Name') }}</th>
                                                                <th>{{ __('Show') }}</th>
                                                                <th>{{ __('Create') }}</th>
                                                                <th>{{ __('Edit') }}</th>
                                                                <th>{{ __('Delete') }}</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($permission->chunk(5) as $chunk)
                                                                <tr>
                                                                    @foreach ($chunk as $key => $value)
                                                                        <td><input type="checkbox"
                                                                                id="md_checkbox_{{ $key }}"
                                                                                class="filled-in chk-col-primary"
                                                                                value="{{ $value->id }}"
                                                                                name="permission[]"
                                                                                {{ in_array($value->id, $rolePermissions) ? 'checked' : '' }}>
                                                                            <label
                                                                                for="md_checkbox_{{ $key }}">{{ $key % 5 == 0 ? $value->name : '' }}</label>
                                                                        </td>
                                                                    @endforeach
                                                                </tr>
                                                            @endforeach

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div class="col-md-12">
                                    <input type="submit" class="btn btn-success waves-effect waves-themed" value="submit">
                                </div>




                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </main>
@endsection
