@extends('layouts.app')
@section('content')
<div class="main px-lg-4 px-md-4">

<!-- Body: Body -->
<div class="body d-flex py-3">
    <div class="container-xxl">
        <div class="row g-3 mb-3 row-deck">
            <div class="col-md-12 col-lg-4 col-xl-4 col-xxl-4">
                <div class="card ">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="avatar lg  rounded-1 no-thumbnail bg-lightyellow color-defult"><i class="bi bi-journal-check fs-4"></i></div>
                            <div class="flex-fill ms-4">
                                <div class="">Total Task</div>
                                <h5 class="mb-0 ">{{$data['totalTask'] ?? 0}}</h5>
                            </div>
                            <a href="task.html" title="view-members" class="btn btn-link text-decoration-none  rounded-1"><i class="icofont-hand-drawn-right fs-2 "></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-4 col-xl-4 col-xxl-4">
                <div class="card ">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="avatar lg  rounded-1 no-thumbnail bg-lightblue color-defult"><i class="bi bi-list-check fs-4"></i></div>
                            <div class="flex-fill ms-4">
                                <div class="">Completed Task</div>
                                <h5 class="mb-0 ">{{$data['completedTask'] ?? 0}}</h5>
                            </div>
                            <a href="task.html" title="space-used" class="btn btn-link text-decoration-none  rounded-1"><i class="icofont-hand-drawn-right fs-2 "></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-4 col-xl-4 col-xxl-4">
                <div class="card ">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="avatar lg  rounded-1 no-thumbnail bg-lightgreen color-defult"><i class="bi bi-clipboard-data fs-4"></i></div>
                            <div class="flex-fill ms-4">
                                <div class="">Pending Task</div>
                                <h5 class="mb-0 ">{{$data['pendingTask'] ?? 0}}</h5>
                            </div>
                            <a href="task.html" title="renewal-date" class="btn btn-link text-decoration-none  rounded-1"><i class="icofont-hand-drawn-right fs-2 "></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- Row End -->

        <div class="row g-3 mb-3 row-deck">
            <div class="col-md-12 col-lg-4">
                <div class="card">
                    <div class="card-body">
                       <h6 class="mb-3 fw-bold ">Income Analytics</h6>
                        <div class="d-flex justify-content-end text-center">
                            <div class="p-2">
                                <h6 class="mb-0 fw-bold">{{'BDT '.Helper::currencyFormat($data['totalIncome'] )?? 0}}</h6>
                                <small class="text-muted">Revenue</small>
                            </div>
                            <div class="p-2 ms-4">
                                <h6 class="mb-0 fw-bold">{{'BDT '.Helper::currencyFormat($data['totalExpense'] ) ?? 0}}</h6>
                                <small class="text-muted">Expense</small>
                            </div>

                            <div class="p-2 ms-4">
                                <h6 class="mb-0 fw-bold">{{'BDT '.Helper::currencyFormat($data['totalProfit'] ) ?? 0}}</h6>
                                <small class="text-muted">Profit</small>
                            </div>

                        </div>
                        <div class="mt-3" id="incomeanalytics"></div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <h6 class="mb-3 fw-bold ">Cash Flow Analysis</h6>
                        <div id="apex-cashFlow"></div>
                    </div>
                </div>
            </div>

            <div class="col-md-8 col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <h6 class="mb-3 fw-bold ">Task Resolved</h6>
                        <div id="apex-timeline"></div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h6 class="mb-3 fw-bold ">Employees</h6>
                        <div id="apex-employes-category"></div>
                    </div>
                </div>
            </div>

            

        </div><!-- Row End -->
        <div class="row g-3 mb-3 row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-2 row-cols-xl-4 row-cols-xxl-4">
            <div class="col">
                <div class="card bg-primary">
                    <div class="card-body text-white d-flex align-items-center">
                        <i class="icofont-data fs-3"></i>
                        <div class="d-flex flex-column ms-3">
                            <h6 class="mb-0">Total Projects</h6>
                            <span class="text-white">{{$data['totalProjects'] ?? 0}}</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card bg-primary">
                    <div class="card-body text-white d-flex align-items-center">
                        <i class="icofont-chart-flow fs-3"></i>
                        <div class="d-flex flex-column ms-3">
                            <h6 class="mb-0">Yet To Start</h6>
                            <span class="text-white">{{$data['commingProjects'] ?? 0}}</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card bg-primary">
                    <div class="card-body text-white d-flex align-items-center">
                        <i class="icofont-chart-flow-2 fs-3"></i>
                        <div class="d-flex flex-column ms-3">
                            <h6 class="mb-0">On Going Projects</h6>
                            <span class="text-white">{{$data['ongoingProjects'] ?? 0}}</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card bg-primary">
                    <div class="card-body text-white d-flex align-items-center">
                        <i class="icofont-tasks fs-3"></i>
                        <div class="d-flex flex-column ms-3">
                            <h6 class="mb-0">Finished Projects</h6>
                            <span class="text-white">{{$data['completedProjects'] ?? 0}}</span>
                        </div>
                    </div>
                </div>
            </div>             
        </div>
        <div class="row g-3 mb-3 row-deck">
            <div class="col-md-12">
                <div class="card mb-3">
                        <div class="card-header py-3 d-flex justify-content-between align-items-center">
                            <div class="info-header">
                                <h6 class="mb-0 fw-bold ">Project Information</h6>
                            </div>
                        </div>
                        <div class="card-body">
                            <table id="myProjectTable" class="table table-hover align-middle mb-0" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Start Date</th>
                                        <th>Deadline</th>
                                        <th>End Date</th>
                                        <th>Team Leader</th>
                                        <th>Completion</th>
                                        <th>Stage</th>
                                    </tr>
                                </thead>
                                <tbody>

                                @foreach($data['projects'] as $project)
                                    <tr>
                                        <td><a href="#">{{$project->title}}</a></td>
                                        <td>{{ date('d M,Y',strtotime($project->start_date)) }}</td>
                                        <td>{{ date('d M,Y',strtotime($project->deadline)) }}</td>
                                        <td>{{ ($project->end_date) ? date('d M,Y',strtotime($project->end_date)) : '' }}</td>
                                        <td>
                                            @php 
                                                $projectManager = App\Models\Member::find($project->project_manager_id); 
                                                $completedPercent = 0;
                                                if($project->status == 1){
                                                    $task = App\Models\Tasks::select('status')->where('project_id',$project->id)->count();
                                                    $completedTask = App\Models\Tasks::select('status')->where('status',4)->where('project_id',$project->id)->count();
                                                    $completedPercent = (($task/100)*$completedTask)*100;
                                                }
                                                if($project->status == 2){
                                                    $task = App\Models\Tasks::select('status')->where('project_id',$project->id)->count();
                                                    $completedTask = App\Models\Tasks::select('status')->where('status',4)->where('project_id',$project->id)->count();
                                                    $completedPercent = (($task/100)*$completedTask)*100;
                                                }
                                            @endphp


                                            @if($projectManager)
                                                <img src="{{'/'.$projectManager->profile_image}}" alt="Avatar" class="avatar sm  rounded-circle me-2">
                                                <a href="#">{{$projectManager->name}}</a> 
                                            @endif
                                        </td>
                                        <td>
                                            <div class="progress">
                                               @if($project->status == 4)
                                                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"  style="width: 100%;">100%</div>
                                                @elseif($project->status == 3)
                                                    <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"  style="width: 0%;">0%</div>
                                                @elseif($project->status == 1)
                                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="{{$completedPercent ?? 10}}" aria-valuemin="0" aria-valuemax="100"  style="width: {{$completedPercent}}%;">{{$completedPercent}}%</div>
                                                 @elseif($project->status == 2)
                                                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="{{$completedPercent ?? 10}}" aria-valuemin="0" aria-valuemax="100"  style="width: {{$completedPercent}}%;">{{$completedPercent}}%</div>
                                                 @endif

                                            </div>
                                        </td>
                                        <td>
                                            @if($project->status == 4)
                                                <span class="badge bg-success">COMPLETED</span>
                                            @elseif($project->status == 3)
                                                <span class="badge bg-warning">YET TO START</span>
                                            @elseif($project->status == 1)
                                                <span class="badge bg-info">ON GOING</span>
                                            @elseif($project->status == 2)
                                                <span class="badge bg-danger">Canceled</span>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                </div>
            </div>
        </div><!-- Row End -->
    </div>             
