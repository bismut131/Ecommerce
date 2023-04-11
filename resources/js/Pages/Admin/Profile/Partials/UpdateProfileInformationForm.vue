<template>
    <section>
        <header>
            <h2 class="text-lg font-medium text-gray-900">Profile Information</h2>

            <p class="mt-1 text-sm text-gray-600">
                Update your account's profile information and email address.
            </p>
        </header>

        <form @submit.prevent="form.patch(route('admin.profile.update'))" class="mt-6 space-y-6">
            <div>
                <InputLabel for="name" value="Name" />

                <TextInput
                    id="name"
                    type="text"
                    class="mt-1 block w-full"
                    v-model="form.name"
                    required
                    autofocus
                    autocomplete="name"
                />

                <InputError class="mt-2" :message="form.errors.name" />
            </div>

            <div>
                <InputLabel for="email" value="Email" />

                <TextInput
                    id="email"
                    type="email"
                    class="mt-1 block w-full"
                    v-model="form.email"
                    required
                    autocomplete="username"
                />

                <InputError class="mt-2" :message="form.errors.email" />
            </div>

            <div>
                <InputLabel for="role" value="Role" />

                <TextInput
                    id="role"
                    type="text"
                    class="mt-1 block w-full"
                    v-model="form.role"
                    required
                    autocomplete="role"
                />

                <InputError class="mt-2" :message="form.errors.role" />
            </div>

            <div>
                <InputLabel for="permission" value="Permission" />

                <TextInput
                    id="role"
                    type="text"
                    class="mt-1 block w-full"
                    v-model="form.permission"
                    required
                    autocomplete="permission"
                />

                <InputError class="mt-2" :message="form.errors.permission" />
            </div>

            <div class="flex items-center gap-4">
                <PrimaryButton :disabled="form.processing">Save</PrimaryButton>

                <Transition enter-from-class="opacity-0" leave-to-class="opacity-0" class="transition ease-in-out">
                    <p v-if="form.recentlySuccessful" class="text-sm text-gray-600">Saved.</p>
                </Transition>
            </div>
        </form>
    </section>
</template>

<script>
import InputError from '@/Pages/Admin/Components/InputError.vue';
import InputLabel from '@/Pages/Admin/Components/InputLabel.vue';
import PrimaryButton from '@/Pages/Admin/Components/PrimaryButton.vue';
import TextInput from '@/Pages/Admin/Components/TextInput.vue';
import { useForm, usePage } from '@inertiajs/vue3';

export default {
    data() {
        return {
            form: useForm({
                name: usePage().props.auth.user.name,
                email: usePage().props.auth.user.email,
                role: usePage().props.auth.user.role,
                permission: usePage().props.auth.user.permission
            }),
        }
    },

    components: {
        InputError,
        InputLabel,
        PrimaryButton,
        TextInput
    }
}
</script>
