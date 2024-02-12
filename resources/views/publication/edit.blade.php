<x-master title="Mon recette">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Modifier Recette</div>
                    <div class="card-body">

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <h6>Errors</h6>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form method="POST" action="{{ route('publication.update', $publication->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="titer" class="form-label">Titre</label>
                                <input type="text" id="titer" name="titer" class="form-control" value="{{ old('titer', $publication->titer) }}">
                                @error('titer')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="body" class="form-label">Description</label>
                                <textarea id="body" name="body" class="form-control">{{ old('body', $publication->body) }}</textarea>
                                @error('body')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="image" class="form-label">Image</label>
                                <img src="{{ asset('storage/' . $publication->image) }}" class="card-img-top w-25 mx-auto d-block mb-2" alt="">
                                <input type="file" id="image" name="image" class="form-control">
                            </div>

                            <div class="d-grid my-2">
                                <button type="submit" class="btn btn-primary btn-block">
                                    Modifier
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-master>
