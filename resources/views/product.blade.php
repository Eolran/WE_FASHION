<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/product.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body>
@include('components.header') 

<main>

    <div class="product-left">
        <img src="" alt="IMG PRODUIT">
        <h3>{{$product->product_description}}</h3>
    </div>
    <div class="product-right">
        <h1>{{$product->product_name}}</h1>
        <p>{{$product->product_price}} €</p>
        <select>
            <option>XS</option>
            <option>S</option>
            <option>M</option>
        </select>

        <br>

        <button>Acheter</button>
    </div>

</main>

@include('components.footer') 
</body>
</html>