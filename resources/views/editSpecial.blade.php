@extends('layoutsdash.main')

@section('content')
<!-- Special Items Page -->
@foreach ($specials as $special)
        <div class="tm-black-bg tm-special-item">
            @if ($special->special_image)
            <img src="{{ asset('public/images/' . $special->special_image) }}" alt="Special Image" class="img-thumbnail">
            @else
            <span class="text-danger">No valid image available.</span>
            @endif
            <div class="tm-special-item-description">
                <h2 class="tm-text-primary tm-special-item-title">{{ $special->special_title }}</h2>
                <p class="tm-special-item-text">{{ $special->special_content }}</p>
            </div>
        </div>
        @endforeach
    </div>
</div>
<!-- end Special Items Page -->
@endsection