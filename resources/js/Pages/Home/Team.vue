<template>
    <div class="row g-2">
        <div class="col-md-4">
            <div class="card mini-stats-wid">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="flex-grow-1">
                            <p class="text-muted fw-medium mb-2">Targets</p>
                            <h4 class="mb-0">135</h4>
                        </div>
                        <div class="avatar-sm align-self-center mini-stat-icon rounded-circle bg-primary"><span
                                class="avatar-title"><i class="bx bx-copy-alt font-size-24"></i></span></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mini-stats-wid">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="flex-grow-1">
                            <p class="text-muted fw-medium mb-2">Engagements</p>
                            <h4 class="mb-0">323</h4>
                        </div>
                        <div class="avatar-sm align-self-center mini-stat-icon rounded-circle bg-primary"><span
                                class="avatar-title"><i class="bx bx-archive-in font-size-24"></i></span></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mini-stats-wid">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="flex-grow-1">
                            <p class="text-muted fw-medium mb-2">Converted</p>
                            <h4 class="mb-0">16</h4>
                        </div>
                        <div class="avatar-sm align-self-center mini-stat-icon rounded-circle bg-primary"><span
                                class="avatar-title"><i class="bx bx-purchase-tag-alt font-size-24"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row g-2" style="margin-top: -23px;">
        <div class="col-xl-4">
            <div data-v-f045c524="" class="is-loading">
                <div data-v-f045c524="" class="preloader-component" style="display: none;">
                    <div data-v-f045c524="" class="status" style="display: none;">
                        <div data-v-f045c524="" class="spinner-chase">
                            <div data-v-f045c524="" class="chase-dot"></div>
                            <div data-v-f045c524="" class="chase-dot"></div>
                            <div data-v-f045c524="" class="chase-dot"></div>
                            <div data-v-f045c524="" class="chase-dot"></div>
                            <div data-v-f045c524="" class="chase-dot"></div>
                            <div data-v-f045c524="" class="chase-dot"></div>
                        </div>
                    </div>
                </div>
                <div data-v-f045c524="" class="card">
                    <div data-v-f045c524="" class="card-body">
                        <h4 data-v-f045c524="" class="card-title mb-4">Top Regions Target Acquired</h4>
                        <apexchart ref="realtimeChart" class="apex-charts" type="pie" height="185" :series="g"
                            :options="chartOptions">
                        </apexchart>
                        <div data-v-f045c524="" class="table-responsive mt-4">
                            <table data-v-f045c524="" class="table table-centered">
                                <tbody data-v-f045c524="">
                                    <tr data-v-f045c524="">
                                        <td data-v-f045c524="" style="width: 140px;">
                                            <p data-v-f045c524="" class="mb-0">Luzon</p>
                                        </td>
                                        <td data-v-f045c524="" style="width: 120px;">
                                            <h5 data-v-f045c524="" class="mb-0">1,456</h5>
                                        </td>
                                        <td data-v-f045c524="">
                                            <div class="progress" style="height: 5px;" data-v-f045c524="">
                                                <div role="progressbar" aria-valuemin="0" aria-valuemax="100"
                                                    aria-valuenow="94" class="progress-bar bg-primary"
                                                    style="width: 34%;"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr data-v-f045c524="">
                                        <td data-v-f045c524="">
                                            <p data-v-f045c524="" class="mb-0">Visayas</p>
                                        </td>
                                        <td data-v-f045c524="">
                                            <h5 data-v-f045c524="" class="mb-0">1,123</h5>
                                        </td>
                                        <td data-v-f045c524="">
                                            <div class="progress" style="height: 5px;" data-v-f045c524="">
                                                <div role="progressbar" aria-valuemin="0" aria-valuemax="100"
                                                    aria-valuenow="82" class="progress-bar bg-success"
                                                    style="width: 22%;"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr data-v-f045c524="">
                                        <td data-v-f045c524="">
                                            <p data-v-f045c524="" class="mb-0">Mindanao</p>
                                        </td>
                                        <td data-v-f045c524="">
                                            <h5 data-v-f045c524="" class="mb-0">1,026</h5>
                                        </td>
                                        <td data-v-f045c524="">
                                            <div class="progress" style="height: 5px;" data-v-f045c524="">
                                                <div role="progressbar" aria-valuemin="0" aria-valuemax="100"
                                                    aria-valuenow="70" class="progress-bar bg-warning"
                                                    style="width: 70%;"></div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <Earning />
        </div>
    </div>
</template>
<script>
import Earning from "./Earning.vue";
export default {
    components : { Earning },
    data(){
        return {
            colors: ['bg-primary', 'bg-danger', 'bg-success', 'bg-warning', 'bg-info', 'bg-seconday'],
            series: [],
            chartOptions: {
                chart: {
                    type: 'pie',
                    height: 50,
                },
                labels: ['Male', 'Female'],
                colors: ['#0d68e3', '#e21673'],
                legend: {
                    show: false,
                }
            },
            h: window.innerHeight,
            g: [73,37]
        }
    }
}
</script>
