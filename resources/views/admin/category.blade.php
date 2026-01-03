@extends('layouts.admin')
@section('content')
<div class="main-content-inner">
    <div class="main-content-wrap">
        <div class="flex items-center flex-wrap justify-between gap20 mb-27">
            <h3>Categories</h3>
            <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                <li>
                    <a href="{{route('adminaccount')}}">
                        <div class="text-tiny">Dashboard</div>
                    </a>
                </li>
                <li>
                    <i class="icon-chevron-right"></i>
                </li>
                <li>
                    <div class="text-tiny">Categories</div>
                </li>
            </ul>
        </div>

        <div class="wg-box">
            <div class="flex items-center justify-between gap10 flex-wrap">
                <div class="wg-filter flex-grow">
                    <form class="form-search">
                        <fieldset class="name">
                            <input type="text" placeholder="Search here..." class="" name="name"
                                tabindex="2" value="" aria-required="true" required="">
                        </fieldset>
                        <div class="button-submit">
                            <button class="" type="submit"><i class="icon-search"></i></button>
                        </div>
                    </form>
                </div>
                <button class="tf-button style-1 w208"
                    data-bs-toggle="modal"
                    data-bs-target="#addCategoryModal">
                <i class="icon-plus"></i> Add new
                 </button>

            </div>
            <div class="wg-table table-all-user">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Products</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach ($value as $key=> $values)
                        <tr>
                          <td>{{$value->firstItem() + $key}}</td> --}}
                        @foreach ($categories as $key=> $category )
                        <tr>
                            <td>{{ $categories->firstItem() + $key }}</td>
                            <td class="pname">
                                <div class="image">
                                    <img src="{{ asset('uploads/categories/' . $category->image) }}"
                                         alt="{{ $category->name }}"
                                         class="image">
                                </div>
                                
                                <div class="name">
                                    <a href="#" class="body-title-2">{{$category->name}}</a>
                                </div>
                            </td>
                            <td>{{ $category->slug }}</td>
                            <td><a href="#" target="_blank">0</a></td>
                            <td>
                                <div class="list-icon-function">
                                    
                                    {{-- edit --}}
                                    <a href="#"
                                    class="edit-btn"
                                    data-bs-toggle="modal"
                                    data-bs-target="#addCategoryModal"
                                    data-id="{{ $category->id }}"
                                    data-name="{{ e($category->name) }}"
                                    data-slug="{{ e($category->slug) }}"
                                    data-image="{{ $category->image ? asset('uploads/categories/' . $category->image) : '' }}">
                                     <div class="item edit">
                                         <i class="icon-edit-3"></i>
                                     </div>
                                 </a>
                                 
                                                

                                    <form action="{{ route('admin.categories.deleteCategory', $category->id) }}"
                                        method="POST"
                                        class="delete-form">
                                      @csrf
                                      @method('DELETE')
                                  
                                      <div class="item text-danger delete-btn" style="cursor:pointer;">
                                          <i class="icon-trash-2"></i>
                                      </div>
                                  </form>
                                  
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="divider"></div>
            <div class="flex items-center justify-between flex-wrap gap10 wgp-pagination">
                  {{ $categories->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div>
</div>


{{-- pop up....... --}}



<!-- Add Category Modal -->
<div class="modal fade" id="addCategoryModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">

        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">Add New Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">

                <form class="form-new-product form-style-1"
                      action="{{ route('addcategory') }}"
                      method="POST"
                      enctype="multipart/form-data">
                    @csrf

                    <fieldset class="name mb-3">
                        <div class="body-title">
                            Category Name 
                        </div>
                        <input type="text"
                               class="flex-grow"
                               name="name"
                               placeholder="Category name"
                               required>
                    </fieldset>

                    <fieldset class="name mb-3">
                        <div class="body-title">
                            Category Slug 
                        </div>
                        <input type="text"
                               class="flex-grow"
                               name="slug"
                               placeholder="category-slug"
                               required>
                    </fieldset>

                    <fieldset class="mb-3">
                        <div class="body-title">
                            Upload Image 
                        </div>
                    
                        <label class="custom-file-input">
                            <span class="file-placeholder">Choose image</span>
                            <input type="file"
                                   name="image"
                                   accept="image/*"
                                   required
                                   onchange="previewImage(event)">
                        </label>
                        {{-- previeew --}}
                    </br>
                        <div class="mt-3">
                            <img id="imagePreview"
                                 src=""
                                 alt="Preview"
                                 style="display:none; width:120px; height:120px; object-fit:cover; border-radius:8px; border:1px solid #ddd;">
                        </div>
                    </fieldset>

                    <div class="d-flex justify-content-end gap10 mt-4">
                        <button type="button"
                                class="tf-button style-2"
                                data-bs-dismiss="modal">
                            Cancel
                        </button>
                        <button type="submit"
                                class="tf-button w208">
                            Save Category
                        </button>
                    </div>

                </form>

            </div>

        </div>
    </div>
</div>
{{-- edit Model --}}

<div class="modal fade" id="addCategoryModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <form class="form-new-product form-style-1"
                      id="categoryForm"
                      action="{{ route('addcategory') }}"
                      method="POST"
                      enctype="multipart/form-data">
                    @csrf

                    <input type="hidden" name="category_id" id="category_id">

                    <fieldset class="name mb-3">
                        <div class="body-title">Category Name</div>
                        <input type="text" class="flex-grow" name="name" id="category_name" placeholder="Category name" required>
                    </fieldset>

                    <fieldset class="name mb-3">
                        <div class="body-title">Category Slug</div>
                        <input type="text" class="flex-grow" name="slug" id="category_slug" placeholder="category-slug" required>
                    </fieldset>

                    <fieldset class="mb-3">
                        <div class="body-title">Upload Image</div>
                        <label class="custom-file-input">
                            <span class="file-placeholder">Choose image</span>
                            <input type="file" name="image" accept="image/*" onchange="previewImage(event)">
                        </label>

                        <div class="mt-3">
                            <img id="imagePreview" src="" alt="Preview" 
                                 style="display:none; width:120px; height:120px; object-fit:cover; border-radius:8px; border:1px solid #ddd;">
                        </div>
                    </fieldset>

                    <div class="d-flex justify-content-end gap10 mt-4">
                        <button type="button" class="tf-button style-2" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="tf-button w208">Update Category</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>




@endsection

@push('scripts')

    
@if(session('successCategory'))
<script>
    Swal.fire({
        icon: 'success',
        title: 'Success!',
        text: '{{ session('successCategory') }}',
        showConfirmButton: false,
        timer: 2000
    });
</script>
@endif
    
@endpush