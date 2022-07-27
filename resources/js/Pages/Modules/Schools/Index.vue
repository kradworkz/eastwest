<template>
    <Head :title="title" />
    <div class="card">
        <div class="card-body border-bottom">
            <div class="row mb-n3">
                <div class="col-xl-4 d-inline-block">
                    <div class="page-title-left" style="margin-left: -20px; margin-top: -15px; margin-bottom: -30px;">
                        <ol class="breadcrumb m-0 font-size-15">
                            <li>
                                <div class="avatar-xs me-3 mb-n2 mt-n1">
                                    <div class="avatar-title bg-transparent rounded">
                                        <i class="bx bxs-group font-size-24 text-info"></i>
                                    </div>
                                </div>
                            </li>
                            <li class="breadcrumb-item fw-bold ms-n2">{{ title }}</li>
                        </ol>
                    </div>
                </div>
                <div class="col-xl-6">
                    <button @click="create" type="button" class="float-end btn btn-danger waves-effect waves-light ms-2 mt-n2">
                        <i class='bx bx-plus-medical'></i>
                    </button>
                    <form class="mt-n2 float-sm-end d-flex align-items-center">
                        <div class="search-box">
                            <div class="position-relative">
                                <input type="text" class="form-control bg-light border-light rounded" placeholder="Search...">
                                <i class="bx bx-search-alt search-icon"></i>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-xl-2">
                    <ul class="list-inline user-chat-nav text-end mb-0 dropdown" style="margin-top: -10px;">
                        <Pagination v-if="meta" @fetch="fetch" :links="links" :pagination="meta"/>
                    </ul>
                </div>
            </div>
            <!-- <div class="page-title-left" style="margin-left: -20px; margin-top: -15px; margin-bottom: -30px;">
                <ol class="breadcrumb m-0 font-size-15">
                    <li>
                        <div class="avatar-xs me-3 mb-n2 mt-n1">
                            <div class="avatar-title bg-transparent rounded">
                                <i class="bx bxs-group font-size-24 text-info"></i>
                            </div>
                        </div>
                    </li>
                    <li class="breadcrumb-item fw-bold ms-n2">{{ title }}</li>
                </ol>
            </div>
            <div class="float-end">
                <ul class="list-inline user-chat-nav text-end mb-0 dropdown">
                    <li class="list-inline-item d-none d-sm-inline-block"> 
                        <button @click="create" type="button" class="btn btn-danger waves-effect waves-light me-1" style="margin-top: -30px;">
                            <i class='bx bx-plus-medical'></i>
                        </button>
                    </li>
                    <li class="list-inline-item d-none d-sm-inline-block"> 
                        <form class="mt-n1 float-sm-end d-flex align-items-center">
                            <div class="search-box">
                                <div class="position-relative">
                                    <input type="text" class="form-control bg-light border-light rounded" placeholder="Search...">
                                    <i class="bx bx-search-alt search-icon"></i>
                                </div>
                            </div>
                        </form>
                    </li>
                    <Pagination v-if="meta" @fetch="fetch" :links="links" :pagination="meta"/>
                </ul>
            </div> -->
        </div>
        <div class="card-body" :style="{ height: height + 'px' }">
            <div class="table-responsive">
                <table class="table table-centered table-nowrap align-middle">
                    <thead class="thead-light">
                        <tr class="font-size-11">
                            <th style="width: 2%;"></th>
                            <th style="width: 25%;">Name</th>
                            <th style="width: 23%;" class="text-center">Shortcut</th>
                            <th style="width: 17%;" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="list in lists" v-bind:key="list.id">
                            <td>
                                <div class="avatar-xs" v-if="list.avatar == 'avatar.jpg'">
                                    <span class="avatar-title rounded-circle">{{list.name.charAt(0)}}</span>
                                </div>
                                <div v-else>
                                    <img class="rounded-circle avatar-xs" :src="currentUrl+'/images/avatars/avatar.jpg'" alt="">
                                </div>
                            </td>
                            <td>
                                <h5 class="font-size-13 mb-0 text-dark">{{list.name}}</h5>
                            </td>
                            <td class="text-center">
                                {{list.shortcut}}
                            </td>
                        
                            <td class="text-center">
                                <a class="me-3" @click="update(list)">
                                    <i v-bind:class="(list.is_active == 1) ? 'text-success bx bx-lock-open' : 'text-dark bx bxs-lock'"></i>
                                </a>
                                <a class="me-3 text-warning" @click="edit(list)"><i class='bx bx-edit-alt' ></i></a>
                                    <a class="text-info" @click="verify(list)"><i class='bx bx-mail-send'></i></a>
                            </td>
                        </tr>
                        <tr v-if="lists.length == 0">
                            <td class="text-center" colspan="5">
                                No users found.
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <Create :auth="auth" :regions="regions" ref="create" />
</template>
<script>
    import { Head } from '@inertiajs/inertia-vue3'
    import Pagination from "@/Shared/Pagination.vue";
    import Create from './Modal/Create.vue';
    export default {
        components: { Head, Pagination, Create },
        inject: ['height','count3'],
        props: ['auth','regions'],
        data() {
            return {
                currentUrl: window.location.origin,
                title: "Schools",
                items: [{
                        text: "Group Leader",
                        href: "/",
                    },
                    {
                        text: "Lists",
                        active: true,
                    },
                ],
                lists: [],
                meta: {},
                links: {},
                keyword: '',
            }
        },

        created(){
            this.fetch();
        },

        methods: {
            fetch(page_url){
                page_url = page_url || '/schools';
                axios.get(page_url,{
                    params : {
                        keyword : this.keyword,
                        count: this.count3,
                        search: true
                    }
                })
                .then(response => {
                    if(response){
                        this.lists = response.data.data;
                        this.meta = response.data.meta;
                        this.links = response.data.links;
                    }
                })
                .catch(err => console.log(err));
            },

            create() {
                this.$refs.create.set();
            }
        }
    }

</script>
