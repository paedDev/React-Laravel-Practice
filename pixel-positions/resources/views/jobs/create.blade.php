<x-layout>
    <x-page-heading>
        Create New Job
    </x-page-heading>

    <form action="/jobs" method="POST" class="space-y-4">
        @csrf
        <x-forms.fields>
            <x-forms.label name="title" label="Title" />
            <x-forms.input type="text" name="title" placeholder="IT Support" />
            <x-forms.error name="title" />
        </x-forms.fields>

        <x-forms.fields>
            <x-forms.label name="salary" label="Salary" />
            <x-forms.input type="text" name="salary" placeholder="$20,400" />
            <x-forms.error name="salary" />
        </x-forms.fields>

        <x-forms.fields>
            <x-forms.label name="location" label="Location" />
            <x-forms.input type="text" name="location" placeholder="Manila" />
            <x-forms.error name="location" />
        </x-forms.fields>


        <x-forms.label name="schedule" label="Schedule" />
        <select name="schedule" class="rounded-xl bg-white/10 border border-white/10 px-5 py-4 w-full">
            <option value="Part Time" class="text-gray-400">Part Time</option>
            <option value="Full Time" class="text-gray-400">Full Time</option>
            <x-forms.error name="schedule" />
        </select>

        <x-forms.fields>
            <x-forms.label name="url" label="URL" />
            <x-forms.input name="url" placeholder="https://acne.com/jobs/ceo-wanted" />
            <x-forms.error name="url" />
        </x-forms.fields>
        <x-forms.fields>
            <x-forms.label name="featured" label="Feature (Costs Extra)" />
            <div class="flex items-center space-x-2 rounded-xl bg-white/10 border border-white/10 px-5 py-4 w-full">
                <input type="checkbox" name="featured" value="Feature(Cost Extra)">
                <label for="featured">Feature (Costs Extra)</label>
            </div>

            <x-forms.error name="featured" />
        </x-forms.fields>
        <x-forms.divider />
        <x-forms.fields>
            <x-forms.label name="tags" label="Tags(comma separated)" />
            <x-forms.input name="tags" placeholder="Laracast, video, education" />
            <x-forms.error name="tags" />
        </x-forms.fields>

        <div class="space-x-2 mt-2">
            <x-forms.button>
                Publish
            </x-forms.button>
            <a href="/" class="px-6 py-2 bg-gray-200 rounded-lg text-black inline-block">
                Cancel
            </a>
        </div>

        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

    </form>
</x-layout>
