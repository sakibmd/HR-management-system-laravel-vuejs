import Axios from "axios"

export default {
    state: {
        getAllEmployees: [],
        getAllPendingEmployees: [],
        getAllRejectedEmployees: []
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
    },

}
