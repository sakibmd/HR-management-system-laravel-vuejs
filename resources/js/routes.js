
// for admin
import AdminHome from "./components/admin/AdminHome.vue"
import PendingEmployee from "./components/admin/PendingEmployee.vue"
import AllEmployees from "./components/admin/AllEmployees.vue"
import RejectedEmployees from "./components/admin/RejectedEmployees.vue"
import EditEmployees from "./components/admin/EditEmployees.vue"

//for user
import EditProfile from "./components/user/EditProfile.vue"
import UserDetails from "./components/user/UserDetails.vue"


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


    //employee user
    {
        path:'/user-details/',
        component: UserDetails
    },
    {
        path:'/edit-profile/:id',
        component: EditProfile
    },
];