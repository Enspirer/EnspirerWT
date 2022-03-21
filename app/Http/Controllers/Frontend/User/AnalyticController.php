<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use App\Model\State;
use Illuminate\Http\Request;
use App\Models\Projects;
use DB;
use App\Models\Widgets;
use Modules\WidgetManager\Entities\ImsClients;
use Carbon\Carbon;

class AnalyticController extends Controller
{
    private function statsGuard($website)
    {
        // If the link stats is not set to public
        if($website->privacy !== 0) {
            $user = Auth::user();

            // If the website's privacy is set to private
            if ($website->privacy == 1) {
                // If the user is not authenticated
                // Or if the user is not the owner of the link and not an admin
                if ($user == null || $user->id != $website->user_id && $user->role != 1) {
                    abort(403);
                }
            }

            // If the website's privacy is set to password
            if ($website->privacy == 2) {
                // If there's no passowrd validation in the current session
                if (!session(md5($website->url))) {
                    // If the user is not authenticated
                    // Or if the user is not the owner of the link and not an admin
                    if ($user == null || $user->id != $website->user_id && $user->role != 1) {
                        return true;
                    }
                }
            }
        }

        return false;
    }

    private function getTraffic($website, $range, $type)
    {
        // If the date range is for a single day
        if ($range['unit'] == 'hour') {
            $rows = State::where([['website_id', '=', $website->id], ['name', '=', $type . '_hours']])
                ->whereBetween('date', [$range['from'], $range['to']])
                ->orderBy('date', 'asc')
                ->get();

            $output = ['00' => 0, '01' => 0, '02' => 0, '03' => 0, '04' => 0, '05' => 0, '06' => 0, '07' => 0, '08' => 0, '09' => 0, '10' => 0, '11' => 0, '12' => 0, '13' => 0, '14' => 0, '15' => 0, '16' => 0, '17' => 0, '18' => 0, '19' => 0, '20' => 0, '21' => 0, '22' => 0, '23' => 0];

            // Map the values to each date
            foreach ($rows as $row) {
                $output[$row->value] = $row->count;
            }
        } else {
            $rows = State::select([
                DB::raw("date_format(`date`, '". str_replace(['Y', 'm', 'd'], ['%Y', '%m', '%d'], $range['format'])."') as `date_result`, SUM(`count`) as `aggregate`")
            ])
                ->where([['website_id', '=', $website->id], ['name', '=', $type]])
                ->whereBetween('date', [$range['from'], $range['to']])
                ->groupBy('date_result')
                ->orderBy('date_result', 'asc')
                ->get();

            $rangeMap = $this->calcAllDates(Carbon::createFromFormat('Y-m-d', $range['from'])->format($range['format']), Carbon::createFromFormat('Y-m-d', $range['to'])->format($range['format']), $range['unit'], $range['format'], 0);

            // Remap the result set, and format the array
            $collection = $rows->mapWithKeys(function ($result) use($range) {
                return [strval($range['unit'] == 'year' ? $result->date_result : Carbon::parse($result->date_result)->format($range['format'])) => $result->aggregate];
            })->all();

            // Merge the results with the pre-calculated possible time ranges
            $output = array_replace($rangeMap, $collection);
        }
        return $output;
    }

    /**
     * List of Social Networks domains.
     *
     * @return string[]
     */
    private function getSocialNetworksList()
    {
        return ['l.facebook.com', 't.co', 'l.instagram.com', 'out.reddit.com', 'www.youtube.com', 'away.vk.com', 't.umblr.com', 'www.pinterest.com'];
    }

    /**
     * List of Search Engine domains.
     *
     * @return string[]
     */
    private function getSearchEnginesList()
    {
        return ['www.google.com', 'www.google.com', 'www.google.ad', 'www.google.ae', 'www.google.com.af', 'www.google.com.ag', 'www.google.com.ai', 'www.google.al', 'www.google.am', 'www.google.co.ao', 'www.google.com.ar', 'www.google.as', 'www.google.at', 'www.google.com.au', 'www.google.az', 'www.google.ba', 'www.google.com.bd', 'www.google.be', 'www.google.bf', 'www.google.bg', 'www.google.com.bh', 'www.google.bi', 'www.google.bj', 'www.google.com.bn', 'www.google.com.bo', 'www.google.com.br', 'www.google.bs', 'www.google.bt', 'www.google.co.bw', 'www.google.by', 'www.google.com.bz', 'www.google.ca', 'www.google.cd', 'www.google.cf', 'www.google.cg', 'www.google.ch', 'www.google.ci', 'www.google.co.ck', 'www.google.cl', 'www.google.cm', 'www.google.cn', 'www.google.com.co', 'www.google.co.cr', 'www.google.com.cu', 'www.google.cv', 'www.google.com.cy', 'www.google.cz', 'www.google.de', 'www.google.dj', 'www.google.dk', 'www.google.dm', 'www.google.com.do', 'www.google.dz', 'www.google.com.ec', 'www.google.ee', 'www.google.com.eg', 'www.google.es', 'www.google.com.et', 'www.google.fi', 'www.google.com.fj', 'www.google.fm', 'www.google.fr', 'www.google.ga', 'www.google.ge', 'www.google.gg', 'www.google.com.gh', 'www.google.com.gi', 'www.google.gl', 'www.google.gm', 'www.google.gr', 'www.google.com.gt', 'www.google.gy', 'www.google.com.hk', 'www.google.hn', 'www.google.hr', 'www.google.ht', 'www.google.hu', 'www.google.co.id', 'www.google.ie', 'www.google.co.il', 'www.google.im', 'www.google.co.in', 'www.google.iq', 'www.google.is', 'www.google.it', 'www.google.je', 'www.google.com.jm', 'www.google.jo', 'www.google.co.jp', 'www.google.co.ke', 'www.google.com.kh', 'www.google.ki', 'www.google.kg', 'www.google.co.kr', 'www.google.com.kw', 'www.google.kz', 'www.google.la', 'www.google.com.lb', 'www.google.li', 'www.google.lk', 'www.google.co.ls', 'www.google.lt', 'www.google.lu', 'www.google.lv', 'www.google.com.ly', 'www.google.co.ma', 'www.google.md', 'www.google.me', 'www.google.mg', 'www.google.mk', 'www.google.ml', 'www.google.com.mm', 'www.google.mn', 'www.google.ms', 'www.google.com.mt', 'www.google.mu', 'www.google.mv', 'www.google.mw', 'www.google.com.mx', 'www.google.com.my', 'www.google.co.mz', 'www.google.com.na', 'www.google.com.ng', 'www.google.com.ni', 'www.google.ne', 'www.google.nl', 'www.google.no', 'www.google.com.np', 'www.google.nr', 'www.google.nu', 'www.google.co.nz', 'www.google.com.om', 'www.google.com.pa', 'www.google.com.pe', 'www.google.com.pg', 'www.google.com.ph', 'www.google.com.pk', 'www.google.pl', 'www.google.pn', 'www.google.com.pr', 'www.google.ps', 'www.google.pt', 'www.google.com.py', 'www.google.com.qa', 'www.google.ro', 'www.google.ru', 'www.google.rw', 'www.google.com.sa', 'www.google.com.sb', 'www.google.sc', 'www.google.se', 'www.google.com.sg', 'www.google.sh', 'www.google.si', 'www.google.sk', 'www.google.com.sl', 'www.google.sn', 'www.google.so', 'www.google.sm', 'www.google.sr', 'www.google.st', 'www.google.com.sv', 'www.google.td', 'www.google.tg', 'www.google.co.th', 'www.google.com.tj', 'www.google.tl', 'www.google.tm', 'www.google.tn', 'www.google.to', 'www.google.com.tr', 'www.google.tt', 'www.google.com.tw', 'www.google.co.tz', 'www.google.com.ua', 'www.google.co.ug', 'www.google.co.uk', 'www.google.com.uy', 'www.google.co.uz', 'www.google.com.vc', 'www.google.co.ve', 'www.google.vg', 'www.google.co.vi', 'www.google.com.vn', 'www.google.vu', 'www.google.ws', 'www.google.rs', 'www.google.co.za', 'www.google.co.zm', 'www.google.co.zw', 'www.google.cat', 'www.bing.com', 'search.yahoo.com', 'uk.search.yahoo.com', 'de.search.yahoo.com', 'fr.search.yahoo.com', 'es.search.yahoo.com', 'search.aol.co.uk', 'search.aol.com', 'duckduckgo.com', 'www.baidu.com', 'yandex.ru', 'www.ecosia.org', 'search.lycos.com'];
    }

    private function range()
    {
        try {
            $to = request()->input('to') ? Carbon::createFromFormat('Y-m-d', request()->input('to')) : Carbon::now();
        } catch (\Exception $e) {
            $to = Carbon::now();
        }

        try {
            $from = request()->input('from') ? Carbon::createFromFormat('Y-m-d', request()->input('from')) : $to;
        } catch (\Exception $exception) {
            $from = $to;
        }

        if ($from->diffInDays($to) < 1) {
            $unit = 'hour';
            $format = '';
        } elseif($from->diffInMonths($to) < 3) {
            $unit = 'day';
            $format = 'Y-m-d';
        } elseif ($from->diffInYears($to) < 2) {
            $unit = 'month';
            $format = 'Y-m';
        } else {
            $unit = 'year';
            $format = 'Y';
        }

        // Reset the date range if it exceeds the limits
        if ($from->diffInYears($to) >= 100) {
            $to = Carbon::now();
            $from = $to;
        }

        // Get the old period date range
        $to_old = (clone $from)->subDays(1);
        $from_old = (clone $to_old)->subDays($from->diffInDays($to));

        return ['from' => $from->format('Y-m-d'), 'to' => $to->format('Y-m-d'), 'from_old' => $from_old->format('Y-m-d'), 'to_old' => $to_old->format('Y-m-d'), 'unit' => $unit, 'format' => $format];
    }

