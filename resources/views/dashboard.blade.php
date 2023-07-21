{{-- @extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="page-title-container">
            <h1 class="mb-0 pb-0 display-4" id="title">Analytic Dashboard</h1>
            <nav class="breadcrumb-container d-inline-block" aria-label="breadcrumb">
                <ul class="breadcrumb pt-0">
                    <li class="breadcrumb-item"><a href="Dashboards.Default.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="Dashboards.html">Dashboards</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12 col-lg-6">
        <div class="d-flex">
            <div class="dropdown-as-select me-3" data-setactive="false" data-childselector="span">
                <a class="pe-0 pt-0 align-top lh-1 dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false" aria-haspopup="true">
                    <span class="small-title"></span>
                </a>
                <div class="dropdown-menu font-standard">
                    <div class="nav flex-column" role="tablist">
                        <a class="active dropdown-item text-medium" href="#" aria-selected="true" role="tab">Today's</a>
                        <a class="dropdown-item text-medium" href="#" aria-selected="false" role="tab">Weekly</a>
                        <a class="dropdown-item text-medium" href="#" aria-selected="false" role="tab">Monthly</a>
                        <a class="dropdown-item text-medium" href="#" aria-selected="false" role="tab">Yearly</a>
                    </div>
                </div>
            </div>
            <h2 class="small-title">Stats</h2>
        </div>
        <div class="mb-5">
            <div class="row g-2">
                <div class="col-12 col-sm-6 col-lg-6">
                    <div class="card sh-11 hover-scale-up cursor-pointer">
                        <div class="h-100 row g-0 card-body align-items-center py-3">
                            <div class="col-auto pe-3">
                                <div class="bg-gradient-light sh-5 sw-5 rounded-xl d-flex justify-content-center align-items-center">
                                    <i data-acorn-icon="navigate-diagonal" class="text-white"></i>
                                </div>
                            </div>
                            <div class="col">
                                <div class="row gx-2 d-flex align-content-center">
                                    <div class="col-12 col-xl d-flex">
                                        <div class="d-flex align-items-center lh-1-25">Shipped Orders</div>
                                    </div>
                                    <div class="col-12 col-xl-auto">
                                        <div class="cta-2 text-primary">22</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-6">
                    <div class="card sh-11 hover-scale-up cursor-pointer">
                        <div class="h-100 row g-0 card-body align-items-center py-3">
                            <div class="col-auto pe-3">
                                <div class="bg-gradient-light sh-5 sw-5 rounded-xl d-flex justify-content-center align-items-center">
                                    <i data-acorn-icon="check" class="text-white"></i>
                                </div>
                            </div>
                            <div class="col">
                                <div class="row gx-2 d-flex align-content-center">
                                    <div class="col-12 col-xl d-flex">
                                        <div class="d-flex align-items-center lh-1-25">Delivered Orders</div>
                                    </div>
                                    <div class="col-12 col-xl-auto">
                                        <div class="cta-2 text-primary">35</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-6">
                    <div class="card sh-11 hover-scale-up cursor-pointer">
                        <div class="h-100 row g-0 card-body align-items-center py-3">
                            <div class="col-auto pe-3">
                                <div class="bg-gradient-light sh-5 sw-5 rounded-xl d-flex justify-content-center align-items-center">
                                    <i data-acorn-icon="alarm" class="text-white"></i>
                                </div>
                            </div>
                            <div class="col">
                                <div class="row gx-2 d-flex align-content-center">
                                    <div class="col-12 col-xl d-flex">
                                        <div class="d-flex align-items-center lh-1-25">Pending Orders</div>
                                    </div>
                                    <div class="col-12 col-xl-auto">
                                        <div class="cta-2 text-primary">14</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-6">
                    <div class="card sh-11 hover-scale-up cursor-pointer">
                        <div class="h-100 row g-0 card-body align-items-center py-3">
                            <div class="col-auto pe-3">
                                <div class="bg-gradient-light sh-5 sw-5 rounded-xl d-flex justify-content-center align-items-center">
                                    <i data-acorn-icon="sync-horizontal" class="text-white"></i>
                                </div>
                            </div>
                            <div class="col">
                                <div class="row gx-2 d-flex align-content-center">
                                    <div class="col-12 col-xl d-flex">
                                        <div class="d-flex align-items-center lh-1-25">Unconfirmed Orders</div>
                                    </div>
                                    <div class="col-12 col-xl-auto">
                                        <div class="cta-2 text-primary">3</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h2 class="small-title">Sales</h2>
        <div class="card mb-5 sh-40">
            <div class="card-body">
                <div class="custom-legend-container mb-3 pb-3 d-flex flex-row"></div>
                <template class="custom-legend-item">
                    <a href="#" class="d-flex flex-row g-0 align-items-center me-5">
                        <div class="pe-2">
                            <div class="icon-container border sh-5 sw-5 rounded-xl d-flex justify-content-center align-items-center">
                                <i class="icon"></i>
                            </div>
                        </div>
                        <div>
                            <div class="text p mb-0 d-flex align-items-center text-small text-muted">Title</div>
                            <div class="value cta-4">Value</div>
                        </div>
                    </a>
                </template>
                <div class="sh-25">
                    <canvas id="customLegendBarChart"></canvas>
                    <div class="custom-tooltip position-absolute bg-foreground rounded-md border border-separator pe-none p-3 d-flex z-index-1 align-items-center opacity-0 basic-transform-transition">
                        <div class="icon-container border d-flex align-middle align-items-center justify-content-center align-self-center rounded-xl sh-5 sw-5 rounded-xl me-3">
                            <span class="icon"></span>
                        </div>
                        <div>
                            <span class="text d-flex align-middle text-muted align-items-center text-small">Bread</span>
                            <span class="value d-flex align-middle align-items-center cta-4">300</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-6 mb-5">
        <div class="d-flex justify-content-between">
            <h2 class="small-title">Stocks</h2>
            <button class="btn btn-icon btn-icon-end btn-xs btn-background-alternate p-0 text-small" type="button">
                <span class="align-bottom">View More</span>
                <i data-acorn-icon="chevron-right" class="align-middle" data-acorn-size="12"></i>
            </button>
        </div>
        <div class="scroll-out">
            <div class="scroll-by-count" data-count="8">
                <div class="card mb-2 sh-10 sh-md-8">
                    <div class="card-body pt-0 pb-0 h-100">
                        <div class="row g-0 h-100 align-content-center">
                            <div class="col-12 col-md-5 d-flex align-items-center mb-2 mb-md-0">
                                <a href="Pages.Portfolio.Detail.html" class="body-link text-truncate">Barmbrack</a>
                            </div>
                            <div class="col-4 col-md-2 d-flex align-items-center text-muted text-medium mb-1 mb-md-0">
                                <span class="badge bg-outline-tertiary me-1">STOCK</span>
                            </div>
                            <div class="col-4 col-md-3 d-flex align-items-center text-medium text-danger justify-content-center">
                                <i data-acorn-icon="arrow-bottom" data-acorn-size="14" class="me-1"></i>
                                <span class="text-medium">-18.4%</span>
                            </div>
                            <div class="col-4 col-md-2 d-flex align-items-center justify-content-end text-muted text-medium">
                                <span>$ 3.25</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-2 sh-10 sh-md-8">
                    <div class="card-body pt-0 pb-0 h-100">
                        <div class="row g-0 h-100 align-content-center">
                            <div class="col-12 col-md-5 d-flex align-items-center mb-2 mb-md-0">
                                <a href="Pages.Portfolio.Detail.html" class="body-link text-truncate">Cheesymite Scroll</a>
                            </div>
                            <div class="col-4 col-md-2 d-flex align-items-center text-muted text-medium mb-1 mb-md-0">
                                <span class="badge bg-outline-tertiary me-1">STOCK</span>
                            </div>
                            <div class="col-4 col-md-3 d-flex align-items-center text-medium text-danger justify-content-center">
                                <i data-acorn-icon="arrow-bottom" data-acorn-size="14" class="me-1"></i>
                                <span class="text-medium">-13.4%</span>
                            </div>
                            <div class="col-4 col-md-2 d-flex align-items-center justify-content-end text-muted text-medium">
                                <span>$ 4.50</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-2 sh-10 sh-md-8">
                    <div class="card-body pt-0 pb-0 h-100">
                        <div class="row g-0 h-100 align-content-center">
                            <div class="col-12 col-md-5 d-flex align-items-center mb-2 mb-md-0">
                                <a href="Pages.Portfolio.Detail.html" class="body-link text-truncate">Cholermüs</a>
                            </div>
                            <div class="col-4 col-md-2 d-flex align-items-center text-muted text-medium mb-1 mb-md-0">
                                <span class="badge bg-outline-primary me-1">SALE</span>
                            </div>
                            <div class="col-4 col-md-3 d-flex align-items-center text-medium text-success justify-content-center">
                                <i data-acorn-icon="arrow-top" data-acorn-size="14" class="me-1"></i>
                                <span class="text-medium">+9.7%</span>
                            </div>
                            <div class="col-4 col-md-2 d-flex align-items-center justify-content-end text-muted text-medium">
                                <span>$ 1.75</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-2 sh-10 sh-md-8">
                    <div class="card-body pt-0 pb-0 h-100">
                        <div class="row g-0 h-100 align-content-center">
                            <div class="col-12 col-md-5 d-flex align-items-center mb-2 mb-md-0">
                                <a href="Pages.Portfolio.Detail.html" class="body-link text-truncate">Ruisreikäleipä</a>
                            </div>
                            <div class="col-4 col-md-2 d-flex align-items-center text-muted text-medium mb-1 mb-md-0">
                                <span class="badge bg-outline-primary me-1">SALE</span>
                            </div>
                            <div class="col-4 col-md-3 d-flex align-items-center text-medium text-success justify-content-center">
                                <i data-acorn-icon="arrow-top" data-acorn-size="14" class="me-1"></i>
                                <span class="text-medium">+5.3%</span>
                            </div>
                            <div class="col-4 col-md-2 d-flex align-items-center justify-content-end text-muted text-medium">
                                <span>$ 3.00</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-2 sh-10 sh-md-8">
                    <div class="card-body pt-0 pb-0 h-100">
                        <div class="row g-0 h-100 align-content-center">
                            <div class="col-12 col-md-5 d-flex align-items-center mb-2 mb-md-0">
                                <a href="Pages.Portfolio.Detail.html" class="body-link text-truncate">Bagel</a>
                            </div>
                            <div class="col-4 col-md-2 d-flex align-items-center text-muted text-medium mb-1 mb-md-0">
                                <span class="badge bg-outline-tertiary me-1">STOCK</span>
                            </div>
                            <div class="col-4 col-md-3 d-flex align-items-center text-medium text-danger justify-content-center">
                                <i data-acorn-icon="arrow-bottom" data-acorn-size="14" class="me-1"></i>
                                <span class="text-medium">-2.3%</span>
                            </div>
                            <div class="col-4 col-md-2 d-flex align-items-center justify-content-end text-muted text-medium">
                                <span>$ 4.25</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-2 sh-10 sh-md-8">
                    <div class="card-body pt-0 pb-0 h-100">
                        <div class="row g-0 h-100 align-content-center">
                            <div class="col-12 col-md-5 d-flex align-items-center mb-2 mb-md-0">
                                <a href="Pages.Portfolio.Detail.html" class="body-link text-truncate">Buccellato di Lucca</a>
                            </div>
                            <div class="col-4 col-md-2 d-flex align-items-center text-muted text-medium mb-1 mb-md-0">
                                <span class="badge bg-outline-secondary me-1">TREND</span>
                            </div>
                            <div class="col-4 col-md-3 d-flex align-items-center text-medium text-danger justify-content-center">
                                <i data-acorn-icon="arrow-bottom" data-acorn-size="14" class="me-1"></i>
                                <span class="text-medium">-5.3%</span>
                            </div>
                            <div class="col-4 col-md-2 d-flex align-items-center justify-content-end text-muted text-medium">
                                <span>$ 3.75</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-2 sh-10 sh-md-8">
                    <div class="card-body pt-0 pb-0 h-100">
                        <div class="row g-0 h-100 align-content-center">
                            <div class="col-12 col-md-5 d-flex align-items-center mb-2 mb-md-0">
                                <a href="Pages.Portfolio.Detail.html" class="body-link text-truncate">Chapati</a>
                            </div>
                            <div class="col-4 col-md-2 d-flex align-items-center text-muted text-medium mb-1 mb-md-0">
                                <span class="badge bg-outline-primary me-1">SALE</span>
                            </div>
                            <div class="col-4 col-md-3 d-flex align-items-center text-medium text-success justify-content-center">
                                <i data-acorn-icon="arrow-top" data-acorn-size="14" class="me-1"></i>
                                <span class="text-medium">+7.1%</span>
                            </div>
                            <div class="col-4 col-md-2 d-flex align-items-center justify-content-end text-muted text-medium">
                                <span>$ 1.85</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-2 sh-10 sh-md-8">
                    <div class="card-body pt-0 pb-0 h-100">
                        <div class="row g-0 h-100 align-content-center">
                            <div class="col-12 col-md-5 d-flex align-items-center mb-2 mb-md-0">
                                <a href="Pages.Portfolio.Detail.html" class="body-link text-truncate">Pullman Loaf</a>
                            </div>
                            <div class="col-4 col-md-2 d-flex align-items-center text-muted text-medium mb-1 mb-md-0">
                                <span class="badge bg-outline-secondary me-1">TREND</span>
                            </div>
                            <div class="col-4 col-md-3 d-flex align-items-center text-medium text-success justify-content-center">
                                <i data-acorn-icon="arrow-top" data-acorn-size="14" class="me-1"></i>
                                <span class="text-medium">+2.3%</span>
                            </div>
                            <div class="col-4 col-md-2 d-flex align-items-center justify-content-end text-muted text-medium">
                                <span>$ 2.25</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-2 sh-10 sh-md-8">
                    <div class="card-body pt-0 pb-0 h-100">
                        <div class="row g-0 h-100 align-content-center">
                            <div class="col-12 col-md-5 d-flex align-items-center mb-2 mb-md-0">
                                <a href="Pages.Portfolio.Detail.html" class="body-link text-truncate">Chapati</a>
                            </div>
                            <div class="col-4 col-md-2 d-flex align-items-center text-muted text-medium mb-1 mb-md-0">
                                <span class="badge bg-outline-primary me-1">SALE</span>
                            </div>
                            <div class="col-4 col-md-3 d-flex align-items-center text-medium text-success justify-content-center">
                                <i data-acorn-icon="arrow-top" data-acorn-size="14" class="me-1"></i>
                                <span class="text-medium">+7.1%</span>
                            </div>
                            <div class="col-4 col-md-2 d-flex align-items-center justify-content-end text-muted text-medium">
                                <span>$ 1.85</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-2 sh-10 sh-md-8">
                    <div class="card-body pt-0 pb-0 h-100">
                        <div class="row g-0 h-100 align-content-center">
                            <div class="col-12 col-md-5 d-flex align-items-center mb-2 mb-md-0">
                                <a href="Pages.Portfolio.Detail.html" class="body-link text-truncate">Fougasse</a>
                            </div>
                            <div class="col-4 col-md-2 d-flex align-items-center text-muted text-medium mb-1 mb-md-0">
                                <span class="badge bg-outline-primary me-1">SALE</span>
                            </div>
                            <div class="col-4 col-md-3 d-flex align-items-center text-medium text-success justify-content-center">
                                <i data-acorn-icon="arrow-top" data-acorn-size="14" class="me-1"></i>
                                <span class="text-medium">+2.3%</span>
                            </div>
                            <div class="col-4 col-md-2 d-flex align-items-center justify-content-end text-muted text-medium">
                                <span>$ 2.25</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-2 sh-10 sh-md-8">
                    <div class="card-body pt-0 pb-0 h-100">
                        <div class="row g-0 h-100 align-content-center">
                            <div class="col-12 col-md-5 d-flex align-items-center mb-2 mb-md-0">
                                <a href="Pages.Portfolio.Detail.html" class="body-link text-truncate">Biscotti</a>
                            </div>
                            <div class="col-4 col-md-2 d-flex align-items-center text-muted text-medium mb-1 mb-md-0">
                                <span class="badge bg-outline-secondary me-1">TREND</span>
                            </div>
                            <div class="col-4 col-md-3 d-flex align-items-center text-medium text-success justify-content-center">
                                <i data-acorn-icon="arrow-top" data-acorn-size="14" class="me-1"></i>
                                <span class="text-medium">+2.3%</span>
                            </div>
                            <div class="col-4 col-md-2 d-flex align-items-center justify-content-end text-muted text-medium">
                                <span>$ 2.25</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xl-6 mb-5">
        <h2 class="small-title">Logs</h2>
        <div class="card sh-35 h-xl-100-card">
            <div class="card-body scroll-out h-100">
                <div class="scroll h-100">
                    <div class="row g-0 mb-2">
                        <div class="col-auto">
                            <div class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                                <div class="sh-3">
                                    <i data-acorn-icon="circle" class="text-primary align-top"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                                <div class="d-flex flex-column">
                                    <div class="text-alternate mt-n1 lh-1-25">New user registiration</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                                <div class="text-muted ms-2 mt-n1 lh-1-25">18 Dec</div>
                            </div>
                        </div>
                    </div>
                    <div class="row g-0 mb-2">
                        <div class="col-auto">
                            <div class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                                <div class="sh-3">
                                    <i data-acorn-icon="circle" class="text-primary align-top"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                                <div class="d-flex flex-column">
                                    <div class="text-alternate mt-n1 lh-1-25">3 new product added</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                                <div class="text-muted ms-2 mt-n1 lh-1-25">18 Dec</div>
                            </div>
                        </div>
                    </div>
                    <div class="row g-0 mb-2">
                        <div class="col-auto">
                            <div class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                                <div class="sh-3">
                                    <i data-acorn-icon="square" class="text-secondary align-top"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                                <div class="d-flex flex-column">
                                    <div class="text-alternate mt-n1 lh-1-25">
                                        Product out of stock:
                                        <a href="#" class="alternate-link underline-link">Breadstick</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                                <div class="text-muted ms-2 mt-n1 lh-1-25">16 Dec</div>
                            </div>
                        </div>
                    </div>
                    <div class="row g-0 mb-2">
                        <div class="col-auto">
                            <div class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                                <div class="sh-3">
                                    <i data-acorn-icon="square" class="text-secondary align-top"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                                <div class="d-flex flex-column">
                                    <div class="text-alternate mt-n1 lh-1-25">Category page returned an error</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                                <div class="text-muted ms-2 mt-n1 lh-1-25">15 Dec</div>
                            </div>
                        </div>
                    </div>
                    <div class="row g-0 mb-2">
                        <div class="col-auto">
                            <div class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                                <div class="sh-3">
                                    <i data-acorn-icon="circle" class="text-primary align-top"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                                <div class="d-flex flex-column">
                                    <div class="text-alternate mt-n1 lh-1-25">14 products added</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                                <div class="text-muted ms-2 mt-n1 lh-1-25">15 Dec</div>
                            </div>
                        </div>
                    </div>
                    <div class="row g-0 mb-2">
                        <div class="col-auto">
                            <div class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                                <div class="sh-3">
                                    <i data-acorn-icon="hexagon" class="text-tertiary align-top"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                                <div class="d-flex flex-column">
                                    <div class="text-alternate mt-n1 lh-1-25">
                                        New sale:
                                        <a href="#" class="alternate-link underline-link">Steirer Brot</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                                <div class="text-muted ms-2 mt-n1 lh-1-25">15 Dec</div>
                            </div>
                        </div>
                    </div>
                    <div class="row g-0 mb-2">
                        <div class="col-auto">
                            <div class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                                <div class="sh-3">
                                    <i data-acorn-icon="hexagon" class="text-tertiary align-top"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                                <div class="d-flex flex-column">
                                    <div class="text-alternate mt-n1 lh-1-25">
                                        New sale:
                                        <a href="#" class="alternate-link underline-link">Soda Bread</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                                <div class="text-muted ms-2 mt-n1 lh-1-25">15 Dec</div>
                            </div>
                        </div>
                    </div>
                    <div class="row g-0 mb-2">
                        <div class="col-auto">
                            <div class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                                <div class="sh-3">
                                    <i data-acorn-icon="triangle" class="text-warning align-top"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                                <div class="d-flex flex-column">
                                    <div class="text-alternate mt-n1 lh-1-25">Recived a support ticket</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                                <div class="text-muted ms-2 mt-n1 lh-1-25">14 Dec</div>
                            </div>
                        </div>
                    </div>
                    <div class="row g-0 mb-2">
                        <div class="col-auto">
                            <div class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                                <div class="sh-3">
                                    <i data-acorn-icon="hexagon" class="text-tertiary align-top"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                                <div class="d-flex flex-column">
                                    <div class="text-alternate mt-n1 lh-1-25">
                                        New sale:
                                        <a href="#" class="alternate-link underline-link">Cholermüs</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                                <div class="text-muted ms-2 mt-n1 lh-1-25">13 Dec</div>
                            </div>
                        </div>
                    </div>
                    <div class="row g-0 mb-2">
                        <div class="col-auto">
                            <div class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                                <div class="sh-3">
                                    <i data-acorn-icon="hexagon" class="text-tertiary align-top"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                                <div class="d-flex flex-column">
                                    <div class="text-alternate mt-n1 lh-1-25">
                                        New sale:
                                        <a href="#" class="alternate-link underline-link">Bazlama</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                                <div class="text-muted ms-2 mt-n1 lh-1-25">13 Dec</div>
                            </div>
                        </div>
                    </div>
                    <div class="row g-0 mb-2">
                        <div class="col-auto">
                            <div class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                                <div class="sh-3">
                                    <i data-acorn-icon="triangle" class="text-warning align-top"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                                <div class="d-flex flex-column">
                                    <div class="text-alternate mt-n1 lh-1-25">Recived a comment</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                                <div class="text-muted ms-2 mt-n1 lh-1-25">13 Dec</div>
                            </div>
                        </div>
                    </div>
                    <div class="row g-0 mb-2">
                        <div class="col-auto">
                            <div class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                                <div class="sh-3">
                                    <i data-acorn-icon="triangle" class="text-warning align-top"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                                <div class="d-flex flex-column">
                                    <div class="text-alternate mt-n1 lh-1-25">Recived an email</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                                <div class="text-muted ms-2 mt-n1 lh-1-25">13 Dec</div>
                            </div>
                        </div>
                    </div>
                    <div class="row g-0 mb-2">
                        <div class="col-auto">
                            <div class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                                <div class="sh-3">
                                    <i data-acorn-icon="hexagon" class="text-tertiary align-top"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                                <div class="d-flex flex-column">
                                    <div class="text-alternate mt-n1 lh-1-25">
                                        New sale:
                                        <a href="#" class="alternate-link underline-link">Bazlama</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                                <div class="text-muted ms-2 mt-n1 lh-1-25">12 Dec</div>
                            </div>
                        </div>
                    </div>
                    <div class="row g-0 mb-2">
                        <div class="col-auto">
                            <div class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                                <div class="sh-3">
                                    <i data-acorn-icon="triangle" class="text-warning align-top"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                                <div class="d-flex flex-column">
                                    <div class="text-alternate mt-n1 lh-1-25">Recived a comment</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                                <div class="text-muted ms-2 mt-n1 lh-1-25">12 Dec</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-6 mb-5">
        <h2 class="small-title">Progress</h2>
        <div class="row g-2">
            <div class="col-12 col-md-6">
                <div class="card sh-13">
                    <div class="card-body py-0 d-flex">
                        <div class="row g-0 d-flex w-100 align-items-center">
                            <div class="col sh-6 d-flex flex-column justify-content-center custom-legend-container"></div>
                            <template class="custom-legend-item">
                                <div class="text-small text-muted text mt-2"></div>
                                <div class="cta-3 text-primary value"></div>
                            </template>
                            <div class="col-auto">
                                <canvas id="smallDoughnutChart1" class="sw-7 sh-7"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="card sh-13">
                    <div class="card-body py-0 d-flex">
                        <div class="row g-0 d-flex w-100 align-items-center">
                            <div class="col sh-7 d-flex flex-column justify-content-center custom-legend-container"></div>
                            <template class="custom-legend-item">
                                <div class="text-small text-muted text mt-2"></div>
                                <div class="cta-3 text-primary value"></div>
                            </template>
                            <div class="col-auto">
                                <canvas id="smallDoughnutChart2" class="sw-7 sh-7"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="card sh-13">
                    <div class="card-body py-0 d-flex">
                        <div class="row g-0 d-flex w-100 align-items-center">
                            <div class="col sh-7 d-flex flex-column justify-content-center custom-legend-container"></div>
                            <template class="custom-legend-item">
                                <div class="text-small text-muted text mt-2"></div>
                                <div class="cta-3 text-primary value"></div>
                            </template>
                            <div class="col-auto">
                                <canvas id="smallDoughnutChart3" class="sw-7 sh-7"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="card sh-13">
                    <div class="card-body py-0 d-flex">
                        <div class="row g-0 d-flex w-100 align-items-center">
                            <div class="col sh-7 d-flex flex-column justify-content-center custom-legend-container"></div>
                            <template class="custom-legend-item">
                                <div class="text-small text-muted text mt-2"></div>
                                <div class="cta-3 text-primary value"></div>
                            </template>
                            <div class="col-auto">
                                <canvas id="smallDoughnutChart4" class="sw-7 sh-7"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="card sh-13">
                    <div class="card-body py-0 d-flex">
                        <div class="row g-0 d-flex w-100 align-items-center">
                            <div class="col sh-7 d-flex flex-column justify-content-center custom-legend-container"></div>
                            <template class="custom-legend-item">
                                <div class="text-small text-muted text mt-2"></div>
                                <div class="cta-3 text-primary value"></div>
                            </template>
                            <div class="col-auto">
                                <canvas id="smallDoughnutChart5" class="sw-7 sh-7"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="card sh-13">
                    <div class="card-body py-0 d-flex">
                        <div class="row g-0 d-flex w-100 align-items-center">
                            <div class="col sh-7 d-flex flex-column justify-content-center custom-legend-container"></div>
                            <template class="custom-legend-item">
                                <div class="text-small text-muted text mt-2"></div>
                                <div class="cta-3 text-primary value"></div>
                            </template>
                            <div class="col-auto">
                                <canvas id="smallDoughnutChart6" class="sw-7 sh-7"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row gy-5">
    <div class="col-12 col-xl-6">
        <h2 class="small-title">Consumptions</h2>
        <div class="card h-xl-100-card sh-50">
            <div class="card-body h-100">
                <div class="h-100">
                    <canvas id="bubbleChart"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-xl-6" id="smallLineChartsContainer">
        <h2 class="small-title">Coins</h2>
        <div class="row g-2">
            <div class="col-12 col-md-6 col-xl-12">
                <div class="card sh-13">
                    <div class="card-body py-0 d-flex align-items-center">
                        <div class="row g-0 d-flex w-100 align-items-center">
                            <div class="col d-flex flex-column justify-content-center">
                                <div class="custom-tooltip">
                                    <div class="title heading"></div>
                                    <div class="text-small text-muted text"></div>
                                    <i class="icon d-inline-block align-middle me-1 text-primary" data-acorn-size="15"></i>
                                    <div class="cta-4 text-primary value d-inline-block align-middle"></div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <canvas id="smallLineChart1" class="sw-17 sw-xl-35 sh-10"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-xl-12">
                <div class="card sh-13">
                    <div class="card-body py-0 d-flex align-items-center">
                        <div class="row g-0 d-flex w-100 align-items-center">
                            <div class="col d-flex flex-column justify-content-center">
                                <div class="custom-tooltip">
                                    <div class="title heading"></div>
                                    <div class="text-small text-muted text"></div>
                                    <i class="icon d-inline-block align-middle me-1 text-primary" data-acorn-size="15"></i>
                                    <div class="cta-4 text-primary value d-inline-block align-middle"></div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <canvas id="smallLineChart2" class="sw-17 sw-xl-35 sh-10"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-xl-12">
                <div class="card sh-13">
                    <div class="card-body py-0 d-flex align-items-center">
                        <div class="row g-0 d-flex w-100 align-items-center">
                            <div class="col d-flex flex-column justify-content-center">
                                <div class="custom-tooltip">
                                    <div class="title heading"></div>
                                    <div class="text-small text-muted text"></div>
                                    <i class="icon d-inline-block align-middle me-1 text-primary" data-acorn-size="15"></i>
                                    <div class="cta-4 text-primary value d-inline-block align-middle"></div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <canvas id="smallLineChart3" class="sw-17 sw-xl-35 sh-10"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-xl-12">
                <div class="card sh-13">
                    <div class="card-body py-0 d-flex align-items-center">
                        <div class="row g-0 d-flex w-100 align-items-center">
                            <div class="col d-flex flex-column justify-content-center">
                                <div class="custom-tooltip">
                                    <div class="title heading"></div>
                                    <div class="text-small text-muted text"></div>
                                    <i class="icon d-inline-block align-middle me-1 text-primary" data-acorn-size="15"></i>
                                    <div class="cta-4 text-primary value d-inline-block align-middle"></div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <canvas id="smallLineChart4" class="sw-17 sw-xl-35 sh-10"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
 --}}

