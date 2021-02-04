<template>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="card p-2 m-2">
          <h4 class="text-center my-2">Employee Details</h4>

          <h4
            class="bg-info text-white text-center p-2 m-2"
            v-if="getApprovedEmployeeDetails == null"
          >
            No details found! Please add his/her details
          </h4>
          <table class="table table-bordered" v-else>
            <tr>
              <th>Name</th>
              <td>{{ getApprovedEmployeeDetails.user_name }}</td>
            </tr>
            <tr>
              <th>Joining Date</th>
              <td>{{ getApprovedEmployeeDetails.joining_date }}</td>
            </tr>
            <tr>
              <th>Position</th>
              <td>{{ getApprovedEmployeeDetails.position }}</td>
            </tr>
            <tr>
              <th>Absents</th>
              <td>{{ getApprovedEmployeeDetails.absents }}</td>
            </tr>
            <tr>
              <th>Salaries</th>
              <td>{{ getApprovedEmployeeDetails.salaries }}</td>
            </tr>
            <tr>
              <th>Working Hour Per Day</th>
              <td>{{ getApprovedEmployeeDetails.working_hour_per_day }}</td>
            </tr>
            <tr>
              <th>Leave</th>
              <td>{{ getApprovedEmployeeDetails.leave }}</td>
            </tr>
            <tr>
                 <router-link
                  class="btn btn-danger btn-sm m-1"
                  :to="`/all-employees`"
                  >Back</router-link
                >
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
</template>




<script>
export default {
  name: "EmployeeDetails",
  mounted() {
    this.$store.dispatch("getApprovedEmployeeDetails", this.$route.params.id);
  },
  computed: {
    getApprovedEmployeeDetails() {
      return this.$store.getters.getApprovedEmployeeDetails;
    },
  },
  methods: {
    showImage(img) {
      return "/uploadimage/" + img;
    },
  },
};
</script>