@include('includes.header')
@if (Auth::check())
    <style>
        .col {
            padding-top: 20px;
            padding-bottom: 20px;
            border: 2px solid transparent;
            border-image: linear-gradient(to right, rgba(10, 7, 170, 0.315), transparent);
            border-image-slice: 1;
        }
    </style>
    <div class="main-content">
        <div class="page-content">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="page-title mb-0 font-size-18">Anamneza</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                                <li class="breadcrumb-item active">Profile</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-12 col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="container text-center">
                            <div class="row">
                                <p class="fs-2">Informacion Operimi</p>
                                <hr>
                                <div class="col">
                                    <p class="fs-5">Data Operimit:</p>
                                    <p class="fs-6"> {{ $operacioni->data_operacionite }}</p>
                                    <p class="fs-5">Emri Doktorrit:</p>
                                    <p class="fs-6">{{ $operacioni->emri_mjekut }}</p>
                                    <p class="fs-5">Specializimi Doktorrit:</p>
                                    <p class="fs-6">{{ $operacioni->specialiteti_mjekut }}</p>
                                    <p class="fs-5">Diagnoza Pacientit:</p>
                                    <p class="fs-6">{{ $operacioni->diagnoza }}</p>
                                    <p class="fs-5">Arsyeja Operimit:</p>
                                    <p class="fs-6">{{ $operacioni->arsyeja_opecionit_sipas_mjekut }}</p>
                                    <p class="fs-5">Rezulatet Paraopervative:</p>
                                    <p class="fs-6">{{ $operacioni->rezultatet_e_testimeve_paraoperimit }}</p>
                                    <p class="fs-5">Lloji Anestezisë:</p>
                                    <p class="fs-6">{{ $operacioni->lloji_anestezise }}</p>
                                    <p class="fs-5">Mjeku Anestezisë:</p>
                                    <p class="fs-6">{{ $operacioni->mjeku_ansetezise }}</p>
                                    <p class="fs-5">Lloji Operimit:</p>
                                    <p class="fs-6">{{ $operacioni->lloji_opeacionit }}</p>
                                    <p class="fs-5">Hapat e Operimit:</p>
                                    <p class="fs-6">{{ $operacioni->hapat_operimit }}</p>
                                </div>
                                <div class="col" style="margin-left: 50px">
                                    <p class="fs-5">Instrumentat e Operimit:</p>
                                    <p class="fs-6">{{ $operacioni->mjete_perdorimi }}</p>
                                    <p class="fs-5">Mbyllja Plagës:</p>
                                    <p class="fs-6">{{ $operacioni->mbyllja_plages }}</p>
                                    <p class="fs-5">Këshilla PostOperimi:</p>
                                    <p class="fs-6">{{ $operacioni->keshillat_post_operimit }}</p>
                                    <p class="fs-5">Programi Rehabilitimit:</p>
                                    <p class="fs-6">{{ $operacioni->programi_rehabilitimit }}</p>
                                    <p class="fs-5">Rreziqet PostOperimi:</p>
                                    <p class="fs-6">{{ $operacioni->rreziqet }}</p>
                                    <p class="fs-5">Parandalimi Rreziqeve:</p>
                                    <p class="fs-6">{{ $operacioni->parandalo_rreziqet }}</p>
                                    <p class="fs-5">Veprim Emergjence:</p>
                                    <p class="fs-6">{{ $operacioni->emergjenca }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- End Page-content -->

        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <script>
                            document.write(new Date().getFullYear())
                        </script> © Qovex.
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end d-none d-sm-block">
                            Design & Develop by Themesbrand
                        </div>
                    </div>
                </div>
            </div>
        </footer>
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
