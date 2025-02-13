@extends('admin.index')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title">edit Product</h3>
                <div class="tile-body">
                    <form action="{{url('admin/product/update')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input class="form-control" type="hidden" name="id" placeholder="Enter title" value="{{$data->id}}">
                            
                        </div>
                        <div class="form-group">
                            <label class="control-label">Name</label>
                            <input class="form-control" type="text" name="name" placeholder="Enter name" value="{{$data->name}}">
                            @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        </div>

                        <div class="form-group">
                            <label class="control-label">title</label>
                            <input class="form-control" type="text" name="title" placeholder="Enter title" value="{{$data->title}}">
                            @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        </div>
                       
                        <div class="form-group">
                            <label class="control-label">Price</label>
                            <input class="form-control" type="text" name="price" placeholder="Enter price" value="{{$data->price}}">
                            @error('price')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        </div>
                        <div class="form-group">
                            <label class="control-label">Thumbnail</label>
                            <input class="form-control" type="file" name="thumbnail" >
                            @error('thumbnail')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <img style="width: 100px;"  src="{{asset('image/product/'.$data->thumbnail)}}" alt="">
                        </div>

                        <div class="form-group">
                            <label class="control-label">Image</label>
                            <input class="form-control" type="file" name="image[]" multiple>
                            @error('image.*')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <img  src="{{asset('image/product/'.$data->image)}}" alt="">
                        </div>

                        <div class="form-group">
                            <label class="control-label">Description</label>
                            <input class="form-control" type="text" name="desc" placeholder="Enter Description" value="{{$data->desc}}">

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

                            {{-- <input class="form-control" type="text" name="category" placeholder="Enter category" value="{{$data->category}}"> --}}
                            @error('category')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        </div>
                        <div class="form-group">
                            <label class="control-label">Tags</label>

                            <select class="form-control" id="demoSelect" multiple="" name="tag[]">
                                <optgroup label="Select Cities">
                                    @foreach ($tags as $tagitem)
                                        <option value="{{$tagitem->id}}">{{$tagitem->tag}}</option>
                                       
                                </optgroup>
                                @endforeach
                            </select>
                            {{-- <input class="form-control" type="text" name="tag" placeholder="Enter tags" value="{{$data->tag}}"> --}}
                            @error('tag')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
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
                                    class="fa fa-fw fa-lg fa-check-circle"></i>UPDATE</button>&nbsp;&nbsp;&nbsp;
                         
                         
                                </div>
                    </form>
                </div>
            </div>
        </div>
    @endsection
