<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\SitemapGenerator;
use Spatie\Sitemap\Tags\Url as SitemapUrl; // Alias dla klasy Spatie\Sitemap\Tags\Url
use Illuminate\Support\Facades\URL as LaravelURL; // Alias dla fasady URL

class GenerateSitemap extends Command
{
    // Sygnatura komendy
    protected $signature = 'sitemap:generate';

    // Opis komendy
    protected $description = 'Generate the sitemap for the website';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        // Pobieranie dynamicznego adresu URL
        $baseUrl = LaravelURL::to('/');

        // Generowanie sitemap z filtrowaniem URL-i, które zawierają "/storage"
        SitemapGenerator::create($baseUrl)
            ->hasCrawled(function (SitemapUrl $url) { // Używamy aliasu SitemapUrl
                // Filtruj URL-e, które zawierają "/storage"
                if (strpos($url->url, '/storage') !== false) {
                    return;
                }

                return $url;
            })
            ->writeToFile(public_path('sitemap.xml'));

        // Informacja zwrotna dla użytkownika
        $this->info('Sitemap generated successfully!');
    }
}
