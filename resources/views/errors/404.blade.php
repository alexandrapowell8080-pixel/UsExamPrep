<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">
    <title>404 - Page Not Found | UsExamPrep</title>
    <meta name="robots" content="noindex, nofollow">
    <meta name="googlebot" content="noindex, nofollow">
    <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/404.css') }}" rel="stylesheet">
    <script src="{{ asset('js/welcome.js') }}" defer></script>
</head>

<body>
    <div id="root">
        <div class="page-wrapper">

            @include('partials.nav-bar')

            <main class="main-content error-main">
                <div class="error-blob-1"></div>
                <div class="error-blob-2"></div>

                <div class="error-content-wrapper">
                    <div class="error-number-wrap">
                        <h1 class="error-number-bg">404</h1>
                        <div class="error-text-overlay">
                            <span class="error-oops">Oops!</span>
                        </div>
                    </div>

                    <div>
                        <h2 class="error-msg-title">
                            {{ $exception->getMessage() == 'No notes found' ? 'No notes found': "We can't find that page." }}
                        </h2>
                        <p class="error-msg-desc">
                            The link might be broken, or the page may have moved. Let's get you back on track.
                        </p>
                    </div>

                    <div class="error-actions">
                        <a href="{{ url('/') }}" class="error-btn-custom btn-home">
                            Back to Dashboard
                        </a>
                        <button onclick="window.history.back()" class="error-btn-custom btn-prev">
                            Go Back
                        </button>
                    </div>

                    <div class="error-ref">
                        <p>Error Reference: <span>{{ substr(md5(now()), 0, 8) }}</span></p>
                    </div>
                </div>
            </main>

            @include('partials.footer')

        </div>
    </div>
</body>

</html>