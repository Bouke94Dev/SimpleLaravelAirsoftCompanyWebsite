import { route } from 'ziggy-js';


// because we use dataset we need to get an element and this element is only loaded once dom is ready

document.addEventListener('DOMContentLoaded', () => {
        // default set view to amsterdam
        const mapDiv = document.getElementById('map');
        if (!mapDiv) return;

        const locationId = mapDiv.dataset.locationId;
        const map = L.map('map').setView([52.370216, 4.895168], 6);
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; OpenStreetMap contributors'
        }).addTo(map);

        // use ziggy for the routing because I do not want harcoded urls
        const url = route('sites.locations.show', { id: locationId });

        fetch(url)
            .then(response => response.json())
            .then(data => {
                const layer = L.geoJSON(data, {
                    onEachFeature: function (feature, layer) {
                        if (feature.properties && feature.properties.name) {
                            layer.bindPopup(feature.properties.name);
                        }
                    }
                }).addTo(map);

                // Zoom naar de marker
                map.fitBounds(layer.getBounds());
            });
});