<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>Shopify PHP App</title></head>
<body>

@foreach($products as $product)
    <div>{{$product}}</div>
@endforeach
<script src="{{ asset('js/app.js') }}"></script>

</body>
</html>