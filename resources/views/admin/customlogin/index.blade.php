@extends('admin.index')
@section('content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-th-list"></i> Data Table</h1>
            <p>Table to display analytical data effectively</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item">Tables</li>
            <li class="breadcrumb-item active"><a href="#">Data Table</a></li>
        </ul>
    </div>
    {{-- <p><a class="btn btn-primary icon-btn" href="{{ url('admin/skill/create') }}"><i class="fa fa-plus"></i>Add Item </a></p> --}}

    @if (session('status'))
    <div class="alert alert-success col-md-8">
        <div class="bs-component">
            <div class="alert alert-dismissible alert-suceess">
              <button class="close" type="button" data-dismiss="alert">
                </button><h1>{{session('status')}}</h1>
            </div>
          </div>
    </div>
@endif
@if (session('delete'))
    <div class="alert alert-danger">
        <div class="bs-component">
            <div class="alert alert-dismissible alert-suceess">
              <button class="close" type="button" data-dismiss="alert">
                </button><h1>{{session('delete')}}</h1>
            </div>
          </div>
    </div>
@endif
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                            <tr>
                                <th>Id</th>

                                <th>Name</th>
                                <th>Email</th>
                                <th>Password</th>

                            </tr>
                        </thead>
                        <tbody>
                          

                        </tbody>
                    </table>
                    {{ $data->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
