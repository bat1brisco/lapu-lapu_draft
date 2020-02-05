@extends('layouts.app')

@section('content-title', 'Home')

@section('content')
<div class="row">
  <div class="col-md-8 col-md-offset-2">
    <div class="panel panel-default">
      <div class="panel-heading">Images</div>

      <div class="panel-body">
        @if (session('status'))
        <div class="alert alert-success">
          {{ session('status') }}
        </div>
        @endif
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#home">Gallery</a></li>
            <li><a data-toggle="tab" href="#menu1">Upload Images</a></li>
            <li><a data-toggle="tab" href="#menu2">Upload Videos</a></li>
        </ul>
        <div class="tab-content">
            <div id="home" class="tab-pane fade in active">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="text-center">Images</th>
                            <th class="text-center">File Name</th>
                            <th class="text-center">Category</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($images as $image)
                            <tr>
                                <td class="text-center"><img src="{{url('storage/' . $image->category . '/' . $image->file_name)}}" alt="{{ $image->file_name }}" height="64" width="64"></td>
                                <td class="text-center">{{ $image->file_name}}</td>
                                <td class="text-center">{{ $image->category}}</td>
                                <td class="text-center">
                                    <a href="{{ route('image.delete', $image->id) }}"><button class="btn btn-danger btn-sm">Delete</button></a>
                                    <button class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i> Edit</button>
                                </td>
                            </tr>                            
                        @endforeach
                    </tbody>

                </table>
            </div>
            <div id="menu1" class="tab-pane fade">
                <form action="{{ route('upload') }}" enctype="multipart/form-data" method="POST" class="m-5">
                    {{ csrf_field() }}
                  
                        <div class="form-group">
                            <input type="file" name="file_name" class="form-control">
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="category" id="">
                                <option value="Banner">Banner</option>
                                <option value="Background">Background</option>
                                <option value="Slider">Slider</option>
                                <option value="Others">Others</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Upload</button>
                
                </form>
            </div>
            <div id="menu2" class="tab-pane fade">
              <h3>Menu 2</h3>
              <p>Some content in menu 2.</p>
            </div>
          </div>

      </div>
    </div>
  </div>
</div>
@endsection
