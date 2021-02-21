@extends('layouts.app')

@section('content')
    <h1>Welcome</h1>
    <a href="{{ route('products.index') }}">Списог продуктов</a>
@endsection
