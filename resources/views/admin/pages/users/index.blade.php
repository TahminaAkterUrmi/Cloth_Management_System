@extends('admin.master')
@section('content')


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
     
	 

    
		<h2>User List</h2>
	  
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
		<td>{{$user->name}}</td>
		<td>{{$user->role->name}}</td>


	</tr>
	@endforeach
	  </table>


	  
    
@endsection