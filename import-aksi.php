<?php
require_once 'header.php';
require_once 'query.php';
require_once 'crud-monitoring.php';
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

//cek apakah tombol sudah ditekan
if(isset($_POST['submit']))
{
    $fileName = $_FILES['excel_data']['name'];
    $file_ext = pathinfo($fileName, PATHINFO_EXTENSION);

    $allowed_ext = ['xls','csv','xlsx'];

    $file_ext = strtolower($file_ext);

    if(in_array($file_ext, $allowed_ext))
    {
        $inputFileNamePath = $_FILES['excel_data']['tmp_name'];
        $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($inputFileNamePath);
        $data = $spreadsheet->getActiveSheet()->toArray();

        $count = "0";
        foreach($data as $row)
        {
            if($count > 0)
            {
                $no_jo = $row[0]; 
                $tgl_jo = $row[1]; 
                $nama_project = $row[2];
                $kode_gbj = $row[3];
                $nilai_harga = $row[4]; 
                $nama_panel = $row[5]; 
                $tipe_jenis = $row[6];
                $tipe_fswm = $row[7];
                $qty_unit = $row[8];
                $qty_cell = $row[9];
                $warna = $row[10];
                $nomor_wo = $row[11];
                $nomor_seri = $row[12];
                $size_panel_height = $row[13]; 
                $size_panel_width = $row[14]; 
                $size_panel_deep = $row[15];
                $mh_std = $row[16];
                $mh_aktual = $row[17];
                $tgl_submit_dwg_for_approval = $row[18];
                $tgl_approved = $row[19];
                $tgl_release_dwg_softcopy = $row[20];
                $tgl_release_dwg_hardcopy = $row[21];
                $breakdown = $row[22];
                $busbar = $row[23];
                $target_ppc = $row[24];
                $target_eng = $row[25];
                $design_pic = $row[26];
                $design_start = $row[27];
                $design_end = $row[28];
                $nesting_pic = $row[29];
                $nesting_start = $row[30];
                $nesting_end = $row[31];
                $program_pic = $row[32];
                $program_start = $row[33];
                $program_end = $row[34];
                $checker_pic = $row[35];
                $checker_start = $row[36];
                $checker_end = $row[37];
                $tgl_box_selesai = $row[38];
                $due_date = $row[39];
                $tgl_terbit_wo = $row[40];
                $plan_start_produksi = $row[41];
                $aktual_start_produksi = $row[42];
                $plan_fg_wo = $row[43];
                $aktual_fg_wo = $row[44];
                $progress = $row[45];
                $desc_progress = $row[46];
                $status = $row[47];
                $delivery_no = $row[48];
                $delivery_tgl = $row[49];
                $keterangan = $row[50];

                $query = "INSERT INTO data_monitoring
                (no_jo,tgl_jo,nama_project,kode_gbj,
                nilai_harga,nama_panel,tipe_jenis,tipe_fswm,qty_unit,
                qty_cell,warna,nomor_wo,nomor_seri,size_panel_height,
                size_panel_width,size_panel_deep,mh_std,mh_aktual,tgl_submit_dwg_for_approval,
                tgl_approved,tgl_release_dwg_softcopy,tgl_release_dwg_hardcopy,breakdown,busbar,
                target_ppc,target_eng,design_pic,design_start,design_end,
                nesting_pic,nesting_start,nesting_end,program_pic,program_start,
                program_end,checker_pic,checker_start,checker_end,tgl_box_selesai,
                due_date,tgl_terbit_wo,plan_start_produksi,aktual_start_produksi,plan_fg_wo,
                aktual_fg_wo,progress,desc_progress,status,delivery_no,
                delivery_tgl,keterangan)
                VALUES
                ('$no_jo', '$tgl_jo', '$nama_project', '$kode_gbj',
                 '$nilai_harga', '$nama_panel', '$tipe_jenis', '$tipe_fswm', '$qty_unit',
                 '$qty_cell', '$warna', '$nomor_wo', '$nomor_seri', '$size_panel_height',
                 '$size_panel_width', '$size_panel_deep', '$mh_std', '$mh_aktual', '$tgl_submit_dwg_for_approval',
                 '$tgl_approved', '$tgl_release_dwg_softcopy', '$tgl_release_dwg_hardcopy', '$breakdown', '$busbar',
                 '$target_ppc', '$target_eng', '$design_pic', '$design_start', '$design_end',
                 '$nesting_pic', '$nesting_start', '$nesting_end', '$program_pic', '$program_start',
                 '$program_end', '$checker_pic', '$checker_start', '$checker_end', '$tgl_box_selesai',
                 '$due_date', '$tgl_terbit_wo', '$plan_start_produksi', '$aktual_start_produksi', '$plan_fg_wo',
                 '$aktual_fg_wo', '$progress', '$desc_progress', '$status', '$delivery_no',
                 '$delivery_tgl', '$keterangan')";                
                $result = mysqli_query($conn, $query); 
                $msg = True;
            }
            else
            {
                $count = "1";
            }
        }

        if(isset($msg))
        {
            $_SESSION['message'] = "Successfully Imported";
            header('Location: tables-monitoring.php');
            exit(0);
        }
        else
        {
            $_SESSION['message'] = "Not Imported";
            header('Location: monitoring.php');
            exit(0);
        }
    }
    else
    {
        $_SESSION['message'] = "Invalid File";
        header('Location: ');
        exit(0);
    }
}
?>