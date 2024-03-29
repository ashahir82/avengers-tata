@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <h2 class="pb-2 border-bottom">Icon grid</h2>

                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 py-5">
                        <div class="col d-flex align-items-start">
                            <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em">
                                <use xlink:href="#bootstrap" />
                            </svg>
                            <div>
                                <h3 class="fw-bold mb-0 fs-4">Featured title</h3>
                                <p>Paragraph of text beneath the heading to explain the heading.</p>
                            </div>
                        </div>
                        <div class="col d-flex align-items-start">
                            <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em">
                                <use xlink:href="#cpu-fill" />
                            </svg>
                            <div>
                                <h3 class="fw-bold mb-0 fs-4">Featured title</h3>
                                <p>Paragraph of text beneath the heading to explain the heading.</p>
                            </div>
                        </div>
                        <div class="col d-flex align-items-start">
                            <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em">
                                <use xlink:href="#calendar3" />
                            </svg>
                            <div>
                                <h3 class="fw-bold mb-0 fs-4">Featured title</h3>
                                <p>Paragraph of text beneath the heading to explain the heading.</p>
                            </div>
                        </div>
                        <div class="col d-flex align-items-start">
                            <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em">
                                <use xlink:href="#home" />
                            </svg>
                            <div>
                                <h3 class="fw-bold mb-0 fs-4">Featured title</h3>
                                <p>Paragraph of text beneath the heading to explain the heading.</p>
                            </div>
                        </div>
                        <div class="col d-flex align-items-start">
                            <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em">
                                <use xlink:href="#speedometer2" />
                            </svg>
                            <div>
                                <h3 class="fw-bold mb-0 fs-4">Featured title</h3>
                                <p>Paragraph of text beneath the heading to explain the heading.</p>
                            </div>
                        </div>
                        <div class="col d-flex align-items-start">
                            <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em">
                                <use xlink:href="#toggles2" />
                            </svg>
                            <div>
                                <h3 class="fw-bold mb-0 fs-4">Featured title</h3>
                                <p>Paragraph of text beneath the heading to explain the heading.</p>
                            </div>
                        </div>
                        <div class="col d-flex align-items-start">
                            <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em">
                                <use xlink:href="#geo-fill" />
                            </svg>
                            <div>
                                <h3 class="fw-bold mb-0 fs-4">Featured title</h3>
                                <p>Paragraph of text beneath the heading to explain the heading.</p>
                            </div>
                        </div>
                        <div class="col d-flex align-items-start">
                            <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em">
                                <use xlink:href="#tools" />
                            </svg>
                            <div>
                                <h3 class="fw-bold mb-0 fs-4">Featured title</h3>
                                <p>Paragraph of text beneath the heading to explain the heading.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
