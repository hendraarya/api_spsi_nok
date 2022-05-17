<?php

namespace App\Http\Controllers;

use App\Exports\ExportExcel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use \App\Imports\ExcelImportToArray;

class EmployeeSpsiExcelController extends Controller
{
    public function exportMemberspsiExcel(Request $request)
    {
        //data query
        // $data_array = [
        //     [
        //         'nama' => 'Hendra',
        //         'nik' => '118208'
        //     ]
        // ];
        $data = DB::table('employee_spsi')->get();
        return Excel::download(new ExportExcel($data),'data_member.xlsx');
    }

    public function importDataMemberExcel(Request $request)
    {
        $import = new ExcelImportToArray();
        $data = Excel::toArray($import, $request->file('attachment'));
        $type = $request->type;

        //looping data array-nya
        foreach($data as $row)
        {
            foreach($row as $member)
            {
                if($type == 'insertdatamember')
                {
                    DB::table('employee_spsi2')->insert([
                        'employee_no' => $member['employee_no'],
                        'employee_name' => $member['employee_name'],
                        'resign_date' => $member['resign_date'],
                        'departement' => $member['departement'],
                        'section' => $member['section'],
                        'gender' => $member['jenis_kelamin'],
                        'join_date' => $member['tgl_masuk'],
                        'group_code' => $member['kode_golongan'],
                        'employee_position' => $member['jabatan'],
                        'shift' => $member['shift'],
                    ]);
                }
                else if($type == 'updatedatamember')
                {
                    DB::table('employee_spsi')
                    ->where('employee_no',$member['employee_no'])
                    ->update([
                        //set value yang diupdate
                        'employee_name' => $member['employee_name'],
                        'resign_date' => $member['resign_date'],
                        'departement' => $member['departement'],
                        'section' => $member['section'],
                        'gender' => $member['jenis_kelamin'],
                        'join_date' => $member['tgl.masuk'],
                        'group_code' => $member['kode_golongan'],
                        'employee_position' => $member['jabatan'],
                        'shift' => $member['shift'],
                    ]);
                }
            }
        }
        return response()->json(['mesage'=> 'Import file successfully.'],200);
    }
}