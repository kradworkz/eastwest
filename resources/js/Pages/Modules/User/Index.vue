<template>
    <Head :title="title" />
    <div class="card-body border-bottom">
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
        <div class="float-end" style="margin-top: -8px; margin-bottom: -10px;">
            <form class="mt-n1 float-sm-end d-flex align-items-center">
                <div class="search-box">
                    <div class="position-relative">
                        <input type="text" class="form-control bg-light border-light rounded" placeholder="Search...">
                        <i class="bx bx-search-alt search-icon"></i>
                    </div>
                </div>
            </form>
            <button @click="create" type="button" class="btn btn-danger waves-effect waves-light me-1 mt-n1">
                <i class='bx bx-plus-medical'></i>
            </button>
        </div>
    </div>
    <div class="card-body" :style="{ height: height + 'px' }">
        <div class="table-responsive">
            <table class="table table-centered table-nowrap align-middle">
                <thead class="thead-light">
                    <tr class="font-size-11">
                        <th style="width: 2%;"></th>
                        <th style="width: 25%;">Name</th>
                        <th style="width: 23%;" class="text-center">Contact</th>
                        <th style="width: 23%;" class="text-center">Targets</th>
                        <th style="width: 10;" class="text-center">Status</th>
                        <th style="width: 17%;" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="list in lists" v-bind:key="list.id">
                        <td>
                            <div class="avatar-xs" v-if="list.avatar == 'avatar.jpg'">
                                <span class="avatar-title rounded-circle">{{list.lastname.charAt(0)}}</span>
                            </div>
                            <div v-else>
                                <img class="rounded-circle avatar-xs" :src="currentUrl+'/images/avatars/'+list.avatar" alt="">
                            </div>
                        </td>
                        <td>
                            <h5 class="font-size-13 mb-0 text-dark">{{list.lastname}}, {{list.firstname}} {{list.middlename}}</h5>
                        </td>
                          
                        <td class="text-center">
                            <h5 class="font-size-12 mb-0 text-dark">{{list.email}}</h5>
                            <p class="font-size-12 text-muted mb-0">{{list.mobile}}</p>
                        </td>
                        <td class="text-center">
                            <h5 v-if="(list.target != null) " class="font-size-12 mb-0 text-dark">{{ list.target.engagements.length+' of '+list.target.count }}</h5>
                            <code v-else class="highlighter-rouge"> not set </code>
                        </td>
                        <td class="text-center">
                            <span v-if="list.is_active == 1" class="badge bg-success fs-11">Active</span>
                            <span v-else class="badge bg-danger fs-11">Inactive</span>
                        </td>
                        <td class="text-center">
                            <a class="me-3" @click="update(list)">
                                <i v-bind:class="(list.is_active == 1) ? 'text-success bx bx-lock-open' : 'text-dark bx bxs-lock'"></i>
                            </a>
                            <a class="me-3 text-warning" @click="edit(list)"><i class='bx bx-edit-alt' ></i></a>
                            <a class="text-info" @click="target(list)"><i class='bx bx-target-lock'></i></a>
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
    <Create :auth="auth" :regions="regions" ref="create" />
    <Target ref="target"/>
</template>
<script>
    import { Head } from '@inertiajs/inertia-vue3'
    import Pagination from "@/Shared/Pagination.vue";
    import Create from './Modal/Create.vue';
    import Target from './Modal/Target.vue';
    export default {
        components: { Head, Pagination, Create, Target },
        inject: ['height'],
        props: ['auth','regions'],
        data() {
            return {
                currentUrl: window.location.origin,
                title: "",
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

        computed: {
            title : function() {
                if(this.auth.data.role == 'Cluster Leader'){
                    this.title = 'Group Leader';
                }else if(this.auth.data.role == 'Group Leader'){
                    this.title = 'Team Leader';
                }else if(this.auth.data.role == 'Team Leader'){
                    this.title = 'Loan Specialist';
                }else{
                    this.title = '';
                }
                this.fetch();
                return this.title;
            },
        },

        methods: {
            fetch(page_url){
                page_url = page_url || '/users';
                axios.get(page_url,{
                    params : {
                        keyword : this.keyword,
                        count: this.count3,
                        search: true,
                        type: this.title
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
            },

            target(list) {
                this.$refs.target.set(list);
            },

        }
    }

</script>
