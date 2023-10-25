<x-app.layout :title="'Daisy Components - ' . $section" :subtitle="str($section)->title()">
    @includeFirst(["sections.{$section}", 'partials.component-not-found'])
</x-app.layout>
