<x-layout>
    <section class="container py-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                @if (session()->has('message'))
                    <div class="alert alert-success text-center shadow rounded">
                        {{ session('message') }}
                    </div>
                @endif
            </div>
        </div>

        <div class="page-header text-center mb-5">
            <h1 class="page-title">
                {{ __('ui.revisorDashboard') }}
            </h1>
        </div>

        @if ($article_to_check)
            <div class="row justify-content-center align-items-start g-4">
                <div class="col-12 col-lg-7">
                    <div class="revisor-panel">
                        <h4 class="fw-bold mb-4">
                            {{ __('ui.imageCheck') }}
                        </h4>

                        @if ($article_to_check->images->count())
                            <div class="row g-4">
                                @foreach ($article_to_check->images as $key => $image)
                                    <div class="col-12">
                                        <div class="vision-card">
                                            <div class="row g-0 align-items-stretch">
                                                <div class="col-12 col-md-4">
                                                    <div class="vision-image-wrapper">
                                                        <img 
                                                            src="{{ $image->getUrl(300, 300) }}"
                                                            class="vision-image"
                                                            alt="Immagine {{ $key + 1 }} dell'articolo {{ $article_to_check->title }}"
                                                        >
                                                    </div>
                                                </div>

                                                <div class="col-12 col-md-5">
                                                    <div class="vision-section">
                                                        <h5 class="vision-title">
                                                            {{ __('ui.labels') }}
                                                        </h5>

                                                        <div class="vision-labels">
                                                            @if ($image->labels)
                                                                @foreach ($image->labels as $label)
                                                                    <span class="vision-label">
                                                                        #{{ $label }}
                                                                    </span>
                                                                @endforeach
                                                            @else
                                                                <p class="text-muted fst-italic mb-0">
                                                                    No labels
                                                                </p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-12 col-md-3">
                                                    <div class="vision-section">
                                                        <h5 class="vision-title">
                                                            {{ __('ui.ratings') }}
                                                        </h5>

                                                        <div class="rating-list">
                                                            <div class="rating-item">
                                                                <i class="{{ $image->adult }}"></i>
                                                                <span>adult</span>
                                                            </div>

                                                            <div class="rating-item">
                                                                <i class="{{ $image->violence }}"></i>
                                                                <span>violence</span>
                                                            </div>

                                                            <div class="rating-item">
                                                                <i class="{{ $image->spoof }}"></i>
                                                                <span>spoof</span>
                                                            </div>

                                                            <div class="rating-item">
                                                                <i class="{{ $image->racy }}"></i>
                                                                <span>racy</span>
                                                            </div>

                                                            <div class="rating-item">
                                                                <i class="{{ $image->medical }}"></i>
                                                                <span>medical</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @else
                            <div class="row g-4">
                                @for ($i = 0; $i < 6; $i++)
                                    <div class="col-12 col-md-6 col-lg-4 text-center">
                                        <img 
                                            src="https://picsum.photos/300" 
                                            class="img-fluid rounded shadow"
                                            alt="immagine segnaposto"
                                        >
                                    </div>
                                @endfor
                            </div>
                        @endif
                    </div>
                </div>

                <div class="col-12 col-lg-5">
                    <div class="revisor-article-card">
                        <span class="show-category">
                            {{ __('ui.' . $article_to_check->category->name) }}
                        </span>

                        <h2 class="show-title mt-3">
                            {{ $article_to_check->title }}
                        </h2>

                        <h5 class="mt-3">
                            {{ __('ui.author') }}:
                            <span class="fw-bold">{{ $article_to_check->user->name }}</span>
                        </h5>

                        <h3 class="show-price mt-3">
                            {{ $article_to_check->price }} €
                        </h3>

                        <div class="show-description mt-4">
                            <h5 class="fw-bold">
                                {{ __('ui.description') }}
                            </h5>

                            <p>
                                {{ $article_to_check->description }}
                            </p>
                        </div>

                        <div class="revisor-actions mt-5">
                            <form action="{{ route('reject', ['article' => $article_to_check]) }}" method="POST">
                                @csrf
                                @method('PATCH')

                                <button class="btn btn-danger btn-review">
                                    {{ __('ui.reject') }}
                                </button>
                            </form>

                            <form action="{{ route('accept', ['article' => $article_to_check]) }}" method="POST">
                                @csrf
                                @method('PATCH')

                                <button class="btn btn-success btn-review">
                                    {{ __('ui.accept') }}
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <div class="empty-state text-center">
                <h1 class="fst-italic display-5">
                    {{ __('ui.noArticlesToReview') }}
                </h1>

                <a href="{{ route('homepage') }}" class="mt-4 btn btn-presto">
                    {{ __('ui.backToHomepage') }}
                </a>
            </div>
        @endif
    </section>
</x-layout>