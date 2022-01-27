@include('layouts/admin/head')

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('layouts/admin/sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('layouts/admin/header')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    </div>

                    <!-- Content Row -->

                    <div class="row">
                        <div class="col-lg-12 mb-4">
                            <header class="panel-heading">ตารางHeader</header>
                            <!-- Simple Tables -->
                            <div class="card">
                                <div class="table-responsive">
                                    <table class="table align-items-center table-flush">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>รหัส</th>
                                                <th>รายละเอียด</th>
                                                <th>รูป</th>
                                                <th>ผู้ที่เพิ่ม</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($header as $Header)
                                                <tr>
                                                    <td>{{ $Header->id_header }}</td>
                                                    <td>{{ $Header->text }}</th>
                                                    <td><img src="{{ asset('admin/images/' . $Header->image) }}"
                                                            alt="" style="width: 150px"></td>
                                                    <td>{{ $Header->admin->firstName . ' ' . $Header->admin->lastName }}
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="card-footer"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 mb-4">
                            <header class="panel-heading">ตารางhairstyle</header>
                            <!-- Simple Tables -->
                            <div class="card">
                                <div class="table-responsive">
                                    <table class="table align-items-center table-flush">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>ลำดับ</th>
                                                <th>ชื่อทรงผม</th>
                                                <th>รายละเอียด</th>
                                                <th>รูปภาพ</th>
                                                <th>ราคา</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($hairstyle as $Hairstyle)
                                                <tr>
                                                    <td>{{ $Hairstyle->hairstyle_id }}</td>
                                                    <td>{{ $Hairstyle->name }}</td>
                                                    <td>{{ $Hairstyle->text }}</td>
                                                    <td><img src="{{ asset('admin/images/' . $Hairstyle->image) }}"
                                                            alt="" style="width: 150px"></td>
                                                    <td>{{ $Hairstyle->price }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="card-footer"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 mb-4">
                            <header class="panel-heading">ตารางcontact</header>
                            <!-- Simple Tables -->
                            <div class="card">
                                <div class="table-responsive">
                                    <table class="table align-items-center table-flush">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>รหัส</th>
                                                <th>ชื่อ</th>
                                                <th>รายละเอียด</th>
                                                <th>รูปภาพ</th>
                                                <th>ผู้ที่เพิ่ม</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($contact as $Contact)
                                                <tr>
                                                    <td>{{ $Contact->id_contact }}</td>
                                                    <td>{{ $Contact->name }}</td></b>
                                                    <td>{{ $Contact->text }}</td></b>
                                                    <td><img src="{{ asset('admin/images/' . $Contact->image) }}"
                                                            alt="" style="width: 150px"></td></b>
                                                    <td>
                                                        {{ $Contact->admin->firstName . ' ' . $Contact->admin->lastName }}
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="card-footer"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 mb-4">
                            <header class="panel-heading">ตารางcontent</header>
                            <!-- Simple Tables -->
                            <div class="card">
                                <div class="table-responsive">
                                    <table class="table align-items-center table-flush">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>รหัส</th>
                                                <th>รายละเอียด</th>
                                                <th>ผู้ที่เพิ่ม</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($content as $Content)
                                                <tr>
                                                    <td>{{ $Content->id_contents }}</td>
                                                    <td>{{ $Content->text }}</td>
                                                    <td>
                                                        {{ $Content->admin->firstName . ' ' . $Content->admin->lastName }}
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="card-footer"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    @include('layouts/admin/footer')
</body>
