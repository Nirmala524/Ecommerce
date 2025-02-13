@extends('admin.index')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title">Edit Team Member</h3>
                <div class="tile-body">
                    <form action="{{ url('admin/testimonial/update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input class="form-control" type="hidden" name="id" placeholder="Enter id" value="{{$data->id}}">
                            
                        </div>
                        <div class="form-group">
                            <label class="control-label">Name:</label>
                            <input class="form-control" type="text" name="name" placeholder="Enter name" value="{{$data->name}}">
                            @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        </div>
                        <div class="form-group">
                            <label class="control-label">Place</label>
                            <input class="form-control" type="text" name="place" placeholder="Enter place"
                                value="{{$data->place}}">
                            @error('place')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                       
                        <div class="form-group">
                            <label class="control-label">star</label>
                            <input class="form-control" type="text" name="star" placeholder="Enter star"
                                value="{{$data->star}}">
                            @error('star')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="control-label">Description</label>
                            <input class="form-control" type="text" name="desc" placeholder="Enter desc"
                                value="{{$data->desc}}">
                            @error('desc')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label class="control-label">Image</label>
                            <input class="form-control" type="file" name="image" >
                            @error('image')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <img  src="{{asset('storage/client/'.$data->image)}}" alt="">
                        </div>

                        <div class="form-group">
                            <label class="control-label">status</label>
                            <div class="toggle-flip">
                                <label>
                                  <input type="checkbox" name="status" value="{{$data->status}}"><span class="flip-indecator" data-toggle-on="Active" data-toggle-off="Inactive"></span>
                                </label>
                              </div>
                           
                        </div>
                      
                        <div class="tile-footer">
                            <button class="btn btn-primary" type="submit"><i
                                    class="fa fa-fw fa-lg fa-check-circle"></i>update</button>&nbsp;&nbsp;&nbsp;
                         
                         
                                </div>
                    </form>
                </div>
            </div>
        </div>
    @endsection
