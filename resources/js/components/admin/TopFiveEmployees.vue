<template>
  <div class="container">
    <h3 class="title">Top 5 Employees</h3>

    <div class="row">
      <table class="table table-bordered table-hover">
        <thead>
          <tr>
            <th>Name</th>
            <th>Salary</th>
            <th>Working Hour Per Day</th>
            <th>Leave</th>
            <th>Absents</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="(employee, index) in getTopFiveEmployees" :key="index">
            <td>{{ employee.user_name }}</td>
            <td>{{ employee.salaries }}</td>
            <td>{{ employee.working_hour_per_day }}</td>
            <td>{{ employee.leave }}</td>
            <td>{{ employee.absents }}</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</template>

<script>
export default {
  name: "TopFiveEmployees",
  data() {
    return {};
  },
  mounted() {
    this.$store.dispatch("getTopFiveEmployees");
  },
  computed: {
    getTopFiveEmployees() {
      return this.$store.getters.getTopFiveEmployees;
    },
  },
  methods: {},
};
</script>

<style scoped>
.title {
  text-align: center;
  margin: 20px 0px;
  font-weight: 800;
}
</style>