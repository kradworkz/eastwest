<template>
    <div>
        <div id="preloader">
            <div id="status">
                <div class="spinner-chase">
                    <div class="chase-dot"></div>
                    <div class="chase-dot"></div>
                    <div class="chase-dot"></div>
                    <div class="chase-dot"></div>
                    <div class="chase-dot"></div>
                    <div class="chase-dot"></div>
                </div>
            </div>
        </div>
        <div id="layout-wrapper">
            <wew/>
            <div class="main-content" style="margin-top: -40px;">
                <div class="page-content">
                    <div class="account-pages px-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="d-flex">
                                                    <div class="me-3"><img src="/img/avatar-1.67e2b9d7.jpg" alt=""
                                                            class="avatar-md rounded-circle img-thumbnail"></div>
                                                    <div class="flex-grow-1 align-self-center">
                                                        <div class="text-muted">
                                                            <p class="mb-2">Welcome to skote dashboard</p>
                                                            <h5 class="mb-1">Henry wells</h5>
                                                            <p class="mb-0">UI / UX Designer</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 align-self-center">
                                                <div class="text-lg-center mt-4 mt-lg-0">
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <div>
                                                                <p class="text-muted text-truncate mb-2"> Total Projects </p>
                                                                <h5 class="mb-0">48</h5>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div>
                                                                <p class="text-muted text-truncate mb-2">Projects</p>
                                                                <h5 class="mb-0">40</h5>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div>
                                                                <p class="text-muted text-truncate mb-2">Clients</p>
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

                        <div class="row">
                            <div class="col-xl-4">
                                <div v-for="item in menuItems" v-bind:key="item.id" class="card border shadow-none"  style="margin-bottom: 4px;">
                                    <Link :href="item.link" class="text-body">
                                        <div class="p-1">
                                            <div class="d-flex mt-1">
                                                <div class="avatar-xs align-self-center ms-2 me-2">
                                                    <div class="avatar-title rounded bg-transparent">
                                                        <i :class="`${item.color} bx ${item.icon} h4 mt-1`"></i>
                                                    </div>
                                                </div> 
                                                <div class="overflow-hidden me-auto align-self-center">
                                                    <h5 class="font-size-12 text-truncate mt-1" :class="{'text-primary': $page.component.startsWith(item.name) }">{{ item.label }}</h5> 
                                                </div>
                                            </div>
                                        </div>
                                    </Link>
                                </div>
                            </div>
                            <div class="col-xl-8">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Sales Analytics</h4>
                                         <slot />
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


<script>
import { menuItems} from "../Horizontal/menu";
import wew from "@/Shared/Layout/Horizontal/NavBar.vue"
export default {
    components: { wew },
    data(){
        return {
            currentUrl: window.location.origin,
            menuItems: menuItems,
            isMenuCondensed: false
        }
    },
    created: () => {
        document.body.setAttribute("data-layout", "horizontal");
        document.body.setAttribute("data-topbar", "dark");
        document.body.removeAttribute("data-sidebar", "dark");
        document.body.removeAttribute("data-layout-size", "boxed");
    },
    mounted() {
        const layout = JSON.parse(localStorage.getItem("layout")) || {};
        if (layout.loader == true) {
            document.getElementById("preloader").style.display = "block";
            document.getElementById("status").style.display = "block";

            setTimeout(function() {
                document.getElementById("preloader").style.display = "none";
                document.getElementById("status").style.display = "none";
            }, 2500);
        } else {
            document.getElementById("preloader").style.display = "none";
            document.getElementById("status").style.display = "none";
        }
    },
    methods: {
        toggleMenu() {
            document.body.classList.toggle("sidebar-enable");

            if (window.screen.width >= 992) {
                document.body.classList.toggle("vertical-collpsed");
            } else {
                document.body.classList.remove("vertical-collpsed");
            }
            this.isMenuCondensed = !this.isMenuCondensed;
        },
        toggleRightSidebar() {
            document.body.classList.toggle("right-bar-enabled");
        },
        hideRightSidebar() {
            document.body.classList.remove("right-bar-enabled");
        }
    }
}
</script>