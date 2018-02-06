#Soal Implementasi
Web Programmer

Latar Belakang
The Matrix Corporation ingin membangun suatu mall maya berbasis web. Dalam web maya ini bisa terdapat banyak jenis-jenis toko, tiap jenis toko menyediakan berbagai jenis barang.
Tujuan dari proyek ini adalah memudahkan pelanggan dalam memesan barang tanpa harus pergi ke toko yang diinginkan. Misi anda sebagai arsitek The Matrix Mall adalah merancang dan mengimplementasi sistem aplikasi yang dibutuhkan, “because you are the choosen one”.
Struktur Web & Analisa System
Anda bebas merancang Struktur Web untuk perusahaan tersebut. Anda juga dapat menambahkan informasi dengan asumsi masing-masing untuk memperbagus desain secara keseluruhan.
Aktor yang terlibat dalam sistem adalah : Supplier, Admin dan Customer. Supplier maupun Customer dapat melakukan pendaftaran, login dan logout.
Untuk login terdiri dari 3 jenis yaitu : login sebagai admin, login sebagai supplier, dan login sebagai customer. Setelah login user dapat melakukan logout yaitu menghapus semua session yang ada dalam web dan menampilkan halaman login.
Masing masing aktor memiliki peranan sebagai berikut :
1. Supplier
Bertindak sebagai penjual barang dalam The Matrix Mall, pertama Supplier harus mendaftar dahulu sebagai supplier dengan memasukkan data-data berupa : password, nama toko, alamat toko, email, jenis toko dan slogan toko, contoh :
supplier mendaftar dengan nama toko : “Familia Canteen”, alamat : “Anggrek Cakra Street”, email : familicanteen@yahoo.com, jenis toko : “Restaurant”, slogan : “Serves a various kind of fast food”, password : “famili”.


Ketentuan dalam registrasi adalah : nama toko harus diisi, alamat toko harus diisi, email toko harus diisi, password harus diisi.
Setelah mendaftar maka supplier akan diberikan kode supplier sebagai username untuk login. Kode supplier didapat dari hasil autogenerate dari sistem, bentuknya bebas (Contoh : S001). Account supplier setelah pendaftaran masih belum dapat digunakan, untuk mengaktifkannya supplier harus membayar sejumlah uang yang ditentukan oleh The Matrix Mall. Hanya Admin The Matrix Mall yang dapat mengaktifkan account supplier. Anda tidak perlu membuat sistem pembayaran, karena pembayaran yang dilakukan oleh supplier tidak termasuk dalam kebutuhan sistem.
Setelah account dari supplier tersebut diaktifkan oleh Admin, maka supplier dapat login dengan kode supplier yang diberikan saat selesai mendaftar dan dengan password saat mendaftar.
Fasilitas yang diberikan untuk supplier adalah :

a) Manage Product
Fasilitas ini digunakan untuk view, insert, update, dan delete produk supplier. Tiap produk memiliki data-data : kode produk, kode supplier pemilik produk, jenis produk, nama produk, harga produk, status tersedia.
Jika status tersedia produk = false maka produk tersebut tidak akan ditampilkan kepada customer. Sebaliknya jika status tersedia produk = true, maka produk tersebut akan ditampilkan kepada customer.
Ketentuan dalam menginsert suatu produk adalah :
• Kode produk harus diisi dan supplier yang bersangkutan tidak dapat memasukan kode produk yang sama lebih dari 1 record.
• Jenis toko dan Jenis produk anda yang menentukan sendiri, namun jenis produk disesuaikan berdasarkan jenis toko supplier.

Contoh :
Supplier A memiliki jenis toko = Restaurant, maka jenis produk yang tersedia adalah : Makanan, Minuman, Hidangan Penutup.
Supplier B memiliki jenis toko = Stationary, maka jenis produk yang tersedia adalah : Alat Tulis, Alat Hapus, Kertas.
Catatan : Terdapat lebih dari 1 supplier untuk 1 jenis toko yang sama. Contoh, untuk jenis toko restaurant, terdapat beberapa supplier yaitu Kantin Famili, Lorong Alung, Jatim, dan sebagainya.
• Nama produk harus diisi
• Harga produk harus diisi dan harus berupa angka.

