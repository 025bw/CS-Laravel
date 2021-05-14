<!DOCTYPE html>
<html lang="en">

<style>

</style>

<head>
    <title>Submit Post</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<!-- <link rel="stylesheet" href="{{ URL::asset('dumb.css') }}"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
<div class="container">
    <div class="row">

        <div class="col-md-8 col-md-offset-2">

            <h1>Update post</h1>

            <form action="" method="POST" enctype="multipart/form-data">

                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <input id="id" name="id" type="hidden" value="{{ $post->id }}">


                <div class="form-group">
                    <label for="title">Title <span class="require">*</span></label>
                    <input type="text" class="form-control" name="title" value="{{ $post->title }}">
                    @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>@enderror
                </div>

                <div class="form-group">
                    <label for="content">Content*</label>
                    <textarea rows="5" class="form-control" name="content">{{ $post->content }}</textarea>
                    @error('content')
                    <div class="alert alert-danger">{{ $message }}</div>@enderror
                </div>

                <div class="form-group">
                    <label for="title">Author <span class="require"></span></label>
                    <input type="text" class="form-control" name="author" value="{{ $post->author }}">
                </div>

                <div class="custom-file">
                    {{-- <input type="image" width="100" src="images/{{ $post->pic }}">
                    <input type="file" class="custom-file-input" id="image" name="image" style="display: none;"><br> --}}

                    <label for="image">
                        <input type="file" name="image" id="image" style="display:none;"/>
                        <img id="img" width="100"
                             @if(is_null($post->pic))
                             src="images/choose.png"/>
                             @else
                             src="images/{{ $post->pic }}"/>
                        @endif
                    </label>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">
                        Update
                    </button>
                    <!-- <button class="btn btn-secondary">
Cancel
</button> -->
                </div>

            </form>
        </div>

    </div>
</div>
</body>

</html>
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#img').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#image").change(function () {
        readURL(this);
    });

</script>
