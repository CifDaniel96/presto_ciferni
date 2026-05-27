<x-layout>
    <section class="container py-5">
        <div class="page-header text-center mb-5">
            <h1 class="page-title">
                {{ __('ui.articleDetail') }}
            </h1>
        </div>

        <div class="row justify-content-center align-items-center g-5">
            <div class="col-12 col-lg-5">
                <div class="show-image-card">
                    @if ($article->images->count() > 0)
                        <div id="carouselExample" class="carousel slide">
                            <div class="carousel-inner">
                                @foreach ($article->images as $key => $image)
                                    <div class="carousel-item @if ($loop->first) active @endif">
                                        <img 
                                            src="{{ $image->getUrl(300, 300) }}" 
                                            class="d-block w-100 show-image"
                                            alt="Immagine {{ $key + 1 }} dell'articolo {{ $article->title }}"
                                        >
                                    </div>
                                @endforeach
                            </div>

                            @if ($article->images->count() > 1)
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                                    data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>

                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                                    data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            @endif
                        </div>
                    @else
                        <img 
                            src="https://picsum.photos/300" 
                            class="img-fluid show-image" 
                            alt="Nessuna foto inserita dall'utente"
                        >
                    @endif
                </div>
            </div>

            <div class="col-12 col-lg-6">
                <div class="show-detail-card">
                    <span class="show-category">
                        {{ __('ui.' . $article->category->name) }}
                    </span>

                    <h2 class="show-title mt-3">
                        {{ $article->title }}
                    </h2>
                    
                    <h5 class="mt-3 text-muted">
                        {{ __('ui.author') }}:
                        <span class="fw-bold text-dark">{{ $article->user->name }}</span>
                    </h5>

                    <h3 class="show-price mt-3">
                        {{ $article->price }} €
                    </h3>

                    <div class="show-description mt-4">
                        <h5 class="fw-bold">
                            {{ __('ui.description') }}
                        </h5>

                        <p>
                            {{ $article->description }}
                        </p>
                    </div>

                    <div class="mt-4 d-flex gap-3 flex-wrap">
                        <a href="{{ route('article.index') }}" class="btn btn-primary rounded-pill px-4">
                            {{ __('ui.allArticles') }}
                        </a>

                        <a href="{{ route('byCategory', ['category' => $article->category]) }}" class="btn btn-category rounded-pill px-4">
                            {{ __('ui.' . $article->category->name) }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>