Ketentuan dalam mengupdate suatu produk adalah :
• Kode produk tidak dapat diubah
• Jenis produk tidak dapat diubah
• Nama produk harus diisi
• Harga produk harus diisi dan harus berupa angka.
Tampilkan produk berdasarkan jenis produk, sistem hanya akan menampilkan maksimal 5 produk per halaman, jadi buatlah fasilitas untuk paging (first, prev, next, last).

b) Manage Transaksi
Fasilitas ini adalah untuk mengatur transaksi pemesanan yang dilakukan oleh customer. Data-data transaksi yang ditampilkan adalah kodetransaksi, kodecustomer, kodesupplier, kodeproduk, jumlah, keterangan pemesanan dari customer, tanggal dan waktu pemesanan.
Setiap record transaksi memiliki status proses yaitu true (transaksi sudah diproses oleh supplier dan produk telah dikirim ke customer) dan false (transaksi belum diproses).

Di fasilitas Manage Transaksi ini, supplier dapat :

a. Melihat transaksi yang belum diproses
Buatlah halaman untuk menampilkan transaksi yang belum diproses, kemudian untuk setiap record transaksi yang ditampilkan, sediakan fasilitas untuk mengubah status proses menjadi true (artinya telah diproses), setiap transaksi yang telah diubah statusnya menjadi “telah diproses” maka akan ditampilkan pada halaman Melihat Transaksi yang sudah diproses. Supplier juga dapat menghapus record transaksi yang tidak ingin dilayani.

b. Melihat transaksi yang sudah diproses
Halaman ini berfungsi menampilkan transaksi yang sudah diproses, untuk setiap record transaksi yang ditampilkan pada halaman ini, sediakan fasilitas untuk mengubah status proses menjadi false jika terjadi kesalahan dalam pengubahan status transaksi. Supplier juga dapat menghapus record transaksi yang tidak ingin dilayani.

c) Edit Profile
Supplier dapat mengubah profil berupa : password, nama toko, alamat toko, email, slogan. Sedangkan profil yang tidak dapat diubah adalah jenis toko dan status aktif. Status aktif hanya dapat diubah oleh admin The Matrix Mall (aktivasi account).

2. Customer
Peran customer dalam sistem adalah sebagai pembeli produk dari supplier. Jika customer ingin membeli produk supplier dari The Matrix Mall, maka customer harus terlebih dahulu mendaftar menjadi customer The Matrix Mall. Untuk mendaftar, data data yang harus diisi oleh customer adalah : password, nama customer, alamat customer, email.
Setelah mendaftar maka customer akan diberikan kode customer sebagai username untuk login. Kode customer didapat dari hasil autogenerate dari sistem, bentuknya bebas (Contoh : C001). Setelah itu, customer dapat melakukan login dengan menggunakan kode customer yang diberikan dan password customer saat mendaftar.

Fasilitas yang diberikan untuk customer adalah :
a. Mencari Supplier
Sebelum berkunjung ke suatu toko dalam The Matrix Mall, customer disediakan fasilitas pencarian supplier berdasarkan jenis-jenis toko (contoh: Restaurant, Computer, Stationary). Sistem akan menampilkan semua supplier berdasarkan jenis toko yang dipilih. Setelah sistem menampilkan hasil pencarian, maka selanjutnya customer dapat memilih supplier mana yang ingin dikunjungi, jika customer telah memilih supplier yang ingin dikunjungi, maka akan ditampilkan halaman Melihat Produk Supplier yang dipilih.

b. Melihat Produk Supplier
Tampilkan nama customer, ucapan selamat datang ke toko tersebut, slogan toko, alamat toko dan email supplier. Contoh :
Customer disediakan fasilitas mencari produk dari supplier yang dipilih berdasarkan jenis produk. Pilihan jenis produk disesuaikan dengan jenis toko supplier yang dipilih.

