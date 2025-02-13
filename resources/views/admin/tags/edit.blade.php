@extends('admin.index')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title">Edit Tags</h3>
                <div class="tile-body">
                    <form action="{{ url('admin/tag/update') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input class="form-control" type="hidden" name="id" placeholder="Enter id" value="{{$data->id}}">
                            
                        </div>
                        <div class="form-group">
                            <label class="control-label">tag</label>
                            <input class="form-control" type="text" name="tag" placeholder="Enter tag" value="{{$data->tag}}">
                            @error('tag')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
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