</div>



</div>
</div>
@endsection

@push('script')
    <script src="{{asset('assets/js/page/index.js')}}"></script>
    <script>
     // Income Analytics
    $(document).ready(function() {
        var options = {
            align: 'center',
            series: [
                @foreach($data['incomeChart'] as $iChart)
                    {{$iChart->total_worth}},
                @endforeach
            ],
            responsive: [{
                breakpoint: 420,
                options: {
                    chart: {
                        width: 200,
                        align: 'center',
                    },
                    legend: {
                        position: 'bottom',
                        markers: {
                            fillColors:'var(--chart-color1)'
                        },
                        labels: {
                            colors: 'var(--chart-color1)'
                        },
                    }
                }
            }],
            chart: {
                height: 336,
                type: 'polarArea',
                toolbar: {
                    show: false,
                },
            },
            labels: [
                @foreach($data['incomeChart'] as $iChart)
                    "{{$iChart->title}}",
                @endforeach
            ],
            fill: {
                opacity: 1,
                colors: [
                    @foreach($data['incomeChart'] as $iChart)
                        'var(--chart-color{{$loop->iteration}})', 
                    @endforeach
                    
                ],
            },
            stroke: {
                width: 1,
                colors: undefined
            },
            yaxis: {
                show: false
            },
            legend: {
                position: 'bottom', // left, right, top, bottom
                horizontalAlign: 'center',  // left, right, center
            },
            plotOptions: {
                polarArea: {
                    rings: {
                        strokeWidth: 0
                    }
                }
            },
            theme: {
                monochrome: {
                enabled: true,
                shadeTo: 'light',
                shadeIntensity: 0.6
                }
            }
        };

        var chart = new ApexCharts(document.querySelector("#incomeanalytics"), options);
        chart.render();
    }); 
 </script>


