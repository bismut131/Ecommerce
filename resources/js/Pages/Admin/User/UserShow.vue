<template>
    <div class="flex">
        <Link :href="route('admin.user.index')"
        >
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 15L3 9m0 0l6-6M3 9h12a6 6 0 010 12h-3" />
            </svg>
        </Link>
        <div class="sm:grid sm:grid-cols-2 gap-x-20 gap-y-10 sm:gap-y-3 flex flex-col h-full justify-around bg-white sm:max-w-7xl rounded-2xl p-10 mx-auto">
            <div>
                <p class="text-xl">
                    Profile Information
                </p>
                <p class="text-gray-400">
                    Update your account's profile information and email address.
                </p>
                <form @submit.prevent="userForm.put(route('admin.user.update', user.id))" class="mt-6 space-y-6">
                    <div class="mt-3">
                        <InputLabel for="name" value="Name" />

                        <TextInput
                            id="name"
                            type="text"
                            class="mt-1 block w-full"
                            v-model="userForm.name"
                            required
                            autocomplete="permission"
                        />

                        <InputError class="mt-2" :message="userForm.errors.permission" />
                    </div>
                    <div class="mt-3">
                        <InputLabel for="email" value="Email" />

                        <TextInput
                            id="email"
                            type="email"
                            class="mt-1 block w-full"
                            v-model="userForm.email"
                            required
                            autocomplete="username"
                        />

                        <InputError class="mt-2" :message="userForm.errors.email" />
                    </div>

                    <div class="mt-3">
                        <InputLabel for="role" value="Role" />

                        <TextInput
                            id="role"
                            type="text"
                            class="mt-1 block w-full"
                            v-model="userForm.role"
                            required
                            autocomplete="role"
                        />

                        <InputError class="mt-2" :message="userForm.errors.role" />
                    </div>

                    <div class="mt-3">
                        <InputLabel for="permission" value="Permission" />

                        <TextInput
                            id="permission"
                            type="text"
                            class="mt-1 block w-full"
                            v-model="userForm.permission"
                            required
                            autocomplete="permission"
                        />

                        <InputError class="mt-2" :message="userForm.errors.permission" />
                    </div>
                    <div class="flex justify-items-center justify-self-end">
                        <PrimaryButton :disabled="userForm.processing">Save</PrimaryButton>

                        <Transition enter-from-class="opacity-0" leave-to-class="opacity-0" class="transition ease-in-out">
                            <p v-if="userForm.recentlySuccessful" class="text-sm text-gray-600">Saved.</p>
                        </Transition>
                    </div>
                </form>
            </div>
            <div>
                <p class="text-xl">
                    Update Password
                </p>
                <p class="text-gray-400">
                    Ensure your account is using a long password to stay secure.
                </p>
                <form @submit.prevent="passwordForm.put(route('admin.user.password', user.id))" class="mt-6 space-y-6">
                    <div>
                        <InputLabel for="password" value="New Password" />

                        <TextInput
                            id="password"
                            ref="passwordInput"
                            v-model="passwordForm.password"
                            type="password"
                            class="mt-1 block w-full"
                            autocomplete="new-password"
                        />

                        <InputError :message="passwordForm.errors.password" class="mt-2" />
                    </div>

                    <div>
                        <InputLabel for="password_confirmation" value="Confirm Password" />

                        <TextInput
                            id="password_confirmation"
                            v-model="passwordForm.password_confirmation"
                            type="password"
                            class="mt-1 block w-full"
                            autocomplete="new-password"
                        />

                        <InputError :message="passwordForm.errors.password_confirmation" class="mt-2" />
                    </div>
                    <div class="col-span-2 justify-self-end">
                        <PrimaryButton :disabled="passwordForm.processing">Save</PrimaryButton>

                        <Transition enter-from-class="opacity-0" leave-to-class="opacity-0" class="transition ease-in-out">
                            <p v-if="passwordForm.recentlySuccessful" class="text-sm text-gray-600">Saved.</p>
                        </Transition>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
import AuthenticatedLayout from "@/Pages/Admin/Layouts/AuthenticatedLayout.vue";
import {Link, useForm} from "@inertiajs/vue3";
import InputLabel from "@/Pages/Admin/Components/InputLabel.vue";
import TextInput from "@/Pages/Admin/Components/TextInput.vue";
import InputError from "@/Pages/Admin/Components/InputError.vue";
import PrimaryButton from "@/Pages/Admin/Components/PrimaryButton.vue";
export default {
    layout: AuthenticatedLayout,

    props: {
        user: {
            type: Object,
            required: true
        }
    },

    data() {
        return {
            userForm: useForm({
                name: this.user.name,
                email: this.user.email,
                role: this.user.role,
                permission: this.user.permission,
                current_password: null
            }),
            passwordForm: useForm({
                current_password: null,
                password: null,
                password_confirmation: null,
            })
        }
    },

    components: {
        InputLabel,
        TextInput,
        InputError,
        PrimaryButton,
        Link
    }
}
</script>
