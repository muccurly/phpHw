@extends('layouts.app')

@section('content')
    <h1>Products show</h1>

        <div>
            <a href="{{route('products.edit',$product)}}">Редактировать</a>
        </div>

    <div>
        Название: <b>{{$product->name}}</b>
    </div>
    <div>
        Price: <b>{{$product->price}}</b>
    </div>
    <div>
        Описание: <b>{{$product->description}}</b>
    </div>
    <div>
        Тип: <b>{{$product->type}}</b>
    </div>
        <form action="{{route('products.destroy',$product)}}" method="post">
            @csrf @method('delete')
            <button>Удалить</button>
        </form>
@endsection
