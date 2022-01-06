@extends('layouts.main')

@section('main_content')
<br>
<a href="/material" class="btn btn-lg btn-success"><span data-feather="arrow-left"></span>Back to previous page</a>
<div class = ' mt-5 p-3'>
    <h1><b style="color: #FF9900; font-size:60px ">Suhu dan Perubahannya</b></h1>
    <br>
    <br>
    <div class = "container-padding" >
        <h3 style="color: aliceblue">
            <b>1. Suhu</b>
            <br>
            <div class="alert alert-info" role="alert">
                Suhu adalah ukuran derajat panas atau dinginnya suatu benda. Alat untuk mengukur suhu disebut termometer. Berdasarkan zat pengisinya, termometer ada 3 jenis : termometer zat cair, bimetal dan kristal cair. 
            </div>
            <br>
            <b>Termometer zat cair yaitu</b> menggunakan zat cair sebagai pengisi termometer. Zat cair yang digunakan yaitu raksa dan alkohol. Kelebihan raksa : membeku pada suhu -38°C dan mendidih pada suhu >350°C. Kelemahan : raksa sangat beracun, berbahaya ketika termometer pecah. 
            <br>
            <br>
            Kelebihan alkohol untuk pengisi termometer : bisa diberi warna merah atau biru, rentang suhunya tergantung jenis alkohol yang digunakan contohnya :
            <br>
            <br>
            <ul>
                <ul>
                    <li>Toluen : titik beku – 90°C, titik didih 100°C </li>
                    <br>
                    <li>Etyl alkohol : titik beku -110°C, titik didih 100°C </li>
                </ul>
            </ul>
            <br>
            Contoh dari termometer zat cair : termometer laboratorium dengan titik beku -10°C, titik didih 110°C dan termometer badan dengan rentang suhu 35°C sampai dengan 42°C. 
            <br>
            <br>
            Termometer bimetal yaitu menggunakan 2 logam yang jenisnya berbeda kemudian didekatkan. Ketika suhunya tinggi, maka logam yang lebih panjang akan melengkung. Hal ini dimanfaatkan dalam pembuatan termometer. 
            <br>
            <br>
            <b>Contoh lain termometer :</b>
            <br>
            <ul>
                <ul>
                    <li>Termometer badan untuk mengukur suhu badan, </li>
                    <br>
                    <li>Termometer dinding untuk mengukur suhu ruangan  </li>
                    <br>
                    <li>Termometer maksimum-minimum untuk mengukur suhu ditempat terbuka. </li>
                </ul>
            </ul>
            <br>
            <b>2. Skala Termometer</b>
            <br>
            <br>
            Termometer memiliki 4 skala yaitu : Celcius (°C), Reamur (°R), Fahrenheit (°F), dan Kelvin (K). Namun, yang umum digunakan pada termometer yaitu Celcius. Sedangkan skala menurut sistem internasional (SI) yaitu Kelvin. Skala Kelvin menggunakan nol mutlak. Pada suhu 0 Kelvin, tidak ada energi panas yang dimiliki benda. 
            <br>
            <br>
            Skala termometer memiliki perbedaan yaitu pada titik tetap bawah dan titik tetap atas seperti pada gambar berikut.
            <br>
            <br>
            <img src="img/image9.jpg" alt="" width="700" height="300">
            <br>
            <br>
            Perbedaan skala tersebut menghasilkan perbandingan yaitu : 
            <br>
            <br>
            <div class="alert alert-info" role="alert">
                <b>°C : °R : °F : K = 100 : 80 : 180 : 100 
                    °C : °R : °F : K = 5 : 4 : 9 : 4 </b>
            </div>
            <br>
            Dengan memperhatikan titik tetap bawah (dibandingkan mulai dari nol semua), perbandingan suhunya yaitu : 
            <br>
            <br>
            <div class="alert alert-info" role="alert">
                <b>tC : tR : (tF – 32) : (tK – 273) = 5 : 4 : 9 : 5</b>
            </div>
            <br>
            Sehingga, ada penetapan skala pada termometer yang menggunakan rumus sebagai berikut :
            <br>
            <br>
            <b>a. Rumus Celcius ke Reamur</b>
            <br>
            Termometer Celcius dengan Reamur 
            <br>
            <br>
            <div class="alert alert-info" role="alert">
                <b>°C = 55/44 x °R °R = 44/55  °C</b>
            </div>
            <br>
            <b>b. Rumus Celcius ke Fahrenheit</b>
            <br>
            Termometer Celcius dengan Fahrenheit 
            <div class="alert alert-info" role="alert">
                <b>°C = (F° – 32) x 55/99 ,-. °F = (°C x 99/55) + 32</b>
            </div>
            <br>
            <b>Rumus Celcius ke Kelvin</b>
            <br>
            Termometer Celcius dengan Kelvin 
            <br>
            <br>
            <div class="alert alert-info" role="alert">
                <b>°C = K – 273 K = °C + 273</b>
            </div>
            <br>
            <b>Rumus Celcius ke Fahrenheit</b>
            <br>
            Termometer Reamur dengan Fahrenheit 
            <br>
            <br>
            <div class="alert alert-info" role="alert">
                <b>°R = (°F – 32) x 44/99 °F = (°R x 99/44)  + 32 </b>
            </div>
            <br>
            <b>3. Pemuaian</b>
            <br>
            <br>
            <div class="alert alert-info" role="alert">
                Pemuaian adalah perubahan benda akibat dari bertambahnya suhu. Ketika suhu berubaha menjadi terlalu panas atau terlalu dingin maka ada benda tertentu yang mengalami perubahan. Pemuaian dibagi menjadi 3 yaitu pemuaian zat padat, cair dan gas. 
            </div>
            <br>
            <b>Pemuaian za</b> padat terjadi apabila zat padat dipanaskan, apabila didinginkan maka akan menyusut. Pemuaian terjadi pada semua bagian benda yaitu panjang, lebar, dan tebal. Contoh pemanfaatan pemuaian zat padat yaitu pada bimetal. Bimetal dimanfaatkan pada termostat.
            <br>
            <br>
            <b>Prinsip kerja termostat yaitu : </b> udara di ruangan dingin, keping bimetal akan menyusut, membengkok dan menyentuh logam biasa sehingga saling bersentuhan. Sentuhan tersebut menyebabkan rangkaian tertutup dan menyalakan pemanas sehingga ruangan menjadi hangat. 
            <br>
            <br>
            Jika menginginkan ruangan dingin, cara kerjanya juga sama yaitu : saat ruangan panas, termostat bengkok dan menghubungkan rangkaian listrik sehingga ruangan menjadi dingin. 
            <br>
            <br>
            <b>Besaran yang menentukan pemuaian zat padat adalah </b> muai panjang. Koefisien muai panjang zat padat adalah bilangan yang menunjukkan pertambahan panjang tiap satu satuan panjang zat itu jika suhunya dinaikkan 1°C. 
            <br>
            <br>
            <div class="alert alert-info" role="alert">
                Contoh koefisien muai panjang zat padat yaitu apabila muai panjang kaca 9 x 10-6 

 /°C berarti jika 1 meter kaca suhunya bertambah 1°C maka panjang kaca bertambah 9 x 10-6

 meter. Contoh lain koefisien muai panjang seperti gambar berikut. 
            </div>
            <br>
            <img src="img/image16.jpg" alt="" width="600" height="300">
            <br>
            <br>
            <b>Sedangkan rumus koefisien muai panjang yaitu : </b>
            <br>
            <br>
            <img src="img/image17.jpg" alt="" width="600" height="400">
            <br>
            <br>
            Pemuaian luas yaitu pemuaian pada benda berbentuk lempengan. Pemuaian luas mempunyai koefisien 2x dari koefisien muai panjang. Koefisien muai luas = 2 x α. Pemuaian volume yaitu pemuaian pada benda yang memiliki ruang (3 dimensi). Pemuaian volume memilliki koefisien 3x dari koefisien muai panjang. Koefisien muai volume = 3 x α. 
            <br>
            <br>
            Zat cair dan zat gas juga bisa mengalami pemuaian. Pemuaian zat cair lebih cepat dan mudah teramati dibanding dengan pemuaian zat padat. Contoh pemuaian zat cair yaitu pengemasan botol sirup, kecap, minyak dan saos tidak pernah diisi penuh agar tidak tumpah ketika memuai. 
            <br>
            <br>
            Contoh pemuaian zat gas yaitu memompa ban sepeda. Memompa ban tidak boleh terlalu keras dan harus menyesuaikan ukuran dari ban. Hal ini karena tidak meletus ketika terjadi pemuaian.  
            <br>
            <br>
            Perubahan suhu juga terjadi pada pembuatan tape (fermentasi). Pada proses fermentasi, bakteri mengubah glukosa menjadi alkohol dan karbon dioksida. Prosees fermentasi menyebabkan terjadinya perubahan suhu. Suhu yang baik digunakan untuk pembuatan tape yaitu 35°C – 40°C. 
    
    
    
    
    
    
    
    
        </div>
@endsection