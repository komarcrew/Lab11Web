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
### 

