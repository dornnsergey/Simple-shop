@extends('layout.app')

@section('content')
    <div class="starter-template">
        <h1>
            {{ $category->name }}  {{ $category->products->count() }}
        </h1>
        <p>
            {{ $category->description }}
        </p>
        <div class="row">
            @foreach($products as $product)
            @include('card')
            @endforeach
        </div>
    </div>
@endsection

