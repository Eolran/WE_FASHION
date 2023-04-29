<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{ asset('/css/admin_form.css') }}" rel="stylesheet">
        <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
        
        <title>Document</title>
    </head>
    <body>
    @include('admin.components.header') 

    <main>
        <h1>Edition du Produit {{$product->product_name}}</h1>
            <!-- 'product_name',
            'product_description',
            'product_price',
            'product_image',
            'product_published',
            'product_state',
            'product_reference', -->

        <form action="/admin/update/{{$product->id}}" method="POST">
            @csrf
            @method('PUT')

            <input placeholder="Nom produit" name="name" value="{{$product->product_name}}">
            <textarea placeholder="Description produit" name="desc" value="{{$product->product_description}}"></textarea>
            <input placeholder="Prix" name="price" value="{{$product->product_price}}">
            <!-- upload -->
            <select>
                <option value="0">Non publié</option>
                <option value="1">Publié</option>
            </select>
            <input placeholder="% de solde" name="state">
            <button type="submit" value="Submit">Enregistrer</button>
        </form>
        
        
    </main>

    @include('admin.components.footer') 
    </body>
</html>