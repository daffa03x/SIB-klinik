<?php

namespace App\Exports;

use App\Models\Pendaftaran;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class DaftarExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $data = Pendaftaran::select('pasien.nama AS pasien','dokter.name AS dokter','pendaftaran.no_antrian','pendaftaran.tgl_pendaftaran')
        ->join('jadwal_dokters','jadwal_dokters.id','=','pendaftaran.jadwal_dokter_id')
        ->join('dokter','dokter.id','=','jadwal_dokters.dokter_id')
        ->join('pasien','pasien.id','=','pendaftaran.pasien_id')
        ->get();

        return $data;
    }
        public function headings(): array
    {
        return ["Nama Pasien", "Nama Dokter", "No Antrian", "Tanggal Pendaftaran"];
    }
}
