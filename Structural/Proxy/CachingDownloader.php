<?php
/**
 * @author isaitkulov
 * @date   : 6/11/21 10:37 AM
 */

namespace Structural\Proxy;

class CachingDownloader implements Downloader
{
    /**
     * @var SimpleDownloader
     */
    private $downloader;

    /**
     * @var string[]
     */
    private $cache = [];

    public function __construct(SimpleDownloader $downloader)
    {
        $this->downloader = $downloader;
    }

    public function download(string $url): string
    {
        if (!isset($this->cache[$url])) {
            $result = $this->downloader->download($url);
            $this->cache[$url] = $result;
        } else {
            echo "Loaded from cache \n";
        }
        return $this->cache[$url];
    }
}