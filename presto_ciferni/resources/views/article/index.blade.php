<x-layout>
    <section class="container py-5">
        <div class="page-header text-center mb-5">
            <h1 class="page-title">
                {{ __('ui.allArticles') }}
            </h1>
        </div>

        <div class="row justify-content-center align-items-stretch g-4">
            @forelse ($articles as $article)
                <div class="col-12 col-md-6 col-lg-4 d-flex justify-content-center">
                    <x-card :article="$article" />
                </div>
            @empty
                <div class="col-12">
                    <div class="empty-state text-center">
                        <h3>
                            {{ __('ui.noArticlesYet') }}
                        </h3>
                    </div>
                </div>
            @endforelse
        </div>

        <div class="d-flex justify-content-center mt-5">
            {{ $articles->links() }}
        </div>
    </section>
</x-layout>