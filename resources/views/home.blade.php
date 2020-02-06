@extends('layouts.admin')
@section('content')
<div class="row clearfix">
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="info-box bg-pink hover-expand-effect">
            <div class="icon">
                <i class="material-icons">playlist_add_check</i>
            </div>
            <div class="content">
                <div class="text">NEW TASKS</div>
                <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20">123
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="info-box bg-cyan hover-expand-effect">
            <div class="icon">
                <i class="material-icons">help</i>
            </div>
            <div class="content">
                <div class="text">NEW TICKETS</div>
                <div class="number count-to" data-from="0" data-to="257" data-speed="1000" data-fresh-interval="20">123
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="info-box bg-light-green hover-expand-effect">
            <div class="icon">
                <i class="material-icons">forum</i>
            </div>
            <div class="content">
                <div class="text">NEW COMMENTS</div>
                <div class="number count-to" data-from="0" data-to="243" data-speed="1000" data-fresh-interval="20">123
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="info-box bg-orange hover-expand-effect">
            <div class="icon">
                <i class="material-icons">person_add</i>
            </div>
            <div class="content">
                <div class="text">NEW VISITORS</div>
                <div class="number count-to" data-from="0" data-to="1225" data-speed="1000" data-fresh-interval="20">123
                </div>
            </div>
        </div>
    </div>
</div>
<!-- line chart  -->
<div class="row">
<div class="col-md-5"></div>
<div class="col-md-7"><h2 class="text-dark">Gebruikers</h2></div>

</div>


</div>
<div class="charts--container">
    <ul>
      <div id="pieChart">
        <li class="chart">


          <div id="lineChart">
            <svg id="lineChartSVG" class="lineChart--svg">
              <defs>
                <linearGradient id="lineChart--gradientBackgroundArea" x1="0" x2="0" y1="0" y2="1">
                  <stop class="lineChart--gradientBackgroundArea--top" offset="0%" />
                  <stop class="lineChart--gradientBackgroundArea--bottom" offset="100%" />
                </linearGradient>
              </defs>
            </svg>
          </div>
        </li>
      </div>
    </ul>
  </div>


  </ul>
  </div>
@endsection
@section('scripts')
@parent

@endsection
