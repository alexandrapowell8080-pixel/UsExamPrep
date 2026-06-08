{!! '<?xml version="1.0" encoding="UTF-8"?>' !!}
<urlset xmlns="http://sitemaps.org">
    <url>
        <loc>https://usexamprep.com/</loc>
        <lastmod>2026-06-08T05:53:39+00:00</lastmod>
        <priority>1.00</priority>
    </url>
    @foreach ($urls as $collection)
        <url>
            <loc>{{ $collection['url'] }}</loc>
            <lastmod>
                {{ (isset($collection['updated_at']) ? carbon($collection['updated_at']) : now())->utc()->toIso8601String() }}
            </lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
    @endforeach
</urlset>
