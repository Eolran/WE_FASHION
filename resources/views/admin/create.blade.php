<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('/css/admin_form.css') }}" rel="stylesheet">
        <title>Document</title>
    </head>
    <body>
    @include('admin.components.header') 

    <main>
        <h1>Ajout d'un Produit au catalogue</h1>
            <!-- 'product_name',
            'product_description',
            'product_price',
            'product_image',
            'product_published',
            'product_state',
            'product_reference', -->

        <form action="/admin/create" method="POST">
            @csrf
            <input placeholder="Nom produit" name="name" value="">
            <textarea placeholder="Description produit" name="desc" value=""></textarea>
            <input placeholder="Prix" name="price" value="">
            <!-- upload -->
            <select name="published">
                <option value="0">Non publié</option>
                <option value="1">Publié</option>
            </select>
            <input placeholder="% de réduction" name="state">

            <button type="submit" value="Submit">Ajouter</button>
        </form>
        
        
    </main>

    @include('admin.components.footer') 
    </body>
</html>