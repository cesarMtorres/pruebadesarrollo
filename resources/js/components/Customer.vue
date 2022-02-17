<template>
    <div>
        <h3 class="text-center">Edit customer</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="updatecustomer">
                    <div class="form-group">
                        <label>Company Name</label>
                        <input type="text" class="form-control" v-model="customer.companyName">
                    </div>
                    <div class="form-group">
                        <label>Contac Name</label>
                        <input type="text" class="form-control" v-model="customer.contactName">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                customer: {}
            }
        },
        created() {
            this.axios
                .get(`http://localhost:8000/api/customers/${this.$route.params.id}`)
                .then((res) => {
                    this.customer = res.data;
                });
        },
        methods: {
            updateCustomer() {
                this.axios
                    .patch(`http://localhost:8000/api/customers/${this.$route.params.id}`, this.customer)
                    .then((res) => {
                        this.$router.push({ name: 'home' });
                    });
            }
        }
    }
</script>
