@extends('layouts.master')
@section('page', 'Users')
@section('page-info', 'All Users List')

@section('content')
    <div class="card">
        <div class="content d-flex flex-column flex-column-fluid" id="content">
            <div class="post d-flex flex-column-fluid" id="kt_post">
                <div id="kt_content_container" class="container-xxl">
                        <div class="card card-flush">
                            <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                            <div class="card-title">
                                <div class="d-flex align-items-center position-relative my-1">
                                    <span class="svg-icon svg-icon-1 position-absolute ms-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                                            <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <input type="text" data-kt-ecommerce-product-filter="search" class="form-control form-control-solid w-250px ps-14" id="search" />
                                </div>
                                <div class="d-flex align-items-center gap-2 gap-lg-3 ms-2 my-2">
                                    <button type="button" id="search_btn" class="btn btn-sm btn-flex d-block btn-primary text-uppercase py-3">
                                        Search
                                    </button>
                                </div>
                                <!--end::Search-->
                            </div>
                            <!--end::Card title-->
                            <!--begin::Card toolbar-->
                            <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                                <div class="w-100 mw-250px">
                                    <select class="form-select form-select-solid" id="gender" name="gender">
                                        <option value="all">All</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>
                            </div>
                            <!--end::Card toolbar-->
                        </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0" id="table_container">
                                @include('Users.table-component')
                            </div>
                            <!--end::Card body-->
                        </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('scripts')
<script>
    $(document).ready(function() {
        function fetchData() {
            var search = $('#search').val();
            var gender = $('#gender').val();
            
            $.ajax({
                url: '/',
                type: 'GET',
                data: {
                    search: search,
                    gender: gender
                },
                success: function(data) {
                    $('#table_container').html(data)
                }
            });
        }

        $('#search_btn').click(function(){
            fetchData();
        })

        $('#gender').change(function(){
            fetchData();
        })
    });
</script>
@endsection
