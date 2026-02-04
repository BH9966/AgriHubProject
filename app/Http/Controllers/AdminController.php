<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Slide;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('admin.index');
    }


    public function category()
    { 
        $categories=Category::orderBy('id','DESC')->paginate(3);
        return view('admin.category',compact('categories'));
    }

    public function addcategory(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:categories,slug',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

       $category =new Category();
       $category->name =$request->name;
       $category->slug =str::slug($request->slug);
       $image =$request->file('image');
       $file_extension=$request->file('image')->extension();
       $file_name=Carbon::now()->timestamp.'.'.$file_extension;
       $this->getcategoryimage($image,$file_name);
       $category->image=$file_name;
       $category->save();

        return redirect()->back()->with('success', 'Category added successfully!');
    }

    public function getcategoryimage($image, $imageName)
{
    $manager = new ImageManager(new Driver());

    $img = $manager->read($image->getPathname());
    $img->cover(124, 124);

    $img->save(public_path('uploads/categories/' . $imageName));
}



public function deleteCategory($id)
{
    $category = Category::findOrFail($id);

    if ($category->image && file_exists(public_path('uploads/categories/' . $category->image))) {
        unlink(public_path('uploads/categories/' . $category->image));
    }

    $category->delete();

    return redirect()->back()->with('success', 'Category deleted successfully!');
}


public function updateCategory(Request $request, $id)
{
    $category = Category::findOrFail($id);

   
    $request->validate([
        'name' => 'required|string|max:255',
        'slug' => 'required|string|max:255|unique:categories,slug,' . $id,
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
    ]);

   
    $category->name = $request->name;
    $category->slug = $request->slug;

    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('categories', 'public');
        $category->image = $imagePath;
    }

    $category->save();

    return redirect()->back()->with('successCategory', 'Category updated successfully');
}

   public function slides(){
    $slides =Slide::orderBy('id','DESC')->paginate(5);
    return view('admin.slide',compact('slides'));
   }

   public function addslides()
   {
    return view('admin.addslide');
   }
   public function slideStore(Request $request)
   {
    $request->validate([
        'tagline'=>'required',
        'title'=>'required',
        'subtitle'=>'required',
        'link'=>'required',
        'status'=>'required',
        'image'=>'required|mimes:png,jpg,jpeg|max:2048',
    ]);
       $slide= new Slide();
       $slide->tagline=$request->tagline;
       $slide->title=$request->title;
       $slide->subtitle=$request->subtitle;
       $slide->link=$request->link;
       $slide->status=$request->status;

       $image =$request->file('image');
       $file_extension=$request->file('image')->extension();
       $file_name=Carbon::now()->timestamp.'.'.$file_extension;
       $this->generateslideimage($image,$file_name);
       $slide->image=$file_name;
       $slide->save();
       return redirect()->route('admin.slides')->with('status','slide Added Successfully');
}
   public function generateslideimage($image,$imageName)
   {
    $manager = new ImageManager(new Driver());

    $img = $manager->read($image->getPathname());
    $img->cover(950, 690);

    $img->save(public_path('uploads/slides/' . $imageName));
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
    public function store(Request $request)
    {
        //
        return " Hellow";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
