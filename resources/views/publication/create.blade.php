<x-master title="Mon Profile">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Ajouter une recette</div>

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

                        <form method="POST" action="{{ route('publication.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="titer" class="form-label">Titre</label>
                                <input type="text" id="titer" name="titer" class="form-control" value="{{ old('titer') }}">
                                @error('titer')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="body" class="form-label">Description</label>
                                <textarea id="body" name="body" class="form-control">{{ old('body') }}</textarea>
                                @error('body')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="image" class="form-label">Image</label>
                                <input type="file" id="image" name="image" class="form-control">
                            </div>

                            <div class="d-grid my-2">
                                <button type="submit" class="btn btn-primary btn-block">
                                    add
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-master>
