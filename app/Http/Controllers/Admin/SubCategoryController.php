<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreSubCategoryRequest;
use App\Http\Requests\UpdateSubCategoryRequest;
use App\Models\SubCategory;
use App\Http\Controllers\Controller;
use App\Repositories\SubCategoryRepositoryInterface;
use App\Repositories\CategoryRepositoryInterface;
use Illuminate\Support\Facades\Auth;

class SubCategoryController extends Controller
{
    protected $SubCategoryRepository;
    protected $CategoryRepository;

    public function __construct(SubCategoryRepositoryInterface $SubCategoryRepository , CategoryRepositoryInterface $CategoryRepository)
    {
      $this->SubCategoryRepository = $SubCategoryRepository;
      $this->CategoryRepository = $CategoryRepository;
    }



    public function index()
    {
        $user = Auth::user();
        $subcategories =  $this->SubCategoryRepository->get();
        return view('Admin.subcategories.index',compact('subcategories','user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $subcategories = $this->SubCategoryRepository->get();
        $categories = $this->CategoryRepository->get();
        $user = Auth::user();
        return view('Admin.subcategories.create',compact('subcategories','categories','user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSubCategoryRequest $request)
    {
        
        
        
        $data = $request->validated();
        $this->SubCategoryRepository->create($data);
        return redirect()->route('subcategories.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(SubCategory $subCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SubCategory $subcategory)
    {
        $user = Auth::user();
        $categories = $this->CategoryRepository->get();
        return view('Admin.subcategories.edit',compact('subcategory','user','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSubCategoryRequest $request, SubCategory $subcategory)
    {
        $this->SubCategoryRepository->update($subcategory,$request->all());
        return redirect()->route('subcategories.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SubCategory $subcategory)
    {
      $this->SubCategoryRepository->destroy($subcategory);
      return redirect()->route('subcategories.index');
    }
}
