<x-layout>
    <section class="container py-5">
        <div class="page-header text-center mb-5">
            <h1 class="page-title">
                {{ __('ui.articlesForCategory') }}
                <span class="text-primary fst-italic">
                    {{ __('ui.' . $category->name) }}
                </span>
            </h1>
        </div>

        <div class="row justify-content-center align-items-stretch g-4">
            @forelse ($articles as $article)
                <div class="col-12 col-md-6 col-lg-4 d-flex justify-content-center">
                    <x-card :article="$article" />
                </div>
            @empty
                <div class="col-12 text-center">
                    <div class="empty-state">
                        <h3>
                            {{ __('ui.noArticlesForCategory') }}
                        </h3>

                        @auth
                            <a class="btn btn-presto mt-4" href="{{ route('create.article') }}">
                                {{ __('ui.publishArticle') }}
                            </a>
                        @endauth
                    </div>
                </div>
            @endforelse
        </div>
    </section>
</x-layout>