Hi Mr. Anderson, welcome to Famili Canteen Serves a various kind of fast food
Address : Anggrek Cakra Street
Email : familicanteen@yahoo.com

Contoh : customer telah memilih supplier Kantin Famili yang jenis tokonya adalah Restaurant, maka jenis produk yang tersedia adalah Makanan, Minuman, Hidangan Penutup.
Lalu sistem akan menampilkan daftar produk hasil pencarian berupa kode produk, nama produk, harga produk, dan pilihan untuk membeli produk tersebut. Contoh : customer telah memilih jenis produk Makanan pada supplier Kantin Famili. Maka sistem akan menampilkan semua produk yang jenis produknya makanan yang dimiliki Kantin Famili. Contoh produknya : telor, tahu, tempe dan lain-lain.
Jika user memilih untuk membeli suatu produk maka sistem akan menyajikan halaman Transaksi.
Sistem hanya akan menampilkan maksimal 5 produk per halaman, jadi buatlah fasilitas untuk paging (first, prev, next, last).

c. Melakukan Transaksi
Pada Halaman ini tampilkan data produk yang telah dipilih oleh customer pada modul Melihat Produk Supplier. Data yang ditampilkan berupa : kode produk dan nama produk. Juga terdapat field jumlah pembelian dan keterangan pembelian yang harus diisi customer. Validasikan Jumlah pembelian harus diisi dengan angka dan keterangan pembelian tidak boleh kosong.
Pada saat customer telah melakukan transaksi maka sistem akan mencatat data ke dalam database berupa :
kode transaksi pembelian, kode customer pembeli, kode supplier penjual, kode produk yang dibeli, jumlah pembelian, keterangan pembelian, tanggal transaksi, waktu transaksi, dan status proses = false.

d. Melihat transaksi pemesanan yang belum diproses
Pada halaman ini ditampilkan transaksi yang belum diproses oleh supplier, jadi record transaksi yang ditampilkan adalah record transaksi dimana status proses = false. Sistem hanya akan menampilkan maksimal 5 transaksi per halaman, jadi buatlah fasilitas untuk paging (first, prev, next, last).

e. Edit Profile
Customer dapat mengubah profil berupa : password, nama, alamat, email, sedangkan untuk kode customer tidak dapat diubah.


3. Admin
Peran Admin dalam sistem adalah melihat supplier yang belum aktif. Adminjuga dapat mengaktifkan account supplier yang belum aktif tersebut jika supplier sudah memenuhi ketentuan pembayaran yang berlaku.
Fasilitas yang dimiliki oleh admin adalah :

a. Melihat Supplier yang belum aktif
Pada halaman ini ditampilkan daftar supplier yang belum aktif, data yang ditampilkan adalah : kode supplier, nama toko, alamat toko, email supplier, jenis toko. Setiap record disediakan pilihan untuk mengaktifasi supplier, dan pilihan untuk mendelete supplier yang tidak memenuhi ketentuan pembayaran.

Peraturan Pengerjaan
1. Waktu pengerjaan 48 jam

2. System Requirements
a. Framework: Laravel (Gunakan fitur-fitur di Laravel jika diperlukan).
b. Database: MySQL/PostgreSQL

3. Untuk Rancangan database / table anda diminta untuk merancangnya sendiri sesuai dengan kebutuhan soal. Validasi yang digunakan tidak boleh menggunakan ClientSideScripting.

4. Yang perlu diperhatikan untuk penilaian adalah :

a. User Interface
i. User Friendly
ii. Simple looking for User
iii. Web Component Usage

b. Code Efficiency

c. System Fungsionality
i. Security Management for User
ii. Application Features

d. Error Handling

e. Database Normalization
i. Design Table
ii. Relationship

5. Upload ke Bitbucket & share ke akun ###### (Bitbucket).