@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="page-title-container">
                <h1 class="mb-0 pb-0 display-4" id="title">Dashboard </h1>
                <nav class="breadcrumb-container d-inline-block" aria-label="breadcrumb">
                    <ul class="breadcrumb pt-0">
                        <li class="breadcrumb-item"><a href="Dashboards.Default.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="Dashboards.html">Dashboards</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-lg-8">
            <h2 class="small-title">BIENVENUE A LA COMMUNE DE DSCHANG</h2>
            <div class="mb-5">
                <div class="row g-2">
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="card hover-scale-up cursor-pointer sh-19">
                            <div class="h-100 d-flex flex-column justify-content-between card-body align-items-center">
                                <div class="bg-gradient-light sh-5 sw-5 rounded-xl d-flex justify-content-center align-items-center mb-2">
                                    <i data-acorn-icon="radish" class="text-white"></i>
                                </div>
                                <div class="heading text-center mb-0 d-flex align-items-center lh-1">Radish
                                </div>
                                <div class="text-small text-primary">14 PRODUCTS</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="card hover-scale-up cursor-pointer sh-19">
                            <div class="h-100 d-flex flex-column justify-content-between card-body align-items-center">
                                <div class="bg-gradient-light sh-5 sw-5 rounded-xl d-flex justify-content-center align-items-center mb-2">
                                    <i data-acorn-icon="loaf" class="text-white"></i>
                                </div>
                                <div class="heading text-center mb-0 d-flex align-items-center lh-1">
                                    Acte de naissance</div>
                                <div class="text-small text-primary">8 PRODUCTS</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="card hover-scale-up cursor-pointer sh-19">
                            <div class="h-100 d-flex flex-column justify-content-between card-body align-items-center">
                                <div class="bg-gradient-light sh-5 sw-5 rounded-xl d-flex justify-content-center align-items-center mb-2">
                                    <i data-acorn-icon="loaf" class="text-white"></i>
                                </div>
                                <div class="heading text-center mb-0 d-flex align-items-center lh-1">
                                    Acte de naissance</div>
                                <div class="text-small text-primary">8 PRODUCTS</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="card hover-scale-up cursor-pointer sh-19">
                            <div class="h-100 d-flex flex-column justify-content-between card-body align-items-center">
                                <div class="bg-gradient-light sh-5 sw-5 rounded-xl d-flex justify-content-center align-items-center mb-2">
                                    <i data-acorn-icon="loaf" class="text-white"></i>
                                </div>
                                <div class="heading text-center mb-0 d-flex align-items-center lh-1">
                                    Acte de naissance</div>
                                <div class="text-small text-primary">8 PRODUCTS</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="card hover-scale-up cursor-pointer sh-19">
                            <div class="h-100 d-flex flex-column justify-content-between card-body align-items-center">
                                <div class="bg-gradient-light sh-5 sw-5 rounded-xl d-flex justify-content-center align-items-center mb-2">
                                    <i data-acorn-icon="loaf" class="text-white"></i>
                                </div>
                                <div class="heading text-center mb-0 d-flex align-items-center lh-1">
                                    Acte de naissance</div>
                                <div class="text-small text-primary">8 PRODUCTS</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="card hover-scale-up cursor-pointer sh-19">
                            <div class="h-100 d-flex flex-column justify-content-between card-body align-items-center">
                                <div class="bg-gradient-light sh-5 sw-5 rounded-xl d-flex justify-content-center align-items-center mb-2">
                                    <i data-acorn-icon="pepper" class="text-white"></i>
                                </div>
                                <div class="heading text-center mb-0 d-flex align-items-center lh-1">Pepper
                                </div>
                                <div class="text-small text-primary">21 PRODUCTS</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="card hover-scale-up cursor-pointer sh-19">
                            <div class="h-100 d-flex flex-column justify-content-between card-body align-items-center">
                                <div class="sh-5 sw-5 border border-dashed rounded-xl mx-auto">
                                    <div class="bg-separator w-100 h-100 rounded-xl d-flex justify-content-center align-items-center mb-2">
                                        <i data-acorn-icon="plus" class="text-white"></i>
                                    </div>
                                </div>
                                <div class="heading text-center text-muted mb-0 d-flex align-items-center lh-1">
                                    Add New</div>
                                <div class="text-small text-primary">&nbsp;</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between">
                <h2 class="small-title">Stocks</h2>
                <button class="btn btn-icon btn-icon-end btn-xs btn-background-alternate p-0 text-small" type="button">
                    <span class="align-bottom">View All</span>
                    <i data-acorn-icon="chevron-right" class="align-middle" data-acorn-size="12"></i>
                </button>
            </div>
            <div class="scroll-out mb-5">
                <div class="scroll-by-count mb-n2" data-count="5">
                    <div class="card mb-2">
                        <div class="row g-0 sh-14 sh-md-10">
                            <div class="col-auto h-100">
                                <a href="Pages.Portfolio.Detail.html">
                                    <img src="assets/img/product/small/product-9.webp" alt="alternate text" class="card-img card-img-horizontal sw-13 sw-md-12">
                                </a>
                            </div>
                            <div class="col">
                                <div class="card-body pt-0 pb-0 h-100">
                                    <div class="row g-0 h-100 align-content-center">
                                        <div class="col-12 col-md-6 d-flex align-items-center mb-2 mb-md-0">
                                            <a href="Pages.Portfolio.Detail.html">Barmbrack</a>
                                        </div>
                                        <div class="col-12 col-md-3 d-flex align-items-center text-muted text-medium">
                                            Whole Wheat</div>
                                        <div class="col-12 col-md-3 d-flex align-items-center justify-content-md-end text-muted text-medium">
                                            1.543 Sales</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-2">
                        <div class="row g-0 sh-14 sh-md-10">
                            <div class="col-auto h-100">
                                <a href="Pages.Portfolio.Detail.html">
                                    <img src="assets/img/product/small/product-5.webp" alt="alternate text" class="card-img card-img-horizontal sw-13 sw-md-12">
                                </a>
                            </div>
                            <div class="col">
                                <div class="card-body pt-0 pb-0 h-100">
                                    <div class="row g-0 h-100 align-content-center">
                                        <div class="col-12 col-md-6 d-flex align-items-center mb-2 mb-md-0">
                                            <a href="Pages.Portfolio.Detail.html">Cheesymite Scroll</a>
                                        </div>
                                        <div class="col-12 col-md-3 d-flex align-items-center text-muted text-medium">
                                            Whole Wheat</div>
                                        <div class="col-12 col-md-3 d-flex align-items-center justify-content-md-end text-muted text-medium">
                                            2.701 Sales</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-2">
                        <div class="row g-0 sh-14 sh-md-10">
                            <div class="col-auto h-100">
                                <a href="Pages.Portfolio.Detail.html">
                                    <img src="assets/img/product/small/product-3.webp" alt="alternate text" class="card-img card-img-horizontal sw-13 sw-md-12">
                                </a>
                            </div>
                            <div class="col">
                                <div class="card-body pt-0 pb-0 h-100">
                                    <div class="row g-0 h-100 align-content-center">
                                        <div class="col-12 col-md-6 d-flex align-items-center mb-2 mb-md-0">
                                            <a href="Pages.Portfolio.Detail.html">Cholermüs</a>
                                        </div>
                                        <div class="col-12 col-md-3 d-flex align-items-center text-muted text-medium">
                                            Multigrain</div>
                                        <div class="col-12 col-md-3 d-flex align-items-center justify-content-md-end text-muted text-medium">
                                            4.024 Sales</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-2">
                        <div class="row g-0 sh-14 sh-md-10">
                            <div class="col-auto h-100">
                                <a href="Pages.Portfolio.Detail.html">
                                    <img src="assets/img/product/small/product-6.webp" alt="alternate text" class="card-img card-img-horizontal h-100 sw-13 sw-md-12">
                                </a>
                            </div>
                            <div class="col">
                                <div class="card-body pt-0 pb-0 h-100">
                                    <div class="row g-0 h-100 align-content-center">
                                        <div class="col-12 col-md-6 d-flex align-items-center mb-2 mb-md-0">
                                            <a href="Pages.Portfolio.Detail.html">Ruisreikäleipä</a>
                                        </div>
                                        <div class="col-12 col-md-3 d-flex align-items-center text-muted text-medium">
                                            Sourdough</div>
                                        <div class="col-12 col-md-3 d-flex align-items-center justify-content-md-end text-muted text-medium">
                                            1.972 Sales</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-2">
                        <div class="row g-0 sh-14 sh-md-10">
                            <div class="col-auto h-100">
                                <a href="Pages.Portfolio.Detail.html">
                                    <img src="assets/img/product/small/product-8.webp" alt="alternate text" class="card-img card-img-horizontal sw-13 sw-md-12">
                                </a>
                            </div>
                            <div class="col">
                                <div class="card-body pt-0 pb-0 h-100">
                                    <div class="row g-0 h-100 align-content-center">
                                        <div class="col-12 col-md-6 d-flex align-items-center mb-2 mb-md-0">
                                            <a href="Pages.Portfolio.Detail.html">Buccellato di Lucca</a>
                                        </div>
                                        <div class="col-12 col-md-3 d-flex align-items-center text-muted text-medium">
                                            Whole Wheat</div>
                                        <div class="col-12 col-md-3 d-flex align-items-center justify-content-md-end text-muted text-medium">
                                            1.352 Sales</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-4">
            <h2 class="small-title">Today's Orders</h2>
            <div class="card w-100 sh-50 mb-5">
                <img src="assets/img/banner/cta-square-4.webp" class="card-img h-100" alt="card image">
                <div class="card-img-overlay d-flex flex-column justify-content-between bg-transparent">
                    <div class="d-flex flex-column h-100 justify-content-between align-items-start">
                        <div>
                            <div class="cta-1 text-primary mb-1">124</div>
                            <div class="lh-1-25 mb-0">Received Orders</div>
                        </div>
                        <div>
                            <div class="cta-1 text-primary mb-1">64</div>
                            <div class="lh-1-25 mb-0">Completed Orders</div>
                        </div>
                        <div>
                            <div class="cta-1 text-primary mb-1">34</div>
                            <div class="lh-1-25 mb-0">Pending Orders</div>
                        </div>
                        <div>
                            <div class="cta-1 text-primary mb-1">23</div>
                            <div class="lh-1-25 mb-0">Shipped Orders</div>
                        </div>
                    </div>
                </div>
            </div>
            <h2 class="small-title">Categories</h2>
            <div class="card mb-5 h-auto sh-lg-23">
                <div class="card-body h-100">
                    <div class="row g-0 h-100">
                        <div class="col-12 col-sm-6 h-100 d-flex justify-content-between flex-column">
                            <a href="#" class="body-link d-flex mb-2">Whole Wheat (2)</a>
                            <a href="#" class="body-link d-flex mb-2">Brown (6)</a>
                            <a href="#" class="body-link d-flex mb-2">White (4)</a>
                            <a href="#" class="body-link d-flex mb-2">Vegetable (2)</a>
                        </div>
                        <div class="col-12 col-sm-6 h-100 d-flex justify-content-between flex-column">
                            <a href="#" class="body-link d-flex mb-2">Diet (2)</a>
                            <a href="#" class="body-link d-flex mb-2">Rye (6)</a>
                            <a href="#" class="body-link d-flex mb-2">Sourdough (3)</a>
                            <a href="#" class="body-link d-flex mb-2">Multigrain (4)</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <h2 class="small-title">Extend Your Knowledge</h2>
    <div class="row g-2 mb-5">
        <div class="col-12 col-sm-6 col-xl-3">
            <div class="card w-100 sh-23 hover-img-scale-up">
                <img src="assets/img/banner/cta-vertical-1.webp" class="card-img h-100 scale" alt="card image">
                <div class="card-img-overlay d-flex flex-column justify-content-between bg-transparent">
                    <div class="d-flex flex-column h-100 justify-content-between align-items-start">
                        <div class="cta-2 text-black w-75">Introduction to Bread Making</div>
                        <a href="Pages.Blog.List.html" class="btn btn-icon btn-icon-start btn-primary mt-3 stretched-link">
                            <i data-acorn-icon="chevron-right" class="text-white"></i>
                            <span>View</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-xl-3">
            <div class="card w-100 sh-23 hover-img-scale-up">
                <img src="assets/img/banner/cta-vertical-2.webp" class="card-img h-100 scale" alt="card image">
                <div class="card-img-overlay d-flex flex-column justify-content-between bg-transparent">
                    <div class="d-flex flex-column h-100 justify-content-between align-items-start">
                        <div class="cta-2 text-black w-75">Basic Principles of Cooking</div>
                        <a href="Pages.Blog.List.html" class="btn btn-icon btn-icon-start btn-primary mt-3 stretched-link">
                            <i data-acorn-icon="chevron-right" class="text-white"></i>
                            <span>View</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-xl-3">
            <div class="card w-100 sh-23 hover-img-scale-up">
                <img src="assets/img/banner/cta-vertical-3.webp" class="card-img h-100 scale" alt="card image">
                <div class="card-img-overlay d-flex flex-column justify-content-between bg-transparent">
                    <div class="d-flex flex-column h-100 justify-content-between align-items-start">
                        <div class="cta-2 text-black w-75">Easy & Practical Recipes</div>
                        <a href="Pages.Blog.List.html" class="btn btn-icon btn-icon-start btn-primary mt-3 stretched-link">
                            <i data-acorn-icon="chevron-right" class="text-white"></i>
                            <span>View</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-xl-3">
            <div class="card w-100 sh-23 hover-img-scale-up">
                <img src="assets/img/banner/cta-vertical-4.webp" class="card-img h-100 scale" alt="card image">
                <div class="card-img-overlay d-flex flex-column justify-content-between bg-transparent">
                    <div class="d-flex flex-column h-100 justify-content-between align-items-start">
                        <div class="cta-2 text-black w-75">Introduction to Bread Making</div>
                        <a href="Pages.Blog.List.html" class="btn btn-icon btn-icon-start btn-primary mt-3 stretched-link">
                            <i data-acorn-icon="chevron-right" class="text-white"></i>
                            <span>View</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-xl-6 mb-5">
            <h2 class="small-title">Latest Registrations</h2>
            <div class="card h-100-card">
                <div class="card-body">
                    <div class="scroll-out">
                        <div class="scroll-by-count mb-n2" data-childselector=".scroll-item" data-count="5">
                            <div class="mb-2 scroll-item">
                                <div class="row g-0 sh-10 sh-sm-7">
                                    <div class="col-auto">
                                        <img src="assets/img/profile/profile-6.webp" class="card-img rounded-xl sh-6 sw-6" alt="thumb">
                                    </div>
                                    <div class="col">
                                        <div class="card-body d-flex flex-column flex-sm-row pt-0 pb-0 ps-3 pe-0 h-100 align-items-sm-center justify-content-sm-between">
                                            <div class="d-flex flex-column mb-2 mb-sm-0">
                                                <div>Joisse Kaycee</div>
                                                <div class="text-small text-muted">UX Designer</div>
                                            </div>
                                            <div class="d-flex">
                                                <button class="btn btn-outline-secondary btn-sm" type="button">Edit</button>
                                                <button class="btn btn-sm btn-icon btn-icon-only btn-outline-secondary ms-1" type="button">
                                                    <i data-acorn-icon="more-vertical"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-2 scroll-item">
                                <div class="row g-0 sh-10 sh-sm-7">
                                    <div class="col-auto">
                                        <img src="assets/img/profile/profile-7.webp" class="card-img rounded-xl sh-6 sw-6" alt="thumb">
                                    </div>
                                    <div class="col">
                                        <div class="card-body d-flex flex-column flex-sm-row pt-0 pb-0 ps-3 pe-0 h-100 align-items-sm-center justify-content-sm-between">
                                            <div class="d-flex flex-column mb-2 mb-sm-0">
                                                <div>Zayn Hartley</div>
                                                <div class="text-small text-muted">Frontend Developer</div>
                                            </div>
                                            <div class="d-flex">
                                                <button class="btn btn-outline-secondary btn-sm" type="button">Edit</button>
                                                <button class="btn btn-sm btn-icon btn-icon-only btn-outline-secondary ms-1" type="button">
                                                    <i data-acorn-icon="more-vertical"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-2 scroll-item">
                                <div class="row g-0 sh-10 sh-sm-7">
                                    <div class="col-auto">
                                        <img src="assets/img/profile/profile-8.webp" class="card-img rounded-xl sh-6 sw-6" alt="thumb">
                                    </div>
                                    <div class="col">
                                        <div class="card-body d-flex flex-column flex-sm-row pt-0 pb-0 ps-3 pe-0 h-100 align-items-sm-center justify-content-sm-between">
                                            <div class="d-flex flex-column mb-2 mb-sm-0">
                                                <div>Esperanza Lodge</div>
                                                <div class="text-small text-muted">Project Manager</div>
                                            </div>
                                            <div class="d-flex">
                                                <button class="btn btn-outline-secondary btn-sm" type="button">Edit</button>
                                                <button class="btn btn-sm btn-icon btn-icon-only btn-outline-secondary ms-1" type="button">
                                                    <i data-acorn-icon="more-vertical"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-2 scroll-item">
                                <div class="row g-0 sh-10 sh-sm-7">
                                    <div class="col-auto">
                                        <img src="assets/img/profile/profile-2.webp" class="card-img rounded-xl sh-6 sw-6" alt="thumb">
                                    </div>
                                    <div class="col">
                                        <div class="card-body d-flex flex-column flex-sm-row pt-0 pb-0 ps-3 pe-0 h-100 align-items-sm-center justify-content-sm-between">
                                            <div class="d-flex flex-column mb-2 mb-sm-0">
                                                <div>Kathryn Mengel</div>
                                                <div class="text-small text-muted">Executive Team Leader
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <button class="btn btn-outline-secondary btn-sm" type="button">Edit</button>
                                                <button class="btn btn-sm btn-icon btn-icon-only btn-outline-secondary ms-1" type="button">
                                                    <i data-acorn-icon="more-vertical"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-2 scroll-item">
                                <div class="row g-0 sh-10 sh-sm-7">
                                    <div class="col-auto">
                                        <img src="assets/img/profile/profile-5.webp" class="card-img rounded-xl sh-6 sw-6" alt="thumb">
                                    </div>
                                    <div class="col">
                                        <div class="card-body d-flex flex-column flex-sm-row pt-0 pb-0 ps-3 pe-0 h-100 align-items-sm-center justify-content-sm-between">
                                            <div class="d-flex flex-column mb-2 mb-sm-0">
                                                <div>Blaine Cottrell</div>
                                                <div class="text-small text-muted">Accounting</div>
                                            </div>
                                            <div class="d-flex">
                                                <button class="btn btn-outline-secondary btn-sm" type="button">Edit</button>
                                                <button class="btn btn-sm btn-icon btn-icon-only btn-outline-secondary ms-1" type="button">
                                                    <i data-acorn-icon="more-vertical"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-2 scroll-item">
                                <div class="row g-0 sh-10 sh-sm-7">
                                    <div class="col-auto">
                                        <img src="assets/img/profile/profile-8.webp" class="card-img rounded-xl sh-6 sw-6" alt="thumb">
                                    </div>
                                    <div class="col">
                                        <div class="card-body d-flex flex-column flex-sm-row pt-0 pb-0 ps-3 pe-0 h-100 align-items-sm-center justify-content-sm-between">
                                            <div class="d-flex flex-column mb-2 mb-sm-0">
                                                <div>Cherish Kerr</div>
                                                <div class="text-small text-muted">Development Lead</div>
                                            </div>
                                            <div class="d-flex">
                                                <button class="btn btn-outline-secondary btn-sm" type="button">Edit</button>
                                                <button class="btn btn-sm btn-icon btn-icon-only btn-outline-secondary ms-1" type="button">
                                                    <i data-acorn-icon="more-vertical"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-2 scroll-item">
                                <div class="row g-0 sh-10 sh-sm-7">
                                    <div class="col-auto">
                                        <img src="assets/img/profile/profile-3.webp" class="card-img rounded-xl sh-6 sw-6" alt="thumb">
                                    </div>
                                    <div class="col">
                                        <div class="card-body d-flex flex-column flex-sm-row pt-0 pb-0 ps-3 pe-0 h-100 align-items-sm-center justify-content-sm-between">
                                            <div class="d-flex flex-column mb-2 mb-sm-0">
                                                <div>Olli Hawkins</div>
                                                <div class="text-small text-muted">Client Relations Lead
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <button class="btn btn-outline-secondary btn-sm" type="button">Edit</button>
                                                <button class="btn btn-sm btn-icon btn-icon-only btn-outline-secondary ms-1" type="button">
                                                    <i data-acorn-icon="more-vertical"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-xl-6 mb-5">
            <h2 class="small-title">Tasks</h2>
            <div class="card h-100-card">
                <div class="card-body scroll-out">
                    <div class="scroll-by-count" data-childselector=".scroll-item" data-count="7">
                        <div class="mb-2 scroll-item">
                            <label class="form-check w-100 checked-line-through checked-opacity-75">
                                <input type="checkbox" class="form-check-input" checked="checked">
                                <span class="form-check-label d-block">
                                    <span>Create Wireframes</span>
                                    <span class="text-muted d-block text-small mt-0">Today 09:00</span>
                                </span>
                            </label>
                        </div>
                        <div class="mb-2 scroll-item">
                            <label class="form-check w-100 checked-line-through checked-opacity-75">
                                <input type="checkbox" class="form-check-input">
                                <span class="form-check-label d-block">
                                    <span>Meeting with the team</span>
                                    <span class="text-muted d-block text-small mt-0">Today 13:00</span>
                                </span>
                            </label>
                        </div>
                        <div class="mb-2 scroll-item">
                            <label class="form-check w-100 checked-line-through checked-opacity-75">
                                <input type="checkbox" class="form-check-input" checked="checked">
                                <span class="form-check-label d-block">
                                    <span>Business lunch with clients</span>
                                    <span class="text-muted d-block text-small mt-0">Today 14:00</span>
                                </span>
                            </label>
                        </div>
                        <div class="mb-2 scroll-item">
                            <label class="form-check w-100 checked-line-through checked-opacity-75">
                                <input type="checkbox" class="form-check-input" checked="checked">
                                <span class="form-check-label d-block">
                                    <span>Training with the team</span>
                                    <span class="text-muted d-block text-small mt-0">Today 15:00</span>
                                </span>
                            </label>
                        </div>
                        <div class="mb-2 scroll-item">
                            <label class="form-check w-100 checked-line-through checked-opacity-75">
                                <input type="checkbox" class="form-check-input">
                                <span class="form-check-label d-block">
                                    <span>Account meeting</span>
                                    <span class="text-muted d-block text-small mt-0">Today 17:00</span>
                                </span>
                            </label>
                        </div>
                        <div class="mb-2 scroll-item">
                            <label class="form-check w-100 checked-line-through checked-opacity-75">
                                <input type="checkbox" class="form-check-input">
                                <span class="form-check-label d-block">
                                    <span>Gym</span>
                                    <span class="text-muted d-block text-small mt-0">Today 17:30</span>
                                </span>
                            </label>
                        </div>
                        <div class="mb-2 scroll-item">
                            <label class="form-check w-100 checked-line-through checked-opacity-75">
                                <input type="checkbox" class="form-check-input">
                                <span class="form-check-label d-block">
                                    <span>Dinner with the family</span>
                                    <span class="text-muted d-block text-small mt-0">Today 19:30</span>
                                </span>
                            </label>
                        </div>
                        <div class="mb-2 scroll-item">
                            <label class="form-check w-100 checked-line-through checked-opacity-75">
                                <input type="checkbox" class="form-check-input">
                                <span class="form-check-label d-block">
                                    <span>Gym</span>
                                    <span class="text-muted d-block text-small mt-0">Today 17:30</span>
                                </span>
                            </label>
                        </div>
                        <div class="mb-2 scroll-item">
                            <label class="form-check w-100 checked-line-through checked-opacity-75">
                                <input type="checkbox" class="form-check-input">
                                <span class="form-check-label d-block">
                                    <span>Dinner with the family</span>
                                    <span class="text-muted d-block text-small mt-0">Today 19:30</span>
                                </span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row gy-5">
        <div class="col-lg-8">
            <h2 class="small-title">Recent Ratings</h2>
            <div class="scroll-out mb-n2">
                <div class="scroll-by-count" data-count="4">
                    <div class="card mb-2">
                        <div class="row g-0 sh-17 sh-lg-10">
                            <div class="col-auto">
                                <img src="assets/img/product/small/product-3.webp" alt="alternate text" class="card-img card-img-horizontal h-100 sw-lg-11 sw-14">
                            </div>
                            <div class="col">
                                <div class="card-body px-4 py-0 h-100">
                                    <div class="row g-0 h-100 align-content-center">
                                        <a href="#" class="col-12 col-lg-5 d-flex flex-column mb-lg-0 mb-2 mb-lg-0 pe-3 d-flex">
                                            <div>Spelt Bread</div>
                                            <div class="text-small text-muted text-truncate">Liquorice
                                                fruitcake tiramisu caramels.</div>
                                        </a>
                                        <div class="col-12 col-lg-4 d-flex pe-1 mb-2 mb-lg-0 align-items-lg-center">
                                            <div class="lh-1 text-alternate">
                                                <div class="br-wrapper br-theme-cs-icon">
                                                    <select class="recentRating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-3 d-flex flex-column pe-1 align-items-lg-end">
                                            <div class="text-alternate">1.552</div>
                                            <div class="text-muted text-small">Sales</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-2">
                        <div class="row g-0 sh-17 sh-lg-10">
                            <div class="col-auto">
                                <img src="assets/img/product/small/product-8.webp" alt="alternate text" class="card-img card-img-horizontal h-100 sw-lg-11 sw-14">
                            </div>
                            <div class="col">
                                <div class="card-body px-4 py-0 h-100">
                                    <div class="row g-0 h-100 align-content-center">
                                        <a href="#" class="col-12 col-lg-5 d-flex flex-column mb-lg-0 mb-2 mb-lg-0 pe-3 d-flex">
                                            <div>Cheesymite Scroll</div>
                                            <div class="text-small text-muted text-truncate">Chocolate
                                                tiramisu sweet dragée.</div>
                                        </a>
                                        <div class="col-12 col-lg-4 d-flex pe-1 mb-2 mb-lg-0 align-items-lg-center">
                                            <div class="lh-1 text-alternate">
                                                <div class="br-wrapper br-theme-cs-icon">
                                                    <select class="recentRating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-3 d-flex flex-column pe-1 align-items-lg-end">
                                            <div class="text-alternate">1.192</div>
                                            <div class="text-muted text-small">Sales</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-2">
                        <div class="row g-0 sh-17 sh-lg-10">
                            <div class="col-auto">
                                <img src="assets/img/product/small/product-6.webp" alt="alternate text" class="card-img card-img-horizontal h-100 sw-lg-11 sw-14">
                            </div>
                            <div class="col">
                                <div class="card-body px-4 py-0 h-100">
                                    <div class="row g-0 h-100 align-content-center">
                                        <a href="#" class="col-12 col-lg-5 d-flex flex-column mb-lg-0 mb-2 mb-lg-0 pe-3 d-flex">
                                            <div>Cholermüs</div>
                                            <div class="text-small text-muted text-truncate">Candy brownie
                                                sesame snaps pastry.</div>
                                        </a>
                                        <div class="col-12 col-lg-4 d-flex pe-1 mb-2 mb-lg-0 align-items-lg-center">
                                            <div class="lh-1 text-alternate">
                                                <div class="br-wrapper br-theme-cs-icon">
                                                    <select class="recentRating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="4">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-3 d-flex flex-column pe-1 align-items-lg-end">
                                            <div class="text-alternate">2.853</div>
                                            <div class="text-muted text-small">Sales</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-2">
                        <div class="row g-0 sh-17 sh-lg-10">
                            <div class="col-auto">
                                <img src="assets/img/product/small/product-10.webp" alt="alternate text" class="card-img card-img-horizontal h-100 sw-lg-11 sw-14">
                            </div>
                            <div class="col">
                                <div class="card-body px-4 py-0 h-100">
                                    <div class="row g-0 h-100 align-content-center">
                                        <a href="#" class="col-12 col-lg-5 d-flex flex-column mb-lg-0 mb-2 mb-lg-0 pe-3 d-flex">
                                            <div>Ruisreikäleipä</div>
                                            <div class="text-small text-muted text-truncate">Candy cookie
                                                jujubes gummi bears.</div>
                                        </a>
                                        <div class="col-12 col-lg-4 d-flex pe-1 mb-2 mb-lg-0 align-items-lg-center">
                                            <div class="lh-1 text-alternate">
                                                <div class="br-wrapper br-theme-cs-icon">
                                                    <select class="recentRating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-3 d-flex flex-column pe-1 align-items-lg-end">
                                            <div class="text-alternate">1.290</div>
                                            <div class="text-muted text-small">Sales</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-2">
                        <div class="row g-0 sh-17 sh-lg-10">
                            <div class="col-auto">
                                <img src="assets/img/product/small/product-5.webp" alt="alternate text" class="card-img card-img-horizontal h-100 sw-lg-11 sw-14">
                            </div>
                            <div class="col">
                                <div class="card-body px-4 py-0 h-100">
                                    <div class="row g-0 h-100 align-content-center">
                                        <a href="#" class="col-12 col-lg-5 d-flex flex-column mb-lg-0 mb-2 mb-lg-0 pe-3 d-flex">
                                            <div>Zopf</div>
                                            <div class="text-small text-muted text-truncate">Danish cookie
                                                marzipan chocolate bar.</div>
                                        </a>
                                        <div class="col-12 col-lg-4 d-flex pe-1 mb-2 mb-lg-0 align-items-lg-center">
                                            <div class="lh-1 text-alternate">
                                                <div class="br-wrapper br-theme-cs-icon">
                                                    <select class="recentRating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-3 d-flex flex-column pe-1 align-items-lg-end">
                                            <div class="text-alternate">1.744</div>
                                            <div class="text-muted text-small">Sales</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <h2 class="small-title">Spendings</h2>
            <div class="card h-100-card">
                <div class="card-body">
                    <div class="row g-0 align-items-center mb-4 sh-5">
                        <div class="col-auto">
                            <div class="d-flex flex-column justify-content-center align-items-center sh-5 sw-5 rounded-xl bg-gradient-light">
                                <i data-acorn-icon="loaf" class="text-white"></i>
                            </div>
                        </div>
                        <div class="col ps-3">
                            <div class="row g-0">
                                <div class="col">
                                    <div class="sh-5 d-flex align-items-center">Ingredients</div>
                                </div>
                                <div class="col-auto">
                                    <div class="cta-3 text-primary sh-5 d-flex align-items-center">30%</div>
                                </div>
                            </div>
                            <div class="row g-0">
                                <div class="col">
                                    <div class="progress progress-xs">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row g-0 align-items-center mb-4 sh-5">
                        <div class="col-auto">
                            <div class="d-flex flex-column justify-content-center align-items-center sh-5 sw-5 rounded-xl bg-gradient-light">
                                <i data-acorn-icon="building" class="text-white"></i>
                            </div>
                        </div>
                        <div class="col ps-3">
                            <div class="row g-0">
                                <div class="col">
                                    <div class="sh-5 d-flex align-items-center">Rent</div>
                                </div>
                                <div class="col-auto">
                                    <div class="cta-3 text-primary sh-5 d-flex align-items-center">15%</div>
                                </div>
                            </div>
                            <div class="row g-0">
                                <div class="col sh-1">
                                    <div class="progress progress-xs">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row g-0 align-items-center mb-4 sh-5">
                        <div class="col-auto">
                            <div class="d-flex flex-column justify-content-center align-items-center sh-5 sw-5 rounded-xl bg-gradient-light">
                                <i data-acorn-icon="electricity" class="text-white"></i>
                            </div>
                        </div>
                        <div class="col ps-3">
                            <div class="row g-0">
                                <div class="col">
                                    <div class="sh-5 d-flex align-items-center">Utilities</div>
                                </div>
                                <div class="col-auto">
                                    <div class="cta-3 text-primary sh-5 d-flex align-items-center">10%</div>
                                </div>
                            </div>
                            <div class="row g-0">
                                <div class="col sh-1">
                                    <div class="progress progress-xs">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row g-0">
                        <div class="col pe-4 d-flex flex-column justify-content-between align-items-end">
                            <div class="text-small text-muted sh-3 d-flex align-items-center">BUDGET</div>
                            <div class="text-small text-muted sh-3 d-flex align-items-center">SPEND</div>
                            <div class="text-small text-muted sh-5 d-flex align-items-end">BALANCE</div>
                        </div>
                        <div class="col-auto d-flex flex-column justify-content-between align-items-end">
                            <div class="text-muted sh-3 d-flex align-items-center">$12.000</div>
                            <div class="text-muted sh-3 d-flex align-items-center">- $8.750</div>
                            <div class="cta-4 text-primary sh-5 d-flex align-items-end">$3.250</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
