<!-- Header -->
<div class="w-screen h-[450px] bg-indigo-600">
	<div class="px-4 mx-auto max-w-screen-xl text-center pt-16">
		<h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">Master Penduduk</h1>
		<p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">Here at Flowbite we focus on markets where technology, innovation, and capital can unlock long-term value and drive economic growth.</p>
	</div>
</div>

<!-- Main App -->
<div class="container bg-white mx-auto min-h-96 h-auto min-w-96 w-full -mt-36 rounded-xl shadow dark:bg-slate-800 border-slate-700 border">

	<!-- Main modal -->
	<div id="create-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
		<div class="relative w-full max-w-md max-h-full">
			<!-- Modal content -->
			<div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
				<button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="create-modal">
					<svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
						<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
					</svg>
					<span class="sr-only">Close modal</span>
				</button>
				<div class="px-6 py-6 lg:px-8">
					<h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Tambah Data Penduduk</h3>
					<form class="space-y-6" action="<?php echo site_url('Penduduk/Insert') ?>" method="POST">
					<div>
							<label for="nik" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NIK</label>
							<input type="text" name="nik" id="nik" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="" required>
						</div>
						<div>
							<label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
							<input type="text" name="nama" id="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="" required>
						</div>
						<div class="grid grid-cols-2 gap-2">
							<div>
								<label for="tempat_lahir" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tempat Lahir</label>
								<input type="text" name="tempat_lahir" id="tempat_lahir" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="" required>
							</div>
							<div>
								<label for="tgl_lahir" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Lahir</label>
								<input type="date" name="tgl_lahir" id="tgl_lahir" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="" required>
							</div>
						</div>
						<div>
							<label for="status1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status Pernikahan</label>
							<select name="status1" id="status1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
								<option value="" selected disabled>Pilih Status Pernikahan</option>		
								<option value="menikah">Menikah</option>
								<option value="belum_menikah">Belum Menikah</option>
								<option value="janda">Janda</option>
								<option value="duda">Duda</option>
							</select>
						</div>
						<div>
							<label for="status2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis Kelamin</label>
							<select name="status2" id="status2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
								<option value="" selected disabled>Pilih Jenis Kelamin</option>		
								<option value="laki-laki">Laki Laki</option>
								<option value="perempuan">Perempuan</option>
							</select>
						</div>
						<div>
							<label for="status3" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status Keluarga</label>
							<select name="status3" id="status3" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
								<option value="" selected disabled>Pilih Status Keluarga</option>		
								<option value="kepala_keluarga">Kepala Keluarga</option>
								<option value="istri">Istri</option>
								<option value="anak">Anak</option>
								<option value="orang_tua">Orang Tua</option>
								<option value="saudara">Saudara</option>
							</select>
						</div>
						<div>
							<label for="kd_blok" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Blok Kavling</label>
							<select name="kd_blok" id="kd_blok" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
								<option value="" selected disabled>Pilih Kavling</option>		
								<?php foreach ($select as $item) : ?>
									<option value="<?= $item->kd_blok; ?>"><?= $item->nama_blok; ?></option>		
								<?php endforeach ?>
							</select>
						</div>
						<button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Tambah Data</button>
						<!-- <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
							Not registered? <a href="#" class="text-blue-700 hover:underline dark:text-blue-500">Create account</a>
						</div> -->
					</form>
				</div>
			</div>
		</div>
	</div> 

	<div id="update-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
		<div class="relative w-full max-w-md max-h-full">
			<!-- Modal content -->
			<div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
				<button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="update-modal">
					<svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
						<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
					</svg>
					<span class="sr-only">Close modal</span>
				</button>
				<div class="px-6 py-6 lg:px-8">
					<h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Update Data Penduduk</h3>
					<form class="space-y-6" action="<?php echo site_url('Penduduk/Update') ?>" method="POST">
						<input type="hidden" name="id" id="id" hidden class="hidden bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="" required>
						<div>
							<label for="nik" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NIK</label>
							<input type="text" name="nik" id="nik" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="" required>
						</div>
						<div>
							<label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
							<input type="text" name="nama" id="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="" required>
						</div>
						<div class="grid grid-cols-2 gap-2">
							<div>
								<label for="tempat_lahir" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tempat Lahir</label>
								<input type="text" name="tempat_lahir" id="tempat_lahir" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="" required>
							</div>
							<div>
								<label for="tgl_lahir" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Lahir</label>
								<input type="date" name="tgl_lahir" id="tgl_lahir" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="" required>
							</div>
						</div>
						<div>
							<label for="status1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status Pernikahan</label>
							<select name="status1" id="status1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
								<option value="" selected disabled>Pilih Status Pernikahan</option>		
								<option value="menikah">Menikah</option>
								<option value="belum_menikah">Belum Menikah</option>
								<option value="janda">Janda</option>
								<option value="duda">Duda</option>
							</select>
						</div>
						<div>
							<label for="status2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis Kelamin</label>
							<select name="status2" id="status2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
								<option value="" selected disabled>Pilih Jenis Kelamin</option>		
								<option value="laki-laki">Laki Laki</option>
								<option value="perempuan">Perempuan</option>
							</select>
						</div>
						<div>
							<label for="status3" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status Keluarga</label>
							<select name="status3" id="status3" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
								<option value="" selected disabled>Pilih Status Keluarga</option>		
								<option value="kepala_keluarga">Kepala Keluarga</option>
								<option value="istri">Istri</option>
								<option value="anak">Anak</option>
								<option value="orang_tua">Orang Tua</option>
								<option value="saudara">Saudara</option>
							</select>
						</div>
						<div>
							<label for="kd_blok" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Blok Kavling</label>
							<select name="kd_blok" id="kd_blok" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
								<option value="" selected disabled>Pilih Kavling</option>		
								<?php foreach ($select as $item) : ?>
									<option value="<?= $item->kd_blok; ?>"><?= $item->nama_blok; ?></option>		
								<?php endforeach ?>
							</select>
						</div>
						<!-- <div>
							<label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
							<input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@company.com" required>
						</div>
						<div>
							<label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your password</label>
							<input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
						</div> -->
						<!-- <div class="flex justify-between">
							<div class="flex items-start">
								<div class="flex items-center h-5">
									<input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-600 dark:border-gray-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" required>
								</div>
								<label for="remember" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Remember me</label>
							</div>
							<a href="#" class="text-sm text-blue-700 hover:underline dark:text-blue-500">Lost Password?</a>
						</div> -->
						<button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update Data</button>
						<!-- <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
							Not registered? <a href="#" class="text-blue-700 hover:underline dark:text-blue-500">Create account</a>
						</div> -->
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- Delete Modal -->
	<div id="delete-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
		<div class="relative p-4 w-full max-w-md h-full md:h-auto">
			<!-- Modal content -->
			<div class="relative p-4 text-center bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
				<button type="button" class="text-gray-400 absolute top-2.5 right-2.5 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="delete-modal">
					<svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
					<span class="sr-only">Close modal</span>
				</button>
				<svg class="text-gray-400 dark:text-gray-500 w-11 h-11 mb-3.5 mx-auto" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
				<p class="mb-4 text-gray-500 dark:text-gray-300">Are you sure you want to delete this item?</p>
				<div class="flex justify-center items-center space-x-4">
					<button data-modal-toggle="delete-modal" type="button" class="py-2 px-3 text-sm font-medium text-gray-500 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-primary-300 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
						No, cancel
					</button>
					<form action="<?php echo site_url('Penduduk/Delete') ?>" method="post">
						<input type="hidden" name="id_delete">
						<button type="submit" class="py-2 px-3 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-500 dark:hover:bg-red-600 dark:focus:ring-red-900">
							Yes, I'm sure
						</button>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- Table -->
	<div class="px-12 mb-10">
		<div class="relative overflow-x-auto shadow-md sm:rounded-lg pb-8">
			<table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
				<caption class="p-5 pl-0 pt-8 pb-2 text-lg font-semibold text-left text-gray-900 bg-white dark:text-white dark:bg-gray-800">
					<button data-modal-target="create-modal" data-modal-toggle="create-modal" type="button" class="relative inline-flex items-center justify-center p-0.5 mb-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-green-400 to-blue-600 group-hover:from-green-400 group-hover:to-blue-600 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800">
						<span class="relative px-3 py-1.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
							Tambah Data
						</span>
					</button>
				</caption>
				<thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
					<tr class="text-center">
						<th scope="col" class="px-6 py-3">
							NIK
						</th>
						<th scope="col" class="px-6 py-3">
							Nama
						</th>
						<th scope="col" class="px-6 py-3">
							Tempat, Tanggal Lahir
						</th>
						<th scope="col" class="px-6 py-3">
							Status Pernikahan
						</th>
						<th scope="col" class="px-6 py-3">
							Jenis Kelamin
						</th>
						<th scope="col" class="px-6 py-3">
							Status Keluarga
						</th>
						<th scope="col" class="px-6 py-3">
							Blok Kavling
						</th>
						<th scope="col" class="px-6 py-3">
							Aksi
						</th>
					</tr>
				</thead>
				<tbody>
					<!-- <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
						<td class="px-6 py-4">
							0064193207
						</td>
						<th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
							Radja Aulia Al Ramdani
						</th>
						<td class="px-6 py-4">
							Kota Bogor
						</td>
						<td class="px-6 py-4 text-right">
							<a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
						</td>
					</tr> -->
					<?php foreach ($query as $row) : ?>
						<tr class="bg-white text-center border-b dark:bg-gray-800 dark:border-gray-700">
							<td class="px-6 py-4">
								<?= $row->nik; ?>
							</td>
							<th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
								<?= $row->nama; ?>
							</th>
							<td class="px-6 py-4">
								<?= $row->tempat_lahir; ?>, <?= $row->tgl_lahir; ?>
							</td>
							<td class="px-6 py-4">
								<?= $row->status1; ?>
							</td>
							<td class="px-6 py-4">
								<?= $row->status2; ?>
							</td>
							<td class="px-6 py-4">
								<?= $row->status3; ?>
							</td>
							<td class="px-6 py-4">
								<?= $row->nama_blok; ?>
							</td>
							<!-- <td class="px-6 py-4">
								
							</td> -->
							<td class="px-6 py-4 text-center">
								<button  onclick="populateUpdateModal(this);" data-json="<?php echo htmlspecialchars(json_encode($row), ENT_QUOTES, 'UTF-8'); ?>" data-modal-target="update-modal" data-modal-toggle="update-modal"  class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-teal-300 to-lime-300 group-hover:from-teal-300 group-hover:to-lime-300 dark:text-white dark:hover:text-gray-900 focus:ring-4 focus:outline-none focus:ring-lime-200 dark:focus:ring-lime-800">
									<span class="relative p-2 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
										<svg class="w-3 h-3 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
											<path d="M12.687 14.408a3.01 3.01 0 0 1-1.533.821l-3.566.713a3 3 0 0 1-3.53-3.53l.713-3.566a3.01 3.01 0 0 1 .821-1.533L10.905 2H2.167A2.169 2.169 0 0 0 0 4.167v11.666A2.169 2.169 0 0 0 2.167 18h11.666A2.169 2.169 0 0 0 16 15.833V11.1l-3.313 3.308Zm5.53-9.065.546-.546a2.518 2.518 0 0 0 0-3.56 2.576 2.576 0 0 0-3.559 0l-.547.547 3.56 3.56Z"/>
											<path d="M13.243 3.2 7.359 9.081a.5.5 0 0 0-.136.256L6.51 12.9a.5.5 0 0 0 .59.59l3.566-.713a.5.5 0 0 0 .255-.136L16.8 6.757 13.243 3.2Z"/>
										</svg>
									</span>
								</button>
								<button onclick="handleDeleteButtonClick(this);" data-json="<?php echo htmlspecialchars(json_encode($row), ENT_QUOTES, 'UTF-8'); ?>" data-modal-target="delete-modal" data-modal-toggle="delete-modal" type="button" class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-pink-500 to-orange-400 group-hover:from-pink-500 group-hover:to-orange-400 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800">
									<span class="relative p-2 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
										<svg class="w-3 h-3 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
											<path d="M17 4h-4V2a2 2 0 0 0-2-2H7a2 2 0 0 0-2 2v2H1a1 1 0 0 0 0 2h1v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V6h1a1 1 0 1 0 0-2ZM7 2h4v2H7V2Zm1 14a1 1 0 1 1-2 0V8a1 1 0 0 1 2 0v8Zm4 0a1 1 0 0 1-2 0V8a1 1 0 0 1 2 0v8Z"/>
										</svg>
									</span>	
								</button>
							</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>

