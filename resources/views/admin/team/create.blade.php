@extends('admin.index')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title">Add New Team Member</h3>
                <div class="tile-body">
                    <form action="{{ url('admin/team/store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="control-label">Name</label>
                            <input class="form-control" type="text" name="name" placeholder="Enter name"
                                value="{{ old('name') }}">
                            @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="control-label">Post</label>
                            <input class="form-control" type="text" name="post" placeholder="Enter post"
                                value="{{ old('post') }}">
                            @error('post')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                       

                        <div class="form-group">
                            <label class="control-label">Facebook</label>
                            <input class="form-control" type="text" name="facebook" placeholder="Enter facebook"
                                value="Facebook">
                            @error('facebook')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="control-label">Twitter</label>
                            <input class="form-control" type="text" name="twitter" placeholder="Enter twitter"
                                value="twitter">
                            @error('twitter')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="control-label">Inastagram</label>
                            <input class="form-control" type="text" name="instagram" placeholder="Enter instagram"
                                value="instagram">
                            @error('instagram')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="control-label">Youtube</label>
                            <input class="form-control" type="text" name="youtube" placeholder="Enter youtube"
                                value="youtube">
                            @error('youtube')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="control-label">Image</label>
                            <input class="form-control" type="file" name="image">
                            @error('image')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>


                        {{-- <div class="form-group">
                            <label class="control-label">Percentage</label>
                            <input class="form-control" type="number" name="per" placeholder="Enter Percentage" value="{{old('per')}}">
                            @error('per')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        </div> --}}
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
