@extends('layouts.main')

@section('main_content')
<br>
<a href="/material" class="btn btn-lg btn-success"><span data-feather="arrow-left"></span>Back to previous page</a>
<div class = ' mt-5 p-3'>
    <h1><b style="color: #FF9900; font-size:60px ">Kalor dan Perpindahannya</b></h1>
    <br>
    <br>
    <div class = "container-padding" >
        <h3 style="color: aliceblue">
            <b>1. Kalor dan Perubahan Suhu Benda</b>
            <br>
            <br>
            <div class="alert alert-info" role="alert">
                Kalor adalah energi panas yang berpindah dari benda bersuhu lebih tinggi ke benda bersuhu lebih rendah. Satuan kalor dalam SI adalah Joule (J), namun yang sering digunakan dalam bidang gizi yaitu kalori atau kilo kalori. Satu kalori adalah jumlah energi panas yang digunakan untuk menaikkan suhu 1°C pada 1 gram air. 
            </div>
            <br>
            Zat gizi makanan mengandung energi kimia yang dapat diubah menjadi energi panas atau energi lain. Energi panas yang disediakan oleh makanan diukur dalam kilo kalori (kkal). <b>Satu kkal = 1000 kalori, 1 kalori = 4,2 J.</b>
            <br>
            <br>
            Suhu benda akan naik jika benda tersebut diberi kalor, sebaliknya suhu benda akan turun jika melepaskan kalor ke lingkungan. Contohnya, air panas didalam gelas lama – kelamaan akan mendingin. Hal ini karena kalor dilepaskan ke lingkungan oleh air. 
            <br>
            <br>
            Kalor yang diperlukan untuk menaikkan suhu benda tergantung dari jenis benda tersebut. Semakin besar kenaikan suhu benda, semakin besar pula kalor yang diperlukan. Semakin besar massa jenis benda, semakin besar pula kalor yang diperlukan. 
            <br>
            <br>
            Sehingga, dapat dirumuskan bahwa : kalor yang diperlukan menaikkan suhu = massa benda x kalor jenis x suhu benda. Atau bisa dituliskan :
            <br>
            <br>
            <div class="alert alert-info" role="alert">
                <b>Q = m x c x ΔT </b>
            </div>
            <br>
            Setiap benda memiliki kalor jenis yang berbeda. Berikut kalor jenis benda
            <br>
            <br>
            <table class="table" style="color: aliceblue">
                <thead>
                  <tr>
                    <th scope="col">Bahan</th>
                    <th scope="col">Kalor Jenis(J/(kg.K))</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">Air</th>
                    <td>4.184</td>
                  </tr>
                  <tr>
                    <th scope="row">Alkohol</th>
                    <td>2.450</td>
                  </tr>
                  <tr>
                    <th scope="row">Aluminium</th>
                    <td>920</td>
                  </tr>
                  <tr>
                    <th scope="row">Karbon</th>
                    <td>710</td>
                  </tr>
                  <tr>
                    <th scope="row">Pasir(Grafit)</th>
                    <td>664</td>
                  </tr>
                  <tr>
                    <th scope="row">Besi</th>
                    <td>450</td>
                  </tr>
                  <tr>
                    <th scope="row">Tembaga</th>
                    <td>380</td>
                  </tr>
                  <tr>
                    <th scope="row">Perak</th>
                    <td>235</td>
                  </tr>
                </tbody>
              </table>
            <br>
            <b>2. Kalor pada Perubahan Wujud Benda</b>
            <br>
            <br>
            Untuk mendidihkan air diperlukan kalor, jadi untuk mengubah zat cair (air) menjadi gas (uap) diperlukan kalor. Berikut ini perubahan wujud zat yang memerlukan kalor. 
            <br>
            <br>
            Pada perubahan wujud zat, tidak terjadi perubahan suhu. Kalor untuk mengubah wujud zat disebut kalor laten. Berikut rumus kalor laten : 
            <br>
            <br>
            <img src="img/image3.png" alt="" width="700" height="300">
            <br>
            <br>
            <div class="alert alert-info" role="alert">
                <b>Keterangan :</b> 
