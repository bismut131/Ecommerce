<template>
    <Head title="Log in"/>

    <form @submit.prevent="submit">
        <div>
            <InputLabel for="email" value="Email"/>

            <TextInput
                id="email"
                type="email"
                class="mt-1 block w-full"
                v-model="form.email"
                required
                autofocus
                autocomplete="username"
            />
        </div>

        <div class="mt-4">
            <InputLabel for="password" value="Password"/>

            <TextInput
                id="password"
                type="password"
                class="mt-1 block w-full"
                v-model="form.password"
                required
                autocomplete="current-password"
            />

            <InputError class="mt-2" :message="form.errors.password"/>
        </div>

        <InputError class="mt-3" :message="form.errors.email"/>

        <div class="flex justify-between justify-items-center mt-3">
            <div class="self-center">
                <label class="flex">
                    <Checkbox name="remember" v-model:checked="form.remember"/>
                    <span class="ml-2 text-sm text-gray-600">Remember me</span>
                </label>
            </div>
            <PrimaryButton class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                Log in
            </PrimaryButton>
        </div>
    </form>
</template>

<script>
import Checkbox from '@/Pages/Admin/Components/Checkbox.vue';
import InputError from '@/Pages/Admin/Components/InputError.vue';
import InputLabel from '@/Pages/Admin/Components/InputLabel.vue';
import TextInput from '@/Pages/Admin/Components/TextInput.vue';
import PrimaryButton from "@/Pages/Admin/Components/PrimaryButton.vue";
import {useForm, Head} from '@inertiajs/vue3';
import GuestLayout from "@/Pages/Admin/Layouts/GuestLayout.vue";

export default {
    layout: GuestLayout,

    data() {
        return {
            form: useForm({
                email: '',
                password: '',
                remember: false,
            }),
        }
    },

    methods: {
        submit() {
            this.form.post('/admin/login', {
                onFinish: () => this.form.reset('password')
            })
        }
    },

    components: {
        Checkbox,
        InputError,
        InputLabel,
        TextInput,
        PrimaryButton,
        Head
    }
}
</script>
