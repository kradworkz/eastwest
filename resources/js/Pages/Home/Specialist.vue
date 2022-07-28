<template>
    <div class="row">
        <div class="col-xl-4">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start">
                        <div class="flex-shrink-0 me-4"><i class="mdi mdi-account-circle text-primary h1"></i></div>
                        <div class="flex-grow-1">
                            <div class="text-muted">
                                <h5>Henry Wells</h5>
                                <p class="mb-1">henrywells@abc.com</p>
                                <p class="mb-0">Id no: #SK0234</p>
                            </div>
                        </div>
                        <div class="dropdown b-dropdown btn-group" id="__BVID__11260">
                            <!---->
                            <div aria-haspopup="true" aria-expanded="false" role="button" aria-disabled="false"
                                tabindex="0" class="btn dropdown-toggle btn-white text-muted p-0"
                                id="__BVID__11260__BV_toggle_"><i class="mdi mdi-dots-horizontal font-size-18"></i>
                            </div>
                            <ul role="menu" tabindex="-1" class="dropdown-menu"
                                aria-labelledby="__BVID__11260__BV_toggle_">
                                <li role="presentation"><a role="menuitem" href="#" target="_self"
                                        class="dropdown-item">Action</a></li>
                                <li role="presentation"><a role="menuitem" href="#" target="_self"
                                        class="dropdown-item">Another action</a></li>
                                <li role="presentation"><a role="menuitem" href="#" target="_self"
                                        class="dropdown-item">Something else here</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-body border-top">
                    <div class="row">
                        <div class="col-sm-6">
                            <div>
                                <p class="text-muted mb-2">Available Balance</p>
                                <h5>$ 9148.23</h5>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end mt-4 mt-sm-0">
                                <p class="text-muted mb-2">Since last month</p>
                                <h5> + $ 248.35 <span class="badge bg-success ms-1 align-bottom">+ 1.3 %</span></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body border-top">
                    <p class="text-muted mb-4">In this month</p>
                    <div class="text-center">
                        <div class="row">
                            <div class="col-sm-6">
                                <div>
                                    <div class="font-size-24 text-primary mb-2"><i class="bx bx-send"></i></div>
                                    <p class="text-muted mb-2">Send</p>
                                    <h5>$ 654.42</h5>
                                    <div class="mt-3"><a href="#" class="btn btn-primary btn-sm w-md">Send</a></div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mt-4 mt-sm-0">
                                    <div class="font-size-24 text-primary mb-2"><i class="bx bx-import"></i></div>
                                    <p class="text-muted mb-2">receive</p>
                                    <h5>$ 1054.32</h5>
                                    <div class="mt-3"><a href="#" class="btn btn-primary btn-sm w-md">Receive</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-8 ms-n2">
            <div class="row g-3">
                <div class="col-md-4">
                    <div class="card mini-stats-wid">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <p class="text-muted fw-medium mb-2">Targets</p>
                                    <h4 class="mb-0">135</h4>
                                </div>
                                <div class="avatar-sm align-self-center mini-stat-icon rounded-circle bg-primary"><span
                                        class="avatar-title"><i class="bx bx-copy-alt font-size-24"></i></span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mini-stats-wid">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <p class="text-muted fw-medium mb-2">Engagements</p>
                                    <h4 class="mb-0">323</h4>
                                </div>
                                <div class="avatar-sm align-self-center mini-stat-icon rounded-circle bg-primary"><span
                                        class="avatar-title"><i class="bx bx-archive-in font-size-24"></i></span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mini-stats-wid">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <p class="text-muted fw-medium mb-2">Converted</p>
                                    <h4 class="mb-0">16</h4>
                                </div>
                                <div class="avatar-sm align-self-center mini-stat-icon rounded-circle bg-primary"><span
                                        class="avatar-title"><i class="bx bx-purchase-tag-alt font-size-24"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mt-n2">
                    <Earning />
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import Earning from "./Earning.vue";
export default {
    components : { Earning }
}
</script>
