<x-layout>
    <x-page-heading>New Job</x-page-heading>

    <x-forms.form method="POST" action="/jobs">
        <x-forms.input label="Title" name="title" required />
        <x-forms.input label="Salary" name="salary" required />
        <x-forms.input label="Location" name="location" required />

        <x-forms.select label="Schedule" name="schedule">
            {{-- <option value="full-time">Full Time</option>
            <option value="part-time">Part Time</option> --}}
            <option>Full Time</option>
            <option>Part Time</option>
        </x-forms.select>

        <x-forms.input label="URL" name="url" />

        <x-forms.checkbox label="feature (Costs Extra)" name="featured"/>

        <x-forms.divider />

        <x-forms.input label="Tags (comma separated)" name="tags" />

        <x-forms.button>Publish</x-forms.button>

    </x-forms.form>
</x-layout>