    public function index(Request $request,$id)
    {

        $project = Projects::where('id',$id)->first();
        $ims_client = ImsClients::where('project_id',$project->id)->get();
        $website = Projects::where('url', $project->url)->firstOrFail();


        $range = $this->range();

        $visitorsMap = $this->getTraffic($website, $range, 'visitors');
        $pageviewsMap = $this->getTraffic($website, $range, 'pageviews');

        $totalVisitors = $totalPageviews = 0;
        foreach ($visitorsMap as $key => $value) {
            $totalVisitors = $totalVisitors + $value;
        }

        foreach ($pageviewsMap as $key => $value) {
            $totalPageviews = $totalPageviews + $value;
        }


        $totalVisitorsOld = State::where([['website_id', '=', $website->id], ['name', '=', 'visitors']])
            ->whereBetween('date', [$range['from_old'], $range['to_old']])
            ->sum('count');


        $totalPageviewsOld = State::where([['website_id', '=', $website->id], ['name', '=', 'pageviews']])
            ->whereBetween('date', [$range['from_old'], $range['to_old']])
            ->sum('count');

        $pages = $this->getPages($website, $range, null, ['count', 'desc'])
            ->limit(5)
            ->get();

        $totalReferrers = State::where([['website_id', '=', $website->id], ['name', '=', 'referrer']])
            ->whereBetween('date', [$range['from'], $range['to']])
            ->sum('count');

        $referrers = $this->getReferrers($website, $range, null, ['count', 'desc'])
            ->limit(5)
            ->get();

        $countries = $this->getCountries($website, $range, null, ['count', 'desc'])
            ->limit(5)
            ->get();

        $browsers = $this->getBrowsers($website, $range, null, ['count', 'desc'])
            ->limit(5)
            ->get();

        $operatingSystems = $this->getOperatingSystems($website, $range, null, ['count', 'desc'])
            ->limit(5)
            ->get();

        $events = $this->getEvents($website, $range, null, ['count', 'desc'])
            ->limit(5)
            ->get();

        return view('frontend.user.projects.analytics.index', [
            'view' => 'overview',
            'project_id' => $project->id,
            'ims_client' => $ims_client,
            'website' => $website,
            'range' => $range,
            'referrers' => $referrers,
            'pages' => $pages,
            'visitorsMap' => $visitorsMap,
            'pageviewsMap' => $pageviewsMap,
            'countries' => $countries,
            'browsers' => $browsers,
            'operatingSystems' => $operatingSystems,
            'events' => $events,
            'totalVisitors' => $totalVisitors,
            'totalPageviews' => $totalPageviews,
            'totalVisitorsOld' => $totalVisitorsOld,
            'totalPageviewsOld' => $totalPageviewsOld,
            'totalReferrers' => $totalReferrers
        ]);
    }

    public function page(Request $request,$id)
    {
        $project = Projects::where('id',$id)->first();
        $ims_client = ImsClients::where('project_id',$project->id)->get();
        $website = Projects::where('url', $project->url)->firstOrFail();


        $range = $this->range();

        $visitorsMap = $this->getTraffic($website, $range, 'visitors');
        $pageviewsMap = $this->getTraffic($website, $range, 'pageviews');

        $totalVisitors = $totalPageviews = 0;
        foreach ($visitorsMap as $key => $value) {
            $totalVisitors = $totalVisitors + $value;
        }

        foreach ($pageviewsMap as $key => $value) {
            $totalPageviews = $totalPageviews + $value;
        }


        $totalVisitorsOld = State::where([['website_id', '=', $website->id], ['name', '=', 'visitors']])
            ->whereBetween('date', [$range['from_old'], $range['to_old']])
            ->sum('count');


        $totalPageviewsOld = State::where([['website_id', '=', $website->id], ['name', '=', 'pageviews']])
            ->whereBetween('date', [$range['from_old'], $range['to_old']])
            ->sum('count');

        $total = State::selectRaw('SUM(`count`) as `count`')
            ->where([['website_id', '=', $website->id], ['name', '=', 'referrer'], ['value', '<>', $website->url], ['value', '<>', '']])
            ->whereBetween('date', [$range['from'], $range['to']])
            ->first();




        $pages = $this->getPages($website, $range, null, ['count', 'desc'])
            ->limit(5)
            ->get();

        $totalReferrers = State::where([['website_id', '=', $website->id], ['name', '=', 'referrer']])
            ->whereBetween('date', [$range['from'], $range['to']])
            ->sum('count');

        $referrers = $this->getReferrers($website, $range, null, ['count', 'desc'])
            ->limit(5)
            ->get();

        $countries = $this->getCountries($website, $range, null, ['count', 'desc'])
            ->limit(5)
            ->get();

        $browsers = $this->getBrowsers($website, $range, null, ['count', 'desc'])
            ->limit(5)
            ->get();

        $operatingSystems = $this->getOperatingSystems($website, $range, null, ['count', 'desc'])
            ->limit(5)
            ->get();

        $events = $this->getEvents($website, $range, null, ['count', 'desc'])
            ->limit(5)
            ->get();

        return view('frontend.user.projects.analytics.page',[
            'view' => 'overview',
            'project_id' => $project->id,
            'ims_client' => $ims_client,
            'website' => $website,
            'range' => $range,
            'referrers' => $referrers,
            'pages' => $pages,
            'visitorsMap' => $visitorsMap,
            'pageviewsMap' => $pageviewsMap,
            'countries' => $countries,
            'browsers' => $browsers,
            'operatingSystems' => $operatingSystems,
            'events' => $events,
            'totalVisitors' => $totalVisitors,
            'totalPageviews' => $totalPageviews,
            'totalVisitorsOld' => $totalVisitorsOld,
            'totalPageviewsOld' => $totalPageviewsOld,
            'totalReferrers' => $totalReferrers,
            'total' => $total
        ]);
    }

    public function landing_page(Request $request,$id)
    {
        $project = Projects::where('id',$id)->first();
        $ims_client = ImsClients::where('project_id',$project->id)->get();
        $website = Projects::where('url', $project->url)->firstOrFail();


        $range = $this->range();

        $visitorsMap = $this->getTraffic($website, $range, 'visitors');
        $pageviewsMap = $this->getTraffic($website, $range, 'pageviews');

        $totalVisitors = $totalPageviews = 0;
        foreach ($visitorsMap as $key => $value) {
            $totalVisitors = $totalVisitors + $value;
        }

        foreach ($pageviewsMap as $key => $value) {
            $totalPageviews = $totalPageviews + $value;
        }


        $totalVisitorsOld = State::where([['website_id', '=', $website->id], ['name', '=', 'visitors']])
            ->whereBetween('date', [$range['from_old'], $range['to_old']])
            ->sum('count');


        $totalPageviewsOld = State::where([['website_id', '=', $website->id], ['name', '=', 'pageviews']])
            ->whereBetween('date', [$range['from_old'], $range['to_old']])
            ->sum('count');

        $total = State::selectRaw('SUM(`count`) as `count`')
            ->where([['website_id', '=', $website->id], ['name', '=', 'referrer'], ['value', '<>', $website->url], ['value', '<>', '']])
            ->whereBetween('date', [$range['from'], $range['to']])
            ->first();

        $pages = $this->getPages($website, $range, null, ['count', 'desc'])
            ->limit(5)
            ->get();

        $totalReferrers = State::where([['website_id', '=', $website->id], ['name', '=', 'referrer']])
            ->whereBetween('date', [$range['from'], $range['to']])
            ->sum('count');

        $referrers = $this->getReferrers($website, $range, null, ['count', 'desc'])
            ->limit(5)
            ->get();

        $countries = $this->getCountries($website, $range, null, ['count', 'desc'])
            ->limit(5)
            ->get();

        $browsers = $this->getBrowsers($website, $range, null, ['count', 'desc'])
            ->limit(5)
            ->get();

        $operatingSystems = $this->getOperatingSystems($website, $range, null, ['count', 'desc'])
            ->limit(5)
            ->get();

        $events = $this->getEvents($website, $range, null, ['count', 'desc'])
            ->limit(5)
            ->get();

        $range = $this->range();
        $search = $request->input('search');
        if ($request->input('sort') == 'min') {
            $sort = ['count', 'asc', 'min'];
        } else {
            $sort = ['count', 'desc', 'max'];
        }

        $total = State::selectRaw('SUM(`count`) as `count`')
            ->where([['website_id', '=', $website->id], ['name', '=', 'landing_page']])
            ->whereBetween('date', [$range['from'], $range['to']])
            ->first();

        $landingPages = $this->getLandingPages($website, $range, $search, $sort)
            ->paginate(config('settings.paginate'))
            ->appends(['search' => $search, 'sort' => $sort[2], 'from' => $range['from'], 'to' => $range['to']]);

        $first = $this->getLandingPages($website, $range, null, ['count', 'desc'])
            ->first();

        $last = $this->getLandingPages($website, $range, null, ['count', 'asc'])
            ->first();



        return view('frontend.user.projects.analytics.landing_page',[
            'view' => 'overview',
            'project_id' => $project->id,
            'ims_client' => $ims_client,
            'website' => $website,
            'range' => $range,
            'referrers' => $referrers,
            'pages' => $pages,
            'landingPages'=>$landingPages,
            'visitorsMap' => $visitorsMap,
            'pageviewsMap' => $pageviewsMap,
            'countries' => $countries,
            'browsers' => $browsers,
            'operatingSystems' => $operatingSystems,
            'events' => $events,
            'totalVisitors' => $totalVisitors,
            'totalPageviews' => $totalPageviews,
            'totalVisitorsOld' => $totalVisitorsOld,
            'totalPageviewsOld' => $totalPageviewsOld,
            'totalReferrers' => $totalReferrers,
            'total' => $total
        ]);
    }

