@extends('layouts.master')
@section('page', 'Daily Records')
@section('page-info', 'Daily Records List')

@section('content')
    <div class="card">
        <div class="content d-flex flex-column flex-column-fluid" id="content">
            <div class="post d-flex flex-column-fluid" id="kt_post">
                <div id="kt_content_container" class="container-xxl">
                        <div class="card card-flush">
                        </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0" id="table_container">
                                @include('DailyRecords.table-component')
                            </div>
                            <!--end::Card body-->
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection

