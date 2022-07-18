@extends('layouts.app')

@section('content')
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
						<!--begin::Content wrapper-->
						<div class="d-flex flex-column flex-column-fluid">
							<!--begin::Toolbar-->
							<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
								<!--begin::Toolbar container-->
								<div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
									<!--begin::Page title-->
									<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
										<!--begin::Title-->
										<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Projects Dashboard</h1>
										<!--end::Title-->
										<!--begin::Breadcrumb-->
										<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
											<!--begin::Item-->
											<li class="breadcrumb-item text-muted">
												<a href="../index.html" class="text-muted text-hover-primary">Home</a>
											</li>
											<!--end::Item-->
											<!--begin::Item-->
											<li class="breadcrumb-item">
												<span class="bullet bg-gray-400 w-5px h-2px"></span>
											</li>
											<!--end::Item-->
											<!--begin::Item-->
											<li class="breadcrumb-item text-muted">Dashboards</li>
											<!--end::Item-->
										</ul>
										<!--end::Breadcrumb-->
									</div>
									<!--end::Page title-->
									<!--begin::Actions-->
									<div class="d-flex align-items-center gap-2 gap-lg-3">
										<!--begin::Secondary button-->
										<a href="../apps/projects/list.html" class="btn btn-sm fw-bold bg-body btn-color-gray-700 btn-active-color-primary">My Projects</a>
										<!--end::Secondary button-->
										<!--begin::Primary button-->
										<a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">New Project</a>
										<!--end::Primary button-->
									</div>
									<!--end::Actions-->
								</div>
								<!--end::Toolbar container-->
							</div>
							<!--end::Toolbar-->
							<!--begin::Content-->
							<div id="kt_app_content" class="app-content flex-column-fluid">
								<!--begin::Content container-->
								<div id="kt_app_content_container" class="app-container container-xxl">
									<!--begin::Row-->
									<div class="row g-5 g-xl-10 mb-xl-10">
										<!--begin::Col-->
										<div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">
											<!--begin::Card widget 16-->
											<div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-center border-0 h-md-50 mb-5 mb-xl-10" style="background-color: #080655">
												<!--begin::Header-->
												<div class="card-header pt-5">
													<!--begin::Title-->
													<div class="card-title d-flex flex-column">
														<!--begin::Amount-->
														<span class="fs-2hx fw-bold text-white me-2 lh-1 ls-n2">69</span>
														<!--end::Amount-->
														<!--begin::Subtitle-->
														<span class="text-white opacity-50 pt-1 fw-semibold fs-6">Active Projects</span>
														<!--end::Subtitle-->
													</div>
													<!--end::Title-->
												</div>
												<!--end::Header-->
												<!--begin::Card body-->
												<div class="card-body d-flex align-items-end pt-0">
													<!--begin::Progress-->
													<div class="d-flex align-items-center flex-column mt-3 w-100">
														<div class="d-flex justify-content-between fw-bold fs-6 text-white opacity-50 w-100 mt-auto mb-2">
															<span>43 Pending</span>
															<span>72%</span>
														</div>
														<div class="h-8px mx-3 w-100 bg-light-danger rounded">
															<div class="bg-danger rounded h-8px" role="progressbar" style="width: 72%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
													</div>
													<!--end::Progress-->
												</div>
												<!--end::Card body-->
											</div>
											<!--end::Card widget 16-->
											<!--begin::Card widget 7-->
											<div class="card card-flush h-md-50 mb-5 mb-xl-10">
												<!--begin::Header-->
												<div class="card-header pt-5">
													<!--begin::Title-->
													<div class="card-title d-flex flex-column">
														<!--begin::Amount-->
														<span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">357</span>
														<!--end::Amount-->
														<!--begin::Subtitle-->
														<span class="text-gray-400 pt-1 fw-semibold fs-6">Professionals</span>
														<!--end::Subtitle-->
													</div>
													<!--end::Title-->
												</div>
												<!--end::Header-->
												<!--begin::Card body-->
												<div class="card-body d-flex flex-column justify-content-end pe-0">
													<!--begin::Title-->
													<span class="fs-6 fw-bolder text-gray-800 d-block mb-2">Today’s Heroes</span>
													<!--end::Title-->
													<!--begin::Users group-->
													<div class="symbol-group symbol-hover flex-nowrap">
														<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" data-kt-initialized="1">
															<span class="symbol-label bg-warning text-inverse-warning fw-bold">A</span>
														</div>
														<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" data-kt-initialized="1">
															<img alt="Pic" src="../assets/media/avatars/300-11.jpg">
														</div>
														<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" data-kt-initialized="1">
															<span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
														</div>
														<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" data-kt-initialized="1">
															<img alt="Pic" src="../assets/media/avatars/300-2.jpg">
														</div>
														<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" data-kt-initialized="1">
															<span class="symbol-label bg-danger text-inverse-danger fw-bold">P</span>
														</div>
														<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" data-kt-initialized="1">
															<img alt="Pic" src="../assets/media/avatars/300-12.jpg">
														</div>
														<a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="modal" data-bs-target="#kt_modal_view_users">
															<span class="symbol-label bg-dark text-gray-300 fs-8 fw-bold">+42</span>
														</a>
													</div>
													<!--end::Users group-->
												</div>
												<!--end::Card body-->
											</div>
											<!--end::Card widget 7-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">
											<!--begin::Card widget 17-->
											<div class="card card-flush h-md-50 mb-5 mb-xl-10">
												<!--begin::Header-->
												<div class="card-header pt-5">
													<!--begin::Title-->
													<div class="card-title d-flex flex-column">
														<!--begin::Info-->
														<div class="d-flex align-items-center">
															<!--begin::Currency-->
															<span class="fs-4 fw-semibold text-gray-400 me-1 align-self-start">$</span>
															<!--end::Currency-->
															<!--begin::Amount-->
															<span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">69,700</span>
															<!--end::Amount-->
															<!--begin::Badge-->
															<span class="badge badge-light-success fs-base">
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
															<span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor"></rect>
																	<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor"></path>
																</svg>
															</span>
															<!--end::Svg Icon-->2.2%</span>
															<!--end::Badge-->
														</div>
														<!--end::Info-->
														<!--begin::Subtitle-->
														<span class="text-gray-400 pt-1 fw-semibold fs-6">Projects Earnings in April</span>
														<!--end::Subtitle-->
													</div>
													<!--end::Title-->
												</div>
												<!--end::Header-->
												<!--begin::Card body-->
												<div class="card-body pt-2 pb-4 d-flex flex-wrap align-items-center">
													<!--begin::Chart-->
													<div class="d-flex flex-center me-5 pt-2">
														<div id="kt_card_widget_17_chart" style="min-width: 70px; min-height: 70px" data-kt-size="70" data-kt-line="11"><span></span><canvas height="70" width="70"></canvas></div>
													</div>
													<!--end::Chart-->
													<!--begin::Labels-->
													<div class="d-flex flex-column content-justify-center flex-row-fluid">
														<!--begin::Label-->
														<div class="d-flex fw-semibold align-items-center">
															<!--begin::Bullet-->
															<div class="bullet w-8px h-3px rounded-2 bg-success me-3"></div>
															<!--end::Bullet-->
															<!--begin::Label-->
															<div class="text-gray-500 flex-grow-1 me-4">Leaf CRM</div>
															<!--end::Label-->
															<!--begin::Stats-->
															<div class="fw-bolder text-gray-700 text-xxl-end">$7,660</div>
															<!--end::Stats-->
														</div>
														<!--end::Label-->
														<!--begin::Label-->
														<div class="d-flex fw-semibold align-items-center my-3">
															<!--begin::Bullet-->
															<div class="bullet w-8px h-3px rounded-2 bg-primary me-3"></div>
															<!--end::Bullet-->
															<!--begin::Label-->
															<div class="text-gray-500 flex-grow-1 me-4">Mivy App</div>
															<!--end::Label-->
															<!--begin::Stats-->
															<div class="fw-bolder text-gray-700 text-xxl-end">$2,820</div>
															<!--end::Stats-->
														</div>
														<!--end::Label-->
														<!--begin::Label-->
														<div class="d-flex fw-semibold align-items-center">
															<!--begin::Bullet-->
															<div class="bullet w-8px h-3px rounded-2 me-3" style="background-color: #E4E6EF"></div>
															<!--end::Bullet-->
															<!--begin::Label-->
															<div class="text-gray-500 flex-grow-1 me-4">Others</div>
															<!--end::Label-->
															<!--begin::Stats-->
															<div class="fw-bolder text-gray-700 text-xxl-end">$45,257</div>
															<!--end::Stats-->
														</div>
														<!--end::Label-->
													</div>
													<!--end::Labels-->
												</div>
												<!--end::Card body-->
											</div>
											<!--end::Card widget 17-->
											<!--begin::List widget 25-->
											<div class="card card-flush h-lg-50">
												<!--begin::Header-->
												<div class="card-header pt-5">
													<!--begin::Title-->
													<h3 class="card-title text-gray-800">Highlights</h3>
													<!--end::Title-->
													<!--begin::Toolbar-->
													<div class="card-toolbar d-none">
														<!--begin::Daterangepicker(defined in src/js/layout/app.js)-->
														<div data-kt-daterangepicker="true" data-kt-daterangepicker-opens="left" class="btn btn-sm btn-light d-flex align-items-center px-4" data-kt-initialized="1">
															<!--begin::Display range-->
															<div class="text-gray-600 fw-bold">20 Jun 2022 - 19 Jul 2022</div>
															<!--end::Display range-->
															<!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
															<span class="svg-icon svg-icon-1 ms-2 me-0">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path opacity="0.3" d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z" fill="currentColor"></path>
																	<path d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z" fill="currentColor"></path>
																	<path d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z" fill="currentColor"></path>
																</svg>
															</span>
															<!--end::Svg Icon-->
														</div>
														<!--end::Daterangepicker-->
													</div>
													<!--end::Toolbar-->
												</div>
												<!--end::Header-->
												<!--begin::Body-->
												<div class="card-body pt-5">
													<!--begin::Item-->
													<div class="d-flex flex-stack">
														<!--begin::Section-->
														<div class="text-gray-700 fw-semibold fs-6 me-2">Avg. Client Rating</div>
														<!--end::Section-->
														<!--begin::Statistics-->
														<div class="d-flex align-items-senter">
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr094.svg-->
															<span class="svg-icon svg-icon-2 svg-icon-success me-2">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<rect opacity="0.5" x="16.9497" y="8.46448" width="13" height="2" rx="1" transform="rotate(135 16.9497 8.46448)" fill="currentColor"></rect>
																	<path d="M14.8284 9.97157L14.8284 15.8891C14.8284 16.4749 15.3033 16.9497 15.8891 16.9497C16.4749 16.9497 16.9497 16.4749 16.9497 15.8891L16.9497 8.05025C16.9497 7.49797 16.502 7.05025 15.9497 7.05025L8.11091 7.05025C7.52512 7.05025 7.05025 7.52513 7.05025 8.11091C7.05025 8.6967 7.52512 9.17157 8.11091 9.17157L14.0284 9.17157C14.4703 9.17157 14.8284 9.52975 14.8284 9.97157Z" fill="currentColor"></path>
																</svg>
															</span>
															<!--end::Svg Icon-->
															<!--begin::Number-->
															<span class="text-gray-900 fw-bolder fs-6">7.8</span>
															<!--end::Number-->
															<span class="text-gray-400 fw-bold fs-6">/10</span>
														</div>
														<!--end::Statistics-->
													</div>
													<!--end::Item-->
													<!--begin::Separator-->
													<div class="separator separator-dashed my-3"></div>
													<!--end::Separator-->
													<!--begin::Item-->
													<div class="d-flex flex-stack">
														<!--begin::Section-->
														<div class="text-gray-700 fw-semibold fs-6 me-2">Avg. Quotes</div>
														<!--end::Section-->
														<!--begin::Statistics-->
														<div class="d-flex align-items-senter">
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr093.svg-->
															<span class="svg-icon svg-icon-2 svg-icon-danger me-2">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<rect opacity="0.5" x="7.05026" y="15.5355" width="13" height="2" rx="1" transform="rotate(-45 7.05026 15.5355)" fill="currentColor"></rect>
																	<path d="M9.17158 14.0284L9.17158 8.11091C9.17158 7.52513 8.6967 7.05025 8.11092 7.05025C7.52513 7.05025 7.05026 7.52512 7.05026 8.11091L7.05026 15.9497C7.05026 16.502 7.49797 16.9497 8.05026 16.9497L15.8891 16.9497C16.4749 16.9497 16.9498 16.4749 16.9498 15.8891C16.9498 15.3033 16.4749 14.8284 15.8891 14.8284L9.97158 14.8284C9.52975 14.8284 9.17158 14.4703 9.17158 14.0284Z" fill="currentColor"></path>
																</svg>
															</span>
															<!--end::Svg Icon-->
															<!--begin::Number-->
															<span class="text-gray-900 fw-bolder fs-6">730</span>
															<!--end::Number-->
														</div>
														<!--end::Statistics-->
													</div>
													<!--end::Item-->
													<!--begin::Separator-->
													<div class="separator separator-dashed my-3"></div>
													<!--end::Separator-->
													<!--begin::Item-->
													<div class="d-flex flex-stack">
														<!--begin::Section-->
														<div class="text-gray-700 fw-semibold fs-6 me-2">Avg. Agent Earnings</div>
														<!--end::Section-->
														<!--begin::Statistics-->
														<div class="d-flex align-items-senter">
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr094.svg-->
															<span class="svg-icon svg-icon-2 svg-icon-success me-2">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<rect opacity="0.5" x="16.9497" y="8.46448" width="13" height="2" rx="1" transform="rotate(135 16.9497 8.46448)" fill="currentColor"></rect>
																	<path d="M14.8284 9.97157L14.8284 15.8891C14.8284 16.4749 15.3033 16.9497 15.8891 16.9497C16.4749 16.9497 16.9497 16.4749 16.9497 15.8891L16.9497 8.05025C16.9497 7.49797 16.502 7.05025 15.9497 7.05025L8.11091 7.05025C7.52512 7.05025 7.05025 7.52513 7.05025 8.11091C7.05025 8.6967 7.52512 9.17157 8.11091 9.17157L14.0284 9.17157C14.4703 9.17157 14.8284 9.52975 14.8284 9.97157Z" fill="currentColor"></path>
																</svg>
															</span>
															<!--end::Svg Icon-->
															<!--begin::Number-->
															<span class="text-gray-900 fw-bolder fs-6">$2,309</span>
															<!--end::Number-->
														</div>
														<!--end::Statistics-->
													</div>
													<!--end::Item-->
												</div>
												<!--end::Body-->
											</div>
											<!--end::LIst widget 25-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-lg-12 col-xl-12 col-xxl-6 mb-5 mb-xl-0">
											<!--begin::Timeline widget 3-->
											<div class="card h-md-100">
												<!--begin::Header-->
												<div class="card-header border-0 pt-5">
													<h3 class="card-title align-items-start flex-column">
														<span class="card-label fw-bold text-dark">What’s up Today</span>
														<span class="text-muted mt-1 fw-semibold fs-7">Total 424,567 deliveries</span>
													</h3>
													<!--begin::Toolbar-->
													<div class="card-toolbar">
														<a href="#" class="btn btn-sm btn-light">Report Cecnter</a>
													</div>
													<!--end::Toolbar-->
												</div>
												<!--end::Header-->
												<!--begin::Body-->
												<div class="card-body pt-7 px-0">
													<!--begin::Nav-->
													<ul class="nav nav-stretch nav-pills nav-pills-custom nav-pills-active-custom d-flex justify-content-between mb-8 px-5" role="tablist">
														<!--begin::Nav item-->
														<li class="nav-item p-0 ms-0" role="presentation">
															<!--begin::Date-->
															<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger" data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_1" aria-selected="false" tabindex="-1" role="tab">
																<span class="fs-7 fw-semibold">Fr</span>
																<span class="fs-6 fw-bold">20</span>
															</a>
															<!--end::Date-->
														</li>
														<!--end::Nav item-->
														<!--begin::Nav item-->
														<li class="nav-item p-0 ms-0" role="presentation">
															<!--begin::Date-->
															<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger" data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_2" aria-selected="false" tabindex="-1" role="tab">
																<span class="fs-7 fw-semibold">Sa</span>
																<span class="fs-6 fw-bold">21</span>
															</a>
															<!--end::Date-->
														</li>
														<!--end::Nav item-->
														<!--begin::Nav item-->
														<li class="nav-item p-0 ms-0" role="presentation">
															<!--begin::Date-->
															<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger" data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_3" aria-selected="false" tabindex="-1" role="tab">
																<span class="fs-7 fw-semibold">Su</span>
																<span class="fs-6 fw-bold">22</span>
															</a>
															<!--end::Date-->
														</li>
														<!--end::Nav item-->
														<!--begin::Nav item-->
														<li class="nav-item p-0 ms-0" role="presentation">
															<!--begin::Date-->
															<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger active" data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_4" aria-selected="true" role="tab">
																<span class="fs-7 fw-semibold">Tu</span>
																<span class="fs-6 fw-bold">23</span>
															</a>
															<!--end::Date-->
														</li>
														<!--end::Nav item-->
														<!--begin::Nav item-->
														<li class="nav-item p-0 ms-0" role="presentation">
															<!--begin::Date-->
															<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger" data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_5" aria-selected="false" tabindex="-1" role="tab">
																<span class="fs-7 fw-semibold">Tu</span>
																<span class="fs-6 fw-bold">24</span>
															</a>
															<!--end::Date-->
														</li>
														<!--end::Nav item-->
														<!--begin::Nav item-->
														<li class="nav-item p-0 ms-0" role="presentation">
															<!--begin::Date-->
															<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger" data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_6" aria-selected="false" tabindex="-1" role="tab">
																<span class="fs-7 fw-semibold">We</span>
																<span class="fs-6 fw-bold">25</span>
															</a>
															<!--end::Date-->
														</li>
														<!--end::Nav item-->
														<!--begin::Nav item-->
														<li class="nav-item p-0 ms-0" role="presentation">
															<!--begin::Date-->
															<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger" data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_7" aria-selected="false" tabindex="-1" role="tab">
																<span class="fs-7 fw-semibold">Th</span>
																<span class="fs-6 fw-bold">26</span>
															</a>
															<!--end::Date-->
														</li>
														<!--end::Nav item-->
														<!--begin::Nav item-->
														<li class="nav-item p-0 ms-0" role="presentation">
															<!--begin::Date-->
															<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger" data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_8" aria-selected="false" tabindex="-1" role="tab">
																<span class="fs-7 fw-semibold">Fri</span>
																<span class="fs-6 fw-bold">27</span>
															</a>
															<!--end::Date-->
														</li>
														<!--end::Nav item-->
														<!--begin::Nav item-->
														<li class="nav-item p-0 ms-0" role="presentation">
															<!--begin::Date-->
															<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger" data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_9" aria-selected="false" tabindex="-1" role="tab">
																<span class="fs-7 fw-semibold">Sa</span>
																<span class="fs-6 fw-bold">28</span>
															</a>
															<!--end::Date-->
														</li>
														<!--end::Nav item-->
														<!--begin::Nav item-->
														<li class="nav-item p-0 ms-0" role="presentation">
															<!--begin::Date-->
															<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger" data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_10" aria-selected="false" tabindex="-1" role="tab">
																<span class="fs-7 fw-semibold">Su</span>
																<span class="fs-6 fw-bold">29</span>
															</a>
															<!--end::Date-->
														</li>
														<!--end::Nav item-->
														<!--begin::Nav item-->
														<li class="nav-item p-0 ms-0" role="presentation">
															<!--begin::Date-->
															<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger" data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_11" aria-selected="false" tabindex="-1" role="tab">
																<span class="fs-7 fw-semibold">Mo</span>
																<span class="fs-6 fw-bold">30</span>
															</a>
															<!--end::Date-->
														</li>
														<!--end::Nav item-->
													</ul>
													<!--end::Nav-->
													<!--begin::Tab Content (ishlamayabdi)-->
													<div class="tab-content mb-2 px-9">
														<!--begin::Tap pane-->
														<div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_1" role="tabpanel">
															<!--begin::Wrapper-->
															<div class="d-flex align-items-center mb-6">
																<!--begin::Bullet-->
																<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-success"></span>
																<!--end::Bullet-->
																<!--begin::Info-->
																<div class="flex-grow-1 me-5">
																	<!--begin::Time-->
																	<div class="text-gray-800 fw-semibold fs-2">10:20 - 11:00 
																	<span class="text-gray-400 fw-semibold fs-7">AM</span></div>
																	<!--end::Time-->
																	<!--begin::Description-->
																	<div class="text-gray-700 fw-semibold fs-6">9 Degree Project Estimation Meeting</div>
																	<!--end::Description-->
																	<!--begin::Link-->
																	<div class="text-gray-400 fw-semibold fs-7">Lead by 
																	<!--begin::Name-->
																	<a href="#" class="text-primary opacity-75-hover fw-semibold">Peter Marcus</a>
																	<!--end::Name--></div>
																	<!--end::Link-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
																<!--end::Action-->
															</div>
															<!--end::Wrapper-->
															<!--begin::Wrapper-->
															<div class="d-flex align-items-center mb-6">
																<!--begin::Bullet-->
																<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-warning"></span>
																<!--end::Bullet-->
																<!--begin::Info-->
																<div class="flex-grow-1 me-5">
																	<!--begin::Time-->
																	<div class="text-gray-800 fw-semibold fs-2">12:00 - 13:40 
																	<span class="text-gray-400 fw-semibold fs-7">AM</span></div>
																	<!--end::Time-->
																	<!--begin::Description-->
																	<div class="text-gray-700 fw-semibold fs-6">Dashboard UI/UX Design Review</div>
																	<!--end::Description-->
																	<!--begin::Link-->
																	<div class="text-gray-400 fw-semibold fs-7">Lead by 
																	<!--begin::Name-->
																	<a href="#" class="text-primary opacity-75-hover fw-semibold">Lead by Bob</a>
																	<!--end::Name--></div>
																	<!--end::Link-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
																<!--end::Action-->
															</div>
															<!--end::Wrapper-->
															<!--begin::Wrapper-->
															<div class="d-flex align-items-center mb-6">
																<!--begin::Bullet-->
																<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>
																<!--end::Bullet-->
																<!--begin::Info-->
																<div class="flex-grow-1 me-5">
																	<!--begin::Time-->
																	<div class="text-gray-800 fw-semibold fs-2">16:30 - 17:00 
																	<span class="text-gray-400 fw-semibold fs-7">PM</span></div>
																	<!--end::Time-->
																	<!--begin::Description-->
																	<div class="text-gray-700 fw-semibold fs-6">Marketing Campaign Discussion</div>
																	<!--end::Description-->
																	<!--begin::Link-->
																	<div class="text-gray-400 fw-semibold fs-7">Lead by 
																	<!--begin::Name-->
																	<a href="#" class="text-primary opacity-75-hover fw-semibold">Lead by Mark Morris</a>
																	<!--end::Name--></div>
																	<!--end::Link-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
																<!--end::Action-->
															</div>
															<!--end::Wrapper-->
														</div>
														<!--end::Tap pane-->
														<!--begin::Tap pane-->
														<div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_2" role="tabpanel">
															<!--begin::Wrapper-->
															<div class="d-flex align-items-center mb-6">
																<!--begin::Bullet-->
																<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-warning"></span>
																<!--end::Bullet-->
																<!--begin::Info-->
																<div class="flex-grow-1 me-5">
																	<!--begin::Time-->
																	<div class="text-gray-800 fw-semibold fs-2">16:30 - 17:00 
																	<span class="text-gray-400 fw-semibold fs-7">PM</span></div>
																	<!--end::Time-->
																	<!--begin::Description-->
																	<div class="text-gray-700 fw-semibold fs-6">Marketing Campaign Discussion</div>
																	<!--end::Description-->
																	<!--begin::Link-->
																	<div class="text-gray-400 fw-semibold fs-7">Lead by 
																	<!--begin::Name-->
																	<a href="#" class="text-primary opacity-75-hover fw-semibold">Lead by Mark Morris</a>
																	<!--end::Name--></div>
																	<!--end::Link-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
																<!--end::Action-->
															</div>
															<!--end::Wrapper-->
															<!--begin::Wrapper-->
															<div class="d-flex align-items-center mb-6">
																<!--begin::Bullet-->
																<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>
																<!--end::Bullet-->
																<!--begin::Info-->
																<div class="flex-grow-1 me-5">
																	<!--begin::Time-->
																	<div class="text-gray-800 fw-semibold fs-2">12:00 - 13:40 
																	<span class="text-gray-400 fw-semibold fs-7">AM</span></div>
																	<!--end::Time-->
																	<!--begin::Description-->
																	<div class="text-gray-700 fw-semibold fs-6">9 Degree Project Estimation Meeting</div>
																	<!--end::Description-->
																	<!--begin::Link-->
																	<div class="text-gray-400 fw-semibold fs-7">Lead by 
																	<!--begin::Name-->
																	<a href="#" class="text-primary opacity-75-hover fw-semibold">Peter Marcus</a>
																	<!--end::Name--></div>
																	<!--end::Link-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
																<!--end::Action-->
															</div>
															<!--end::Wrapper-->
															<!--begin::Wrapper-->
															<div class="d-flex align-items-center mb-6">
																<!--begin::Bullet-->
																<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-success"></span>
																<!--end::Bullet-->
																<!--begin::Info-->
																<div class="flex-grow-1 me-5">
																	<!--begin::Time-->
																	<div class="text-gray-800 fw-semibold fs-2">10:20 - 11:00 
																	<span class="text-gray-400 fw-semibold fs-7">AM</span></div>
																	<!--end::Time-->
																	<!--begin::Description-->
																	<div class="text-gray-700 fw-semibold fs-6">9 Degree Project Estimation Meeting</div>
																	<!--end::Description-->
																	<!--begin::Link-->
																	<div class="text-gray-400 fw-semibold fs-7">Lead by 
																	<!--begin::Name-->
																	<a href="#" class="text-primary opacity-75-hover fw-semibold">Peter Marcus</a>
																	<!--end::Name--></div>
																	<!--end::Link-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
																<!--end::Action-->
															</div>
															<!--end::Wrapper-->
														</div>
														<!--end::Tap pane-->
														<!--begin::Tap pane-->
														<div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_3" role="tabpanel">
															<!--begin::Wrapper-->
															<div class="d-flex align-items-center mb-6">
																<!--begin::Bullet-->
																<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-primary"></span>
																<!--end::Bullet-->
																<!--begin::Info-->
																<div class="flex-grow-1 me-5">
																	<!--begin::Time-->
																	<div class="text-gray-800 fw-semibold fs-2">10:20 - 11:00 
																	<span class="text-gray-400 fw-semibold fs-7">AM</span></div>
																	<!--end::Time-->
																	<!--begin::Description-->
																	<div class="text-gray-700 fw-semibold fs-6">9 Degree Project Estimation Meeting</div>
																	<!--end::Description-->
																	<!--begin::Link-->
																	<div class="text-gray-400 fw-semibold fs-7">Lead by 
																	<!--begin::Name-->
																	<a href="#" class="text-primary opacity-75-hover fw-semibold">Peter Marcus</a>
																	<!--end::Name--></div>
																	<!--end::Link-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
																<!--end::Action-->
															</div>
															<!--end::Wrapper-->
															<!--begin::Wrapper-->
															<div class="d-flex align-items-center mb-6">
																<!--begin::Bullet-->
																<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-warning"></span>
																<!--end::Bullet-->
																<!--begin::Info-->
																<div class="flex-grow-1 me-5">
																	<!--begin::Time-->
																	<div class="text-gray-800 fw-semibold fs-2">12:00 - 13:40 
																	<span class="text-gray-400 fw-semibold fs-7">AM</span></div>
																	<!--end::Time-->
																	<!--begin::Description-->
																	<div class="text-gray-700 fw-semibold fs-6">Marketing Campaign Discussion</div>
																	<!--end::Description-->
																	<!--begin::Link-->
																	<div class="text-gray-400 fw-semibold fs-7">Lead by 
																	<!--begin::Name-->
																	<a href="#" class="text-primary opacity-75-hover fw-semibold">Lead by Bob</a>
																	<!--end::Name--></div>
																	<!--end::Link-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
																<!--end::Action-->
															</div>
															<!--end::Wrapper-->
															<!--begin::Wrapper-->
															<div class="d-flex align-items-center mb-6">
																<!--begin::Bullet-->
																<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>
																<!--end::Bullet-->
																<!--begin::Info-->
																<div class="flex-grow-1 me-5">
																	<!--begin::Time-->
																	<div class="text-gray-800 fw-semibold fs-2">16:30 - 17:00 
																	<span class="text-gray-400 fw-semibold fs-7">PM</span></div>
																	<!--end::Time-->
																	<!--begin::Description-->
																	<div class="text-gray-700 fw-semibold fs-6">Marketing Campaign Discussion</div>
																	<!--end::Description-->
																	<!--begin::Link-->
																	<div class="text-gray-400 fw-semibold fs-7">Lead by 
																	<!--begin::Name-->
																	<a href="#" class="text-primary opacity-75-hover fw-semibold">Lead by Mark Morris</a>
																	<!--end::Name--></div>
																	<!--end::Link-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
																<!--end::Action-->
															</div>
															<!--end::Wrapper-->
														</div>
														<!--end::Tap pane-->
														<!--begin::Tap pane-->
														<div class="tab-pane fade show active" id="kt_timeline_widget_3_tab_content_4" role="tabpanel">
															<!--begin::Wrapper-->
															<div class="d-flex align-items-center mb-6">
																<!--begin::Bullet-->
																<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>
																<!--end::Bullet-->
																<!--begin::Info-->
																<div class="flex-grow-1 me-5">
																	<!--begin::Time-->
																	<div class="text-gray-800 fw-semibold fs-2">10:20 - 11:00 
																	<span class="text-gray-400 fw-semibold fs-7">AM</span></div>
																	<!--end::Time-->
																	<!--begin::Description-->
																	<div class="text-gray-700 fw-semibold fs-6">9 Degree Project Estimation Meeting</div>
																	<!--end::Description-->
																	<!--begin::Link-->
																	<div class="text-gray-400 fw-semibold fs-7">Lead by 
																	<!--begin::Name-->
																	<a href="#" class="text-primary opacity-75-hover fw-semibold">Peter Marcus</a>
																	<!--end::Name--></div>
																	<!--end::Link-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
																<!--end::Action-->
															</div>
															<!--end::Wrapper-->
															<!--begin::Wrapper-->
															<div class="d-flex align-items-center mb-6">
																<!--begin::Bullet-->
																<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-warning"></span>
																<!--end::Bullet-->
																<!--begin::Info-->
																<div class="flex-grow-1 me-5">
																	<!--begin::Time-->
																	<div class="text-gray-800 fw-semibold fs-2">16:30 - 17:00 
																	<span class="text-gray-400 fw-semibold fs-7">PM</span></div>
																	<!--end::Time-->
																	<!--begin::Description-->
																	<div class="text-gray-700 fw-semibold fs-6">Dashboard UI/UX Design Review</div>
																	<!--end::Description-->
																	<!--begin::Link-->
																	<div class="text-gray-400 fw-semibold fs-7">Lead by 
																	<!--begin::Name-->
																	<a href="#" class="text-primary opacity-75-hover fw-semibold">Lead by Bob</a>
																	<!--end::Name--></div>
																	<!--end::Link-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
																<!--end::Action-->
															</div>
															<!--end::Wrapper-->
															<!--begin::Wrapper-->
															<div class="d-flex align-items-center mb-6">
																<!--begin::Bullet-->
																<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-success"></span>
																<!--end::Bullet-->
																<!--begin::Info-->
																<div class="flex-grow-1 me-5">
																	<!--begin::Time-->
																	<div class="text-gray-800 fw-semibold fs-2">12:00 - 13:40 
																	<span class="text-gray-400 fw-semibold fs-7">AM</span></div>
																	<!--end::Time-->
																	<!--begin::Description-->
																	<div class="text-gray-700 fw-semibold fs-6">Marketing Campaign Discussion</div>
																	<!--end::Description-->
																	<!--begin::Link-->
																	<div class="text-gray-400 fw-semibold fs-7">Lead by 
																	<!--begin::Name-->
																	<a href="#" class="text-primary opacity-75-hover fw-semibold">Lead by Mark Morris</a>
																	<!--end::Name--></div>
																	<!--end::Link-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
																<!--end::Action-->
															</div>
															<!--end::Wrapper-->
														</div>
														<!--end::Tap pane-->
														<!--begin::Tap pane-->
														<div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_5" role="tabpanel">
															<!--begin::Wrapper-->
															<div class="d-flex align-items-center mb-6">
																<!--begin::Bullet-->
																<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-danger"></span>
																<!--end::Bullet-->
																<!--begin::Info-->
																<div class="flex-grow-1 me-5">
																	<!--begin::Time-->
																	<div class="text-gray-800 fw-semibold fs-2">12:00 - 13:40 
																	<span class="text-gray-400 fw-semibold fs-7">AM</span></div>
																	<!--end::Time-->
																	<!--begin::Description-->
																	<div class="text-gray-700 fw-semibold fs-6">9 Dashboard UI/UX Design Review</div>
																	<!--end::Description-->
																	<!--begin::Link-->
																	<div class="text-gray-400 fw-semibold fs-7">Lead by 
																	<!--begin::Name-->
																	<a href="#" class="text-primary opacity-75-hover fw-semibold">Lead by Bob</a>
																	<!--end::Name--></div>
																	<!--end::Link-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
																<!--end::Action-->
															</div>
															<!--end::Wrapper-->
															<!--begin::Wrapper-->
															<div class="d-flex align-items-center mb-6">
																<!--begin::Bullet-->
																<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-warning"></span>
																<!--end::Bullet-->
																<!--begin::Info-->
																<div class="flex-grow-1 me-5">
																	<!--begin::Time-->
																	<div class="text-gray-800 fw-semibold fs-2">10:20 - 11:00 
																	<span class="text-gray-400 fw-semibold fs-7">AM</span></div>
																	<!--end::Time-->
																	<!--begin::Description-->
																	<div class="text-gray-700 fw-semibold fs-6">9 Degree Project Estimation Meeting</div>
																	<!--end::Description-->
																	<!--begin::Link-->
																	<div class="text-gray-400 fw-semibold fs-7">Lead by 
																	<!--begin::Name-->
																	<a href="#" class="text-primary opacity-75-hover fw-semibold">Lead by Mark Morris</a>
																	<!--end::Name--></div>
																	<!--end::Link-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
																<!--end::Action-->
															</div>
															<!--end::Wrapper-->
															<!--begin::Wrapper-->
															<div class="d-flex align-items-center mb-6">
																<!--begin::Bullet-->
																<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>
																<!--end::Bullet-->
																<!--begin::Info-->
																<div class="flex-grow-1 me-5">
																	<!--begin::Time-->
																	<div class="text-gray-800 fw-semibold fs-2">16:30 - 17:00 
																	<span class="text-gray-400 fw-semibold fs-7">PM</span></div>
																	<!--end::Time-->
																	<!--begin::Description-->
																	<div class="text-gray-700 fw-semibold fs-6">Marketing Campaign Discussion</div>
																	<!--end::Description-->
																	<!--begin::Link-->
																	<div class="text-gray-400 fw-semibold fs-7">Lead by 
																	<!--begin::Name-->
																	<a href="#" class="text-primary opacity-75-hover fw-semibold">Peter Marcus</a>
																	<!--end::Name--></div>
																	<!--end::Link-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
																<!--end::Action-->
															</div>
															<!--end::Wrapper-->
														</div>
														<!--end::Tap pane-->
														<!--begin::Tap pane-->
														<div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_6" role="tabpanel">
															<!--begin::Wrapper-->
															<div class="d-flex align-items-center mb-6">
																<!--begin::Bullet-->
																<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>
																<!--end::Bullet-->
																<!--begin::Info-->
																<div class="flex-grow-1 me-5">
																	<!--begin::Time-->
																	<div class="text-gray-800 fw-semibold fs-2">10:20 - 11:00 
																	<span class="text-gray-400 fw-semibold fs-7">AM</span></div>
																	<!--end::Time-->
																	<!--begin::Description-->
																	<div class="text-gray-700 fw-semibold fs-6">Marketing Campaign Discussion</div>
																	<!--end::Description-->
																	<!--begin::Link-->
																	<div class="text-gray-400 fw-semibold fs-7">Lead by 
																	<!--begin::Name-->
																	<a href="#" class="text-primary opacity-75-hover fw-semibold">Lead by Mark Morris</a>
																	<!--end::Name--></div>
																	<!--end::Link-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
																<!--end::Action-->
															</div>
															<!--end::Wrapper-->
															<!--begin::Wrapper-->
															<div class="d-flex align-items-center mb-6">
																<!--begin::Bullet-->
																<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-primary"></span>
																<!--end::Bullet-->
																<!--begin::Info-->
																<div class="flex-grow-1 me-5">
																	<!--begin::Time-->
																	<div class="text-gray-800 fw-semibold fs-2">16:30 - 17:00 
																	<span class="text-gray-400 fw-semibold fs-7">PM</span></div>
																	<!--end::Time-->
																	<!--begin::Description-->
																	<div class="text-gray-700 fw-semibold fs-6">9 Degree Project Estimation Meeting</div>
																	<!--end::Description-->
																	<!--begin::Link-->
																	<div class="text-gray-400 fw-semibold fs-7">Lead by 
																	<!--begin::Name-->
																	<a href="#" class="text-primary opacity-75-hover fw-semibold">Peter Marcus</a>
																	<!--end::Name--></div>
																	<!--end::Link-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
																<!--end::Action-->
															</div>
															<!--end::Wrapper-->
															<!--begin::Wrapper-->
															<div class="d-flex align-items-center mb-6">
																<!--begin::Bullet-->
																<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-warning"></span>
																<!--end::Bullet-->
																<!--begin::Info-->
																<div class="flex-grow-1 me-5">
																	<!--begin::Time-->
																	<div class="text-gray-800 fw-semibold fs-2">12:00 - 13:40 
																	<span class="text-gray-400 fw-semibold fs-7">AM</span></div>
																	<!--end::Time-->
																	<!--begin::Description-->
																	<div class="text-gray-700 fw-semibold fs-6">9 Dashboard UI/UX Design Review</div>
																	<!--end::Description-->
																	<!--begin::Link-->
																	<div class="text-gray-400 fw-semibold fs-7">Lead by 
																	<!--begin::Name-->
																	<a href="#" class="text-primary opacity-75-hover fw-semibold">Lead by Bob</a>
																	<!--end::Name--></div>
																	<!--end::Link-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
																<!--end::Action-->
															</div>
															<!--end::Wrapper-->
														</div>
														<!--end::Tap pane-->
														<!--begin::Tap pane-->
														<div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_7" role="tabpanel">
															<!--begin::Wrapper-->
															<div class="d-flex align-items-center mb-6">
																<!--begin::Bullet-->
																<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-warning"></span>
																<!--end::Bullet-->
																<!--begin::Info-->
																<div class="flex-grow-1 me-5">
																	<!--begin::Time-->
																	<div class="text-gray-800 fw-semibold fs-2">12:00 - 13:40 
																	<span class="text-gray-400 fw-semibold fs-7">AM</span></div>
																	<!--end::Time-->
																	<!--begin::Description-->
																	<div class="text-gray-700 fw-semibold fs-6">9 Degree Project Estimation Meeting</div>
																	<!--end::Description-->
																	<!--begin::Link-->
																	<div class="text-gray-400 fw-semibold fs-7">Lead by 
																	<!--begin::Name-->
																	<a href="#" class="text-primary opacity-75-hover fw-semibold">Lead by Bob</a>
																	<!--end::Name--></div>
																	<!--end::Link-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
																<!--end::Action-->
															</div>
															<!--end::Wrapper-->
															<!--begin::Wrapper-->
															<div class="d-flex align-items-center mb-6">
																<!--begin::Bullet-->
																<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-danger"></span>
																<!--end::Bullet-->
																<!--begin::Info-->
																<div class="flex-grow-1 me-5">
																	<!--begin::Time-->
																	<div class="text-gray-800 fw-semibold fs-2">10:20 - 11:00 
																	<span class="text-gray-400 fw-semibold fs-7">AM</span></div>
																	<!--end::Time-->
																	<!--begin::Description-->
																	<div class="text-gray-700 fw-semibold fs-6">9 Dashboard UI/UX Design Review</div>
																	<!--end::Description-->
																	<!--begin::Link-->
																	<div class="text-gray-400 fw-semibold fs-7">Lead by 
																	<!--begin::Name-->
																	<a href="#" class="text-primary opacity-75-hover fw-semibold">Peter Marcus</a>
																	<!--end::Name--></div>
																	<!--end::Link-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
																<!--end::Action-->
															</div>
															<!--end::Wrapper-->
															<!--begin::Wrapper-->
															<div class="d-flex align-items-center mb-6">
																<!--begin::Bullet-->
																<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-success"></span>
																<!--end::Bullet-->
																<!--begin::Info-->
																<div class="flex-grow-1 me-5">
																	<!--begin::Time-->
																	<div class="text-gray-800 fw-semibold fs-2">16:30 - 17:00 
																	<span class="text-gray-400 fw-semibold fs-7">PM</span></div>
																	<!--end::Time-->
																	<!--begin::Description-->
																	<div class="text-gray-700 fw-semibold fs-6">Marketing Campaign Discussion</div>
																	<!--end::Description-->
																	<!--begin::Link-->
																	<div class="text-gray-400 fw-semibold fs-7">Lead by 
																	<!--begin::Name-->
																	<a href="#" class="text-primary opacity-75-hover fw-semibold">Lead by Mark Morris</a>
																	<!--end::Name--></div>
																	<!--end::Link-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
																<!--end::Action-->
															</div>
															<!--end::Wrapper-->
														</div>
														<!--end::Tap pane-->
														<!--begin::Tap pane-->
														<div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_8" role="tabpanel">
															<!--begin::Wrapper-->
															<div class="d-flex align-items-center mb-6">
																<!--begin::Bullet-->
																<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-success"></span>
																<!--end::Bullet-->
																<!--begin::Info-->
																<div class="flex-grow-1 me-5">
																	<!--begin::Time-->
																	<div class="text-gray-800 fw-semibold fs-2">16:30 - 17:00 
																	<span class="text-gray-400 fw-semibold fs-7">PM</span></div>
																	<!--end::Time-->
																	<!--begin::Description-->
																	<div class="text-gray-700 fw-semibold fs-6">Marketing Campaign Discussion</div>
																	<!--end::Description-->
																	<!--begin::Link-->
																	<div class="text-gray-400 fw-semibold fs-7">Lead by 
																	<!--begin::Name-->
																	<a href="#" class="text-primary opacity-75-hover fw-semibold">Peter Marcus</a>
																	<!--end::Name--></div>
																	<!--end::Link-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
																<!--end::Action-->
															</div>
															<!--end::Wrapper-->
															<!--begin::Wrapper-->
															<div class="d-flex align-items-center mb-6">
																<!--begin::Bullet-->
																<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>
																<!--end::Bullet-->
																<!--begin::Info-->
																<div class="flex-grow-1 me-5">
																	<!--begin::Time-->
																	<div class="text-gray-800 fw-semibold fs-2">10:20 - 11:00 
																	<span class="text-gray-400 fw-semibold fs-7">AM</span></div>
																	<!--end::Time-->
																	<!--begin::Description-->
																	<div class="text-gray-700 fw-semibold fs-6">9 Degree Project Estimation Meeting</div>
																	<!--end::Description-->
																	<!--begin::Link-->
																	<div class="text-gray-400 fw-semibold fs-7">Lead by 
																	<!--begin::Name-->
																	<a href="#" class="text-primary opacity-75-hover fw-semibold">Lead by Mark Morris</a>
																	<!--end::Name--></div>
																	<!--end::Link-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
																<!--end::Action-->
															</div>
															<!--end::Wrapper-->
															<!--begin::Wrapper-->
															<div class="d-flex align-items-center mb-6">
																<!--begin::Bullet-->
																<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-danger"></span>
																<!--end::Bullet-->
																<!--begin::Info-->
																<div class="flex-grow-1 me-5">
																	<!--begin::Time-->
																	<div class="text-gray-800 fw-semibold fs-2">12:00 - 13:40 
																	<span class="text-gray-400 fw-semibold fs-7">AM</span></div>
																	<!--end::Time-->
																	<!--begin::Description-->
																	<div class="text-gray-700 fw-semibold fs-6">9 Dashboard UI/UX Design Review</div>
																	<!--end::Description-->
																	<!--begin::Link-->
																	<div class="text-gray-400 fw-semibold fs-7">Lead by 
																	<!--begin::Name-->
																	<a href="#" class="text-primary opacity-75-hover fw-semibold">Lead by Bob</a>
																	<!--end::Name--></div>
																	<!--end::Link-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
																<!--end::Action-->
															</div>
															<!--end::Wrapper-->
														</div>
														<!--end::Tap pane-->
														<!--begin::Tap pane-->
														<div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_9" role="tabpanel">
															<!--begin::Wrapper-->
															<div class="d-flex align-items-center mb-6">
																<!--begin::Bullet-->
																<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>
																<!--end::Bullet-->
																<!--begin::Info-->
																<div class="flex-grow-1 me-5">
																	<!--begin::Time-->
																	<div class="text-gray-800 fw-semibold fs-2">12:00 - 13:40 
																	<span class="text-gray-400 fw-semibold fs-7">AM</span></div>
																	<!--end::Time-->
																	<!--begin::Description-->
																	<div class="text-gray-700 fw-semibold fs-6">9 Degree Project Estimation Meeting</div>
																	<!--end::Description-->
																	<!--begin::Link-->
																	<div class="text-gray-400 fw-semibold fs-7">Lead by 
																	<!--begin::Name-->
																	<a href="#" class="text-primary opacity-75-hover fw-semibold">Lead by Bob</a>
																	<!--end::Name--></div>
																	<!--end::Link-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
																<!--end::Action-->
															</div>
															<!--end::Wrapper-->
															<!--begin::Wrapper-->
															<div class="d-flex align-items-center mb-6">
																<!--begin::Bullet-->
																<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-primary"></span>
																<!--end::Bullet-->
																<!--begin::Info-->
																<div class="flex-grow-1 me-5">
																	<!--begin::Time-->
																	<div class="text-gray-800 fw-semibold fs-2">16:30 - 17:00 
																	<span class="text-gray-400 fw-semibold fs-7">PM</span></div>
																	<!--end::Time-->
																	<!--begin::Description-->
																	<div class="text-gray-700 fw-semibold fs-6">Marketing Campaign Discussion</div>
																	<!--end::Description-->
																	<!--begin::Link-->
																	<div class="text-gray-400 fw-semibold fs-7">Lead by 
																	<!--begin::Name-->
																	<a href="#" class="text-primary opacity-75-hover fw-semibold">Lead by Mark Morris</a>
																	<!--end::Name--></div>
																	<!--end::Link-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
																<!--end::Action-->
															</div>
															<!--end::Wrapper-->
															<!--begin::Wrapper-->
															<div class="d-flex align-items-center mb-6">
																<!--begin::Bullet-->
																<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-success"></span>
																<!--end::Bullet-->
																<!--begin::Info-->
																<div class="flex-grow-1 me-5">
																	<!--begin::Time-->
																	<div class="text-gray-800 fw-semibold fs-2">10:20 - 11:00 
																	<span class="text-gray-400 fw-semibold fs-7">AM</span></div>
																	<!--end::Time-->
																	<!--begin::Description-->
																	<div class="text-gray-700 fw-semibold fs-6">9 Dashboard UI/UX Design Review</div>
																	<!--end::Description-->
																	<!--begin::Link-->
																	<div class="text-gray-400 fw-semibold fs-7">Lead by 
																	<!--begin::Name-->
																	<a href="#" class="text-primary opacity-75-hover fw-semibold">Peter Marcus</a>
																	<!--end::Name--></div>
																	<!--end::Link-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
																<!--end::Action-->
															</div>
															<!--end::Wrapper-->
														</div>
														<!--end::Tap pane-->
														<!--begin::Tap pane-->
														<div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_10" role="tabpanel">
															<!--begin::Wrapper-->
															<div class="d-flex align-items-center mb-6">
																<!--begin::Bullet-->
																<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-danger"></span>
																<!--end::Bullet-->
																<!--begin::Info-->
																<div class="flex-grow-1 me-5">
																	<!--begin::Time-->
																	<div class="text-gray-800 fw-semibold fs-2">12:00 - 13:40 
																	<span class="text-gray-400 fw-semibold fs-7">AM</span></div>
																	<!--end::Time-->
																	<!--begin::Description-->
																	<div class="text-gray-700 fw-semibold fs-6">Marketing Campaign Discussion</div>
																	<!--end::Description-->
																	<!--begin::Link-->
																	<div class="text-gray-400 fw-semibold fs-7">Lead by 
																	<!--begin::Name-->
																	<a href="#" class="text-primary opacity-75-hover fw-semibold">Peter Marcus</a>
																	<!--end::Name--></div>
																	<!--end::Link-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
																<!--end::Action-->
															</div>
															<!--end::Wrapper-->
															<!--begin::Wrapper-->
															<div class="d-flex align-items-center mb-6">
																<!--begin::Bullet-->
																<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-warning"></span>
																<!--end::Bullet-->
																<!--begin::Info-->
																<div class="flex-grow-1 me-5">
																	<!--begin::Time-->
																	<div class="text-gray-800 fw-semibold fs-2">10:20 - 11:00 
																	<span class="text-gray-400 fw-semibold fs-7">AM</span></div>
																	<!--end::Time-->
																	<!--begin::Description-->
																	<div class="text-gray-700 fw-semibold fs-6">9 Dashboard UI/UX Design Review</div>
																	<!--end::Description-->
																	<!--begin::Link-->
																	<div class="text-gray-400 fw-semibold fs-7">Lead by 
																	<!--begin::Name-->
																	<a href="#" class="text-primary opacity-75-hover fw-semibold">Lead by Bob</a>
																	<!--end::Name--></div>
																	<!--end::Link-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
																<!--end::Action-->
															</div>
															<!--end::Wrapper-->
															<!--begin::Wrapper-->
															<div class="d-flex align-items-center mb-6">
																<!--begin::Bullet-->
																<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>
																<!--end::Bullet-->
																<!--begin::Info-->
																<div class="flex-grow-1 me-5">
																	<!--begin::Time-->
																	<div class="text-gray-800 fw-semibold fs-2">16:30 - 17:00 
																	<span class="text-gray-400 fw-semibold fs-7">PM</span></div>
																	<!--end::Time-->
																	<!--begin::Description-->
																	<div class="text-gray-700 fw-semibold fs-6">9 Degree Project Estimation Meeting</div>
																	<!--end::Description-->
																	<!--begin::Link-->
																	<div class="text-gray-400 fw-semibold fs-7">Lead by 
																	<!--begin::Name-->
																	<a href="#" class="text-primary opacity-75-hover fw-semibold">Lead by Mark Morris</a>
																	<!--end::Name--></div>
																	<!--end::Link-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
																<!--end::Action-->
															</div>
															<!--end::Wrapper-->
														</div>
														<!--end::Tap pane-->
														<!--begin::Tap pane-->
														<div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_11" role="tabpanel">
															<!--begin::Wrapper-->
															<div class="d-flex align-items-center mb-6">
																<!--begin::Bullet-->
																<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>
																<!--end::Bullet-->
																<!--begin::Info-->
																<div class="flex-grow-1 me-5">
																	<!--begin::Time-->
																	<div class="text-gray-800 fw-semibold fs-2">16:30 - 17:00 
																	<span class="text-gray-400 fw-semibold fs-7">PM</span></div>
																	<!--end::Time-->
																	<!--begin::Description-->
																	<div class="text-gray-700 fw-semibold fs-6">9 Dashboard UI/UX Design Review</div>
																	<!--end::Description-->
																	<!--begin::Link-->
																	<div class="text-gray-400 fw-semibold fs-7">Lead by 
																	<!--begin::Name-->
																	<a href="#" class="text-primary opacity-75-hover fw-semibold">Lead by Mark Morris</a>
																	<!--end::Name--></div>
																	<!--end::Link-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
																<!--end::Action-->
															</div>
															<!--end::Wrapper-->
															<!--begin::Wrapper-->
															<div class="d-flex align-items-center mb-6">
																<!--begin::Bullet-->
																<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-danger"></span>
																<!--end::Bullet-->
																<!--begin::Info-->
																<div class="flex-grow-1 me-5">
																	<!--begin::Time-->
																	<div class="text-gray-800 fw-semibold fs-2">10:20 - 11:00 
																	<span class="text-gray-400 fw-semibold fs-7">AM</span></div>
																	<!--end::Time-->
																	<!--begin::Description-->
																	<div class="text-gray-700 fw-semibold fs-6">Marketing Campaign Discussion</div>
																	<!--end::Description-->
																	<!--begin::Link-->
																	<div class="text-gray-400 fw-semibold fs-7">Lead by 
																	<!--begin::Name-->
																	<a href="#" class="text-primary opacity-75-hover fw-semibold">Peter Marcus</a>
																	<!--end::Name--></div>
																	<!--end::Link-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
																<!--end::Action-->
															</div>
															<!--end::Wrapper-->
															<!--begin::Wrapper-->
															<div class="d-flex align-items-center mb-6">
																<!--begin::Bullet-->
																<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-primary"></span>
																<!--end::Bullet-->
																<!--begin::Info-->
																<div class="flex-grow-1 me-5">
																	<!--begin::Time-->
																	<div class="text-gray-800 fw-semibold fs-2">12:00 - 13:40 
																	<span class="text-gray-400 fw-semibold fs-7">AM</span></div>
																	<!--end::Time-->
																	<!--begin::Description-->
																	<div class="text-gray-700 fw-semibold fs-6">9 Degree Project Estimation Meeting</div>
																	<!--end::Description-->
																	<!--begin::Link-->
																	<div class="text-gray-400 fw-semibold fs-7">Lead by 
																	<!--begin::Name-->
																	<a href="#" class="text-primary opacity-75-hover fw-semibold">Lead by Bob</a>
																	<!--end::Name--></div>
																	<!--end::Link-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
																<!--end::Action-->
															</div>
															<!--end::Wrapper-->
														</div>
														<!--end::Tap pane-->
													</div>
													<!--end::Tab Content-->
													<!--begin::Action-->
													<div class="float-end d-none">
														<a href="#" class="btn btn-sm btn-light me-2" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">Add Lesson</a>
														<a href="#" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Call Sick for Today</a>
													</div>
													<!--end::Action-->
												</div>
												<!--end: Card Body-->
											</div>
											<!--end::Timeline widget 3-->
											<!--begin::Timeline widget 3-->
											<div class="card card-flush d-none h-md-100">
												<!--begin::Card header-->
												<div class="card-header mt-6">
													<!--begin::Card title-->
													<div class="card-title flex-column">
														<h3 class="fw-bold mb-1">What's on the road?</h3>
														<div class="fs-6 text-gray-400">Total 482 participants</div>
													</div>
													<!--end::Card title-->
													<!--begin::Card toolbar-->
													<div class="card-toolbar">
														<!--begin::Select-->
														<select name="status" data-control="select2" data-hide-search="true" class="form-select form-select-solid form-select-sm fw-bold w-100px select2-hidden-accessible" data-select2-id="select2-data-7-enjz" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
															<option value="1" selected="selected" data-select2-id="select2-data-9-adyt">Options</option>
															<option value="2">Option 1</option>
															<option value="3">Option 2</option>
															<option value="4">Option 3</option>
														</select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-8-te5n" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid form-select-sm fw-bold w-100px" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-status-th-container" aria-controls="select2-status-th-container"><span class="select2-selection__rendered" id="select2-status-th-container" role="textbox" aria-readonly="true" title="Options">Options</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
														<!--end::Select-->
													</div>
													<!--end::Card toolbar-->
												</div>
												<!--end::Card header-->
												<!--begin::Card body-->
												<div class="card-body p-0">
													<!--begin::Dates-->
													<ul class="nav nav-pills d-flex flex-nowrap hover-scroll-x py-2 ms-4" role="tablist">
														<!--begin::Date-->
														<li class="nav-item me-1" role="presentation">
															<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger" data-bs-toggle="tab" href="#kt_schedule_day_0" aria-selected="false" tabindex="-1" role="tab">
																<span class="text-gray-400 fs-7 fw-semibold">Fr</span>
																<span class="fs-6 text-gray-800 fw-bold">20</span>
															</a>
														</li>
														<!--end::Date-->
														<!--begin::Date-->
														<li class="nav-item me-1" role="presentation">
															<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger" data-bs-toggle="tab" href="#kt_schedule_day_1" aria-selected="false" tabindex="-1" role="tab">
																<span class="text-gray-400 fs-7 fw-semibold">Sa</span>
																<span class="fs-6 text-gray-800 fw-bold">21</span>
															</a>
														</li>
														<!--end::Date-->
														<!--begin::Date-->
														<li class="nav-item me-1" role="presentation">
															<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger" data-bs-toggle="tab" href="#kt_schedule_day_2" aria-selected="false" tabindex="-1" role="tab">
																<span class="text-gray-400 fs-7 fw-semibold">Su</span>
																<span class="fs-6 text-gray-800 fw-bold">22</span>
															</a>
														</li>
														<!--end::Date-->
														<!--begin::Date-->
														<li class="nav-item me-1" role="presentation">
															<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger active" data-bs-toggle="tab" href="#kt_schedule_day_3" aria-selected="true" role="tab">
																<span class="text-gray-400 fs-7 fw-semibold">Mo</span>
																<span class="fs-6 text-gray-800 fw-bold">23</span>
															</a>
														</li>
														<!--end::Date-->
														<!--begin::Date-->
														<li class="nav-item me-1" role="presentation">
															<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger" data-bs-toggle="tab" href="#kt_schedule_day_4" aria-selected="false" tabindex="-1" role="tab">
																<span class="text-gray-400 fs-7 fw-semibold">Tu</span>
																<span class="fs-6 text-gray-800 fw-bold">24</span>
															</a>
														</li>
														<!--end::Date-->
														<!--begin::Date-->
														<li class="nav-item me-1" role="presentation">
															<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger" data-bs-toggle="tab" href="#kt_schedule_day_5" aria-selected="false" tabindex="-1" role="tab">
																<span class="text-gray-400 fs-7 fw-semibold">We</span>
																<span class="fs-6 text-gray-800 fw-bold">25</span>
															</a>
														</li>
														<!--end::Date-->
														<!--begin::Date-->
														<li class="nav-item me-1" role="presentation">
															<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger" data-bs-toggle="tab" href="#kt_schedule_day_6" aria-selected="false" tabindex="-1" role="tab">
																<span class="text-gray-400 fs-7 fw-semibold">Th</span>
																<span class="fs-6 text-gray-800 fw-bold">26</span>
															</a>
														</li>
														<!--end::Date-->
														<!--begin::Date-->
														<li class="nav-item me-1" role="presentation">
															<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger" data-bs-toggle="tab" href="#kt_schedule_day_7" aria-selected="false" tabindex="-1" role="tab">
																<span class="text-gray-400 fs-7 fw-semibold">Fr</span>
																<span class="fs-6 text-gray-800 fw-bold">27</span>
															</a>
														</li>
														<!--end::Date-->
														<!--begin::Date-->
														<li class="nav-item me-1" role="presentation">
															<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger" data-bs-toggle="tab" href="#kt_schedule_day_8" aria-selected="false" tabindex="-1" role="tab">
																<span class="text-gray-400 fs-7 fw-semibold">Sa</span>
																<span class="fs-6 text-gray-800 fw-bold">28</span>
															</a>
														</li>
														<!--end::Date-->
														<!--begin::Date-->
														<li class="nav-item me-1" role="presentation">
															<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger" data-bs-toggle="tab" href="#kt_schedule_day_9" aria-selected="false" tabindex="-1" role="tab">
																<span class="text-gray-400 fs-7 fw-semibold">Su</span>
																<span class="fs-6 text-gray-800 fw-bold">29</span>
															</a>
														</li>
														<!--end::Date-->
														<!--begin::Date-->
														<li class="nav-item me-1" role="presentation">
															<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger" data-bs-toggle="tab" href="#kt_schedule_day_10" aria-selected="false" tabindex="-1" role="tab">
																<span class="text-gray-400 fs-7 fw-semibold">Mo</span>
																<span class="fs-6 text-gray-800 fw-bold">30</span>
															</a>
														</li>
														<!--end::Date-->
														<!--begin::Date-->
														<li class="nav-item me-1" role="presentation">
															<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger" data-bs-toggle="tab" href="#kt_schedule_day_11" aria-selected="false" tabindex="-1" role="tab">
																<span class="text-gray-400 fs-7 fw-semibold">Tu</span>
																<span class="fs-6 text-gray-800 fw-bold">31</span>
															</a>
														</li>
														<!--end::Date-->
													</ul>
													<!--end::Dates-->
													<!--begin::Tab Content-->
													<div class="tab-content px-9">
														<!--begin::Day-->
														<div id="kt_schedule_day_0" class="tab-pane fade show" role="tabpanel">
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-8">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-semibold ms-5 text-gray-600">
																	<!--begin::Time-->
																	<div class="fs-5">11:00 - 11:45 
																	<span class="fs-7 text-gray-400 text-uppercase">am</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Creative Content Initiative</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="text-gray-400">Lead by 
																	<a href="#">Karina Clarke</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-8">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-semibold ms-5 text-gray-600">
																	<!--begin::Time-->
																	<div class="fs-5">12:00 - 13:00 
																	<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Committee Review Approvals</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="text-gray-400">Lead by 
																	<a href="#">David Stevenson</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-8">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-semibold ms-5 text-gray-600">
																	<!--begin::Time-->
																	<div class="fs-5">13:00 - 14:00 
																	<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Dashboard UI/UX Design Review</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="text-gray-400">Lead by 
																	<a href="#">Michael Walters</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
														</div>
														<!--end::Day-->
														<!--begin::Day-->
														<div id="kt_schedule_day_1" class="tab-pane fade show active" role="tabpanel">
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-8">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-semibold ms-5 text-gray-600">
																	<!--begin::Time-->
																	<div class="fs-5">16:30 - 17:30 
																	<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Project Review &amp; Testing</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="text-gray-400">Lead by 
																	<a href="#">Peter Marcus</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-8">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-semibold ms-5 text-gray-600">
																	<!--begin::Time-->
																	<div class="fs-5">9:00 - 10:00 
																	<span class="fs-7 text-gray-400 text-uppercase">am</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Project Review &amp; Testing</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="text-gray-400">Lead by 
																	<a href="#">Bob Harris</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-8">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-semibold ms-5 text-gray-600">
																	<!--begin::Time-->
																	<div class="fs-5">10:00 - 11:00 
																	<span class="fs-7 text-gray-400 text-uppercase">am</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Creative Content Initiative</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="text-gray-400">Lead by 
																	<a href="#">Caleb Donaldson</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
														</div>
														<!--end::Day-->
														<!--begin::Day-->
														<div id="kt_schedule_day_2" class="tab-pane fade show" role="tabpanel">
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-8">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-semibold ms-5 text-gray-600">
																	<!--begin::Time-->
																	<div class="fs-5">14:30 - 15:30 
																	<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Weekly Team Stand-Up</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="text-gray-400">Lead by 
																	<a href="#">Yannis Gloverson</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-8">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-semibold ms-5 text-gray-600">
																	<!--begin::Time-->
																	<div class="fs-5">12:00 - 13:00 
																	<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Sales Pitch Proposal</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="text-gray-400">Lead by 
																	<a href="#">Naomi Hayabusa</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-8">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-semibold ms-5 text-gray-600">
																	<!--begin::Time-->
																	<div class="fs-5">12:00 - 13:00 
																	<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Project Review &amp; Testing</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="text-gray-400">Lead by 
																	<a href="#">Sean Bean</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
														</div>
														<!--end::Day-->
														<!--begin::Day-->
														<div id="kt_schedule_day_3" class="tab-pane fade show" role="tabpanel">
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-8">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-semibold ms-5 text-gray-600">
																	<!--begin::Time-->
																	<div class="fs-5">13:00 - 14:00 
																	<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Weekly Team Stand-Up</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="text-gray-400">Lead by 
																	<a href="#">Mark Randall</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-8">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-semibold ms-5 text-gray-600">
																	<!--begin::Time-->
																	<div class="fs-5">13:00 - 14:00 
																	<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Project Review &amp; Testing</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="text-gray-400">Lead by 
																	<a href="#">Bob Harris</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-8">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-semibold ms-5 text-gray-600">
																	<!--begin::Time-->
																	<div class="fs-5">16:30 - 17:30 
																	<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">9 Degree Project Estimation Meeting</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="text-gray-400">Lead by 
																	<a href="#">Karina Clarke</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
														</div>
														<!--end::Day-->
														<!--begin::Day-->
														<div id="kt_schedule_day_4" class="tab-pane fade show" role="tabpanel">
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-8">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-semibold ms-5 text-gray-600">
																	<!--begin::Time-->
																	<div class="fs-5">13:00 - 14:00 
																	<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Dashboard UI/UX Design Review</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="text-gray-400">Lead by 
																	<a href="#">Kendell Trevor</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-8">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-semibold ms-5 text-gray-600">
																	<!--begin::Time-->
																	<div class="fs-5">12:00 - 13:00 
																	<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Weekly Team Stand-Up</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="text-gray-400">Lead by 
																	<a href="#">Caleb Donaldson</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-8">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-semibold ms-5 text-gray-600">
																	<!--begin::Time-->
																	<div class="fs-5">9:00 - 10:00 
																	<span class="fs-7 text-gray-400 text-uppercase">am</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Project Review &amp; Testing</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="text-gray-400">Lead by 
																	<a href="#">Sean Bean</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
														</div>
														<!--end::Day-->
														<!--begin::Day-->
														<div id="kt_schedule_day_5" class="tab-pane fade show" role="tabpanel">
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-8">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-semibold ms-5 text-gray-600">
																	<!--begin::Time-->
																	<div class="fs-5">9:00 - 10:00 
																	<span class="fs-7 text-gray-400 text-uppercase">am</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Marketing Campaign Discussion</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="text-gray-400">Lead by 
																	<a href="#">Karina Clarke</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-8">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-semibold ms-5 text-gray-600">
																	<!--begin::Time-->
																	<div class="fs-5">13:00 - 14:00 
																	<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Lunch &amp; Learn Catch Up</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="text-gray-400">Lead by 
																	<a href="#">Naomi Hayabusa</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-8">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-semibold ms-5 text-gray-600">
																	<!--begin::Time-->
																	<div class="fs-5">10:00 - 11:00 
																	<span class="fs-7 text-gray-400 text-uppercase">am</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Creative Content Initiative</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="text-gray-400">Lead by 
																	<a href="#">Bob Harris</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
														</div>
														<!--end::Day-->
														<!--begin::Day-->
														<div id="kt_schedule_day_6" class="tab-pane fade show" role="tabpanel">
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-8">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-semibold ms-5 text-gray-600">
																	<!--begin::Time-->
																	<div class="fs-5">12:00 - 13:00 
																	<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Weekly Team Stand-Up</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="text-gray-400">Lead by 
																	<a href="#">Naomi Hayabusa</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-8">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-semibold ms-5 text-gray-600">
																	<!--begin::Time-->
																	<div class="fs-5">10:00 - 11:00 
																	<span class="fs-7 text-gray-400 text-uppercase">am</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Project Review &amp; Testing</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="text-gray-400">Lead by 
																	<a href="#">Caleb Donaldson</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-8">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-semibold ms-5 text-gray-600">
																	<!--begin::Time-->
																	<div class="fs-5">11:00 - 11:45 
																	<span class="fs-7 text-gray-400 text-uppercase">am</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Development Team Capacity Review</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="text-gray-400">Lead by 
																	<a href="#">Caleb Donaldson</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
														</div>
														<!--end::Day-->
														<!--begin::Day-->
														<div id="kt_schedule_day_7" class="tab-pane fade show" role="tabpanel">
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-8">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-semibold ms-5 text-gray-600">
																	<!--begin::Time-->
																	<div class="fs-5">16:30 - 17:30 
																	<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">9 Degree Project Estimation Meeting</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="text-gray-400">Lead by 
																	<a href="#">Kendell Trevor</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-8">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-semibold ms-5 text-gray-600">
																	<!--begin::Time-->
																	<div class="fs-5">9:00 - 10:00 
																	<span class="fs-7 text-gray-400 text-uppercase">am</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Committee Review Approvals</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="text-gray-400">Lead by 
																	<a href="#">Terry Robins</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-8">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-semibold ms-5 text-gray-600">
																	<!--begin::Time-->
																	<div class="fs-5">10:00 - 11:00 
																	<span class="fs-7 text-gray-400 text-uppercase">am</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Team Backlog Grooming Session</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="text-gray-400">Lead by 
																	<a href="#">Naomi Hayabusa</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
														</div>
														<!--end::Day-->
														<!--begin::Day-->
														<div id="kt_schedule_day_8" class="tab-pane fade show" role="tabpanel">
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-8">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-semibold ms-5 text-gray-600">
																	<!--begin::Time-->
																	<div class="fs-5">10:00 - 11:00 
																	<span class="fs-7 text-gray-400 text-uppercase">am</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Weekly Team Stand-Up</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="text-gray-400">Lead by 
																	<a href="#">Caleb Donaldson</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-8">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-semibold ms-5 text-gray-600">
																	<!--begin::Time-->
																	<div class="fs-5">12:00 - 13:00 
																	<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Sales Pitch Proposal</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="text-gray-400">Lead by 
																	<a href="#">Karina Clarke</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-8">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-semibold ms-5 text-gray-600">
																	<!--begin::Time-->
																	<div class="fs-5">11:00 - 11:45 
																	<span class="fs-7 text-gray-400 text-uppercase">am</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Development Team Capacity Review</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="text-gray-400">Lead by 
																	<a href="#">David Stevenson</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
														</div>
														<!--end::Day-->
														<!--begin::Day-->
														<div id="kt_schedule_day_9" class="tab-pane fade show" role="tabpanel">
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-8">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-semibold ms-5 text-gray-600">
																	<!--begin::Time-->
																	<div class="fs-5">13:00 - 14:00 
																	<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Project Review &amp; Testing</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="text-gray-400">Lead by 
																	<a href="#">Yannis Gloverson</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-8">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-semibold ms-5 text-gray-600">
																	<!--begin::Time-->
																	<div class="fs-5">10:00 - 11:00 
																	<span class="fs-7 text-gray-400 text-uppercase">am</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Team Backlog Grooming Session</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="text-gray-400">Lead by 
																	<a href="#">David Stevenson</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-8">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-semibold ms-5 text-gray-600">
																	<!--begin::Time-->
																	<div class="fs-5">13:00 - 14:00 
																	<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Lunch &amp; Learn Catch Up</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="text-gray-400">Lead by 
																	<a href="#">Peter Marcus</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
														</div>
														<!--end::Day-->
														<!--begin::Day-->
														<div id="kt_schedule_day_10" class="tab-pane fade show" role="tabpanel">
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-8">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-semibold ms-5 text-gray-600">
																	<!--begin::Time-->
																	<div class="fs-5">16:30 - 17:30 
																	<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Weekly Team Stand-Up</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="text-gray-400">Lead by 
																	<a href="#">Peter Marcus</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-8">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-semibold ms-5 text-gray-600">
																	<!--begin::Time-->
																	<div class="fs-5">12:00 - 13:00 
																	<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Weekly Team Stand-Up</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="text-gray-400">Lead by 
																	<a href="#">Kendell Trevor</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-8">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-semibold ms-5 text-gray-600">
																	<!--begin::Time-->
																	<div class="fs-5">14:30 - 15:30 
																	<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Development Team Capacity Review</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="text-gray-400">Lead by 
																	<a href="#">Sean Bean</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
														</div>
														<!--end::Day-->
														<!--begin::Day-->
														<div id="kt_schedule_day_11" class="tab-pane fade show" role="tabpanel">
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-8">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-semibold ms-5 text-gray-600">
																	<!--begin::Time-->
																	<div class="fs-5">16:30 - 17:30 
																	<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Weekly Team Stand-Up</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="text-gray-400">Lead by 
																	<a href="#">Peter Marcus</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-8">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-semibold ms-5 text-gray-600">
																	<!--begin::Time-->
																	<div class="fs-5">14:30 - 15:30 
																	<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Creative Content Initiative</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="text-gray-400">Lead by 
																	<a href="#">Yannis Gloverson</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-8">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-semibold ms-5 text-gray-600">
																	<!--begin::Time-->
																	<div class="fs-5">11:00 - 11:45 
																	<span class="fs-7 text-gray-400 text-uppercase">am</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Marketing Campaign Discussion</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="text-gray-400">Lead by 
																	<a href="#">Caleb Donaldson</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
														</div>
														<!--end::Day-->
													</div>
													<!--end::Tab Content-->
												</div>
												<!--end::Card body-->
											</div>
											<!--end::Timeline widget-3-->
										</div>
										<!--end::Col-->
									</div>
									<!--end::Row-->
									<!--begin::Row-->
									<div class="row g-5 g-xl-10 mb-5 mb-xl-10">
										<!--begin::Col-->
										<div class="col-xxl-6">
											<!--begin::Card widget 18-->
											<div class="card card-flush h-md-100">
												<!--begin::Body-->
												<div class="card-body py-9">
													<!--begin::Row-->
													<div class="row gx-9 h-100">
														<!--begin::Col-->
														<div class="col-sm-6 mb-10 mb-sm-0">
															<!--begin::Image-->
															<div class="bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-400px min-h-sm-100 h-100" style="background-size: 100% 100%;background-image:url('../assets/media/stock/600x600/img-33.jpg')"></div>
															<!--end::Image-->
														</div>
														<!--end::Col-->
														<!--begin::Col-->
														<div class="col-sm-6">
															<!--begin::Wrapper-->
															<div class="d-flex flex-column h-100">
																<!--begin::Header-->
																<div class="mb-7">
																	<!--begin::Headin-->
																	<div class="d-flex flex-stack mb-6">
																		<!--begin::Title-->
																		<div class="flex-shrink-0 me-5">
																			<span class="text-gray-400 fs-7 fw-bold me-2 d-block lh-1 pb-1">Featured</span>
																			<span class="text-gray-800 fs-1 fw-bold">9 Degree</span>
																		</div>
																		<!--end::Title-->
																		<span class="badge badge-light-primary flex-shrink-0 align-self-center py-3 px-4 fs-7">In Process</span>
																	</div>
																	<!--end::Heading-->
																	<!--begin::Items-->
																	<div class="d-flex align-items-center flex-wrap d-grid gap-2">
																		<!--begin::Item-->
																		<div class="d-flex align-items-center me-5 me-xl-13">
																			<!--begin::Symbol-->
																			<div class="symbol symbol-30px symbol-circle me-3">
																				<img src="../assets/media/avatars/300-3.jpg" class="" alt="">
																			</div>
																			<!--end::Symbol-->
																			<!--begin::Info-->
																			<div class="m-0">
																				<span class="fw-semibold text-gray-400 d-block fs-8">Manager</span>
																				<a href="../pages/user-profile/overview.html" class="fw-bold text-gray-800 text-hover-primary fs-7">Robert Fox</a>
																			</div>
																			<!--end::Info-->
																		</div>
																		<!--end::Item-->
																		<!--begin::Item-->
																		<div class="d-flex align-items-center">
																			<!--begin::Symbol-->
																			<div class="symbol symbol-30px symbol-circle me-3">
																				<span class="symbol-label bg-success">
																					<!--begin::Svg Icon | path: icons/duotune/abstract/abs042.svg-->
																					<span class="svg-icon svg-icon-5 svg-icon-white">
																						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																							<path d="M18 21.6C16.6 20.4 9.1 20.3 6.3 21.2C5.7 21.4 5.1 21.2 4.7 20.8L2 18C4.2 15.8 10.8 15.1 15.8 15.8C16.2 18.3 17 20.5 18 21.6ZM18.8 2.8C18.4 2.4 17.8 2.20001 17.2 2.40001C14.4 3.30001 6.9 3.2 5.5 2C6.8 3.3 7.4 5.5 7.7 7.7C9 7.9 10.3 8 11.7 8C15.8 8 19.8 7.2 21.5 5.5L18.8 2.8Z" fill="currentColor"></path>
																							<path opacity="0.3" d="M21.2 17.3C21.4 17.9 21.2 18.5 20.8 18.9L18 21.6C15.8 19.4 15.1 12.8 15.8 7.8C18.3 7.4 20.4 6.70001 21.5 5.60001C20.4 7.00001 20.2 14.5 21.2 17.3ZM8 11.7C8 9 7.7 4.2 5.5 2L2.8 4.8C2.4 5.2 2.2 5.80001 2.4 6.40001C2.7 7.40001 3.00001 9.2 3.10001 11.7C3.10001 15.5 2.40001 17.6 2.10001 18C3.20001 16.9 5.3 16.2 7.8 15.8C8 14.2 8 12.7 8 11.7Z" fill="currentColor"></path>
																						</svg>
																					</span>
																					<!--end::Svg Icon-->
																				</span>
																			</div>
																			<!--end::Symbol-->
																			<!--begin::Info-->
																			<div class="m-0">
																				<span class="fw-semibold text-gray-400 d-block fs-8">Budget</span>
																				<span class="fw-bold text-gray-800 fs-7">$64.800</span>
																			</div>
																			<!--end::Info-->
																		</div>
																		<!--end::Item-->
																	</div>
																	<!--end::Items-->
																</div>
																<!--end::Header-->
																<!--begin::Body-->
																<div class="mb-6">
																	<!--begin::Text-->
																	<span class="fw-semibold text-gray-600 fs-6 mb-8 d-block">Flat cartoony illustrations with vivid unblended colors and asymmetrical beautiful purple hair lady</span>
																	<!--end::Text-->
																	<!--begin::Stats-->
																	<div class="d-flex">
																		<!--begin::Stat-->
																		<div class="border border-gray-300 border-dashed rounded min-w-100px w-100 py-2 px-4 me-6 mb-3">
																			<!--begin::Date-->
																			<span class="fs-6 text-gray-700 fw-bold">Feb 6, 2021</span>
																			<!--end::Date-->
																			<!--begin::Label-->
																			<div class="fw-semibold text-gray-400">Due Date</div>
																			<!--end::Label-->
																		</div>
																		<!--end::Stat-->
																		<!--begin::Stat-->
																		<div class="border border-gray-300 border-dashed rounded min-w-100px w-100 py-2 px-4 mb-3">
																			<!--begin::Number-->
																			<span class="fs-6 text-gray-700 fw-bold">$
																			<span class="ms-n1 counted" data-kt-countup="true" data-kt-countup-value="284,900.00" data-kt-initialized="1">284,900</span></span>
																			<!--end::Number-->
																			<!--begin::Label-->
																			<div class="fw-semibold text-gray-400">Budget</div>
																			<!--end::Label-->
																		</div>
																		<!--end::Stat-->
																	</div>
																	<!--end::Stats-->
																</div>
																<!--end::Body-->
																<!--begin::Footer-->
																<div class="d-flex flex-stack mt-auto bd-highlight">
																	<!--begin::Users group-->
																	<div class="symbol-group symbol-hover flex-nowrap">
																		<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" data-kt-initialized="1">
																			<img alt="Pic" src="../assets/media/avatars/300-2.jpg">
																		</div>
																		<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" data-kt-initialized="1">
																			<img alt="Pic" src="../assets/media/avatars/300-3.jpg">
																		</div>
																		<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" data-kt-initialized="1">
																			<span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
																		</div>
																	</div>
																	<!--end::Users group-->
																	<!--begin::Actions-->
																	<a href="../apps/projects/project.html" class="text-primary opacity-75-hover fs-6 fw-semibold">View Project 
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr095.svg-->
																	<span class="svg-icon svg-icon-4 svg-icon-gray-800 ms-1">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path opacity="0.3" d="M4.7 17.3V7.7C4.7 6.59543 5.59543 5.7 6.7 5.7H9.8C10.2694 5.7 10.65 5.31944 10.65 4.85C10.65 4.38056 10.2694 4 9.8 4H5C3.89543 4 3 4.89543 3 6V19C3 20.1046 3.89543 21 5 21H18C19.1046 21 20 20.1046 20 19V14.2C20 13.7306 19.6194 13.35 19.15 13.35C18.6806 13.35 18.3 13.7306 18.3 14.2V17.3C18.3 18.4046 17.4046 19.3 16.3 19.3H6.7C5.59543 19.3 4.7 18.4046 4.7 17.3Z" fill="currentColor"></path>
																			<rect x="21.9497" y="3.46448" width="13" height="2" rx="1" transform="rotate(135 21.9497 3.46448)" fill="currentColor"></rect>
																			<path d="M19.8284 4.97161L19.8284 9.93937C19.8284 10.5252 20.3033 11 20.8891 11C21.4749 11 21.9497 10.5252 21.9497 9.93937L21.9497 3.05029C21.9497 2.498 21.502 2.05028 20.9497 2.05028L14.0607 2.05027C13.4749 2.05027 13 2.52514 13 3.11094C13 3.69673 13.4749 4.17161 14.0607 4.17161L19.0284 4.17161C19.4702 4.17161 19.8284 4.52978 19.8284 4.97161Z" fill="currentColor"></path>
																		</svg>
																	</span>
																	<!--end::Svg Icon--></a>
																	<!--end::Actions-->
																</div>
																<!--end::Footer-->
															</div>
															<!--end::Wrapper-->
														</div>
														<!--end::Col-->
													</div>
													<!--end::Row-->
												</div>
												<!--end::Body-->
											</div>
											<!--end::Card widget 18-->
										</div>
										<!--end::Col-->

									</div>
									<!--end::Row-->
									<!--begin::Row-->
									<div class="row g-5 g-xl-10 mb-5 mb-xl-10">
										<!--begin::Col-->
										<div class="col-xl-4">
											<!--begin::Chart Widget 35-->
											<div class="card card-flush h-md-100">
												<!--begin::Header-->
												<div class="card-header pt-5 mb-6">
													<!--begin::Title-->
													<h3 class="card-title align-items-start flex-column">
														<!--begin::Statistics-->
														<div class="d-flex align-items-center mb-2">
															<!--begin::Currency-->
															<span class="fs-3 fw-semibold text-gray-400 align-self-start me-1">$</span>
															<!--end::Currency-->
															<!--begin::Value-->
															<span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">3,274.94</span>
															<!--end::Value-->
															<!--begin::Label-->
															<span class="badge badge-light-success fs-base">
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
															<span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor"></rect>
																	<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor"></path>
																</svg>
															</span>
															<!--end::Svg Icon-->9.2%</span>
															<!--end::Label-->
														</div>
														<!--end::Statistics-->
														<!--begin::Description-->
														<span class="fs-6 fw-semibold text-gray-400">Avg. Agent Earnings</span>
														<!--end::Description-->
													</h3>
													<!--end::Title-->
													<!--begin::Toolbar-->
													<div class="card-toolbar">
														<!--begin::Menu-->
														<button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
															<!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
															<span class="svg-icon svg-icon-1 svg-icon-gray-300 me-n1">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="4" fill="currentColor"></rect>
																	<rect x="11" y="11" width="2.6" height="2.6" rx="1.3" fill="currentColor"></rect>
																	<rect x="15" y="11" width="2.6" height="2.6" rx="1.3" fill="currentColor"></rect>
																	<rect x="7" y="11" width="2.6" height="2.6" rx="1.3" fill="currentColor"></rect>
																</svg>
															</span>
															<!--end::Svg Icon-->
														</button>
														<!--begin::Menu 2-->
														<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions</div>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu separator-->
															<div class="separator mb-3 opacity-75"></div>
															<!--end::Menu separator-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">New Ticket</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">New Customer</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
																<!--begin::Menu item-->
																<a href="#" class="menu-link px-3">
																	<span class="menu-title">New Group</span>
																	<span class="menu-arrow"></span>
																</a>
																<!--end::Menu item-->
																<!--begin::Menu sub-->
																<div class="menu-sub menu-sub-dropdown w-175px py-4">
																	<!--begin::Menu item-->
																	<div class="menu-item px-3">
																		<a href="#" class="menu-link px-3">Admin Group</a>
																	</div>
																	<!--end::Menu item-->
																	<!--begin::Menu item-->
																	<div class="menu-item px-3">
																		<a href="#" class="menu-link px-3">Staff Group</a>
																	</div>
																	<!--end::Menu item-->
																	<!--begin::Menu item-->
																	<div class="menu-item px-3">
																		<a href="#" class="menu-link px-3">Member Group</a>
																	</div>
																	<!--end::Menu item-->
																</div>
																<!--end::Menu sub-->
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">New Contact</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu separator-->
															<div class="separator mt-3 opacity-75"></div>
															<!--end::Menu separator-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<div class="menu-content px-3 py-3">
																	<a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
																</div>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu 2-->
														<!--end::Menu-->
													</div>
													<!--end::Toolbar-->
												</div>
												<!--end::Header-->
												<!--begin::Body-->
												<div class="card-body py-0 px-0">
													<!--begin::Nav-->
													<ul class="nav d-flex justify-content-between mb-3 mx-9" role="tablist">
														<!--begin::Item-->
														<li class="nav-item mb-3" role="presentation">
															<!--begin::Link-->
															<a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px active" data-bs-toggle="tab" id="kt_charts_widget_35_tab_1" href="#kt_charts_widget_35_tab_content_1" aria-selected="true" role="tab">1d</a>
															<!--end::Link-->
														</li>
														<!--end::Item-->
														<!--begin::Item-->
														<li class="nav-item mb-3" role="presentation">
															<!--begin::Link-->
															<a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px" data-bs-toggle="tab" id="kt_charts_widget_35_tab_2" href="#kt_charts_widget_35_tab_content_2" aria-selected="false" tabindex="-1" role="tab">5d</a>
															<!--end::Link-->
														</li>
														<!--end::Item-->
														<!--begin::Item-->
														<li class="nav-item mb-3" role="presentation">
															<!--begin::Link-->
															<a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px" data-bs-toggle="tab" id="kt_charts_widget_35_tab_3" href="#kt_charts_widget_35_tab_content_3" aria-selected="false" tabindex="-1" role="tab">1m</a>
															<!--end::Link-->
														</li>
														<!--end::Item-->
														<!--begin::Item-->
														<li class="nav-item mb-3" role="presentation">
															<!--begin::Link-->
															<a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px" data-bs-toggle="tab" id="kt_charts_widget_35_tab_4" href="#kt_charts_widget_35_tab_content_4" aria-selected="false" tabindex="-1" role="tab">6m</a>
															<!--end::Link-->
														</li>
														<!--end::Item-->
														<!--begin::Item-->
														<li class="nav-item mb-3" role="presentation">
															<!--begin::Link-->
															<a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px" data-bs-toggle="tab" id="kt_charts_widget_35_tab_5" href="#kt_charts_widget_35_tab_content_5" aria-selected="false" tabindex="-1" role="tab">1y</a>
															<!--end::Link-->
														</li>
														<!--end::Item-->
													</ul>
													<!--end::Nav-->
													<!--begin::Tab Content-->
													<div class="tab-content mt-n6">
														<!--begin::Tap pane-->
														<div class="tab-pane fade active show" id="kt_charts_widget_35_tab_content_1" role="tabpanel" aria-labelledby="#kt_charts_widget_35_tab_1">
															<!--begin::Chart-->
															<div id="kt_charts_widget_35_chart_1" data-kt-chart-color="primary" class="min-h-auto h-200px ps-3 pe-6" style="min-height: 215px;"><div id="apexchartsqr77pvyv" class="apexcharts-canvas apexchartsqr77pvyv apexcharts-theme-light" style="width: 368.75px; height: 200px;"><svg id="SvgjsSvg1323" width="368.75" height="200" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1325" class="apexcharts-inner apexcharts-graphical" transform="translate(22, 30)"><defs id="SvgjsDefs1324"><clipPath id="gridRectMaskqr77pvyv"><rect id="SvgjsRect1328" width="343.75" height="158" x="-3.5" y="-1.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskqr77pvyv"></clipPath><clipPath id="nonForecastMaskqr77pvyv"></clipPath><clipPath id="gridRectMarkerMaskqr77pvyv"><rect id="SvgjsRect1329" width="340.75" height="159" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><linearGradient id="SvgjsLinearGradient1334" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1335" stop-opacity="0.4" stop-color="rgba(0,158,247,0.4)" offset="0.15"></stop><stop id="SvgjsStop1336" stop-opacity="0.2" stop-color="rgba(255,255,255,0.2)" offset="1.2"></stop><stop id="SvgjsStop1337" stop-opacity="0.2" stop-color="rgba(255,255,255,0.2)" offset="1"></stop></linearGradient></defs><g id="SvgjsG1340" class="apexcharts-xaxis" transform="translate(20, 0)"><g id="SvgjsG1341" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1359" class="apexcharts-grid"><g id="SvgjsG1360" class="apexcharts-gridlines-horizontal"><line id="SvgjsLine1362" x1="0" y1="0" x2="336.75" y2="0" stroke="#e4e6ef" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1363" x1="0" y1="38.75" x2="336.75" y2="38.75" stroke="#e4e6ef" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1364" x1="0" y1="77.5" x2="336.75" y2="77.5" stroke="#e4e6ef" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1365" x1="0" y1="116.25" x2="336.75" y2="116.25" stroke="#e4e6ef" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1366" x1="0" y1="155" x2="336.75" y2="155" stroke="#e4e6ef" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1361" class="apexcharts-gridlines-vertical"></g><line id="SvgjsLine1368" x1="0" y1="155" x2="336.75" y2="155" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine1367" x1="0" y1="1" x2="0" y2="155" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG1330" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1331" class="apexcharts-series" seriesName="Earnings" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1338" d="M 0 155L 0 98.16666666666666C 8.41875 98.16666666666666 15.634821428571428 46.5 24.053571428571427 46.5C 32.472321428571426 46.5 39.68839285714286 46.5 48.107142857142854 46.5C 56.52589285714285 46.5 63.74196428571428 82.66666666666666 72.16071428571428 82.66666666666666C 80.57946428571428 82.66666666666666 87.7955357142857 82.66666666666666 96.21428571428571 82.66666666666666C 104.63303571428571 82.66666666666666 111.84910714285714 113.66666666666666 120.26785714285714 113.66666666666666C 128.68660714285713 113.66666666666666 135.90267857142857 113.66666666666666 144.32142857142856 113.66666666666666C 152.74017857142857 113.66666666666666 159.95624999999998 82.66666666666666 168.375 82.66666666666666C 176.79375 82.66666666666666 184.00982142857143 82.66666666666666 192.42857142857142 82.66666666666666C 200.84732142857143 82.66666666666666 208.06339285714284 41.33333333333334 216.48214285714286 41.33333333333334C 224.90089285714285 41.33333333333334 232.1169642857143 41.33333333333334 240.53571428571428 41.33333333333334C 248.9544642857143 41.33333333333334 256.17053571428573 62 264.5892857142857 62C 273.0080357142857 62 280.2241071428571 62 288.6428571428571 62C 297.0616071428571 62 304.27767857142857 38.75 312.69642857142856 38.75C 321.11517857142854 38.75 328.33125 38.75 336.75 38.75C 336.75 38.75 336.75 38.75 336.75 155M 336.75 38.75z" fill="url(#SvgjsLinearGradient1334)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskqr77pvyv)" pathTo="M 0 155L 0 98.16666666666666C 8.41875 98.16666666666666 15.634821428571428 46.5 24.053571428571427 46.5C 32.472321428571426 46.5 39.68839285714286 46.5 48.107142857142854 46.5C 56.52589285714285 46.5 63.74196428571428 82.66666666666666 72.16071428571428 82.66666666666666C 80.57946428571428 82.66666666666666 87.7955357142857 82.66666666666666 96.21428571428571 82.66666666666666C 104.63303571428571 82.66666666666666 111.84910714285714 113.66666666666666 120.26785714285714 113.66666666666666C 128.68660714285713 113.66666666666666 135.90267857142857 113.66666666666666 144.32142857142856 113.66666666666666C 152.74017857142857 113.66666666666666 159.95624999999998 82.66666666666666 168.375 82.66666666666666C 176.79375 82.66666666666666 184.00982142857143 82.66666666666666 192.42857142857142 82.66666666666666C 200.84732142857143 82.66666666666666 208.06339285714284 41.33333333333334 216.48214285714286 41.33333333333334C 224.90089285714285 41.33333333333334 232.1169642857143 41.33333333333334 240.53571428571428 41.33333333333334C 248.9544642857143 41.33333333333334 256.17053571428573 62 264.5892857142857 62C 273.0080357142857 62 280.2241071428571 62 288.6428571428571 62C 297.0616071428571 62 304.27767857142857 38.75 312.69642857142856 38.75C 321.11517857142854 38.75 328.33125 38.75 336.75 38.75C 336.75 38.75 336.75 38.75 336.75 155M 336.75 38.75z" pathFrom="M -1 206.66666666666666L -1 206.66666666666666L 24.053571428571427 206.66666666666666L 48.107142857142854 206.66666666666666L 72.16071428571428 206.66666666666666L 96.21428571428571 206.66666666666666L 120.26785714285714 206.66666666666666L 144.32142857142856 206.66666666666666L 168.375 206.66666666666666L 192.42857142857142 206.66666666666666L 216.48214285714286 206.66666666666666L 240.53571428571428 206.66666666666666L 264.5892857142857 206.66666666666666L 288.6428571428571 206.66666666666666L 312.69642857142856 206.66666666666666L 336.75 206.66666666666666"></path><path id="SvgjsPath1339" d="M 0 98.16666666666666C 8.41875 98.16666666666666 15.634821428571428 46.5 24.053571428571427 46.5C 32.472321428571426 46.5 39.68839285714286 46.5 48.107142857142854 46.5C 56.52589285714285 46.5 63.74196428571428 82.66666666666666 72.16071428571428 82.66666666666666C 80.57946428571428 82.66666666666666 87.7955357142857 82.66666666666666 96.21428571428571 82.66666666666666C 104.63303571428571 82.66666666666666 111.84910714285714 113.66666666666666 120.26785714285714 113.66666666666666C 128.68660714285713 113.66666666666666 135.90267857142857 113.66666666666666 144.32142857142856 113.66666666666666C 152.74017857142857 113.66666666666666 159.95624999999998 82.66666666666666 168.375 82.66666666666666C 176.79375 82.66666666666666 184.00982142857143 82.66666666666666 192.42857142857142 82.66666666666666C 200.84732142857143 82.66666666666666 208.06339285714284 41.33333333333334 216.48214285714286 41.33333333333334C 224.90089285714285 41.33333333333334 232.1169642857143 41.33333333333334 240.53571428571428 41.33333333333334C 248.9544642857143 41.33333333333334 256.17053571428573 62 264.5892857142857 62C 273.0080357142857 62 280.2241071428571 62 288.6428571428571 62C 297.0616071428571 62 304.27767857142857 38.75 312.69642857142856 38.75C 321.11517857142854 38.75 328.33125 38.75 336.75 38.75" fill="none" fill-opacity="1" stroke="#009ef7" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskqr77pvyv)" pathTo="M 0 98.16666666666666C 8.41875 98.16666666666666 15.634821428571428 46.5 24.053571428571427 46.5C 32.472321428571426 46.5 39.68839285714286 46.5 48.107142857142854 46.5C 56.52589285714285 46.5 63.74196428571428 82.66666666666666 72.16071428571428 82.66666666666666C 80.57946428571428 82.66666666666666 87.7955357142857 82.66666666666666 96.21428571428571 82.66666666666666C 104.63303571428571 82.66666666666666 111.84910714285714 113.66666666666666 120.26785714285714 113.66666666666666C 128.68660714285713 113.66666666666666 135.90267857142857 113.66666666666666 144.32142857142856 113.66666666666666C 152.74017857142857 113.66666666666666 159.95624999999998 82.66666666666666 168.375 82.66666666666666C 176.79375 82.66666666666666 184.00982142857143 82.66666666666666 192.42857142857142 82.66666666666666C 200.84732142857143 82.66666666666666 208.06339285714284 41.33333333333334 216.48214285714286 41.33333333333334C 224.90089285714285 41.33333333333334 232.1169642857143 41.33333333333334 240.53571428571428 41.33333333333334C 248.9544642857143 41.33333333333334 256.17053571428573 62 264.5892857142857 62C 273.0080357142857 62 280.2241071428571 62 288.6428571428571 62C 297.0616071428571 62 304.27767857142857 38.75 312.69642857142856 38.75C 321.11517857142854 38.75 328.33125 38.75 336.75 38.75" pathFrom="M -1 206.66666666666666L -1 206.66666666666666L 24.053571428571427 206.66666666666666L 48.107142857142854 206.66666666666666L 72.16071428571428 206.66666666666666L 96.21428571428571 206.66666666666666L 120.26785714285714 206.66666666666666L 144.32142857142856 206.66666666666666L 168.375 206.66666666666666L 192.42857142857142 206.66666666666666L 216.48214285714286 206.66666666666666L 240.53571428571428 206.66666666666666L 264.5892857142857 206.66666666666666L 288.6428571428571 206.66666666666666L 312.69642857142856 206.66666666666666L 336.75 206.66666666666666"></path><g id="SvgjsG1332" class="apexcharts-series-markers-wrap" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1376" r="0" cx="0" cy="0" class="apexcharts-marker we401rt85 no-pointer-events" stroke="#009ef7" fill="#009ef7" fill-opacity="1" stroke-width="3" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG1333" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine1370" x1="0" y1="0" x2="0" y2="155" stroke="#009ef7" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="155" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><line id="SvgjsLine1371" x1="0" y1="0" x2="336.75" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1372" x1="0" y1="0" x2="336.75" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1373" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1374" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1375" class="apexcharts-point-annotations"></g><rect id="SvgjsRect1377" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect"></rect><rect id="SvgjsRect1378" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-selection-rect"></rect></g><g id="SvgjsG1357" class="apexcharts-yaxis" rel="0" transform="translate(-8, 0)"><g id="SvgjsG1358" class="apexcharts-yaxis-texts-g"></g></g><rect id="SvgjsRect1369" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG1326" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 100px;"></div><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: inherit; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(0, 158, 247);"></span><div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light"><div class="apexcharts-xaxistooltip-text" style="font-family: inherit; font-size: 12px;"></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
															<!--end::Chart-->
															<!--begin::Table container-->
															<div class="table-responsive mx-9 mt-n6">
																<!--begin::Table-->
																<table class="table align-middle gs-0 gy-4">
																	<!--begin::Table head-->
																	<thead>
																		<tr>
																			<th class="min-w-100px"></th>
																			<th class="min-w-100px text-end pe-0"></th>
																			<th class="text-end min-w-50px"></th>
																		</tr>
																	</thead>
																	<!--end::Table head-->
																	<!--begin::Table body-->
																	<tbody>
																		<tr>
																			<td>
																				<a href="#" class="text-gray-600 fw-bold fs-6">2:30 PM</a>
																			</td>
																			<td class="pe-0 text-end">
																				<span class="text-gray-800 fw-bold fs-6 me-1">$2,756.26</span>
																			</td>
																			<td class="pe-0 text-end">
																				<span class="fw-bold fs-6 text-danger">-139.34</span>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<a href="#" class="text-gray-600 fw-bold fs-6">3:10 PM</a>
																			</td>
																			<td class="pe-0 text-end">
																				<span class="text-gray-800 fw-bold fs-6 me-1">$3,207.03</span>
																			</td>
																			<td class="pe-0 text-end">
																				<span class="fw-bold fs-6 text-success">+576.24</span>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<a href="#" class="text-gray-600 fw-bold fs-6">3:55 PM</a>
																			</td>
																			<td class="pe-0 text-end">
																				<span class="text-gray-800 fw-bold fs-6 me-1">$3,274.94</span>
																			</td>
																			<td class="pe-0 text-end">
																				<span class="fw-bold fs-6 text-success">+124.03</span>
																			</td>
																		</tr>
																	</tbody>
																	<!--end::Table body-->
																</table>
																<!--end::Table-->
															</div>
															<!--end::Table container-->
														</div>
														<!--end::Tap pane-->
														<!--begin::Tap pane-->
														<div class="tab-pane fade" id="kt_charts_widget_35_tab_content_2" role="tabpanel" aria-labelledby="#kt_charts_widget_35_tab_2">
															<!--begin::Chart-->
															<div id="kt_charts_widget_35_chart_2" data-kt-chart-color="primary" class="min-h-auto h-200px ps-3 pe-6"></div>
															<!--end::Chart-->
															<!--begin::Table container-->
															<div class="table-responsive mx-9 mt-n6">
																<!--begin::Table-->
																<table class="table align-middle gs-0 gy-4">
																	<!--begin::Table head-->
																	<thead>
																		<tr>
																			<th class="min-w-100px"></th>
																			<th class="min-w-100px text-end pe-0"></th>
																			<th class="text-end min-w-50px"></th>
																		</tr>
																	</thead>
																	<!--end::Table head-->
																	<!--begin::Table body-->
																	<tbody>
																		<tr>
																			<td>
																				<a href="#" class="text-gray-600 fw-bold fs-6">4:30 PM</a>
																			</td>
																			<td class="pe-0 text-end">
																				<span class="text-gray-800 fw-bold fs-6 me-1">$2,345.45</span>
																			</td>
																			<td class="pe-0 text-end">
																				<span class="fw-bold fs-6 text-success">+134.02</span>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<a href="#" class="text-gray-600 fw-bold fs-6">11:35 AM</a>
																			</td>
																			<td class="pe-0 text-end">
																				<span class="text-gray-800 fw-bold fs-6 me-1">$756.26</span>
																			</td>
																			<td class="pe-0 text-end">
																				<span class="fw-bold fs-6 text-primary">-124.03</span>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<a href="#" class="text-gray-600 fw-bold fs-6">3:30 PM</a>
																			</td>
																			<td class="pe-0 text-end">
																				<span class="text-gray-800 fw-bold fs-6 me-1">$1,756.26</span>
																			</td>
																			<td class="pe-0 text-end">
																				<span class="fw-bold fs-6 text-danger">+144.04</span>
																			</td>
																		</tr>
																	</tbody>
																	<!--end::Table body-->
																</table>
																<!--end::Table-->
															</div>
															<!--end::Table container-->
														</div>
														<!--end::Tap pane-->
														<!--begin::Tap pane-->
														<div class="tab-pane fade" id="kt_charts_widget_35_tab_content_3" role="tabpanel" aria-labelledby="#kt_charts_widget_35_tab_3">
															<!--begin::Chart-->
															<div id="kt_charts_widget_35_chart_3" data-kt-chart-color="primary" class="min-h-auto h-200px ps-3 pe-6"></div>
															<!--end::Chart-->
															<!--begin::Table container-->
															<div class="table-responsive mx-9 mt-n6">
																<!--begin::Table-->
																<table class="table align-middle gs-0 gy-4">
																	<!--begin::Table head-->
																	<thead>
																		<tr>
																			<th class="min-w-100px"></th>
																			<th class="min-w-100px text-end pe-0"></th>
																			<th class="text-end min-w-50px"></th>
																		</tr>
																	</thead>
																	<!--end::Table head-->
																	<!--begin::Table body-->
																	<tbody>
																		<tr>
																			<td>
																				<a href="#" class="text-gray-600 fw-bold fs-6">3:20 AM</a>
																			</td>
																			<td class="pe-0 text-end">
																				<span class="text-gray-800 fw-bold fs-6 me-1">$3,756.26</span>
																			</td>
																			<td class="pe-0 text-end">
																				<span class="fw-bold fs-6 text-primary">+185.03</span>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<a href="#" class="text-gray-600 fw-bold fs-6">12:30 AM</a>
																			</td>
																			<td class="pe-0 text-end">
																				<span class="text-gray-800 fw-bold fs-6 me-1">$2,756.26</span>
																			</td>
																			<td class="pe-0 text-end">
																				<span class="fw-bold fs-6 text-danger">+124.03</span>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<a href="#" class="text-gray-600 fw-bold fs-6">4:30 PM</a>
																			</td>
																			<td class="pe-0 text-end">
																				<span class="text-gray-800 fw-bold fs-6 me-1">$756.26</span>
																			</td>
																			<td class="pe-0 text-end">
																				<span class="fw-bold fs-6 text-success">-154.03</span>
																			</td>
																		</tr>
																	</tbody>
																	<!--end::Table body-->
																</table>
																<!--end::Table-->
															</div>
															<!--end::Table container-->
														</div>
														<!--end::Tap pane-->
														<!--begin::Tap pane-->
														<div class="tab-pane fade" id="kt_charts_widget_35_tab_content_4" role="tabpanel" aria-labelledby="#kt_charts_widget_35_tab_4">
															<!--begin::Chart-->
															<div id="kt_charts_widget_35_chart_4" data-kt-chart-color="primary" class="min-h-auto h-200px ps-3 pe-6"></div>
															<!--end::Chart-->
															<!--begin::Table container-->
															<div class="table-responsive mx-9 mt-n6">
																<!--begin::Table-->
																<table class="table align-middle gs-0 gy-4">
																	<!--begin::Table head-->
																	<thead>
																		<tr>
																			<th class="min-w-100px"></th>
																			<th class="min-w-100px text-end pe-0"></th>
																			<th class="text-end min-w-50px"></th>
																		</tr>
																	</thead>
																	<!--end::Table head-->
																	<!--begin::Table body-->
																	<tbody>
																		<tr>
																			<td>
																				<a href="#" class="text-gray-600 fw-bold fs-6">2:30 PM</a>
																			</td>
																			<td class="pe-0 text-end">
																				<span class="text-gray-800 fw-bold fs-6 me-1">$2,756.26</span>
																			</td>
																			<td class="pe-0 text-end">
																				<span class="fw-bold fs-6 text-warning">+124.03</span>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<a href="#" class="text-gray-600 fw-bold fs-6">5:30 AM</a>
																			</td>
																			<td class="pe-0 text-end">
																				<span class="text-gray-800 fw-bold fs-6 me-1">$1,756.26</span>
																			</td>
																			<td class="pe-0 text-end">
																				<span class="fw-bold fs-6 text-info">+144.65</span>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<a href="#" class="text-gray-600 fw-bold fs-6">4:30 PM</a>
																			</td>
																			<td class="pe-0 text-end">
																				<span class="text-gray-800 fw-bold fs-6 me-1">$2,085.25</span>
																			</td>
																			<td class="pe-0 text-end">
																				<span class="fw-bold fs-6 text-primary">+154.06</span>
																			</td>
																		</tr>
																	</tbody>
																	<!--end::Table body-->
																</table>
																<!--end::Table-->
															</div>
															<!--end::Table container-->
														</div>
														<!--end::Tap pane-->
														<!--begin::Tap pane-->
														<div class="tab-pane fade" id="kt_charts_widget_35_tab_content_5" role="tabpanel" aria-labelledby="#kt_charts_widget_35_tab_5">
															<!--begin::Chart-->
															<div id="kt_charts_widget_35_chart_5" data-kt-chart-color="primary" class="min-h-auto h-200px ps-3 pe-6"></div>
															<!--end::Chart-->
															<!--begin::Table container-->
															<div class="table-responsive mx-9 mt-n6">
																<!--begin::Table-->
																<table class="table align-middle gs-0 gy-4">
																	<!--begin::Table head-->
																	<thead>
																		<tr>
																			<th class="min-w-100px"></th>
																			<th class="min-w-100px text-end pe-0"></th>
																			<th class="text-end min-w-50px"></th>
																		</tr>
																	</thead>
																	<!--end::Table head-->
																	<!--begin::Table body-->
																	<tbody>
																		<tr>
																			<td>
																				<a href="#" class="text-gray-600 fw-bold fs-6">2:30 PM</a>
																			</td>
																			<td class="pe-0 text-end">
																				<span class="text-gray-800 fw-bold fs-6 me-1">$2,045.04</span>
																			</td>
																			<td class="pe-0 text-end">
																				<span class="fw-bold fs-6 text-warning">+114.03</span>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<a href="#" class="text-gray-600 fw-bold fs-6">3:30 AM</a>
																			</td>
																			<td class="pe-0 text-end">
																				<span class="text-gray-800 fw-bold fs-6 me-1">$756.26</span>
																			</td>
																			<td class="pe-0 text-end">
																				<span class="fw-bold fs-6 text-primary">-124.03</span>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<a href="#" class="text-gray-600 fw-bold fs-6">10:30 PM</a>
																			</td>
																			<td class="pe-0 text-end">
																				<span class="text-gray-800 fw-bold fs-6 me-1">$1.756.26</span>
																			</td>
																			<td class="pe-0 text-end">
																				<span class="fw-bold fs-6 text-info">+165.86</span>
																			</td>
																		</tr>
																	</tbody>
																	<!--end::Table body-->
																</table>
																<!--end::Table-->
															</div>
															<!--end::Table container-->
														</div>
														<!--end::Tap pane-->
													</div>
													<!--end::Tab Content-->
												</div>
												<!--end::Body-->
											</div>
											<!--end::Chart Widget 33-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-xl-8">
											<!--begin::Tables widget 14-->
											<div class="card card-flush h-md-100">
												<!--begin::Header-->
												<div class="card-header pt-7">
													<!--begin::Title-->
													<h3 class="card-title align-items-start flex-column">
														<span class="card-label fw-bold text-gray-800">Projects Stats</span>
														<span class="text-gray-400 mt-1 fw-semibold fs-6">Updated 37 minutes ago</span>
													</h3>
													<!--end::Title-->
													<!--begin::Toolbar-->
													<div class="card-toolbar">
														<a href="../apps/ecommerce/catalog/add-product.html" class="btn btn-sm btn-light">History</a>
													</div>
													<!--end::Toolbar-->
												</div>
												<!--end::Header-->
												<!--begin::Body-->
												<div class="card-body pt-6">
													<!--begin::Table container-->
													<div class="table-responsive">
														<!--begin::Table-->
														<table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
															<!--begin::Table head-->
															<thead>
																<tr class="fs-7 fw-bold text-gray-400 border-bottom-0">
																	<th class="p-0 pb-3 min-w-175px text-start">ITEM</th>
																	<th class="p-0 pb-3 min-w-100px text-end">BUDGET</th>
																	<th class="p-0 pb-3 min-w-100px text-end">PROGRESS</th>
																	<th class="p-0 pb-3 min-w-175px text-end pe-12">STATUS</th>
																	<th class="p-0 pb-3 w-125px text-end pe-7">CHART</th>
																	<th class="p-0 pb-3 w-50px text-end">VIEW</th>
																</tr>
															</thead>
															<!--end::Table head-->
															<!--begin::Table body-->
															<tbody>
																<tr>
																	<td>
																		<div class="d-flex align-items-center">
																			<div class="symbol symbol-50px me-3">
																				<img src="../assets/media/stock/600x600/img-49.jpg" class="" alt="">
																			</div>
																			<div class="d-flex justify-content-start flex-column">
																				<a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Mivy App</a>
																				<span class="text-gray-400 fw-semibold d-block fs-7">Jane Cooper</span>
																			</div>
																		</div>
																	</td>
																	<td class="text-end pe-0">
																		<span class="text-gray-600 fw-bold fs-6">$32,400</span>
																	</td>
																	<td class="text-end pe-0">
																		<!--begin::Label-->
																		<span class="badge badge-light-success fs-base">
																		<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
																		<span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
																			<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																				<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor"></rect>
																				<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor"></path>
																			</svg>
																		</span>
																		<!--end::Svg Icon-->9.2%</span>
																		<!--end::Label-->
																	</td>
																	<td class="text-end pe-12">
																		<span class="badge py-3 px-4 fs-7 badge-light-primary">In Process</span>
																	</td>
																	<td class="text-end pe-0">
																		<div id="kt_table_widget_14_chart_1" class="h-50px mt-n8 pe-7" data-kt-chart-color="success" style="min-height: 50px;"><div id="apexcharts51pxa9er" class="apexcharts-canvas apexcharts51pxa9er apexcharts-theme-light" style="width: 92.25px; height: 50px;"><svg id="SvgjsSvg1379" width="92.25" height="50" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1381" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1380"><clipPath id="gridRectMask51pxa9er"><rect id="SvgjsRect1385" width="98.25" height="52" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMask51pxa9er"></clipPath><clipPath id="nonForecastMask51pxa9er"></clipPath><clipPath id="gridRectMarkerMask51pxa9er"><rect id="SvgjsRect1386" width="96.25" height="54" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG1393" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1394" class="apexcharts-xaxis-texts-g" transform="translate(0, 4)"></g></g><g id="SvgjsG1410" class="apexcharts-grid"><g id="SvgjsG1411" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine1413" x1="0" y1="0" x2="92.25" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1414" x1="0" y1="5" x2="92.25" y2="5" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1415" x1="0" y1="10" x2="92.25" y2="10" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1416" x1="0" y1="15" x2="92.25" y2="15" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1417" x1="0" y1="20" x2="92.25" y2="20" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1418" x1="0" y1="25" x2="92.25" y2="25" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1419" x1="0" y1="30" x2="92.25" y2="30" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1420" x1="0" y1="35" x2="92.25" y2="35" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1421" x1="0" y1="40" x2="92.25" y2="40" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1422" x1="0" y1="45" x2="92.25" y2="45" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1423" x1="0" y1="50" x2="92.25" y2="50" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1412" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine1425" x1="0" y1="50" x2="92.25" y2="50" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine1424" x1="0" y1="1" x2="0" y2="50" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG1387" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1388" class="apexcharts-series" seriesName="NetxProfit" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1391" d="M 0 50L 0 44.166666666666664C 2.483653846153846 44.166666666666664 4.612500000000001 41.666666666666664 7.096153846153847 41.666666666666664C 9.579807692307693 41.666666666666664 11.708653846153847 45.833333333333336 14.192307692307693 45.833333333333336C 16.67596153846154 45.833333333333336 18.804807692307694 32.5 21.28846153846154 32.5C 23.772115384615386 32.5 25.90096153846154 45 28.384615384615387 45C 30.868269230769233 45 32.997115384615384 40.83333333333333 35.48076923076923 40.83333333333333C 37.96442307692308 40.83333333333333 40.09326923076924 45.833333333333336 42.57692307692308 45.833333333333336C 45.06057692307692 45.833333333333336 47.18942307692308 30.833333333333332 49.67307692307693 30.833333333333332C 52.156730769230776 30.833333333333332 54.28557692307693 45.833333333333336 56.769230769230774 45.833333333333336C 59.252884615384616 45.833333333333336 61.38173076923077 40.83333333333333 63.86538461538462 40.83333333333333C 66.34903846153847 40.83333333333333 68.47788461538462 35 70.96153846153847 35C 73.44519230769231 35 75.57403846153846 44.166666666666664 78.0576923076923 44.166666666666664C 80.54134615384615 44.166666666666664 82.67019230769232 32.5 85.15384615384616 32.5C 87.6375 32.5 89.76634615384616 39.166666666666664 92.25 39.166666666666664C 92.25 39.166666666666664 92.25 39.166666666666664 92.25 50M 92.25 39.166666666666664z" fill="rgba(255,255,255,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask51pxa9er)" pathTo="M 0 50L 0 44.166666666666664C 2.483653846153846 44.166666666666664 4.612500000000001 41.666666666666664 7.096153846153847 41.666666666666664C 9.579807692307693 41.666666666666664 11.708653846153847 45.833333333333336 14.192307692307693 45.833333333333336C 16.67596153846154 45.833333333333336 18.804807692307694 32.5 21.28846153846154 32.5C 23.772115384615386 32.5 25.90096153846154 45 28.384615384615387 45C 30.868269230769233 45 32.997115384615384 40.83333333333333 35.48076923076923 40.83333333333333C 37.96442307692308 40.83333333333333 40.09326923076924 45.833333333333336 42.57692307692308 45.833333333333336C 45.06057692307692 45.833333333333336 47.18942307692308 30.833333333333332 49.67307692307693 30.833333333333332C 52.156730769230776 30.833333333333332 54.28557692307693 45.833333333333336 56.769230769230774 45.833333333333336C 59.252884615384616 45.833333333333336 61.38173076923077 40.83333333333333 63.86538461538462 40.83333333333333C 66.34903846153847 40.83333333333333 68.47788461538462 35 70.96153846153847 35C 73.44519230769231 35 75.57403846153846 44.166666666666664 78.0576923076923 44.166666666666664C 80.54134615384615 44.166666666666664 82.67019230769232 32.5 85.15384615384616 32.5C 87.6375 32.5 89.76634615384616 39.166666666666664 92.25 39.166666666666664C 92.25 39.166666666666664 92.25 39.166666666666664 92.25 50M 92.25 39.166666666666664z" pathFrom="M -1 50L -1 50L 7.096153846153847 50L 14.192307692307693 50L 21.28846153846154 50L 28.384615384615387 50L 35.48076923076923 50L 42.57692307692308 50L 49.67307692307693 50L 56.769230769230774 50L 63.86538461538462 50L 70.96153846153847 50L 78.0576923076923 50L 85.15384615384616 50L 92.25 50"></path><path id="SvgjsPath1392" d="M 0 44.166666666666664C 2.483653846153846 44.166666666666664 4.612500000000001 41.666666666666664 7.096153846153847 41.666666666666664C 9.579807692307693 41.666666666666664 11.708653846153847 45.833333333333336 14.192307692307693 45.833333333333336C 16.67596153846154 45.833333333333336 18.804807692307694 32.5 21.28846153846154 32.5C 23.772115384615386 32.5 25.90096153846154 45 28.384615384615387 45C 30.868269230769233 45 32.997115384615384 40.83333333333333 35.48076923076923 40.83333333333333C 37.96442307692308 40.83333333333333 40.09326923076924 45.833333333333336 42.57692307692308 45.833333333333336C 45.06057692307692 45.833333333333336 47.18942307692308 30.833333333333332 49.67307692307693 30.833333333333332C 52.156730769230776 30.833333333333332 54.28557692307693 45.833333333333336 56.769230769230774 45.833333333333336C 59.252884615384616 45.833333333333336 61.38173076923077 40.83333333333333 63.86538461538462 40.83333333333333C 66.34903846153847 40.83333333333333 68.47788461538462 35 70.96153846153847 35C 73.44519230769231 35 75.57403846153846 44.166666666666664 78.0576923076923 44.166666666666664C 80.54134615384615 44.166666666666664 82.67019230769232 32.5 85.15384615384616 32.5C 87.6375 32.5 89.76634615384616 39.166666666666664 92.25 39.166666666666664" fill="none" fill-opacity="1" stroke="#50cd89" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask51pxa9er)" pathTo="M 0 44.166666666666664C 2.483653846153846 44.166666666666664 4.612500000000001 41.666666666666664 7.096153846153847 41.666666666666664C 9.579807692307693 41.666666666666664 11.708653846153847 45.833333333333336 14.192307692307693 45.833333333333336C 16.67596153846154 45.833333333333336 18.804807692307694 32.5 21.28846153846154 32.5C 23.772115384615386 32.5 25.90096153846154 45 28.384615384615387 45C 30.868269230769233 45 32.997115384615384 40.83333333333333 35.48076923076923 40.83333333333333C 37.96442307692308 40.83333333333333 40.09326923076924 45.833333333333336 42.57692307692308 45.833333333333336C 45.06057692307692 45.833333333333336 47.18942307692308 30.833333333333332 49.67307692307693 30.833333333333332C 52.156730769230776 30.833333333333332 54.28557692307693 45.833333333333336 56.769230769230774 45.833333333333336C 59.252884615384616 45.833333333333336 61.38173076923077 40.83333333333333 63.86538461538462 40.83333333333333C 66.34903846153847 40.83333333333333 68.47788461538462 35 70.96153846153847 35C 73.44519230769231 35 75.57403846153846 44.166666666666664 78.0576923076923 44.166666666666664C 80.54134615384615 44.166666666666664 82.67019230769232 32.5 85.15384615384616 32.5C 87.6375 32.5 89.76634615384616 39.166666666666664 92.25 39.166666666666664" pathFrom="M -1 50L -1 50L 7.096153846153847 50L 14.192307692307693 50L 21.28846153846154 50L 28.384615384615387 50L 35.48076923076923 50L 42.57692307692308 50L 49.67307692307693 50L 56.769230769230774 50L 63.86538461538462 50L 70.96153846153847 50L 78.0576923076923 50L 85.15384615384616 50L 92.25 50"></path><g id="SvgjsG1389" class="apexcharts-series-markers-wrap" data:realIndex="0"></g></g><g id="SvgjsG1390" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine1426" x1="0" y1="0" x2="92.25" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1427" x1="0" y1="0" x2="92.25" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1428" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1429" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1430" class="apexcharts-point-annotations"></g></g><g id="SvgjsG1409" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG1382" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 25px;"></div></div></div>
																	</td>
																	<td class="text-end">
																		<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																			<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
																			<span class="svg-icon svg-icon-5 svg-icon-gray-700">
																				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																					<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor"></path>
																					<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor"></path>
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</a>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div class="d-flex align-items-center">
																			<div class="symbol symbol-50px me-3">
																				<img src="../assets/media/stock/600x600/img-40.jpg" class="" alt="">
																			</div>
																			<div class="d-flex justify-content-start flex-column">
																				<a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Avionica</a>
																				<span class="text-gray-400 fw-semibold d-block fs-7">Esther Howard</span>
																			</div>
																		</div>
																	</td>
																	<td class="text-end pe-0">
																		<span class="text-gray-600 fw-bold fs-6">$256,910</span>
																	</td>
																	<td class="text-end pe-0">
																		<!--begin::Label-->
																		<span class="badge badge-light-danger fs-base">
																		<!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
																		<span class="svg-icon svg-icon-5 svg-icon-danger ms-n1">
																			<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																				<rect opacity="0.5" x="11" y="18" width="13" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor"></rect>
																				<path d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z" fill="currentColor"></path>
																			</svg>
																		</span>
																		<!--end::Svg Icon-->0.4%</span>
																		<!--end::Label-->
																	</td>
																	<td class="text-end pe-12">
																		<span class="badge py-3 px-4 fs-7 badge-light-warning">On Hold</span>
																	</td>
																	<td class="text-end pe-0">
																		<div id="kt_table_widget_14_chart_2" class="h-50px mt-n8 pe-7" data-kt-chart-color="danger" style="min-height: 50px;"><div id="apexchartsk3ikzx2s" class="apexcharts-canvas apexchartsk3ikzx2s apexcharts-theme-light" style="width: 92.25px; height: 50px;"><svg id="SvgjsSvg1431" width="92.25" height="50" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1433" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1432"><clipPath id="gridRectMaskk3ikzx2s"><rect id="SvgjsRect1437" width="98.25" height="52" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskk3ikzx2s"></clipPath><clipPath id="nonForecastMaskk3ikzx2s"></clipPath><clipPath id="gridRectMarkerMaskk3ikzx2s"><rect id="SvgjsRect1438" width="96.25" height="54" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG1445" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1446" class="apexcharts-xaxis-texts-g" transform="translate(0, 4)"></g></g><g id="SvgjsG1462" class="apexcharts-grid"><g id="SvgjsG1463" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine1465" x1="0" y1="0" x2="92.25" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1466" x1="0" y1="5" x2="92.25" y2="5" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1467" x1="0" y1="10" x2="92.25" y2="10" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1468" x1="0" y1="15" x2="92.25" y2="15" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1469" x1="0" y1="20" x2="92.25" y2="20" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1470" x1="0" y1="25" x2="92.25" y2="25" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1471" x1="0" y1="30" x2="92.25" y2="30" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1472" x1="0" y1="35" x2="92.25" y2="35" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1473" x1="0" y1="40" x2="92.25" y2="40" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1474" x1="0" y1="45" x2="92.25" y2="45" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1475" x1="0" y1="50" x2="92.25" y2="50" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1464" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine1477" x1="0" y1="50" x2="92.25" y2="50" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine1476" x1="0" y1="1" x2="0" y2="50" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG1439" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1440" class="apexcharts-series" seriesName="NetxProfit" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1443" d="M 0 50L 0 35.83333333333333C 2.483653846153846 35.83333333333333 4.612500000000001 45.833333333333336 7.096153846153847 45.833333333333336C 9.579807692307693 45.833333333333336 11.708653846153847 30.833333333333332 14.192307692307693 30.833333333333332C 16.67596153846154 30.833333333333332 18.804807692307694 48.333333333333336 21.28846153846154 48.333333333333336C 23.772115384615386 48.333333333333336 25.90096153846154 32.5 28.384615384615387 32.5C 30.868269230769233 32.5 32.997115384615384 42.5 35.48076923076923 42.5C 37.96442307692308 42.5 40.09326923076924 35.83333333333333 42.57692307692308 35.83333333333333C 45.06057692307692 35.83333333333333 47.18942307692308 30.833333333333332 49.67307692307693 30.833333333333332C 52.156730769230776 30.833333333333332 54.28557692307693 46.666666666666664 56.769230769230774 46.666666666666664C 59.252884615384616 46.666666666666664 61.38173076923077 30 63.86538461538462 30C 66.34903846153847 30 68.47788461538462 42.5 70.96153846153847 42.5C 73.44519230769231 42.5 75.57403846153846 35.83333333333333 78.0576923076923 35.83333333333333C 80.54134615384615 35.83333333333333 82.67019230769232 32.5 85.15384615384616 32.5C 87.6375 32.5 89.76634615384616 44.166666666666664 92.25 44.166666666666664C 92.25 44.166666666666664 92.25 44.166666666666664 92.25 50M 92.25 44.166666666666664z" fill="rgba(255,255,255,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskk3ikzx2s)" pathTo="M 0 50L 0 35.83333333333333C 2.483653846153846 35.83333333333333 4.612500000000001 45.833333333333336 7.096153846153847 45.833333333333336C 9.579807692307693 45.833333333333336 11.708653846153847 30.833333333333332 14.192307692307693 30.833333333333332C 16.67596153846154 30.833333333333332 18.804807692307694 48.333333333333336 21.28846153846154 48.333333333333336C 23.772115384615386 48.333333333333336 25.90096153846154 32.5 28.384615384615387 32.5C 30.868269230769233 32.5 32.997115384615384 42.5 35.48076923076923 42.5C 37.96442307692308 42.5 40.09326923076924 35.83333333333333 42.57692307692308 35.83333333333333C 45.06057692307692 35.83333333333333 47.18942307692308 30.833333333333332 49.67307692307693 30.833333333333332C 52.156730769230776 30.833333333333332 54.28557692307693 46.666666666666664 56.769230769230774 46.666666666666664C 59.252884615384616 46.666666666666664 61.38173076923077 30 63.86538461538462 30C 66.34903846153847 30 68.47788461538462 42.5 70.96153846153847 42.5C 73.44519230769231 42.5 75.57403846153846 35.83333333333333 78.0576923076923 35.83333333333333C 80.54134615384615 35.83333333333333 82.67019230769232 32.5 85.15384615384616 32.5C 87.6375 32.5 89.76634615384616 44.166666666666664 92.25 44.166666666666664C 92.25 44.166666666666664 92.25 44.166666666666664 92.25 50M 92.25 44.166666666666664z" pathFrom="M -1 50L -1 50L 7.096153846153847 50L 14.192307692307693 50L 21.28846153846154 50L 28.384615384615387 50L 35.48076923076923 50L 42.57692307692308 50L 49.67307692307693 50L 56.769230769230774 50L 63.86538461538462 50L 70.96153846153847 50L 78.0576923076923 50L 85.15384615384616 50L 92.25 50"></path><path id="SvgjsPath1444" d="M 0 35.83333333333333C 2.483653846153846 35.83333333333333 4.612500000000001 45.833333333333336 7.096153846153847 45.833333333333336C 9.579807692307693 45.833333333333336 11.708653846153847 30.833333333333332 14.192307692307693 30.833333333333332C 16.67596153846154 30.833333333333332 18.804807692307694 48.333333333333336 21.28846153846154 48.333333333333336C 23.772115384615386 48.333333333333336 25.90096153846154 32.5 28.384615384615387 32.5C 30.868269230769233 32.5 32.997115384615384 42.5 35.48076923076923 42.5C 37.96442307692308 42.5 40.09326923076924 35.83333333333333 42.57692307692308 35.83333333333333C 45.06057692307692 35.83333333333333 47.18942307692308 30.833333333333332 49.67307692307693 30.833333333333332C 52.156730769230776 30.833333333333332 54.28557692307693 46.666666666666664 56.769230769230774 46.666666666666664C 59.252884615384616 46.666666666666664 61.38173076923077 30 63.86538461538462 30C 66.34903846153847 30 68.47788461538462 42.5 70.96153846153847 42.5C 73.44519230769231 42.5 75.57403846153846 35.83333333333333 78.0576923076923 35.83333333333333C 80.54134615384615 35.83333333333333 82.67019230769232 32.5 85.15384615384616 32.5C 87.6375 32.5 89.76634615384616 44.166666666666664 92.25 44.166666666666664" fill="none" fill-opacity="1" stroke="#f1416c" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskk3ikzx2s)" pathTo="M 0 35.83333333333333C 2.483653846153846 35.83333333333333 4.612500000000001 45.833333333333336 7.096153846153847 45.833333333333336C 9.579807692307693 45.833333333333336 11.708653846153847 30.833333333333332 14.192307692307693 30.833333333333332C 16.67596153846154 30.833333333333332 18.804807692307694 48.333333333333336 21.28846153846154 48.333333333333336C 23.772115384615386 48.333333333333336 25.90096153846154 32.5 28.384615384615387 32.5C 30.868269230769233 32.5 32.997115384615384 42.5 35.48076923076923 42.5C 37.96442307692308 42.5 40.09326923076924 35.83333333333333 42.57692307692308 35.83333333333333C 45.06057692307692 35.83333333333333 47.18942307692308 30.833333333333332 49.67307692307693 30.833333333333332C 52.156730769230776 30.833333333333332 54.28557692307693 46.666666666666664 56.769230769230774 46.666666666666664C 59.252884615384616 46.666666666666664 61.38173076923077 30 63.86538461538462 30C 66.34903846153847 30 68.47788461538462 42.5 70.96153846153847 42.5C 73.44519230769231 42.5 75.57403846153846 35.83333333333333 78.0576923076923 35.83333333333333C 80.54134615384615 35.83333333333333 82.67019230769232 32.5 85.15384615384616 32.5C 87.6375 32.5 89.76634615384616 44.166666666666664 92.25 44.166666666666664" pathFrom="M -1 50L -1 50L 7.096153846153847 50L 14.192307692307693 50L 21.28846153846154 50L 28.384615384615387 50L 35.48076923076923 50L 42.57692307692308 50L 49.67307692307693 50L 56.769230769230774 50L 63.86538461538462 50L 70.96153846153847 50L 78.0576923076923 50L 85.15384615384616 50L 92.25 50"></path><g id="SvgjsG1441" class="apexcharts-series-markers-wrap" data:realIndex="0"></g></g><g id="SvgjsG1442" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine1478" x1="0" y1="0" x2="92.25" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1479" x1="0" y1="0" x2="92.25" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1480" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1481" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1482" class="apexcharts-point-annotations"></g></g><g id="SvgjsG1461" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG1434" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 25px;"></div></div></div>
																	</td>
																	<td class="text-end">
																		<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																			<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
																			<span class="svg-icon svg-icon-5 svg-icon-gray-700">
																				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																					<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor"></path>
																					<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor"></path>
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</a>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div class="d-flex align-items-center">
																			<div class="symbol symbol-50px me-3">
																				<img src="../assets/media/stock/600x600/img-39.jpg" class="" alt="">
																			</div>
																			<div class="d-flex justify-content-start flex-column">
																				<a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Charto CRM</a>
																				<span class="text-gray-400 fw-semibold d-block fs-7">Jenny Wilson</span>
																			</div>
																		</div>
																	</td>
																	<td class="text-end pe-0">
																		<span class="text-gray-600 fw-bold fs-6">$8,220</span>
																	</td>
																	<td class="text-end pe-0">
																		<!--begin::Label-->
																		<span class="badge badge-light-success fs-base">
																		<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
																		<span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
																			<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																				<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor"></rect>
																				<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor"></path>
																			</svg>
																		</span>
																		<!--end::Svg Icon-->9.2%</span>
																		<!--end::Label-->
																	</td>
																	<td class="text-end pe-12">
																		<span class="badge py-3 px-4 fs-7 badge-light-primary">In Process</span>
																	</td>
																	<td class="text-end pe-0">
																		<div id="kt_table_widget_14_chart_3" class="h-50px mt-n8 pe-7" data-kt-chart-color="success" style="min-height: 50px;"><div id="apexchartseew8fd15" class="apexcharts-canvas apexchartseew8fd15 apexcharts-theme-light" style="width: 92.25px; height: 50px;"><svg id="SvgjsSvg1483" width="92.25" height="50" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1485" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1484"><clipPath id="gridRectMaskeew8fd15"><rect id="SvgjsRect1489" width="98.25" height="52" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskeew8fd15"></clipPath><clipPath id="nonForecastMaskeew8fd15"></clipPath><clipPath id="gridRectMarkerMaskeew8fd15"><rect id="SvgjsRect1490" width="96.25" height="54" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG1497" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1498" class="apexcharts-xaxis-texts-g" transform="translate(0, 4)"></g></g><g id="SvgjsG1514" class="apexcharts-grid"><g id="SvgjsG1515" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine1517" x1="0" y1="0" x2="92.25" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1518" x1="0" y1="5" x2="92.25" y2="5" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1519" x1="0" y1="10" x2="92.25" y2="10" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1520" x1="0" y1="15" x2="92.25" y2="15" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1521" x1="0" y1="20" x2="92.25" y2="20" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1522" x1="0" y1="25" x2="92.25" y2="25" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1523" x1="0" y1="30" x2="92.25" y2="30" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1524" x1="0" y1="35" x2="92.25" y2="35" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1525" x1="0" y1="40" x2="92.25" y2="40" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1526" x1="0" y1="45" x2="92.25" y2="45" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1527" x1="0" y1="50" x2="92.25" y2="50" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1516" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine1529" x1="0" y1="50" x2="92.25" y2="50" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine1528" x1="0" y1="1" x2="0" y2="50" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG1491" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1492" class="apexcharts-series" seriesName="NetxProfit" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1495" d="M 0 50L 0 48.333333333333336C 2.483653846153846 48.333333333333336 4.612500000000001 30 7.096153846153847 30C 9.579807692307693 30 11.708653846153847 45.833333333333336 14.192307692307693 45.833333333333336C 16.67596153846154 45.833333333333336 18.804807692307694 35.83333333333333 21.28846153846154 35.83333333333333C 23.772115384615386 35.83333333333333 25.90096153846154 44.166666666666664 28.384615384615387 44.166666666666664C 30.868269230769233 44.166666666666664 32.997115384615384 48.333333333333336 35.48076923076923 48.333333333333336C 37.96442307692308 48.333333333333336 40.09326923076924 40 42.57692307692308 40C 45.06057692307692 40 47.18942307692308 30 49.67307692307693 30C 52.156730769230776 30 54.28557692307693 45.833333333333336 56.769230769230774 45.833333333333336C 59.252884615384616 45.833333333333336 61.38173076923077 30 63.86538461538462 30C 66.34903846153847 30 68.47788461538462 48.333333333333336 70.96153846153847 48.333333333333336C 73.44519230769231 48.333333333333336 75.57403846153846 43.333333333333336 78.0576923076923 43.333333333333336C 80.54134615384615 43.333333333333336 82.67019230769232 40 85.15384615384616 40C 87.6375 40 89.76634615384616 44.166666666666664 92.25 44.166666666666664C 92.25 44.166666666666664 92.25 44.166666666666664 92.25 50M 92.25 44.166666666666664z" fill="rgba(255,255,255,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskeew8fd15)" pathTo="M 0 50L 0 48.333333333333336C 2.483653846153846 48.333333333333336 4.612500000000001 30 7.096153846153847 30C 9.579807692307693 30 11.708653846153847 45.833333333333336 14.192307692307693 45.833333333333336C 16.67596153846154 45.833333333333336 18.804807692307694 35.83333333333333 21.28846153846154 35.83333333333333C 23.772115384615386 35.83333333333333 25.90096153846154 44.166666666666664 28.384615384615387 44.166666666666664C 30.868269230769233 44.166666666666664 32.997115384615384 48.333333333333336 35.48076923076923 48.333333333333336C 37.96442307692308 48.333333333333336 40.09326923076924 40 42.57692307692308 40C 45.06057692307692 40 47.18942307692308 30 49.67307692307693 30C 52.156730769230776 30 54.28557692307693 45.833333333333336 56.769230769230774 45.833333333333336C 59.252884615384616 45.833333333333336 61.38173076923077 30 63.86538461538462 30C 66.34903846153847 30 68.47788461538462 48.333333333333336 70.96153846153847 48.333333333333336C 73.44519230769231 48.333333333333336 75.57403846153846 43.333333333333336 78.0576923076923 43.333333333333336C 80.54134615384615 43.333333333333336 82.67019230769232 40 85.15384615384616 40C 87.6375 40 89.76634615384616 44.166666666666664 92.25 44.166666666666664C 92.25 44.166666666666664 92.25 44.166666666666664 92.25 50M 92.25 44.166666666666664z" pathFrom="M -1 50L -1 50L 7.096153846153847 50L 14.192307692307693 50L 21.28846153846154 50L 28.384615384615387 50L 35.48076923076923 50L 42.57692307692308 50L 49.67307692307693 50L 56.769230769230774 50L 63.86538461538462 50L 70.96153846153847 50L 78.0576923076923 50L 85.15384615384616 50L 92.25 50"></path><path id="SvgjsPath1496" d="M 0 48.333333333333336C 2.483653846153846 48.333333333333336 4.612500000000001 30 7.096153846153847 30C 9.579807692307693 30 11.708653846153847 45.833333333333336 14.192307692307693 45.833333333333336C 16.67596153846154 45.833333333333336 18.804807692307694 35.83333333333333 21.28846153846154 35.83333333333333C 23.772115384615386 35.83333333333333 25.90096153846154 44.166666666666664 28.384615384615387 44.166666666666664C 30.868269230769233 44.166666666666664 32.997115384615384 48.333333333333336 35.48076923076923 48.333333333333336C 37.96442307692308 48.333333333333336 40.09326923076924 40 42.57692307692308 40C 45.06057692307692 40 47.18942307692308 30 49.67307692307693 30C 52.156730769230776 30 54.28557692307693 45.833333333333336 56.769230769230774 45.833333333333336C 59.252884615384616 45.833333333333336 61.38173076923077 30 63.86538461538462 30C 66.34903846153847 30 68.47788461538462 48.333333333333336 70.96153846153847 48.333333333333336C 73.44519230769231 48.333333333333336 75.57403846153846 43.333333333333336 78.0576923076923 43.333333333333336C 80.54134615384615 43.333333333333336 82.67019230769232 40 85.15384615384616 40C 87.6375 40 89.76634615384616 44.166666666666664 92.25 44.166666666666664" fill="none" fill-opacity="1" stroke="#50cd89" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskeew8fd15)" pathTo="M 0 48.333333333333336C 2.483653846153846 48.333333333333336 4.612500000000001 30 7.096153846153847 30C 9.579807692307693 30 11.708653846153847 45.833333333333336 14.192307692307693 45.833333333333336C 16.67596153846154 45.833333333333336 18.804807692307694 35.83333333333333 21.28846153846154 35.83333333333333C 23.772115384615386 35.83333333333333 25.90096153846154 44.166666666666664 28.384615384615387 44.166666666666664C 30.868269230769233 44.166666666666664 32.997115384615384 48.333333333333336 35.48076923076923 48.333333333333336C 37.96442307692308 48.333333333333336 40.09326923076924 40 42.57692307692308 40C 45.06057692307692 40 47.18942307692308 30 49.67307692307693 30C 52.156730769230776 30 54.28557692307693 45.833333333333336 56.769230769230774 45.833333333333336C 59.252884615384616 45.833333333333336 61.38173076923077 30 63.86538461538462 30C 66.34903846153847 30 68.47788461538462 48.333333333333336 70.96153846153847 48.333333333333336C 73.44519230769231 48.333333333333336 75.57403846153846 43.333333333333336 78.0576923076923 43.333333333333336C 80.54134615384615 43.333333333333336 82.67019230769232 40 85.15384615384616 40C 87.6375 40 89.76634615384616 44.166666666666664 92.25 44.166666666666664" pathFrom="M -1 50L -1 50L 7.096153846153847 50L 14.192307692307693 50L 21.28846153846154 50L 28.384615384615387 50L 35.48076923076923 50L 42.57692307692308 50L 49.67307692307693 50L 56.769230769230774 50L 63.86538461538462 50L 70.96153846153847 50L 78.0576923076923 50L 85.15384615384616 50L 92.25 50"></path><g id="SvgjsG1493" class="apexcharts-series-markers-wrap" data:realIndex="0"></g></g><g id="SvgjsG1494" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine1530" x1="0" y1="0" x2="92.25" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1531" x1="0" y1="0" x2="92.25" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1532" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1533" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1534" class="apexcharts-point-annotations"></g></g><g id="SvgjsG1513" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG1486" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 25px;"></div></div></div>
																	</td>
																	<td class="text-end">
																		<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																			<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
																			<span class="svg-icon svg-icon-5 svg-icon-gray-700">
																				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																					<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor"></path>
																					<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor"></path>
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</a>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div class="d-flex align-items-center">
																			<div class="symbol symbol-50px me-3">
																				<img src="../assets/media/stock/600x600/img-47.jpg" class="" alt="">
																			</div>
																			<div class="d-flex justify-content-start flex-column">
																				<a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Tower Hill</a>
																				<span class="text-gray-400 fw-semibold d-block fs-7">Cody Fisher</span>
																			</div>
																		</div>
																	</td>
																	<td class="text-end pe-0">
																		<span class="text-gray-600 fw-bold fs-6">$74,000</span>
																	</td>
																	<td class="text-end pe-0">
																		<!--begin::Label-->
																		<span class="badge badge-light-success fs-base">
																		<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
																		<span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
																			<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																				<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor"></rect>
																				<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor"></path>
																			</svg>
																		</span>
																		<!--end::Svg Icon-->9.2%</span>
																		<!--end::Label-->
																	</td>
																	<td class="text-end pe-12">
																		<span class="badge py-3 px-4 fs-7 badge-light-success">Complated</span>
																	</td>
																	<td class="text-end pe-0">
																		<div id="kt_table_widget_14_chart_4" class="h-50px mt-n8 pe-7" data-kt-chart-color="success" style="min-height: 50px;"><div id="apexchartszllpuv3q" class="apexcharts-canvas apexchartszllpuv3q apexcharts-theme-light" style="width: 92.25px; height: 50px;"><svg id="SvgjsSvg1535" width="92.25" height="50" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1537" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1536"><clipPath id="gridRectMaskzllpuv3q"><rect id="SvgjsRect1541" width="98.25" height="52" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskzllpuv3q"></clipPath><clipPath id="nonForecastMaskzllpuv3q"></clipPath><clipPath id="gridRectMarkerMaskzllpuv3q"><rect id="SvgjsRect1542" width="96.25" height="54" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG1549" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1550" class="apexcharts-xaxis-texts-g" transform="translate(0, 4)"></g></g><g id="SvgjsG1566" class="apexcharts-grid"><g id="SvgjsG1567" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine1569" x1="0" y1="0" x2="92.25" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1570" x1="0" y1="5" x2="92.25" y2="5" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1571" x1="0" y1="10" x2="92.25" y2="10" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1572" x1="0" y1="15" x2="92.25" y2="15" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1573" x1="0" y1="20" x2="92.25" y2="20" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1574" x1="0" y1="25" x2="92.25" y2="25" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1575" x1="0" y1="30" x2="92.25" y2="30" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1576" x1="0" y1="35" x2="92.25" y2="35" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1577" x1="0" y1="40" x2="92.25" y2="40" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1578" x1="0" y1="45" x2="92.25" y2="45" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1579" x1="0" y1="50" x2="92.25" y2="50" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1568" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine1581" x1="0" y1="50" x2="92.25" y2="50" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine1580" x1="0" y1="1" x2="0" y2="50" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG1543" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1544" class="apexcharts-series" seriesName="NetxProfit" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1547" d="M 0 50L 0 30C 2.483653846153846 30 4.612500000000001 47.5 7.096153846153847 47.5C 9.579807692307693 47.5 11.708653846153847 45.833333333333336 14.192307692307693 45.833333333333336C 16.67596153846154 45.833333333333336 18.804807692307694 34.166666666666664 21.28846153846154 34.166666666666664C 23.772115384615386 34.166666666666664 25.90096153846154 47.5 28.384615384615387 47.5C 30.868269230769233 47.5 32.997115384615384 44.166666666666664 35.48076923076923 44.166666666666664C 37.96442307692308 44.166666666666664 40.09326923076924 29.166666666666664 42.57692307692308 29.166666666666664C 45.06057692307692 29.166666666666664 47.18942307692308 38.33333333333333 49.67307692307693 38.33333333333333C 52.156730769230776 38.33333333333333 54.28557692307693 45.833333333333336 56.769230769230774 45.833333333333336C 59.252884615384616 45.833333333333336 61.38173076923077 38.33333333333333 63.86538461538462 38.33333333333333C 66.34903846153847 38.33333333333333 68.47788461538462 48.333333333333336 70.96153846153847 48.333333333333336C 73.44519230769231 48.333333333333336 75.57403846153846 43.333333333333336 78.0576923076923 43.333333333333336C 80.54134615384615 43.333333333333336 82.67019230769232 45.833333333333336 85.15384615384616 45.833333333333336C 87.6375 45.833333333333336 89.76634615384616 35.83333333333333 92.25 35.83333333333333C 92.25 35.83333333333333 92.25 35.83333333333333 92.25 50M 92.25 35.83333333333333z" fill="rgba(255,255,255,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskzllpuv3q)" pathTo="M 0 50L 0 30C 2.483653846153846 30 4.612500000000001 47.5 7.096153846153847 47.5C 9.579807692307693 47.5 11.708653846153847 45.833333333333336 14.192307692307693 45.833333333333336C 16.67596153846154 45.833333333333336 18.804807692307694 34.166666666666664 21.28846153846154 34.166666666666664C 23.772115384615386 34.166666666666664 25.90096153846154 47.5 28.384615384615387 47.5C 30.868269230769233 47.5 32.997115384615384 44.166666666666664 35.48076923076923 44.166666666666664C 37.96442307692308 44.166666666666664 40.09326923076924 29.166666666666664 42.57692307692308 29.166666666666664C 45.06057692307692 29.166666666666664 47.18942307692308 38.33333333333333 49.67307692307693 38.33333333333333C 52.156730769230776 38.33333333333333 54.28557692307693 45.833333333333336 56.769230769230774 45.833333333333336C 59.252884615384616 45.833333333333336 61.38173076923077 38.33333333333333 63.86538461538462 38.33333333333333C 66.34903846153847 38.33333333333333 68.47788461538462 48.333333333333336 70.96153846153847 48.333333333333336C 73.44519230769231 48.333333333333336 75.57403846153846 43.333333333333336 78.0576923076923 43.333333333333336C 80.54134615384615 43.333333333333336 82.67019230769232 45.833333333333336 85.15384615384616 45.833333333333336C 87.6375 45.833333333333336 89.76634615384616 35.83333333333333 92.25 35.83333333333333C 92.25 35.83333333333333 92.25 35.83333333333333 92.25 50M 92.25 35.83333333333333z" pathFrom="M -1 50L -1 50L 7.096153846153847 50L 14.192307692307693 50L 21.28846153846154 50L 28.384615384615387 50L 35.48076923076923 50L 42.57692307692308 50L 49.67307692307693 50L 56.769230769230774 50L 63.86538461538462 50L 70.96153846153847 50L 78.0576923076923 50L 85.15384615384616 50L 92.25 50"></path><path id="SvgjsPath1548" d="M 0 30C 2.483653846153846 30 4.612500000000001 47.5 7.096153846153847 47.5C 9.579807692307693 47.5 11.708653846153847 45.833333333333336 14.192307692307693 45.833333333333336C 16.67596153846154 45.833333333333336 18.804807692307694 34.166666666666664 21.28846153846154 34.166666666666664C 23.772115384615386 34.166666666666664 25.90096153846154 47.5 28.384615384615387 47.5C 30.868269230769233 47.5 32.997115384615384 44.166666666666664 35.48076923076923 44.166666666666664C 37.96442307692308 44.166666666666664 40.09326923076924 29.166666666666664 42.57692307692308 29.166666666666664C 45.06057692307692 29.166666666666664 47.18942307692308 38.33333333333333 49.67307692307693 38.33333333333333C 52.156730769230776 38.33333333333333 54.28557692307693 45.833333333333336 56.769230769230774 45.833333333333336C 59.252884615384616 45.833333333333336 61.38173076923077 38.33333333333333 63.86538461538462 38.33333333333333C 66.34903846153847 38.33333333333333 68.47788461538462 48.333333333333336 70.96153846153847 48.333333333333336C 73.44519230769231 48.333333333333336 75.57403846153846 43.333333333333336 78.0576923076923 43.333333333333336C 80.54134615384615 43.333333333333336 82.67019230769232 45.833333333333336 85.15384615384616 45.833333333333336C 87.6375 45.833333333333336 89.76634615384616 35.83333333333333 92.25 35.83333333333333" fill="none" fill-opacity="1" stroke="#50cd89" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskzllpuv3q)" pathTo="M 0 30C 2.483653846153846 30 4.612500000000001 47.5 7.096153846153847 47.5C 9.579807692307693 47.5 11.708653846153847 45.833333333333336 14.192307692307693 45.833333333333336C 16.67596153846154 45.833333333333336 18.804807692307694 34.166666666666664 21.28846153846154 34.166666666666664C 23.772115384615386 34.166666666666664 25.90096153846154 47.5 28.384615384615387 47.5C 30.868269230769233 47.5 32.997115384615384 44.166666666666664 35.48076923076923 44.166666666666664C 37.96442307692308 44.166666666666664 40.09326923076924 29.166666666666664 42.57692307692308 29.166666666666664C 45.06057692307692 29.166666666666664 47.18942307692308 38.33333333333333 49.67307692307693 38.33333333333333C 52.156730769230776 38.33333333333333 54.28557692307693 45.833333333333336 56.769230769230774 45.833333333333336C 59.252884615384616 45.833333333333336 61.38173076923077 38.33333333333333 63.86538461538462 38.33333333333333C 66.34903846153847 38.33333333333333 68.47788461538462 48.333333333333336 70.96153846153847 48.333333333333336C 73.44519230769231 48.333333333333336 75.57403846153846 43.333333333333336 78.0576923076923 43.333333333333336C 80.54134615384615 43.333333333333336 82.67019230769232 45.833333333333336 85.15384615384616 45.833333333333336C 87.6375 45.833333333333336 89.76634615384616 35.83333333333333 92.25 35.83333333333333" pathFrom="M -1 50L -1 50L 7.096153846153847 50L 14.192307692307693 50L 21.28846153846154 50L 28.384615384615387 50L 35.48076923076923 50L 42.57692307692308 50L 49.67307692307693 50L 56.769230769230774 50L 63.86538461538462 50L 70.96153846153847 50L 78.0576923076923 50L 85.15384615384616 50L 92.25 50"></path><g id="SvgjsG1545" class="apexcharts-series-markers-wrap" data:realIndex="0"></g></g><g id="SvgjsG1546" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine1582" x1="0" y1="0" x2="92.25" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1583" x1="0" y1="0" x2="92.25" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1584" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1585" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1586" class="apexcharts-point-annotations"></g></g><g id="SvgjsG1565" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG1538" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 25px;"></div></div></div>
																	</td>
																	<td class="text-end">
																		<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																			<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
																			<span class="svg-icon svg-icon-5 svg-icon-gray-700">
																				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																					<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor"></path>
																					<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor"></path>
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</a>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div class="d-flex align-items-center">
																			<div class="symbol symbol-50px me-3">
																				<img src="../assets/media/stock/600x600/img-48.jpg" class="" alt="">
																			</div>
																			<div class="d-flex justify-content-start flex-column">
																				<a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">9 Degree</a>
																				<span class="text-gray-400 fw-semibold d-block fs-7">Savannah Nguyen</span>
																			</div>
																		</div>
																	</td>
																	<td class="text-end pe-0">
																		<span class="text-gray-600 fw-bold fs-6">$183,300</span>
																	</td>
																	<td class="text-end pe-0">
																		<!--begin::Label-->
																		<span class="badge badge-light-danger fs-base">
																		<!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
																		<span class="svg-icon svg-icon-5 svg-icon-danger ms-n1">
																			<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																				<rect opacity="0.5" x="11" y="18" width="13" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor"></rect>
																				<path d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z" fill="currentColor"></path>
																			</svg>
																		</span>
																		<!--end::Svg Icon-->0.4%</span>
																		<!--end::Label-->
																	</td>
																	<td class="text-end pe-12">
																		<span class="badge py-3 px-4 fs-7 badge-light-primary">In Process</span>
																	</td>
																	<td class="text-end pe-0">
																		<div id="kt_table_widget_14_chart_5" class="h-50px mt-n8 pe-7" data-kt-chart-color="danger" style="min-height: 50px;"><div id="apexcharts4ax4w5oa" class="apexcharts-canvas apexcharts4ax4w5oa apexcharts-theme-light" style="width: 92.25px; height: 50px;"><svg id="SvgjsSvg1587" width="92.25" height="50" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1589" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1588"><clipPath id="gridRectMask4ax4w5oa"><rect id="SvgjsRect1593" width="98.25" height="52" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMask4ax4w5oa"></clipPath><clipPath id="nonForecastMask4ax4w5oa"></clipPath><clipPath id="gridRectMarkerMask4ax4w5oa"><rect id="SvgjsRect1594" width="96.25" height="54" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG1601" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1602" class="apexcharts-xaxis-texts-g" transform="translate(0, 4)"></g></g><g id="SvgjsG1618" class="apexcharts-grid"><g id="SvgjsG1619" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine1621" x1="0" y1="0" x2="92.25" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1622" x1="0" y1="5" x2="92.25" y2="5" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1623" x1="0" y1="10" x2="92.25" y2="10" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1624" x1="0" y1="15" x2="92.25" y2="15" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1625" x1="0" y1="20" x2="92.25" y2="20" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1626" x1="0" y1="25" x2="92.25" y2="25" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1627" x1="0" y1="30" x2="92.25" y2="30" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1628" x1="0" y1="35" x2="92.25" y2="35" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1629" x1="0" y1="40" x2="92.25" y2="40" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1630" x1="0" y1="45" x2="92.25" y2="45" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1631" x1="0" y1="50" x2="92.25" y2="50" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1620" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine1633" x1="0" y1="50" x2="92.25" y2="50" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine1632" x1="0" y1="1" x2="0" y2="50" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG1595" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1596" class="apexcharts-series" seriesName="NetxProfit" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1599" d="M 0 50L 0 47.5C 2.483653846153846 47.5 4.612500000000001 30.833333333333332 7.096153846153847 30.833333333333332C 9.579807692307693 30.833333333333332 11.708653846153847 49.166666666666664 14.192307692307693 49.166666666666664C 16.67596153846154 49.166666666666664 18.804807692307694 34.166666666666664 21.28846153846154 34.166666666666664C 23.772115384615386 34.166666666666664 25.90096153846154 47.5 28.384615384615387 47.5C 30.868269230769233 47.5 32.997115384615384 35.83333333333333 35.48076923076923 35.83333333333333C 37.96442307692308 35.83333333333333 40.09326923076924 47.5 42.57692307692308 47.5C 45.06057692307692 47.5 47.18942307692308 42.5 49.67307692307693 42.5C 52.156730769230776 42.5 54.28557692307693 29.166666666666664 56.769230769230774 29.166666666666664C 59.252884615384616 29.166666666666664 61.38173076923077 46.666666666666664 63.86538461538462 46.666666666666664C 66.34903846153847 46.666666666666664 68.47788461538462 48.333333333333336 70.96153846153847 48.333333333333336C 73.44519230769231 48.333333333333336 75.57403846153846 35 78.0576923076923 35C 80.54134615384615 35 82.67019230769232 29.166666666666664 85.15384615384616 29.166666666666664C 87.6375 29.166666666666664 89.76634615384616 47.5 92.25 47.5C 92.25 47.5 92.25 47.5 92.25 50M 92.25 47.5z" fill="rgba(255,255,255,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask4ax4w5oa)" pathTo="M 0 50L 0 47.5C 2.483653846153846 47.5 4.612500000000001 30.833333333333332 7.096153846153847 30.833333333333332C 9.579807692307693 30.833333333333332 11.708653846153847 49.166666666666664 14.192307692307693 49.166666666666664C 16.67596153846154 49.166666666666664 18.804807692307694 34.166666666666664 21.28846153846154 34.166666666666664C 23.772115384615386 34.166666666666664 25.90096153846154 47.5 28.384615384615387 47.5C 30.868269230769233 47.5 32.997115384615384 35.83333333333333 35.48076923076923 35.83333333333333C 37.96442307692308 35.83333333333333 40.09326923076924 47.5 42.57692307692308 47.5C 45.06057692307692 47.5 47.18942307692308 42.5 49.67307692307693 42.5C 52.156730769230776 42.5 54.28557692307693 29.166666666666664 56.769230769230774 29.166666666666664C 59.252884615384616 29.166666666666664 61.38173076923077 46.666666666666664 63.86538461538462 46.666666666666664C 66.34903846153847 46.666666666666664 68.47788461538462 48.333333333333336 70.96153846153847 48.333333333333336C 73.44519230769231 48.333333333333336 75.57403846153846 35 78.0576923076923 35C 80.54134615384615 35 82.67019230769232 29.166666666666664 85.15384615384616 29.166666666666664C 87.6375 29.166666666666664 89.76634615384616 47.5 92.25 47.5C 92.25 47.5 92.25 47.5 92.25 50M 92.25 47.5z" pathFrom="M -1 50L -1 50L 7.096153846153847 50L 14.192307692307693 50L 21.28846153846154 50L 28.384615384615387 50L 35.48076923076923 50L 42.57692307692308 50L 49.67307692307693 50L 56.769230769230774 50L 63.86538461538462 50L 70.96153846153847 50L 78.0576923076923 50L 85.15384615384616 50L 92.25 50"></path><path id="SvgjsPath1600" d="M 0 47.5C 2.483653846153846 47.5 4.612500000000001 30.833333333333332 7.096153846153847 30.833333333333332C 9.579807692307693 30.833333333333332 11.708653846153847 49.166666666666664 14.192307692307693 49.166666666666664C 16.67596153846154 49.166666666666664 18.804807692307694 34.166666666666664 21.28846153846154 34.166666666666664C 23.772115384615386 34.166666666666664 25.90096153846154 47.5 28.384615384615387 47.5C 30.868269230769233 47.5 32.997115384615384 35.83333333333333 35.48076923076923 35.83333333333333C 37.96442307692308 35.83333333333333 40.09326923076924 47.5 42.57692307692308 47.5C 45.06057692307692 47.5 47.18942307692308 42.5 49.67307692307693 42.5C 52.156730769230776 42.5 54.28557692307693 29.166666666666664 56.769230769230774 29.166666666666664C 59.252884615384616 29.166666666666664 61.38173076923077 46.666666666666664 63.86538461538462 46.666666666666664C 66.34903846153847 46.666666666666664 68.47788461538462 48.333333333333336 70.96153846153847 48.333333333333336C 73.44519230769231 48.333333333333336 75.57403846153846 35 78.0576923076923 35C 80.54134615384615 35 82.67019230769232 29.166666666666664 85.15384615384616 29.166666666666664C 87.6375 29.166666666666664 89.76634615384616 47.5 92.25 47.5" fill="none" fill-opacity="1" stroke="#f1416c" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask4ax4w5oa)" pathTo="M 0 47.5C 2.483653846153846 47.5 4.612500000000001 30.833333333333332 7.096153846153847 30.833333333333332C 9.579807692307693 30.833333333333332 11.708653846153847 49.166666666666664 14.192307692307693 49.166666666666664C 16.67596153846154 49.166666666666664 18.804807692307694 34.166666666666664 21.28846153846154 34.166666666666664C 23.772115384615386 34.166666666666664 25.90096153846154 47.5 28.384615384615387 47.5C 30.868269230769233 47.5 32.997115384615384 35.83333333333333 35.48076923076923 35.83333333333333C 37.96442307692308 35.83333333333333 40.09326923076924 47.5 42.57692307692308 47.5C 45.06057692307692 47.5 47.18942307692308 42.5 49.67307692307693 42.5C 52.156730769230776 42.5 54.28557692307693 29.166666666666664 56.769230769230774 29.166666666666664C 59.252884615384616 29.166666666666664 61.38173076923077 46.666666666666664 63.86538461538462 46.666666666666664C 66.34903846153847 46.666666666666664 68.47788461538462 48.333333333333336 70.96153846153847 48.333333333333336C 73.44519230769231 48.333333333333336 75.57403846153846 35 78.0576923076923 35C 80.54134615384615 35 82.67019230769232 29.166666666666664 85.15384615384616 29.166666666666664C 87.6375 29.166666666666664 89.76634615384616 47.5 92.25 47.5" pathFrom="M -1 50L -1 50L 7.096153846153847 50L 14.192307692307693 50L 21.28846153846154 50L 28.384615384615387 50L 35.48076923076923 50L 42.57692307692308 50L 49.67307692307693 50L 56.769230769230774 50L 63.86538461538462 50L 70.96153846153847 50L 78.0576923076923 50L 85.15384615384616 50L 92.25 50"></path><g id="SvgjsG1597" class="apexcharts-series-markers-wrap" data:realIndex="0"></g></g><g id="SvgjsG1598" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine1634" x1="0" y1="0" x2="92.25" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1635" x1="0" y1="0" x2="92.25" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1636" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1637" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1638" class="apexcharts-point-annotations"></g></g><g id="SvgjsG1617" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG1590" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 25px;"></div></div></div>
																	</td>
																	<td class="text-end">
																		<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																			<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
																			<span class="svg-icon svg-icon-5 svg-icon-gray-700">
																				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																					<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor"></path>
																					<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor"></path>
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</a>
																	</td>
																</tr>
															</tbody>
															<!--end::Table body-->
														</table>
													</div>
													<!--end::Table-->
												</div>
												<!--end: Card Body-->
											</div>
											<!--end::Tables widget 14-->
										</div>
										<!--end::Col-->
									</div>
									<!--end::Row-->
								</div>
								<!--end::Content container-->
							</div>
							<!--end::Content-->
						</div>
						<!--end::Content wrapper-->
					</div>
@endsection
