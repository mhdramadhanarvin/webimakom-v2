<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Jaybizzle\CrawlerDetect\Fixtures\Crawlers;
use Spatie\Sitemap\SitemapGenerator;
use Spatie\Sitemap\Tags\Url;
use Symfony\Component\DomCrawler\Crawler;

class GenerateSitemap extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate the sitemap.';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        // modify this to your own needs
        SitemapGenerator::create("https://imakomunpab.com")
            ->writeToFile(public_path('new_sitemap.xml'));
    }
}
