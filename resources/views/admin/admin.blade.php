<link href="{{ asset('/css/app.css') }}" rel="stylesheet">

@include('admin.components.header') 

<main>

    <table>
    <thead>
        <tr>
            <th>Visualisation des produits</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
            <tr>
                <td>{{$product->product_name}}</td>
                <td>
                    <a href="admin/edit/{{$product->id}}"><button>Modifier</button></a>
                </td>
                <td>
                    <form action="admin/delete/{{$product->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button>Supprimer</button>
                    </form>
                </td>
            </tr>
        @endforeach
        <tr>
            <td colspan="3">
                <a href="admin/add"><button>Créer un produit</button></a>
            </td>
        </tr>
    </tbody>
</table>
</main>

@include('admin.components.footer') 