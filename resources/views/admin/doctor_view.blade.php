
<html lang="en">

<head>
    <script>
        function confirmDelete() {
        return confirm('Are you sure you want to delete this ?');
    }
    function approve() {
        return confirm('Are you sure you want to Approve this  ?');
    }
    function reject() {
        return confirm('Are you sure you want to reject this ?');
    }
        </script>
    @include('admin.css')
</head>

<body>

  
    @include('admin.sidebar')

    @include('admin.navbar') 

<div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Hello, <span>Welcome Here</span></h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Table-Export</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <section id="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="bootstrap-data-table-panel">
                                    <div class="table-responsive">
                                        <!-- ------------------alert------------------------- -->
                                                <!-- @if(session()->has('message'))
                                                <div class="alert alert-success">
                                                <button type="button" class="close" data-dismiss="alert">x</button>
                                                {{session()->get('message')}}
                                                </div>
                                                @endif -->
                                        <!-- -------------------------alert end--------------- -->
                                    <div style="overflow-x:auto">
                                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>Name</th>
                                                    <th>Gender</th>
                                                    <th>D.O.B</th>
                                                    <th>Address</th>
                                                    <th>Pin</th>
                                                    <th>Contact</th>
                                                    <th>Email</th>
                                                    <th>Certificate</th>
                                                    <th>Id</th>
                                                    <th>Delete</th>
                                                    <th></th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($data as $doctors)
                                                <tr>
                                                    <td><img src="/uploads/{{$doctors->image}}" alt="Product image" heigh="150px" width="150px" class="product-image"></td>
                                                    <td>{{$doctors->name}}</td>
                                                    <td>{{$doctors->gender}}</td>
                                                    <td>{{$doctors->dob}}</td>
                                                    <td>{{$doctors->address}}</td>
                                                    <td>{{$doctors->pin}}</td>
                                                    <td>{{$doctors->phone}}</td>
                                                    <td>{{$doctors->email}}</td>
                                                    <td><a href="/uploads/{{$doctors->image1}}" class="btn btn-info">Download</td>
                                                    <td><a href="/uploads/{{$doctors->image2}}" class="btn btn-info">Download</td>
                                                    <td><a href="{{url('doctor_delete',['lid' => $doctors->lid,'id' => $doctors->id])}}" onclick="return confirmDelete()" class="btn btn-danger">Delete</a></td>
                                                    @if ($doctors->status == 1)
                                                        <td>Approved</td>
                                                        <td><a href="{{url('doctor_reject',['lid' => $doctors->lid])}}" onclick="return reject()" class="btn btn-outline-danger">Reject</a></td>                               
                                                        
                                                    @elseif($doctors->status == 0)   
                                                    <td><a href="{{url('doctor_approve',['lid' => $doctors->lid])}}" onclick="return approve()" class="btn btn-success">Approve</a></td>                          
                                                        
                                                        <td>Rejected</td>
                                                    @endif
                                                   
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->
                    </div>
                    <!-- /# row -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="footer">
                                <p>2018 © Admin Board. - <a href="#">example.com</a></p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    
    <!-- @include('admin.script') -->

    <script src="admin/assets/js/lib/jquery.min.js"></script>
    <script src="admin/assets/js/lib/jquery.nanoscroller.min.js"></script>
    <!-- nano scroller -->
    <script src="admin/assets/js/lib/menubar/sidebar.js"></script>
    <script src="admin/assets/js/lib/preloader/pace.min.js"></script>
    <!-- sidebar -->
    
    <!-- bootstrap -->

    <script src="admin/assets/js/lib/bootstrap.min.js"></script><script src="admin/assets/js/scripts.js"></script>
    <!-- scripit init-->
    <script src="admin/assets/js/lib/data-table/datatables.min.js"></script>
    <script src="admin/assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="admin/assets/js/lib/data-table/buttons.flash.min.js"></script>
    <script src="admin/assets/js/lib/data-table/jszip.min.js"></script>
    <script src="admin/assets/js/lib/data-table/pdfmake.min.js"></script>
    <script src="admin/assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="admin/assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="admin/assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="admin/assets/js/lib/data-table/datatables-init.js"></script>





</body>

</html>