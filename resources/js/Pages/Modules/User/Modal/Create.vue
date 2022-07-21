<template>
    <b-modal v-model="showModal" @ok="create($event)" size="xl" :title="'Create '+ title" no-close-on-backdrop centered>
        <div class="row" style="margin-right: 10px; margin-left: 10px;">
            <div class="col-md-3">
                <myUpload field="img" @crop-success="cropSuccess" v-model="photo.show" :width="500" :height="500"
                    :params="params" :headers="headers" lang-type="en" img-format="png">
                </myUpload>
                <div @click="toggleShow" class="fuzone" style="width: 225px; height: 210px;">
                    <div v-if="photo.url != ''">
                        <img :src="photo.url" style="width: 200px; height: 200x;">
                    </div>
                    <div v-else class="fu-text" @click="toggleShow">
                        <span>
                            <i class="fa fa-picture"></i> Click here to upload<br>
                            <!-- <span v-if="errors.avatar" style="color: red; font-size: 12px; margin-top: -20px;">({{ errors.avatar[0] }})</span> -->
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <b-form class="customform">
                    <div class="row mt-3">
                        <div class="col-md-4">
                            <div class="form-group mb-3">
                                <label>Lastname: <span v-if="form.errors" v-text="form.errors.lastname" class="haveerror"></span></label>
                                <input type="text" class="form-control" v-model="user.lastname" style="text-transform: capitalize;">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Firstname: <span v-if="form.errors" v-text="form.errors.firstname" class="haveerror"></span></label>
                                <input type="text" class="form-control" v-model="user.firstname" style="text-transform: capitalize;">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Middlename: <span v-if="form.errors" v-text="form.errors.middlename" class="haveerror"></span></label>
                                <!-- :class="[(form.errors != undefined) ? 'is-invalid' : '']" -->
                                <input type="text" class="form-control" v-model="user.middlename" style="text-transform: capitalize;"> 
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Email: <span v-if="form.errors" v-text="form.errors.email" class="haveerror"></span></label>
                                <input type="email" class="form-control" v-model="user.email" style="text-transform: lowercase;">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Mobile No.:  <span v-if="form.errors" v-text="form.errors.mobile" class="haveerror"></span></label>
                                <input type="text" class="form-control" v-model="user.mobile">
                            </div>
                        </div>
                       
                        <div class="col-md-4" style="margin-top: -8px; margin-bottom: -15px;">
                            <div class="row" style="margin-top: 20px;">
                                <div class="col-md-4">
                                    <div class="custom-control custom-radio mb-3">
                                        <input type="radio" id="customRadio1" class="custom-control-input me-2"  value="M" v-model="user.gender">
                                        <label class="custom-control-label" for="customRadio1">Male</label>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="custom-control custom-radio mb-3">
                                        <input type="radio" id="customRadio2" class="custom-control-input me-2" value="F" v-model="user.gender">
                                        <label class="custom-control-label" for="customRadio2">Female</label>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="col-md-12">
                            <hr class="mb-4">   
                        </div>
                        <div class="col-md-4" v-if="auth.data.role == 'Cluster Leader' || auth.data.role == 'Group Leader'">
                            <div class="form-group">
                                <label>Region: <span v-if="form.errors" v-text="form.errors.region_code" class="haveerror"></span></label>
                                <Multiselect 
                                @input="onChangeProvince(region.code)"
                                v-model="region" 
                                :options="regions"
                                :allow-empty="false"
                                :show-labels="false"
                                label="region" track-by="code"
                                placeholder="Select School"/>
                            </div>
                        </div>
                        <div class="col-md-4" v-if="auth.data.role == 'Group Leader'">
                            <div class="form-group">
                                <label>Province: <span v-if="form.errors" v-text="form.errors.province_code" class="haveerror"></span></label>
                                <Multiselect 
                                v-model="province" 
                                :options="provinces"
                                :allow-empty="false"
                                :show-labels="false"
                                label="name" track-by="code"
                                placeholder="Select Province"/>
                            </div>
                        </div>
                        <div class="col-md-4" v-if="auth.data.role == 'Group Leader'">
                            <div class="form-group">
                                <label>Municipality: <span v-if="form.errors" v-text="form.errors.municipality_code" class="haveerror"></span></label>
                                <Multiselect 
                                v-model="municipality" 
                                :options="municipalities"
                                :allow-empty="false"
                                :show-labels="false"
                                label="name" track-by="code"
                                placeholder="Select Municipality"/>
                            </div>
                        </div>
                    </div>
                </b-form>
                
            </div>
        </div>
        <template v-slot:footer>
            <b-button @click="hide()" variant="secondary" block>Cancel</b-button>
            <b-button @click="create('ok')" variant="primary" :disabled="form.processing" block>Save</b-button>
        </template>
    </b-modal>
</template>
<script>
import Multiselect from '@suadelabs/vue3-multiselect';
export default {
    components : { Multiselect },
    props: ['auth','regions'],
    data(){
        return {
            currentUrl: window.location.origin,
            roles: ['Regional Leader','Team Leader'],
            user: {
                id: '',
                email: '',
                firstname: '',
                lastname: '',
                middlename: '',
                gender: '',
                mobile: '',
                avatar: 'avatar.jpg',
                img: '',
                profile_id: '',
            },
            form: {},
            editable: false,
            showModal: false,
            photo: {
                show: false,
                url: '',
                signature: ''
            },
            params: {
                token: '123456798',
                name: 'avatar'
            },
            headers: {
                smail: '*_~'
            },
            title: '',
            region: '',
            province: '',
            municipality: '',
            municipalities: [],
            provinces: []
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
            return this.title;
        },
    },

    watch: {
        region(){
            this.province = [];
            this.fetchProvince(this.region.code);
        },
        province(){
            this.municipality = [];
            this.fetchMunicipality(this.province.code);
        }
    },

    methods: {
        set(){
            this.showModal = true;
        },
        fetchProvince($id){
            axios.get(this.currentUrl + '/provinces/'+$id)
            .then(response => {
                this.provinces = response.data.data;
            })
            .catch(err => console.log(err));
        },
        fetchMunicipality($id){
            axios.get(this.currentUrl + '/municipalities/'+$id)
            .then(response => {
                this.municipalities = response.data.data;
            })
            .catch(err => console.log(err));
        },
        hide(){

        },
        create() {
            this.form = this.$inertia.form({
                id: this.user.id,
                firstname: this.user.firstname,
                lastname: this.user.lastname,
                middlename: this.user.middlename,
                email: this.user.email,
                mobile: this.user.mobile,
                gender: this.user.gender,
                avatar: this.user.avatar ,
                profile_id: this.user.profile_id,
                region_code: this.region.code,
                municipality_code: this.municipality.code,
                role: this.title,
                img: this.user.img,
                editable: this.editable
            })

            if(!this.editable){
                this.form.post('/users',{
                    preserveScroll: true,
                    onSuccess: (response) => {
                        this.hide();
                    }
                });
            }else{
                this.form.put('/users/update',{
                    preserveScroll: true,
                    onSuccess: (response) => {
                        this.hide();
                    }
                });
            }
        },

        hide(){
            (this.form.hasOwnProperty('reset') ) ? this.form.reset().clearErrors() : this.user = {};
            this.region = ''; this.province = '';
            this.showModal = false;
        },
    }
}
</script>