    private function getLandingPages($website, $range, $search = null, $sort = null)
    {
        return State::selectRaw('`value`, SUM(`count`) as `count`')
            ->where([['website_id', '=', $website->id], ['name', '=', 'landing_page']])
            ->when($search, function($query) use ($search) {
                return $query->searchValue($search);
            })
            ->whereBetween('date', [$range['from'], $range['to']])
            ->groupBy('value')
            ->orderBy($sort[0], $sort[1]);
    }

    public function referrers(Request $request,$id)
    {
        $project = Projects::where('id',$id)->first();           
        $ims_client = ImsClients::where('project_id',$project->id)->get();
        // dd($project->id);

        $website = Projects::where('url', $project->url)->firstOrFail();

        $range = $this->range();

        $visitorsMap = $this->getTraffic($website, $range, 'visitors');
        $pageviewsMap = $this->getTraffic($website, $range, 'pageviews');

        $totalVisitors = $totalPageviews = 0;
        foreach ($visitorsMap as $key => $value) {
            $totalVisitors = $totalVisitors + $value;
        }

        foreach ($pageviewsMap as $key => $value) {
            $totalPageviews = $totalPageviews + $value;
        }


        $totalVisitorsOld = State::where([['website_id', '=', $website->id], ['name', '=', 'visitors']])
            ->whereBetween('date', [$range['from_old'], $range['to_old']])
            ->sum('count');


        $totalPageviewsOld = State::where([['website_id', '=', $website->id], ['name', '=', 'pageviews']])
            ->whereBetween('date', [$range['from_old'], $range['to_old']])
            ->sum('count');

        $total = State::selectRaw('SUM(`count`) as `count`')
            ->where([['website_id', '=', $website->id], ['name', '=', 'referrer'], ['value', '<>', $website->url], ['value', '<>', '']])
            ->whereBetween('date', [$range['from'], $range['to']])
            ->first();

        $pages = $this->getPages($website, $range, null, ['count', 'desc'])
            ->limit(5)
            ->get();

        $totalReferrers = State::where([['website_id', '=', $website->id], ['name', '=', 'referrer']])
            ->whereBetween('date', [$range['from'], $range['to']])
            ->sum('count');

        $referrers = $this->getReferrers($website, $range, null, ['count', 'desc'])
            ->limit(5)
            ->get();

        $countries = $this->getCountries($website, $range, null, ['count', 'desc'])
            ->limit(5)
            ->get();

        $browsers = $this->getBrowsers($website, $range, null, ['count', 'desc'])
            ->limit(5)
            ->get();

        $operatingSystems = $this->getOperatingSystems($website, $range, null, ['count', 'desc'])
            ->limit(5)
            ->get();

        $events = $this->getEvents($website, $range, null, ['count', 'desc'])
            ->limit(5)
            ->get();


        return view('frontend.user.projects.analytics.referrers',[
            'view' => 'overview',
            'project_id' => $project->id,
            'ims_client' => $ims_client,
            'website' => $website,
            'range' => $range,
            'referrer' => $referrers,
            'pages' => $pages,
            'visitorsMap' => $visitorsMap,
            'pageviewsMap' => $pageviewsMap,
            'countries' => $countries,
            'browsers' => $browsers,
            'operatingSystems' => $operatingSystems,
            'events' => $events,
            'totalVisitors' => $totalVisitors,
            'totalPageviews' => $totalPageviews,
            'totalVisitorsOld' => $totalVisitorsOld,
            'totalPageviewsOld' => $totalPageviewsOld,
            'totalReferrers' => $totalReferrers,
            'total' => $total
        ]);
    }

    private function getBrowsers($website, $range, $search = null, $sort = null)
    {
        return State::selectRaw('`value`, SUM(`count`) as `count`')
            ->where([['website_id', '=', $website->id], ['name', '=', 'browser']])
            ->when($search, function($query) use ($search) {
                return $query->searchValue($search);
            })
            ->whereBetween('date', [$range['from'], $range['to']])
            ->groupBy('value')
            ->orderBy($sort[0], $sort[1]);
    }

    private function getOperatingSystems($website, $range, $search = null, $sort = null)
    {
        return State::selectRaw('`value`, SUM(`count`) as `count`')
            ->where([['website_id', '=', $website->id], ['name', '=', 'os']])
            ->when($search, function($query) use ($search) {
                return $query->searchValue($search);
            })
            ->whereBetween('date', [$range['from'], $range['to']])
            ->groupBy('value')
            ->orderBy($sort[0], $sort[1]);
    }

    private function getCountries($website, $range, $search = null, $sort = null)
    {
        return State::selectRaw('`value`, SUM(`count`) as `count`')
            ->where([['website_id', '=', $website->id], ['name', '=', 'country']])
            ->when($search, function($query) use ($search) {
                return $query->searchValue($search);
            })
            ->whereBetween('date', [$range['from'], $range['to']])
            ->groupBy('value')
            ->orderBy($sort[0], $sort[1]);
    }

    private function getReferrers($website, $range, $search = null, $sort = null)
    {
        return State::selectRaw('`value`, SUM(`count`) as `count`')
            ->where([['website_id', '=', $website->id], ['name', '=', 'referrer'], ['value', '<>', $website->url], ['value', '<>', '']])
            ->when($search, function($query) use ($search) {
                return $query->searchValue($search);
            })
            ->whereBetween('date', [$range['from'], $range['to']])
            ->groupBy('value')
            ->orderBy($sort[0], $sort[1]);
    }

    private function getPages($website, $range, $search = null, $sort = null)
    {
        return State::selectRaw('`value`, SUM(`count`) as `count`')
            ->where([['website_id', '=', $website->id], ['name', '=', 'page']])
            ->when($search, function($query) use ($search) {
                return $query->searchValue($search);
            })
            ->whereBetween('date', [$range['from'], $range['to']])
            ->groupBy('value')
            ->orderBy($sort[0], $sort[1]);
    }

    private function getEvents($website, $range, $search = null, $sort = null)
    {
        return State::selectRaw('`value`, SUM(`count`) as `count`')
            ->where([['website_id', '=', $website->id], ['name', '=', 'event']])
            ->when($search, function($query) use ($search) {
                return $query->searchValue($search);
            })
            ->whereBetween('date', [$range['from'], $range['to']])
            ->groupBy('value')
            ->orderBy($sort[0], $sort[1]);
    }

    public function search_engines(Request $request,$id)
    {
        $project = Projects::where('id',$id)->first();           
        $ims_client = ImsClients::where('project_id',$project->id)->get();
        // dd($project->id);

        $website = Projects::where('url', $project->url)->firstOrFail();


        $range = $this->range();
        $search = $request->input('search');
        if ($request->input('sort') == 'min') {
            $sort = ['count', 'asc', 'min'];
        } else {
            $sort = ['count', 'desc', 'max'];
        }
        $websites = $this->getSearchEnginesList();

        $visitorsMap = $this->getTraffic($website, $range, 'visitors');
        $pageviewsMap = $this->getTraffic($website, $range, 'pageviews');

        $totalVisitors = $totalPageviews = 0;
        foreach ($visitorsMap as $key => $value) {
            $totalVisitors = $totalVisitors + $value;
        }

        foreach ($pageviewsMap as $key => $value) {
            $totalPageviews = $totalPageviews + $value;
        }


        $totalVisitorsOld = State::where([['website_id', '=', $website->id], ['name', '=', 'visitors']])
            ->whereBetween('date', [$range['from_old'], $range['to_old']])
            ->sum('count');


        $totalPageviewsOld = State::where([['website_id', '=', $website->id], ['name', '=', 'pageviews']])
            ->whereBetween('date', [$range['from_old'], $range['to_old']])
            ->sum('count');

        $total = State::selectRaw('SUM(`count`) as `count`')
            ->where([['website_id', '=', $website->id], ['name', '=', 'page']])
            ->whereBetween('date', [$range['from'], $range['to']])
            ->first();

        $searchEngines = $this->getSearchEngines($website, $range, $search, $sort)
            ->paginate(config('settings.paginate'))
            ->appends(['search' => $search, 'sort' => $sort[2], 'from' => $range['from'], 'to' => $range['to']]);
            

        $pages = $this->getPages($website, $range, null, ['count', 'desc'])
            ->limit(5)
            ->get();

        $totalReferrers = State::where([['website_id', '=', $website->id], ['name', '=', 'referrer']])
            ->whereBetween('date', [$range['from'], $range['to']])
            ->sum('count');

        $referrers = $this->getReferrers($website, $range, null, ['count', 'desc'])
            ->limit(5)
            ->get();

        $countries = $this->getCountries($website, $range, null, ['count', 'desc'])
            ->limit(5)
            ->get();

        $browsers = $this->getBrowsers($website, $range, null, ['count', 'desc'])
            ->limit(5)
            ->get();

        $operatingSystems = $this->getOperatingSystems($website, $range, null, ['count', 'desc'])
            ->limit(5)
            ->get();

        $events = $this->getEvents($website, $range, null, ['count', 'desc'])
            ->limit(5)
            ->get();

        return view('frontend.user.projects.analytics.search_engines',[
            'view' => 'overview',
            'project_id' => $project->id,
            'ims_client' => $ims_client,
            'website' => $website,
            'range' => $range,
            'referrers' => $referrers,
            'pages' => $pages,
            'visitorsMap' => $visitorsMap,
            'pageviewsMap' => $pageviewsMap,
            'countries' => $countries,
            'browsers' => $browsers,
            'operatingSystems' => $operatingSystems,
            'events' => $events,
            'totalVisitors' => $totalVisitors,
            'totalPageviews' => $totalPageviews,
            'totalVisitorsOld' => $totalVisitorsOld,
            'totalPageviewsOld' => $totalPageviewsOld,
            'totalReferrers' => $totalReferrers,
            'total' => $total,
            'searchEngines' => $searchEngines
        ]);
    }

