<template>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="d-flex">
                                <div class="me-3"><img :src="currentUrl+'/images/avatars/'+$page.props.auth.data.avatar" alt=""
                                        class="avatar-md rounded-circle img-thumbnail"></div>
                                <div class="flex-grow-1 align-self-center">
                                    <div class="text-muted">
                                        <p class="mb-2">Welcome Cluster Leader</p>
                                        <h5 class="mb-0">{{$page.props.auth.data.firstname}} {{$page.props.auth.data.lastname}}</h5>
                                        <p class="mb-0">{{ $page.props.auth.data.role}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 align-self-center">
                            <div class="text-lg-center mt-4 mt-lg-0">
                                <div class="row">
                                    <div class="col-4">
                                        <div>
                                            <p class="text-muted text-truncate mb-2"> Targets </p>
                                            <h5 class="mb-0">48</h5>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div>
                                            <p class="text-muted text-truncate mb-2">Engagements</p>
                                            <h5 class="mb-0">40</h5>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div>
                                            <p class="text-muted text-truncate mb-2">Converted</p>
                                            <h5 class="mb-0">18</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 d-none d-lg-block">
                            <div class="clearfix mt-4 mt-lg-0">
                                <div class="dropdown b-dropdown float-end btn-group" id="__BVID__4097">
                                    <!----><button aria-haspopup="true" aria-expanded="false" type="button"
                                        class="btn dropdown-toggle btn-primary" id="__BVID__4097__BV_toggle_"><i
                                            class="bx bxs-cog align-middle me-1"></i> Setting </button>
                                    <ul role="menu" tabindex="-1"
                                        class="dropdown-menu dropdown-menu-end dropdown-menu-right"
                                        aria-labelledby="__BVID__4097__BV_toggle_">
                                        <li role="presentation"><a role="menuitem" href="#" target="_self"
                                                class="dropdown-item">Action</a></li>
                                        <li role="presentation"><a role="menuitem" href="#" target="_self"
                                                class="dropdown-item">Another action</a></li>
                                        <li role="presentation"><a role="menuitem" href="#" target="_self"
                                                class="dropdown-item">Something else</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    props: ['auth'],
    data(){
        return {
            currentUrl: window.location.origin
        }
    }
}
</script>