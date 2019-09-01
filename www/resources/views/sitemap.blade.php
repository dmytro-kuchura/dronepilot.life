<?= '<' . '?' . 'xml version="1.0" encoding="UTF-8"?>' . "\n"; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xhtml="http://www.w3.org/1999/xhtml">
    @if (!empty($sitemap))
        @foreach ($sitemap as $obj)
            <url>
                <loc>{{ url($obj->slug) }}</loc>
                <lastmod>{{ $obj->updated_at->tz('GMT')->toAtomString() }}</lastmod>
                <changefreq>monthly</changefreq>
                <priority>1</priority>
            </url>
        @endforeach
    @endif

    @if (!empty($pages))
        @foreach ($pages as $page)
            <url>
                <loc>{{ url('blog/' . $page->alias) }}</loc>
                <lastmod>{{ $page->updated_at->tz('GMT')->toAtomString() }}</lastmod>
                <changefreq>monthly</changefreq>
                <priority>1</priority>
            </url>
        @endforeach
    @endif
</urlset>
