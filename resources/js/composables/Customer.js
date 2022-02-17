import { ref } from 'vue'
import axios from 'axios'
import { useRouter } from 'vue-router'

export default function useCustomer() {
    const customer = ref([])
    const customers = ref([])

    const errors = ref('')
    const router = useRouter()

    const getCustomers = async () => {
        let response = await axios.get('/api/customers')
        customers.value = response.data.data
    }

    const getCustomer = async (id) => {
        let response = await axios.get(`/api/customers/${id}`)
        customer.value = response.data.data
    }

    const updateCustomer = async (id) => {
        errors.value = ''
        try {
            await axios.patch(`/api/customers/${id}`, customer.value)
            await router.push({ name: 'customers.index' })
        } catch (e) {
            if (e.response.status === 422) {
                for (const key in e.response.data.errors) {
                    errors.value += e.response.data.errors[key][0] + ' ';
                }
            }
        }
    }

    return {
        errors,
        customer,
        customers,
        getCustomer,
        getCustomers,
        updateCustomer
    }
}
