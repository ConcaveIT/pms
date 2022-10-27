    <!-- sidebar -->
    <div class="sidebar px-4 py-4 py-md-5 me-0">
        <div class="d-flex flex-column h-100">
            <a href="/" class="mb-0 brand-icon">
                <img  class="sidebar_logo"  src="/images/logo.png" alt="WorkBot">
            </a>
            <!-- Menu: main ul -->

            <ul class="menu-list flex-grow-1 mt-3">
                <li > <a class="m-link" href="{{route('dashboard')}}"><i class="icofont-home fs-5"></i> <span>Dashboard</span></a></li>
                {{-- <li class="collapsed">
                    <a class="m-link active" data-bs-toggle="collapse" data-bs-target="#dashboard-Components" href="#">
                        <i class="icofont-home fs-5"></i> <span>Dashboard</span> <span class="arrow icofont-dotted-down ms-auto text-end fs-5"></span></a>
                    <!-- Menu: Sub menu ul -->
                    <ul class="sub-menu collapse show" id="dashboard-Components">
                        <li><a class="ms-link active" href="{{route('dashboard')}}"> <span>Project Dashboard</span></a></li>
                        <li><a class="ms-link" href="{{route('hr.dashboard')}}"> <span>HR Dashboard</span></a></li>
                    </ul>
                </li> --}}

                 @foreach(App\Models\Sidemenu::where('parent_id','0')->where('position','sidebar')->orderBy('ordering','asc')->get() as $sidemenu)

                 {{-- {{dd($sidemenu)}} --}}

                    @if($sidemenu->module == 'separator')
                        <li class="nav-small-cap"> <span> {{ $sidemenu->menu_name}} </span></li>  
                    @else

                        @if(count($sidemenu->submenues) > 0)
                            <li class="collapsed">
                                <span class="m-link">
                                   @if($sidemenu->menu_type == 'internal')
                                    <a  href="{{route( strtolower($sidemenu->module).'.index')}}">
                                        <i class="{{ $sidemenu->menu_icons}}"></i> <span class="ml-15">{{ $sidemenu->menu_name}}</span>
                                    </a>
                                    @else
                                        <a  href="{{$sidemenu->url}}">
                                            <i class="{{ $sidemenu->menu_icons}}"></i> <span class="ml-15">{{ $sidemenu->menu_name}}</span>
                                        </a>
                                    @endif

                                    <a data-bs-toggle="collapse" data-bs-target="#menu_{{ $sidemenu->menu_id}}"  href="javascript:void(0)">
                                        <span class="arrow icofont-dotted-down ms-auto text-end fs-5"></span>
                                    </a>
                                 </span>
                                

                                <!-- Menu: Sub menu ul -->
                                <ul class="sub-menu collapse" id="menu_{{ $sidemenu->menu_id}}">
                                    @foreach($sidemenu->submenues as $sub)
                                        @if($sub->module != 'separator')
                                            @if($sidemenu->menu_type == 'internal')
                                                <li><a class="ms-link" href="{{route( strtolower($sub->module).'.index')}}">  <i class="{{ $sub->menu_icons}} mt-2"></i> <span>{{ $sub->menu_name }}</span></a></li>
                                             @else
                                                <li><a class="ms-link" href="{{$sidemenu->url}}"><i class="{{ $sub->menu_icons}} mt-2"></i> <span>{{ $sub->menu_name }}</span></a></li>
                                            @endif
                                       
                                        @endif

                                    @endforeach
                                </ul>
                            </li>
                        @else
                            @if($sidemenu->module != 'separator')
                                @if($sidemenu->menu_type == 'internal')
                                    <li>
                                        <a class="m-link" href="{{route( strtolower($sidemenu->module).'.index')}}"><i class="{{ $sidemenu->menu_icons}}"></i> <span>{{ $sidemenu->menu_name }}</span></a>
                                    </li>
                                @else
                                    <li>
                                        <a class="m-link" href="{{$sidemenu->url}}"><i class="{{ $sidemenu->menu_icons}}"></i> <span>{{ $sidemenu->menu_name }}</span></a>
                                    </li>
                                @endif
                            @endif
                        @endif
                    @endif
                @endforeach  

            </ul>

            <!-- Menu: menu collepce btn -->
            {{-- <a type="button" class="btn btn-link  text-light">
                <small>Developed by DITS</small>
            </a> --}}
        </div>
    </div>