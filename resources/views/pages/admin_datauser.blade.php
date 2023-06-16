<!DOCTYPE html>
<html lang="en" class="antialiased">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title> Admin | Data User </title>
	<script src="https://cdn.tailwindcss.com"></script>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<link href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" rel=" stylesheet">
	<!--Replace with your tailwind.css once created-->


	<!--Regular Datatables CSS-->
	<link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
	<!--Responsive Extension Datatables CSS-->
	<link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">

	<style>
		/*Overrides for Tailwind CSS */

		/*Agar tabel berada di tengah halaman*/
		/*Align center text in th*/
		.centered-header {
			text-align: center;
		}

		/*Form fields*/
		.dataTables_wrapper select,
		.dataTables_wrapper .dataTables_filter input {
			color: #4a5568;
			/*text-gray-700*/
			padding-left: 1rem;
			/*pl-4*/
			padding-right: 1rem;
			/*pl-4*/
			padding-top: .4rem;
			/*pl-2*/
			padding-bottom: .4rem;
			/*pl-2*/
			line-height: 1.25;
			/*leading-tight*/
			border-width: 2px;
			/*border-2*/
			border-radius: .45rem;
			border-color: #edf2f7;
			/*border-gray-200*/
			background-color: #dadee2;
			/*bg-gray-200*/
		}

		/*Row Hover*/
		table.dataTable.hover tbody tr:hover,
		table.dataTable.display tbody tr:hover {
			background-color: #ebf4ff;
			/*bg-indigo-100*/
		}

		/*Pagination Buttons*/
		.dataTables_wrapper .dataTables_paginate .paginate_button {
			font-weight: 700;
			/*font-bold*/
			border-radius: .25rem;
			/*rounded*/
			border: 1px solid transparent;
			/*border border-transparent*/
		}

		/*Pagination Buttons - Current selected */
		.dataTables_wrapper .dataTables_paginate .paginate_button.current {
			color: #fff !important;
			/*text-white*/
			box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
			/*shadow*/
			font-weight: 700;
			/*font-bold*/
			border-radius: .25rem;
			/*rounded*/
			background: #667eea !important;
			/*bg-indigo-500*/
			border: 1px solid transparent;
			/*border border-transparent*/
		}

		/*Pagination Buttons - Hover */
		.dataTables_wrapper .dataTables_paginate .paginate_button:hover {
			color: #fff !important;
			/*text-white*/
			box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
			/*shadow*/
			font-weight: 700;
			/*font-bold*/
			border-radius: .25rem;
			/*rounded*/
			background: #667eea !important;
			/*bg-indigo-500*/
			border: 1px solid transparent;
			/*border border-transparent*/
		}

		/*Add padding to bottom border */
		table.dataTable.no-footer {
			border-bottom: 1px solid #e2e8f0;
			/*border-b-1 border-gray-300*/
			margin-top: 0.75em;
			margin-bottom: 0.75em;
		}

		/*Change colour of responsive icon*/
		table.dataTable.dtr-inline.collapsed>tbody>tr>td:first-child:before,
		table.dataTable.dtr-inline.collapsed>tbody>tr>th:first-child:before {
			background-color: #667eea !important;
			/*bg-indigo-500*/
		}
	</style>



</head>

<body class="hero bg-[#F6F1F1]">
	<div>
		<nav class="flex justify-between bg-[#FFD700] px-2">
			<div class="flex flex-row container">
				<a href="" class="font-bold px-3 py-2 text-slate-700 rounded-lg hover:bg-slate-100 hover:text-slate-900"><img src="{{ asset('images/logoUnsoed.png') }}" class="w-12 h-12"></a>
				<a href="" class="font-bold px-3 py-2 my-auto text-slate-700 rounded-lg hover:bg-slate-100 hover:text-slate-900">
					<p class="text-2xl">Tanya Unsoed Aja!</p>
				</a>
			</div>
			<div class="flex container justify-end">
				<a href="/datauser" class="flex flex-row bg-gradient-to-r from-green-400 to-blue-500 rounded-xl my-2 p-2">
					<p class="text-xl text-white font-semibold">Data User</p>
				</a>
				<a href="/datapesan" class="font-bold px-3 py-2 my-auto text-slate-700 rounded-lg hover:bg-slate-100 hover:text-slate-900">
					<p class="text-2xl">Data Pesan</p>
				</a>
				<a href="/adminChatroom/0" class="font-bold px-3 py-2 my-auto text-slate-700 rounded-lg hover:bg-slate-100 hover:text-slate-900">
					<p class="text-2xl">Chat Room</p>
				</a>
				<a href="/adminLogout" class="flex flex-row bg-red-600 rounded-xl my-2 p-2">
					<button type="submit" class="">
						<p class="text-white">Logout</p>
					</button><img src="{{ asset('icon/logout.png') }}" class="w-8 h-8 ml-2">
				</a>
			</div>
		</nav>
	</div>
	<div class="flex mt-5">

		<body class="bg-gray-100 text-gray-900 tracking-wider leading-normal">


			<!--Container-->
			<div class="container w-full md:w-5/5 xl:w-4/5  mx-auto px-10">

				<!--Title-->
				<h1 class="flex items-center font-sans font-bold break-normal text-black-500 px-2 py-8 text-xl md:text-2xl">
					Data User
				</h1>

				<!--Card-->
				<div id='recipients' class="p-4 mt-2 lg:mt-0 rounded shadow bg-white">


					<table id="example" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
						<thead>
							<tr bgcolor="#A9A9A9">
								<th class="centered-header" data-priority="1">No</th>
								<th class="centered-header" data-priority="2">ID_User</th>
								<th class="centered-header" data-priority="3">Username</th>
								<th class="centered-header" data-priority="4">Password</th>
								<th class="centered-header" data-priority="5">Email</th>
								<th class="centered-header" data-priority="6">NIM</th>
								<th class="centered-header" data-priority="7">Alamat</th>
								<th class="centered-header" data-priority="8">Semester</th>
								<th class="centered-header" data-priority="9">Created At</th>
								<th class="centered-header" data-priority="10">Updated At</th>
							</tr>
						</thead>
						<tbody>
							@foreach($userData as $user)
							<tr>
								<td>{{$number++}}</td>
								<td>{{$user->id_user}} </td>
								<td>{{$user->username}}</td>
								<td>{{$user->password}}</td>
								<td>{{$user->email}}</td>
								<td>{{$user->nim}}</td>
								<td>{{$user->alamat}}</td>
								<td>{{$user->semester}}</td>
								<td>{{$user->created_at}}</td>
								<td>{{$user->updated_at}}</td>
							</tr>
							@endforeach

						</tbody>

					</table>


				</div>
				<!--/Card-->


			</div>
			<!--/container-->





			<!-- jQuery -->
			<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

			<!--Datatables -->
			<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
			<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
			<script>
				$(document).ready(function() {

					var table = $('#example').DataTable({
							responsive: true
						})
						.columns.adjust()
						.responsive.recalc();
				});
			</script>

		</body>

</html>