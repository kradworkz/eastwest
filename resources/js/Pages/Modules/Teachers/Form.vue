<template>
    <Head title="Application Form" />
    <div id="app">
        <section id="features" class="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mt-n4 ">
                        <div class="text-center mb-5">
                            <h4>SALARY LOAN APPLICATION FORM</h4>
                            <div class="mt-n2 small-title"> Zamboanga Peninsula | EastWest Rural Bank Inc.</div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center pt-4">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body ">
                                <b-form class="customform ">
                                    <div class="text-center">
                                        <div class="avatar-md mx-auto">
                                            <div class="avatar-title rounded-circle bg-light">
                                                <i class="bx bxs-user-circle h1 mb-0 text-primary"></i>
                                            </div>
                                        </div>
                                        <div class="p-2 mt-2">
                                            <h6>{{ teacher.data.firstname }} {{ teacher.data.lastname }}</h6>
                                            <p class="font-size-12 text-muted">
                                                I hereby apply for DepEd Teachers’ Salary Loan
                                            </p>
                                            <hr/>
                                            <span class="font-size-12 text-muted">Loan Specialist </span>: {{ specialist.data.firstname }} {{ specialist.data.lastname }}
                                            <div class="mt-4">
                                                <button type="button" :disabled="form.processing" @click="create()" class="btn btn-success w-md">Avail</button>
                                            </div>
                                        </div>
                                    </div>
                                   
                                </b-form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>
<script>
import { Head } from '@inertiajs/inertia-vue3';
    export default {
        components : { Head },
        props: ['specialist','teacher'],
        layout: null,
        data(){
            return {
                form: {}
            }
        },

        methods : {
            create(){
                this.form = this.$inertia.form({
                    user_id: this.specialist.data.id,
                    teacher_id: this.teacher.data.id,
                })
                this.form.post('/avail',{
                    preserveScroll: true,
                    onSuccess: (response) => {
                        this.hide();
                    },
                });
            },
        }
    }

</script>
