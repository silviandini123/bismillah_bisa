<?php

// namespace App\Imports;

// use App\Models\Jenis;
// use Maatwebsite\Excel\Concerns\ToModel;
// use Maatwebsite\Excel\Concerns\WithHeadingRow;

// class JenisImport implements ToModel, WithHeadingRow
// {
//     /**
//     * @param array $row
//     *
//     * @return \Illuminate\Database\Eloquent\Model|null
//     */
//     public function model(array $row)
//     {
//         return new Jenis([
//             // 'id_jenis' => auth()->user()->id_jenis,
//             'nama_jenis' => $row['nama_jenis']
//         ]);
//     }

//     public function headingRow(): int
//     {
//         return 3;
//     }
// }

namespace App\Imports;

use App\Models\jenis;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class jenisImport implements ToModel, WithHeadingRow
{
    public function headingRow(){
        return 3;
    }
    public function model(array $rows)
    {
        return new jenis([
            'nama_jenis' => $rows['nama_jenis'],
        ]);
    }
}
