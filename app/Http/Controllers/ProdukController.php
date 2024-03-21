<?php

namespace App\Http\Controllers;

use App\Models\produk;
use App\Http\Requests\StoreprodukRequest;
use App\Http\Requests\UpdateprodukRequest;
use App\Models\Category;
use Exception;
use Illuminate\Database\QueryException;
use PDOException;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         try{
                $data['produk'] = produk::get();
                $data['category'] = Category::get();
                return view('produk.index')->with($data);
            }
            catch (QueryException | Exception | PDOException $error) {
                $this->failResponse($error->getMessage(), $error->getCode());
            }
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
    public function store(StoreprodukRequest $request)
    {
        produk::create($request->all());
        return redirect('produk')->with('success', 'Data produk berhasil di tambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(produk $produk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(produk $produk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateprodukRequest $request, string $id)
    {
        $product = produk::find($id)->update($request->all());
        return redirect('produk')->with('success', 'Update data berhasil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(produk $produk)
    {
        $produk->delete();
        return redirect('produk')->with('success','Data produk berhasil dihapus!');
    }
}