Q = kalor yang dibutuhkan/dilepaskan untuk berubah wujud (J)
m = massa zat yang berubah wujud (kg)
L = kalor lebur/kalor beku (J/kg)
U = kalor penguapan/kalor pengembunan (J/kg) 
            </div>
            <br>
            Contoh penerapan kalor yaitu : ketika kita beraktivitas, maka tubuh kita akan menjadi panas dan kemudian berkeringat. Ketika keringat menguap, maka memerlukan kalor. Kalor ini diambil dari tubuh, sehingga tubuh menjadi dingin dan kembali ke suhu optimal. 
            <br>
            <br>
            <div class="alert alert-info" role="alert">
                <b>Contoh lainnya:</b> pembuatan kolam atau air mancur pada bagian depan bangunan yang besar. Kolam dapat membuat lingkungan sekitar menjadi sejuk. Hal ini karena apabila siang hari, air di kolam menguap, sehingga membutuhkan kalor. Kalor tersebut diambil dari udara sekitar kolam yang panas, sehingga dengan adanya kolam udara lebih dingin dan sejuk. 
            </div>
            <br>
            <h1 style="color: aliceblue"><b>3. Perpindahan Kalor</b></h1>
            <h3 style="color: aliceblue">
                Kalor dapat berpindah melalui 3 cara yaitu konduksi, konveksi dan radiasi. 
                <br>
                <br>
                <div class="alert alert-info" role="alert">
                    Konduksi adalah perpindahan kalor melalui bahan tanpa disertai partikel – partikel bahan tersebut. Contohnya ketika menyetrika baju, maka baju akan menjadi panas tetapi licin dan rapi. Hal ini karena kalor berpindah dari setrika ke baju. 
                </div>
                <br>
                Bahan yang dapat menghantarkan listrik dengan baik disebut konduktor, contohnya : logam. Bahan yang dapat menghantarkan listrik dengan buruk disebut isolator, contohnya Plastik dan kayu. 
                <br>
                <br>
                Setiap bahan memiliki kemampuan menghantarkan panas secara konduksi (konduktivitas) yang berbeda. Berikut ini sifat – sifat konduktivitas bahan : 
                <br>
                <br>
                <img src="img/image2.jpg" alt="" width="800" height="500">
                <br>
                <br>
                <div class="alert alert-info" role="alert">
                    Konveksi adalah perpindahan kalor melalui suatu bahan disertai partikel – partikel bahan tersebut. Contohnya terjadinya angin darat dan angin laut di pantai.
                </div>
                <br>
                <b>Angin laut</b> terjadi ketika daratan lebih cepat panas dari lautan (kalor jenisnya kecil), udara diatas daratan ikut panas dan bergerak naik, sehingga digantikan udara dari lautan. Angin laut terjadi pada siang hari. 
                <br>
                <br>
                <b>Angin darat</b> ketika daratan lebih cepat mendingin dari lautan, udara diatas lautan lebih cepat bergerak naik, sehingga digantikan oleh udara dari daratan. 
                <br>
                <br>
                <div class="alert alert-info" role="alert">
                    Radiasi adalah perpindahan kalor tanpa memerlukan medium. Contohnya ketika kita berada di dekat api ungun, maka tangan akan ikutan panas. Hal ini karena kalor dari api unggun berpindah ke tangan kita. Setiap benda dapat memancarkan dan menyerap radiasi kalor, yang besarnya bergantung pada suhu dan warna benda. 
                </div>
                <br>
                <b>Semakin panas benda daripada lingkungan, maka semakin besar pula kalor yang diradiasikan ke lingkungannya.</b> Semakin luas permukaan panas benda, maka semakin besar pula kalor yang diradiasikan ke lingkungannya. 
                <br>
                <br>
                Apabila suhu benda lebih dingin dari lingkungan, maka benda akan menyerap radiasi kalor dari lingkungan. Semakin rendah suhu benda, makin besar pula kalor yang diterima dari lingkungan. 
                <br>
                <br>
                Ketika kita menjemur pakaian, maka pakaian yang berwarna gelap akan lebih cepat kering daripada pakaian yang berwarna. Semakin gelap benda yang terasa panas, semakin besar pula kalor yang diradiasikan ke lingkungannya. Semakin gelap benda yang terasa dingin, semakin besar pula kalor yang diterima dari lingkungannya. 
                <br>
                <br>
                <div class="alert alert-info" role="alert">
                   <b> Azaz Black </b> berbunyi banyaknya kalor pada benda yang bersuhu lebih tinggi sama dengan banyaknya kalor yang diterima benda bersuhu lebih rendah. 
                </div>
                <br>










            </h3>

   
   
   
   
   
   
   
   
   
   
   
   
   
   
    </div>
@endsection