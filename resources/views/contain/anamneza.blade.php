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
                                <div class="col">
                                    <p class="fs-2">Anamneza Familjare</p>
                                    <hr>
                                    <p class="fs-5"> Sëmundje gjenetike/trashëguese në familje:</p>
                                    <p class="fs-6"> {{ $anamneza->genetic_diseases }}</p>
                                    <br>
                                    <p class="fs-5">Histori e hipertensionit në familje:</p>
                                    <p class="fs-6">{{ $anamneza->hypertension }}</p>
                                </div>
                                <div class="col" style="margin-left: 50px">
                                    <p class="fs-2">Anamneza Sociale</p>
                                    <hr>
                                    <p class="fs-5">Niveli i aktivitetit fizik:</p>
                                    <p class="fs-6">{{ $anamneza->physical_activity }}</p>
                                    <br>
                                    <p class="fs-5">Zakonet ushqimore:</p>
                                    <p class="fs-6">{{ $anamneza->diet_habits }}</p>
                                    <br>
                                    <p class="fs-5">Konsumi i duhanit (sa shpesh dhe për sa kohë):</p>
                                    <p class="fs-6">{{ $anamneza->smoking }}</p>
                                    <br>
                                    <p class="fs-5">Konsumi i alkoolit (sa shpesh dhe sa sasi):</p>
                                    <p class="fs-6">{{ $anamneza->alcohol_consumption }}</p>
                                </div>
                                <div class="col" style="margin-left: 50px">
                                    <p class="fs-2">Anamneza Përjetimore</p>
                                    <hr>
                                    <p class="fs-5">Simptomat aktuale:</p>
                                    <p class="fs-6">{{ $anamneza->current_symptoms }}</p>
                                    <br>
                                    <p class="fs-5">Historia e sëmundjeve të fundit:</p>
                                    <p class="fs-6">{{ $anamneza->recent_illness }}</p>
                                    <br>
                                    <p class="fs-5">Historia e trajtimit aktual (nëse ka):</p>
                                    <p class="fs-6">{{ $anamneza->medication_history }}</p>
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
