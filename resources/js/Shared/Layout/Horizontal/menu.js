export const menuItems = [{
    id: 1,
    label: "Home",
    icon: "bx-home",
    color: "text-warning",
    link: "/",
    component: "Welcome",
    name: "Welcome",
    user: ['Cluster Leader', 'Group Leader', 'Team Leader'],
}, {
    id: 10,
    label: "Users",
    icon: "bxs-group",
    color: "text-success",
    link: "/users",
    component: "Modules/User/Index",
    name: "Modules/User/Index",
    user: ['Cluster Leader', 'Group Leader', 'Team Leader'],
}, {
    id: 22,
    label: "Teachers",
    icon: "bx-user-circle",
    color: "text-primary",
    link: "/teachers",
    component: "Modules/Teachers/Index",
    name: "Modules/Teachers/Index",
    user: ['Loan Specialist'],
}, {
    id: 23,
    label: "Converted",
    icon: "bxs-notepad",
    color: "text-success",
    link: "/converted",
    component: "Modules/Converted/Index",
    name: "Modules/Converted/Index",
    user: ['Loan Specialist'],
}, {
    id: 2,
    label: "Schools",
    icon: "bxs-school",
    color: "text-primary",
    link: "/schools",
    component: "Modules/Schools/Index",
    name: "Modules/Schools/Index",
    user: ['Cluster Leader'],
}];