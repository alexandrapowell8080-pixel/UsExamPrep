<!-- resources/views/errors/404.blade.php -->
<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Page Not Found</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        :root {
            --primary-gradient: linear-gradient(135deg, #14b8a6 0%, #3b82f6 100%);
            --bg-gradient-hero: linear-gradient(180deg, rgba(240, 253, 250, 0.7) 0%, rgba(239, 246, 255, 0.4) 30%, #ffffff 100%);
            --bg-gradient-banner: linear-gradient(90deg, #14b8a6 0%, #3b82f6 50%, #8b5cf6 100%);
            --primary-color: #0d9488;
            --primary-hover: #0f766e;
            --text-primary: #1e293b;
            --text-muted: #64748b;
            --border-color: #e2e8f0;
        }

        .bg-hero { background: var(--bg-gradient-hero); }
        .bg-primary-grad { background: var(--primary-gradient); }
        .text-gradient { 
            background: var(--bg-gradient-banner);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .text-main { color: var(--text-primary); }
        .text-muted-custom { color: var(--text-muted); }
        .border-theme { border-color: var(--border-color); }
    </style>
</head>
<body class="h-full bg-hero flex items-center justify-center px-6">

    <!-- Subtle Decorative Blobs -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-[5%] right-[10%] w-[30%] h-[30%] rounded-full bg-[#14b8a6]/5 blur-[100px]"></div>
        <div class="absolute bottom-[5%] left-[10%] w-[30%] h-[30%] rounded-full bg-[#3b82f6]/5 blur-[100px]"></div>
    </div>

    <div class="relative max-w-xl w-full text-center">
        <!-- Main Error Display -->
        <div class="relative">
            <h1 class="text-[10rem] md:text-[14rem] font-black text-slate-900/5 leading-none select-none">
                404
            </h1>
            <div class="absolute inset-0 flex flex-col items-center justify-center mt-8">
                <span class="text-6xl md:text-7xl font-extrabold text-gradient">
                    Oops!
                </span>
            </div>
        </div>

        <!-- Typography Section -->
        <div class="mt-4 space-y-4">
            <h2 class="text-2xl md:text-3xl font-bold text-main">
                {{ $exception->getMessage() ?: "We can't find that page." }}
            </h2>
            <p class="text-muted-custom max-w-md mx-auto text-lg leading-relaxed">
                The link might be broken, or the page may have moved. 
                Let's get you back on track.
            </p>
        </div>

        <!-- Actions -->
        <div class="mt-10 flex flex-col sm:flex-row items-center justify-center gap-4">
            <a href="{{ url('/') }}" 
               class="w-full sm:w-auto px-10 py-4 bg-primary-grad text-white font-bold rounded-2xl hover:opacity-90 transition-all active:scale-95 shadow-lg shadow-teal-500/20">
                Back to Dashboard
            </a>
            
            <button onclick="window.history.back()" 
                    class="w-full sm:w-auto px-10 py-4 bg-white text-main font-semibold rounded-2xl border border-theme hover:bg-slate-50 transition-all active:scale-95">
                Go Back
            </button>
        </div>

        <!-- Ref ID / Support Info -->
        <div class="mt-16 pt-8 border-t border-theme">
            <p class="text-sm text-slate-400 font-medium">
                Error Reference: <span class="font-mono text-teal-600">{{ substr(md5(now()), 0, 8) }}</span>
            </p>
        </div>
    </div>

</body>
</html>