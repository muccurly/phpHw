<?php
$product=$product??null;
?>


@extends('layouts.app')

@section('content')
    <h1>Products {{$product ? 'edit' : 'create'}}</h1>


    <form method="post" action="{{$product? route('products.update', $product): route('products.store')}}">
        @csrf

        @if($product)
            @method('put')
        @endif

        <div>
            <label for="name">Название</label>
            <input value="{{old('name', $product->name ?? null)}}" type="text" id="name" name="name">
            @error('name')
            <span style="color: #ff0000">{{$message}}</span>
            @enderror
        </div>
        <div>
            <label for="price">Price</label>
            <input value="{{old('price', $product->price ?? null)}}" type="number" id="price" name="price">
            @error('price')
            <span style="color: #ff0000">{{$message}}</span>
            @enderror
        </div>
        <div>
            <label for="description">Description</label>
            <input value="{{old('description', $product->description ?? null)}}"id="description" name="description">
            @error('description')
            <span style="color: #ff0000">{{$message}}</span>
            @enderror
        </div>
        <div>
            <label for="type">Type</label>
            <input value="{{old('type', $product->type ?? null)}}" type="text" id="type" name="type">
            @error('type')
            <span style="color: #ff0000">{{$message}}</span>
            @enderror
        </div>


        <button>{{$product ? 'Update' : 'Create'}}</button>
    </form>


@endsection
