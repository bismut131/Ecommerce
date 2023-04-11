<template>
    <div class="flex">
        <Link :href="route('admin.user.index')"
        >
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                 class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 15L3 9m0 0l6-6M3 9h12a6 6 0 010 12h-3"/>
            </svg>
        </Link>
        <form @submit.prevent="form.post(route('admin.user.store'))"
              class="sm:max-w-lg bg-white p-7 rounded-2xl grow mx-auto mt-5 space-y-6">
            <p class="text-xl">Add a new user</p>
            <div class="mt-3">
                <InputLabel for="name" value="Name"/>

                <TextInput
                    id="name"
                    type="text"
                    class="mt-1 block w-full"
                    v-model="form.name"
                    required
                    autocomplete="permission"
                />

                <InputError class="mt-2" :message="form.errors.permission"/>
            </div>
            <div class="mt-3">
                <InputLabel for="email" value="Email"/>

                <TextInput
                    id="email"
                    type="email"
                    class="mt-1 block w-full"
                    v-model="form.email"
                    required
                    autocomplete="username"
                />

                <InputError class="mt-2" :message="form.errors.email"/>
            </div>

            <div class="mt-3">
                <InputLabel for="role" value="Role"/>

                <TextInput
                    id="role"
                    type="text"
                    class="mt-1 block w-full"
                    v-model="form.role"
                    required
                    autocomplete="role"
                />

                <InputError class="mt-2" :message="form.errors.role"/>
            </div>

            <div class="mt-3">
                <InputLabel for="permission" value="Permission"/>

                <TextInput
                    id="permission"
                    type="text"
                    class="mt-1 block w-full"
                    v-model="form.permission"
                    required
                    autocomplete="permission"
                />

                <InputError class="mt-2" :message="form.errors.permission"/>
            </div>
            <div>
                <InputLabel for="password" value="Password"/>

                <TextInput
                    id="password"
                    ref="passwordInput"
                    v-model="form.password"
                    type="password"
                    class="mt-1 block w-full"
                    autocomplete="password"
                />

                <InputError :message="form.errors.password" class="mt-2"/>
            </div>

            <div>
                <InputLabel for="password_confirmation" value="Confirm Password"/>

                <TextInput
                    id="password_confirmation"
                    v-model="form.password_confirmation"
                    type="password"
                    class="mt-1 block w-full"
                    autocomplete="new-password"
                />

                <InputError :message="form.errors.password_confirmation" class="mt-2"/>
            </div>
            <div class="col-span-2 justify-self-end">
                <PrimaryButton :disabled="form.processing">Save</PrimaryButton>

                <Transition enter-from-class="opacity-0" leave-to-class="opacity-0" class="transition ease-in-out">
                    <p v-if="form.recentlySuccessful" class="text-sm text-gray-600">Saved.</p>
                </Transition>
            </div>
        </form>
    </div>
</template>

<script>
import InputLabel from "@/Pages/Admin/Components/InputLabel.vue";
import TextInput from "@/Pages/Admin/Components/TextInput.vue";
import InputError from "@/Pages/Admin/Components/InputError.vue";
import PrimaryButton from "@/Pages/Admin/Components/PrimaryButton.vue";
import {useForm, Link} from "@inertiajs/vue3";
import AuthenticatedLayout from "@/Pages/Admin/Layouts/AuthenticatedLayout.vue";

export default {
    layout: AuthenticatedLayout,

    data() {
        return {
            form: useForm({
                name: null,
                email: null,
                role: null,
                permission: null,
                password: null,
                password_confirmation: null
            })
        }
    },
    components: {PrimaryButton, InputError, TextInput, InputLabel, Link}
}
</script>
