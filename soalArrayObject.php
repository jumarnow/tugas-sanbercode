<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script>
        console.log("Soal 1");
        var daftarBuah = ["2. Apel", "5. Jeruk", "3. Anggur", "4. Semangka", "1. Mangga"];

        daftarBuah.sort();

        for(let i=0;i<daftarBuah.length;i++){
            console.log(daftarBuah[i]);
        }

        console.log("Soal 2");

        var kalimat="saya sangat senang belajar javascript"
        var pisah = kalimat.split(" ");
        console.log(pisah);

        console.log("Soal 3");

        var stawberry = {
            nama: "strawberry",
            warna: "merah",
            adaBijinya: "tidak",
            harga: 9000,
        }

        var jeruk = {
            nama: "jeruk",
            warna: "oranye",
            adaBijinya: "ada",
            harga: 8000,
        }

        var semangka = {
            nama: "Semangka",
            warna: "Hijau & Merah",
            adaBijinya: "ada",
            harga: 10000,
        }

        var pisang = {
            nama: "Pisang",
            warna: "Kuning",
            adaBijinya: "tidak",
            harga: 5000,
        }

        console.log(stawberry);
    </script>
</body>
</html>