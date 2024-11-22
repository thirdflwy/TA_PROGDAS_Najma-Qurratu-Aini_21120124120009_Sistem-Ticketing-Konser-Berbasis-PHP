<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <title>Pembelian</title>
    <style>
        body {
            background-color: #ffddff;
        }
        .container {
            margin-top: 50px;
            margin-bottom: 50px;
        }
        .card {
            margin-bottom: 20px;
            border: none;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 3);
        }
        .card-header {
            background-color: #f19ed2;
            color: white;
            font-weight: bold;
        }
        .card-body {
            background-color: white;
            padding: 20px;
        }
        .card-body p {
            margin-bottom: 10px;
        }
        .form-group label {
            font-weight: bold;
        }
        .btn-primary{
            background-color: #f19ed2;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="text-center card-header">
                        <h4>Terima Kasih!</h4>
                    </div>
                    <div class="card-body">
<?php
class Tiket {
    private $jenis_tiket;
    private $jumlah_tiket;
    private $harga_tiket;

    public function __construct($jenis_tiket, $jumlah_tiket) {
        $this->jenis_tiket = $jenis_tiket;
        $this->jumlah_tiket = $jumlah_tiket;
        $this->setHargaTiket();
    }

    private function setHargaTiket() {
        if($this->jenis_tiket == "vip") {
            $this->harga_tiket = 375000;
        } elseif($this->jenis_tiket == "festival") {
            $this->harga_tiket = 275000;
        } elseif($this->jenis_tiket == "reguler") {
            $this->harga_tiket = 175000;
        }
    }

    public function getTotalHarga() {
        return $this->jumlah_tiket * $this->harga_tiket;
    }

    public function getJenisTiket() {
        return $this->jenis_tiket;
    }

    public function getJumlahTiket() {
        return $this->jumlah_tiket;
    }

    public function getHargaTiket() {
        return $this->harga_tiket;
    }
}

$nama_pembeli = $_POST['nama_pembeli'];
$jenis_tiket = $_POST['jenis_tiket'];
$jumlah_tiket = $_POST['jumlah_tiket'];

$tiket = new Tiket($jenis_tiket, $jumlah_tiket);
$total_harga = $tiket->getTotalHarga();

echo "<p>Terima kasih " . htmlspecialchars($nama_pembeli) . " telah memesan tiket " . htmlspecialchars($tiket->getJenisTiket()) . "<p>";
echo "<p>Jumlah tiket Anda: " . htmlspecialchars($tiket->getJumlahTiket()) . "<p>";
echo "<p>Jenis tiket Anda: " . htmlspecialchars($tiket->getJenisTiket()) . "<p>";
echo "<p>Harga tiket: Rp. " . number_format($tiket->getHargaTiket(), 0, ".", ".") . "<p>";
echo "<p>Total harga tiket Anda: Rp. " . number_format($total_harga, 0, ".", ".") . "<p>";
?>         
    <a href="beranda.html" class="btn btn-primary">Oke</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>