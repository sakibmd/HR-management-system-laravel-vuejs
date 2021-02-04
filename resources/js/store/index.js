import Axios from "axios"

export default {
    state: {
        getAllEmployees: [],
        getAllPendingEmployees: [],
        getAllRejectedEmployees: [],
        getUserProfileInfo: [],
        getApprovedEmployeeDetails: [],
        getOurTeam: [],
        getTopFiveEmployees: []
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
        getApprovedEmployeeDetails(state) {
            return state.getApprovedEmployeeDetails
        },
        getOurTeam(state) {
            return state.getOurTeam;
        },
        getTopFiveEmployees(state) {
            return state.getTopFiveEmployees;
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

     

        getApprovedEmployeeDetails(context, payload) {
            axios.get('/admin/approved-employee-details-info/' + payload)
                .then((response) => {
                    context.commit('getApprovedEmployeeDetails', response.data.approvedEmployee)
                })
        },

        getOurTeam(context) {
            axios.get('/admin/our-team/')
                .then((response) => {
                    context.commit('getOurTeam', response.data.getOurTeam)
                })
        },

        getTopFiveEmployees(context) {
            axios.get('/admin/top-five-employees/')
                .then((response) => {
                    context.commit('getTopFiveEmployees', response.data.getTopFive)
                })
        },


    },
    mutations: {
        allEmployees(state, data) {
            return state.getAllEmployees = data
        },
        allPendingEmployees(state, data) {
            return state.getAllPendingEmployees = data
        },
        getAllRejectedEmployees(state, data) {
            return state.getAllRejectedEmployees = data
        },
        getUserProfileInfo(state, data) {
            return state.getUserProfileInfo = data
        },
        getApprovedEmployeeDetails(state, data) {
            return state.getApprovedEmployeeDetails = data
        },

        getOurTeam(state, data) {
            return state.getOurTeam = data
        },

        getTopFiveEmployees(state, data) {
            return state.getTopFiveEmployees = data
        },

        
    },

}
