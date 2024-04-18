<?php

class ATM
{
	private $saldo;

	public function __construct($saldoAwal)
	{
		$this->saldo = $saldoAwal;
	}

	public function cekSaldo()
	{
		echo "Saldo Anda saat ini: Rp " . number_format($this->saldo, 0, ',', '.') . PHP_EOL;
	}

	public function tarikTunai($jumlah)
	{
		if ($jumlah <= 0) {
			echo "Jumlah penarikan tidak valid" . PHP_EOL;
			return;
		}

		if ($jumlah > $this->saldo) {
			echo "Saldo tidak mencukupi" . PHP_EOL;
			return;
		}

		$this->saldo -= $jumlah;
		echo "Penarikan tunai berhasil. Saldo anda sekarang: Rp " . number_format($this->saldo, 0, ',', '.') . PHP_EOL;
	}

	public function setorTunai($jumlah)
	{
		if ($jumlah <= 0) {
			echo "Jumlah setoran tidak valid" . PHP_EOL;
			return;
		}

		$this->saldo += $jumlah;
		echo "Setoran tunai berhasil. Saldo anda sekarang: Rp " . number_format($this->saldo, 0, ',', '.') . PHP_EOL;
	}
}

// Contoh Penggunaan
$atm = new ATM(1000000);

$atm->cekSaldo();

$atm->tarikTunai(5000000);
$atm->cekSaldo();

$atm->setorTunai(2000000);
$atm->cekSaldo();

$atm->tarikTunai(10000000);
$atm->cekSaldo();

?>