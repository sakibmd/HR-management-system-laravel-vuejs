import Axios from "axios"

export default {
    state: {
        getAllEmployees: [],
        getAllPendingEmployees: [],
        getAllRejectedEmployees: [],
        getUserProfileInfo: []
    },
    getters: {
        getAllEmployees(state) {
            return state.getAllEmployees
        },
        getAllPendingEmployees(state) {
            return state.getAllPendingEmployees
        },
        getAllRejectedEmployees(state) {
            return state.getAllRejectedEmployees
        },
        getUserProfileInfo(state) {
            return state.getUserProfileInfo
        },
    },
    actions: {
        getAllEmployees(context) {
            axios.get('/admin/all-employees')
                .then((response) => {
                    context.commit('allEmployees', response.data.allEmployees)

                })
        },
        getAllPendingEmployees(context) {
            axios.get('/admin/all-pending-employees')
                .then((response) => {
                    context.commit('allPendingEmployees', response.data.allPendingEmployees)

                })
        }, 
        getAllRejectedEmployees(context) {
            axios.get('/admin/all-rejected-employees')
                .then((response) => {
                    context.commit('getAllRejectedEmployees', response.data.allRejectedEmployees)

                })
        },

        getUserProfileInfo(context) {
            axios.get('/user/user-details')
                .then((response) => {
                    context.commit('getUserProfileInfo', response.data.userdetails)

                })
        },
    },
    mutations: {
        allEmployees(state, date) {
            return state.getAllEmployees = date
        },
        allPendingEmployees(state, date) {
            return state.getAllPendingEmployees = date
        },
        getAllRejectedEmployees(state, date) {
            return state.getAllRejectedEmployees = date
        },
        getUserProfileInfo(state, date) {
            return state.getUserProfileInfo = date
        },
    },

}
