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
                        <h4 class="page-title mb-0 font-size-18">Shërbimi</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">

                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body d-flex justify-content-between">
                    <h4 class="card-title mb-4">Shërbimi</h4>
                    <div class="d-flex justify-content-end mb-3">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop">
                            <i class="fa fa-plus"></i>
                        </button>
                    </div>
                </div>
                <div style="margin-top: 30px; padding-left: 50px; padding-right: 50px; padding-bottom:50px"
                    class="table-responsive">
                    <table class="table table-centered mb-3" id="table_id">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Emertimi</th>
                                <th scope="col">Intervali për ri-kontroll/muaj</th>
                                <th scope="col">Fshi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sherbimet as $sherbimi)
                                <tr>
                                    <td>{{ $sherbimi->id }}</td>
                                    <td>{{ $sherbimi->emertimi }}</td>
                                    <td>{{ $sherbimi->reminder }}</td>
                                    <td>
                                        <a href="#" class="btn btn-danger"
                                            onclick="confirmDelete('{{ route('contain.destroy.sherbimi', ['id' => $sherbimi->id]) }}')">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('contain.store.sherbimi') }}" method="post">
                                @csrf

                                <div class="mb-3">
                                    <label for="emertimi" class="form-label">Emertimi:</label>
                                    <input type="text" id="emertimi" name="emertimi" class="form-control"
                                        placeholder="Vendosni emërtimin e shërbimit" required>
                                </div>

                                <div class="mb-3">
                                    <label for="reminder" class="form-label">Intervali për ri-kontroll/muaj:</label>
                                    <input type="number" id="reminder" name="reminder" class="form-control"
                                        placeholder="Vendosni intervalin për ri-kontroll/muaj" required>
                                </div>

                                <button type="submit" class="btn btn-primary">Regjistro shërbimin</button>
                            </form>
                        </div>
                        <div class="modal-footer">

                        </div>
                    </div>
                </div>
            </div>
@endif
@include('includes.footer');
<script>
    function confirmDelete(deleteUrl) {
        if (confirm('A jeni te sigurt te fshini?')) {
            window.location.href = deleteUrl;
        }
    }
</script>
