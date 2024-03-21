<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Jenis;
use App\Http\Requests\StoreMenuRequest;
use App\Http\Requests\UpdateMenuRequest;
use Exception;
use Illuminate\Database\QueryException;
use PDOException;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\MenuExport;
use App\Imports\MenuImport;
use PDF;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try{
            $data['menu'] = Menu::get();
            $data['jenis'] = Jenis::get();
            return view('menu.index')->with($data);
        }
            catch (QueryException | Exception | PDOException $error) {
            $this->failResponse($error->getMessage(), $error->getCode());
        }
    }

     public function exportData(){
        $date = date('Y-m-d');
        return Excel::download(new MenuExport, $date.'_menu.xlsx');
    }

        public function generatepdf()
    {
        $menu = Menu::all();
        $pdf = Pdf::loadView('menu.data', compact('menu'));
        return $pdf->download('menu.pdf');
    }

    public function importData(){
        Excel::import(new MenuImport, request()->file('import'));
        return redirect('menu')->with('success', 'Import data paket berhasil!');
    }

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
    public function store(StoremenuRequest $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:png,jpg,jpeg,svg|max:2048',
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);
        $data = $request->all();
        $data['image'] = $imageName;

        menu::create($data);

        return redirect('menu')->with('success', 'Data menu berhasil di tambahkan!');

        return back()->with('success' . 'You have successfully uploaded ann image.')->with('images', $imageName);
    }

    /**
     * Display the specified resource.
     */
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Menu $menu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMenuRequest $request, string $id)
    {
        $menu = Menu::find($id);
        $request->validate([
            'image' => 'required|image|mimes:png,jpg,jpeg,svg|max:2048',
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);
        $data = $request->all();
        $data['image'] = $imageName;

        $menu->update($data);
        return redirect('menu')->with('success', 'Update data berhasil');

        // $menu = Menu::find($id)->update($request->all());
        // return redirect('menu')->with('success', 'Update data berhasil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Menu::find($id)->delete();
        return redirect('menu')->with('success','Data Menu berhasil dihapus!');
    }
}