    private function getSearchEngines($website, $range, $search = null, $sort = null)
    {
        $websites = $this->getSearchEnginesList();

        return State::selectRaw('`value`, SUM(`count`) as `count`')
            ->where([['website_id', '=', $website->id], ['name', '=', 'referrer']])
            ->whereIn('value', $websites)
            ->when($search, function($query) use ($search) {
                return $query->searchValue($search);
            })
            ->whereBetween('date', [$range['from'], $range['to']])
            ->groupBy('value')
            ->orderBy($sort[0], $sort[1]);
    }

    public function social_networks(Request $request,$id)
    {
        $project = Projects::where('id',$id)->first();           
        $ims_client = ImsClients::where('project_id',$project->id)->get();
        // dd($project->id);

        $website = Projects::where('url', $project->url)->firstOrFail();


        $range = $this->range();
        $search = $request->input('search');
        if ($request->input('sort') == 'min') {
            $sort = ['count', 'asc', 'min'];
        } else {
            $sort = ['count', 'desc', 'max'];
        }
        $websites = $this->getSocialNetworksList();

        $visitorsMap = $this->getTraffic($website, $range, 'visitors');
        $pageviewsMap = $this->getTraffic($website, $range, 'pageviews');

        $totalVisitors = $totalPageviews = 0;
        foreach ($visitorsMap as $key => $value) {
            $totalVisitors = $totalVisitors + $value;
        }

        foreach ($pageviewsMap as $key => $value) {
            $totalPageviews = $totalPageviews + $value;
        }


        $totalVisitorsOld = State::where([['website_id', '=', $website->id], ['name', '=', 'visitors']])
            ->whereBetween('date', [$range['from_old'], $range['to_old']])
            ->sum('count');


        $totalPageviewsOld = State::where([['website_id', '=', $website->id], ['name', '=', 'pageviews']])
            ->whereBetween('date', [$range['from_old'], $range['to_old']])
            ->sum('count');

        $total = State::selectRaw('SUM(`count`) as `count`')
            ->where([['website_id', '=', $website->id], ['name', '=', 'referrer']])
            ->whereIn('value', $websites)
            ->whereBetween('date', [$range['from'], $range['to']])
            ->first();

        $searchEngines = $this->getSearchEngines($website, $range, $search, $sort)
            ->paginate(config('settings.paginate'))
            ->appends(['search' => $search, 'sort' => $sort[2], 'from' => $range['from'], 'to' => $range['to']]);
            

        $pages = $this->getPages($website, $range, null, ['count', 'desc'])
            ->limit(5)
            ->get();

        $totalReferrers = State::where([['website_id', '=', $website->id], ['name', '=', 'referrer']])
            ->whereBetween('date', [$range['from'], $range['to']])
            ->sum('count');

        $referrers = $this->getReferrers($website, $range, null, ['count', 'desc'])
            ->limit(5)
            ->get();

        $countries = $this->getCountries($website, $range, null, ['count', 'desc'])
            ->limit(5)
            ->get();

        $browsers = $this->getBrowsers($website, $range, null, ['count', 'desc'])
            ->limit(5)
            ->get();

        $operatingSystems = $this->getOperatingSystems($website, $range, null, ['count', 'desc'])
            ->limit(5)
            ->get();

        $events = $this->getEvents($website, $range, null, ['count', 'desc'])
            ->limit(5)
            ->get();


        $socialNetworks = $this->getSocialNetworks($website, $range, $search, $sort)
            ->paginate(config('settings.paginate'))
            ->appends(['search' => $search, 'sort' => $sort[2], 'from' => $range['from'], 'to' => $range['to']]);

        $first = $this->getSocialNetworks($website, $range, null, ['count', 'desc'])
            ->first();

        $last = $this->getSocialNetworks($website, $range, null, ['count', 'asc'])
            ->first();

        return view('frontend.user.projects.analytics.social_networks',[
            'view' => 'overview',
            'project_id' => $project->id,
            'ims_client' => $ims_client,
            'website' => $website,
            'range' => $range,
            'referrers' => $referrers,
            'pages' => $pages,
            'visitorsMap' => $visitorsMap,
            'pageviewsMap' => $pageviewsMap,
            'countries' => $countries,
            'browsers' => $browsers,
            'operatingSystems' => $operatingSystems,
            'events' => $events,
            'totalVisitors' => $totalVisitors,
            'totalPageviews' => $totalPageviews,
            'totalVisitorsOld' => $totalVisitorsOld,
            'totalPageviewsOld' => $totalPageviewsOld,
            'totalReferrers' => $totalReferrers,
            'total' => $total,
            'socialNetworks' => $socialNetworks
        ]);
    }

    public function exportSocialNetworks(Request $request, $id)
    {
        $website = Website::where('url', $id)->firstOrFail();

        if ($this->statsGuard($website)) {
            return view('stats.password', ['website' => $website]);
        };

        $range = $this->range();
        $search = $request->input('search');
        if ($request->input('sort') == 'min') {
            $sort = ['count', 'asc', 'min'];
        } else {
            $sort = ['count', 'desc', 'max'];
        }

        return $this->exportCSV($request, $website, __('Social networks'), $range, __('URL'), __('Visitors'), $this->getSocialNetworks($website, $range, $search, $sort)->get());
    }

    private function getSocialNetworks($website, $range, $search = null, $sort = null)
    {
        $websites = $this->getSocialNetworksList();

        return State::selectRaw('`value`, SUM(`count`) as `count`')
            ->where([['website_id', '=', $website->id], ['name', '=', 'referrer']])
            ->whereIn('value', $websites)
            ->when($search, function($query) use ($search) {
                return $query->searchValue($search);
            })
            ->whereBetween('date', [$range['from'], $range['to']])
            ->groupBy('value')
            ->orderBy($sort[0], $sort[1]);
    }

    public function campaigns(Request $request,$id)
    {
        $project = Projects::where('id',$id)->first();           
        $ims_client = ImsClients::where('project_id',$project->id)->get();
        // dd($project->id);

        $website = Projects::where('url', $project->url)->firstOrFail();


        $range = $this->range();
        $search = $request->input('search');
        if ($request->input('sort') == 'min') {
            $sort = ['count', 'asc', 'min'];
        } else {
            $sort = ['count', 'desc', 'max'];
        }
        $websites = $this->getSocialNetworksList();

        $visitorsMap = $this->getTraffic($website, $range, 'visitors');
        $pageviewsMap = $this->getTraffic($website, $range, 'pageviews');

        $totalVisitors = $totalPageviews = 0;
        foreach ($visitorsMap as $key => $value) {
            $totalVisitors = $totalVisitors + $value;
        }

        foreach ($pageviewsMap as $key => $value) {
            $totalPageviews = $totalPageviews + $value;
        }


        $totalVisitorsOld = State::where([['website_id', '=', $website->id], ['name', '=', 'visitors']])
            ->whereBetween('date', [$range['from_old'], $range['to_old']])
            ->sum('count');


        $totalPageviewsOld = State::where([['website_id', '=', $website->id], ['name', '=', 'pageviews']])
            ->whereBetween('date', [$range['from_old'], $range['to_old']])
            ->sum('count');

        $total = State::selectRaw('SUM(`count`) as `count`')
            ->where([['website_id', '=', $website->id], ['name', '=', 'referrer']])
            ->whereIn('value', $websites)
            ->whereBetween('date', [$range['from'], $range['to']])
            ->first();

        $searchEngines = $this->getSearchEngines($website, $range, $search, $sort)
            ->paginate(config('settings.paginate'))
            ->appends(['search' => $search, 'sort' => $sort[2], 'from' => $range['from'], 'to' => $range['to']]);
            

        $pages = $this->getPages($website, $range, null, ['count', 'desc'])
            ->limit(5)
            ->get();

        $totalReferrers = State::where([['website_id', '=', $website->id], ['name', '=', 'referrer']])
            ->whereBetween('date', [$range['from'], $range['to']])
            ->sum('count');

        $referrers = $this->getReferrers($website, $range, null, ['count', 'desc'])
            ->limit(5)
            ->get();

        $countries = $this->getCountries($website, $range, null, ['count', 'desc'])
            ->limit(5)
            ->get();

        $browsers = $this->getBrowsers($website, $range, null, ['count', 'desc'])
            ->limit(5)
            ->get();

        $operatingSystems = $this->getOperatingSystems($website, $range, null, ['count', 'desc'])
            ->limit(5)
            ->get();

        $events = $this->getEvents($website, $range, null, ['count', 'desc'])
            ->limit(5)
            ->get();


        $campaigns = $this->getCampaigns($website, $range, $search, $sort)
            ->paginate(config('settings.paginate'))
            ->appends(['search' => $search, 'sort' => $sort[2], 'from' => $range['from'], 'to' => $range['to']]);

        $first = $this->getCampaigns($website, $range, null, ['count', 'desc'])
            ->first();

        $last = $this->getCampaigns($website, $range, null, ['count', 'asc'])
            ->first();

        return view('frontend.user.projects.analytics.campaigns',[
            'view' => 'overview',
            'project_id' => $project->id,
            'ims_client' => $ims_client,
            'website' => $website,
            'range' => $range,
            'referrers' => $referrers,
            'pages' => $pages,
            'visitorsMap' => $visitorsMap,
            'pageviewsMap' => $pageviewsMap,
            'countries' => $countries,
            'browsers' => $browsers,
            'operatingSystems' => $operatingSystems,
            'events' => $events,
            'totalVisitors' => $totalVisitors,
            'totalPageviews' => $totalPageviews,
            'totalVisitorsOld' => $totalVisitorsOld,
            'totalPageviewsOld' => $totalPageviewsOld,
            'totalReferrers' => $totalReferrers,
            'total' => $total,
            'campaigns' => $campaigns
        ]);
    }

