<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <section style="padding-top:60;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div clas="card">
                    <div class="card-header">
                        All Post <a href="/add-post" class="btn btn-success">Add new post</a>
                    </div>
                    <div class="card-body">
                        @if(Session::has('post_deleted'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('post_deleted')}}
                        </div>
                        @endif
                 <table class="table table-striped">
                     <thead>
                         <tr>
                             <th>ID</th>
                             <th>post title</th>
                             <th>post description</th>
                              <th> Action</th>
                          
                         </tr>

                     </thead>
                     <tbody>
                   @foreach($posts as $post)
                   <tr>
                       <td>{{$post->id}}</td>
                       <td>{{$post->title}}</td>
                       <td>{{$post->body}}</td>
                       <td>
                        <a href="/posts/{{$post->id}}" class="btn btn-info">details</a>
                        <a href="/edit-post/{{$post->id}}" class="btn btn-info">edit </a>
                        <a href="/delete-post/{{$post->id}}" class="btn btn-danger">delete</a>
                       </td>     
                    </tr>
                        @endforeach
                    </tbody>
                  
                    </div>
                </div>
            </div>
        </div> 
    </div>     
    </section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>
</html>