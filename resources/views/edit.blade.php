
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Actualizar plan</title>

    <link rel="stylesheet" href="{{ asset('/css/app.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/registro.css')}}">

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>
<body>
<h1>Nutrika</h1>
</br>
@auth
        <h2>Welcome back {{ auth()->user()->name }} </h2>
@endauth
</br>
</br>

@if (Auth::user()->name == 'Trainer')

@foreach ($nutriplan as $item)

<h2> Edit {{ $item->nutri }} plan</h2>
<form action="{{route('plans.update', $item->id)}}" method = "POST">
        @csrf
        @method('PUT')
  <div class="container ">
    <div class="row ">
        <div class="col-sm coln2">
        Monday
        <textarea id="lu" name="lunes" rows="4" cols="50">
        
        {{ $item->lunes }}
        </textarea>
        </div>
    </div>
    <div class="row ">
        <div class="col-sm coln2">
        Tuesday
        <textarea id="ma" name="martes" rows="4" cols="50">
        
        {{ $item->martes }}
        </textarea>
        </div>
    </div>
    <div class="row ">
        <div class="col-sm coln2">
        Wednesday
        <textarea id="mi" name="miercoles" rows="4" cols="50">
        
        {{ $item->miercoles }}
        </textarea>
        </div>
    </div>
    <div class="row ">
        <div class="col-sm coln2">
        Thursday
        <textarea id="ju" name="jueves" rows="4" cols="50">
        {{ $item->jueves }}
        </textarea>
        </div>
    </div>
    <div class="row ">
        <div class="col-sm coln2">
        Friday
        <textarea id="vi" name="viernes" rows="4" cols="50">
        {{ $item->viernes }}
        </textarea>
        </div>
    </div>
  </div>

  <button type="submit">Update Plan</button>
  
</form>
@endforeach
@endif
</body>


<style>

h1 {
    color: white;
    font-family: courier;
    font-size: 400%;
    text-align: center;
}

textarea {
    margin-left: 120px;
}
h2 {
    color: white;
    font-family: courier;
    font-size: 200%;
    text-align: center;
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
  margin-left: 450px;
}

button:hover {
  background: #3944BC;
  color: #ffffff;
}
</style>

</html>