    private function getCampaigns($website, $range, $search = null, $sort = null)
    {
        return State::selectRaw('`value`, SUM(`count`) as `count`')
            ->where([['website_id', '=', $website->id], ['name', '=', 'campaign']])
            ->when($search, function($query) use ($search) {
                return $query->searchValue($search);
            })
            ->whereBetween('date', [$range['from'], $range['to']])
            ->groupBy('value')
            ->orderBy($sort[0], $sort[1]);
    }

    public function continents(Request $request,$id)
    {
        $project = Projects::where('id',$id)->first();           
        $ims_client = ImsClients::where('project_id',$project->id)->get();
        // dd($project->id);

        $website = Projects::where('url', $project->url)->firstOrFail();


        $range = $this->range();
        $search = $request->input('search');
        if ($request->input('sort') == 'min') {
            $sort = ['count', 'asc', 'min'];
        } else {
            $sort = ['count', 'desc', 'max'];
        }
        $websites = $this->getSocialNetworksList();

        $visitorsMap = $this->getTraffic($website, $range, 'visitors');
        $pageviewsMap = $this->getTraffic($website, $range, 'pageviews');

        $totalVisitors = $totalPageviews = 0;
        foreach ($visitorsMap as $key => $value) {
            $totalVisitors = $totalVisitors + $value;
        }

        foreach ($pageviewsMap as $key => $value) {
            $totalPageviews = $totalPageviews + $value;
        }


        $totalVisitorsOld = State::where([['website_id', '=', $website->id], ['name', '=', 'visitors']])
            ->whereBetween('date', [$range['from_old'], $range['to_old']])
            ->sum('count');


        $totalPageviewsOld = State::where([['website_id', '=', $website->id], ['name', '=', 'pageviews']])
            ->whereBetween('date', [$range['from_old'], $range['to_old']])
            ->sum('count');

        $total = State::selectRaw('SUM(`count`) as `count`')
            ->where([['website_id', '=', $website->id], ['name', '=', 'referrer']])
            ->whereIn('value', $websites)
            ->whereBetween('date', [$range['from'], $range['to']])
            ->first();

        $searchEngines = $this->getSearchEngines($website, $range, $search, $sort)
            ->paginate(config('settings.paginate'))
            ->appends(['search' => $search, 'sort' => $sort[2], 'from' => $range['from'], 'to' => $range['to']]);
            

        $pages = $this->getPages($website, $range, null, ['count', 'desc'])
            ->limit(5)
            ->get();

        $totalReferrers = State::where([['website_id', '=', $website->id], ['name', '=', 'referrer']])
            ->whereBetween('date', [$range['from'], $range['to']])
            ->sum('count');

        $referrers = $this->getReferrers($website, $range, null, ['count', 'desc'])
            ->limit(5)
            ->get();

        $countries = $this->getCountries($website, $range, null, ['count', 'desc'])
            ->limit(5)
            ->get();

        $browsers = $this->getBrowsers($website, $range, null, ['count', 'desc'])
            ->limit(5)
            ->get();

        $operatingSystems = $this->getOperatingSystems($website, $range, null, ['count', 'desc'])
            ->limit(5)
            ->get();

        $events = $this->getEvents($website, $range, null, ['count', 'desc'])
            ->limit(5)
            ->get();


        $continents = $this->getContinents($website, $range, $search, $sort)
            ->paginate(config('settings.paginate'))
            ->appends(['search' => $search, 'sort' => $sort[2], 'from' => $range['from'], 'to' => $range['to']]);

        $first = $this->getContinents($website, $range, null, ['count', 'desc'])
            ->first();

        $last = $this->getContinents($website, $range, null, ['count', 'asc'])
            ->first();

        return view('frontend.user.projects.analytics.continents',[
            'view' => 'overview',
            'project_id' => $project->id,
            'ims_client' => $ims_client,
            'website' => $website,
            'range' => $range,
            'referrers' => $referrers,
            'pages' => $pages,
            'visitorsMap' => $visitorsMap,
            'pageviewsMap' => $pageviewsMap,
            'countries' => $countries,
            'browsers' => $browsers,
            'operatingSystems' => $operatingSystems,
            'events' => $events,
            'totalVisitors' => $totalVisitors,
            'totalPageviews' => $totalPageviews,
            'totalVisitorsOld' => $totalVisitorsOld,
            'totalPageviewsOld' => $totalPageviewsOld,
            'totalReferrers' => $totalReferrers,
            'total' => $total,
            'continents' => $continents
        ]);
    }

    private function getContinents($website, $range, $search = null, $sort = null)
    {
        return State::selectRaw('`value`, SUM(`count`) as `count`')
            ->where([['website_id', '=', $website->id], ['name', '=', 'continent']])
            ->when($search, function($query) use ($search) {
                return $query->searchValue($search);
            })
            ->whereBetween('date', [$range['from'], $range['to']])
            ->groupBy('value')
            ->orderBy($sort[0], $sort[1]);
    }

    public function countries(Request $request,$id)
    {
        $project = Projects::where('id',$id)->first();           
        $ims_client = ImsClients::where('project_id',$project->id)->get();
        // dd($project->id);

        $website = Projects::where('url', $project->url)->firstOrFail();


        $range = $this->range();
        $search = $request->input('search');
        if ($request->input('sort') == 'min') {
            $sort = ['count', 'asc', 'min'];
        } else {
            $sort = ['count', 'desc', 'max'];
        }
        $websites = $this->getSocialNetworksList();

        $visitorsMap = $this->getTraffic($website, $range, 'visitors');
        $pageviewsMap = $this->getTraffic($website, $range, 'pageviews');

        $totalVisitors = $totalPageviews = 0;
        foreach ($visitorsMap as $key => $value) {
            $totalVisitors = $totalVisitors + $value;
        }

        foreach ($pageviewsMap as $key => $value) {
            $totalPageviews = $totalPageviews + $value;
        }


        $totalVisitorsOld = State::where([['website_id', '=', $website->id], ['name', '=', 'visitors']])
            ->whereBetween('date', [$range['from_old'], $range['to_old']])
            ->sum('count');


        $totalPageviewsOld = State::where([['website_id', '=', $website->id], ['name', '=', 'pageviews']])
            ->whereBetween('date', [$range['from_old'], $range['to_old']])
            ->sum('count');

        $total = State::selectRaw('SUM(`count`) as `count`')
            ->where([['website_id', '=', $website->id], ['name', '=', 'referrer']])
            ->whereIn('value', $websites)
            ->whereBetween('date', [$range['from'], $range['to']])
            ->first();

        $searchEngines = $this->getSearchEngines($website, $range, $search, $sort)
            ->paginate(config('settings.paginate'))
            ->appends(['search' => $search, 'sort' => $sort[2], 'from' => $range['from'], 'to' => $range['to']]);
            

        $pages = $this->getPages($website, $range, null, ['count', 'desc'])
            ->limit(5)
            ->get();

        $totalReferrers = State::where([['website_id', '=', $website->id], ['name', '=', 'referrer']])
            ->whereBetween('date', [$range['from'], $range['to']])
            ->sum('count');

        $referrers = $this->getReferrers($website, $range, null, ['count', 'desc'])
            ->limit(5)
            ->get();

        $countries = $this->getCountries($website, $range, null, ['count', 'desc'])
            ->limit(5)
            ->get();

        $browsers = $this->getBrowsers($website, $range, null, ['count', 'desc'])
            ->limit(5)
            ->get();

        $operatingSystems = $this->getOperatingSystems($website, $range, null, ['count', 'desc'])
            ->limit(5)
            ->get();

        $events = $this->getEvents($website, $range, null, ['count', 'desc'])
            ->limit(5)
            ->get();


        $countries = $this->getCountries($website, $range, $search, $sort)
            ->paginate(config('settings.paginate'))
            ->appends(['search' => $search, 'sort' => $sort[2], 'from' => $range['from'], 'to' => $range['to']]);

        $first = $this->getCountries($website, $range, null, ['count', 'desc'])
            ->first();

        $last = $this->getCountries($website, $range, null, ['count', 'asc'])
            ->first();

        return view('frontend.user.projects.analytics.countries',[
            'view' => 'overview',
            'project_id' => $project->id,
            'ims_client' => $ims_client,
            'website' => $website,
            'range' => $range,
            'referrers' => $referrers,
            'pages' => $pages,
            'visitorsMap' => $visitorsMap,
            'pageviewsMap' => $pageviewsMap,
            'browsers' => $browsers,
            'operatingSystems' => $operatingSystems,
            'events' => $events,
            'totalVisitors' => $totalVisitors,
            'totalPageviews' => $totalPageviews,
            'totalVisitorsOld' => $totalVisitorsOld,
            'totalPageviewsOld' => $totalPageviewsOld,
            'totalReferrers' => $totalReferrers,
            'total' => $total,
            'countries' => $countries
        ]);
    }
    

