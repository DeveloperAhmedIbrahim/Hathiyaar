@extends('admin.layout')

@section('title', 'Dashboard')

@section('content')

<div class="row">
    <!-- Website Analytics -->
    <div class="col-lg-6 mb-4">
      <div class="swiper-container swiper-container-horizontal swiper swiper-card-advance-bg swiper-initialized swiper-horizontal swiper-backface-hidden" id="swiper-with-pagination-cards">
        <div class="swiper-wrapper" id="swiper-wrapper-fa1ae236b840ac5c" aria-live="off" style="transition-duration: 0ms; transform: translate3d(-1018px, 0px, 0px); transition-delay: 0ms;">

        <div class="swiper-slide swiper-slide-next" role="group" aria-label="1 / 3" data-swiper-slide-index="0" style="width: 509px;">
            <div class="row">
              <div class="col-12">
                <h5 class="text-white mb-0 mt-2">Website Analytics</h5>
                <small>Total 28.5% Conversion Rate</small>
              </div>
              <div class="row">
                <div class="col-lg-7 col-md-9 col-12 order-2 order-md-1">
                  <h6 class="text-white mt-0 mt-md-3 mb-3">Traffic</h6>
                  <div class="row">
                    <div class="col-6">
                      <ul class="list-unstyled mb-0">
                        <li class="d-flex mb-4 align-items-center">
                          <p class="mb-0 fw-medium me-2 website-analytics-text-bg">28%</p>
                          <p class="mb-0">Sessions</p>
                        </li>
                        <li class="d-flex align-items-center mb-2">
                          <p class="mb-0 fw-medium me-2 website-analytics-text-bg">1.2k</p>
                          <p class="mb-0">Leads</p>
                        </li>
                      </ul>
                    </div>
                    <div class="col-6">
                      <ul class="list-unstyled mb-0">
                        <li class="d-flex mb-4 align-items-center">
                          <p class="mb-0 fw-medium me-2 website-analytics-text-bg">3.1k</p>
                          <p class="mb-0">Page Views</p>
                        </li>
                        <li class="d-flex align-items-center mb-2">
                          <p class="mb-0 fw-medium me-2 website-analytics-text-bg">12%</p>
                          <p class="mb-0">Conversions</p>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-5 col-md-3 col-12 order-1 order-md-2 my-4 my-md-0 text-center">
                  <img src="{{ asset('assets/admin/img/illustrations/card-website-analytics-1.png') }}" alt="Website Analytics" width="170" class="card-website-analytics-img">
                </div>
              </div>
            </div>
          </div><div class="swiper-slide swiper-slide-prev" role="group" aria-label="2 / 3" data-swiper-slide-index="1" style="width: 509px;">
            <div class="row">
              <div class="col-12">
                <h5 class="text-white mb-0 mt-2">Website Analytics</h5>
                <small>Total 28.5% Conversion Rate</small>
              </div>
              <div class="col-lg-7 col-md-9 col-12 order-2 order-md-1">
                <h6 class="text-white mt-0 mt-md-3 mb-3">Spending</h6>
                <div class="row">
                  <div class="col-6">
                    <ul class="list-unstyled mb-0">
                      <li class="d-flex mb-4 align-items-center">
                        <p class="mb-0 fw-medium me-2 website-analytics-text-bg">12h</p>
                        <p class="mb-0">Spend</p>
                      </li>
                      <li class="d-flex align-items-center mb-2">
                        <p class="mb-0 fw-medium me-2 website-analytics-text-bg">127</p>
                        <p class="mb-0">Order</p>
                      </li>
                    </ul>
                  </div>
                  <div class="col-6">
                    <ul class="list-unstyled mb-0">
                      <li class="d-flex mb-4 align-items-center">
                        <p class="mb-0 fw-medium me-2 website-analytics-text-bg">18</p>
                        <p class="mb-0">Order Size</p>
                      </li>
                      <li class="d-flex align-items-center mb-2">
                        <p class="mb-0 fw-medium me-2 website-analytics-text-bg">2.3k</p>
                        <p class="mb-0">Items</p>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-lg-5 col-md-3 col-12 order-1 order-md-2 my-4 my-md-0 text-center">
                <img src="{{ asset("assets/admin/img/illustrations/card-website-analytics-2.png") }}" alt="Website Analytics" width="170" class="card-website-analytics-img">
              </div>
            </div>
          </div><div class="swiper-slide swiper-slide-active" role="group" aria-label="3 / 3" data-swiper-slide-index="2" style="width: 509px;">
            <div class="row">
              <div class="col-12">
                <h5 class="text-white mb-0 mt-2">Website Analytics</h5>
                <small>Total 28.5% Conversion Rate</small>
              </div>
              <div class="col-lg-7 col-md-9 col-12 order-2 order-md-1">
                <h6 class="text-white mt-0 mt-md-3 mb-3">Revenue Sources</h6>
                <div class="row">
                  <div class="col-6">
                    <ul class="list-unstyled mb-0">
                      <li class="d-flex mb-4 align-items-center">
                        <p class="mb-0 fw-medium me-2 website-analytics-text-bg">268</p>
                        <p class="mb-0">Direct</p>
                      </li>
                      <li class="d-flex align-items-center mb-2">
                        <p class="mb-0 fw-medium me-2 website-analytics-text-bg">62</p>
                        <p class="mb-0">Referral</p>
                      </li>
                    </ul>
                  </div>
                  <div class="col-6">
                    <ul class="list-unstyled mb-0">
                      <li class="d-flex mb-4 align-items-center">
                        <p class="mb-0 fw-medium me-2 website-analytics-text-bg">890</p>
                        <p class="mb-0">Organic</p>
                      </li>
                      <li class="d-flex align-items-center mb-2">
                        <p class="mb-0 fw-medium me-2 website-analytics-text-bg">1.2k</p>
                        <p class="mb-0">Campaign</p>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-lg-5 col-md-3 col-12 order-1 order-md-2 my-4 my-md-0 text-center">
                <img src="{{ asset("assets/admin/img/illustrations/card-website-analytics-3.png") }}" alt="Website Analytics" width="170" class="card-website-analytics-img">
              </div>
            </div>
          </div></div>
        <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal"><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 3" aria-current="true"></span></div>
      <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
    </div>
    <!--/ Website Analytics -->

    <!-- Sales Overview -->
    <div class="col-lg-3 col-sm-6 mb-4">
      <div class="card">
        <div class="card-header">
          <div class="d-flex justify-content-between">
            <small class="d-block mb-1 text-muted">Sales Overview</small>
            <p class="card-text text-success">+18.2%</p>
          </div>
          <h4 class="card-title mb-1">$42.5k</h4>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-4">
              <div class="d-flex gap-2 align-items-center mb-2">
                <span class="badge bg-label-info p-1 rounded"><i class="ti ti-shopping-cart ti-xs"></i></span>
                <p class="mb-0">Order</p>
              </div>
              <h5 class="mb-0 pt-1 text-nowrap">62.2%</h5>
              <small class="text-muted">6,440</small>
            </div>
            <div class="col-4">
              <div class="divider divider-vertical">
                <div class="divider-text">
                  <span class="badge-divider-bg bg-label-secondary">VS</span>
                </div>
              </div>
            </div>
            <div class="col-4 text-end">
              <div class="d-flex gap-2 justify-content-end align-items-center mb-2">
                <p class="mb-0">Visits</p>
                <span class="badge bg-label-primary p-1 rounded"><i class="ti ti-link ti-xs"></i></span>
              </div>
              <h5 class="mb-0 pt-1 text-nowrap ms-lg-n3 ms-xl-0">25.5%</h5>
              <small class="text-muted">12,749</small>
            </div>
          </div>
          <div class="d-flex align-items-center mt-4">
            <div class="progress w-100" style="height: 8px;">
              <div class="progress-bar bg-info" style="width: 70%" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
              <div class="progress-bar bg-primary" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ Sales Overview -->

    <!-- Revenue Generated -->
    <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
      <div class="card">
        <div class="card-body pb-0">
          <div class="card-icon">
            <span class="badge bg-label-success rounded-pill p-2">
              <i class="ti ti-credit-card ti-sm"></i>
            </span>
          </div>
          <h5 class="card-title mb-0 mt-2">97.5k</h5>
          <small>Revenue Generated</small>
        </div>
        <div id="revenueGenerated" style="min-height: 130px;"><div id="apexcharts0hry5yq2" class="apexcharts-canvas apexcharts0hry5yq2 apexcharts-theme-light" style="width: 242px; height: 130px;"><svg id="SvgjsSvg1211" width="242" height="130" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1213" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1212"><clipPath id="gridRectMask0hry5yq2"><rect id="SvgjsRect1218" width="248" height="132" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMask0hry5yq2"></clipPath><clipPath id="nonForecastMask0hry5yq2"></clipPath><clipPath id="gridRectMarkerMask0hry5yq2"><rect id="SvgjsRect1219" width="246" height="134" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><linearGradient id="SvgjsLinearGradient1224" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1225" stop-opacity="0.6" stop-color="rgba(40,199,111,0.6)" offset="0"></stop><stop id="SvgjsStop1226" stop-opacity="0.1" stop-color="rgba(212,244,226,0.1)" offset="1"></stop><stop id="SvgjsStop1227" stop-opacity="0.1" stop-color="rgba(212,244,226,0.1)" offset="1"></stop></linearGradient></defs><line id="SvgjsLine1217" x1="0" y1="0" x2="0" y2="130" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="130" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG1230" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1231" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1240" class="apexcharts-grid"><g id="SvgjsG1241" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine1243" x1="0" y1="0" x2="242" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1244" x1="0" y1="26" x2="242" y2="26" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1245" x1="0" y1="52" x2="242" y2="52" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1246" x1="0" y1="78" x2="242" y2="78" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1247" x1="0" y1="104" x2="242" y2="104" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1248" x1="0" y1="130" x2="242" y2="130" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1242" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine1250" x1="0" y1="130" x2="242" y2="130" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine1249" x1="0" y1="1" x2="0" y2="130" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG1220" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1221" class="apexcharts-series" seriesName="seriesx1" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1228" d="M 0 130L 0 104C 14.116666666666667 104 26.21666666666667 60.66666666666663 40.333333333333336 60.66666666666663C 54.45 60.66666666666663 66.55000000000001 78 80.66666666666667 78C 94.78333333333333 78 106.88333333333334 34.66666666666663 121 34.66666666666663C 135.11666666666667 34.66666666666663 147.21666666666667 69.33333333333331 161.33333333333334 69.33333333333331C 175.45 69.33333333333331 187.55 17.333333333333314 201.66666666666666 17.333333333333314C 215.78333333333333 17.333333333333314 227.88333333333333 34.66666666666663 242 34.66666666666663C 242 34.66666666666663 242 34.66666666666663 242 130M 242 34.66666666666663z" fill="url(#SvgjsLinearGradient1224)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask0hry5yq2)" pathTo="M 0 130L 0 104C 14.116666666666667 104 26.21666666666667 60.66666666666663 40.333333333333336 60.66666666666663C 54.45 60.66666666666663 66.55000000000001 78 80.66666666666667 78C 94.78333333333333 78 106.88333333333334 34.66666666666663 121 34.66666666666663C 135.11666666666667 34.66666666666663 147.21666666666667 69.33333333333331 161.33333333333334 69.33333333333331C 175.45 69.33333333333331 187.55 17.333333333333314 201.66666666666666 17.333333333333314C 215.78333333333333 17.333333333333314 227.88333333333333 34.66666666666663 242 34.66666666666663C 242 34.66666666666663 242 34.66666666666663 242 130M 242 34.66666666666663z" pathFrom="M -1 364L -1 364L 40.333333333333336 364L 80.66666666666667 364L 121 364L 161.33333333333334 364L 201.66666666666666 364L 242 364"></path><path id="SvgjsPath1229" d="M 0 104C 14.116666666666667 104 26.21666666666667 60.66666666666663 40.333333333333336 60.66666666666663C 54.45 60.66666666666663 66.55000000000001 78 80.66666666666667 78C 94.78333333333333 78 106.88333333333334 34.66666666666663 121 34.66666666666663C 135.11666666666667 34.66666666666663 147.21666666666667 69.33333333333331 161.33333333333334 69.33333333333331C 175.45 69.33333333333331 187.55 17.333333333333314 201.66666666666666 17.333333333333314C 215.78333333333333 17.333333333333314 227.88333333333333 34.66666666666663 242 34.66666666666663" fill="none" fill-opacity="1" stroke="#28c76f" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask0hry5yq2)" pathTo="M 0 104C 14.116666666666667 104 26.21666666666667 60.66666666666663 40.333333333333336 60.66666666666663C 54.45 60.66666666666663 66.55000000000001 78 80.66666666666667 78C 94.78333333333333 78 106.88333333333334 34.66666666666663 121 34.66666666666663C 135.11666666666667 34.66666666666663 147.21666666666667 69.33333333333331 161.33333333333334 69.33333333333331C 175.45 69.33333333333331 187.55 17.333333333333314 201.66666666666666 17.333333333333314C 215.78333333333333 17.333333333333314 227.88333333333333 34.66666666666663 242 34.66666666666663" pathFrom="M -1 364L -1 364L 40.333333333333336 364L 80.66666666666667 364L 121 364L 161.33333333333334 364L 201.66666666666666 364L 242 364"></path><g id="SvgjsG1222" class="apexcharts-series-markers-wrap" data:realIndex="0"></g></g><g id="SvgjsG1223" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine1251" x1="0" y1="0" x2="242" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1252" x1="0" y1="0" x2="242" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1253" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1254" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1255" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect1216" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG1239" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG1214" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 65px;"></div></div></div>
      <div class="resize-triggers"><div class="expand-trigger"><div style="width: 243px; height: 248px;"></div></div><div class="contract-trigger"></div></div></div>
    </div>
    <!--/ Revenue Generated -->

    <!-- Earning Reports -->
    <div class="col-lg-6 mb-4">
      <div class="card h-100">
        <div class="card-header pb-0 d-flex justify-content-between mb-lg-n4">
          <div class="card-title mb-0">
            <h5 class="mb-0">Earning Reports</h5>
            <small class="text-muted">Weekly Earnings Overview</small>
          </div>
          <div class="dropdown">
            <button class="btn p-0" type="button" id="earningReportsId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="ti ti-dots-vertical ti-sm text-muted"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="earningReportsId">
              <a class="dropdown-item" href="javascript:void(0);">View More</a>
              <a class="dropdown-item" href="javascript:void(0);">Delete</a>
            </div>
          </div>
          <!-- </div> -->
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-md-4 d-flex flex-column align-self-end">
              <div class="d-flex gap-2 align-items-center mb-2 pb-1 flex-wrap">
                <h1 class="mb-0">$468</h1>
                <div class="badge rounded bg-label-success">+4.2%</div>
              </div>
              <small>You informed of this week compared to last week</small>
            </div>
            <div class="col-12 col-md-8" style="position: relative;">
              <div id="weeklyEarningReports" style="min-height: 202px;"><div id="apexchartsia95zlrs" class="apexcharts-canvas apexchartsia95zlrs apexcharts-theme-light" style="width: 299px; height: 202px;"><svg id="SvgjsSvg1256" width="299" height="202" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1258" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1257"><linearGradient id="SvgjsLinearGradient1261" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1262" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop><stop id="SvgjsStop1263" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop><stop id="SvgjsStop1264" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop></linearGradient><clipPath id="gridRectMaskia95zlrs"><rect id="SvgjsRect1266" width="313" height="162.73" x="-2" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskia95zlrs"></clipPath><clipPath id="nonForecastMaskia95zlrs"></clipPath><clipPath id="gridRectMarkerMaskia95zlrs"><rect id="SvgjsRect1267" width="313" height="166.73" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><rect id="SvgjsRect1265" width="0" height="162.73" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke-dasharray="3" fill="url(#SvgjsLinearGradient1261)" class="apexcharts-xcrosshairs" y2="162.73" filter="none" fill-opacity="0.9"></rect><g id="SvgjsG1286" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1287" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText1289" font-family="Public Sans" x="22.071428571428573" y="191.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a5a3ae" class="apexcharts-text apexcharts-xaxis-label " style="font-family: &quot;Public Sans&quot;;"><tspan id="SvgjsTspan1290">Mo</tspan><title>Mo</title></text><text id="SvgjsText1292" font-family="Public Sans" x="66.21428571428572" y="191.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a5a3ae" class="apexcharts-text apexcharts-xaxis-label " style="font-family: &quot;Public Sans&quot;;"><tspan id="SvgjsTspan1293">Tu</tspan><title>Tu</title></text><text id="SvgjsText1295" font-family="Public Sans" x="110.35714285714288" y="191.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a5a3ae" class="apexcharts-text apexcharts-xaxis-label " style="font-family: &quot;Public Sans&quot;;"><tspan id="SvgjsTspan1296">We</tspan><title>We</title></text><text id="SvgjsText1298" font-family="Public Sans" x="154.5" y="191.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a5a3ae" class="apexcharts-text apexcharts-xaxis-label " style="font-family: &quot;Public Sans&quot;;"><tspan id="SvgjsTspan1299">Th</tspan><title>Th</title></text><text id="SvgjsText1301" font-family="Public Sans" x="198.64285714285714" y="191.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a5a3ae" class="apexcharts-text apexcharts-xaxis-label " style="font-family: &quot;Public Sans&quot;;"><tspan id="SvgjsTspan1302">Fr</tspan><title>Fr</title></text><text id="SvgjsText1304" font-family="Public Sans" x="242.7857142857143" y="191.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a5a3ae" class="apexcharts-text apexcharts-xaxis-label " style="font-family: &quot;Public Sans&quot;;"><tspan id="SvgjsTspan1305">Sa</tspan><title>Sa</title></text><text id="SvgjsText1307" font-family="Public Sans" x="286.9285714285715" y="191.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a5a3ae" class="apexcharts-text apexcharts-xaxis-label " style="font-family: &quot;Public Sans&quot;;"><tspan id="SvgjsTspan1308">Su</tspan><title>Su</title></text></g></g><g id="SvgjsG1311" class="apexcharts-grid"><g id="SvgjsG1312" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine1314" x1="0" y1="0" x2="309" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1315" x1="0" y1="32.546" x2="309" y2="32.546" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1316" x1="0" y1="65.092" x2="309" y2="65.092" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1317" x1="0" y1="97.638" x2="309" y2="97.638" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1318" x1="0" y1="130.184" x2="309" y2="130.184" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1319" x1="0" y1="162.73" x2="309" y2="162.73" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1313" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine1321" x1="0" y1="162.73" x2="309" y2="162.73" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine1320" x1="0" y1="1" x2="0" y2="162.73" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG1268" class="apexcharts-bar-series apexcharts-plot-series"><g id="SvgjsG1269" class="apexcharts-series" rel="1" seriesName="seriesx1" data:realIndex="0"><path id="SvgjsPath1273" d="M 13.684285714285716 158.73L 13.684285714285716 101.63799999999999Q 13.684285714285716 97.63799999999999 17.684285714285714 97.63799999999999L 26.45857142857143 97.63799999999999Q 30.45857142857143 97.63799999999999 30.45857142857143 101.63799999999999L 30.45857142857143 101.63799999999999L 30.45857142857143 158.73Q 30.45857142857143 162.73 26.45857142857143 162.73L 17.684285714285714 162.73Q 13.684285714285716 162.73 13.684285714285716 158.73z" fill="#FCE92729" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskia95zlrs)" pathTo="M 13.684285714285716 158.73L 13.684285714285716 101.63799999999999Q 13.684285714285716 97.63799999999999 17.684285714285714 97.63799999999999L 26.45857142857143 97.63799999999999Q 30.45857142857143 97.63799999999999 30.45857142857143 101.63799999999999L 30.45857142857143 101.63799999999999L 30.45857142857143 158.73Q 30.45857142857143 162.73 26.45857142857143 162.73L 17.684285714285714 162.73Q 13.684285714285716 162.73 13.684285714285716 158.73z" pathFrom="M 13.684285714285716 158.73L 13.684285714285716 158.73L 30.45857142857143 158.73L 30.45857142857143 158.73L 30.45857142857143 158.73L 30.45857142857143 158.73L 30.45857142857143 158.73L 13.684285714285716 158.73" cy="97.63799999999999" cx="57.82714285714286" j="0" val="40" barHeight="65.092" barWidth="16.774285714285714"></path><path id="SvgjsPath1275" d="M 57.82714285714286 158.73L 57.82714285714286 60.95549999999999Q 57.82714285714286 56.95549999999999 61.82714285714286 56.95549999999999L 70.60142857142857 56.95549999999999Q 74.60142857142857 56.95549999999999 74.60142857142857 60.95549999999999L 74.60142857142857 60.95549999999999L 74.60142857142857 158.73Q 74.60142857142857 162.73 70.60142857142857 162.73L 61.82714285714286 162.73Q 57.82714285714286 162.73 57.82714285714286 158.73z" fill="#FCE92729" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskia95zlrs)" pathTo="M 57.82714285714286 158.73L 57.82714285714286 60.95549999999999Q 57.82714285714286 56.95549999999999 61.82714285714286 56.95549999999999L 70.60142857142857 56.95549999999999Q 74.60142857142857 56.95549999999999 74.60142857142857 60.95549999999999L 74.60142857142857 60.95549999999999L 74.60142857142857 158.73Q 74.60142857142857 162.73 70.60142857142857 162.73L 61.82714285714286 162.73Q 57.82714285714286 162.73 57.82714285714286 158.73z" pathFrom="M 57.82714285714286 158.73L 57.82714285714286 158.73L 74.60142857142857 158.73L 74.60142857142857 158.73L 74.60142857142857 158.73L 74.60142857142857 158.73L 74.60142857142857 158.73L 57.82714285714286 158.73" cy="56.95549999999999" cx="101.97" j="1" val="65" barHeight="105.7745" barWidth="16.774285714285714"></path><path id="SvgjsPath1277" d="M 101.97 158.73L 101.97 85.365Q 101.97 81.365 105.97 81.365L 114.74428571428571 81.365Q 118.74428571428571 81.365 118.74428571428571 85.365L 118.74428571428571 85.365L 118.74428571428571 158.73Q 118.74428571428571 162.73 114.74428571428571 162.73L 105.97 162.73Q 101.97 162.73 101.97 158.73z" fill="#FCE92729" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskia95zlrs)" pathTo="M 101.97 158.73L 101.97 85.365Q 101.97 81.365 105.97 81.365L 114.74428571428571 81.365Q 118.74428571428571 81.365 118.74428571428571 85.365L 118.74428571428571 85.365L 118.74428571428571 158.73Q 118.74428571428571 162.73 114.74428571428571 162.73L 105.97 162.73Q 101.97 162.73 101.97 158.73z" pathFrom="M 101.97 158.73L 101.97 158.73L 118.74428571428571 158.73L 118.74428571428571 158.73L 118.74428571428571 158.73L 118.74428571428571 158.73L 118.74428571428571 158.73L 101.97 158.73" cy="81.365" cx="146.11285714285714" j="2" val="50" barHeight="81.365" barWidth="16.774285714285714"></path><path id="SvgjsPath1279" d="M 146.11285714285714 158.73L 146.11285714285714 93.5015Q 146.11285714285714 89.5015 150.11285714285714 89.5015L 158.88714285714286 89.5015Q 162.88714285714286 89.5015 162.88714285714286 93.5015L 162.88714285714286 93.5015L 162.88714285714286 158.73Q 162.88714285714286 162.73 158.88714285714286 162.73L 150.11285714285714 162.73Q 146.11285714285714 162.73 146.11285714285714 158.73z" fill="#FCE92729" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskia95zlrs)" pathTo="M 146.11285714285714 158.73L 146.11285714285714 93.5015Q 146.11285714285714 89.5015 150.11285714285714 89.5015L 158.88714285714286 89.5015Q 162.88714285714286 89.5015 162.88714285714286 93.5015L 162.88714285714286 93.5015L 162.88714285714286 158.73Q 162.88714285714286 162.73 158.88714285714286 162.73L 150.11285714285714 162.73Q 146.11285714285714 162.73 146.11285714285714 158.73z" pathFrom="M 146.11285714285714 158.73L 146.11285714285714 158.73L 162.88714285714286 158.73L 162.88714285714286 158.73L 162.88714285714286 158.73L 162.88714285714286 158.73L 162.88714285714286 158.73L 146.11285714285714 158.73" cy="89.5015" cx="190.25571428571428" j="3" val="45" barHeight="73.2285" barWidth="16.774285714285714"></path><path id="SvgjsPath1281" d="M 190.25571428571428 158.73L 190.25571428571428 20.272999999999996Q 190.25571428571428 16.272999999999996 194.25571428571428 16.272999999999996L 203.03 16.272999999999996Q 207.03 16.272999999999996 207.03 20.272999999999996L 207.03 20.272999999999996L 207.03 158.73Q 207.03 162.73 203.03 162.73L 194.25571428571428 162.73Q 190.25571428571428 162.73 190.25571428571428 158.73z" fill="rgba(115,103,240,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskia95zlrs)" pathTo="M 190.25571428571428 158.73L 190.25571428571428 20.272999999999996Q 190.25571428571428 16.272999999999996 194.25571428571428 16.272999999999996L 203.03 16.272999999999996Q 207.03 16.272999999999996 207.03 20.272999999999996L 207.03 20.272999999999996L 207.03 158.73Q 207.03 162.73 203.03 162.73L 194.25571428571428 162.73Q 190.25571428571428 162.73 190.25571428571428 158.73z" pathFrom="M 190.25571428571428 158.73L 190.25571428571428 158.73L 207.03 158.73L 207.03 158.73L 207.03 158.73L 207.03 158.73L 207.03 158.73L 190.25571428571428 158.73" cy="16.272999999999996" cx="234.39857142857142" j="4" val="90" barHeight="146.457" barWidth="16.774285714285714"></path><path id="SvgjsPath1283" d="M 234.39857142857142 158.73L 234.39857142857142 77.2285Q 234.39857142857142 73.2285 238.39857142857142 73.2285L 247.17285714285714 73.2285Q 251.17285714285714 73.2285 251.17285714285714 77.2285L 251.17285714285714 77.2285L 251.17285714285714 158.73Q 251.17285714285714 162.73 247.17285714285714 162.73L 238.39857142857142 162.73Q 234.39857142857142 162.73 234.39857142857142 158.73z" fill="#FCE92729" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskia95zlrs)" pathTo="M 234.39857142857142 158.73L 234.39857142857142 77.2285Q 234.39857142857142 73.2285 238.39857142857142 73.2285L 247.17285714285714 73.2285Q 251.17285714285714 73.2285 251.17285714285714 77.2285L 251.17285714285714 77.2285L 251.17285714285714 158.73Q 251.17285714285714 162.73 247.17285714285714 162.73L 238.39857142857142 162.73Q 234.39857142857142 162.73 234.39857142857142 158.73z" pathFrom="M 234.39857142857142 158.73L 234.39857142857142 158.73L 251.17285714285714 158.73L 251.17285714285714 158.73L 251.17285714285714 158.73L 251.17285714285714 158.73L 251.17285714285714 158.73L 234.39857142857142 158.73" cy="73.2285" cx="278.5414285714286" j="5" val="55" barHeight="89.5015" barWidth="16.774285714285714"></path><path id="SvgjsPath1285" d="M 278.5414285714286 158.73L 278.5414285714286 52.81899999999999Q 278.5414285714286 48.81899999999999 282.5414285714286 48.81899999999999L 291.3157142857143 48.81899999999999Q 295.3157142857143 48.81899999999999 295.3157142857143 52.81899999999999L 295.3157142857143 52.81899999999999L 295.3157142857143 158.73Q 295.3157142857143 162.73 291.3157142857143 162.73L 282.5414285714286 162.73Q 278.5414285714286 162.73 278.5414285714286 158.73z" fill="#FCE92729" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskia95zlrs)" pathTo="M 278.5414285714286 158.73L 278.5414285714286 52.81899999999999Q 278.5414285714286 48.81899999999999 282.5414285714286 48.81899999999999L 291.3157142857143 48.81899999999999Q 295.3157142857143 48.81899999999999 295.3157142857143 52.81899999999999L 295.3157142857143 52.81899999999999L 295.3157142857143 158.73Q 295.3157142857143 162.73 291.3157142857143 162.73L 282.5414285714286 162.73Q 278.5414285714286 162.73 278.5414285714286 158.73z" pathFrom="M 278.5414285714286 158.73L 278.5414285714286 158.73L 295.3157142857143 158.73L 295.3157142857143 158.73L 295.3157142857143 158.73L 295.3157142857143 158.73L 295.3157142857143 158.73L 278.5414285714286 158.73" cy="48.81899999999999" cx="322.68428571428575" j="6" val="70" barHeight="113.911" barWidth="16.774285714285714"></path><g id="SvgjsG1271" class="apexcharts-bar-goals-markers" style="pointer-events: none"><g id="SvgjsG1272" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1274" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1276" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1278" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1280" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1282" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1284" className="apexcharts-bar-goals-groups"></g></g></g><g id="SvgjsG1270" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine1322" x1="0" y1="0" x2="309" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1323" x1="0" y1="0" x2="309" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1324" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1325" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1326" class="apexcharts-point-annotations"></g></g><g id="SvgjsG1309" class="apexcharts-yaxis" rel="0" transform="translate(-8, 0)"><g id="SvgjsG1310" class="apexcharts-yaxis-texts-g"></g></g><g id="SvgjsG1259" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 101px;"></div></div></div>
            <div class="resize-triggers"><div class="expand-trigger"><div style="width: 324px; height: 203px;"></div></div><div class="contract-trigger"></div></div></div>
          </div>
          <div class="border rounded p-3 mt-4">
            <div class="row gap-4 gap-sm-0">
              <div class="col-12 col-sm-4">
                <div class="d-flex gap-2 align-items-center">
                  <div class="badge rounded bg-label-primary p-1"><i class="ti ti-currency-dollar ti-sm"></i></div>
                  <h6 class="mb-0">Earnings</h6>
                </div>
                <h4 class="my-2 pt-1">$545.69</h4>
                <div class="progress w-75" style="height:4px">
                  <div class="progress-bar" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
              <div class="col-12 col-sm-4">
                <div class="d-flex gap-2 align-items-center">
                  <div class="badge rounded bg-label-info p-1"><i class="ti ti-chart-pie-2 ti-sm"></i></div>
                  <h6 class="mb-0">Profit</h6>
                </div>
                <h4 class="my-2 pt-1">$256.34</h4>
                <div class="progress w-75" style="height:4px">
                  <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
              <div class="col-12 col-sm-4">
                <div class="d-flex gap-2 align-items-center">
                  <div class="badge rounded bg-label-danger p-1"><i class="ti ti-brand-paypal ti-sm"></i></div>
                  <h6 class="mb-0">Expense</h6>
                </div>
                <h4 class="my-2 pt-1">$74.19</h4>
                <div class="progress w-75" style="height:4px">
                  <div class="progress-bar bg-danger" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ Earning Reports -->

    <!-- Support Tracker -->
    <div class="col-md-6 mb-4">
      <div class="card h-100">
        <div class="card-header d-flex justify-content-between pb-0">
          <div class="card-title mb-0">
            <h5 class="mb-0">Support Tracker</h5>
            <small class="text-muted">Last 7 Days</small>
          </div>
          <div class="dropdown">
            <button class="btn p-0" type="button" id="supportTrackerMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="ti ti-dots-vertical ti-sm text-muted"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="supportTrackerMenu">
              <a class="dropdown-item" href="javascript:void(0);">View More</a>
              <a class="dropdown-item" href="javascript:void(0);">Delete</a>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-sm-4 col-md-12 col-lg-4">
              <div class="mt-lg-4 mt-lg-2 mb-lg-4 mb-2 pt-1">
                <h1 class="mb-0">164</h1>
                <p class="mb-0">Total Tickets</p>
              </div>
              <ul class="p-0 m-0">
                <li class="d-flex gap-3 align-items-center mb-lg-3 pt-2 pb-1">
                  <div class="badge rounded bg-label-primary p-1"><i class="ti ti-ticket ti-sm"></i></div>
                  <div>
                    <h6 class="mb-0 text-nowrap">New Tickets</h6>
                    <small class="text-muted">142</small>
                  </div>
                </li>
                <li class="d-flex gap-3 align-items-center mb-lg-3 pb-1">
                  <div class="badge rounded bg-label-info p-1"><i class="ti ti-circle-check ti-sm"></i></div>
                  <div>
                    <h6 class="mb-0 text-nowrap">Open Tickets</h6>
                    <small class="text-muted">28</small>
                  </div>
                </li>
                <li class="d-flex gap-3 align-items-center pb-1">
                  <div class="badge rounded bg-label-warning p-1"><i class="ti ti-clock ti-sm"></i></div>
                  <div>
                    <h6 class="mb-0 text-nowrap">Response Time</h6>
                    <small class="text-muted">1 Day</small>
                  </div>
                </li>
              </ul>
            </div>
            <div class="col-12 col-sm-8 col-md-12 col-lg-8" style="position: relative;">
              <div id="supportTracker" style="min-height: 257.9px;"><div id="apexchartslwzx1zgyg" class="apexcharts-canvas apexchartslwzx1zgyg apexcharts-theme-light" style="width: 299px; height: 257.9px;"><svg id="SvgjsSvg1327" width="299" height="257.9" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1329" class="apexcharts-inner apexcharts-graphical" transform="translate(-17.5, -10)"><defs id="SvgjsDefs1328"><clipPath id="gridRectMasklwzx1zgyg"><rect id="SvgjsRect1331" width="342" height="375" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMasklwzx1zgyg"></clipPath><clipPath id="nonForecastMasklwzx1zgyg"></clipPath><clipPath id="gridRectMarkerMasklwzx1zgyg"><rect id="SvgjsRect1332" width="340" height="377" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><linearGradient id="SvgjsLinearGradient1337" x1="1" y1="0" x2="0" y2="1"><stop id="SvgjsStop1338" stop-opacity="1" stop-color="rgba(115,103,240,1)" offset="0.3"></stop><stop id="SvgjsStop1339" stop-opacity="0.6" stop-color="rgba(255,255,255,0.6)" offset="0.7"></stop><stop id="SvgjsStop1340" stop-opacity="0.6" stop-color="rgba(255,255,255,0.6)" offset="1"></stop></linearGradient><linearGradient id="SvgjsLinearGradient1348" x1="1" y1="0" x2="0" y2="1"><stop id="SvgjsStop1349" stop-opacity="1" stop-color="rgba(115,103,240,1)" offset="0.3"></stop><stop id="SvgjsStop1350" stop-opacity="0.6" stop-color="rgba(115,103,240,0.6)" offset="0.7"></stop><stop id="SvgjsStop1351" stop-opacity="0.6" stop-color="rgba(115,103,240,0.6)" offset="1"></stop></linearGradient></defs><g id="SvgjsG1333" class="apexcharts-radialbar"><g id="SvgjsG1334"><g id="SvgjsG1335" class="apexcharts-tracks"><g id="SvgjsG1336" class="apexcharts-radialbar-track apexcharts-track" rel="1"><path id="apexcharts-radialbarTrack-0" d="M 91.53845410946391 259.1233220103534 A 118.9530487804878 118.9530487804878 0 1 1 259.1233220103534 244.46154589053606" fill="none" fill-opacity="1" stroke="rgba(255,255,255,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="22.632926829268296" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 91.53845410946391 259.1233220103534 A 118.9530487804878 118.9530487804878 0 1 1 259.1233220103534 244.46154589053606"></path></g></g><g id="SvgjsG1342"><g id="SvgjsG1347" class="apexcharts-series apexcharts-radial-series" seriesName="CompletedxTask" rel="1" data:realIndex="0"><path id="SvgjsPath1352" d="M 91.53845410946391 259.1233220103534 A 118.9530487804878 118.9530487804878 0 1 1 286.9530487804878 168" fill="none" fill-opacity="0.85" stroke="url(#SvgjsLinearGradient1348)" stroke-opacity="1" stroke-linecap="butt" stroke-width="22.632926829268296" stroke-dasharray="10" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="230" data:value="85" index="0" j="0" data:pathOrig="M 91.53845410946391 259.1233220103534 A 118.9530487804878 118.9530487804878 0 1 1 286.9530487804878 168"></path></g><circle id="SvgjsCircle1343" r="102.63658536585366" cx="168" cy="168" class="apexcharts-radialbar-hollow" fill="transparent"></circle><g id="SvgjsG1344" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)" style="opacity: 1;"><text id="SvgjsText1345" font-family="Public Sans" x="168" y="148" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="500" fill="#a5a3ae" class="apexcharts-text apexcharts-datalabel-label" style="font-family: &quot;Public Sans&quot;;">Completed Task</text><text id="SvgjsText1346" font-family="Public Sans" x="168" y="194" text-anchor="middle" dominant-baseline="auto" font-size="38px" font-weight="500" fill="#5d596c" class="apexcharts-text apexcharts-datalabel-value" style="font-family: &quot;Public Sans&quot;;">85%</text></g></g></g></g><line id="SvgjsLine1353" x1="0" y1="0" x2="336" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1354" x1="0" y1="0" x2="336" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG1330" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div></div></div>
            <div class="resize-triggers"><div class="expand-trigger"><div style="width: 324px; height: 307px;"></div></div><div class="contract-trigger"></div></div></div>
          </div>
        </div>
      </div>
    </div>
    <!--/ Support Tracker -->
</div>
@endsection
