<template>
<Head :title="title" />
    <div class="col-xl-12">
        <!-- style="overflow-y: auto; overflow-x: hidden;" data-simplebar :style="{ height: (h-280) + 'px' }" -->
        <Cluster v-if="$page.props.auth.data.role == 'Cluster Leader'"/>
        <Group v-else-if="$page.props.auth.data.role == 'Group Leader'"/>
        <Team v-else-if="$page.props.auth.data.role == 'Team Leader'"/>
        <Specialist v-else/>
    </div>
</template>
<script>
import Cluster from "./Home/Cluster.vue";
import Group from "./Home/Group.vue";
import Team from "./Home/Team.vue";
import Specialist from "./Home/Specialist.vue";
import { Head } from '@inertiajs/inertia-vue3'
export default {
    components : { Head, Cluster, Group, Team, Specialist },
    data(){
        return { 
            title: 'Home',
            h: window.innerHeight,
        }
    }
}
</script>