    public function cities(Request $request,$id)
    {
        $project = Projects::where('id',$id)->first();           
        $ims_client = ImsClients::where('project_id',$project->id)->get();
        // dd($project->id);

        $website = Projects::where('url', $project->url)->firstOrFail();


        $range = $this->range();
        $search = $request->input('search');
        if ($request->input('sort') == 'min') {
            $sort = ['count', 'asc', 'min'];
        } else {
            $sort = ['count', 'desc', 'max'];
        }
        $websites = $this->getSocialNetworksList();

        $visitorsMap = $this->getTraffic($website, $range, 'visitors');
        $pageviewsMap = $this->getTraffic($website, $range, 'pageviews');

        $totalVisitors = $totalPageviews = 0;
        foreach ($visitorsMap as $key => $value) {
            $totalVisitors = $totalVisitors + $value;
        }

        foreach ($pageviewsMap as $key => $value) {
            $totalPageviews = $totalPageviews + $value;
        }


        $totalVisitorsOld = State::where([['website_id', '=', $website->id], ['name', '=', 'visitors']])
            ->whereBetween('date', [$range['from_old'], $range['to_old']])
            ->sum('count');


        $totalPageviewsOld = State::where([['website_id', '=', $website->id], ['name', '=', 'pageviews']])
            ->whereBetween('date', [$range['from_old'], $range['to_old']])
            ->sum('count');

        $total = State::selectRaw('SUM(`count`) as `count`')
            ->where([['website_id', '=', $website->id], ['name', '=', 'referrer']])
            ->whereIn('value', $websites)
            ->whereBetween('date', [$range['from'], $range['to']])
            ->first();

        $searchEngines = $this->getSearchEngines($website, $range, $search, $sort)
            ->paginate(config('settings.paginate'))
            ->appends(['search' => $search, 'sort' => $sort[2], 'from' => $range['from'], 'to' => $range['to']]);
            

        $pages = $this->getPages($website, $range, null, ['count', 'desc'])
            ->limit(5)
            ->get();

        $totalReferrers = State::where([['website_id', '=', $website->id], ['name', '=', 'referrer']])
            ->whereBetween('date', [$range['from'], $range['to']])
            ->sum('count');

        $referrers = $this->getReferrers($website, $range, null, ['count', 'desc'])
            ->limit(5)
            ->get();

        $countries = $this->getCountries($website, $range, null, ['count', 'desc'])
            ->limit(5)
            ->get();

        $browsers = $this->getBrowsers($website, $range, null, ['count', 'desc'])
            ->limit(5)
            ->get();

        $operatingSystems = $this->getOperatingSystems($website, $range, null, ['count', 'desc'])
            ->limit(5)
            ->get();

        $events = $this->getEvents($website, $range, null, ['count', 'desc'])
            ->limit(5)
            ->get();


        $cities = $this->getCities($website, $range, $search, $sort)
            ->paginate(config('settings.paginate'))
            ->appends(['search' => $search, 'sort' => $sort[2], 'from' => $range['from'], 'to' => $range['to']]);

        $first = $this->getCities($website, $range, null, ['count', 'desc'])
            ->first();

        $last = $this->getCities($website, $range, null, ['count', 'asc'])
            ->first();

        return view('frontend.user.projects.analytics.cities',[
            'view' => 'overview',
            'project_id' => $project->id,
            'ims_client' => $ims_client,
            'website' => $website,
            'range' => $range,
            'referrers' => $referrers,
            'pages' => $pages,
            'visitorsMap' => $visitorsMap,
            'pageviewsMap' => $pageviewsMap,
            'countries' => $countries,
            'browsers' => $browsers,
            'operatingSystems' => $operatingSystems,
            'events' => $events,
            'totalVisitors' => $totalVisitors,
            'totalPageviews' => $totalPageviews,
            'totalVisitorsOld' => $totalVisitorsOld,
            'totalPageviewsOld' => $totalPageviewsOld,
            'totalReferrers' => $totalReferrers,
            'total' => $total,
            'cities' => $cities
        ]);
    }

    private function getCities($website, $range, $search = null, $sort = null)
    {
        return State::selectRaw('`value`, SUM(`count`) as `count`')
            ->where([['website_id', '=', $website->id], ['name', '=', 'city']])
            ->when($search, function($query) use ($search) {
                return $query->searchValue($search);
            })
            ->whereBetween('date', [$range['from'], $range['to']])
            ->groupBy('value')
            ->orderBy($sort[0], $sort[1]);
    }

    public function languages(Request $request,$id)
    {
        $project = Projects::where('id',$id)->first();           
        $ims_client = ImsClients::where('project_id',$project->id)->get();
        // dd($project->id);

        $website = Projects::where('url', $project->url)->firstOrFail();


        $range = $this->range();
        $search = $request->input('search');
        if ($request->input('sort') == 'min') {
            $sort = ['count', 'asc', 'min'];
        } else {
            $sort = ['count', 'desc', 'max'];
        }
        $websites = $this->getSocialNetworksList();

        $visitorsMap = $this->getTraffic($website, $range, 'visitors');
        $pageviewsMap = $this->getTraffic($website, $range, 'pageviews');

        $totalVisitors = $totalPageviews = 0;
        foreach ($visitorsMap as $key => $value) {
            $totalVisitors = $totalVisitors + $value;
        }

        foreach ($pageviewsMap as $key => $value) {
            $totalPageviews = $totalPageviews + $value;
        }


        $totalVisitorsOld = State::where([['website_id', '=', $website->id], ['name', '=', 'visitors']])
            ->whereBetween('date', [$range['from_old'], $range['to_old']])
            ->sum('count');


        $totalPageviewsOld = State::where([['website_id', '=', $website->id], ['name', '=', 'pageviews']])
            ->whereBetween('date', [$range['from_old'], $range['to_old']])
            ->sum('count');

        $total = State::selectRaw('SUM(`count`) as `count`')
            ->where([['website_id', '=', $website->id], ['name', '=', 'referrer']])
            ->whereIn('value', $websites)
            ->whereBetween('date', [$range['from'], $range['to']])
            ->first();

        $searchEngines = $this->getSearchEngines($website, $range, $search, $sort)
            ->paginate(config('settings.paginate'))
            ->appends(['search' => $search, 'sort' => $sort[2], 'from' => $range['from'], 'to' => $range['to']]);
            

        $pages = $this->getPages($website, $range, null, ['count', 'desc'])
            ->limit(5)
            ->get();

        $totalReferrers = State::where([['website_id', '=', $website->id], ['name', '=', 'referrer']])
            ->whereBetween('date', [$range['from'], $range['to']])
            ->sum('count');

        $referrers = $this->getReferrers($website, $range, null, ['count', 'desc'])
            ->limit(5)
            ->get();

        $countries = $this->getCountries($website, $range, null, ['count', 'desc'])
            ->limit(5)
            ->get();

        $browsers = $this->getBrowsers($website, $range, null, ['count', 'desc'])
            ->limit(5)
            ->get();

        $operatingSystems = $this->getOperatingSystems($website, $range, null, ['count', 'desc'])
            ->limit(5)
            ->get();

        $events = $this->getEvents($website, $range, null, ['count', 'desc'])
            ->limit(5)
            ->get();


        $languages = $this->getLanguages($website, $range, $search, $sort)
            ->paginate(config('settings.paginate'))
            ->appends(['search' => $search, 'sort' => $sort[2], 'from' => $range['from'], 'to' => $range['to']]);

        $first = $this->getLanguages($website, $range, null, ['count', 'desc'])
            ->first();

        $last = $this->getLanguages($website, $range, null, ['count', 'asc'])
            ->first();

        return view('frontend.user.projects.analytics.languages',[
            'view' => 'overview',
            'project_id' => $project->id,
            'ims_client' => $ims_client,
            'website' => $website,
            'range' => $range,
            'referrers' => $referrers,
            'pages' => $pages,
            'visitorsMap' => $visitorsMap,
            'pageviewsMap' => $pageviewsMap,
            'countries' => $countries,
            'browsers' => $browsers,
            'operatingSystems' => $operatingSystems,
            'events' => $events,
            'totalVisitors' => $totalVisitors,
            'totalPageviews' => $totalPageviews,
            'totalVisitorsOld' => $totalVisitorsOld,
            'totalPageviewsOld' => $totalPageviewsOld,
            'totalReferrers' => $totalReferrers,
            'total' => $total,
            'languages' => $languages
        ]);
    }

    private function getLanguages($website, $range, $search = null, $sort = null)
    {
        return State::selectRaw('`value`, SUM(`count`) as `count`')
            ->where([['website_id', '=', $website->id], ['name', '=', 'language']])
            ->when($search, function($query) use ($search) {
                return $query->searchValue($search);
            })
            ->whereBetween('date', [$range['from'], $range['to']])
            ->groupBy('value')
            ->orderBy($sort[0], $sort[1]);
    }

    public function operating_systems(Request $request,$id)
    {
        $project = Projects::where('id',$id)->first();           
        $ims_client = ImsClients::where('project_id',$project->id)->get();
        // dd($project->id);

        $website = Projects::where('url', $project->url)->firstOrFail();


        $range = $this->range();
        $search = $request->input('search');
        if ($request->input('sort') == 'min') {
            $sort = ['count', 'asc', 'min'];
        } else {
            $sort = ['count', 'desc', 'max'];
        }
        $websites = $this->getSocialNetworksList();

        $visitorsMap = $this->getTraffic($website, $range, 'visitors');
        $pageviewsMap = $this->getTraffic($website, $range, 'pageviews');

        $totalVisitors = $totalPageviews = 0;
        foreach ($visitorsMap as $key => $value) {
            $totalVisitors = $totalVisitors + $value;
        }

        foreach ($pageviewsMap as $key => $value) {
            $totalPageviews = $totalPageviews + $value;
        }


        $totalVisitorsOld = State::where([['website_id', '=', $website->id], ['name', '=', 'visitors']])
            ->whereBetween('date', [$range['from_old'], $range['to_old']])
            ->sum('count');


        $totalPageviewsOld = State::where([['website_id', '=', $website->id], ['name', '=', 'pageviews']])
            ->whereBetween('date', [$range['from_old'], $range['to_old']])
            ->sum('count');

        $total = State::selectRaw('SUM(`count`) as `count`')
            ->where([['website_id', '=', $website->id], ['name', '=', 'referrer']])
            ->whereIn('value', $websites)
            ->whereBetween('date', [$range['from'], $range['to']])
            ->first();

        $searchEngines = $this->getSearchEngines($website, $range, $search, $sort)
            ->paginate(config('settings.paginate'))
            ->appends(['search' => $search, 'sort' => $sort[2], 'from' => $range['from'], 'to' => $range['to']]);
            

        $pages = $this->getPages($website, $range, null, ['count', 'desc'])
            ->limit(5)
            ->get();

        $totalReferrers = State::where([['website_id', '=', $website->id], ['name', '=', 'referrer']])
            ->whereBetween('date', [$range['from'], $range['to']])
            ->sum('count');

        $referrers = $this->getReferrers($website, $range, null, ['count', 'desc'])
            ->limit(5)
            ->get();

        $countries = $this->getCountries($website, $range, null, ['count', 'desc'])
            ->limit(5)
            ->get();

        $browsers = $this->getBrowsers($website, $range, null, ['count', 'desc'])
            ->limit(5)
            ->get();

        $operatingSystems = $this->getOperatingSystems($website, $range, null, ['count', 'desc'])
            ->limit(5)
            ->get();

        $events = $this->getEvents($website, $range, null, ['count', 'desc'])
            ->limit(5)
            ->get();


        $operatingSystems = $this->getOperatingSystems($website, $range, $search, $sort)
            ->paginate(config('settings.paginate'))
            ->appends(['search' => $search, 'sort' => $sort[2], 'from' => $range['from'], 'to' => $range['to']]);

        $first = $this->getOperatingSystems($website, $range, null, ['count', 'desc'])
            ->first();

        $last = $this->getOperatingSystems($website, $range, null, ['count', 'asc'])
            ->first();

        return view('frontend.user.projects.analytics.operating_systems',[
            'view' => 'overview',
            'project_id' => $project->id,
            'ims_client' => $ims_client,
            'website' => $website,
            'range' => $range,
            'referrers' => $referrers,
            'pages' => $pages,
            'visitorsMap' => $visitorsMap,
            'pageviewsMap' => $pageviewsMap,
            'countries' => $countries,
            'browsers' => $browsers,
            'events' => $events,
            'totalVisitors' => $totalVisitors,
            'totalPageviews' => $totalPageviews,
            'totalVisitorsOld' => $totalVisitorsOld,
            'totalPageviewsOld' => $totalPageviewsOld,
            'totalReferrers' => $totalReferrers,
            'total' => $total,
            'operatingSystems' => $operatingSystems
        ]);
    }

   
    public function browsers(Request $request,$id)
    {
        $project = Projects::where('id',$id)->first();           
        $ims_client = ImsClients::where('project_id',$project->id)->get();
        // dd($project->id);

        $website = Projects::where('url', $project->url)->firstOrFail();


        $range = $this->range();
        $search = $request->input('search');
        if ($request->input('sort') == 'min') {
            $sort = ['count', 'asc', 'min'];
        } else {
            $sort = ['count', 'desc', 'max'];
        }
        $websites = $this->getSocialNetworksList();

        $visitorsMap = $this->getTraffic($website, $range, 'visitors');
        $pageviewsMap = $this->getTraffic($website, $range, 'pageviews');

        $totalVisitors = $totalPageviews = 0;
        foreach ($visitorsMap as $key => $value) {
            $totalVisitors = $totalVisitors + $value;
        }

        foreach ($pageviewsMap as $key => $value) {
            $totalPageviews = $totalPageviews + $value;
        }


        $totalVisitorsOld = State::where([['website_id', '=', $website->id], ['name', '=', 'visitors']])
            ->whereBetween('date', [$range['from_old'], $range['to_old']])
            ->sum('count');


        $totalPageviewsOld = State::where([['website_id', '=', $website->id], ['name', '=', 'pageviews']])
            ->whereBetween('date', [$range['from_old'], $range['to_old']])
            ->sum('count');

        $total = State::selectRaw('SUM(`count`) as `count`')
            ->where([['website_id', '=', $website->id], ['name', '=', 'referrer']])
            ->whereIn('value', $websites)
            ->whereBetween('date', [$range['from'], $range['to']])
            ->first();

        $searchEngines = $this->getSearchEngines($website, $range, $search, $sort)
            ->paginate(config('settings.paginate'))
            ->appends(['search' => $search, 'sort' => $sort[2], 'from' => $range['from'], 'to' => $range['to']]);
            

        $pages = $this->getPages($website, $range, null, ['count', 'desc'])
            ->limit(5)
            ->get();

        $totalReferrers = State::where([['website_id', '=', $website->id], ['name', '=', 'referrer']])
            ->whereBetween('date', [$range['from'], $range['to']])
            ->sum('count');

        $referrers = $this->getReferrers($website, $range, null, ['count', 'desc'])
            ->limit(5)
            ->get();

        $countries = $this->getCountries($website, $range, null, ['count', 'desc'])
            ->limit(5)
            ->get();

        $browsers = $this->getBrowsers($website, $range, null, ['count', 'desc'])
            ->limit(5)
            ->get();

        $operatingSystems = $this->getOperatingSystems($website, $range, null, ['count', 'desc'])
            ->limit(5)
            ->get();

        $events = $this->getEvents($website, $range, null, ['count', 'desc'])
            ->limit(5)
            ->get();


        $browsers = $this->getBrowsers($website, $range, $search, $sort)
            ->paginate(config('settings.paginate'))
            ->appends(['search' => $search, 'sort' => $sort[2], 'from' => $range['from'], 'to' => $range['to']]);

        $first = $this->getBrowsers($website, $range, null, ['count', 'desc'])
            ->first();

        $last = $this->getBrowsers($website, $range, null, ['count', 'asc'])
            ->first();

        return view('frontend.user.projects.analytics.browsers',[
            'view' => 'overview',
            'project_id' => $project->id,
            'ims_client' => $ims_client,
            'website' => $website,
            'range' => $range,
            'referrers' => $referrers,
            'pages' => $pages,
            'visitorsMap' => $visitorsMap,
            'pageviewsMap' => $pageviewsMap,
            'countries' => $countries,
            'browsers' => $browsers,
            'events' => $events,
            'totalVisitors' => $totalVisitors,
            'totalPageviews' => $totalPageviews,
            'totalVisitorsOld' => $totalVisitorsOld,
            'totalPageviewsOld' => $totalPageviewsOld,
            'totalReferrers' => $totalReferrers,
            'total' => $total,
            'operatingSystems' => $operatingSystems
        ]);
    }

    public function screen_resolutions(Request $request,$id)
    {
        $project = Projects::where('id',$id)->first();           
        $ims_client = ImsClients::where('project_id',$project->id)->get();
        // dd($project->id);

        
        $website = Projects::where('url', $project->url)->firstOrFail();


        $range = $this->range();
        $search = $request->input('search');
        if ($request->input('sort') == 'min') {
            $sort = ['count', 'asc', 'min'];
        } else {
            $sort = ['count', 'desc', 'max'];
        }
        $websites = $this->getSocialNetworksList();

        $visitorsMap = $this->getTraffic($website, $range, 'visitors');
        $pageviewsMap = $this->getTraffic($website, $range, 'pageviews');

        $totalVisitors = $totalPageviews = 0;
        foreach ($visitorsMap as $key => $value) {
            $totalVisitors = $totalVisitors + $value;
        }

        foreach ($pageviewsMap as $key => $value) {
            $totalPageviews = $totalPageviews + $value;
        }


        $totalVisitorsOld = State::where([['website_id', '=', $website->id], ['name', '=', 'visitors']])
            ->whereBetween('date', [$range['from_old'], $range['to_old']])
            ->sum('count');


        $totalPageviewsOld = State::where([['website_id', '=', $website->id], ['name', '=', 'pageviews']])
            ->whereBetween('date', [$range['from_old'], $range['to_old']])
            ->sum('count');

        $total = State::selectRaw('SUM(`count`) as `count`')
            ->where([['website_id', '=', $website->id], ['name', '=', 'referrer']])
            ->whereIn('value', $websites)
            ->whereBetween('date', [$range['from'], $range['to']])
            ->first();

        $searchEngines = $this->getSearchEngines($website, $range, $search, $sort)
            ->paginate(config('settings.paginate'))
            ->appends(['search' => $search, 'sort' => $sort[2], 'from' => $range['from'], 'to' => $range['to']]);
            

        $pages = $this->getPages($website, $range, null, ['count', 'desc'])
            ->limit(5)
            ->get();

        $totalReferrers = State::where([['website_id', '=', $website->id], ['name', '=', 'referrer']])
            ->whereBetween('date', [$range['from'], $range['to']])
            ->sum('count');

        $referrers = $this->getReferrers($website, $range, null, ['count', 'desc'])
            ->limit(5)
            ->get();

        $countries = $this->getCountries($website, $range, null, ['count', 'desc'])
            ->limit(5)
            ->get();

        $browsers = $this->getBrowsers($website, $range, null, ['count', 'desc'])
            ->limit(5)
            ->get();

        $operatingSystems = $this->getOperatingSystems($website, $range, null, ['count', 'desc'])
            ->limit(5)
            ->get();

        $events = $this->getEvents($website, $range, null, ['count', 'desc'])
            ->limit(5)
            ->get();


        $screenResolutions = $this->getScreenResolutions($website, $range, $search, $sort)
            ->paginate(config('settings.paginate'))
            ->appends(['search' => $search, 'sort' => $sort[2], 'from' => $range['from'], 'to' => $range['to']]);

        $first = $this->getScreenResolutions($website, $range, null, ['count', 'desc'])
            ->first();

        $last = $this->getScreenResolutions($website, $range, null, ['count', 'asc'])
            ->first();

        return view('frontend.user.projects.analytics.screen_resolutions',[
            'view' => 'overview',
            'project_id' => $project->id,
            'ims_client' => $ims_client,
            'website' => $website,
            'range' => $range,
            'referrers' => $referrers,
            'pages' => $pages,
            'visitorsMap' => $visitorsMap,
            'pageviewsMap' => $pageviewsMap,
            'countries' => $countries,
            'browsers' => $browsers,
            'events' => $events,
            'totalVisitors' => $totalVisitors,
            'totalPageviews' => $totalPageviews,
            'totalVisitorsOld' => $totalVisitorsOld,
            'totalPageviewsOld' => $totalPageviewsOld,
            'totalReferrers' => $totalReferrers,
            'total' => $total,
            'screenResolutions' => $screenResolutions
        ]);
    }

