<template>
    <div class="row g-3">
        <div class="col-xl-7">
            <div class="card">
                <!-- <div class="card-body" style="margin-bottom: -15px;">
                    <div class="d-flex align-items-start">
                        <div class="flex-grow-1">
                            <div class="text-muted">
                                <h5 class="mb-0">Department Of Science And Technology - IX</h5>
                                <p class="mb-0">Zamboanga Peninsula, Region IX</p>
                                <p class="mb-0">DOST-IX</p>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="card-body border-top mb-n3"><i class="text-muted float-end bx bx-sync h3"
                        style="cursor: pointer;"></i>
                    <p class="text-muted fw-bold">Mindanao Area</p>
                </div>
                <div class="card-body border-top">
                    <div class="text-center text-muted">
                        <div class="row">
                            <div class="col-4">
                                <div class="mt-0 mb-n3">
                                    <p class="mb-0 text-truncate"><i class="bx bx-user-circle text-primary me-1"></i>Team Leaders
                                    </p>
                                    <h5>4</h5>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mt-0 mb-n3">
                                    <p class="mb-0 text-truncate"><i
                                            class="bx bxs-user-circle text-primary me-1"></i>Loan Specialists</p>
                                    <h5>71</h5>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mt-0 mb-n3">
                                    <p class="mb-0 text-truncate"><i
                                            class="bx bx-male-female text-primary me-1"></i>Teachers</p>
                                    <h5>171</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body border-top mb-n3"><i class="text-muted float-end bx bx-sync h3"
                        style="cursor: pointer;"></i>
                    <p class="text-muted fw-bold">Philippine Addresses</p>
                </div>
                <div class="card-body border-top mb-n3">
                    <div class="mt-n3">
                        <div role="alert" aria-live="polite" aria-atomic="true"
                            class="mt-2 alert alert-dismissible alert-warning"><i
                                class="mdi mdi-alert-circle-outline me-2"></i>Municipality and Barangay district can be
                            updated later on. </div>
                    </div>
                    <div class="text-center">
                        <div class="row">
                            <div class="col-sm-3">
                                <div>
                                    <div class="font-size-24 text-primary mb-0"><i class="bx bxs-cloud-download"></i>
                                    </div>
                                    <p class="text-muted mb-0">Regions</p>
                                    <p class="mt-0">17 <span class="text-muted">of</span> <span class="">17</span></p>
                                    <div class="mt-3"><button class="btn btn-primary btn-sm w-md"
                                            disabled="">Download</button></div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div>
                                    <div class="font-size-24 text-primary mb-0"><i class="bx bxs-cloud-download"></i>
                                    </div>
                                    <p class="text-muted mb-0">Provinces</p>
                                    <p class="mt-0">83 <span class="text-muted">of</span> <span class="">83</span></p>
                                    <div class="mt-3"><button class="btn btn-primary btn-sm w-md"
                                            disabled="">Download</button></div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div>
                                    <div class="font-size-24 text-primary mb-0"><i class="bx bxs-cloud-download"></i>
                                    </div>
                                    <p class="text-muted mb-0">Municipalities</p>
                                    <p class="mt-0">1634 <span class="text-muted">of</span> <span class="">1634</span>
                                    </p>
                                    <div class="mt-3"><button class="btn btn-primary btn-sm w-md"
                                            disabled="">Download</button></div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div>
                                    <div class="font-size-24 text-primary mb-0"><i class="bx bxs-cloud-download"></i>
                                    </div>
                                    <p class="text-muted mb-0">Barangays</p>
                                    <p class="mt-0">42046 <span class="text-muted">of</span> <span class="">42046</span>
                                    </p>
                                    <div class="mt-3"><button class="btn btn-primary btn-sm w-md"
                                            disabled="">Download</button></div>
                                </div>
                            </div>
                        </div>
                        <!--v-if-->
                    </div>
                    <div class="mt-4 mb-0">
                        <!-- <div role="alert" aria-live="polite" aria-atomic="true" class="alert alert-dismissible alert-warning">
                                <i class="mdi mdi-alert-circle-outline me-2"></i>Municipality and Barangay district can be updated later on.
                            </div> -->
                        <p class="text-muted font-size-11">Current data is as of June 30, 2021. Data is based from <a
                                class="fw-bold" href="https://psa.gov.ph/classification/psgc/"
                                target="_blank">Philippine Standard Geographic Code (PSGC).</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-5">
            <Target />
        </div>
    </div>
</template>
<script>
    import Target from "./Group/Targets.vue";
    export default {
        components: {
            Target
        },
        data() {
            return {

            }
        }
    }

</script>
