require('./bootstrap');

import { createApp, h } from 'vue';
import { createInertiaApp, Link, Head } from '@inertiajs/inertia-vue3';
import { InertiaProgress } from "@inertiajs/progress";

import BootstrapVue3 from 'bootstrap-vue-3';
import VueToast from 'vue-toast-notification';
import VueApexCharts from "vue3-apexcharts";

import Layout from "@/Shared/Layout/Layout";
import myMixin from "@/Shared/Layout/layouts.mixin";


createInertiaApp({
    resolve: name => {
        let page = require(`./Pages/${name}`).default;
        if (page.layout === undefined) {
            page.layout = Layout;
        }
        return page;
    },
    setup({ el, App, props, plugin }) {
        createApp({
                render: () => h(App, props),
                mixins: [myMixin],
                provide: {
                    count: Math.floor((window.innerHeight - 370) / 63),
                    count2: Math.floor(((window.innerHeight - 170) - 170) / 61),
                    count3: Math.floor(((window.innerHeight - 170) - 230) / 61),
                    count5: Math.floor(((window.innerHeight - 170) - 560) / 61),
                    height: window.innerHeight - 350
                },
                mounted() {
                    this.mixinMethod('horizontal');
                }
            })
            .use(plugin)
            .use(BootstrapVue3, VueToast)
            .use(VueApexCharts)
            .component("Link", Link)
            .component("Head", Head)
            .mount(el)
            // .config.devtools = true
    },
    title: title => `SPMS | ${title}`
})

InertiaProgress.init({
    color: "red",
    showSpinner: true,
});