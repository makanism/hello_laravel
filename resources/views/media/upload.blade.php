@extends('layout2')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h1>Upload file</h1>
            @if($success)
            <div class="alert alert-success" role="alert">Data successfully saved.</div>
            @endif
            <form class="form" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Main picture</lable>
                    <br/>
                    <input type= "file" name="mainpicture">
                </div>
                <div class="form-group">
                    <label>Gallery</lable>
                    <br/>
                    <input type= "file" name="gallery[]" multiple="multiple">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-small">Submit</button>
                    <a href="/media" class ="btn btn-default btn-small">Back to List</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection