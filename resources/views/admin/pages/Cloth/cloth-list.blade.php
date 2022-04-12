@extends('admin.master')
@section('content')
<style>
	body{
	 
	   background: linear-gradient(to left, #ccccff 45%, #ccffff 95%);
   
	}
	 #customers {
	   font-family: Arial, Helvetica, sans-serif;
	   border-collapse: collapse;
	   width: 100%;
	 }
	 .heading h2{
	   text-align: center;
	 }
	 #customers td, #customers th {
	   border: 1px solid #ddd;
	   padding: 8px;
	 }
	 
	 #customers tr:nth-child(even){background-color: #ccccff;}
	 
	 #customers tr:hover {background-color: #ddd;}
	 
	
	 #customers th {
		padding-top: 12px;
		padding-bottom: 12px;
		text-align: left;
		background-color: #001313;
		color: white;
	  }
	 </style>

     <div class="heading">
		<center><h2>Cloth Type</h2></center>
	  </div>
	  
	  <br>
	  <a class="btn btn-primary" href="{{route('add.cloth')}}" role="button">Add Cloth</a>
	  <tbody></tbody>
	  <table id="customers">
		<tr>
		  <th>ID</th>
		  <th>Image</th>
		  <th>Name</th>
		  <th>Code</th>
		  <th>Type</th>
		  <th>Color</th>
		  <th>Size</th>
		  <th>Price</th>
		  <th>Action</th>
	  
		</tr>
	<tr>
		@foreach($clothlists as $key=>$cloth)
							<td>{{$key+1}}</td>
			<td> 
            <img src="{{url('/uploads/'.$cloth->cloth_image)}}" width="100px" alt="Cloth Image">
            </td>
			<td>{{$cloth->cloth_name}}</td>
            <td>{{$cloth->cloth_code}}</td>
            <td>{{$cloth->cloth_type}}</td>
			<td>{{$cloth->cloth_color}}</td>
			<td>{{$cloth->cloth_size}}</td>
			<td>{{$cloth->cloth_price}}</td>
			<td>
			<a class="btn btn-primary" href="{{route('cloth.view',$cloth->id)}}"><i class="fas fa-eye"></i></a>
            <a class="btn btn-warning" href="{{route('cloth.edit',$cloth->id)}}"><i class="fas fa-edit"></i></a>
            <a class="btn btn-danger" href="{{route('cloth.delete',$cloth->id)}}"><i class="fas fa-trash-alt"></i></a>
			</td>
			@endforeach
			</tr>
			</tbody>
	  </table>
@endsection

