<x-layout>
    <div class="container pt-4">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                @if (session()->has('errorMessage'))
                    <div class="alert alert-danger text-center shadow rounded">
                        {{ session('errorMessage') }}
                    </div>
                @endif

                @if (session()->has('message'))
                    <div class="alert alert-success text-center shadow rounded">
                        {{ session('message') }}
                    </div>
                @endif
            </div>
        </div>
    </div>

    <section class="container py-4 py-md-5">
        <div class="home-hero text-center">
            <h1 class="display-1 home-title">Presto.it</h1>

            <p class="home-subtitle">
                    {{ __('ui.homeSubtitle') }}
            </p>

            <div class="mt-4">
                @auth
                    <a class="btn btn-presto" href="{{ route('create.article') }}">
                        {{ __('ui.publishArticle') }}
                    </a>
                @endauth
            </div>
        </div>
    </section>

    <section class="container pb-5">
        <div class="row justify-content-center align-items-stretch g-4">
            @forelse ($articles as $article)
                <div class="col-12 col-md-6 col-lg-4 d-flex justify-content-center">
                    <x-card :article="$article" />
                </div>
            @empty
                <div class="col-12">
                    <h3 class="text-center">
                        {{ __('ui.noArticlesYet') }}
                    </h3>
                </div>
            @endforelse
        </div>
    </section>
</x-layout>