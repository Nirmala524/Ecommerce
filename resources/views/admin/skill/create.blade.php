@extends('admin.index')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title">Add New Skills</h3>
                <div class="tile-body">
                    <form action="{{ url('admin/skill/store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label class="control-label">title</label>
                            <input class="form-control" type="text" name="title" placeholder="Enter title" value="{{old('title')}}">
                            @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        </div>
                        <div class="form-group">
                            <label class="control-label">Percentage</label>
                            <input class="form-control" type="number" name="per" placeholder="Enter Percentage" value="{{old('per')}}">
                            @error('per')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        </div>
                        {{-- <div class="form-group">
                            <label class="control-label">status</label>
                            <div class="toggle-flip">
                                <label>
                                  <input type="checkbox" name="status" value="{{$data->status}}"><span class="flip-indecator" data-toggle-on="Active" data-toggle-off="Inactive"></span>
                                </label>
                              </div>
                           
                        </div> --}}
 
                        <div class="tile-footer">
                            <button class="btn btn-primary" type="submit"><i
                                    class="fa fa-fw fa-lg fa-check-circle"></i>Register</button>&nbsp;&nbsp;&nbsp;<a
                                class="btn btn-secondary" href="#"><i
                                    class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
                         
                         
                                </div>
                    </form>
                </div>
            </div>
        </div>
    @endsection
