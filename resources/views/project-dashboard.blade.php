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
                                <h6 class="mb-0 fw-bold">$5,318</h6>
                                <small class="text-muted">Income</small>
                            </div>
                            <div class="p-2 ms-4">
                                <h6 class="mb-0 fw-bold">$2,840</h6>
                                <small class="text-muted">Expense</small>
                            </div>
                        </div>
                        <div class="mt-3" id="incomeanalytics"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-8">
                <div class="card">
                    <div class="card-header py-3 d-flex justify-content-between align-items-center">
                        <div class="info-header">
                            <h6 class="mb-0 fw-bold ">Project Timeline</h6>
                        </div>
                        <button class="btn btn-sm btn-link  dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"></button>
                        <ul class="dropdown-menu border-0 shadow dropdown-menu-end">
                            <li><a class="dropdown-item py-2 rounded" href="#">Last 7 days</a></li>
                            <li><a class="dropdown-item py-2 rounded" href="#">Last 30 days</a></li>
                            <li><a class="dropdown-item py-2 rounded" href="#">Last 60 days</a></li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div id="apex-timeline"></div>
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
                                                    <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"  style="width: 10%;">0%</div>
                                           
                                                @elseif($project->status == 1)

                                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="{{$completedPercent}}" aria-valuemin="0" aria-valuemax="100"  style="width: {{$completedPercent}}%;">{{$completedPercent}}%</div>
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
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach


                                    {{-- <tr>
                                        <td><a href="projects.html">Practice to Perfect</a></td>
                                        <td>12-02-2021</td>
                                        <td>1 Month</td>
                                        <td><img src="assets/images/xs/avatar2.jpg" alt="Avatar" class="avatar sm rounded-circle me-2"><a href="#">Colin</a></td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar  bg-primary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">80%</div>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-success">LOW</span></td>
                                    </tr>
                                    <tr>
                                        <td><a href="projects.html">Rhinestone</a></td>
                                        <td>18-02-2021</td>
                                        <td>2 Month</td>
                                        <td><img src="assets/images/xs/avatar3.jpg" alt="Avatar" class="avatar sm rounded-circle me-2"><a href="#">Adam</a></td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar  bg-primary" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">90%</div>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-danger">HIGH</span></td>
                                    </tr>
                                    <tr>
                                        <td><a href="projects.html">Box of Crayons</a></td>
                                        <td>23-02-2021</td>
                                        <td>1 Month</td>
                                        <td><img src="assets/images/xs/avatar4.jpg" alt="Avatar" class="avatar sm rounded-circle me-2"><a href="#">Peter</a></td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar  bg-primary" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;">85%</div>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-warning">MEDIUM</span></td>
                                    </tr>
                                    <tr>
                                        <td><a href="projects.html">Gob Geeklords</a></td>
                                        <td>16-03-2021</td>
                                        <td>10 Month</td>
                                        <td><img src="assets/images/xs/avatar5.jpg" alt="Avatar" class="avatar sm rounded-circle me-2"><a href="#">Evan</a></td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar  bg-primary" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%;">65%</div>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-success">LOW</span></td>
                                    </tr>
                                    <tr>
                                        <td><a href="projects.html">Java Dalia</a></td>
                                        <td>17-03-2021</td>
                                        <td>8 Month</td>
                                        <td><img src="assets/images/xs/avatar6.jpg" alt="Avatar" class="avatar sm rounded-circle me-2"><a href="#">Connor</a></td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar  bg-primary" role="progressbar" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100" style="width: 48%;">48%</div>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-secondary">MEDIUM</span></td>
                                    </tr>
                                    <tr>
                                        <td><a href="projects.html">Fast Cad</a></td>
                                        <td>14-04-2021</td>
                                        <td>2 Month</td>
                                        <td><img src="assets/images/xs/avatar7.jpg" alt="Avatar" class="avatar sm rounded-circle me-2"><a href="#">Benjamin</a></td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar  bg-primary" role="progressbar" aria-valuenow="76" aria-valuemin="0" aria-valuemax="100" style="width: 76%;">76%</div>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-secondary">MEDIUM</span></td>
                                    </tr> --}}



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
@endpush

