<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc>{{ url('/') }}/beranda</loc>
        <lastmod>2022-04-22T09:48:37+01:00</lastmod>
        <priority>1.0</priority>
    </url>
    <url>
        <loc>{{ url('/') }}/prosedur</loc>
        <lastmod>2022-04-22T09:48:37+01:00</lastmod>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>{{ url('/') }}/beranda/pemula</loc>
        <lastmod>2022-04-22T09:48:37+01:00</lastmod>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>{{ url('/') }}/beranda/berita</loc>
        <lastmod>2022-04-22T09:48:37+01:00</lastmod>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>{{ url('/') }}/pelatihan</loc>
        <lastmod>2022-04-22T09:48:37+01:00</lastmod>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>{{ url('/') }}/galeri</loc>
        <lastmod>2022-04-22T09:48:37+01:00</lastmod>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>{{ url('/') }}/qa</loc>
        <lastmod>2022-04-22T09:48:37+01:00</lastmod>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>{{ url('/') }}/tentang-kami</loc>
        <lastmod>2022-04-22T09:48:37+01:00</lastmod>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>{{ url('/') }}/register</loc>
        <lastmod>2022-04-22T09:48:37+01:00</lastmod>
        <priority>1.0</priority>
    </url>
    <url>
        <loc>{{ url('/') }}/login</loc>
        <lastmod>2022-04-22T09:48:37+01:00</lastmod>
        <priority>1.0</priority>
    </url>
    @foreach ($loker as $lkr)
    <url>
        <loc>{{ url('/') }}/beranda/loker/{{ $lkr->slug }}</loc>
        <lastmod>{{ $lkr->created_at->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.6</priority>
    </url>
    @endforeach
    @foreach ($magang as $mg)
    <url>
        <loc>{{ url('/') }}/beranda/magang/{{ $mg->slug }}</loc>
        <lastmod>{{ $mg->created_at->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.6</priority>
    </url>
    @endforeach
    @foreach ($news as $row)
    <url>
        <loc>{{ url('/') }}/beranda/berita/{{ $row->slug }}+{{ $row->id_news }}</loc>
        <lastmod>{{ $row->created_at->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.6</priority>
    </url>
    @endforeach
</urlset>