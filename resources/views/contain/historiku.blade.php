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
                        <h4 class="page-title mb-0 font-size-18">Historiku Vizitave</h4>

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
                    <h4 class="card-title mb-4">Historiku Vizitave</h4>
                    <div style="margin-top: 30px" class="table-responsive">
                        <table class="table table-centered mb-0" id="table_id">
                            <thead>
                                <tr>
                                    <th scope="col">Shërbim Id</th>
                                    <th scope="col">Kartela Id</th>
                                    <th scope="col">Lloji Shërbimit</th>
                                    <th scope="col">Numri i ri-kontrolleve</th>
                                    <th scope="col">Përsëritja për cdo muaj</th>
                                    <th scope="col">Data e fillimit</th>
                                    <th scope="col">Lexo më shumë</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($vizita as $vizit)
                                    <tr>
                                        <td>{{ $vizit->id }}</td>
                                        <td>{{ $vizit->kartela_id }}</td>
                                        <td> {{ \App\helper_sherbim($vizit->sherbimi_id)->emertimi }}
                                        </td>
                                        <td>{{ $vizit->reminder }}</td>
                                        <td>{{ $vizit->perseritja }}</td>
                                        <td>{{ $vizit->data_fillimit }}</td>
                                        <td>
                                            <a href="">
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
@endif
@include('includes.footer');
