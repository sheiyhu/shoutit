<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset("css\bootstrap.css") }}">
    <title>SHOUT IT!!!</title>
</head>
<body>
    <br><br><br><br>
    <div class="container border border-success mx-auto bg-dark">
        <h1 class="text-center text-primary" style="padding :10px;">SHOUT IT!!! Chatbox</h1>
        <div class="container bg-white" style="padding :10px;">
            <ul class="list-group">
                @foreach ($shouts as $shout)
                    <li class="list-group-item"><span class="text-muted">{{$shout->created_at}} - </span><span class="text-primary">{{$shout->user}}</span> : <span  class="text-danger">{{$shout->msg}}</span>  </li>
                @endforeach
            </ul>
        </div>
        <br>
        <div class="container">
            <div class="container">
                <form action="/store" method="post" class="form-group row ">
                    {{ csrf_field() }}
                    <input type="text" class="form-control col-4" name="user" placeholder="Enter Your Name" value="{{ old("user") }}" style="margin-right:19px; padding:10;">
                    <input type="text" class="form-control col-6" name="msg" placeholder="Enter A Message" value="{{ old('msg') }}" style="margin-right:19px;">
                    <br>
                    <button type="submit"name="submit" class="btn btn-danger" >Shout It Out</button>
                </form>
                @if (count($errors)>0)
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger">
                            {{$error}}
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
    <script src="{{ asset("js/bootstrap.js") }}" type="text/javascript"></script>
</body>
</html>
