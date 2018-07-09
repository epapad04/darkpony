<!-- edit.blade.php -->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Edit</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
      <h2 style="text-align: center">Edit Post</h2><br  />
        <form method="post" action="{{action('PostController@update', $id)}}">
        @csrf
        <input name="_method" type="hidden" value="PATCH">
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="title">Title:</label>
            <input type="text" class="form-control" name="title" value="{{$post->title}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="subtitle">Subtitle</label>
              <input type="text" class="form-control" name="subtitle" value="{{$post->subtitle}}">
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="content">Content:</label>
              <input type="text" class="form-control" name="content" value="{{$post->content}}">
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="file">File:</label>
              <p>{{$post->filename}}</p>
              <a class="btn btn-info" href="http://localhost:8000/images/{{$post->filename}}" target="_blank">See File</a>
              <a class="btn btn-info" href="http://localhost:8000/images/{{$post->filename}}" download>Download File</a>
            </div>

          </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-success" style="margin-left:38px">Update</button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>