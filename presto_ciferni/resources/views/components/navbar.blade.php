<nav class="navbar navbar-expand-lg bg-white shadow-sm sticky-top presto-navbar">
    <div class="container-fluid px-3 px-lg-4">
        <a class="navbar-brand fw-bold" href="{{ route('homepage') }}">
            Presto.it
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav align-items-lg-center gap-lg-1">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('homepage') }}">
                        {{ __('ui.home') }}
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('article.index') }}">
                        {{ __('ui.allArticles') }}
                    </a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        {{ __('ui.categories') }}
                    </a>

                    <ul class="dropdown-menu presto-dropdown">
                        @foreach ($categories as $category)
                            <li>
                                <a class="dropdown-item text-capitalize"
                                    href="{{ route('byCategory', ['category' => $category]) }}">
                                    {{ __('ui.' . $category->name) }}
                                </a>
                            </li>

                            @if (!$loop->last)
                                <li><hr class="dropdown-divider"></li>
                            @endif
                        @endforeach
                    </ul>
                </li>

                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            {{ __('ui.hello') }}, {{ auth()->user()->name }}
                        </a>

                        <ul class="dropdown-menu presto-dropdown">
                            <li>
                                <a class="dropdown-item" href="{{ route('create.article') }}">
                                    {{ __('ui.create') }}
                                </a>
                            </li>

                            <li>
                                <a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">
                                    {{ __('ui.logout') }}
                                </a>
                            </li>
                        </ul>

                        <form action="{{ route('logout') }}" method="post" class="d-none" id="form-logout">
                            @csrf
                        </form>
                    </li>

                    @if (auth()->user()->is_revisor)
                        <li class="nav-item">
                            <a class="nav-link revisor-link position-relative" href="{{ route('revisor.index') }}">
                                {{ __('ui.revisorZone') }}

                                <span class="revisor-badge badge rounded-pill bg-danger">
                                    {{ \App\Models\Article::toBeRevisedCount() }}
                                </span>
                            </a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            {{ __('ui.hello') }}, {{ __('ui.user') }}!
                        </a>

                        <ul class="dropdown-menu presto-dropdown">
                            <li>
                                <a class="dropdown-item" href="{{ route('login') }}">
                                    {{ __('ui.login') }}
                                </a>
                            </li>

                            <li><hr class="dropdown-divider"></li>

                            <li>
                                <a class="dropdown-item" href="{{ route('register') }}">
                                    {{ __('ui.register') }}
                                </a>
                            </li>
                        </ul>
                    </li>
                @endauth
            </ul>

            <form class="d-flex ms-lg-auto my-3 my-lg-0 search-form" role="search" action="{{ route('article.search') }}" method="GET">
                <div class="input-group">
                    <input type="search" name="query" class="form-control" placeholder="{{ __('ui.search') }}" aria-label="search">
                    <button type="submit" class="btn btn-outline-success">
                        {{ __('ui.search') }}
                    </button>
                </div>
            </form>

            <div class="d-flex align-items-center gap-2 ms-lg-3 language-wrapper">
                <x-_locale lang="it" />
                <x-_locale lang="uk" />
                <x-_locale lang="es" />
            </div>
        </div>
    </div>
</nav>