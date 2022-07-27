<template>
    <Head :title="title" />
    <div class="card-body border-bottom">
         <!-- <div class="row">
            <div class="page-title-left" style="margin-left: -20px; margin-top: -15px;">
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
        </div> -->
        <div class="row mb-n3">
            <div class="col-xl-8 d-inline-block">
                <div class="input-group mb-2" ref="www">
                    <label class="input-group-text bg-light"> <i class='bx bx-search-alt'></i></label>
                    <input type="text" class="form-control" style="width: 35%;" placeholder="Search..." v-model="keyword" @keyup="fetch()"/>
                    <select v-model="school" @change="fetch()" class="form-select" :class="(program == null) ? 'text-muted' : ''" style="width: 160px; font-weight: 500;">
                        <option :value="null" selected>All Schools</option>
                        <option :value="school" v-for="school in schools" v-bind:key="school.id">{{ school.name }}</option>
                    </select>
                    <label style="cursor: pointer;" class="input-group-text bg-light"> <Link href="teachers/import"><i class='bx bxs-graduation'></i></Link></label>
                </div>
                <!-- <Link href="teachers/import">
                    <button type="button" class="btn btn-light waves-effect waves-light me-1 mt-n1">
                        <i class='bx bx-import'></i>
                    </button>
                </Link>
                <form class="d-inline-block ">
                    <div class="search-box">
                        <div class="position-relative">
                            <input type="text" class="form-control bg-light border-light rounded" placeholder="Search..." v-model="keyword">
                            <i class='bx bx-search-alt search-icon'></i>
                        </div>
                    </div>
                </form> -->
            </div>
            <div class="col-xl-4">
                <ul class="list-inline user-chat-nav text-end mb-0 dropdown">
                    <Pagination v-if="meta" @fetch="fetch" :links="links" :pagination="meta"/>
                </ul>
            </div>
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
                        <th style="width: 10;" class="text-center">Status</th>
                        <th style="width: 17%;" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="list in lists" v-bind:key="list.id">
                        <td>
                            <div>
                                <img class="rounded-circle avatar-xs" :src="currentUrl+'/images/avatars/avatar.jpg'" alt="">
                            </div>
                        </td>
                        <td>
                            <h5 class="font-size-13 mb-0 text-dark">{{list.lastname}}, {{list.firstname}} {{list.middlename}}</h5>
                            <p class="font-size-12 text-muted mb-0">{{list.school.name}}</p>
                        </td>
                          
                        <td class="text-center">
                            <h5 class="font-size-12 mb-0 text-dark">{{list.email}}</h5>
                            <p class="font-size-12 text-muted mb-0">{{list.mobile}}</p>
                        </td>
                        <td class="text-center">
                            <span v-if="list.is_active == 1" class="badge bg-success fs-11">Active</span>
                            <span v-else class="badge bg-danger fs-11">NTB</span>
                        </td>
                        <td class="text-center">
                           <button @click="send(list)" type="button" class="btn btn-sm btn-label btn-primary"><i class="bx bx-mail-send label-icon"></i> Form</button>
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
    <Form ref="send"/>
</template>
<script>
    import { Head } from '@inertiajs/inertia-vue3'
    import Pagination from "@/Shared/Pagination.vue";
    import Form from './Modal/Form.vue';
    export default {
        components: { Head, Pagination, Form },
        inject: ['height','count3'],
        props: ['auth','regions','schools'],
        data() {
            return {
                currentUrl: window.location.origin,
                title: "Teachers",
                lists: [],
                meta: {},
                links: {},
                keyword: '',
                school: null
            }
        },

        created(){
            this.fetch();
        },

        watch: {
            keyword(newVal){
                this.checkSearchStr(newVal)
            }
        },

        methods: {
            checkSearchStr: _.debounce(function(string) {
                this.fetch();
            }, 300),

            fetch(page_url){
                page_url = page_url || '/teachers';
                axios.get(page_url,{
                    params : {
                        school : (this.school ==  null) ? null : this.school.id, 
                        keyword : this.keyword,
                        count: this.count3,
                        search: true,
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

            send(list){
                this.$refs.send.set(list);
            }
        }
    }

</script>
