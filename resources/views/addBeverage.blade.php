@extends('layoutsdash.main')

@section('content')

<!-- Manage Beverages -->
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
                        <h2>Add Beverage</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
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
                        <form action="{{ route('insertBeverage')}}" method="post" enctype="multipart/form-data">
                        @csrf
                            <!-- Beverage Title -->
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align"
                                    for="beverage_title">Title <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="beverage_title" name="beverage_title" required="required"
                                        class="form-control" value="{{ old('beverage_title') }}">
                                </div>
                            </div>

                            <!-- Beverage Content -->
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align"
                                    for="beverage_content">Content <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 ">
                                    <textarea id="beverage_content" name="beverage_content" required="required"
                                        class="form-control" value="{{ old('beverage_content') }}"></textarea>
                                </div>
                            </div>

                            <!-- Beverage Price -->
                            <div class="item form-group">
                                <label for="beverage_price"
                                    class="col-form-label col-md-3 col-sm-3 label-align">Price <span
                                        class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input id="beverage_price" name="beverage_price" class="form-control"
                                        type="number" required="required" value="{{ old('beverage_price') }}">
                                </div>
                            </div>

                            <!-- Published Checkbox -->
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">Published</label>
                                <div class="col-md-6 col-sm-6 ">
                                    <div class="checkbox">
                                        <label><input type="checkbox" id="published" name="published"
                                                class="form-control" value="{{ old('published') ? 'checked' : '' }}">
                                            Published</label>
                                    </div>
                                </div>
                            </div>

                            <!-- Special Checkbox -->
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">Special</label>
                                <div class="col-md-6 col-sm-6 ">
                                    <div class="checkbox">
                                        <label><input type="checkbox" id="special" name="special"
                                                class="form-control" value="{{ old('special') ? 'checked' : '' }}">
                                            Special</label>
                                    </div>
                                </div>
                            </div>

                            <!-- Beverage Image -->
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align"
                                    for="beverage_image">Image <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="file" id="beverage_image" name="beverage_image" required="required"
                                        class="form-control" value="{{ old('beverage_image') }}">
                                </div>
                            </div>

                            <!-- Beverage Category Selection -->
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align"
                                    for="category_id">Category <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 ">
                                    <select class="form-control" name="category_id" id="category_id">
                                        <option value="">Select Category</option>
                                        <option value="Iced Coffee" {{ old('category_id') == 'Iced Coffee' ? 'selected' : '' }}>Iced Coffee</option>
                                        <option value="Hot Coffee" {{ old('category_id') == 'Hot Coffee' ? 'selected' : '' }}>Hot Coffee</option>
                                        <option value="Fruit Juice" {{ old('category_id') == 'Fruit Juice' ? 'selected' : '' }}>Fruit Juice</option>
                                    </select>
                                </div>
                            </div>

                            <div class="ln_solid"></div>
                            <!-- Form Actions -->
                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 offset-md-3">
                                    <button class="btn btn-primary" type="button">Cancel</button>
                                    <button type="submit" class="btn btn-success">Add</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Manage Beverages -->
@endsection
