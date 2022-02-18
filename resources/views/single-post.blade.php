<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> post details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <section style="padding-top:60;">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div clas="card">
                    <div class="card-header">
                    Post details
                    </div>
                    <div class="card-body">
                        <h1>{{$post->title}}</h1>
                        <p>{{$post->body }}</p>
                        <a href="/posts" class="btn btn-success"> view all posts</a>
                    </div>
                </div>
            </div>
        </div> 
    </div>     
    </section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>
</html>