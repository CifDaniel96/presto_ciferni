<x-layout>
    <section class="container py-5">
        <div class="page-header text-center mb-5">
            <h1 class="page-title">
                {{ __('ui.publishArticle') }}
            </h1>
        </div>

        <div class="row justify-content-center">
            <div class="col-12 col-lg-7">
                <livewire:create-article-form />
            </div>
        </div>
    </section>
</x-layout>