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
    <div class="container-fluid text-center">
        <div class="row vh-100 justify-content-center align-items-center">
            <div class="col-12">
                <h1 class="display-1">Presto.it</h1>
                <div class="my-3">
                    @auth
                        <a class="btn btn-dark" href="{{ route('create.article') }} ">{{ __('ui.publishArticle') }}</a>
                    @endauth
                </div>
                <div class="row height-custom justify-content-center align-items-center py-5">
                    @forelse ($articles as $article)
                        <div class="col-12 col-md-3 ">
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
            </div>
        </div>
    </div>
</x-layout>