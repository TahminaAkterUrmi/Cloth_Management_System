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
		<h2>Sellers List</h2>
	  </div>
	  
	  <br>
	  {{-- <a class="btn btn-primary" href="{{route('admin.user.create')}}" role="button">Add</a> --}}
	  <table id="customers">
		<tr>
		  <th>ID</th>
		  <th>Name</th>
		  <th>Email</th>
		  <th>Address</th>
		  <th>Contact</th>
		  <th>Action</th>
	  
		</tr>
	 @foreach ($sellers as $key=>$seller)
	 <tr>
		<th scope="row">{{$key+1}}</th>
		  <td>{{$seller->name}}</td>
		  <td>{{$seller->email}}</td>
		  <td>{{$seller->address}}</td>
		  <td>{{$seller->contact}}</td>
		  <td><button type="submit" class="btn btn-danger">Delete</button></td>
	 </tr>
		@endforeach
	
	  </table>

	  <br>
	  {{-- <a href="{{route('seller.create')}}" class="btn btn-primary">Add New Seller</a> --}}
@endsection
@push('more_script')
<script type="text/javascript">

$(function () {
            var table = $('.myTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('sellers.alldata') }}",
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                    {data: 'name', name: 'name'},
                    {data: 'email', name: 'email'},
                    {data: 'address', name: 'address'},
					{data: 'contact', name: 'contact'},
                    {
                        data: 'action',
                        name: 'action',
                        orderable: true,
                        searchable: true
                    },
                ]
            });
        });

</script>
	
@endpush
