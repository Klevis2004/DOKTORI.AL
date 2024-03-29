@include('includes.header');

@if (Auth::check())
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <div class="main-content">

        <div class="page-content">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="page-title mb-0 font-size-18">Calendar</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item active">Calendar</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">

                    <div class="row mb-4">
                        <div class="col-lg-12">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <div id="calendar">

                                    </div>
                                </div>
                            </div>
                        </div> <!-- end col -->

                    </div>

                    <div style='clear:both'></div>

                    <div class="modal fade" id="exampleModal" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">

                                    <h5 class="modal-title" id="modal-title">
                                        {{-- {{ optional(\App\id(kartela_id))->emri ?? 'Null' }} --}}
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body p-4">
                                    <form class="needs-validation">
                                        <div class="row">
                                            <input type="hidden" name="hidden-rezervim-id" id="hidden-rezervim-id"
                                                value="event.id">

                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Data</label>
                                                    <input class="form-control" placeholder="Vendosni datën"
                                                        type="date" name="kontrollet" id="event-date" required
                                                        value="" />
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Orari</label>
                                                    <input class="form-control" placeholder="Vendosni orarin"
                                                        type="time" name="orari" id="event-time" required
                                                        value="" />
                                                </div>
                                            </div>

                                            <div class="row mt-2">
                                                <div class="col-12 text-center">
                                                    <button type="submit" class="btn btn-success"
                                                        id="btn-save-event">Përditëso</button>
                                                    <a href="#" class="btn btn-danger" onclick="confirmDelete()">
                                                        <i class="fa fa-trash"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Add New Event MODAL -->
                    <div class="modal fade" id="event-modal" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modal-title">Event</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body p-4">
                                    <form class="needs-validation" action="{{ route('contain.store.calendar') }}"
                                        method="POST">
                                        @csrf
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <label class="form-label">Pacienti</label>
                                                        <select class="js-example-basic custom-select2 form-control"
                                                            name="kartela_id" id="stateSelect">
                                                            @foreach ($kartela as $kartel)
                                                                <option value="{{ $kartel->id }}">
                                                                    {{ $kartel->id }} / {{ $kartel->emri }}
                                                                    {{ $kartel->atesia }} {{ $kartel->memesia }}
                                                                    {{ $kartel->mbiemri }}
                                                                </option>
                                                            @endforeach
                                                        </select>

                                                        {{-- <input class="form-control" placeholder="Vendosni Kartela Id"
                                                            type="number" name="kartela_id" id="event-title" required
                                                            value="" /> --}}
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <label class="form-label">Data</label>
                                                        <input class="form-control" placeholder="Vendosni datën"
                                                            type="date" name="kontrollet" id="event-date" required
                                                            value="" />
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <label class="form-label">Orari</label>
                                                        <input class="form-control" placeholder="Vendosni orarin"
                                                            type="time" name="orari" id="event-time" required
                                                            value="" />
                                                    </div>
                                                </div>

                                                <div class="row mt-2">
                                                    <div class="col-12 text-center">
                                                        <button type="submit" class="btn btn-success"
                                                            id="btn-save-event">Ruaj</button>
                                                    </div>
                                                </div>
                                            </div>
                                            @if ($errors->any())
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif
                                    </form>
                                </div>

                            </div> <!-- end modal-content-->
                        </div> <!-- end modal dialog-->
                    </div>
                    <!-- end modal-->
                </div>
            </div>
            <!-- end row -->

        </div>
        <!-- End Page-content -->
    </div>
    <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    </div>
    <!-- end container-fluid -->

    <!-- Right Sidebar -->

    @include('includes.footer')
@endif
