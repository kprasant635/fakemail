@extends('layouts.apps')
@section('content')
    <main id="js-page-content" role="main" class="page-content">
        <ol class="breadcrumb page-breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0);">admin</a></li>
            <li class="breadcrumb-item active">Manage settings</li>
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
                        <h2><i class="fal fa-user-plus"></i>Domain <span class="fw-300"><i>Configuration</i></span></h2>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">



                            <div class="row">
                                <div class="col-xl-12">
                                    <div id="panel-2" class="pane2">
                                        <div class="container">
                                            <form action="{{ route('store-domain') }}" method="POST">
                                                @csrf
                                                @if ($errors->any())
                                                    <div class="alert alert-danger" role="alert">
                                                        <ul>
                                                            @foreach ($errors->all() as $error)
                                                                <li>{{ $error }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                @endif
                                                @if (Session::has('success'))
                                                    <div class="alert alert-success text-center">
                                                        <p>{{ Session::get('success') }}</p>
                                                    </div>
                                                @endif
                                                <table class="table table-bordered" id="dynamicAddRemove">
                                                    <tr>
                                                        <th>Domain Name</th>
                                                        <th>Action</th>
                                                    </tr>
                                                    <tr>
                                                        <td><input type="text" name="addMoreInputFields[0][domain_name]"
                                                                placeholder="Enter Domain" class="form-control" />
                                                        </td>
                                                        <td><button type="button" name="add" id="dynamic-ar"
                                                                class="btn btn-outline-primary">Add More</button></td>
                                                    </tr>

                                                </table>
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-md-03">
                                                            <button type="submit"
                                                                class="btn btn-outline-success btn-block">Save</button>
                                                        </div>
                                                        <div class="col">

                                                        </div>
                                                    </div>

                                                </div>


                                            </form>
                                            <div class="mt-10">
                                                <table class="table table-bordered" id="">
                                                    <tr>
                                                        <th>Domain List</th>
                                                        <th>Action</th>
                                                    </tr>
                                                    @foreach ($domain as $key => $value)
                                                        <tr>
                                                            <td>
                                                                <h5>{{ $value->domain_name }}</h5>
                                                            </td>
                                                            <td>
                                                                <div class="custom-control custom-switch">
                                                                    <input type="checkbox" class="custom-control-input"
                                                                        id="customSwitch2{{ $key }}"
                                                                        {{ $value->active_status == 1 ? 'checked' : '' }}>
                                                                    <label class="custom-control-label"
                                                                        for="customSwitch2{{ $key }}">{{ $value->active_status == 1 ? 'Active' : 'Inactive' }}</label>
                                                                    {{-- <label class="custom-control-label d-none" for="customSwitch2">inactive</label> --}}
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </table>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2><i class="fal fa-user-plus"></i>Mail <span class="fw-300"><i>Setup</i></span></h2>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">



                            <div class="row">
                                <div class="col-xl-12">
                                    <div id="panel-2" class="pane2">
                                        <div class="container">
                                            <form action="{{ route('store-mailsetup') }}" method="POST">
                                                @csrf
                                                {{-- @if ($errors->any())
                                                    <div class="alert alert-danger" role="alert">
                                                        <ul>
                                                            @foreach ($errors->all() as $error)
                                                                <li>{{ $error }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                @endif --}}
                                                @if (Session::has('successmsg'))
                                                    <div class="alert alert-success text-center">
                                                        <p>{{ Session::get('successmsg') }}</p>
                                                    </div>
                                                @endif

                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <label class="form-label" for="inputGroupSelect01">Mail Type</label>
                                                        <div class="input-group">

                                                            <select class="custom-select" id="inputGroupSelect01"
                                                                name="mailtype" required>
                                                                <option selected>Choose...</option>
                                                                <option value="smtp">SMTP</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label" for="simpleinput">Host</label>
                                                    <input type="text" id="simpleinput" name="host"
                                                        class="form-control" required>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label" for="simpleinput">Port</label>
                                                    <input type="text" id="simpleinput" name="port"
                                                        class="form-control" required>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label" for="simpleinput">Username</label>
                                                    <input type="text" id="simpleinput" name="username"
                                                        class="form-control" required>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label" for="simpleinput">Password</label>
                                                    <input type="text" id="simpleinput" name="password"
                                                        class="form-control" required>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label" for="inputGroupSelect01">Mail Type</label>
                                                    <div class="input-group">

                                                        <select class="custom-select" id="inputGroupSelect01"
                                                            name="encryption" required>
                                                            <option value="tls">TLS</option>
                                                            <option value="ssl">SSL</option>
                                                            <option value="none">None</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="form-label" for="simpleinput">From Address</label>
                                                    <input type="email" id="simpleinput" name="from_address"
                                                        class="form-control" required>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label" for="simpleinput">From Name</label>
                                                    <input type="text" id="simpleinput" name="from_name"
                                                        class="form-control" required>
                                                </div>


                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-md-03">
                                                            <button type="submit"
                                                                class="btn btn-outline-success btn-block">Save</button>
                                                        </div>
                                                        <div class="col">

                                                        </div>
                                                    </div>

                                                </div>


                                            </form>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </main>

@endsection
@section('script')
    <script type="text/javascript">
        var i = 0;
        $("#dynamic-ar").click(function() {
            ++i;
            $("#dynamicAddRemove").append('<tr><td><input type="text" name="addMoreInputFields[' + i +
                '][domain_name]" placeholder="Enter Domain" class="form-control" /></td><td><button type="button" class="btn btn-outline-danger remove-input-field">Delete</button></td></tr>'
            );
        });
        $(document).on('click', '.remove-input-field', function() {
            $(this).parents('tr').remove();
        });
    </script>
@endsection
