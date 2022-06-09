## Praktikum Pemprograman Web
 Nama  : Komarudin<p>
 NIM   : 312010068<p>
 Kelas : TI.20.D.1<p>
### Praktikum 11 : PHP Framework menggunakan Codeigniter
### Langkah-langkah<p>
### Aktifkan Ektensi<p>
  Aktifkan ektensi <p>melalui aplikasi XAMPP pilih menu config pada bagian Apache 
 ![image](https://user-images.githubusercontent.com/101499377/172617459-c7f6de07-04f1-443f-9f3e-4874712739b9.png)
Lalu pada bagian extention, hilangkan tanda ; (titik koma) pada ekstensi yang akan diaktifkan. Kemudian simpan ke<p>mbali filenya dan restart Apache web server.
  ![image](https://user-images.githubusercontent.com/101499377/172618178-f956abed-c53a-4b4a-bdf2-dea8390551b7.png)<p>
### Instalasi CodeIgniter 4<p>
  - Codeigniter dapat didownload dari website https://codeigniter.com/download<p>
  - Extrak file zip Codeigniter ke direktori htdocs/lab11_php_ci.<p>
- Ubah nama directory framework-4.x.xx menjadi ci4.<p>
- Buka browser dengan alamat http://localhost/lab11_ci/ci4/public/ Untuk melakukan instalasi Codeigniter 4 dapat dilakukan dengan dua cara, yaitu cara manual dan menggunakan composer. Pada praktikum ini kita menggunakan cara manual seperti berikut.<p>
 ![image](https://user-images.githubusercontent.com/101499377/172619467-9df34399-cd07-4d5e-a6ef-faa73c746d5a.png)<p>
### Menjalankan CLI (Command Line Interface)
Codeigniter 4 menyediakan CLI untuk mempermudah proses development. Untuk mengakses CLI buka terminal/command prompt.Arahkan lokasi direktori sesuai dengan direktori kerja project dibuat (xampp/htdocs/lab11_ci/ci4/)<p>
 ![image](https://user-images.githubusercontent.com/101499377/172622853-2b52a6e6-06ee-404a-a229-a3a459eba3ac.png)<p>
dan perintah untuk menjalankan CLI Codeigniter adalah : php spark
 ![image](https://user-images.githubusercontent.com/101499377/172623410-2f7995ca-27b8-442e-a81e-13a3e948e0aa.png)<p>
### Mengaktifkan Mode Debugging
  Codeigniter 4 menyediakan fitur debugging untuk memudahkan developer untuk 
mengetahui pesan error apabila terjadi kesalahan dalam membuat kode program.Secara default fitur ini belum aktif. Ketika terjadi error pada aplikasi akan ditampilkan pesan kesalahan seperti berikut.<p>
![image](https://user-images.githubusercontent.com/101499377/172628125-b25fc05d-c118-44ba-ab82-3e428896a1e1.png)<p>
Semua jenis error akan ditampilkan sama. Untuk memudahkan mengetahui jenis errornya, maka perlu diaktifkan mode debugging dengan mengubah nilai konfigurasi pada environment variable.Ubah nama file env menjadi .env kemudian buka file tersebut dan ubah nilai variable 
CI_ENVIRINMENT menjadi development.<p>
![image](https://user-images.githubusercontent.com/101499377/172628654-a16ce9e1-e0a2-4f4b-a65e-41e459c89314.png)<p>
dan hasil nya menjadi eror seperti berikut :<p>
![image](https://user-images.githubusercontent.com/101499377/172629940-8e1b763d-a472-4e2a-b603-5f325331e04f.png)<p>
### Membuat Route Baru.<p>
 Tambahkan kode berikut di dalam Routes.php<p>
![image](https://user-images.githubusercontent.com/101499377/172631770-cdc119ff-1f1e-4621-a810-3c534831679b.png)<p>
### Membuat Controller.<p>
 Selanjutnya adalah membuat Controller Page. Buat file baru dengan nama page.php pada direktori Controller kemudian isi kodenya seperti berikut.<p>
  ![image](https://user-images.githubusercontent.com/101499377/172675208-1a86a6da-ea68-479b-8381-f9c47c49bac5.png)<p>
Selanjutnya coba akses route yang telah dibuat dengan mengakses alamat url http://localhost:8080/about<p>
  ![image](https://user-images.githubusercontent.com/101499377/172675518-b5bdccbe-a158-459a-862a-6606652a9cc6.png)<p>
   Ketika diakses akan mucul tampilan error 404 file not found, itu artinya file/page tersebut tidak ada. Untuk dapat mengakses halaman tersebut, harus dibuat terlebih dahulu Contoller yang sesuai dengan routing yang dibuat yaitu Contoller Page.<p>
### Membuat Controller.<p>
 Selanjutnya adalah membuat Controller Page. Buat file baru dengan nama page.php pada direktori Controller kemudian isi kodenya seperti berikut.<p>
![image](https://user-images.githubusercontent.com/101499377/172679776-76411fab-9e09-459c-b514-ec5a19f4b3fb.png)<p>
Selanjutnya refresh Kembali browser, maka akan ditampilkan hasilnya yaotu halaman sudah dapat diakses.<p>
![image](https://user-images.githubusercontent.com/101499377/172680128-1ccfe5ed-e7ac-470b-a3ac-3a84a03ad1ab.png)<p>
 ### Auto Routing.<p>
 Secara default fitur autoroute pada Codeiginiter sudah aktif. Untuk mengubah status autoroute dapat mengubah nilai variabelnya. Untuk menonaktifkan ubah nilai true menjadi false.<p>
![image](https://user-images.githubusercontent.com/101499377/172680887-8db789f3-4d1d-411b-8cde-972423705502.png)<p>
Method ini belum ada pada routing, sehingga cara mengaksesnya dengan menggunakan alamat: http://localhost:8080/page/tos<p>
![image](https://user-images.githubusercontent.com/101499377/172681031-07b796be-3f01-4e8e-9a28-03d65a26d354.png)<p>
### Membuat View.<p>
Selanjutnya adalam membuat view untuk tampilan web agar lebih menarik. Buat file baru dengan nama about.php pada direktori view (app/view/about.php) kemudian isi kodenya seperti berikut.<p>
Ubah method about pada class Controller Page menjadi seperti berikut:<p>
![image](https://user-images.githubusercontent.com/101499377/172681877-36c75d86-68dc-4fd4-8d32-4be144309d28.png)<p>
Kemudian lakukan refresh pada halaman tersebut.<p>
 ![image](https://user-images.githubusercontent.com/101499377/172684713-929d6499-09a7-45e8-ad30-1c1ffd607316.png)<p>
 ### Membuat Layout Web dengan CSS.<p>
  Pada dasarnya layout web dengan css dapat diimplamentasikan dengan mudah pada codeigniter. Yang perlu diketahui adalah, pada Codeigniter 4 file yang menyimpan asset css dan javascript terletak pada direktori public.<p>
Buat file css pada direktori public dengan nama style.css (copy file dari praktikum lab4_layout. Kita akan gunakan layout yang pernah dibuat pada praktikum 4.<p>
![image](https://user-images.githubusercontent.com/101499377/172685503-7615778e-e46e-4fa6-98ab-1856b5fe35d0.png)<p>
 Kemudian buat folder template pada direktori view kemudian buat file header.php dan footer.php<p>
File app/view/template/header.php<p>
![image](https://user-images.githubusercontent.com/101499377/172686162-e616ad93-9d97-4ec7-9e76-66e8536fc846.png)<p>
File app/view/template/footer.php<p>
 ![image](https://user-images.githubusercontent.com/101499377/172686450-88672565-8193-4ae9-87cf-b8a80148ef0a.png)<p>
Kemudian ubah file app/view/about.php seperti berikut.<p>
![image](https://user-images.githubusercontent.com/101499377/172687282-d3bbf842-7a9a-4950-9e06-1070d699666c.png)<p>
dan ini hasilnya<p>
 ![image](https://user-images.githubusercontent.com/101499377/172839688-6721a70d-d335-442b-a4e6-a36c93ddbf32.png)
### PERTANYAAN DAN TUGAS
Lengkapi kode program untuk menu lainnya yang ada pada Controller Page, sehingga semua link pada navigasi header dapat menampilkan tampilan dengan layout yang sama.<p>
