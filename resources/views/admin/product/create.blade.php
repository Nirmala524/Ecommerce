@extends('admin.index')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title">Add New Product</h3>
                <div class="tile-body">
                    <form action="{{ url('admin/product/store') }}" method="POST" enctype="multipart/form-data">
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
                            <label class="control-label">title</label>
                            <input class="form-control" type="text" name="title" placeholder="Enter title"
                                value="{{ old('title') }}">
                            @error('title')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="control-label">Price</label>
                            <input class="form-control" type="text" name="price" placeholder="Enter price"
                                value="{{ old('price') }}">
                            @error('price')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div> 
                        <div class="form-group">
                            <label class="control-label">Thumbnail</label>
                            <input class="form-control" type="file" name="thumbnail">
                            @error('thumbnail')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="control-label">Image</label>
                            <input class="form-control" type="file" name="image[]" multiple>
                            @error('image.*')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group"> 
                            <label class="control-label">Description</label>
                            <input class="form-control" type="text" name="desc" placeholder="Enter Description"
                                value="{{ old('desc') }}">

                            @error('desc')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="control-label">Category</label>
                            <select class="form-control" name="category">
                                @foreach ($cat as $item)
                                    <option value="{{ $item->id }}">{{ $item->category }}</option>
                                @endforeach
                            </select>

                            
                            @error('category')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="control-label">Tags</label>
                            <select class="form-control" id="demoSelect" multiple="" name="tag[]">
                                <optgroup label="Select Cities">
                                    @foreach ($tags as $item)
                                        <option value="{{$item->id}}">{{$item->tag}}</option>
                                       
                                </optgroup>
                                @endforeach
                            </select>
                            {{-- <input class="form-control" type="text" name="tag" placeholder="Enter tags"
                                value="{{ old('tag') }}"> --}}
                            @error('tag')
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
