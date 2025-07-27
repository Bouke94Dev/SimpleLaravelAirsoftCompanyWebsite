import Alpine from 'alpinejs'

if (!window.Alpine.running) {
  Alpine.start();
  window.Alpine.running = true;
}