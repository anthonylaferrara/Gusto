$(function () {
    $('#belgium_map').vectorMap({
        map: 'be_mill',
        backgroundColor: 'transparent',
        zoomButtons: false,
        regionStyle: {
            initial: {
                fill: 'rgb(113, 114, 110)',
                stroke: "beige",
                "stroke-width": 2,
                "stroke-opacity": 1
            },
            hover: {
                fill: "rgba(184, 175, 166, 1)"
            }
        }
    });
})