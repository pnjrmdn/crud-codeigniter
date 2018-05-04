# Selamat Datang di Tutorial membuat CRUD di CodeIgniter
> Nama Saya Panji Ramadanu dari Program Studi Sistem Informasi di itutitut Teknologi Kalimantan salam kenal :)

## Sedikit Penjelesan Mengenai CodeIgniter
**CodeIgniter** sendiri adalah sebuah web application network yang bersifat open source yang digunakan untuk membangun aplikasi php dinamis. 

**CodeIgniter** menjadi sebuah framework PHP dengan model MVC `(Model, View, Controller)` untuk membangun website dinamis dengan menggunakan PHP yang dapat mempercepat pengembang untuk membuat sebuah aplikasi web. Selain ringan dan cepat, CodeIgniter juga memiliki dokumentasi yang super lengkap disertai dengan contoh implementasi kodenya. Dokumentasi yang lengkap inilah yang menjadi salah satu alasan kuat mengapa banyak orang memilih CodeIgniter sebagai framework pilihannya. Karena kelebihan-kelebihan yang dimiliki oleh CodeIgniter, pembuat PHP Rasmus Lerdorf memuji CodeIgniter di frOSCon (Agustus 2008) dengan mengatakan bahwa dia menyukai CodeIgniter karena “it is faster, lighter and the least like a framework.”

Beberapa bagian dari **CodeIgniter** dan penjelasannya sebagai berikut:

-   **Index.php**: Index.php disini berfungsi sebagai file pertama dalam program yang akan dibaca oleh program.
-   **The Router**: Router akan memeriksa HTTP request untuk menentukan hal apa yang harus dilakukan oleh program.
-   **Cache File**: Apabila dalam program sudah terdapat “cache file” maka file tersebut akan langsung dikirim ke browser. File cache inilah yang dapat membuat sebuah website dapat di buka dengan lebih cepat. Cache file dapat melewati proses yang sebenarnya harus dilakukan oleh program codeigniter.
-   **Security**: Sebelum file controller di load keseluruhan, HTTP request dan data yang disubmit oleh user akan disaring terlebih dahulu melalui fasilitas security yang dimiliki oleh codeigniter.
-   **Controller**: Controller akan membuka file model, core libraries, helper dan semua resources yang dibutuhkan dalam program tersebut.
-   **View**: Hal yang terakhir akan dilakukan adalah membaca semua program yang ada dalam view file dan mengirimkannya ke browser supaya dapat dilihat. Apabila file view sudah ada yang di “cache” maka file view baru yang belum ter-cache akan mengupdate file view yang sudah ada.
**StackEdit**. If you want to learn about StackEdit, you can read me. If you want to play with Markdown, you can edit me. If you have finished with me, you can just create new files by opening the **file explorer** on the left corner of the navigation bar.

# Tutorial 
Sedikit pencerahan untuk memakai **CodeIgniter** ini kalian harus sudah bisa menggunakan [XAMPP fitur PhpMyAdmin dan Database](https://www.duniailkom.com/tutorial-php-mysql-cara-menjalankan-mysql-dan-php-menggunakan-xampp/) jika belum bisa silahkan klik tautan tersebut. Langkah pertama kalian buat folder pada direktori xampp kalian, defaultnya biasa pada alamat direktori **C:\xampp\htdocs** sebagai tempat projek CodeIgniter itu berada kalau saya menamainya dengan nama **tokodistrodb**

## Tutorial Code bagian CONTROLLER
**Nama File : Pegawai.php**
> <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
Bagian kode ini merupakan bagian header yang terdapat pada file yang mengindikasikan file ini berformat bahasa pemograman php

>$this->load->model('PegawaiModel'); // Load PegawaiModel ke controller ini}

Untuk melakukan load controller ini ketika dipanggil dengan bagian method autoload

> public function index(){
		$data['pegawai'] = $this->PegawaiModel->view();
		$this->load->view('pegawai/index', $data);}
		
Merupakan method yang digunakan untuk mengakses model dan menampilkan laman halaman bagian view dengan nama file index.php

> 	public function tambah(){
		if( $ this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
			if($this->PegawaiModel->validation("save")){ // Jika validasi sukses atau hasil validasi adalah TRUE
				$this->PegawaiModel->save(); // Panggil fungsi save() yang ada di PegawaiModel.php
				redirect('pegawai');}}
> 	$ data['pegawai'] = $ this-> PegawaiModel -> view_by ($KdPegawai);
		$this->load->view('pegawai/form_ubah', $data);
	}
		
Merupakan method tambah pada bagian fungsi ketika user akan menambakan isi tabel pada database MySql

> public function hapus($KdPegawai){
		$ this->PegawaiModel->delete($KdPegawai); // Panggil fungsi delete() yang ada di PegawaiModel.php
		redirect('pegawai');}

Merupakan method yang digunakan untuk menghapus data yang ada di database MySql




## Akan dilanjutkan segera mungkin