    private function getScreenResolutions($website, $range, $search = null, $sort = null)
    {
        return State::selectRaw('`value`, SUM(`count`) as `count`')
            ->where([['website_id', '=', $website->id], ['name', '=', 'resolution']])
            ->when($search, function($query) use ($search) {
                return $query->searchValue($search);
            })
            ->whereBetween('date', [$range['from'], $range['to']])
            ->groupBy('value')
            ->orderBy($sort[0], $sort[1]);
    }

    public function devices(Request $request,$id)
    {
        $project = Projects::where('id',$id)->first();           
        $ims_client = ImsClients::where('project_id',$project->id)->get();
        // dd($project->id);

        $website = Projects::where('url', $project->url)->firstOrFail();


        $range = $this->range();
        $search = $request->input('search');
        if ($request->input('sort') == 'min') {
            $sort = ['count', 'asc', 'min'];
        } else {
            $sort = ['count', 'desc', 'max'];
        }
        $websites = $this->getSocialNetworksList();

        $visitorsMap = $this->getTraffic($website, $range, 'visitors');
        $pageviewsMap = $this->getTraffic($website, $range, 'pageviews');

        $totalVisitors = $totalPageviews = 0;
        foreach ($visitorsMap as $key => $value) {
            $totalVisitors = $totalVisitors + $value;
        }

        foreach ($pageviewsMap as $key => $value) {
            $totalPageviews = $totalPageviews + $value;
        }


        $totalVisitorsOld = State::where([['website_id', '=', $website->id], ['name', '=', 'visitors']])
            ->whereBetween('date', [$range['from_old'], $range['to_old']])
            ->sum('count');


        $totalPageviewsOld = State::where([['website_id', '=', $website->id], ['name', '=', 'pageviews']])
            ->whereBetween('date', [$range['from_old'], $range['to_old']])
            ->sum('count');

        $total = State::selectRaw('SUM(`count`) as `count`')
            ->where([['website_id', '=', $website->id], ['name', '=', 'referrer']])
            ->whereIn('value', $websites)
            ->whereBetween('date', [$range['from'], $range['to']])
            ->first();

        $searchEngines = $this->getSearchEngines($website, $range, $search, $sort)
            ->paginate(config('settings.paginate'))
            ->appends(['search' => $search, 'sort' => $sort[2], 'from' => $range['from'], 'to' => $range['to']]);
            

        $pages = $this->getPages($website, $range, null, ['count', 'desc'])
            ->limit(5)
            ->get();

        $totalReferrers = State::where([['website_id', '=', $website->id], ['name', '=', 'referrer']])
            ->whereBetween('date', [$range['from'], $range['to']])
            ->sum('count');

        $referrers = $this->getReferrers($website, $range, null, ['count', 'desc'])
            ->limit(5)
            ->get();

        $countries = $this->getCountries($website, $range, null, ['count', 'desc'])
            ->limit(5)
            ->get();

        $browsers = $this->getBrowsers($website, $range, null, ['count', 'desc'])
            ->limit(5)
            ->get();

        $operatingSystems = $this->getOperatingSystems($website, $range, null, ['count', 'desc'])
            ->limit(5)
            ->get();

        $events = $this->getEvents($website, $range, null, ['count', 'desc'])
            ->limit(5)
            ->get();


        $devices = $this->getDevices($website, $range, $search, $sort)
            ->paginate(config('settings.paginate'))
            ->appends(['search' => $search, 'sort' => $sort[2], 'from' => $range['from'], 'to' => $range['to']]);

        $first = $this->getDevices($website, $range, null, ['count', 'desc'])
            ->first();

        $last = $this->getDevices($website, $range, null, ['count', 'asc'])
            ->first();


        return view('frontend.user.projects.analytics.devices',[
            'view' => 'overview',
            'project_id' => $project->id,
            'ims_client' => $ims_client,
            'website' => $website,
            'range' => $range,
            'referrers' => $referrers,
            'pages' => $pages,
            'visitorsMap' => $visitorsMap,
            'pageviewsMap' => $pageviewsMap,
            'countries' => $countries,
            'browsers' => $browsers,
            'events' => $events,
            'totalVisitors' => $totalVisitors,
            'totalPageviews' => $totalPageviews,
            'totalVisitorsOld' => $totalVisitorsOld,
            'totalPageviewsOld' => $totalPageviewsOld,
            'totalReferrers' => $totalReferrers,
            'total' => $total,
            'devices' => $devices
        ]);
    }

    private function getDevices($website, $range, $search = null, $sort = null)
    {
        return State::selectRaw('`value`, SUM(`count`) as `count`')
            ->where([['website_id', '=', $website->id], ['name', '=', 'device']])
            ->when($search, function($query) use ($search) {
                return $query->searchValue($search);
            })
            ->whereBetween('date', [$range['from'], $range['to']])
            ->groupBy('value')
            ->orderBy($sort[0], $sort[1]);
    }

    public function events(Request $request,$id)
    {
        $project = Projects::where('id',$id)->first();           
        $ims_client = ImsClients::where('project_id',$project->id)->get();
        // dd($project->id);

        $website = Projects::where('url', $project->url)->firstOrFail();


        $range = $this->range();
        $search = $request->input('search');
        if ($request->input('sort') == 'min') {
            $sort = ['count', 'asc', 'min'];
        } else {
            $sort = ['count', 'desc', 'max'];
        }
        $websites = $this->getSocialNetworksList();

        $visitorsMap = $this->getTraffic($website, $range, 'visitors');
        $pageviewsMap = $this->getTraffic($website, $range, 'pageviews');

        $totalVisitors = $totalPageviews = 0;
        foreach ($visitorsMap as $key => $value) {
            $totalVisitors = $totalVisitors + $value;
        }

        foreach ($pageviewsMap as $key => $value) {
            $totalPageviews = $totalPageviews + $value;
        }


        $totalVisitorsOld = State::where([['website_id', '=', $website->id], ['name', '=', 'visitors']])
            ->whereBetween('date', [$range['from_old'], $range['to_old']])
            ->sum('count');


        $totalPageviewsOld = State::where([['website_id', '=', $website->id], ['name', '=', 'pageviews']])
            ->whereBetween('date', [$range['from_old'], $range['to_old']])
            ->sum('count');

        $total = State::selectRaw('SUM(`count`) as `count`')
            ->where([['website_id', '=', $website->id], ['name', '=', 'referrer']])
            ->whereIn('value', $websites)
            ->whereBetween('date', [$range['from'], $range['to']])
            ->first();

        $searchEngines = $this->getSearchEngines($website, $range, $search, $sort)
            ->paginate(config('settings.paginate'))
            ->appends(['search' => $search, 'sort' => $sort[2], 'from' => $range['from'], 'to' => $range['to']]);
            

        $pages = $this->getPages($website, $range, null, ['count', 'desc'])
            ->limit(5)
            ->get();

        $totalReferrers = State::where([['website_id', '=', $website->id], ['name', '=', 'referrer']])
            ->whereBetween('date', [$range['from'], $range['to']])
            ->sum('count');

        $referrers = $this->getReferrers($website, $range, null, ['count', 'desc'])
            ->limit(5)
            ->get();

        $countries = $this->getCountries($website, $range, null, ['count', 'desc'])
            ->limit(5)
            ->get();

        $browsers = $this->getBrowsers($website, $range, null, ['count', 'desc'])
            ->limit(5)
            ->get();

        $operatingSystems = $this->getOperatingSystems($website, $range, null, ['count', 'desc'])
            ->limit(5)
            ->get();

        $events = $this->getEvents($website, $range, null, ['count', 'desc'])
            ->limit(5)
            ->get();


        $events = $this->getEvents($website, $range, $search, $sort)
            ->paginate(config('settings.paginate'))
            ->appends(['search' => $search, 'sort' => $sort[2], 'from' => $range['from'], 'to' => $range['to']]);

        $first = $this->getEvents($website, $range, null, ['count', 'desc'])
            ->first();

        $last = $this->getEvents($website, $range, null, ['count', 'asc'])
            ->first();

        return view('frontend.user.projects.analytics.events',[
            'view' => 'overview',
            'project_id' => $project->id,
            'ims_client' => $ims_client,
            'website' => $website,
            'range' => $range,
            'referrers' => $referrers,
            'pages' => $pages,
            'visitorsMap' => $visitorsMap,
            'pageviewsMap' => $pageviewsMap,
            'countries' => $countries,
            'browsers' => $browsers,
            'events' => $events,
            'totalVisitors' => $totalVisitors,
            'totalPageviews' => $totalPageviews,
            'totalVisitorsOld' => $totalVisitorsOld,
            'totalPageviewsOld' => $totalPageviewsOld,
            'totalReferrers' => $totalReferrers,
            'total' => $total
        ]);
    }

   


}
