@extends('layoutsdash.main')

@section('content')

<!-- Beverages -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Manage Beverage</h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-secondary" type="button">Go!</button>
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
                        <h2>List of Beverages</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                            <li class="dropdown">
                                <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Settings 1</a>
                                    <a class="dropdown-item" href="#">Settings 2</a>
                                </div>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">
                                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Beverage Title</th>
                                                <th>Beverage Content</th>
                                                <th>Beverage Price</th>
                                                <th>Published</th>
                                                <th>Special</th>
                                                <th>Beverage Image</th>
                                                <th>Beverage Category</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($beverages as $beverage)
                                            <tr>
                                                <td>{{ $beverage->beverage_title }}</td>
                                                <td>{{ $beverage->beverage_content }}</td>
                                                <td>{{ $beverage->beverage_price }}</td>
                                                <td>{{ $beverage->published ? 'Yes' : 'No' }}</td>
                                                <td>{{ $beverage->special ? 'Yes' : 'No' }}</td>
                                                <td>
                                                    @if ($beverage->beverage_image)
                                                    <img src="{{ asset('public/images/' . $beverage->beverage_image) }}"
                                                        alt="Beverage Image" class="img-thumbnail">
                                                    @else
                                                    <span class="text-danger">No valid image available.</span>
                                                    @endif
                                                </td>
                                                <td>{{ $beverage->category_id }}</td>
                                                <td><img src="{{ asset('dashassets/images/edit.png' )}}"
                                                        alt="Edit"></td>
                                                        <td>
                                                       <form action="{{ route('dashboard.delBeverage') }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                       <input type="hidden" value="{{ $beverage->id }}" name="id">
                                                       <button type="submit" onclick="return confirm('Are you sure you want to delete?')">
                                                       <img src="{{ asset('dashassets/images/delete.png') }}" alt="Delete">
                                                       </button>
                                                </form>
                                                      </td>
                                                      </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Beverages -->
@endsection
