<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KotaSeeder extends Seeder
{
    public function run()
    {
        $kota = [
            ['kode_kota' => 1101, 'id_provinsi' => 1, 'nama_kota' => "KABUPATEN SIMEULUE"],
			['kode_kota' => 1102, 'id_provinsi' => 1, 'nama_kota' => "KABUPATEN ACEH SINGKIL"],
			['kode_kota' => 1103, 'id_provinsi' => 1, 'nama_kota' => "KABUPATEN ACEH SELATAN"],
			['kode_kota' => 1224, 'id_provinsi' => 2, 'nama_kota' => "KABUPATEN NIAS UTARA"],
			['kode_kota' => 1225, 'id_provinsi' => 2, 'nama_kota' => "KABUPATEN NIAS BARAT"],
			['kode_kota' => 1301, 'id_provinsi' => 3, 'nama_kota' => "KABUPATEN KEPULAUAN MENTAWAI"],
			['kode_kota' => 1302, 'id_provinsi' => 3, 'nama_kota' => "KABUPATEN PESISIR SELATAN"],
			['kode_kota' => 1401, 'id_provinsi' => 4, 'nama_kota' => "KABUPATEN KUANTAN SINGINGI"],
			['kode_kota' => 1402, 'id_provinsi' => 4, 'nama_kota' => "KABUPATEN INDRAGIRI HULU"],
			['kode_kota' => 1403, 'id_provinsi' => 4, 'nama_kota' => "KABUPATEN INDRAGIRI HILIR"],
			['kode_kota' => 1404, 'id_provinsi' => 4, 'nama_kota' => "KABUPATEN PELALAWAN"],
			['kode_kota' => 1501, 'id_provinsi' => 5, 'nama_kota' => "KABUPATEN KERINCI"],
			['kode_kota' => 1502, 'id_provinsi' => 5, 'nama_kota' => "KABUPATEN MERANGIN"],
			['kode_kota' => 1505, 'id_provinsi' => 5, 'nama_kota' => "KABUPATEN MUARO JAMBI"],
			['kode_kota' => 1601, 'id_provinsi' => 6, 'nama_kota' => "KABUPATEN OGAN KOMERING ULU"],
			['kode_kota' => 1602, 'id_provinsi' => 6, 'nama_kota' => "KABUPATEN OGAN KOMERING ILIR"],
			['kode_kota' => 1603, 'id_provinsi' => 6, 'nama_kota' => "KABUPATEN MUARA ENIM"],
			['kode_kota' => 1701, 'id_provinsi' => 7, 'nama_kota' => "KABUPATEN BENGKULU SELATAN"],
			['kode_kota' => 1702, 'id_provinsi' => 7, 'nama_kota' => "KABUPATEN REJANG LEBONG"],
			['kode_kota' => 1801, 'id_provinsi' => 8, 'nama_kota' => "KABUPATEN LAMPUNG BARAT"],
			['kode_kota' => 1802, 'id_provinsi' => 8, 'nama_kota' => "KABUPATEN TANGGAMUS"],
			['kode_kota' => 1803, 'id_provinsi' => 8, 'nama_kota' => "KABUPATEN LAMPUNG SELATAN"],
			['kode_kota' => 1901, 'id_provinsi' => 9, 'nama_kota' => "KABUPATEN BANGKA"],
			['kode_kota' => 1902, 'id_provinsi' => 9, 'nama_kota' => "KABUPATEN BELITUNG"],
			['kode_kota' => 2101, 'id_provinsi' => 10, 'nama_kota' => "KABUPATEN KARIMUN"],
			['kode_kota' => 2102, 'id_provinsi' => 10, 'nama_kota' => "KABUPATEN BINTAN"],
			['kode_kota' => 3101, 'id_provinsi' => 11, 'nama_kota' => "KABUPATEN KEPULAUAN SERIBU"],
			['kode_kota' => 3171, 'id_provinsi' => 11, 'nama_kota' => "KOTA JAKARTA SELATAN"],
			['kode_kota' => 3201, 'id_provinsi' => 12, 'nama_kota' => "KABUPATEN BOGOR"],
			['kode_kota' => 3202, 'id_provinsi' => 12, 'nama_kota' => "KABUPATEN SUKABUMI"],
			['kode_kota' => 3301, 'id_provinsi' => 13, 'nama_kota' => "KABUPATEN CILACAP"],
			['kode_kota' => 3401, 'id_provinsi' => 14, 'nama_kota' => "KABUPATEN KULON PROGO"],
			['kode_kota' => 3501, 'id_provinsi' => 15, 'nama_kota' => "KABUPATEN PACITAN"],
			['kode_kota' => 3502, 'id_provinsi' => 15, 'nama_kota' => "KABUPATEN PONOROGO"],
			['kode_kota' => 3601, 'id_provinsi' => 16, 'nama_kota' => "KABUPATEN PANDEGLANG"],
			['kode_kota' => 5101, 'id_provinsi' => 17, 'nama_kota' => "KABUPATEN JEMBRANA"],
			['kode_kota' => 5201, 'id_provinsi' => 18, 'nama_kota' => "KABUPATEN LOMBOK BARAT"],
			['kode_kota' => 5202, 'id_provinsi' => 18, 'nama_kota' => "KABUPATEN LOMBOK TENGAH"],
			['kode_kota' => 5301, 'id_provinsi' => 19, 'nama_kota' => "KABUPATEN SUMBA BARAT"],
			['kode_kota' => 6101, 'id_provinsi' => 20, 'nama_kota' => "KABUPATEN SAMBAS"],
			['kode_kota' => 6102, 'id_provinsi' => 20, 'nama_kota' => "KABUPATEN BENGKAYANG"],
			['kode_kota' => 6201, 'id_provinsi' => 21, 'nama_kota' => "KABUPATEN KOTAWARINGIN BARAT"],
			['kode_kota' => 6301, 'id_provinsi' => 22, 'nama_kota' => "KABUPATEN TANAH LAUT"],
			['kode_kota' => 6401, 'id_provinsi' => 23, 'nama_kota' => "KABUPATEN PASER"],
			['kode_kota' => 6501, 'id_provinsi' => 24, 'nama_kota' => "KABUPATEN MALINAU"],
			['kode_kota' => 6502, 'id_provinsi' => 24, 'nama_kota' => "KABUPATEN BULUNGAN"],
			['kode_kota' => 7101, 'id_provinsi' => 25, 'nama_kota' => "KABUPATEN BOLAANG MONGONDOW"],
			['kode_kota' => 7102, 'id_provinsi' => 25, 'nama_kota' => "KABUPATEN MINAHASA"],
			['kode_kota' => 7103, 'id_provinsi' => 25, 'nama_kota' => "KABUPATEN KEPULAUAN SANGIHE"],
			['kode_kota' => 7201, 'id_provinsi' => 26, 'nama_kota' => "KABUPATEN BANGGAI KEPULAUAN"],
			['kode_kota' => 7202, 'id_provinsi' => 26, 'nama_kota' => "KABUPATEN BANGGAI"],
			['kode_kota' => 7301, 'id_provinsi' => 27, 'nama_kota' => "KABUPATEN KEPULAUAN SELAYAR"],
			['kode_kota' => 7302, 'id_provinsi' => 27, 'nama_kota' => "KABUPATEN BULUKUMBA"],
			['kode_kota' => 7401, 'id_provinsi' => 28, 'nama_kota' => "KABUPATEN BUTON"],
			['kode_kota' => 7501, 'id_provinsi' => 29, 'nama_kota' => "KABUPATEN BOALEMO"],
			['kode_kota' => 7601, 'id_provinsi' => 30, 'nama_kota' => "KABUPATEN MAJENE"],
			['kode_kota' => 7602, 'id_provinsi' => 30, 'nama_kota' => "KABUPATEN POLEWALI MANDAR"],
			['kode_kota' => 8101, 'id_provinsi' => 31, 'nama_kota' => "KABUPATEN MALUKU TENGGARA BARAT"],
			['kode_kota' => 8201, 'id_provinsi' => 32, 'nama_kota' => "KABUPATEN HALMAHERA BARAT"],
			['kode_kota' => 8202, 'id_provinsi' => 32, 'nama_kota' => "KABUPATEN HALMAHERA TENGAH"],
			['kode_kota' => 9101, 'id_provinsi' => 33, 'nama_kota' => "KABUPATEN FAKFAK"],
			['kode_kota' => 9102, 'id_provinsi' => 33, 'nama_kota' => "KABUPATEN KAIMANA"],
			['kode_kota' => 9401, 'id_provinsi' => 34, 'nama_kota' => "KABUPATEN MERAUKE"],
			['kode_kota' => 9402, 'id_provinsi' => 34, 'nama_kota' => "KABUPATEN JAYAWIJAYA"],
			
        ];
        DB::table('kotas')->insert($kota);
    }
}