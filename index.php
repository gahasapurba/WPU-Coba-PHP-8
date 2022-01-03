<?php

// Named Arguments

// function myFunc($satu = 0, $dua = 0, $tiga = 0, $empat = 0)
// {
// 	return $satu + $dua * $tiga - $empat;
// }

// 	echo myFunc(dua:2, empat:3);

// Constructor Property Promotion

// class Orang
// {
// 	public function __construct(
// 		private string $nama,
// 		private int $umur,
// 		private string $email,
// 	){}

// 	public function cetakInfo()
// 	{
// 		return "Hi, nama saya {$this->nama}, saya {$this->umur} tahun.";
// 	}
// }

// $org1 = new Orang('Gahasa', 19, 'gahasapurbaa@gmail.com');
// echo $org1->cetakInfo();

// Union Type

// class MyClass
// {
// 	private int|float $number;

// 	public function setNumber(int|float $number)
// 	{
// 		$this->number = $number;
// 	}

// 	public function getNumber() : int|float
// 	{
// 		return $this->number;
// 	}
// }

// $obj = new MyClass;
// $obj->setNumber('Gahasa');
// echo $obj->getNumber();

// Match Expression

// $angka = '4';
// switch ($angka) {
// 	case 1:
// 		echo 'Anda memilih angka 1';
// 		break;
// 	case 2:
// 		echo 'Anda memilih angka 2';
// 		break;
// 	case 3:
// 		echo 'Anda memilih angka 3';
// 		break;
// 	case 4:
// 		echo 'Anda memilih angka 4';
// 		break;
// 	default:
// 		echo 'Angka yang anda pilih terlalu besar!';
// 		break;
// }

$angka = 4;
echo match($angka) {
	1 => 'Anda memilih angka 1',
	2 => 'Anda memilih angka 2',
	3 => 'Anda memilih angka 3',
	4 => 'Anda memilih angka 4',
	default => 'Angka yang anda pilih terlalu besar!',
};