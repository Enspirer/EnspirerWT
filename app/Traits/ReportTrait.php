<?php


namespace App\Traits;

use App\Models\Projects;
use GuzzleHttp\Client as HttpClient;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

trait ReportTrait
{
    /**
     * The analyzed URL.
     *
     * @var
     */
    private $url;

    /**
     * Store a new Report.
     *
     * @param Request $request
     * @return Report
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    protected function reportStore(Request $request)
    {
        return $this->model($request, new Report);
    }

    /**
     * Update the Report.
     *
     * @param Request $request
     * @param Report $report
     * @return Report
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    protected function reportUpdate(Request $request, Report $report)
    {
        return $this->model($request, $report);
    }

    /**
     * Create or update the model.
     *
     * @param Request $request
     * @param Report $report
     * @return Report
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    private function model(Request $request)
    {
        // If the request contains a report request
        $reportRequest = $request->reportRequest;




    }

    /**
     * Returns whether the URL is internal or not.
     *
     * @param $url
     * @return bool
     */
    private function isInternalUrl($url)
    {
        if (mb_strpos($url, parse_url($this->url, PHP_URL_SCHEME).'://'.parse_url($this->url, PHP_URL_HOST)) === 0) {
            return true;
        }

        return false;
    }

    /**
     * Parse and format the URL.
     *
     * @param $url
     * @return array|false|string|string[]
     */
    private function url($url)
    {
        $url = str_replace(['\\?', '\\&', '\\#', '\\~', '\\;'], ['?', '&', '#', '~', ';'], $url);

        if (mb_strpos($url, '#') !== false) {
            $url = mb_substr($url, 0, mb_strpos($url, '#'));
        }

        if (mb_strpos($url, 'http://') === 0) {
            return $url;
        }

        if (mb_strpos($url, 'https://') === 0) {
            return $url;
        }

        if (mb_strpos($url, '/') === 0) {
            return rtrim(parse_url($this->url, PHP_URL_SCHEME).'://'.parse_url($this->url, PHP_URL_HOST), '/').'/'.ltrim($url, '/');
        }

        if (mb_strpos($url, 'data:image') === 0) {
            return $url;
        }

        if (mb_strpos($url, 'tel') === 0) {
            return $url;
        }

        if (mb_strpos($url, 'mailto') === 0) {
            return $url;
        }

        return rtrim(parse_url($this->url, PHP_URL_SCHEME).'://'.parse_url($this->url, PHP_URL_HOST), '/').'/'.ltrim($url, '/');
    }

    /**
     * Parse and format a text string.
     *
     * @param $string
     * @return string
     */
    private function text($string)
    {
        return trim(preg_replace('/(?:\s{2,}+|[^\S ])/', ' ', $string));
    }

    /**
     * Format the robots rule into regexp rule.
     *
     * @param $value
     * @return string
     */
    private function formatRobotsRule($value)
    {
        $replacementsBeforeQuote = ['*' => '_ASTERISK_WILDCARD_', '$' => '_DOLLAR_WILDCARD_'];

        $replacementsAfterQuote = ['_ASTERISK_WILDCARD_' => '.*', '_DOLLAR_WILDCARD_' => '$'];

        return '/^' . str_replace(array_keys($replacementsAfterQuote), array_values($replacementsAfterQuote), preg_quote(str_replace(array_keys($replacementsBeforeQuote), array_values($replacementsBeforeQuote), $value), '/')) . '/';
    }
}