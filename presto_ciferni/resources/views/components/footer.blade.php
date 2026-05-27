<footer class="presto-footer mt-5">
    <div class="container py-5">
        <div class="row justify-content-center text-center">
            <div class="col-12 col-md-8 col-lg-6">
                <h5 class="fw-bold mb-2">
                    {{ __('ui.becomeRevisorQuestion') }}
                </h5>

                <p class="text-muted mb-4">
                    {{ __('ui.becomeRevisorText') }}
                </p>

                <a href="{{ route('become.revisor') }}" class="btn btn-presto">
                    {{ __('ui.becomeRevisor') }}
                </a>
            </div>
        </div>
    </div>

    <div class="presto-footer-bottom text-center py-3">
        © 2026 Presto.it
    </div>
</footer>