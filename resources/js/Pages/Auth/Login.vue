<template>
<Head title="Login" />
<div class="d-flex flex-column min-vh-100 justify-content-center align-items-center">
    <div class="">
        <div class="card">
            <div class="card-body pt-4">
                <div class="p-2">
                    <form class="form-horizontal" @submit.prevent="submit"> 

                        <div class="row mb-3">
                            <div class="col-2">
                                <img src="images/dost.png" alt="" class="avatar-sm">
                            </div>
                            <div class="col-10">
                                <div class="text-primary mt-1">
                                    <p>Sales Performance Monitoring System <br />Providing you with world-class service.</p>
                                </div>
                            </div>
                        </div>

                        <div class="form-group mb-2">
                            <label for="email" style="margin-bottom: -5px;">Email</label>
                            <input placeholder="Enter email" class="form-control" type="email" v-model="form.email" required autofocus>
                  
                            <span class="invalid-feedback" role="alert">
                                <strong>asdada</strong>
                            </span>
                        </div>

                        <div class="form-group mb-4">
                            <label for="password" style="margin-bottom: -5px;">Password</label>
                            <input type="password" class="form-control" placeholder="Enter password"
                                v-model="form.password" required autocomplete="current-password">
                        </div>

                         <div class="form-check text-success" style="font-size: 13px;">
                            <input type="checkbox" v-model="form.remember" class="form-check-input" id="__BVID__90">
                            <label class="form-check-label" for="__BVID__90">Remember me</label>
                        </div>
                        
                        <div class="mt-3 d-grid">
                            <button :class="{ 'opacity-25': form.processing }" :disabled="form.processing" class="btn btn-block waves-effect waves-light" style="background-color: rgb(124, 0, 77); color: white;" type="submit">LogIn</button>
                        </div>

                        <div class="mt-4 mb-n3 text-center">
                            <p class="font-size-11">
                                Forgot you password? <Link href="forgot-password" class="fw-medium text-primary">Click here</Link>
                            </p>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <p class="text-center">© Pitch-i <i class='bx bxs-heart text-danger'></i> 2022</p>
    </div>
</div>
</template>
<script>
export default {
   layout: null
}
</script>
<script setup>
import { useForm } from '@inertiajs/inertia-vue3';

defineProps({
    canResetPassword: Boolean,
    status: String,
});

const form = useForm({
    email: '',
    password: '',
    remember: false
});

const submit = () => {
    form.post('login', {
        onFinish: () => form.reset('password'),
    });
};
</script>