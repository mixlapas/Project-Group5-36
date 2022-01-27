@include ('layouts/admin/head')

<body id="page-top">
    <div id="wrapper">
        <!-- Sidebar -->
        @include ('layouts/admin/sidebar')
        <!-- Sidebar -->
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <!-- TopBar -->
                @include ('layouts/admin/header')
                <!-- Topbar -->

                <!-- Container Fluid-->
                <div class="container-fluid" id="container-wrapper">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">หน้า content</h1>
                        <ol class="breadcrumb">
                        </ol>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 mb-4">
                            <!-- Simple Tables -->
                            <div class="card">
                                <a href="{{ route('add_body') }}" class="btn btn-sm btn-primary">เพิ่มข้อมูล</a>
                                <div class="table-responsive">
                                    <table class="table align-items-center table-flush">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>รหัส</th>
                                                <th>รายละเอียด</th>
                                                <th>ผู้ที่เพิ่ม</th>
                                                <th>แก้ไข</th>
                                                <th>ลบ</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($content as $Content)
                                                <tr>
                                                    <td>{{ $Content->id_contents }}</td>
                                                    <td>{{ $Content->text }}</td>
                                                    <td>{{ $Content->admin->firstName . ' ' . $Content->admin->lastName }}
                                                    </td>
                                                    <td><a href="{{ url('/admin/content/edit/' . $Content->id_contents) }}"
                                                            class="btn btn-sm btn-primary">แก้ไข</a></td>
                                                    <td><a href="{{ url('/admin/content/delete/' . $Content->id_contents) }}"
                                                            class="btn btn-sm btn-danger">ลบ</a></td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="card-footer"></div>
                            </div>
                        </div>
                    </div>
                    <!--Row-->
                </div>
                <!---Container Fluid-->
            </div>
            <!-- Footer -->
            @include ('layouts/admin/footer')

            <!-- Footer -->
        </div>
    </div>

    <!-- Scroll to top -->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>


</body>

</html>
