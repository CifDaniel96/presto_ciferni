<div class="card mx-auto card-w shadow article-card text-center mb-4">
    <div class="article-card-img-wrapper">
        <img 
            src="{{ $article->images->isNotEmpty() ? $article->images->first()->getUrl(300, 300) : 'https://picsum.photos/200' }}" 
            class="card-img-top article-card-img" 
            alt="Immagine dell'articolo {{ $article->title }}"
        >
    </div>

    <div class="card-body article-card-body d-flex flex-column">
        <h4 class="card-title article-card-title">
            {{ $article->title }}
        </h4>

        <h6 class="card-subtitle article-card-price mt-2">
            {{ $article->price }} €
        </h6>

        <div class="d-flex justify-content-center align-items-center mt-auto pt-4 article-card-actions flex-wrap">
            <a href="{{ route('article.show', compact('article')) }}" class="btn btn-primary">
                {{ __('ui.detail') }}
            </a>

            <a href="{{ route('byCategory', ['category' => $article->category]) }}" class="btn btn-category">
                {{ __('ui.' . $article->category->name) }}
            </a>
        </div>
    </div>
</div>