@include('includes.header')
@if (Auth::check())
    <div class="main-content">

        <div class="page-content">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="page-title mb-0 font-size-18">Profile</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                                <li class="breadcrumb-item active">Profile</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <!-- start row -->
            <div class="row">
                <div class="col-md-12 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="profile-widgets py-3">

                                <div class="text-center">
                                    <div class="">
                                        <img src="{{ asset('admin/assets/images/' . Auth::user()->photo) }}"
                                            alt="" class="avatar-lg mx-auto img-thumbnail rounded-circle">
                                        <div class="online-circle"><i class="fas fa-circle text-success"></i>
                                        </div>
                                    </div>

                                    <div class="mt-3 ">
                                        <a href="#"
                                            class="text-reset fw-medium font-size-16">{{ Auth::user()->name }}</a>
                                        <p class="text-body mt-1 mb-1">Doktorr</p>
                                    </div>

                                    <div class="row mt-4 border border-start-0 border-end-0 p-3">
                                        <div class="col-md-6">
                                            <h6 class="text-muted">
                                                Id
                                            </h6>
                                            <h5 class="mb-0">{{ Auth::id() }}</h5>
                                        </div>

                                        <div class="col-md-6">
                                            <h6 class="text-muted">
                                                Karta Id
                                            </h6>
                                            <h5 class="mb-0">{{ Auth::user()->user_id }}</h5>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#staticBackdrop3">
                                <i class="fa fa-edit"></i>
                            </button>
                            <h5 style="margin-top: 10px" class="card-title mb-3">Informacioni Personal</h5>

                            <div class="mt-3">
                                <p class="font-size-12 text-muted mb-1">Gjinia</p>
                                <h6 class="">{{ Auth::user()->gjinia }}</h6>
                            </div>

                            <div class="mt-3">
                                <p class="font-size-12 text-muted mb-1">Lindur më</p>
                                <h6 class="">{{ Auth::user()->datelindja }}</h6>
                            </div>

                            <div class="mt-3">
                                <p class="font-size-12 text-muted mb-1">Lindur në</p>
                                <h6 class="">{{ Auth::user()->vendlindja }}</h6>
                            </div>

                            <div class="mt-3">
                                <p class="font-size-12 text-muted mb-1">Adresa Email</p>
                                <h6 class="">{{ Auth::user()->email }}</h6>
                            </div>

                            <div class="mt-3">
                                <p class="font-size-12 text-muted mb-1">Numri Tel</p>
                                <h6 class="">{{ Auth::user()->tel }}</h6>
                            </div>

                            <div class="mt-3">
                                <p class="font-size-12 text-muted mb-1">Adresa</p>
                                <h6 class="">{{ Auth::user()->adresa }}</h6>
                            </div>
                            <div class="mt-3">
                                <p class="font-size-12 text-muted mb-1">Grupi Gjakut</p>
                                <h6 class="">{{ Auth::user()->grupi_gjakut }}</h6>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="staticBackdrop3" data-bs-backdrop="static" data-bs-keyboard="false"
                        tabindex="-1" aria-labelledby="staticBackdropLabelEdit" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="staticBackdropLabelEdit">Edito Kartelën</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <form action="{{ route('contain.update.profile', ['id' => Auth::id()]) }}"
                                                method="post">
                                                @csrf
                                                @method('PUT')

                                                <div class="mb-3">
                                                    <label for="numer_id_edit" class="form-label">Id:</label>
                                                    <input type="text" id="numer_id_edit" name="user_id"
                                                        class="form-control" value="{{ $user->user_id }}" required>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="emri_edit" class="form-label">Emri:</label>
                                                    <input type="text" id="emri_edit" name="emri"
                                                        class="form-control" value="{{ $user->emri }}" required>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="atesia_edit" class="form-label">Atësia:</label>
                                                    <input type="text" id="atesia_edit" name="atesia"
                                                        class="form-control" value="{{ $user->atesia }}" required>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="memesia_edit" class="form-label">Mëmësia:</label>
                                                    <input type="text" id="memesia_edit" name="memesia"
                                                        class="form-control" value="{{ $user->memesia }}" required>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="mbiemri_edit" class="form-label">Mbiemri:</label>
                                                    <input type="text" id="mbiemri_edit" name="mbiemri"
                                                        class="form-control" value="{{ $user->mbiemri }}" required>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="gjinia_edit" class="form-label">Gjinia:</label>
                                                    <select name="gjinia" id="gjinia_edit" class="form-control">
                                                        <option value="Mashkull"
                                                            {{ $user->gjinia == 'Mashkull' ? 'selected' : '' }}>
                                                            Mashkull</option>
                                                        <option value="Femër"
                                                            {{ $user->gjinia == 'Femër' ? 'selected' : '' }}>
                                                            Femër</option>
                                                    </select>
                                                </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="datelindja_edit" class="form-label">Datëlindja:</label>
                                                <input type="date" id="datelindja_edit" name="datelindja"
                                                    class="form-control" value="{{ $user->datelindja }}" required>
                                            </div>

                                            <div class="mb-3">
                                                <label for="vendlindja_edit" class="form-label">Vendlindja:</label>
                                                <input type="text" id="vendlindja_edit" name="vendlindja"
                                                    class="form-control" value="{{ $user->vendlindja }}" required>
                                            </div>

                                            <div class="mb-3">
                                                <label for="adresa_edit" class="form-label">Adresa:</label>
                                                <input type="text" id="adresa_edit" name="adresa"
                                                    class="form-control" value="{{ $user->adresa }}" required>
                                            </div>

                                            <div class="mb-3">
                                                <label for="tel_edit" class="form-label">Numri Tel:</label>
                                                <input type="text" id="tel_edit" name="tel"
                                                    class="form-control" value="{{ $user->tel }}" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="email_edit" class="form-label">Email:</label>
                                                <input type="text" id="email_edit" name="email"
                                                    class="form-control" value="{{ $user->email }}" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="grupi_gjakut_edit" class="form-label">Grupi
                                                    Gjakut:</label>
                                                <select name="grupi_gjakut" id="grupi_gjakut_edit"
                                                    class="form-control">
                                                    <option value="Grupi A"
                                                        {{ $user->grupi_gjakut == 'Grupi A' ? 'selected' : '' }}>
                                                        Grupi A</option>
                                                    <option value="Grupi B"
                                                        {{ $user->grupi_gjakut == 'Grupi B' ? 'selected' : '' }}>
                                                        Grupi B</option>
                                                    <option value="Grupi AB"
                                                        {{ $user->grupi_gjakut == 'Grupi AB' ? 'selected' : '' }}>
                                                        Grupi AB</option>
                                                    <option value="Grupi O"
                                                        {{ $user->grupi_gjakut == 'Grupi O' ? 'selected' : '' }}>
                                                        Grupi O</option>
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
                </div>

                <div class="col-md-12 col-xl-9">
                    <div class="card">
                        <div class="card-body">

                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#experience"
                                        role="tab">
                                        <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                        <span class="d-none d-sm-block">Experience</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#revenue" role="tab">
                                        <span class="d-none d-sm-block">Revenue</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#settings" role="tab">
                                        <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                                        <span class="d-none d-sm-block">Settings</span>
                                    </a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content p-3 text-muted">
                                <div class="tab-pane active" id="experience" role="tabpanel">
                                    <div class="timeline-count mt-5">
                                        <!-- Timeline row Start -->
                                        <div class="row">

                                            <!-- Timeline 1 -->
                                            <div class="timeline-box col-lg-4">
                                                <div class="mb-5 mb-lg-0">
                                                    <div class="item-lable bg-primary rounded">
                                                        <p class="text-center text-white">2016 - 20</p>
                                                    </div>
                                                    <div class="timeline-line active">
                                                        <div class="dot bg-primary"></div>
                                                    </div>
                                                    <div class="vertical-line">
                                                        <div class="wrapper-line bg-light"></div>
                                                    </div>
                                                    <div class="bg-light p-4 rounded mx-3">
                                                        <h5>Back end Developer</h5>
                                                        <p class="text-muted mt-1 mb-0">Voluptatem accntium
                                                            doemque lantium, totam rem aperiam, eaque ipsa quae
                                                            ab illo quasi sunt explicabo.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Timeline 1 -->

                                            <!-- Timeline 2 -->
                                            <div class="timeline-box col-lg-4">
                                                <div class="mb-5 mb-lg-0">
                                                    <div class="item-lable bg-primary rounded">
                                                        <p class="text-center text-white">2013 - 16</p>
                                                    </div>
                                                    <div class="timeline-line active">
                                                        <div class="dot bg-primary"></div>
                                                    </div>
                                                    <div class="vertical-line">
                                                        <div class="wrapper-line bg-light"></div>
                                                    </div>
                                                    <div class="bg-light p-4 rounded mx-3">
                                                        <h5>Front end Developer</h5>
                                                        <p class="text-muted mt-1 mb-0">Vivamus ultrices massa
                                                            tellus, sed convallis urna interdum eu. Pellentesque
                                                            htant morbi varius mollis et quis nisi.</p>

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Timeline 2 -->

                                            <!-- Timeline 3 -->
                                            <div class="timeline-box col-lg-4">
                                                <div class="mb-5 mb-lg-0">
                                                    <div class="item-lable bg-primary rounded">
                                                        <p class="text-center text-white">2011 - 13</p>
                                                    </div>
                                                    <div class="timeline-line active">
                                                        <div class="dot bg-primary"></div>
                                                    </div>
                                                    <div class="vertical-line">
                                                        <div class="wrapper-line bg-light"></div>
                                                    </div>
                                                    <div class="bg-light p-4 rounded mx-3">
                                                        <h5>UI /UX Designer</h5>
                                                        <p class="text-muted mt-1 mb-0">Suspendisse potenti.
                                                            senec netus malesuada fames ac turpis egesta vitae
                                                            blandit ac tempus nulla.</p>

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Timeline 3 -->
                                        </div>
                                        <!-- Timeline row Over -->

                                    </div>
                                </div>
                                <div class="tab-pane" id="revenue" role="tabpanel">
                                    <div id="revenue-chart" class="apex-charts mt-4"></div>
                                </div>
                                <div class="tab-pane" id="settings" role="tabpanel">

                                    <div class="row mt-4">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="firstname">First Name</label>
                                                <input type="text" class="form-control" id="firstname"
                                                    placeholder="Enter first name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="lastname">Last Name</label>
                                                <input type="text" class="form-control" id="lastname"
                                                    placeholder="Enter last name">
                                            </div>
                                        </div> <!-- end col -->
                                    </div>

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="mb-3">
                                                <label class="form-label" for="userbio">Bio</label>
                                                <textarea class="form-control" id="userbio" rows="4" placeholder="Write something..."></textarea>
                                            </div>
                                        </div> <!-- end col -->
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-0">
                                                <label class="form-label" for="useremail">Email Address</label>
                                                <input type="email" class="form-control" id="useremail"
                                                    placeholder="Enter email">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-0">
                                                <label class="form-label" for="userpassword">Password</label>
                                                <input type="password" class="form-control" id="userpassword"
                                                    placeholder="Enter password">
                                            </div>
                                        </div> <!-- end col -->
                                    </div>


                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Projects</h4>

                            <div class="table-responsive">
                                <table class="table table-centered mb-0">
                                    <thead>
                                        <tr>
                                            <th scope="col">Projects</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Billing Name</th>
                                            <th scope="col">Amount</th>
                                            <th scope="col" colspan="2">Payment Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Qovex admin UI</td>
                                            <td>
                                                21/01/2020
                                            </td>
                                            <td>Werner Berlin</td>
                                            <td>$ 125</td>
                                            <td><span class="badge badge-soft-success font-size-12">Paid</span>
                                            </td>
                                            <td><a href="#" class="btn btn-primary btn-sm">View</a></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Qovex admin Logo
                                            </td>
                                            <td>16/01/2020</td>

                                            <td>Robert Jordan</td>
                                            <td>$ 118</td>
                                            <td><span
                                                    class="badge bg-danger-subtle text-danger font-size-12">Chargeback</span>
                                            </td>
                                            <td><a href="#" class="btn btn-primary btn-sm">View</a></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Redesign - Landing page
                                            </td>
                                            <td>17/01/2020</td>

                                            <td>Daniel Finch</td>
                                            <td>$ 115</td>
                                            <td><span class="badge badge-soft-success font-size-12">Paid</span>
                                            </td>
                                            <td><a href="#" class="btn btn-primary btn-sm">View</a></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Blog Template
                                            </td>
                                            <td>18/01/2020</td>

                                            <td>James Hawkins</td>
                                            <td>$ 121</td>
                                            <td><span
                                                    class="badge bg-warning-subtle text-warning  font-size-12">Refund</span>
                                            </td>
                                            <td><a href="#" class="btn btn-primary btn-sm">View</a></td>
                                        </tr>
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
                </div>


            </div>

            <!-- end row -->

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
