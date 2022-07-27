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
                <div class="page-content"  style="margin-bottom: -50px;">
                    <div class="account-pages px-4">

                        
                        <Profile />

                        <div class="row g-3 mt-n4">
                            <div class="col-xl-3">
                                <template v-for="item in menuItems" v-bind:key="item.id">
                                    <div v-if="(item.user.includes($page.props.auth.data.role))" class="card border shadow-none"  style="margin-bottom: 4px;">
                                        <Link :href="item.link" class="text-body" >
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
                                </template>
                            </div>
                            <div class="col-xl-9">
                                <slot />
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
import Profile from "@/Shared/Layout/Horizontal/Profile.vue"
import wew from "@/Shared/Layout/Horizontal/NavBar.vue"
export default {
    components: { wew, Profile },
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