<div class="card col-3 mx-2 bg-dark text-white">
    <div class="card-body">
     
        <blockquote class="blockquote mb-0">
            <div class="container bg-dark">
                <hr>
                <h5>title:<br>{{ $publication->titer }}</h5>
                <p>Description:{{ $publication->body }}</p>
                @if (!is_null($publication->image))
                    <footer class="blockquote-footer">
                        <img class="img-fluid" src="{{ asset('storage/' . $publication->image) }}" alt="image">
                        <br>
                        <cite title="Source title">{{ $publication->created_at->format('d-m-Y') }}</cite>
                    </footer>
                @endif
            </div>
        </blockquote>
        <a class="float-end btn btn-primary btn-sm"
        href="{{ route('publication.edit', $publication->id) }}">Modifier</a>
    <form action="{{ route('publication.destroy', $publication->id) }}" method="post">
        @csrf
        @method('DELETE')
        <button onclick="return confirm('Voulez-vous vraiment supprimer la recette')"
            class="mx-2 float-end btn btn-danger btn-sm">Supprimer</button>
    </form>

    </div>
</div>
