@include('dashboard.header')

<body>
    <div class="container">
        <h1>Liste des blogs</h1>
        <a type="button" class="btn btn-info" href="{{ route('blogs.create') }}">Ajouter</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Image</th>
                    <th scope="col">Texte</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($blogs as $blog)
                    <tr>
                        <td>
                            <img src="{{asset('images')}}/{{$blog->image}}" alt="Pas de photo" class="image-blog" width="100" height="100" >
                        </td>
                        <td>{{$blog->texte}}</td>
                        <td>
                            <a type="button" class="btn btn-warning" href="{{ route('blogs.edit', ['blog' => $blog->id]) }}">Modifier</a>
                            <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submite" class="btn btn-danger">Supprier</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
