@extends('admin.template.base')
@section('content')


                        <!-- [ breadcrumb ] end -->
                        <!-- [ Main Content ] start -->
                        
                            <!-- [ single-lightbox ] start -->
                            <div class="col-md-12">
                                <div class="card table-card">
                                    <div class="card-header">
                                        <h5>Customer Overview</h5>
                                        <div class="card-header-right">
                                            <div class="btn-group card-option">
                                                <button type="button" class="btn dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <i class="feather icon-more-horizontal"></i>
                                                </button>
                                                <ul class="list-unstyled card-option dropdown-menu dropdown-menu-end">
                                                    <li class="dropdown-item full-card"><a href="#!"><span><i
                                                                    class="feather icon-maximize"></i>
                                                                maximize</span><span style="display:none"><i
                                                                    class="feather icon-minimize"></i>
                                                                Restore</span></a></li>
                                                    <li class="dropdown-item minimize-card"><a href="#!"><span><i
                                                                    class="feather icon-minus"></i> collapse</span><span
                                                                style="display:none"><i class="feather icon-plus"></i>
                                                                expand</span></a></li>
                                                    <li class="dropdown-item reload-card"><a href="#!"><i
                                                                class="feather icon-refresh-cw"></i> reload</a></li>
                                                    <li class="dropdown-item close-card"><a href="#!"><i
                                                                class="feather icon-trash"></i> remove</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <div class="customer-scroll" style="height:465px;position:relative;">
                                                <table class="table table-hover m-b-0">
                                                    <thead>
                                                        <tr>
                                                            <th>Image</th>
                                                            <th>Customer</th>
                                                            <th>Company</th>
                                                            <th>Lead Score</th>
                                                            <th>Date</th>
                                                            <th>Tags</th>
                                                            <th>Actions</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <img src="{{asset('assets/images/user/avatar-4.jpg')}}"
                                                                    alt="user image" class="img-radius align-top m-r-15"
                                                                    style="width:40px;">
                                                            </td>
                                                            <td>
                                                                <h6 class="m-0">Shirley Hoe</h6>
                                                                <p class="m-0">Sales executive , NY</p>
                                                            </td>
                                                            <td>Pinterest</td>
                                                            <td>223</td>
                                                            <td>19-11-2018</td>
                                                            <td>
                                                                <label class="badge badge-light-primary">Sketch</label>
                                                                <label class="badge badge-light-danger">Ui</label>
                                                            </td>
                                                            <td><a href="#!"><i
                                                                        class="icon feather icon-edit f-16 text-c-green"></i></a><a
                                                                    href="#!"><i
                                                                        class="feather icon-trash-2 f-16 ms-3 text-c-red"></i></a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <img src="{{asset('assets/images/user/avatar-2.jpg')}}"
                                                                    alt="user image" class="img-radius align-top m-r-15"
                                                                    style="width:40px;">
                                                            </td>
                                                            <td>
                                                                <h6 class="m-0">James Alexander</h6>
                                                                <p class="m-0">Sales executive , EL</p>
                                                            </td>
                                                            <td>Facebook</td>
                                                            <td>268</td>
                                                            <td>10-10-2017</td>
                                                            <td>
                                                                <label class="badge badge-light-primary">Ux</label>
                                                                <label class="badge badge-light-danger">Ui</label>
                                                                <label class="badge badge-light-info">php</label>
                                                            </td>
                                                            <td><a href="#!"><i
                                                                        class="icon feather icon-edit f-16 text-c-green"></i></a><a
                                                                    href="#!"><i
                                                                        class="feather icon-trash-2 f-16 ms-3 text-c-red"></i></a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <img src="{{asset('assets/images/user/avatar-1.jpg')}}"
                                                                    alt="user image" class="img-radius align-top m-r-15"
                                                                    style="width:40px;">
                                                            </td>
                                                            <td>
                                                                <h6 class="m-0">Shirley Hoe</h6>
                                                                <p class="m-0">Sales executive,NY</p>
                                                            </td>
                                                            <td>Google</td>
                                                            <td>293</td>
                                                            <td>16-03-2018</td>
                                                            <td>
                                                                <label class="badge badge-light-danger">Sketch</label>
                                                                <label class="badge badge-light-warning">Ui</label>
                                                            </td>
                                                            <td><a href="#!"><i
                                                                        class="icon feather icon-edit f-16 text-c-green"></i></a><a
                                                                    href="#!"><i
                                                                        class="feather icon-trash-2 f-16 ms-3 text-c-red"></i></a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <img src="{{asset('assets/images/user/avatar-4.jpg')}}"
                                                                    alt="user image" class="img-radius align-top m-r-15"
                                                                    style="width:40px;">
                                                            </td>
                                                            <td>
                                                                <h6 class="m-0">Alex Thompson</h6>
                                                                <p class="m-0">Sales executive,NY</p>
                                                            </td>
                                                            <td>Pinterest</td>
                                                            <td>568</td>
                                                            <td>19-11-2018</td>
                                                            <td>
                                                                <label class="badge badge-light-info">Ux</label>
                                                                <label class="badge badge-light-success">Ui</label>
                                                                <label class="badge badge-light-warning">php</label>
                                                            </td>
                                                            <td><a href="#!"><i
                                                                        class="icon feather icon-edit f-16 text-c-green"></i></a><a
                                                                    href="#!"><i
                                                                        class="feather icon-trash-2 f-16 ms-3 text-c-red"></i></a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <img src="{{asset('assets/images/user/avatar-2.jpg')}}"
                                                                    alt="user image" class="img-radius align-top m-r-15"
                                                                    style="width:40px;">
                                                            </td>
                                                            <td>
                                                                <h6 class="m-0">James Alexander</h6>
                                                                <p class="m-0">Sales executive,EL</p>
                                                            </td>
                                                            <td>Facebook</td>
                                                            <td>796</td>
                                                            <td>20-10-2017</td>
                                                            <td>
                                                                <label class="badge badge-light-primary">Sketch</label>
                                                                <label class="badge badge-light-info">Ui</label>
                                                            </td>

                                                            <td><a href="#!"><i
                                                                        class="icon feather icon-edit f-16 text-c-green"></i></a><a
                                                                    href="#!"><i
                                                                        class="feather icon-trash-2 f-16 ms-3 text-c-red"></i></a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <img src="{{asset('assets/images/user/avatar-1.jpg')}}"
                                                                    alt="user image" class="img-radius align-top m-r-15"
                                                                    style="width:40px;">
                                                            </td>
                                                            <td>
                                                                <h6 class="m-0">John Deo</h6>
                                                                <p class="m-0">Sales executive,EL</p>
                                                            </td>
                                                            <td>Twitter</td>
                                                            <td>465</td>
                                                            <td>25-11-2018</td>
                                                            <td>
                                                                <label class="badge badge-light-warning">Ux</label>
                                                                <label class="badge badge-light-danger">Ui</label>
                                                                <label class="badge badge-light-success">php</label>
                                                            </td>
                                                            <td><a href="#!"><i
                                                                        class="icon feather icon-edit f-16 text-c-green"></i></a><a
                                                                    href="#!"><i
                                                                        class="feather icon-trash-2 f-16 ms-3 text-c-red"></i></a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <img src="{{asset('assets/images/user/avatar-4.jpg')}}"
                                                                    alt="user image" class="img-radius align-top m-r-15"
                                                                    style="width:40px;">
                                                            </td>
                                                            <td>
                                                                <h6 class="m-0">Shirley Hoe</h6>
                                                                <p class="m-0">Sales executive,NY</p>
                                                            </td>
                                                            <td>Google</td>
                                                            <td>783</td>
                                                            <td>16-03-2017</td>
                                                            <td>
                                                                <label class="badge badge-light-danger">Sketch</label>
                                                                <label class="badge badge-light-primary">Ui</label>
                                                            </td>
                                                            <td><a href="#!"><i
                                                                        class="icon feather icon-edit f-16 text-c-green"></i></a><a
                                                                    href="#!"><i
                                                                        class="feather icon-trash-2 f-16 ms-3 text-c-red"></i></a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- [ single-lightbox ] end -->
                       
    @endsection
