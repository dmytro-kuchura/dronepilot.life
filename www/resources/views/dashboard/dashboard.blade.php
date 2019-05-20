@extends('layouts.admin')

@section('content')
<div class="page">
    @widget('AdminHeader')
    <div class="page-content d-flex align-items-stretch">
        <div class="default-sidebar">
            @widget('AdminSidebar')
        </div>
        <div class="content-inner">
            <div class="container-fluid">
                <div class="row">
                    <div class="page-header">
                        <div class="d-flex align-items-center">
                            <h2 class="page-header-title">Панель Администратора | Drone Pilot</h2>
                        </div>
                    </div>
                </div>

                @widget('AdminRecords')
                <div class="row flex-row">
                    <div class="col-xl-3 col-md-6">
                        <!-- Begin Widget 08 -->
                        <div class="widget widget-08 has-shadow">
                            <!-- Begin Widget Header -->
                            <div class="widget-header bordered d-flex align-items-center">
                                <h2>Tasks List</h2>
                                <div class="widget-options">
                                    <div class="dropdown">
                                        <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">
                                            <i class="la la-ellipsis-h"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a href="#" class="dropdown-item">
                                                <i class="la la-plus"></i>Add Task
                                            </a>
                                            <a href="#" class="dropdown-item">
                                                <i class="la la-edit"></i>Edit Widget
                                            </a>
                                            <a href="#" class="dropdown-item faq">
                                                <i class="la la-question-circle"></i>FAQ
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Widget Header -->
                            <!-- Begin Widget Body -->
                            <div class="widget-body">
                                <div class="today">
                                    <div class="title">Today</div>
                                    <div class="new-tasks"><span class="nb">12</span> new tasks</div>
                                </div>
                                <!-- Begin List -->
                                <div class="todo-list">
                                    <ul id="sortable" class="list">
                                        <li class="task-color task-orange">
                                            <div class="styled-checkbox">
                                                <input type="checkbox" id="task-1">
                                                <label class="text-secondary" for="task-1">Play Rainbow Six</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="styled-checkbox">
                                                <input type="checkbox" id="task-2">
                                                <label class="text-white" for="task-2">Drink coffee with Megan</label>
                                            </div>
                                        </li>
                                        <li class="task-color task-blue">
                                            <div class="styled-checkbox">
                                                <input type="checkbox" id="task-3">
                                                <label class="text-info" for="task-3">Video conference</label>
                                            </div>
                                        </li>
                                        <li class="task-color task-red">
                                            <div class="styled-checkbox">
                                                <input type="checkbox" id="task-4">
                                                <label class="text-danger" for="task-4">Finish visual design</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="styled-checkbox">
                                                <input type="checkbox" id="task-5">
                                                <label class="text-white" for="task-5">Meeting with team</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- End List -->
                            </div>
                            <!-- End Widget Body -->
                        </div>
                        <!-- End Widget 08 -->
                    </div>
                    <div class="col-xl-5 col-md-6">
                        <!-- Begin Widget 10 -->
                        @widget('AdminComments')
                        <!-- End Widget 10 -->
                    </div>
                    <div class="col-xl-4">
                        <!-- Begin Widget 11 -->
                        <div class="widget widget-11 has-shadow">
                            <!-- Begin Widget Header -->
                            <div class="widget-header bordered d-flex align-items-center">
                                <h2>Activity Log</h2>
                                <div class="widget-options">
                                    <div class="dropdown">
                                        <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">
                                            <i class="la la-ellipsis-h"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a href="#" class="dropdown-item">
                                                <i class="la la-history"></i>History
                                            </a>
                                            <a href="#" class="dropdown-item">
                                                <i class="la la-bell-slash"></i>Disable Alerts
                                            </a>
                                            <a href="#" class="dropdown-item">
                                                <i class="la la-edit"></i>Edit Widget
                                            </a>
                                            <a href="#" class="dropdown-item faq">
                                                <i class="la la-question-circle"></i>FAQ
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Widget Header -->
                            <!-- Begin Widget Body -->
                            <div class="widget-body p-0 widget-scroll" style="max-height:450px;">
                                <!-- Begin 01 -->
                                <div class="timeline violet">
                                    <div class="timeline-content d-flex align-items-center">
                                        <div class="user-image">
                                            <img class="rounded-circle" src="assets/img/avatar/avatar-06.jpg" alt="...">
                                        </div>
                                        <div class="d-flex flex-column mr-auto">
                                            <div class="title">
                                                <span class="username">Beverly Oliver</span>
                                                Send you a friend request
                                            </div>
                                            <div class="time">4 min ago</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End 01 -->
                                <!-- Begin 02 -->
                                <div class="timeline red">
                                    <div class="timeline-content d-flex align-items-center">
                                        <div class="timeline-icon">
                                            <i class="la la-spinner"></i>
                                        </div>
                                        <div class="d-flex flex-column mr-auto">
                                            <div class="title">
                                                Server rebooted
                                            </div>
                                            <div class="time">10 min ago</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End 02 -->
                                <!-- Begin 03 -->
                                <div class="timeline violet">
                                    <div class="timeline-content d-flex align-items-center">
                                        <div class="user-image">
                                            <img class="rounded-circle" src="assets/img/avatar/avatar-05.jpg" alt="...">
                                        </div>
                                        <div class="d-flex flex-column mr-auto">
                                            <div class="title">
                                                <span class="username">Megan Duncan</span>
                                                Followed 4 people
                                                <div class="users-like">
                                                    <a href="profile.html">
                                                        <img src="assets/img/avatar/avatar-01.jpg" class="img-fluid rounded-circle" alt="...">
                                                    </a>
                                                    <a href="profile.html">
                                                        <img src="assets/img/avatar/avatar-02.jpg" class="img-fluid rounded-circle" alt="...">
                                                    </a>
                                                    <a href="profile.html">
                                                        <img src="assets/img/avatar/avatar-07.jpg" class="img-fluid rounded-circle" alt="...">
                                                    </a>
                                                    <a href="profile.html">
                                                        <img src="assets/img/avatar/avatar-09.jpg" class="img-fluid rounded-circle" alt="...">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="time">12 min ago</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End 03 -->
                                <!-- Begin 04 -->
                                <div class="timeline blue">
                                    <div class="timeline-content d-flex align-items-center">
                                        <div class="timeline-icon">
                                            <i class="la la-heart-o"></i>
                                        </div>
                                        <div class="d-flex flex-column mr-auto">
                                            <div class="title">
                                                <span class="username">Brandon Smith</span>
                                                Liked <span class="font-weight-bold"><a href="#">Elisyam Admin Template</a></span>
                                            </div>
                                            <div class="time">30 min ago</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End 04 -->
                                <!-- Begin 05 -->
                                <div class="timeline violet">
                                    <div class="timeline-content d-flex align-items-center">
                                        <div class="timeline-icon">
                                            <i class="la la-twitter"></i>
                                        </div>
                                        <div class="d-flex flex-column mr-auto">
                                            <div class="title">
                                                + 3 new followers
                                                <div class="users-like">
                                                    <a href="profile.html">
                                                        <img src="assets/img/avatar/avatar-09.jpg" class="img-fluid rounded-circle" alt="...">
                                                    </a>
                                                    <a href="profile.html">
                                                        <img src="assets/img/avatar/avatar-06.jpg" class="img-fluid rounded-circle" alt="...">
                                                    </a>
                                                    <a href="profile.html">
                                                        <img src="assets/img/avatar/avatar-03.jpg" class="img-fluid rounded-circle" alt="...">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="time">34 min ago</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End 05 -->
                                <!-- Begin 06 -->
                                <div class="timeline violet">
                                    <div class="timeline-content d-flex align-items-center">
                                        <div class="user-image">
                                            <img class="rounded-circle" src="assets/img/avatar/avatar-04.jpg" alt="...">
                                        </div>
                                        <div class="d-flex flex-column mr-auto">
                                            <div class="title">
                                                <span class="username">Nathan Hunter</span>
                                                Invited you in a group
                                            </div>
                                            <div class="time">42 min ago</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End 06 -->
                                <!-- Begin 06 -->
                                <div class="timeline violet">
                                    <div class="timeline-content d-flex align-items-center">
                                        <div class="user-image">
                                            <img class="rounded-circle" src="assets/img/avatar/avatar-03.jpg" alt="...">
                                        </div>
                                        <div class="d-flex flex-column mr-auto">
                                            <div class="title">
                                                <span class="username">Louis Henry</span>
                                                Is now following you
                                            </div>
                                            <div class="time">50 min ago</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End 06 -->
                                <!-- Begin 07 -->
                                <div class="timeline blue">
                                    <div class="timeline-content d-flex align-items-center">
                                        <div class="timeline-icon">
                                            <i class="la la-image"></i>
                                        </div>
                                        <div class="d-flex flex-column mr-auto">
                                            <div class="title">
                                                <span class="username">Brandon Smith</span>
                                                Uploaded <span class="font-weight-bold"><a href="#">8 photos</a></span>
                                            </div>
                                            <div class="time">1 hour ago</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End 07 -->
                            </div>
                            <!-- End Widget Body -->
                        </div>
                        <!-- End Widget 11 -->
                    </div>
                </div>
                <!-- End Row -->

            </div>
            <!-- End Container -->
            <!-- Begin Page Footer-->
            <footer class="main-footer">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 d-flex align-items-center justify-content-xl-start justify-content-lg-start justify-content-md-start justify-content-center">
                        <p class="text-gradient-02">Design By Dmitry Kuchura</p>
                    </div>
                </div>
            </footer>
            <!-- End Page Footer -->
            <a href="#" class="go-top"><i class="la la-arrow-up"></i></a>

        </div>
        <!-- End Content -->
    </div>
</div>
@endsection
