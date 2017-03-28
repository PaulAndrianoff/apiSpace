jQuery(document).ready(function () {
    jQuery('#vmap').vectorMap({
        map: 'world_en',
        backgroundColor: '#333333', // couleur bg
        color: '#ffffff', // couleur des pays en blanc
        hoverOpacity: 0.7,
        selectedColor: '#666666', // couleur quand un pays est selectionne
        enableZoom: true,
        showTooltip: true,
        scaleColors: ['#C8EEFF', '#006491'], // nuancier de couleur utiliser pour les pays fais un degrade
        values: sample_data,
        normalizeFunction: 'polynomial'

    });
});