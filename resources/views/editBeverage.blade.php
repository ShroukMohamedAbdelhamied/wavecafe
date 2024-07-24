@extends('layoutsdash.main')

@section('content')

<!-- Edit Beverages -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Manage Beverages</h3>
      </div>

      <div class="title_right">
        <div class="col-md-5 col-sm-5 form-group pull-right top_search">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for...">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button">Go!</button>
            </span>
          </div>
        </div>
      </div>
    </div>
    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Edit Beverage</h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a class="dropdown-item" href="#">Settings 1</a></li>
                  <li><a class="dropdown-item" href="#">Settings 2</a></li>
                </ul>
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a></li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br />
            <form action="{{ route('beverages.update', $beverage->id) }}" method="POST" id="edit-form" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
              @csrf
              @method('PUT')

              <!-- Title -->
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="title">Title <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6">
                  <input type="text" id="title" name="beverage_title" required="required" class="form-control" value="{{ old('beverage_title', $beverage->beverage_title) }}">
                </div>
              </div>

              <!-- Content -->
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="content">Content <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6">
                  <textarea id="content" name="beverage_content" required="required" class="form-control">{{ old('beverage_content', $beverage->beverage_content) }}</textarea>
                </div>
              </div>

              <!-- Price -->
              <div class="item form-group">
                <label for="price" class="col-form-label col-md-3 col-sm-3 label-align">Price <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6">
                  <input id="price" class="form-control" type="number" name="beverage_price" required="required" value="{{ old('beverage_price', $beverage->beverage_price) }}">
                </div>
              </div>

              <!-- Published Checkbox -->
              <div class="item form-group">
                  <label class="col-form-label col-md-3 col-sm-3 label-align">Published</label>
                  <div class="col-md-6 col-sm-6">
                      <div class="checkbox">
                          <label>
                              <input type="checkbox" id="published" name="published" class="form-control" {{ old('published') || isset($beverage) && $beverage->published ? 'checked' : '' }}>
                              Published
                          </label>
                      </div>
                  </div>
              </div>

              <!-- Special Checkbox -->
              <div class="item form-group">
                  <label class="col-form-label col-md-3 col-sm-3 label-align">Special</label>
                  <div class="col-md-6 col-sm-6">
                      <div class="checkbox">
                          <label>
                              <input type="checkbox" id="special" name="special" class="form-control" {{ old('special') || isset($beverage) && $beverage->special ? 'checked' : '' }}>
                              Special
                          </label>
                      </div>
                  </div>
              </div>

              <!-- Image -->
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="image">Image <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6">
                  <input type="file" id="image" name="beverage_image" class="form-control">
                  <small class="text-muted">Leave empty if you don't want to change the image.</small>
                </div>
              </div>

              <!-- Category -->
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="category">Category <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6">
                  <select class="form-control" name="category_id" id="category">
                    <option value="">Select Category</option>
                    @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ old('category_id', $beverage->category_id) == $category->id ? 'selected' : '' }}>{{ $category->category_name }}</option>
                    @endforeach
                  </select>
                </div>
              </div>

              <!-- Submit Button -->
              <div class="ln_solid"></div>
              <div class="item form-group">
                <div class="col-md-6 col-sm-6 offset-md-3">
                  <button class="btn btn-primary" type="button">Cancel</button>
                  <button type="submit" class="btn btn-success">Update</button>
                </div>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Edit Beverages -->

@endsection
