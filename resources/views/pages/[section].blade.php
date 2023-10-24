<x-app.layout :title="'Daisy Components - ' . $section">
    @includeFirst(["sections.{$section}", 'partials.component-not-found'])
</x-app.layout>
