@extends('admin.master')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <style>
     body{
         text-align: center;
         align-content: center; 
         background: linear-gradient(to left, #ccccff 45%, #ccffff 95%);
         border-radius: 2px 2px 2px;
     }
     
     .card{
         text-align: left;
         margin-left: 39%;
         font-size: 20px;
     }
    </style>

</head>

<body>
  
    <h1>Cloth Details</h1>

    <div class="card" style="width: 18rem;">
        <img src="{{url('/uploads/'.$cloth->cloth_image)}}" width="300px" height="200px" class="card-img-top" alt="ProductImage" >
        <div class="card-body">
          <p class="card-title">Name: {{$cloth->cloth_name}}</p>
          <p class="card-text">Code: {{$cloth->cloth_code}}</p>
          <p class="card-text">Type:{{$cloth->cloth_type}}</span></p>
          <p class="card-text">Color: {{$cloth->cloth_color}}</p>
          <p class="card-text">Size: {{$cloth->cloth_size}}</p>
          <p class="card-text">Price: {{$cloth->cloth_price}}</p>
          <p class="card-text">Details: {{$cloth->details}}</p>
 
        </div>
      </div>       
</body>
</html>



@endsection