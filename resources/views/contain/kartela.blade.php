@include('includes.header');
<style>
    td a {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100%;
    }

    .fa-arrow-right {
        font-size: 1.5em;
    }
</style>

@if (Auth::check())
    <div class="main-content">

        <div class="page-content">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="page-title mb-0 font-size-18">Kartela</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                {{-- <li class="breadcrumb-item active"></li> --}}
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="card-body d-flex justify-content-between">
                        <h4 class="card-title mb-4">Kartela</h4>
                        <div class="d-flex justify-content-end mb-3">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#staticBackdrop">
                                <i class="fa fa-plus"></i>
                            </button>
                        </div>
                    </div>
                    <div style="margin-top: 30px" class="table-responsive">
                        <table class="table table-centered mb-0" id="table_id">
                            <thead>
                                <tr>
                                    <th scope="col">Kartela Id</th>
                                    <th scope="col">Id</th>
                                    <th scope="col">Emri</th>
                                    <th scope="col">Atësia</th>
                                    <th scope="col">Mëmësia</th>
                                    <th scope="col">Gjinia</th>
                                    <th scope="col">Mbiemri</th>
                                    <th scope="col">Datëlindja</th>
                                    <th scope="col">Vendlindja</th>
                                    <th scope="col">Adresa</th>
                                    <th scope="col">Tel</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Grupi Gjakut</th>
                                    <th scope="col">Lexo më shumë</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kartela as $single)
                                    <tr>
                                        <td>{{ $single->id }}</td>
                                        <td>{{ $single->pacient_id }}</td>
                                        <td>{{ $single->emri }}</td>
                                        <td>{{ $single->atesia }}</td>
                                        <td>{{ $single->memesia }}</td>
                                        <td>{{ $single->gjinia }}</td>
                                        <td>{{ $single->mbiemri }}</td>
                                        <td>{{ $single->datelindja }}</td>
                                        <td>{{ $single->vendlindja }}</td>
                                        <td>{{ $single->adresa }}</td>
                                        <td>{{ $single->tel }}</td>
                                        <td>{{ $single->email }}</td>
                                        <td>{{ $single->grupi_gjakut }}</td>
                                        <td>
                                            <a href="{{ route('contain.single.kartela', ['id' => $single->id]) }}">
                                                <i class="fa-solid fa-arrow-right" style="color: #755eba;"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach


                            </tbody>
                        </table>
                    </div>
                    <div class="mt-3">
                        <ul class="pagination pagination-rounded justify-content-center mb-0">
                            <li class="page-item">
                                <a class="page-link" href="#">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Kartela</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <form action="" method="post">
                                        @csrf

                                        <div class="mb-3">
                                            <label for="numer_id" class="form-label">Id:</label>
                                            <input type="text" id="numer_id" name="pacient_id" class="form-control"
                                                placeholder="Vendosni Id e pacientit" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="emri" class="form-label">Emri:</label>
                                            <input type="text" id="emri" name="emri" class="form-control"
                                                placeholder="Vendosni emrin e pacientit" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="emri" class="form-label">Atësia:</label>
                                            <input type="text" id="emri" name="atesia" class="form-control"
                                                placeholder="Vendosni emrin atësisë së pacientit" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="emri" class="form-label">Mëmësia:</label>
                                            <input type="text" id="emri" name="memesia" class="form-control"
                                                placeholder="Vendosni emrin mëmësisë së pacientit" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="mbiemri" class="form-label">Mbiemri:</label>
                                            <input type="text" id="mbiemri" name="mbiemri" class="form-control"
                                                placeholder="Vendosni mbiemrin e pacientit" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="gjinia" class="form-label">Gjinia:</label>
                                            <select name="gjinia" id="" class="form-control">
                                                <option value="Mashkull">Mashkull</option>
                                                <option value="Femër">Femër</option>
                                            </select>
                                        </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="datelindja" class="form-label">Datëlindja:</label>
                                        <input type="date" id="datelindja" name="datelindja" class="form-control"
                                            required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="mosha" class="form-label">Vendlindja:</label>
                                        <input type="text" id="vendlindja" name="vendlindja" class="form-control"
                                            placeholder="Vendosni vendlindjen e pacientit" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="adresa" class="form-label">Adresa:</label>
                                        <input type="text" id="adresa" name="adresa" class="form-control"
                                            placeholder="Vendosni adresën e banimit të pacientit" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="tel" class="form-label">Numri Tel:</label>
                                        <input type="text" id="tel" name="tel" class="form-control"
                                            placeholder="Vendosni numrin e pacientit" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email:</label>
                                        <input type="text" id="email" name="email" class="form-control"
                                            placeholder="Vendoni email-in e pacientit" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="grupi_gjakut" class="form-label">Grupi Gjakut:</label>
                                        <select name="grupi_gjakut" id="" class="form-control">
                                            <option value="Grupi A">Grupi A</option>
                                            <option value="Grupi B">Grupi B</option>
                                            <option value="Grupi AB">Grupi AB</option>
                                            <option value="Grupi O">Grupi O</option>
                                        </select>
                                    </div>
                                </div>



                                <button type="submit" class="btn btn-primary">Regjistro klientin</button>
                                </form>
                            </div>
                        </div>
                        <div class="modal-footer">

                        </div>
                    </div>
                </div>
            </div>

@endif
@include('includes.footer');
