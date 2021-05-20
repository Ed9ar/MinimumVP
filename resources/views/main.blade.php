
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro de usuario</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('/css/app.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/registro.css')}}">

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>
<body>
<h3><a name="" id="" class="btn text-light bg-azul1" href="{{route('auth.logout')}}" role="button">Exit</a></h3>
<h1>Nutrika</h1>
</br>
@auth
        <h2>Welcome back {{ auth()->user()->name }} </h2>
        
@endauth
</br>
</br>

@if (Auth::user()->name != 'Trainer')

@foreach ($nutriplan as $item)

@if (Auth::user()->email == $item->nutri)

<div class="container">
    <div class="row">
        <div class="col-sm coln">
        Monday
        </div>
        <div class="col-sm coln">
        Tuesday
        </div>
        <div class="col-sm coln">
        Wednesday
        </div>
        <div class="col-sm coln">
        Thursday
        </div>
        <div class="col-sm coln">
        Friday
        </div>
    </div>
</div>



<div class="container rowns">

    <div class="row rown">
        <div class="col-sm coln2">
        {{ $item->lunes }}
        </div>
        <div class="col-sm coln2">
        {{ $item->martes }}
        </div>
        <div class="col-sm coln2">
        {{ $item->miercoles }}
        </div>
        <div class="col-sm coln2">
        {{ $item->jueves }}
        </div>
        <div class="col-sm coln2">
        {{ $item->viernes }}
        </div>
    </div>
</div>
@endif
@endforeach

@else
    <div class="container">
            <div id = "cardContainer" class="row mt-5" style="margin: 0 auto">
                @foreach ($users as $item)
                    @if ($item->name  != 'Trainer')
                    <div class="col-md-4 col-lg-3 mb-3 d-flex justify-content-center">
                        <div class="card-deck">
                                <div class="card" id="{{ $item->id }}" style="width: 12rem;">
                                    
                                    
                                    <div class="card-body">
                                        {{ $item->email }}
                                        <a class="card-title" href="{{route('auth.show', $item['email'])}}">{{ $item->name }}</a>
                                        <button  class="btn btn-link" type="submit" onclick = "deleteUser({{$item->id}})">Delete</button>
                                    </div>
                                </div>

                        </div>
                    </div>
                    @endif
                @endforeach
            </div>
    </div>
    @endif  
</body>

<script>

function deleteUser(id){
        console.log(id);
        let str = '/user/'+id+''
        //console.log(document.getElementById("tableRow"+id));
        document.getElementById(id).remove();

        $.ajax({
            url: str,
            method: 'DELETE',
            headers:{
                'Accept': 'application/json',
                'X-CSRF-Token': $('meta[name="csrf-token"').attr('content')
            }
        })


    }

</script>

<style>

h1 {
    color: white;
    font-family: courier;
    font-size: 400%;
    text-align: center;
}


h2 {
    color: white;
    font-family: courier;
    font-size: 200%;
    text-align: center;
}

h3 {
    color: white;
    font-family: courier;
    font-size: 200%;
    text-align: right;
    margin-right: 100px;
}

body {
  background: #FFA500;
}

.container{
    background:white;
}

.coln{
    border-style: solid;
}

.rown{
    height:100px;
}

.rowns{
    height:300px;
}

.coln2{
    border-style: solid;
    height: 300%;
}

form {
  width: 60%;
  margin: 60px auto;
  background: #efefef;
  padding: 60px 120px 80px 120px;
  text-align: center;
  -webkit-box-shadow: 2px 2px 3px rgba(0,0,0,0.1);
  box-shadow: 2px 2px 3px rgba(0,0,0,0.1);
}
label {
  display: block;
  position: relative;
  margin: 40px 0px;
}
.label-txt {
  position: absolute;
  top: -1.6em;
  padding: 10px;
  font-family: sans-serif;
  font-size: .8em;
  letter-spacing: 1px;
  color: rgb(120,120,120);
  transition: ease .3s;
}
.input {
  width: 100%;
  padding: 10px;
  background: transparent;
  border: none;
  outline: none;
}

.line-box {
  position: relative;
  width: 100%;
  height: 2px;
  background: #BCBCBC;
}

.line {
  position: absolute;
  width: 0%;
  height: 2px;
  top: 0px;
  left: 50%;
  transform: translateX(-50%);
  background: #FFA500;
  transition: ease .6s;
}

.input:focus + .line-box .line {
  width: 100%;
}

.label-active {
  top: -3em;
}

button {
  display: inline-block;
  padding: 12px 24px;
  background: rgb(220,220,220);
  font-weight: bold;
  color: rgb(120,120,120);
  border: none;
  outline: none;
  border-radius: 3px;
  cursor: pointer;
  transition: ease .3s;
}

button:hover {
  background: #FFA500;
  color: #ffffff;
}
</style>

</html>