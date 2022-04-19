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
     
	 

    
	 <h2> {{__('role.list')}}</h2>
	  
	  <br>
      <div id="new">
      <a href="{{route('role.create')}}" style="text-align:left;" class="btn btn-primary" type="button">+ Create New Role</a>
      </div>
	  <table id="users">
		<tr>
		  <th>SL No</th>
		  <th>Name</th>
		  <th>Status</th>
		  <th>Permissions</th>
		  <th>Action</th>
	  
		</tr>
	<tr>

	{{--@dd($roles)--}}
		@foreach ($roles as $key=>$role)
		<th scope="row">{{$key+1}}</th>
		<td>{{$role->name}}</td>
		<td>{{$role->status}}</td>
		<td>
		@foreach ($role->permissions as $item)
		<p class="btn btn-success btn-sm">	{{$item->permission->name}}</p>, 
			
		@endforeach
		</td>
		<td><a href="{{route('role.edit', $role->id)}}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M1.181 12C2.121 6.88 6.608 3 12 3c5.392 0 9.878 3.88 10.819 9-.94 5.12-5.427 9-10.819 9-5.392 0-9.878-3.88-10.819-9zM12 17a5 5 0 1 0 0-10 5 5 0 0 0 0 10zm0-2a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/></svg></a>
			
			<a href="{{route('role.delete', $role->id)}}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M7 6V3a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v3h5v2h-2v13a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V8H2V6h5zm6.414 8l1.768-1.768-1.414-1.414L12 12.586l-1.768-1.768-1.414 1.414L10.586 14l-1.768 1.768 1.414 1.414L12 15.414l1.768 1.768 1.414-1.414L13.414 14zM9 4v2h6V4H9z"/></svg></a>
			<a class="btn btn-primary" href="{{route('permission.assign.form',$role->id)}}"><i class="fas fa-eye"></i>
                Assign Permission</a> 
		</td>
	



	</tr>
	@endforeach
	  </table>


	  
    
@endsection