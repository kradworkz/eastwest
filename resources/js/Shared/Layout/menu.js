export const menuItems = [{
        id: 1,
        label: "Menu",
        isTitle: true,
        user: [],
    },
    {
        id: 2,
        label: "Home",
        icon: "bx-home-circle",
        link: "/home",
        component: "Home/Index",
        name: "Home",
        user: [],
    },
    {
        id: 3,
        label: "Employees",
        icon: "bxs-face",
        link: "/employees",
        component: "Employees/Index",
        name: "Employees",
        user: ['Super Administrator'],
    },
    {
        id: 3,
        label: "Schools",
        icon: "bxs-school",
        link: "/schools",
        component: "Schools/Index",
        name: "Schools",
        user: ['Super Administrator'],
    }
];