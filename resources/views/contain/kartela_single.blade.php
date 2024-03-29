@include('includes.header')
@if (Auth::check())
    <div class="main-content">

        <div class="page-content">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="page-title mb-0 font-size-18">Profili Kartelës</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="profile-widgets py-3">

                                <div class="text-center">
                                    <div class="">
                                        <img src="{{ asset('admin/assets/images/profile.jpg') }}" alt=""
                                            class="avatar-lg mx-auto img-thumbnail rounded-circle">
                                        <div class="online-circle"><i class="fas fa-circle text-success"></i>
                                        </div>
                                    </div>

                                    <div class="mt-3 ">
                                        <a href="#"
                                            class="text-reset fw-medium font-size-16">{{ $kartela->emri . ' ' . $kartela->atesia . ' ' . $kartela->mbiemri }}</a>
                                        <p class="text-body mt-1 mb-1">Pacient</p>
                                    </div>

                                    <div class="row mt-4 border border-start-0 border-end-0 p-3">
                                        <div class="col-md-6">
                                            <h6 class="text-muted">
                                                Kartela Id
                                            </h6>
                                            <h5 class="mb-0">{{ $kartela->id }}</h5>
                                        </div>

                                        <div class="col-md-6">
                                            <h6 class="text-muted">
                                                Pacient Id
                                            </h6>
                                            <h5 class="mb-0">{{ $kartela->pacient_id }}</h5>
                                        </div>
                                    </div>

                                    <div class="mt-4">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body position-relative">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#staticBackdrop3">
                                <i class="fa fa-edit"></i>
                            </button>

                            <h5 style="margin-top: 10px" class="card-title mb-3">Informacioni Personal</h5>

                            <div class="mt-3">
                                <p class="font-size-12 text-muted mb-1">Gjinia</p>
                                <h6 class="">{{ $kartela->gjinia }}</h6>
                            </div>

                            <div class="mt-3">
                                <p class="font-size-12 text-muted mb-1">Lindur më</p>
                                <h6 class="">{{ $kartela->datelindja }}</h6>
                            </div>

                            <div class="mt-3">
                                <p class="font-size-12 text-muted mb-1">Lindur në</p>
                                <h6 class="">{{ $kartela->vendlindja }}</h6>
                            </div>

                            <div class="mt-3">
                                <p class="font-size-12 text-muted mb-1">Adresa Email</p>
                                <h6 class="">{{ $kartela->email }}</h6>
                            </div>

                            <div class="mt-3">
                                <p class="font-size-12 text-muted mb-1">Numri Tel</p>
                                <h6 class="">{{ $kartela->tel }}</h6>
                            </div>

                            <div class="mt-3">
                                <p class="font-size-12 text-muted mb-1">Adresa</p>
                                <h6 class="">{{ $kartela->adresa }}</h6>
                            </div>
                            <div class="mt-3">
                                <p class="font-size-12 text-muted mb-1">Grupi Gjakut</p>
                                <h6 class="">{{ $kartela->grupi_gjakut }}</h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-xl-9">
                    <div class="card">
                        <div class="card-body">

                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#experience" role="tab">
                                        <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                        <span class="d-none d-sm-block">Vizita</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#revenue" role="tab">
                                        <span class="d-none d-sm-block">Analiza</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#settings" role="tab">
                                        <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                                        <span class="d-none d-sm-block">Operime</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#anamneza" role="tab">
                                        <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                                        <span class="d-none d-sm-block">Anamneza</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#semundje" role="tab">
                                        <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                                        <span class="d-none d-sm-block">Historiku Sëmundjeve</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#mjekime" role="tab">
                                        <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                                        <span class="d-none d-sm-block">Historiku Mjekimeve</span>
                                    </a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content p-3 text-muted">
                                <div class="tab-pane active" id="experience" role="tabpanel">
                                    <div class="d-flex justify-content-end mb-3">
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#staticBackdrop">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                    <div class="timeline-count mt-1">
                                        <!-- Timeline row Start -->
                                        <div class="row">
                                            <div class="card-body">
                                                <table class="table table-centered mb-0" id="table_id">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Shërbim Id</th>
                                                            <th scope="col">Lloji Shërbimit</th>
                                                            <th scope="col">Numri i ri-kontrolleve</th>
                                                            <th scope="col">Intervali për ri-kontroll/muaj:</th>
                                                            <th scope="col">Data e fillimit</th>
                                                            <th scope="col">Fshi</th>
                                                            <th scope="col">Lexo më shumë</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($vizita as $vizit)
                                                            <tr>
                                                                <td>{{ optional($vizit)->id ?? 'Null' }}</td>
                                                                <td>{{ optional(\App\helper_sherbim($vizit->sherbimi_id))->emertimi ?? 'Null' }}
                                                                </td>
                                                                <td>{{ optional($vizit)->reminder ?? 'Null' }}</td>
                                                                <td>{{ optional($vizit)->perseritja ?? 'Null' }}</td>
                                                                <td>{{ optional($vizit)->data_fillimit ?? 'Null' }}
                                                                </td>
                                                                <td>
                                                                    <a href="#"
                                                                        class="btn btn-danger d-flex justify-content-center"
                                                                        onclick="confirmDelete('{{ route('contain.destroy.vizita', ['id' => $vizit->id]) }}')">
                                                                        <i class="fa fa-trash"></i>
                                                                    </a>
                                                                </td>

                                                                <td>
                                                                    <a href="">
                                                                        <i class="fa-solid fa-arrow-right"
                                                                            style="color: #755eba;"></i>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="revenue" role="tabpanel">
                                    <div id="revenue-chart" class="apex-charts">
                                        <div class="d-flex justify-content-end mb-3">
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#staticBackdrop2">
                                                <i class="fa fa-plus"></i>
                                            </button>
                                        </div>
                                        <div class="timeline-count mt-1">
                                            <!-- Timeline row Start -->
                                            <div class="row">
                                                <div class="card-body">
                                                    <table class="table table-centered mb-0" id="tablee_id">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">Emri Dokumentit</th>
                                                                <th scope="col">Përshkrimi Dokumentit</th>
                                                                <th scope="col">Shkarko Dokumentin</th>
                                                                <th scope="col">Fshi</th>
                                                                <th scope="col">Lexo më shumë</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($analiza as $analiz)
                                                                <tr>
                                                                    {{-- <td>{{ optional(\App\helper_sherbim($analiz->sherbimi_id))->emertimi ?? 'Null' }}
                                                                    </td> --}}
                                                                    <td>{{ optional($analiz)->document_name ?? 'Null' }}
                                                                    </td>
                                                                    <td>{{ optional($analiz)->description ?? 'Null' }}
                                                                    </td>
                                                                    <td class="text-center">
                                                                        @if ($analiz && $analiz->analizat_docs)
                                                                            <a href="{{ asset($analiz->analizat_docs) }}"
                                                                                download
                                                                                class="d-flex justify-content-center align-items-center">
                                                                                @if (Str::endsWith($analiz->analizat_docs, '.docx'))
                                                                                    <i class="fa fa-file-word text-primary"
                                                                                        style="font-size: 30px;"></i>
                                                                                @elseif(Str::endsWith($analiz->analizat_docs, '.pdf'))
                                                                                    <i class="fa fa-file-pdf text-danger"
                                                                                        style="font-size: 30px;"></i>
                                                                                @elseif(Str::endsWith($analiz->analizat_docs, '.xlsx'))
                                                                                    <i class="fa fa-file-excel text-success"
                                                                                        style="font-size: 30px;"></i>
                                                                                @else
                                                                                    <i class="fa fa-file"
                                                                                        style="font-size: 30px;"></i>
                                                                                @endif
                                                                            </a>
                                                                        @else
                                                                            Null
                                                                        @endif
                                                                    </td>

                                                                    <td>
                                                                        <a href="#"
                                                                            class="btn btn-danger d-flex justify-content-center"
                                                                            onclick="confirmDelete('{{ route('contain.destroy.analiza', ['id' => $analiz->id]) }}')">
                                                                            <i class="fa fa-trash"></i>
                                                                        </a>
                                                                    </td>
                                                                    <td>
                                                                        <a href="">
                                                                            <i class="fa-solid fa-arrow-right"
                                                                                style="color: #755eba;"></i>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane" id="settings" role="tabpanel">
                                    <div id="revenue-chart" class="apex-charts">
                                        <div class="d-flex justify-content-end mb-3">
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#staticBackdrop4">
                                                <i class="fa fa-plus"></i>
                                            </button>
                                        </div>
                                        <div class="timeline-count mt-1">
                                            <!-- Timeline row Start -->
                                            <div class="row">
                                                <div class="card-body">
                                                    <table class="table table-centered mb-0" id="tableee_id">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">Data Operimit</th>
                                                                <th scope="col">Mjeku</th>
                                                                <th scope="col">Specialiteti Mjekut</th>
                                                                <th scope="col">Diagnoza</th>
                                                                <th scope="col">Fshi</th>
                                                                <th scope="col">Lexo më shumë</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($operacioni as $operacion)
                                                                <tr>
                                                                    <td>{{ $operacion->data_operacionite }}</td>
                                                                    <td>{{ $operacion->emri_mjekut }}</td>
                                                                    <td>{{ $operacion->specialiteti_mjekut }}</td>
                                                                    <td>{{ $operacion->diagnoza }}</td>
                                                                    <td>
                                                                        <a href="#"
                                                                            class="btn btn-danger d-flex justify-content-center"
                                                                            onclick="confirmDelete('{{ route('contain.destroy.operacioni', ['id' => $operacion->id]) }}')">
                                                                            <i class="fa fa-trash"></i>
                                                                        </a>
                                                                    </td>
                                                                    </td>
                                                                    <td>
                                                                        <a
                                                                            href="{{ route('contain.show.operimi', ['id' => $operacion->id]) }}">
                                                                            <i class="fa-solid fa-arrow-right"
                                                                                style="color: #755eba;"></i>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                            @endforeach

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="anamneza" role="tabpanel">
                                    <div class="d-flex justify-content-end mb-3">
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#staticBackdrop5">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                    <div class="timeline-count mt-1">
                                        <!-- Timeline row Start -->
                                        <div class="row">
                                            <div class="card-body">
                                                <table class="table table-centered mb-0" id="tableeee_id">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Id</th>
                                                            <th scope="col">Sëmundje gjenetike/trashëguese në
                                                                familje</th>
                                                            <th scope="col">Histori e hipertensionit në familje</th>
                                                            <th scope="col">Fshi:
                                                            </th>
                                                            <th scope="col">Lexo më shumë</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($anamneza as $anamnez)
                                                            <tr>
                                                                <td>{{ optional($anamnez)->id ?? 'Null' }}</td>
                                                                <td>{{ optional($anamnez)->genetic_diseases ?? 'Null' }}
                                                                </td>
                                                                <td>{{ optional($anamnez)->hypertension ?? 'Null' }}
                                                                </td>
                                                                <td>
                                                                    <a href="#"
                                                                        class="btn btn-danger d-flex justify-content-center"
                                                                        onclick="confirmDelete('{{ route('contain.destroy.anamneza', ['id' => $anamnez->id]) }}')">
                                                                        <i class="fa fa-trash"></i>
                                                                    </a>
                                                                </td>

                                                                <td>
                                                                    <a
                                                                        href="{{ route('contain.anamneza', ['id' => $anamnez->id]) }}">
                                                                        <i class="fa-solid fa-arrow-right"
                                                                            style="color: #755eba;"></i>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="semundje" role="tabpanel">
                                    <div class="d-flex justify-content-end mb-3">
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#staticBackdrop">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                    <div class="timeline-count mt-1">
                                        <!-- Timeline row Start -->
                                        <div class="row">
                                            <div class="card-body">
                                                <table class="table table-centered mb-0" id="tableeeee_id">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Shërbim Id</th>
                                                            <th scope="col">Lloji Shërbimit</th>
                                                            <th scope="col">Numri i ri-kontrolleve</th>
                                                            <th scope="col">Intervali për ri-kontroll/muaj:</th>
                                                            <th scope="col">Data e fillimit</th>
                                                            <th scope="col">Delete</th>
                                                            <th scope="col">Lexo më shumë</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($vizita as $vizit)
                                                            <tr>
                                                                <td>{{ optional($vizit)->id ?? 'Null' }}</td>
                                                                <td>{{ optional(\App\helper_sherbim($vizit->sherbimi_id))->emertimi ?? 'Null' }}
                                                                </td>
                                                                <td>{{ optional($vizit)->reminder ?? 'Null' }}</td>
                                                                <td>{{ optional($vizit)->perseritja ?? 'Null' }}</td>
                                                                <td>{{ optional($vizit)->data_fillimit ?? 'Null' }}
                                                                </td>
                                                                <td>
                                                                    <a href="#"
                                                                        class="btn btn-danger d-flex justify-content-center"
                                                                        onclick="confirmDelete('{{ route('contain.destroy.vizita', ['id' => $vizit->id]) }}')">
                                                                        <i class="fa fa-trash"></i>
                                                                    </a>
                                                                </td>

                                                                <td>
                                                                    <a href="">
                                                                        <i class="fa-solid fa-arrow-right"
                                                                            style="color: #755eba;"></i>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="mjekime" role="tabpanel">
                                    <div class="d-flex justify-content-end mb-3">
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#staticBackdrop">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                    <div class="timeline-count mt-1">
                                        <!-- Timeline row Start -->
                                        <div class="row">
                                            <div class="card-body">
                                                <table class="table table-centered mb-0" id="tableeeeee_id">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Shërbim Id</th>
                                                            <th scope="col">Lloji Shërbimit</th>
                                                            <th scope="col">Numri i ri-kontrolleve</th>
                                                            <th scope="col">Intervali për ri-kontroll/muaj:</th>
                                                            <th scope="col">Data e fillimit</th>
                                                            <th scope="col">Delete</th>
                                                            <th scope="col">Lexo më shumë</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($vizita as $vizit)
                                                            <tr>
                                                                <td>{{ optional($vizit)->id ?? 'Null' }}</td>
                                                                <td>{{ optional(\App\helper_sherbim($vizit->sherbimi_id))->emertimi ?? 'Null' }}
                                                                </td>
                                                                <td>{{ optional($vizit)->reminder ?? 'Null' }}</td>
                                                                <td>{{ optional($vizit)->perseritja ?? 'Null' }}</td>
                                                                <td>{{ optional($vizit)->data_fillimit ?? 'Null' }}
                                                                </td>
                                                                <td>
                                                                    <a href="#"
                                                                        class="btn btn-danger d-flex justify-content-center"
                                                                        onclick="confirmDelete('{{ route('contain.destroy.vizita', ['id' => $vizit->id]) }}')">
                                                                        <i class="fa fa-trash"></i>
                                                                    </a>
                                                                </td>

                                                                <td>
                                                                    <a href="">
                                                                        <i class="fa-solid fa-arrow-right"
                                                                            style="color: #755eba;"></i>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
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
    </div>
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Vizita</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('contain.store.historiku') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="emertimi" class="form-label">Lloji i Shërbimit:</label>
                            <select class="form-select" id="emertimi" name="sherbimi_id">
                                <option selected disabled>Zgjidhni Shërbimin</option>
                                @foreach ($sherbimet as $sherbimi)
                                    <option value="{{ $sherbimi->id }}">{{ $sherbimi->emertimi }}</option>
                                @endforeach
                            </select>
                        </div>


                        <div class="mb-3">
                            <label for="reminder" class="form-label">Numri i ri-kontrolleve:</label>
                            <input type="number" id="reminder" name="reminder" class="form-control"
                                placeholder="Vendosni numrin e kontrolleve" value="0" required>
                        </div>

                        <div class="mb-3">
                            <label for="perseritja" class="form-label">Përsëritja për muaj:</label>
                            <input type="number" id="perseritja" name="perseritja" class="form-control"
                                placeholder="Vendosni numrin e kontrolleve" value="{{ $sherbimi->reminder ?? 0 }}"
                                required>
                        </div>

                        <div class="mb-3">
                            <label for="data_fillimit" class="form-label">Data e fillimit:</label>
                            <input type="date" id="data_fillimit" name="data_fillimit" class="form-control"
                                required>
                        </div>

                        <div class="mb-3">
                            <label for="orari" class="form-label">Orari:</label>
                            <input type="time" id="orari" name="orari" class="form-control" required>
                        </div>

                        <input type="hidden" value="{{ $kartela->id }}" name="kartela_id">

                        <button type="submit" class="btn btn-primary">Regjistro klientin</button>
                    </form>
                </div>
                <div class="modal-footer">

                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Analiza</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('contain.store.analiza') }}" method="post"
                        enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="document_name" class="form-label">Emri Dokumentit:</label>
                            <input type="text" class="form-control" id="document_name" name="document_name"
                                required>
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Përshkrimi Dokumentit:</label>
                            <textarea id="description" class="form-control" name="description" rows="4" required></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="analizat_docs" class="form-label">Choose a file:</label>
                            <input type="file" id="analizat_docs" class="form-control" name="analizat_docs"
                                accept=".pdf, .xlsx, .docx" required>
                        </div>
                        <input type="hidden" name="kartela_id" value="{{ $kartela->id }}">

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <div class="modal-footer">

                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="staticBackdrop3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabelEdit" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabelEdit">Edito Kartelën</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <form action="{{ route('contain.update.kartela', ['id' => $kartela->id]) }}"
                                method="post">
                                @csrf
                                @method('PUT')

                                <div class="mb-3">
                                    <label for="numer_id_edit" class="form-label">Id:</label>
                                    <input type="text" id="numer_id_edit" name="pacient_id" class="form-control"
                                        value="{{ $kartela->pacient_id }}" required>
                                </div>

                                <div class="mb-3">
                                    <label for="emri_edit" class="form-label">Emri:</label>
                                    <input type="text" id="emri_edit" name="emri" class="form-control"
                                        value="{{ $kartela->emri }}" required>
                                </div>

                                <div class="mb-3">
                                    <label for="atesia_edit" class="form-label">Atësia:</label>
                                    <input type="text" id="atesia_edit" name="atesia" class="form-control"
                                        value="{{ $kartela->atesia }}" required>
                                </div>

                                <div class="mb-3">
                                    <label for="memesia_edit" class="form-label">Mëmësia:</label>
                                    <input type="text" id="memesia_edit" name="memesia" class="form-control"
                                        value="{{ $kartela->memesia }}" required>
                                </div>

                                <div class="mb-3">
                                    <label for="mbiemri_edit" class="form-label">Mbiemri:</label>
                                    <input type="text" id="mbiemri_edit" name="mbiemri" class="form-control"
                                        value="{{ $kartela->mbiemri }}" required>
                                </div>

                                <div class="mb-3">
                                    <label for="gjinia_edit" class="form-label">Gjinia:</label>
                                    <select name="gjinia" id="gjinia_edit" class="form-control">
                                        <option value="Mashkull"
                                            {{ $kartela->gjinia == 'Mashkull' ? 'selected' : '' }}>Mashkull</option>
                                        <option value="Femër" {{ $kartela->gjinia == 'Femër' ? 'selected' : '' }}>
                                            Femër</option>
                                    </select>
                                </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="datelindja_edit" class="form-label">Datëlindja:</label>
                                <input type="date" id="datelindja_edit" name="datelindja" class="form-control"
                                    value="{{ $kartela->datelindja }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="vendlindja_edit" class="form-label">Vendlindja:</label>
                                <input type="text" id="vendlindja_edit" name="vendlindja" class="form-control"
                                    value="{{ $kartela->vendlindja }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="adresa_edit" class="form-label">Adresa:</label>
                                <input type="text" id="adresa_edit" name="adresa" class="form-control"
                                    value="{{ $kartela->adresa }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="tel_edit" class="form-label">Numri Tel:</label>
                                <input type="text" id="tel_edit" name="tel" class="form-control"
                                    value="{{ $kartela->tel }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="email_edit" class="form-label">Email:</label>
                                <input type="text" id="email_edit" name="email" class="form-control"
                                    value="{{ $kartela->email }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="grupi_gjakut_edit" class="form-label">Grupi Gjakut:</label>
                                <select name="grupi_gjakut" id="grupi_gjakut_edit" class="form-control">
                                    <option value="Grupi A"
                                        {{ $kartela->grupi_gjakut == 'Grupi A' ? 'selected' : '' }}>Grupi A</option>
                                    <option value="Grupi B"
                                        {{ $kartela->grupi_gjakut == 'Grupi B' ? 'selected' : '' }}>Grupi B</option>
                                    <option value="Grupi AB"
                                        {{ $kartela->grupi_gjakut == 'Grupi AB' ? 'selected' : '' }}>Grupi AB</option>
                                    <option value="Grupi O"
                                        {{ $kartela->grupi_gjakut == 'Grupi O' ? 'selected' : '' }}>Grupi O</option>
                                </select>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Ruaj Ndryshimet</button>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">

                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="staticBackdrop4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Operime</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('contain.store.operimi') }}" method="POST" class="mt-3">
                        @csrf

                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="data_operacionite" class="form-label">Data Operimit:</label>
                                    <input type="date" name="data_operacionite" class="form-control" required>
                                </div>

                                <div class="mb-3">
                                    <label for="emri_mjekut" class="form-label">Emri Doktorrit:</label>
                                    <input type="text" name="emri_mjekut" class="form-control" placeholder="Dr."
                                        required>
                                </div>

                                <div class="mb-3">
                                    <label for="specialiteti_mjekut" class="form-label">Specializimi
                                        Doktorrit:</label>
                                    <input type="text" name="specialiteti_mjekut" class="form-control"
                                        placeholder="Kirurgjia" required>
                                </div>

                                <div class="mb-3">
                                    <label for="diagnoza" class="form-label">Diagnoza Pacientit:</label>
                                    <textarea name="diagnoza" class="form-control" rows="4" placeholder="Pacienti ka simptomat..."></textarea>
                                </div>

                                <div class="mb-3">
                                    <label for="arsyeja_opecionit_sipas_mjekut" class="form-label">Arsyeja
                                        Operimit:</label>
                                    <textarea name="arsyeja_opecionit_sipas_mjekut" class="form-control" rows="4"
                                        placeholder="Arsyeja për operimin..."></textarea>
                                </div>

                                <div class="mb-3">
                                    <label for="rezultatet_e_testimeve_paraoperimit" class="form-label">Rezulatet
                                        Paraopervative:</label>
                                    <textarea name="rezultatet_e_testimeve_paraoperimit" class="form-control" rows="4"
                                        placeholder="Rezultatet e testimeve para operimit..."></textarea>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="lloji_anestezise" class="form-label">Lloji Anestezisë:</label>
                                    <select name="lloji_anestezise" class="form-control">
                                        <option value="Lokal">Lokal</option>
                                        <option value="Regional">Regional</option>
                                        <option value="Përgjithshme">Përgjithshme</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="mjeku_ansetezise" class="form-label">Mjeku Anestezisë:</label>
                                    <input type="text" name="mjeku_ansetezise" class="form-control"
                                        placeholder="Dr." required>
                                </div>

                                <div class="mb-3">
                                    <label for="lloji_opeacionit" class="form-label">Lloji Operimit:</label>
                                    <select name="lloji_opeacionit" class="form-control">
                                        <option value="Hapur">Hapur</option>
                                        <option value="Endoskopik">Endoskopik</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="hapat_operimit" class="form-label">Hapat e Operimit:</label>
                                    <textarea name="hapat_operimit" class="form-control" rows="4" placeholder="Hapat e procedurës..."></textarea>
                                </div>

                                <div class="mb-3">
                                    <label for="mjete_perdorimi" class="form-label">Instrumentat e Operimit:</label>
                                    <textarea name="mjete_perdorimi" class="form-control" rows="4"
                                        placeholder="Instrumentat që do të përdoren..."></textarea>
                                </div>

                                <div class="mb-3">
                                    <label for="mbyllja_plages" class="form-label">Mbyllja Plagës:</label>
                                    <textarea name="mbyllja_plages" class="form-control" rows="4" placeholder="Procesi i mbylljes së plagës..."></textarea>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="keshillat_post_operimit" class="form-label">Këshilla
                                        PostOperimi:</label>
                                    <textarea name="keshillat_post_operimit" class="form-control" rows="4"
                                        placeholder="Këshillat për pasoperacion..."></textarea>
                                </div>

                                <div class="mb-3">
                                    <label for="programi_rehabilitimit" class="form-label">Programi
                                        Rehabilitimit:</label>
                                    <textarea name="programi_rehabilitimit" class="form-control" rows="4"
                                        placeholder="Programi i rehabilitimit pas operacionit..."></textarea>
                                </div>

                                <div class="mb-3">
                                    <label for="rreziqet" class="form-label">Rreziqet PostOperimi:</label>
                                    <textarea name="rreziqet" class="form-control" rows="4"
                                        placeholder="Rreziqet që mund të shfaqen pas operacionit..."></textarea>
                                </div>

                                <div class="mb-3">
                                    <label for="parandalo_rreziqet" class="form-label">Parandalimi Rreziqeve:</label>
                                    <textarea name="parandalo_rreziqet" class="form-control" rows="4"
                                        placeholder="Metodat për parandalimin e rreziqeve..."></textarea>
                                </div>

                                <div class="mb-3">
                                    <label for="emergjenca" class="form-label">Veprim Emergjence:</label>
                                    <textarea name="emergjenca" class="form-control" rows="4"
                                        placeholder="Veprimet për emergjenca gjatë operacionit..."></textarea>
                                </div>
                                <input type="hidden" name="kartela_id" value="{{ $kartela->id }}">
                            </div>

                        </div>
                        <button type="submit" class="btn btn-primary">Rregjistro operimin</button>
                    </form>
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="staticBackdrop5" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Anamneza</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <form action="{{ route('contain.store.anamneza') }}" method="post">
                            @csrf
                            <!-- Anamneza Familjare -->
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-4">
                                        <h5>Anamneza Familjare</h5>
                                        <div class="form-group">
                                            <label for="genetic_diseases">Sëmundje gjenetike/trashëguese në
                                                familje:</label>
                                            <textarea class="form-control" id="genetic_diseases" name="genetic_diseases" rows="4"></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="hypertension">Histori e hipertensionit në familje:</label>
                                            <textarea class="form-control" id="hypertension" name="hypertension" rows="4"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <!-- Anamneza Sociale -->
                                <div class="col-md-4">
                                    <div class="mb-4">
                                        <h5>Anamneza Sociale</h5>
                                        <div class="form-group">
                                            <label for="physical_activity">Niveli i aktivitetit fizik:</label>
                                            <input type="text" class="form-control" id="physical_activity"
                                                name="physical_activity">
                                        </div>

                                        <div class="form-group">
                                            <label for="diet_habits">Zakonet ushqimore:</label>
                                            <textarea class="form-control" id="diet_habits" name="diet_habits" rows="4"></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="smoking">Konsumi i duhanit (sa shpesh dhe për sa
                                                kohë):</label>
                                            <input type="text" class="form-control" id="smoking"
                                                name="smoking">
                                        </div>

                                        <div class="form-group">
                                            <label for="alcohol_consumption">Konsumi i alkoolit (sa shpesh dhe sa
                                                sasi):</label>
                                            <input type="text" class="form-control" id="alcohol_consumption"
                                                name="alcohol_consumption">
                                        </div>
                                    </div>
                                </div>

                                <!-- Anamneza Përjetimore -->
                                <div class="col-md-4">
                                    <div class="mb-4">
                                        <h5>Anamneza Përjetimore</h5>
                                        <div class="form-group">
                                            <label for="current_symptoms">Simptomat aktuale:</label>
                                            <textarea class="form-control" id="current_symptoms" name="current_symptoms" rows="4"></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="recent_illness">Historia e sëmundjeve të fundit:</label>
                                            <textarea class="form-control" id="recent_illness" name="recent_illness" rows="4"></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="medication_history">Historia e trajtimit aktual (nëse
                                                ka):</label>
                                            <textarea class="form-control" id="medication_history" name="medication_history" rows="4"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" value="{{ $kartela->id }}" name="kartela_id">

                            <div class="row text-center">
                                <button type="submit" class="btn btn-primary">Rregjistro anamnezen</button>
                            </div>
                        </form>
                    </div>


                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>



@endif
@include('includes.footer')
<script>
    function confirmDelete(deleteUrl) {
        if (confirm('A jeni te sigurt te fshini?')) {
            window.location.href = deleteUrl;
        }
    }
</script>
