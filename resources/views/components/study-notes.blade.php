<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Comic+Neue:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap');
    </style>

    <style>
        :root {
            --primary-gradient: linear-gradient(135deg, #14b8a6 0%, #3b82f6 100%);
            --bg-gradient-hero: linear-gradient(180deg, rgba(240, 253, 250, 0.7) 0%, rgba(239, 246, 255, 0.4) 30%, #ffffff 100%);
            --bg-gradient-banner: linear-gradient(90deg, #14b8a6 0%, #3b82f6 50%, #8b5cf6 100%);
            --primary-color: #0d9488;
            --text-primary: #1e293b;
            --text-muted: #64748b;
        }

        .bg-brand-hero {
            background: var(--bg-gradient-hero);
        }

        .bg-brand-primary {
            background: var(--primary-gradient);
        }

        .bg-brand-banner {
            background: var(--bg-gradient-banner);
        }

        .text-brand-gradient {
            background: var(--primary-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .comic-neue-light {
            font-family: "Comic Neue", cursive;
            font-weight: 300;
            font-style: normal;
        }

        .comic-neue-regular {
            font-family: "Comic Neue", cursive;
            font-weight: 400;
            font-style: normal;
        }

        .comic-neue-bold {
            font-family: "Comic Neue", cursive;
            font-weight: 700;
            font-style: normal;
        }

        .comic-neue-light-italic {
            font-family: "Comic Neue", cursive;
            font-weight: 300;
            font-style: italic;
        }

        .comic-neue-regular-italic {
            font-family: "Comic Neue", cursive;
            font-weight: 400;
            font-style: italic;
        }

        .comic-neue-bold-italic {
            font-family: "Comic Neue", cursive;
            font-weight: 700;
            font-style: italic;
        }

        .prose-custom h3 {
            color: var(--primary-color);
            font-weight: 800;
            font-size: 1.5rem;
            margin-top: 2rem;
            margin-bottom: 1rem;
        }

        .prose-custom p {
            color: var(--text-muted);
            line-height: 1.8;
            margin-bottom: 1.25rem;
            font-size: 1.1rem;
        }

        .prose-custom ul {
            margin-bottom: 1.5rem;
        }

        .prose-custom li {
            margin-bottom: 0.75rem;
            color: var(--text-primary);
            font-weight: 500;
            display: flex;
            align-items: flex-start;
        }

        .prose-custom li::before {
            content: "•";
            color: #14b8a6;
            font-weight: bold;
            display: inline-block;
            width: 1em;
            margin-left: -1em;
        }
    </style>

</head>

<body>
    {{ $slot }}
</body>

</html>
