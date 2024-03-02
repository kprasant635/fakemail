@extends('layouts.apps')
@section('content')
<main id="js-page-content" role="main" class="page-content">

        <ol class="breadcrumb page-breadcrumb">
            <li class="breadcrumb-item">Admin</li>
            <li class="breadcrumb-item active"> Dashboard</li>
            <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
        </ol>
        <div class="subheader">
            <h1 class="subheader-title">
                <i class='subheader-icon fal fa-chart-area'></i> Admin <span class='fw-300'>Dashboard</span>
            </h1>
        </div>
        <div class="row">
            <div class="col-sm-6 col-xl-3">
                <div class="p-3 bg-primary-300 rounded overflow-hidden position-relative text-white mb-g">
                    <div class="">
                        <h3 class="display-4 d-block l-h-n m-0 fw-500">
                            21.5k
                            <small class="m-0 l-h-n">users signed up</small>
                        </h3>
                    </div> <i class="fal fa-user position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n1"
                        style="font-size:6rem"></i>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="p-3 bg-warning-400 rounded overflow-hidden position-relative text-white mb-g">
                    <div class="">
                        <h3 class="display-4 d-block l-h-n m-0 fw-500">
                            $10,203
                            <small class="m-0 l-h-n">Visual Index Figure</small>
                        </h3>
                    </div> <i class="fal fa-gem position-absolute pos-right pos-bottom opacity-15  mb-n1 mr-n4"
                        style="font-size: 6rem;"></i>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="p-3 bg-success-200 rounded overflow-hidden position-relative text-white mb-g">
                    <div class="">
                        <h3 class="display-4 d-block l-h-n m-0 fw-500">
                            - 103.72
                            <small class="m-0 l-h-n">Offset Balance Ratio</small>
                        </h3>
                    </div> <i class="fal fa-lightbulb position-absolute pos-right pos-bottom opacity-15 mb-n5 mr-n6"
                        style="font-size: 8rem;"></i>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="p-3 bg-info-200 rounded overflow-hidden position-relative text-white mb-g">
                    <div class="">
                        <h3 class="display-4 d-block l-h-n m-0 fw-500">
                            +40%
                            <small class="m-0 l-h-n">Product level increase</small>
                        </h3>
                    </div> <i class="fal fa-globe position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n4"
                        style="font-size: 6rem;"></i>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Marketing profits
                        </h2>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content bg-subtlelight-fade">
                            <div id="js-checkbox-toggles" class="d-flex mb-3">
                                <div class="custom-control custom-switch mr-2">
                                    <input type="checkbox" class="custom-control-input" name="gra-0" id="gra-0"
                                        checked="checked">
                                    <label class="custom-control-label" for="gra-0">Target Profit</label>
                                </div>
                                <div class="custom-control custom-switch mr-2">
                                    <input type="checkbox" class="custom-control-input" name="gra-1" id="gra-1"
                                        checked="checked">
                                    <label class="custom-control-label" for="gra-1">Actual Profit</label>
                                </div>
                                <div class="custom-control custom-switch mr-2">
                                    <input type="checkbox" class="custom-control-input" name="gra-2" id="gra-2"
                                        checked="checked">
                                    <label class="custom-control-label" for="gra-2">User Signups</label>
                                </div>
                            </div>
                            <div id="flot-toggles" class="w-100 mt-4" style="height: 300px"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div id="panel-2" class="panel panel-locked" data-panel-sortable data-panel-collapsed data-panel-close>
                    <div class="panel-hdr">
                        <h2>
                            Returning <span class="fw-300"><i>Target</i></span>
                        </h2>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content poisition-relative">
                            <div
                                class="p-1 position-absolute pos-right pos-top mt-3 mr-3 z-index-cloud d-flex align-items-center justify-content-center">
                                <div
                                    class="border-faded border-top-0 border-left-0 border-bottom-0 py-2 pr-4 mr-3 hidden-sm-down">
                                    <div class="text-right fw-500 l-h-n d-flex flex-column">
                                        <div class="h3 m-0 d-flex align-items-center justify-content-end">
                                            <div class='icon-stack mr-2'> <i
                                                    class="base base-7 icon-stack-3x opacity-100 color-success-600"></i>
                                                <i class="base base-7 icon-stack-2x opacity-100 color-success-500"></i>
                                                <i class="fal fa-arrow-up icon-stack-1x opacity-100 color-white"></i>
                                            </div> $44.34 / GE
                                        </div> <span class="m-0 fs-xs text-muted">Increased Profit as per redux margins
                                            and estimates</span>
                                    </div>
                                </div>
                                <div class="js-easy-pie-chart color-info-400 position-relative d-inline-flex align-items-center justify-content-center"
                                    data-percent="35" data-piesize="95" data-linewidth="10" data-scalelength="5">
                                    <div class="js-easy-pie-chart color-success-400 position-relative position-absolute pos-left pos-right pos-top pos-bottom d-flex align-items-center justify-content-center"
                                        data-percent="65" data-piesize="60" data-linewidth="5" data-scalelength="1"
                                        data-scalecolor="#fff">
                                        <div
                                            class="position-absolute pos-top pos-left pos-right pos-bottom d-flex align-items-center justify-content-center fw-500 fs-xl text-dark">
                                            78%</div>
                                    </div>
                                </div>
                            </div>
                            <div id="flot-area" style="width:100%; height:300px;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div id="panel-3" class="panel panel-locked" data-panel-sortable data-panel-collapsed data-panel-close>
                    <div class="panel-hdr">
                        <h2>
                            Effective <span class="fw-300"><i>Marketing</i></span>
                        </h2>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content poisition-relative">
                            <div class="pb-5 pt-3">
                                <div class="row">
                                    <div class="col-6 col-xl-3 d-sm-flex align-items-center">
                                        <div class="p-2 mr-3 bg-info-200 rounded"> <span class="peity-bar"
                                                data-peity="{&quot;fill&quot;: [&quot;#fff&quot;], &quot;width&quot;: 27, &quot;height&quot;: 27 }">3,4,5,8,2</span>
                                        </div>
                                        <div>
                                            <label class="fs-sm mb-0">Bounce Rate</label>
                                            <h4 class="font-weight-bold mb-0">37.56%</h4>
                                        </div>
                                    </div>
                                    <div class="col-6 col-xl-3 d-sm-flex align-items-center">
                                        <div class="p-2 mr-3 bg-info-300 rounded"> <span class="peity-bar"
                                                data-peity="{&quot;fill&quot;: [&quot;#fff&quot;], &quot;width&quot;: 27, &quot;height&quot;: 27 }">5,3,1,7,9</span>
                                        </div>
                                        <div>
                                            <label class="fs-sm mb-0">Sessions</label>
                                            <h4 class="font-weight-bold mb-0">759</h4>
                                        </div>
                                    </div>
                                    <div class="col-6 col-xl-3 d-sm-flex align-items-center">
                                        <div class="p-2 mr-3 bg-success-300 rounded"> <span class="peity-bar"
                                                data-peity="{&quot;fill&quot;: [&quot;#fff&quot;], &quot;width&quot;: 27, &quot;height&quot;: 27 }">3,4,3,5,5</span>
                                        </div>
                                        <div>
                                            <label class="fs-sm mb-0">New Sessions</label>
                                            <h4 class="font-weight-bold mb-0">12.17%</h4>
                                        </div>
                                    </div>
                                    <div class="col-6 col-xl-3 d-sm-flex align-items-center">
                                        <div class="p-2 mr-3 bg-success-500 rounded"> <span class="peity-bar"
                                                data-peity="{&quot;fill&quot;: [&quot;#fff&quot;], &quot;width&quot;: 27, &quot;height&quot;: 27 }">6,4,7,5,6</span>
                                        </div>
                                        <div>
                                            <label class="fs-sm mb-0">Clickthrough</label>
                                            <h4 class="font-weight-bold mb-0">19.77%</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="flotVisit" style="width:100%; height:208px;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   
</main>
@endsection
