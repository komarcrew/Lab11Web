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
![image](https://user-images.githubusercontent.com/101499377/172846002-a728d558-d8c2-48ef-adfb-ceeb39e33711.png)<p>
 ![image](https://user-images.githubusercontent.com/101499377/172846058-fb342773-d36c-4cf2-acae-04564012c1a7.png)
## Praktikum 12: Framework Lanjutan (CRUD)
 Untuk memulai membuat aplikasi CRUD sederhana, yang perlu disiapkan adalah database server menggunakan MySQL. Pastikan MySQL Server sudah dapat dijalankan melalui XAMPP.<p>
### Membuat Database: Studi Kasus Data Artikel<p>
 ![image](https://user-images.githubusercontent.com/101499377/173872336-2f0651f3-efa0-483e-98de-5962d79d0809.png)
### Konfigurasi koneksi database<p>
 Selanjutnya membuat konfigurasi untuk menghubungkan dengan database server. Konfigurasi dapat dilakukan dengan dua cara, yaitu pada file app/config/database.php atau menggunakan file .env. Pada praktikum ini kita gunakan konfigurasi pada file .env.Lalu cari pada line DATABASE dan hilangkan tanda pagar (#)<p>
![image](https://user-images.githubusercontent.com/101499377/173873603-d430c5db-cb31-4df4-b429-2c26495d4434.png)
### Membuat Model.
 Selanjutnya adalah membuat Model untuk memproses data Artikel. Buat file baru pada direktori app/Models dengan nama ArtikelModel.php<p>
  ![image](https://user-images.githubusercontent.com/101499377/173874442-3ce73666-cbc2-4d17-90cc-c7e71614fac2.png)
### Membuat Controller.
  Buat Controller baru dengan nama Artikel.php pada direktori app/Controllers.
  ![image](https://user-images.githubusercontent.com/101499377/173874964-81c4fb38-bd09-44fa-bc9a-5c9da7669f1a.png)
### Membuat View.
  Buat direktori baru dengan nama artikel pada direktori app/views, kemudian buat file baru dengan nama index.php.<p>
![image](https://user-images.githubusercontent.com/101499377/173877203-72692f37-cffc-4222-b79e-72414cba0f3d.png)<p>
Selanjutnya buka browser kembali, dengan mengakses url http://localhost:8080/artikel<p>
  ![image](https://user-images.githubusercontent.com/101499377/173877404-66456ef7-c1e6-4ce6-9a12-d0c9c9371e2e.png)
Belum ada data yang diampilkan. Kemudian coba tambahkan beberapa data pada database agar dapat ditampilkan datanya.<p>
 ![image](https://user-images.githubusercontent.com/101499377/173878120-026df1b2-9294-4325-817d-e47fb5f571b4.png)
### Membuat Tampilan Detail Artikel.
 Tampilan pada saat judul berita di klik maka akan diarahkan ke halaman yang berbeda. Tambahkan fungsi baru pada Controller Artikel dengan nama view().<p>
 ![image](https://user-images.githubusercontent.com/101499377/173880931-2e9da6a7-e288-467d-bfb9-aaa3b199337b.png)
### Membuat View Detail.
  Buat view baru untuk halaman detail dengan nama app/views/artikel/detail.php.<p>
   ![image](https://user-images.githubusercontent.com/101499377/173883724-f52fb3b9-527b-490b-a9bc-4b7246eee0bb.png)
### Membuat Routing untuk artikel detail.
   Buka Kembali file app/config/Routes.php, kemudian tambahkan routing untuk artikel detail.<p>
    ![image](https://user-images.githubusercontent.com/101499377/173882222-6d30edff-bc3a-4b80-82ff-cdc3d2efb703.png)
![image](https://user-images.githubusercontent.com/101499377/173883816-344b557d-6fb8-4676-8b40-f3d58b28673f.png)
### Membuat Menu Admin.
Menu admin adalah untuk proses CRUD data artikel. Buat method baru pada Controller Artikel dengan nama admin_index()<p>
     ![image](https://user-images.githubusercontent.com/101499377/174116709-00fae657-c153-446d-9f46-e113ad21b4f7.png)<p>
Selanjutnya buat view untuk tampilan admin dengan nama admin_index.php<p>
 ![image](https://user-images.githubusercontent.com/101499377/174117612-a5009dcd-798b-4b87-945a-87d97eb8e2be.png)<p>
Tambahkan routing untuk menu admin seperti berikut:<p>
 ![image](https://user-images.githubusercontent.com/101499377/174126811-c5e7e927-0499-445f-8c7c-66024110d329.png)<p>
Akses menu admin dengan url http://localhost:8080/admin/artikel<p>
  ![image](https://user-images.githubusercontent.com/101499377/174127057-66f27c8a-7a45-4a84-b7b0-6f929a3ea58c.png)<p>
### Menambah Data Artikel
   Tambahkan fungsi/method baru pada Controller Artikel dengan nama add()<p>
    ![image](https://user-images.githubusercontent.com/101499377/174128338-6b669aaf-2d9c-4b77-ae5b-10a8c3e38eef.png)<p>
Kemudian buat view untuk form tambah dengan nama form_add.php<p>
 ![image](https://user-images.githubusercontent.com/101499377/174128703-f825b2a6-cba8-4a19-b729-fc7ea071216c.png)<p>
![image](https://user-images.githubusercontent.com/101499377/174128872-0b678576-f1e0-471d-b22c-86ca375f446e.png)
### Mengubah Data.
  Tambahkan fungsi/method baru pada Controller Artikel dengan nama edit()<p>
   ![image](https://user-images.githubusercontent.com/101499377/174129395-5b90d246-5e22-41af-86fa-f3ea81ec546b.png)<p>
Kemudian buat view untuk form tambah dengan nama form_edit.php<p>
 ![image](https://user-images.githubusercontent.com/101499377/174130115-8c18c7be-f5c2-4aab-8338-adc25c5ca424.png)<p>
![image](https://user-images.githubusercontent.com/101499377/174130196-71b951cd-793b-46ea-ade8-432b125972f8.png)<p>
### Menghapus Data
 Tambahkan fungsi/method baru pada Controller Artikel dengan nama delete()<p>
  ![image](https://user-images.githubusercontent.com/101499377/174130548-c58d4073-ddc1-480a-823b-1cfc71e1e58d.png)
## Praktikum 13 : Framework Lanjutan (Modul Login)
  ### Membuat Tabel: User Login
  ![image](https://user-images.githubusercontent.com/101499377/175292450-17800b0f-9a63-4d43-8424-d3caac0e2d91.png)
  ### Membuat Model User.
  Selanjutnya adalah membuat Model untuk memproses data Login. Buat file baru pada direktori app/Models dengan nama UserModel.php<p>
![image](https://user-images.githubusercontent.com/101499377/175292750-789a0fdc-3601-4e16-be43-6ba124dc3d43.png)<p>
### Membuat Controller User.
   Buat Controller baru dengan nama User.php pada direktori app/Controllers.Kemudian tambahkan method index() untuk menampilkan daftar user, dan method login() untuk proses login.<p>
   ![image](https://user-images.githubusercontent.com/101499377/175293008-cbdaf070-5b5d-4b89-be1d-497cca45c027.png)<p>
![image](https://user-images.githubusercontent.com/101499377/175293142-5a8cb701-b7ca-4bc1-8e52-096ff65b0f74.png)<p>
### Membuat View Login.
   Buat direktori baru dengan nama user pada direktori app/views, kemudian buat file baru dengan nama login.php.<p>
    ![image](https://user-images.githubusercontent.com/101499377/175293319-0de96dad-15de-4494-b1df-07e54dd0dd91.png)<p>
### Membuat Database Seeder.
    Database seeder digunakan untuk membuat data dummy. Untuk keperluan ujicoba modullogin, kita perlu memasukkan data user dan password kedaalam database. Untuk itu buat database seeder untuk tabel user. Buka CLI, kemudian tulis perintah berikut:<p>
 ![image](https://user-images.githubusercontent.com/101499377/175293643-dc0c5b1a-2f36-4dac-a2bc-b7f319c6e4c7.png)<p>
Selanjutnya, buka file UserSeeder.php yang berada di lokasi direktori /app/Database/Seeds/UserSeeder.php kemudian isi dengan kode berikut:<p>
 ![image](https://user-images.githubusercontent.com/101499377/175293786-0b4f7dd9-0a4e-4559-9392-18b3683b1305.png)<p>
Selanjutnya buka kembali CLI dan ketik perintah berikut:<p>
 ![image](https://user-images.githubusercontent.com/101499377/175293961-102f4f2c-a347-4087-8d1f-fa0a2ff5c28f.png)<p>
Selanjutnya buka url http://localhost:8080/user/login seperti berikut:<p>
 ![image](https://user-images.githubusercontent.com/101499377/175294178-0818c273-2cae-4dc2-9514-0d8286fea860.png)<p>
### Menambahkan Auth Filter.
 Selanjutnya membuat filer untuk halaman admin. Buat file baru dengan nama Auth.php pada direktori app/Filters.<p>
![image](https://user-images.githubusercontent.com/101499377/175294511-9fe0f49c-b6c9-45d4-96cc-ca196a9d1861.png)<p>
Selanjutnya buka file app/Config/Filters.php tambahkan kode berikut:<p>
 ![image](https://user-images.githubusercontent.com/101499377/175294696-433b5146-aabd-4ce0-a3ad-8264215fcc83.png)<p>
Selanjutnya buka file app/Config/Routes.php dan sesuaikan kodenya.<p>
 ![image](https://user-images.githubusercontent.com/101499377/175294895-3b39909e-8657-4090-a7b9-9d566e0641eb.png)<p>
Buka url dengan alamat http://localhost:8080/admin/artikel ketika alamat tersebut diakses maka, akan dimuculkan halaman login.<p>
![image](https://user-images.githubusercontent.com/101499377/175295126-7ea74a2e-5e1a-4ce7-b6b1-067ae93fa682.png)<p>
### Fungsi Logout.
 Tambahkan method logout pada Controller User seperti berikut:<p>
  ![image](https://user-images.githubusercontent.com/101499377/175295331-c6bc8075-334e-42b3-a0c2-e9e68c6225d9.png)
