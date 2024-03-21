<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use Exception;
use Illuminate\Database\QueryException;
use PDOException;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
            try{
                $data['category'] = Category::get();
                return view('category.index')->with($data);
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
    public function store(StoreCategoryRequest $request)
    {
    //      try {
    //     // Validate the request, ensuring 'nama_category' is required
    //     $validatedData = $request->validate([
    //         'nama_category' => 'required',
    //         // Add any other validation rules for other fields here
    //     ]);

    //     // Create a new Category with the provided validated data
    //     Category::create($validatedData);

    //     return redirect('category')->with('success', 'Data produk berhasil ditambahkan!');
    // } catch (\Exception $error) {
    //     // Handle the exception by redirecting back with an error message
    //     return redirect()->back()->withInput()->withErrors(['error' => $error->getMessage()]);
    // }

        Category::create($request->all());

        return redirect('category')->with('success', 'Data Category berhasil di tambahkan!');

    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $category->update($request->all());
        return redirect('category')->with('success', 'Update data berhasil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {

        // $category = Category::findOrFail($id);

        // // Pastikan tidak ada produk yang terkait dengan kategori ini
        // if ($category->produks()->count() > 0) {
        //     return redirect()->back()->with('error', 'Tidak dapat menghapus kategori karena masih memiliki produk terkait!');
        // }

        // // Hapus kategori jika tidak ada produk yang terkait
        // $category->delete();
        // return redirect('category')->with('success', 'Data category berhasil dihapus!');

        $category->delete();
        return redirect('category')->with('success','Data category berhasil dihapus!');
    }
}