</div>
<script>
	// Add an event listener to the button
    // document.querySelector('[data-modal-toggle="delete-modal"]').addEventListener('click', function () {
    //     // Get the JSON data from the clicked button
    //     var jsonData = this.getAttribute('data-json');
    //     // Parse the JSON data into a JavaScript object
    //     var data = JSON.parse(jsonData);
    //     // Get the hidden input element
    //     var nikDeleteInput = document.querySelector('input[name="nikDelete"]');
    //     // Set the value of the input field to the desired data from the JSON object
	// 	console.log(no_blok);
    //     nikDeleteInput.value = data.no_blok; // Replace 'yourDataKey' with the actual key from your JSON data
    // });
	function handleDeleteButtonClick(button) {
		var jsonData = button.getAttribute('data-json');
		var data = JSON.parse(jsonData);
		var DeleteInput = document.querySelector('input[name="id_delete"]');
		DeleteInput.value = data.kd_penduduk; // Replace 'no_blok' with the actual key from your JSON data
		console.log(DeleteInput.value);
	}

	function populateUpdateModal(button) {
		var jsonData = button.getAttribute('data-json');
		var data = JSON.parse(jsonData);

		// Select the update modal by its ID
		var updateModal = document.getElementById('update-modal');
		
		// Find the input fields within the update modal using querySelector
		var id = updateModal.querySelector('input[name="id"]');
		var nik = updateModal.querySelector('input[name="nik"]');
		var nama = updateModal.querySelector('input[name="nama"]');
		var tempat_lahir = updateModal.querySelector('input[name="tempat_lahir"]');
		var tgl_lahir = updateModal.querySelector('input[name="tgl_lahir"]');
		var status1 = updateModal.querySelector('select[name="status1"]');
		var status2 = updateModal.querySelector('select[name="status2"]');
		var status3 = updateModal.querySelector('select[name="status3"]');
		var kd_blok = updateModal.querySelector('select[name="kd_blok"]');
		// var statusSelect = updateModal.querySelector('select[name="status"]');
		
		// Populate the fields with data from the JSON
		id.value = data.kd_penduduk;
		nik.value = data.nik;
		nama.value = data.nama;
		tempat_lahir.value = data.tempat_lahir;
		tgl_lahir.value = data.tgl_lahir;
		status1.value = data.status1;
		status2.value = data.status2;
		status3.value = data.status3;
		kd_blok.value = data.kd_blok;
		
		// Show the update modal
		// updateModal.style.display = 'block';
	}

</script>


