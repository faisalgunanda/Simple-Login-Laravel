@extends('layouts.app')
@section('content')
<div class="contaner">
  <div class="row">
    <div class="col-md-6 col-offset-md-4">
      <div class="card">
        <h5 class="card-header">Form File Upload</h5>
        <div class="card-body">
          <form class="{{ route('uploadfile') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <input type="file" name="file">
            </div>
            <button type="submit" class="btn btn-primary">Upload</button>
            <a href="{{ route('viewfile') }}" class="btn btn-success">Back</a>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
