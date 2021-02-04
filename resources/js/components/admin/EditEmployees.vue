<template>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Edit Employees</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form  @submit.prevent="updateEmployee()">
            <div class="card-body">
              <div class="form-group">
                <label for="joining_date">Joining Date</label>
                <input
                  type="date"
                  id="joining_date"
                  class="form-control"
                  v-model="form.joining_date"
                  name="joining_date"
                  :class="{
                    'is-invalid': form.errors.has('joining_date'),
                  }"
                />
                <has-error :form="form" field="joining_date"></has-error>
              </div>

              <div class="form-group">
                <label for="position">Position</label>
                <input
                  type="text"
                  id="position"
                  class="form-control"
                  placeholder="position"
                  v-model="form.position"
                  name="position"
                  :class="{
                    'is-invalid': form.errors.has('position'),
                  }"
                />
                <has-error :form="form" field="position"></has-error>
              </div>

              <div class="form-group">
                <label for="absents">Absents</label>
                <input
                  type="text"
                  id="absents"
                  class="form-control"
                  placeholder="absents"
                  v-model="form.absents"
                  name="absents"
                  :class="{
                    'is-invalid': form.errors.has('absents'),
                  }"
                />
                <has-error :form="form" field="absents"></has-error>
              </div>

              <div class="form-group">
                <label for="salaries">Salaries</label>
                <input
                  type="text"
                  class="form-control"
                  id="salaries"
                  placeholder="salaries"
                  v-model="form.salaries"
                  name="salaries"
                  :class="{
                    'is-invalid': form.errors.has('salaries'),
                  }"
                />
                <has-error :form="form" field="salaries"></has-error>
              </div>

              <div class="form-group">
                <label for="leave">Leave</label>
                <input
                  type="text"
                  class="form-control"
                  id="leave"
                  placeholder="leave"
                  v-model="form.leave"
                  name="leave"
                  :class="{
                    'is-invalid': form.errors.has('leave'),
                  }"
                />
                <has-error :form="form" field="leave"></has-error>
              </div>

              <div class="form-group">
                <label for="working_hour_per_day">Working Hour per day</label>
                <input
                  type="text"
                  class="form-control"
                  id="working_hour_per_day"
                  placeholder="working_hour_per_day"
                  v-model="form.working_hour_per_day"
                  name="working_hour_per_day"
                  :class="{
                    'is-invalid': form.errors.has('working_hour_per_day'),
                  }"
                />
                <has-error
                  :form="form"
                  field="working_hour_per_day"
                ></has-error>
              </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
               <router-link
                  class="btn btn-danger btn-sm m-1"
                  :to="`/all-employees`"
                  >Back</router-link
                >
              <button type="submit" class="btn btn-primary btn-sm">Update</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  name: "EditEmployees",
  mounted() {
    axios
      .get(`/admin/editemployees/${this.$route.params.id}`)
      .then((response) => {
        this.form.fill(response.data.employee);
        //console.log(response.data.category)
      });
  },
  data() {
    return {
      form: new Form({
        joining_date: "",
        absents: "",
        position: "",
        salaries: "",
        leave: "",
        working_hour_per_day: "",
      }),
    };
  },
  methods: {
    updateEmployee() {
      this.form
        .post(`/admin/update-employee/${this.$route.params.id}`)
        .then((response) => {
          this.$router.push("/all-employees");
          Toast.fire({
            icon: "success",
            title: "Employee updated successfully",
          });
        });
    },
  },
};
</script>
