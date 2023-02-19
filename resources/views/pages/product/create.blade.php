@extends('layouts.main-layout')

@section('content')
    <h1>CREATE</h1>
    <form action="{{ route('product.store') }}" method="post">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="">
        <br>
        <label for="description">Description</label>
        <input type="text" name="description">
        <br>
        <label for="price">Price</label>
        <input type="number" name="price">
        <br>
        <label for="weight">Weight</label>
        <input type="number" name="weight">
        <br>
        <label for="typology">Typology</label>
        <select name="typology_id">
            @foreach ($typologies as $typology)
            <option value="{{ $typology -> id }}">{{ $typology -> name}}</option>
            @endforeach
        </select>
        <br>
        <input type="submit" value="CREATE NEW PRODUCT">

    </form>
@endsection