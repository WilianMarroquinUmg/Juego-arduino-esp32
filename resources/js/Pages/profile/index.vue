<script setup>

import informacionPersonal from './informacionPersonal.vue'
import informacionContacto from './informacionContacto.vue'


defineProps({
    user: Object
})


</script>

<template>




        <div class="page-content" >
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">User Profile</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">User Profilep</li>
                        </ol>
                    </nav>
                </div>
                <div class="ms-auto">
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary">Settings</button>
                        <button type="button"
                                class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split"
                                data-bs-toggle="dropdown"><span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end"><a class="dropdown-item"
                                                                                               href="javascript:;">Action</a>
                            <a class="dropdown-item" href="javascript:;">Another action</a>
                            <a class="dropdown-item" href="javascript:;">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="javascript:;">Separated link</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--end breadcrumb-->
            <div class="container">
                <div class="main-body">
                    <div class="row">

                        <informacionContacto :user="user"/>

                        <div class="col-lg-8">

                            <informacionPersonal :user="user"/>

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="d-flex align-items-center mb-3">Project Status</h5>
                                            <p>Web Design</p>
                                            <div class="progress mb-3" style="height: 5px">
                                                <div class="progress-bar bg-primary" role="progressbar"
                                                     style="width: 80%" aria-valuenow="80" aria-valuemin="0"
                                                     aria-valuemax="100"></div>
                                            </div>
                                            <p>Website Markup</p>
                                            <div class="progress mb-3" style="height: 5px">
                                                <div class="progress-bar bg-danger" role="progressbar"
                                                     style="width: 72%" aria-valuenow="72" aria-valuemin="0"
                                                     aria-valuemax="100"></div>
                                            </div>
                                            <p>One Page</p>
                                            <div class="progress mb-3" style="height: 5px">
                                                <div class="progress-bar bg-success" role="progressbar"
                                                     style="width: 89%" aria-valuenow="89" aria-valuemin="0"
                                                     aria-valuemax="100"></div>
                                            </div>
                                            <p>Mobile Template</p>
                                            <div class="progress mb-3" style="height: 5px">
                                                <div class="progress-bar bg-warning" role="progressbar"
                                                     style="width: 55%" aria-valuenow="55" aria-valuemin="0"
                                                     aria-valuemax="100"></div>
                                            </div>
                                            <p>Backend API</p>
                                            <div class="progress" style="height: 5px">
                                                <div class="progress-bar bg-info" role="progressbar" style="width: 66%"
                                                     aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




</template>

<style scoped>

</style>
