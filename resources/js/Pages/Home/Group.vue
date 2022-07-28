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
                                    <p class="mb-0 text-truncate"><i
                                            class="bx bx-user-circle text-primary me-1"></i>Team Leaders
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
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Latest Transaction</h4>
                    <div data-v-f045c524="" class="is-loading">
                        <div data-v-f045c524="" class="preloader-component" style="display: none;">
                            <div data-v-f045c524="" class="status" style="display: none;">
                                <div data-v-f045c524="" class="spinner-chase">
                                    <div data-v-f045c524="" class="chase-dot"></div>
                                    <div data-v-f045c524="" class="chase-dot"></div>
                                    <div data-v-f045c524="" class="chase-dot"></div>
                                    <div data-v-f045c524="" class="chase-dot"></div>
                                    <div data-v-f045c524="" class="chase-dot"></div>
                                    <div data-v-f045c524="" class="chase-dot"></div>
                                </div>
                            </div>
                        </div>
                        <div data-v-f045c524="" class="table-responsive mb-0">
                            <table data-v-f045c524="" class="table align-middle table-nowrap">
                                <thead data-v-f045c524="" class="table-light">
                                    <tr data-v-f045c524="">
                                        <th data-v-f045c524="" style="width: 20px;">
                                            <div data-v-f045c524="" class="form-check font-size-16 align-middle"><input
                                                    data-v-f045c524="" type="checkbox" id="transactionCheck01"
                                                    class="form-check-input"><label data-v-f045c524=""
                                                    for="transactionCheck01" class="form-check-label"></label></div>
                                        </th>
                                        <th data-v-f045c524="" class="align-middle">Loan ID</th>
                                        <th data-v-f045c524="" class="align-middle">Loan Name</th>
                                        <th data-v-f045c524="" class="align-middle">Date</th>
                                        <th data-v-f045c524="" class="align-middle">Amount</th>
                                        <th data-v-f045c524="" class="align-middle">Payment Status</th>
                                        <th data-v-f045c524="" class="align-middle">Payment Method</th>
                                        <th data-v-f045c524="" class="align-middle">View Details</th>
                                    </tr>
                                </thead>
                                <tbody data-v-f045c524="">
                                    <tr data-v-f045c524="">
                                        <td data-v-f045c524="">
                                            <div data-v-f045c524="" class="form-check font-size-16"><input
                                                    data-v-f045c524="" type="checkbox" id="transactionCheck1"
                                                    class="form-check-input"><label data-v-f045c524=""
                                                    for="transactionCheck1" class="form-check-label"></label></div>
                                        </td>
                                        <td data-v-f045c524=""><a data-v-f045c524="" href="javascript: void(0);"
                                                class="text-body fw-bold">#SK2540</a></td>
                                        <td data-v-f045c524="">Neal Matthews</td>
                                        <td data-v-f045c524="">07 Oct, 2022</td>
                                        <td data-v-f045c524="">₱400</td>
                                        <td data-v-f045c524=""><span data-v-f045c524=""
                                                class="badge badge-pill badge-soft-success font-size-11">Paid</span>
                                        </td>
                                        <td data-v-f045c524=""><i data-v-f045c524=""
                                                class="fab fa-cc-mastercard me-1"></i> Landbank </td>
                                        <td data-v-f045c524=""><button data-v-f045c524="" type="button"
                                                class="btn btn-primary btn-sm btn-rounded"> View Details </button></td>
                                        <!---->
                                    </tr>
                                    <tr data-v-f045c524="">
                                        <td data-v-f045c524="">
                                            <div data-v-f045c524="" class="form-check font-size-16"><input
                                                    data-v-f045c524="" type="checkbox" id="transactionCheck2"
                                                    class="form-check-input"><label data-v-f045c524=""
                                                    for="transactionCheck2" class="form-check-label"></label></div>
                                        </td>
                                        <td data-v-f045c524=""><a data-v-f045c524="" href="javascript: void(0);"
                                                class="text-body fw-bold">#SK2541</a></td>
                                        <td data-v-f045c524="">Jamal Burnett</td>
                                        <td data-v-f045c524="">07 Oct, 2022</td>
                                        <td data-v-f045c524="">₱380</td>
                                        <td data-v-f045c524=""><span data-v-f045c524=""
                                                class="badge badge-pill badge-soft-success font-size-11 badge-soft-danger">Chargeback</span>
                                        </td>
                                        <td data-v-f045c524=""><i data-v-f045c524="" class="fab fa-cc-visa me-1"></i>
                                            Visa </td>
                                        <td data-v-f045c524=""><button data-v-f045c524="" type="button"
                                                class="btn btn-primary btn-sm btn-rounded"> View Details </button></td>
                                        <!---->
                                    </tr>
                                    <tr data-v-f045c524="">
                                        <td data-v-f045c524="">
                                            <div data-v-f045c524="" class="form-check font-size-16"><input
                                                    data-v-f045c524="" type="checkbox" id="transactionCheck3"
                                                    class="form-check-input"><label data-v-f045c524=""
                                                    for="transactionCheck3" class="form-check-label"></label></div>
                                        </td>
                                        <td data-v-f045c524=""><a data-v-f045c524="" href="javascript: void(0);"
                                                class="text-body fw-bold">#SK2542</a></td>
                                        <td data-v-f045c524="">Juan Mitchell</td>
                                        <td data-v-f045c524="">06 Oct, 2022</td>
                                        <td data-v-f045c524="">₱384</td>
                                        <td data-v-f045c524=""><span data-v-f045c524=""
                                                class="badge badge-pill badge-soft-success font-size-11">Paid</span>
                                        </td>
                                        <td data-v-f045c524=""><i data-v-f045c524=""
                                                class="fab fab fa-cc-paypal me-1"></i> Paypal </td>
                                        <td data-v-f045c524=""><button data-v-f045c524="" type="button"
                                                class="btn btn-primary btn-sm btn-rounded"> View Details </button></td>
                                        <!---->
                                    </tr>
                                    <tr data-v-f045c524="">
                                        <td data-v-f045c524="">
                                            <div data-v-f045c524="" class="form-check font-size-16"><input
                                                    data-v-f045c524="" type="checkbox" id="transactionCheck4"
                                                    class="form-check-input"><label data-v-f045c524=""
                                                    for="transactionCheck4" class="form-check-label"></label></div>
                                        </td>
                                        <td data-v-f045c524=""><a data-v-f045c524="" href="javascript: void(0);"
                                                class="text-body fw-bold">#SK2543</a></td>
                                        <td data-v-f045c524="">Barry Dick</td>
                                        <td data-v-f045c524="">05 Oct, 2022</td>
                                        <td data-v-f045c524="">₱412</td>
                                        <td data-v-f045c524=""><span data-v-f045c524=""
                                                class="badge badge-pill badge-soft-success font-size-11">Paid</span>
                                        </td>
                                        <td data-v-f045c524=""><i data-v-f045c524=""
                                                class="fab fa-cc-mastercard me-1"></i> Landbank </td>
                                        <td data-v-f045c524=""><button data-v-f045c524="" type="button"
                                                class="btn btn-primary btn-sm btn-rounded"> View Details </button></td>
                                        <!---->
                                    </tr>
                                    <tr data-v-f045c524="">
                                        <td data-v-f045c524="">
                                            <div data-v-f045c524="" class="form-check font-size-16"><input
                                                    data-v-f045c524="" type="checkbox" id="transactionCheck5"
                                                    class="form-check-input"><label data-v-f045c524=""
                                                    for="transactionCheck5" class="form-check-label"></label></div>
                                        </td>
                                        <td data-v-f045c524=""><a data-v-f045c524="" href="javascript: void(0);"
                                                class="text-body fw-bold">#SK2544</a></td>
                                        <td data-v-f045c524="">Ronald Taylor</td>
                                        <td data-v-f045c524="">04 Oct, 2022</td>
                                        <td data-v-f045c524="">₱404</td>
                                        <td data-v-f045c524=""><span data-v-f045c524=""
                                                class="badge badge-pill badge-soft-success font-size-11 badge-soft-warning">Refund</span>
                                        </td>
                                        <td data-v-f045c524=""><i data-v-f045c524="" class="fab fa-cc-visa me-1"></i>
                                            Visa </td>
                                        <td data-v-f045c524=""><button data-v-f045c524="" type="button"
                                                class="btn btn-primary btn-sm btn-rounded"> View Details </button></td>
                                        <!---->
                                    </tr>
                                    <tr data-v-f045c524="">
                                        <td data-v-f045c524="">
                                            <div data-v-f045c524="" class="form-check font-size-16"><input
                                                    data-v-f045c524="" type="checkbox" id="transactionCheck6"
                                                    class="form-check-input"><label data-v-f045c524=""
                                                    for="transactionCheck6" class="form-check-label"></label></div>
                                        </td>
                                        <td data-v-f045c524=""><a data-v-f045c524="" href="javascript: void(0);"
                                                class="text-body fw-bold">#SK2545</a></td>
                                        <td data-v-f045c524="">Jacob Hunter</td>
                                        <td data-v-f045c524="">04 Oct, 2022</td>
                                        <td data-v-f045c524="">₱392</td>
                                        <td data-v-f045c524=""><span data-v-f045c524=""
                                                class="badge badge-pill badge-soft-success font-size-11">Paid</span>
                                        </td>
                                        <td data-v-f045c524=""><i data-v-f045c524=""
                                                class="fab fab fa-cc-paypal me-1"></i> Paypal </td>
                                        <td data-v-f045c524=""><button data-v-f045c524="" type="button"
                                                class="btn btn-primary btn-sm btn-rounded"> View Details </button></td>
                                        <!---->
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
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
