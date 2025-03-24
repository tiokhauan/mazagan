@extends('layouts.app')

@section('title', 'Produto - Mazagan Informática')

@section('content')
@include('shop.productDetails.banner')
@include('shop.productDetails.productDetails')
@include('shop.productDetails.description')
@include('shop.productDetails.reviews')
@include('shop.productDetails.add-reviews')

@endsection

@section('scripts')
@endsection