<script>
    //Task Resolved
        $(document).ready(function() {
        
        var options = {
            series: [
            {
                name: '{{date("Y")}}',
                data: [
                    @foreach($data['taskResolvedThisYear'] as $taskResolved)
                       {{$taskResolved}},
                    @endforeach
                ],
            },
            {

                name: '{{Carbon\Carbon::now()->year-1}}',
                data: [
                    @foreach($data['taskResolvedLastYear'] as $taskResolvedLastYear)
                        {{$taskResolvedLastYear}},
                    @endforeach
                ],
            },
            {

                name: '{{Carbon\Carbon::now()->year-2}}',
                data: [
                    @foreach($data['taskResolvedLast2Year'] as $taskResolvedLast2Year)
                        {{$taskResolvedLast2Year}},
                    @endforeach
                ],
            }

        ],
            chart: {
                type: 'bar',
                height: 300,
                stacked: true,
                toolbar: {
                    show: false
                },
                zoom: {
                    enabled: false
                }
            },
            colors: ['var(--chart-color1)','var(--chart-color2)','var(--chart-color3)'],
            responsive: [{
                breakpoint: 480,
                options: {
                    legend: {
                        position: 'bottom',
                        offsetX: -10,
                        offsetY: 0
                    }
                }
            }],
            xaxis: {
                categories: ['Jan','Feb','March','Apr','May','Jun','July','Aug','Sept','Oct','Nov','Dec'],
            },
            legend: {
                position: 'top', // top, bottom
                horizontalAlign: 'right', // left, right
            },
            
            dataLabels: {
                enabled: false,
            },
            fill: {
                opacity: 1
            }
        };

        var chart = new ApexCharts(document.querySelector("#apex-timeline"), options);
        chart.render();
    });
</script>

<script>
       var options = {
          series: [{
          name: 'Net Profit',
          data: [44, 55, 57, 56, 61, 58, 63, 60, 66]
        }, {
          name: 'Revenue',
          data: [76, 85, 101, 98, 87, 105, 91, 114, 94]
        }, {
          name: 'Free Cash Flow',
          data: [35, 41, 36, 26, 45, 48, 52, 53, 41,45,12,65]
        }],
          chart: {
          type: 'bar',
          height: 350
        },
        plotOptions: {
          bar: {
            horizontal: false,
            columnWidth: '55%',
            endingShape: 'rounded'
          },
        },
        dataLabels: {
          enabled: false
        },
        stroke: {
          show: true,
          width: 2,
          colors: ['transparent']
        },
        xaxis: {
          categories: ['Jan','Feb','March','Apr','May','Jun','July','Aug','Sept','Oct','Nov','Dec'],
        },
        yaxis: {
          title: {
            text: 'BDT (thousands)'
          }
        },
        fill: {
          opacity: 1
        },
        tooltip: {
          y: {
            formatter: function (val) {
              return "$ " + val + " thousands"
            }
          }
        }
        };

        var chart = new ApexCharts(document.querySelector("#apex-cashFlow"), options);
        chart.render();
</script>

<script>
       // Employees Data
       $(document).ready(function() {
        var options = {
            align: 'center',
            chart: {
                height: 250,
                type: 'donut',
                align: 'center',
            },
            labels: ['Man', 'Women'],
            dataLabels: {
                enabled: false,
            },
            legend: {
                position: 'bottom',
                horizontalAlign: 'center',
                show: true,
            },
            colors: ['var(--chart-color4)', 'var(--chart-color3)'],
            series: [44, 55],
            responsive: [{
                breakpoint: 480,
                options: {
                    chart: {
                        width: 200
                    },
                    legend: {
                        position: 'bottom'
                    }
                }
            }]
        }
        var chart = new ApexCharts( document.querySelector("#apex-employes-category"),options);        
        chart.render();
    }); 
</script>


@endpush

