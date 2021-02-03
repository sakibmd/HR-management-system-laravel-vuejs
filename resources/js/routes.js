import AdminHome from "./components/admin/AdminHome.vue"
import PendingEmployee from "./components/admin/PendingEmployee.vue"
import AllEmployees from "./components/admin/AllEmployees.vue"
import RejectedEmployees from "./components/admin/RejectedEmployees.vue"
import EditEmployees from "./components/admin/EditEmployees.vue"


export const routes = [
    {
        path:'/adminhome',
        component: AdminHome
    },
    {
        path:'/pending-employees',
        component: PendingEmployee
    },
    {
        path:'/all-employees',
        component: AllEmployees
    },
    {
        path:'/rejected-employees',
        component: RejectedEmployees
    },
    {
        path:'/edit-employee/:id',
        component: EditEmployees
    },
];