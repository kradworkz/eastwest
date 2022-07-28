<script>
    import Sellingchart from "./sellingchart";

    export default {
        components: {
            Sellingchart,
        },
        data() {
            return {
                products: [{
                    title: "Product A",
                    amount: "$ 6385",
                    revenue: "0.6",
                    list: [{
                            name: "Region IX",
                            text: "Zamboanga Peninsula",
                            sales: 37,
                            color: "#556ee6",
                        },
                        {
                            name: "Region X",
                            text: "Northern Mindanao",
                            sales: 72,
                            color: "#34c38f",
                        },
                        {
                            name: "Region XI",
                            text: "Davao Region",
                            sales: 54,
                            color: "#f46a6a",
                        },
                    ],
                }, ],
            };
        },
        methods: {
            productSelling(event) {
                switch (event.target.value) {
                    case "december":
                        this.products = [{
                            title: "Product B",
                            amount: "$ 7842",
                            revenue: "0.4",
                            list: [{
                                    name: "Product D",
                                    text: "Neque quis est",
                                    sales: 41,
                                    color: "#f46a6a",
                                },
                                {
                                    name: "Product E",
                                    text: "Quis autem iure",
                                    sales: 14,
                                    color: "#556ee6",
                                },
                                {
                                    name: "Product F",
                                    text: "Sed aliquam mauris.",
                                    sales: 85,
                                    color: "#34c38f",
                                },
                            ],
                        }, ];
                        break;
                    case "january":
                        this.products = [{
                            title: "Product A",
                            amount: "$ 6385",
                            revenue: "0.6",
                            list: [{
                                    name: "Product A",
                                    text: "Neque quis est",
                                    sales: 37,
                                    color: "#556ee6",
                                },
                                {
                                    name: "Product B",
                                    text: "Quis autem iure",
                                    sales: 72,
                                    color: "#f46a6a",
                                },
                                {
                                    name: "Product C",
                                    text: "Sed aliquam mauris.",
                                    sales: 54,
                                    color: "#34c38f",
                                },
                            ],
                        }, ];
                        break;
                    case "november":
                        this.products = [{
                            title: "Product C",
                            amount: "$ 4745",
                            revenue: "0.8",
                            list: [{
                                    name: "Product G",
                                    text: "Neque quis est",
                                    sales: 31,
                                    color: "#34c38f",
                                },
                                {
                                    name: "Product H",
                                    text: "Quis autem iure",
                                    sales: 20,
                                    color: "#556ee6",
                                },
                                {
                                    name: "Product I",
                                    text: "Sed aliquam mauris.",
                                    sales: 40,
                                    color: "#f46a6a",
                                },
                            ],
                        }, ];
                        break;
                    case "october":
                        this.products = [{
                            title: "Product D",
                            amount: "$ 8745",
                            revenue: "0.4",
                            list: [{
                                    name: "Product J",
                                    text: "Neque quis est",
                                    sales: 41,
                                    color: "#f46a6a",
                                },
                                {
                                    name: "Product K",
                                    text: "Quis autem iure",
                                    sales: 74,
                                    color: "#34c38f",
                                },
                                {
                                    name: "Product L",
                                    text: "Sed aliquam mauris.",
                                    sales: 52,
                                    color: "#556ee6",
                                },
                            ],
                        }, ];
                        break;
                    default:
                        this.products = [{
                            title: "Product A",
                            amount: "$ 6385",
                            revenue: "0.6",
                            list: [{
                                    name: "Product A",
                                    text: "Neque quis est",
                                    sales: 37,
                                },
                                {
                                    name: "Product B",
                                    text: "Quis autem iure",
                                    sales: 72,
                                },
                                {
                                    name: "Product C",
                                    text: "Sed aliquam mauris.",
                                    sales: 54,
                                },
                            ],
                        }, ];
                        break;
                }
            },
        },
    };

</script>

<template>
    <div class="card">
        <div class="card-body">
            <div class="d-flex flex-wrap">
                <h5 class="card-title mb-3 me-2">Loaners</h5>
                <div class="dropdown b-dropdown ms-auto btn-group" id="__BVID__7950">
                   <button aria-haspopup="true" aria-expanded="false" type="button"
                        class="btn dropdown-toggle btn-white text-muted font-size-16 p-0"
                        id="__BVID__7950__BV_toggle_"><i class="mdi mdi-dots-horizontal"></i></button>
                   
                </div>
            </div>
            <div class="d-flex flex-wrap">
                <div>
                    <p class="text-muted mb-1">Total Loans</p>
                    <h4 class="mb-3">10,512</h4>
                    <p class="text-success mb-0"><span>0.6 % <i class="mdi mdi-arrow-top-right ms-1"></i></span></p>
                </div>
                <div class="ms-auto align-self-end"><i class="bx bx-group display-4 text-light"></i></div>
            </div>
        </div>
    </div>
    <div class="card mt-n2">
        <div class="card-body">
            <div class="clearfix">
                <div class="float-end">
                    <div class="input-group input-group-sm">
                        <select class="form-select form-select-sm" @click="productSelling($event)">
                            <option value="january" selected>Jan</option>
                            <option value="december">Dec</option>
                            <option value="november">Nov</option>
                            <option value="october">Oct</option>
                        </select>
                        <label class="input-group-text">Month</label>
                    </div>
                </div>
                <h4 class="card-title mb-4">Top Region</h4>
            </div>
            <div v-for="(data, index) of products" :key="index">


                <div class="table-responsive mt-4">
                    <table class="table align-middle mb-0">
                        <tbody>
                            <tr v-for="(item, index) of data.list" :key="index">
                                <td>
                                    <h5 class="font-size-14 mb-1">{{ item.name }}</h5>
                                    <p class="text-muted mb-0">{{ item.text }}</p>
                                </td>
                                <td>
                                    <Sellingchart :seriesvalue="item.sales" :Chartcolor="item.color" />
                                </td>
                                <td>
                                    <p class="text-muted mb-1">Converted</p>
                                    <h5 class="mb-0">{{ item.sales }} %</h5>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</template>
