import Alpine from 'alpinejs';
import intersect from '@alpinejs/intersect';
import focus from '@alpinejs/focus';


window.Alpine = Alpine;
Alpine.plugin(focus);
Alpine.plugin(intersect);

Alpine.store('navOpen', false);

Alpine.start();
