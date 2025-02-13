@extends('admin.index')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title">editImage</h3>
                <div class="tile-body">
                    <form action="{{ url('admin/multiimage/update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input class="form-control" type="hidden" name="id" placeholder="Enter title"
                                value="{{ $data->id }}">

                        </div>
                        <div class="form-group">
                            <label class="control-label">Image</label>
                            <input class="form-control" type="file" name="image">
                            <img style="width: 100px;" src="{{ asset('storage/multiimage/' . $data->image) }}" alt="">
                            @error('image')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="control-label">status</label>
                            <div class="toggle-flip">
                                <label>
                                    <input type="checkbox" name="status" value="{{ $data->status }}"><span
                                        class="flip-indecator" data-toggle-on="Active" data-toggle-off="Inactive"></span>
                                </label>
                            </div>

                        </div>

                        <div class="tile-footer">
                            <button class="btn btn-primary" type="submit"><i
                                    class="fa fa-fw fa-lg fa-check-circle"></i>Update</button>&nbsp;&nbsp;&nbsp;<a
                                class="btn btn-secondary" href="#"><i
                                    class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endsection
