@extends('admin.master')
@section('content')
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<style>
	body{
	 
	   background: linear-gradient(to left, #ccccff 45%, #ccffff 95%);
   
	}
	 #users {
	   font-family: Arial, Helvetica, sans-serif;
	   border-collapse: collapse;
	   width: 100%;
	 }
	 .heading h2{
	   text-align: center;
	 }
	 #users td, #users th {
	   border: 1px solid #ddd;
	   padding: 8px;
	 }
	 
	 #users tr:nth-child(even){background-color: #ccccff;}
	 
	 #users tr:hover {background-color: #ddd;}
	 
	
	 #users th {
		padding-top: 12px;
		padding-bottom: 12px;
		text-align: left;
		background-color: #001313;
		color: white;
	  }
      #new {
        text-align: right;
      }
	 </style>
     
	 

    
		<h2>{{__('User List')}}</h2>
		
	  
	  <br>
      <div id="new">
      <a href="{{route('users.create')}}" style="text-align:left;" class="btn btn-primary" type="button">+ Create New User</a>
      </div>
	  <table id="users">
		<tr>
		  <th>SL No</th>
		  <th>Name</th>
		  <th>Role</th>
		  <th>Image</th>
		  <th>Status</th>
		  <th>Action</th>
	  
		</tr>
	</tr>
	<tr>
		@foreach ($users as $key=>$user)
		<th scope="row">{{$key+1}}</th>
	 <td>{{$user->full_name}}</td>
		<td>{{$user->role->name}}</td> 
		

	</tr>
	@endforeach
	  </table>
   
      {{$users->links()}}	
	  
    
@endsection