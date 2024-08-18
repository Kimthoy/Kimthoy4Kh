@extends('layoutfb.backend')
@section('content')
<section class="no-padding-top no-padding-bottom">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-3 col-sm-6">
                <div class="statistic-block block">
                  <div class="progress-details d-flex align-items-end justify-content-between">
                    <div class="title">
                      <div class="icon"><i class="icon-user-1"></i></div><strong>New Clients</strong>
                    </div>
                    <div class="number dashtext-1">{{$user}}</div>
                  </div>
                  <div class="progress progress-template">
                    <div role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-1"></div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="statistic-block block">
                  <div class="progress-details d-flex align-items-end justify-content-between">
                    <div class="title">
                      <div class="icon"><i class="icon-contract"></i></div><strong>New Products</strong>
                    </div>
                    <div class="number dashtext-2">{{$product}}</div>
                  </div>
                  <div class="progress progress-template">
                    <div role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-2"></div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="statistic-block block">
                  <div class="progress-details d-flex align-items-end justify-content-between">
                    <div class="title">
                      <div class="icon"><i class="icon-paper-and-pencil"></i></div><strong>New Invoices</strong>
                    </div>
                    <div class="number dashtext-3">{{$order}}</div>
                  </div>
                  <div class="progress progress-template">
                    <div role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-3"></div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="statistic-block block">
                  <div class="progress-details d-flex align-items-end justify-content-between">
                    <div class="title">
                      <div class="icon"><i class="icon-writing-whiteboard"></i></div><strong>All Projects</strong>
                    </div>
                    <div class="number dashtext-4">{{$order_item}}</div>
                  </div>
                  <div class="progress progress-template">
                    <div role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-4"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="no-padding-bottom">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-4">
                <div class="bar-chart block no-margin-bottom">
                  <canvas id="barChartExample1"></canvas>
                </div>
                <div class="bar-chart block">
                  <canvas id="barChartExample2"></canvas>
                </div>
              </div>
              <div class="col-lg-8">
                <div class="line-cahrt block">
                  <canvas id="lineCahrt"></canvas>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="no-padding-bottom">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-6">
                <div class="stats-2-block block d-flex">
                  <div class="stats-2 d-flex">
                    <div class="stats-2-arrow low"><i class="fa fa-caret-down"></i></div>
                    <div class="stats-2-content"><strong class="d-block">5.657</strong><span class="d-block">Standard Scans</span>
                      <div class="progress progress-template progress-small">
                        <div role="progressbar" style="width: 60%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template progress-bar-small dashbg-2"></div>
                      </div>
                    </div>
                  </div>
                  <div class="stats-2 d-flex">
                    <div class="stats-2-arrow height"><i class="fa fa-caret-up"></i></div>
                    <div class="stats-2-content"><strong class="d-block">3.1459</strong><span class="d-block">Team Scans</span>
                      <div class="progress progress-template progress-small">
                        <div role="progressbar" style="width: 35%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template progress-bar-small dashbg-3"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="stats-3-block block d-flex">
                  <div class="stats-3"><strong class="d-block">745</strong><span class="d-block">Total requests</span>
                    <div class="progress progress-template progress-small">
                      <div role="progressbar" style="width: 35%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template progress-bar-small dashbg-1"></div>
                    </div>
                  </div>
                  <div class="stats-3 d-flex justify-content-between text-center">
                    <div class="item"><strong class="d-block strong-sm">4.124</strong><span class="d-block span-sm">Threats</span>
                      <div class="line"></div><small>+246</small>
                    </div>
                    <div class="item"><strong class="d-block strong-sm">2.147</strong><span class="d-block span-sm">Neutral</span>
                      <div class="line"></div><small>+416</small>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="drills-chart block">
                  <canvas id="lineChart1"></canvas>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="no-padding-bottom">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-3">
                <div class="user-block block text-center">
                  <div class="avatar"><img src="{{asset('team/thoy.jpg')}}" alt="..." class="img-fluid">
                    <div class="order dashbg-2">1st</div>
                  </div><a href="#" class="user-title">
                    <h3 class="h5">Kim Thoy</h3><span>@kim_thoy</span></a>
                  <div class="contributions">950 Contributions</div>
                  <div class="details d-flex">
                    <div class="item"><i class="icon-info"></i><strong>150</strong></div>
                    <div class="item"><i class="fa fa-gg"></i><strong>340</strong></div>
                    <div class="item"><i class="icon-flow-branch"></i><strong>460</strong></div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="user-block block text-center">
                  <div class="avatar"><img src="{{asset('team/rathanak.jpg')}}" alt="..." class="img-fluid">
                    <div class="order dashbg-1">2nd</div>
                  </div><a href="#" class="user-title">
                    <h3 class="h5">Khoy Rathanak</h3><span>@rathanak</span></a>
                  <div class="contributions">772 Contributions</div>
                  <div class="details d-flex">
                    <div class="item"><i class="icon-info"></i><strong>80</strong></div>
                    <div class="item"><i class="fa fa-gg"></i><strong>420</strong></div>
                    <div class="item"><i class="icon-flow-branch"></i><strong>272</strong></div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="user-block block text-center">
                  <div class="avatar"><img src="{{asset('team/nakhim1.jpg')}}" alt="..." class="img-fluid">
                    <div class="order dashbg-4">3rd</div>
                  </div><a href="#" class="user-title">
                    <h3 class="h5">Sebastian Wood</h3><span>@sebastian</span></a>
                  <div class="contributions">620 Contributions</div>
                  <div class="details d-flex">
                    <div class="item"><i class="icon-info"></i><strong>150</strong></div>
                    <div class="item"><i class="fa fa-gg"></i><strong>280</strong></div>
                    <div class="item"><i class="icon-flow-branch"></i><strong>190</strong></div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="user-block block text-center">
                  <div class="avatar"><img src="{{asset('team/vitu.jpg')}}" alt="..." class="img-fluid">
                    <div class="order dashbg-4">3rd</div>
                  </div><a href="#" class="user-title">
                    <h3 class="h5">Khim Vitu</h3><span>@vitu_khim</span></a>
                  <div class="contributions">620 Contributions</div>
                  <div class="details d-flex">
                    <div class="item"><i class="icon-info"></i><strong>150</strong></div>
                    <div class="item"><i class="fa fa-gg"></i><strong>280</strong></div>
                    <div class="item"><i class="icon-flow-branch"></i><strong>190</strong></div>
                  </div>
                </div>
              </div>
            </div>
           
   
            <div class="public-user-block block">
              <div class="row d-flex align-items-center">                   
                <div class="col-lg-4 d-flex align-items-center">
                  <div class="order">6th</div>
                  <div class="avatar"> <img src="{{asset('team/nakhim1.jpg')}}" alt="..." class="img-fluid"></div>
                  <a href="#" class="name"><strong class="d-block">Khim Nakhim</strong><span class="d-block">@khim_nakhim</span></a>
                </div>
                <div class="col-lg-4 text-center">
                  <div class="contributions">170 Contributions</div>
                </div>
                <div class="col-lg-4">
                  <div class="details d-flex">
                    <div class="item"><i class="icon-info"></i><strong>60</strong></div>
                    <div class="item"><i class="fa fa-gg"></i><strong>70</strong></div>
                    <div class="item"><i class="icon-flow-branch"></i><strong>40</strong></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="margin-bottom-sm">
          <div class="container-fluid">
            <div class="row d-flex align-items-stretch">
              <div class="col-lg-4">
                <div class="stats-with-chart-1 block">
                  <div class="title"> <strong class="d-block">Sales Difference</strong><span class="d-block">Lorem ipsum dolor sit</span></div>
                  <div class="row d-flex align-items-end justify-content-between">
                    <div class="col-5">
                      <div class="text"><strong class="d-block dashtext-3">$740</strong><span class="d-block">May 2017</span><small class="d-block">320 Sales</small></div>
                    </div>
                    <div class="col-7">
                      <div class="bar-chart chart">
                        <canvas id="salesBarChart1"></canvas>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">   
                <div class="stats-with-chart-1 block">
                  <div class="title"> <strong class="d-block">Visit Statistics</strong><span class="d-block">Lorem ipsum dolor sit</span></div>
                  <div class="row d-flex align-items-end justify-content-between">
                    <div class="col-4">
                      <div class="text"><strong class="d-block dashtext-1">$457</strong><span class="d-block">May 2017</span><small class="d-block">210 Sales</small></div>
                    </div>
                    <div class="col-8">
                      <div class="bar-chart chart">
                        <canvas id="visitPieChart"></canvas>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="stats-with-chart-1 block">
                  <div class="title"> <strong class="d-block">Sales Activities</strong><span class="d-block">Lorem ipsum dolor sit</span></div>
                  <div class="row d-flex align-items-end justify-content-between">
                    <div class="col-5">
                      <div class="text"><strong class="d-block dashtext-2">80%</strong><span class="d-block">May 2017</span><small class="d-block">+35 Sales</small></div>
                    </div>
                    <div class="col-7">
                      <div class="bar-chart chart">
                        <canvas id="salesBarChart2"></canvas>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

@endsection