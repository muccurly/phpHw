@extends('layouts.app')

@section('content')
    <h1>Products index</h1>

        <a href="{{route('products.create')}}">
            Добавить книгу
        </a>

    @if($products->isEmpty())
        Книг нет!
    @else
        <ol>
            @foreach($products as $product)
                <li value="{{$product->id}}">
                    <a href="/">
                        {{$product->name}}
                    </a>
                </li>
            @endforeach
        </ol>
    @endif
@endsection
