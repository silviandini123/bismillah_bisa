<?php

namespace App\Http\Controllers;

use App\Models\Jenis;
use App\Http\Requests\StoreJenisRequest;
use App\Http\Requests\UpdateJenisRequest;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\JenisExport;
use App\Imports\JenisImport;
use Illuminate\Support\Facades\Request;
use PDF;
use Dompdf\Dompdf;
use Dompdf\Options;



class JenisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['title'] = 'Jenis';
        $data['jenis'] = Jenis::get();
        return view('jenis.index')->with($data);
    }

    public function exportData(){
        $date = date('Y-m-d');
        return Excel::download(new JenisExport, $date.'_jenis.xlsx');
    }


    // public function exportDataPdf($id) {
    //     $show = Jenis::find($id);

    //     $pdf = PDF::loadView('pdf', compact('show'));

    //     return $pdf->download('jenis.pdf');
    // }

    public function generatepdf()
    {
        $jenis = Jenis::all();
        $pdf = Pdf::loadView('jenis.data', compact('jenis'));
        return $pdf->download('jenis.pdf');
    }



    public function importData(){
        Excel::import(new JenisImport, request()->file('import'));
        return redirect('jenis')->with('success', 'Import data paket berhasil!');
    }

    // public function importData(Request $request)
    // {
    //     Excel::import(new jenisImport, $request->import);
    //     return redirect()->back()->with('success', 'Import data jenis berhasil');
    // }

    // public function importData(){
    //     $dompdf = new \Dompdf\Dompdf();
    //     $data = Jenis::orderBy('nama_jenis', 'asc')->get();
    //     $dompdf->loadHtml(view("jenis.index", ['data' => $data])->render());
    //     $dompdf->render();
    //     $dompdf->stream();
    // }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreJenisRequest $request)
    {
        Jenis::create($request->all());

        return redirect('jenis')->with('success', 'Data Jenis berhasil di tambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Jenis $jenis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jenis $jenis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJenisRequest $request, string $id)
    {
        // $jenis = Jenis::find($id)->update($request->all());
        // return redirect('jenis')->with('success', 'Update data berhasil');

        $jenis = Jenis::find($id);

        // Periksa apakah objek Jenis ditemukan
        if ($jenis) {
            // Lakukan validasi data yang diterima dari request
            $validatedData = $request->validated();

            // Lakukan update hanya dengan data yang divalidasi
            $jenis->update($validatedData);

            // Setelah berhasil melakukan update, redirect ke halaman jenis dengan pesan sukses
            return redirect('jenis')->with('success', 'Data jenis berhasil diperbarui');
        } else {
            // Jika objek Jenis tidak ditemukan, kembalikan response dengan pesan error
            return redirect()->back()->with('error', 'Data jenis tidak ditemukan');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Jenis::find($id)->delete();
        return redirect('jenis')->with('success','Data jenis berhasil dihapus!');
    }
}
