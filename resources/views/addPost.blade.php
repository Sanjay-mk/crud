<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <section style="padding-top:60;">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div clas="card">
                    <div class="card-header">
                        Add Post  <a href="/posts" class="btn btn-success"> view posts</a>
                    </div>
                    <div class="card-body">
                        @if(Session::has('post_created'))
                            <div class = "alert alert-success" role="alert">
                        @endif

                        {{Session::get('post_created')}}
                        </div>
                        <form method="post" action="{{route('post.create')}}">
                            @csrf
                            <div class="form group">
                                <lable for="title">Post Title</lable>
                                 <input type="text" name="title" class="form-controll" placeholder="enter post title"/>
                            </div>
                            <br>
                            <div class="form-group">
                                <lable for="body">Post description</lable>
                                <textarea name="body" class="form-control"  rows="3"></textarea>
                            </div>
                            <br>
                             <button type="submit" class="btn btn-success">Add post</button>
                        </form>
                    </div>
                </div>
            </div>
        </div> 
    </div>     
    </section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>
</html>