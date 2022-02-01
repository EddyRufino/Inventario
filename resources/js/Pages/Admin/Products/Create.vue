<template>
    <Head title="Lista de Productos" />

    <div class="w-full max-w-xs m-auto mt-4">

        <ValidationErrors class="mb-4" />

        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" @submit.prevent="submit">
            <div class="mb-4">
                <Label class="block text-gray-700 text-sm font-bold mb-2" for="email" value="Email" />
                <Input id="email" type="email" v-model="form.email" required autofocus autocomplete="username" placeholder="Nombre" />
            </div>
            
            <div class="mb-4">
                <Label class="block text-gray-700 text-sm font-bold mb-2" for="email" value="Email" />
                <Input id="email" type="email" v-model="form.email" required autofocus autocomplete="username" placeholder="Nombre" />
            </div>

            <div class="mb-4">
                <Label class="block text-gray-700 text-sm font-bold mb-2" for="Country" value="Country" />
                <Select v-model="form.country" class="">
                    <option :value="null" />
                    <option value="CA">Canada</option>
                    <option value="US">United States</option>
                </Select>
            </div>

            <div class="flex items-center justify-between">
                <Button :class="{ 'opacity-25': form.processing }" :disabled="form.processing">Sign In</Button>
                <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="#">
                    Forgot Password?
                </a>
            </div>
        </form>
    </div>
</template>

<script>
import Button from '@/Components/Button.vue'
import Input from '@/Components/Input.vue'
import Label from '@/Components/Label.vue'
import Select from '@/Components/Select.vue'
import ValidationErrors from '@/Components/ValidationErrors.vue'

export default {

    components: {
        Button,
        Input,
        Label,
        Select,
        ValidationErrors,
    },

    data() {
        return {
            form: this.$inertia.form({
                email: '',
                password: '',
                country: '',
                remember: false
            })
        }
    },
}
</script>