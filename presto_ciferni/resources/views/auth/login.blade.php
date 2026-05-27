<x-layout>
    <section class="container py-5">
        <div class="page-header text-center mb-5">
            <h1 class="page-title">
                {{ __('ui.login') }}
            </h1>
        </div>

        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-5">
                <form method="POST" action="{{ route('login') }}" class="form-card">
                    @csrf

                    <div class="mb-4">
                        <label for="loginEmail" class="form-label fw-bold">
                            {{ __('ui.emailAddress') }}
                        </label>

                        <input 
                            type="email" 
                            class="form-control form-control-lg @error('email') is-invalid @enderror" 
                            id="loginEmail" 
                            name="email"
                            value="{{ old('email') }}"
                        >

                        @error('email')
                            <p class="fst-italic text-danger mt-2 mb-0">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="password" class="form-label fw-bold">
                            {{ __('ui.password') }}
                        </label>

                        <input 
                            type="password" 
                            class="form-control form-control-lg @error('password') is-invalid @enderror" 
                            id="password" 
                            name="password"
                        >

                        @error('password')
                            <p class="fst-italic text-danger mt-2 mb-0">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-presto">
                            {{ __('ui.login') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</x-layout>