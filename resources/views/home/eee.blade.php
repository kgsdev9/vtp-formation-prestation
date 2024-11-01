<div class="card m-2" style="width: 18rem;">
    <div class="card-header bg-primary text-white">
        {{ $courseepisode->title }}
    </div>
    <div class="card-body">
        <p><strong>Durée:</strong> {{ $courseepisode->duration }} minutes</p>
        <p><strong>Prévisualisation:</strong> {{ $courseepisode->previsualiation ? 'Disponible' : 'Non disponible' }}</p>
        <a href="{{ $courseepisode->url }}" class="btn btn-outline-primary" target="_blank">Voir l'épisode</a>
    </div>
</div>
