

<x-master title="Publication">
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-4">Les Recettes</h1>
        
        <form action="{{ route('publication.search') }}" method="GET" class="mb-4 flex items-center">
            <input type="text" name="search" placeholder="Entrez un nom de recette" class="px-4 py-2 border border-gray-300 rounded-md w-64 focus:outline-none focus:border-blue-500">
            <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md ml-2 focus:outline-none hover:bg-blue-600 transition duration-300">Rechercher</button>
        </form>
        
        <a href="{{ route('publication.create') }}" class="block w-full max-w-xs mx-auto bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded text-center mb-8">Créer une nouvelle recette</a>
        
        <div class="container">
            <div class="row">
                @foreach ($publications as $publication)
                    <x-publication :publication="$publication" />
                @endforeach
            </div>
        </div>
    </x-master>
