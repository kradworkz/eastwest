<template>
    <b-modal v-model="showModal" ok-title="Confirm" title="Set Targets" centered>
        <div class="row" style="margin-right: 10px; margin-left: 10px; margin-bottom: 20px;">
            <b-form class="customform">
                <div class="row mt-3">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Target: <span v-if="form.errors" v-text="form.errors.count" class="haveerror"></span></label>
                            <input type="text" class="form-control" v-model="target">
                        </div>
                    </div>
                    <!-- <div class="col-md-12">
                        <label>Month: <span v-if="form.errors" v-text="form.errors.month" class="haveerror"></span></label>
                        <date-picker
                            v-model:value="month"
                            type="month" format="YYYY-MM"
                            lang="en"
                            placeholder="Select Month"
                            >
                        </date-picker>
                    </div> -->
                </div>
            </b-form>
        </div>
        <template v-slot:footer>
            <b-button @click="hide()" variant="secondary" block>Cancel</b-button>
            <b-button @click="create('ok')" variant="primary" :disabled="form.processing" block>Save</b-button>
        </template>
    </b-modal>
</template>

<script>
import DatePicker from 'vue-datepicker-next';
import 'vue-datepicker-next/index.css';
    export default {
        components: { DatePicker }, 
        data() {
            return {
                currentUrl: window.location.origin,
                errors: [],
                user: {},
                status: false,
                showModal: false,
                form: {},
                id: '',
                target: '',
                month: ''
            }
        },

        methods: {
            set(user) {
                this.user = user;
                this.showModal = true;
            },

            create(){
                this.form = this.$inertia.form({
                    id: this.user.id,
                    count: this.target,
                    // month: (this.month != '') ? new Date(this.month).toLocaleDateString("af-ZA") : '',
                    type: 'targets',
                    editable: false,
                })
                this.form.post('/user/targets',{
                    preserveScroll: true,
                    onSuccess: (response) => {
                        this.hide();
                    },
                });
            },

            hide(){
                (this.form.hasOwnProperty('reset') ) ? this.form.reset().clearErrors() : this.user = {};
                 this.showModal = false;
            }
        }
    }

</script>
